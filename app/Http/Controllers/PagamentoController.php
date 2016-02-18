<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Mensalidade;
use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PagamentoController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Aluno $aluno, Mensalidade $mensalidade){
        //nome do aluno
        // valor da mensalidade do aluno
        //quantas mensalidade foram pagas do total de mensalidades
        /* Obtendo a lista de alunos, valores de mensalidade e total de mensalidade pagas */
        $dados = $aluno->join('mensalidade', 'mensalidade.mes_alu_id', '=', 'aluno.alu_id')
            ->join('turma', 'turma.tur_id','=','aluno.alu_tur_id')
            ->distinct()
            ->where('mensalidade.mes_num','=',1)
            ->get();
        dd($dados);
        return view('pagamento.index',['dados'=>$dados]);
    }
    public function create(Aluno $a, Turma $t){
        $alunos = $a->all()->lists('alu_nome','alu_id')->sortByDesc('alu_id')->toArray();
        $totalDeAlunos = count($alunos);
        $turmas = $t->all()->lists('tur_nome','tur_id')->sortByDesc('tur_id')->toArray();

        return view('pagamento.create', ['turmas' => $turmas, 'alunos'=>$alunos, 'totalDeAlunos'=>$totalDeAlunos, 'test'=>1]);

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
        $dados = $aluno->join('mensalidade', 'mensalidade.mes_alu_id', '=', 'aluno.alu_id')
            ->join('turma', 'turma.tur_id','=','aluno.alu_tur_id')
            ->select('aluno.alu_nome', 'mensalidade.mes_num', 'mensalidade.mes_valor', 'mensalidade.mes_status', 'turma.tur_nome')
            ->distinct()
            //->where('mensalidade.mes_num','=',1)
            ->orderBy('aluno.alu_nome', 'asc')
            ->get();
        //dd($dados);
        //return Datatables::of(Aluno::select('*'))->make(true);
        return Datatables::of($dados)->make(true);
    }
}
