<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Pagamento;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\PagamentoRequest;
use App\Mensalidade;
use App\Turma;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PagamentoController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Aluno $aluno, Mensalidade $m){
        //nome do aluno
        // valor da mensalidade do aluno
        //quantas mensalidade foram pagas do total de mensalidades
        /* Obtendo a lista de alunos, valores de mensalidade e total de mensalidade pagas */
        $dados = $aluno->join('mensalidade', 'mensalidade.mes_alu_id', '=', 'aluno.id')
            ->join('turma', 'turma.id','=','aluno.alu_tur_id')
            ->distinct()
            ->get();

        //$alunos = $aluno->all()->lists('alu_nome','id')->sortByDesc('id')->toArray();
        $alunos = $aluno->all();
        //dd($alunos);
        $flag = array('acao'=>'listar');
        return view('pagamento.index',['dados'=>$dados, 'flag'=>$flag, 'alunos'=>$alunos]);
    }
    public function create(Aluno $a, Turma $t){
        $alunos = $a->all()->lists('alu_nome','id')->sortByDesc('id')->toArray();
        $totalDeAlunos = count($alunos);
        $turmas = $t->all()->lists('tur_nome','id')->sortByDesc('id')->toArray();
        $flag = array('acao'=>'cadastrar');
        return view('pagamento.create', ['turmas' => $turmas, 'alunos'=>$alunos, 'totalDeAlunos'=>$totalDeAlunos, 'flag'=>$flag]);

    }

    public function cadComprovante($idMensalidade, $idAluno){
        //recebo o id da mensalidade pelo request
        $mensalidade = Mensalidade::find($idMensalidade);
        $aluno = Aluno::find($idAluno);
        //passo os dados da mensalidade escolhida para a view de cadastro de comprovante de pagto
        return view('pagamento.comprovante', ['mensalidade'=>$mensalidade, 'aluno'=>$aluno]);
    }

    public function store(PagamentoRequest $request, Pagamento $p, Mensalidade $m){
        /* transformando a data: dd/mm/yyyy para: yyyy-mm-dd */
        $dta = explode("/", $request->data_pagto);
        $dia = $dta[0];
        $mes = $dta[1];
        $ano = $dta[2];
        $data_pagamento = Carbon::create($ano, $mes, $dia);
        /* data de vencimento */
        $dta2 = explode("/", $request->data_venc);
        $diaVenc = $dta2[0];
        $mesVenc = $dta2[1];
        $anoVenc = $dta2[2];
        $data_vencimento = Carbon::create($anoVenc, $mesVenc, $diaVenc);

            $clone = self::verificaPagamentoClonado($p, $data_pagamento, $request->hora_pagto, $request->cod_barras_pagto );
            if($clone){
                //envia a mensagem para a tela e n�o salva
                //dd("� um clone. Pagamento CLONADO! ALERTA".$data_pagamento.$request->hora_pagto);
                $detalhes = self::detalhesPagamentoClonado($p, $data_pagamento, $request->hora_pagto, $request->cod_barras_pagto);
                foreach($detalhes as $item){
                    $pag_mes_id = $item->pag_mes_id;
                }
                //dd($pag_mes_id);
                $mensalidades = $m->find($pag_mes_id);

                $mes_id = $mensalidades->id;
                //dd($objAluno);
                return view('pagamento.clonado',['mensalidade'=>$mes_id, 'clonado'=>true]);
            }
            /* recebo o id da parcela a ser mudada o status */
			$p->pag_mes_id     = $request->idMensalidade;
			$p->pag_data       = $data_pagamento;
			$p->pag_hora       = $request->hora_pagto;
			$p->pag_lote       = $request->lote_pagto;
			$p->pag_terminal   = $request->terminal_pagto;
			$p->pag_cod_barras = $request->cod_barras_pagto;
			$p->pag_data_venc  = $data_vencimento;
			$p->pag_valor      = $request->valor_parcela;
			$p->save();
        //}

        /** Ap�s salvar o pagamento busca novamente as mensalidades do aluno no banco de dados para exibi-las atualizadas */
        $mensalidades = $m->join('aluno', function($join) {
            $join->on('mensalidade.mes_alu_id', '=', 'aluno.id');
            }) ->select('mensalidade.id AS cod', 'mensalidade.mes_num', 'mensalidade.mes_valor', 'mensalidade.mes_data_venc', 'mensalidade.mes_status')
            ->where('mes_alu_id', '=', $request->idAluno)
            ->get();
        $aluno = new Aluno();
        //$nomeAluno = $aluno->all()->where('alu_id',$request->aluno);
        $objAluno = DB::table('aluno')->where('id', '=', $request->idAluno)->first();

        //return view('pagamento.create',['mensalidades'=>$mensalidades, 'alunos'=>$objAluno, 'flag'=>$flag]);
        return view('pagamento.index',['mensalidades'=>$mensalidades, 'aluno'=>$objAluno, 'clonado'=>false]);
        //return var_dump($mensalidades);
    }

    public function show($id, Pagamento $p){
        //exibe os detalhes de um pagamento
        //$id � o id da mensalidade do aluno
        $idMensalidade = intval($id);
        $pagamento = $p->join('mensalidade', 'mensalidade.id', '=','pagamento.pag_mes_id' )
            ->where('pagamento.pag_mes_id', '=', $id)
            ->get()
            ->first();
        return view('pagamento.detalhes', ['pagamento' => $pagamento]);
        //return $pagamento;
    }

    public function showDetalhesClonado($id, Pagamento $p){
        $pagamento = $p->join('mensalidade', 'mensalidade.id', '=','pagamento.pag_mes_id' )
            ->join('aluno', 'aluno.id', '=', 'mensalidade.mes_alu_id')
            ->join('turma', 'turma.id', '=','aluno.alu_tur_id')
            ->select('pagamento.pag_data',
                'pagamento.pag_hora',
                'pagamento.pag_cod_barras',
                'pagamento.pag_data_venc',
                'pagamento.pag_valor',
                'mensalidade.mes_num',
                'aluno.alu_nome',
                'turma.tur_nome')
            ->where('pagamento.pag_mes_id', '=', $id)
            ->get()
            ->first();
        /*SELECT * FROM pagamento
        INNER JOIN mensalidade ON (mensalidade.id = pagamento.pag_mes_id)
        INNER JOIN aluno ON (aluno.id = mensalidade.mes_alu_id)
        INNER JOIN turma ON (turma.id = aluno.alu_tur_id)
        WHERE pagamento.pag_mes_id = 11*/
        return view('pagamento.clonadodetalhes', ['pagamento'=>$pagamento]);
    }

    public function listaMensalidadesAluno(Request $request, Mensalidade $m){
        //id do aluno
        $idAluno = $request->alunoNome;
        //pega os dados do aluno pelo id
        $objAluno = Aluno::find($idAluno);
        //pega as mensalidades dele
        $mensalidades = $m->join('aluno', function($join) {
            $join->on('mensalidade.mes_alu_id', '=', 'aluno.id');
        })
            ->where('mes_alu_id', '=', $request->alunoNome)
            ->select('mensalidade.id','mensalidade.mes_num', 'mensalidade.mes_valor', 'mensalidade.mes_data_venc', 'mensalidade.mes_status')
            ->orderBy('mensalidade.mes_data_venc', 'ASC')
            ->get();
        $flag = array('acao'=>'listar');
        return view('pagamento.create',['mensalidades'=>$mensalidades, 'alunos'=>$objAluno, 'flag'=>$flag]);
        //return view('mensalidade.index')
    }

    /**
     * Metodo da API de Alunos
     * @param model Aluno
     * @param request do form com o nome do aluno a ser buscado
     * @return lista de alunos
     */
    public function getJsonAlunosComParcelas(Aluno $alunos, Request $requests){
        if ($requests->has("term")){
            $result = $alunos->where("alu_nome", "like", "%" . $requests->term . "%")->get();
        } else {
            $result = $alunos->whereExists(function ($query) {
                $query->select(DB::raw(1))->from('mensalidade')
                    ->whereRaw('mensalidade.mes_alu_id = aluno.id');
            })->get();
            //$result = $alunos->all();
        }
//        dd($requests->term);
        $list = [];
        foreach($result as $key => $value){
            $list[$key]['id'] = $value->id;
            $list[$key]['text'] = $value->alu_nome;
        }
//        $teste = json_encode($list);
        //return "{ \"results\": " . json_encode($list) . "}";
//        return json_encode($list);
        return $list;
    }


    /** Metodos do DataTable */
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    //public function getBasic()
    {
        return view('pagamento.lista');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    //public function anyData(Aluno $aluno)
    public function getBasicData(Aluno $aluno)
    {
        $dados = $aluno->join('mensalidade', 'mensalidade.mes_alu_id', '=', 'aluno.id')
            ->join('turma', 'turma.id','=','aluno.alu_tur_id')
            ->select('aluno.alu_nome', 'mensalidade.mes_num', 'mensalidade.mes_valor', 'mensalidade.mes_status', 'turma.tur_nome')
            ->distinct()
            //->where('mensalidade.mes_num','=',1)
            ->orderBy('aluno.alu_nome', 'asc')
            ->get();
        //dd($dados);
        //return Datatables::of(Aluno::select('*'))->make(true);
        return Datatables::of($dados)->make(true);
    }

    public function verificaPagamentoClonado(Pagamento $p, $data, $hora, $cod_barras){
        $qry_cod_barras = $p->where("pag_cod_barras", "like", "%".$cod_barras."%")->get();
        $qry_data_hora  = $p->where( function($query) use ($data, $hora){
                              $query->where("pag_hora", "=", "$hora")
                                    ->where("pag_data", "=", "$data");
                            })
                            ->get();
        $testa_cod_barras = count($qry_cod_barras);
        $testa_data_hora  = count($qry_data_hora);

        if($testa_data_hora>0){
            return true;
        }else{
            if($testa_cod_barras) return true;
             return false;
        }
        //dd($v);

    }
    public function detalhesPagamentoClonado(Pagamento $p, $data, $hora, $cod_barras){
        $qry_cod_barras = $p->where("pag_cod_barras", "like", "%".$cod_barras."%")->get();
        $qry_data_hora  = $p->where( function($query) use ($data, $hora){
            $query->where("pag_hora", "=", "%".$hora."%")
                ->where("pag_data", "=", "%" . $data . "%");
        })
            ->get();
        $testa_cod_barras = count($qry_cod_barras);
        $testa_data_hora  = count($qry_data_hora);

        if($testa_data_hora>0){
            return $qry_data_hora;
        }else{
            if($testa_cod_barras)
            return $qry_cod_barras;
        }
        //dd($v);

    }
}
