<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MensalidadeRequest;
use App\Http\Controllers\Controller;
use App\Mensalidade;
use App\Aluno;
use Illuminate\Support\Facades\DB;

class MensalidadeController extends Controller
{
    //
    //
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(){
        return view('mensalidade.index');
    }
    public function create(){
        $a = new Mensalidade();
        $mensalidades = $a->all();
        $t = new Aluno();
        $alunos = $t->all()->lists('alu_nome','alu_id')->sortByDesc('alu_id')->toArray();
        $totalDeAlunos = count($alunos);
        return view('mensalidade.create', ['mensalidades' => $mensalidades, 'alunos'=>$alunos, 'totalDeAlunos'=>$totalDeAlunos, 'test'=>2]);

    }
    public function store(MensalidadeRequest $request, Mensalidade $m){
        //$m = new Mensalidade();
        $dataPrimeiroVenc = $request->dt_venc;//  dd/mm/yyyy
        $dta = explode("/", $dataPrimeiroVenc);
        $dia = $dta[0];
        $mes = $dta[1];
        $ano = $dta[2];
        $data_venc = Carbon::create($ano, $mes, $dia);
        $valor = $this->getfloat($request->valor);
        for($i=1;$i<=$request->num_parcelas;$i++){
            if($i==1){
                //primeiro vencimento
                $mes_data_venc = $data_venc;
            }else{
                $mes_data_venc = $data_venc->addMonth();
            }
            $m->mes_status    = $request->status;
            $m->insert(
                ['mes_alu_id'=>$request->aluno, 'mes_num'=>$i, 'mes_valor'=>$valor, 'mes_data_venc'=>$mes_data_venc, 'mes_status'=>$request->status, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
            );
        }
        $mensalidades = $m->join('aluno', function($join) {
                                $join->on('mensalidade.mes_alu_id', '=', 'aluno.id');
                            })
                        ->where('mes_alu_id', '=', $request->aluno)
                        ->get();
        $aluno = new Aluno();
        //$nomeAluno = $aluno->all()->where('alu_id',$request->aluno);
        $objAluno = DB::table('aluno')->where('id', '=', $request->aluno)->get();
        //return $nomeAluno;
        //return redirect()->route('mensalidades.lista', ['mensalidades'=>$mensalidades, 'aluno'=>$objAluno, 'test'=>1]);
        return view('mensalidade.index',['mensalidades'=>$mensalidades, 'aluno'=>$objAluno, 'test'=>1]);
        //return var_dump($mensalidades);

    }
    public function show($id){

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $mensalidade = Mensalidade::find($id);
        $alu_tur_id = $mensalidade->alu_tur_id;//id da turma do mensalidade
        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'id');
        return view('mensalidade.edit',['mensalidade'=>$mensalidade, 'turmas'=>$turmas, 'alu_tur_id'=>$alu_tur_id ]);
    }
    public function update(MensalidadeRequest $request, $id){
        $mensalidade = Mensalidade::find($id);
        $mensalidade->alu_tur_id = $request->turma;
        $mensalidade->alu_nome   = $request->nome;
        $mensalidade->alu_cpf    = $request->cpf;
        $mensalidade->alu_tel    = $request->telefone;
        $mensalidade->save();

        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'tur_id');
        $a = new Mensalidade();
        $mensalidades = $a->all();
        return view('mensalidade.create',['mensalidades'=>$mensalidades,'turmas'=>$turmas]);
    }
    public function destroy($id){
        $mensalidade = Mensalidade::find($id);
        $mensalidade->delete();

        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'tur_id');
        $a = new Mensalidade();
        $mensalidades = $a->all();
        return view('mensalidade.create',['mensalidades'=>$mensalidades,'turmas'=>$turmas]);
    }

    public function getJsonAlunos(Aluno $alunos, Request $requests){
        if ($requests->has("term")){
            $result = $alunos->where("alu_nome", "like", "%" . $requests->term . "%")->get();
        } else {
            $result = $alunos->whereNotExists(function ($query) {
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

    public function getfloat($str) {
        if(strstr($str, ",")) {
            $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs
            $str = str_replace(",", ".", $str); // replace ',' with '.'
        }

        if(preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.'
            return floatval($match[0]);
        } else {
            return floatval($str); // take some last chances with floatval
        }
    }


    /**
     * @param $id
     * @return lista de mensalidades do aluno
     */
    public function getMensalidadesAluno($id){
        $aluno = Aluno::find($id);
        //dd($aluno->mensalidades);
        return $aluno->mensalidades;
    }

}
















