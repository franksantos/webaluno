<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TurmaRequest;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Curso;
use App\Polo;

class TurmaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(FormBuilder $formBuilder){
        //$form = $formBuilder->create('app\Forms\CadTurma', ['method' => 'POST', 'url' => route('turma.store')]);
        //return view('turma.index', compact($form));
		return view('turma.index');
    }
    public function create(){
        $polo = new Polo();
        $polos = $polo->all()->lists('pol_nome', 'id');
		$c = new Curso();
		$cursos = $c->all()->lists('cur_nome', 'id');
        $t = new Turma();
        $turmas = $t->all();
        return view('turma.create', ['cursos'=>$cursos,'polos' => $polos, 'turmas'=>$turmas]);
    }
    public function store(TurmaRequest $request){
        $polo = new Polo();
        $polos = $polo->all()->lists('pol_nome', 'id');
        $c = new Curso();
        $cursos = $c->all()->lists('cur_nome', 'id');
        $t = new Turma();
        $t->tur_cur_id      = $request->curso;
        $t->tur_nome        = strtoupper($request->nome);
        $t->tur_data_inicio = date('Y-m-d', strtotime(str_replace('/','-',$request->data_inicio)));
        $t->save();
        $turmas = $t->all();
        return view('turma.create', ['polos'=> $polos, 'cursos'=>$cursos, 'turmas'=>$turmas]);
    }
    public function show(){

    }
    public function edit($id){
        $polo = new Polo();
        $polos = $polo->all()->lists('pol_nome', 'id');
        $turma = Turma::find($id);
        $cur_id = $turma->tur_cur_id;//pega o id do curso da turma a ser editada
        $pol_id = $turma->cur_pol_id;//pega o id do polo da tuma a ser editada
        $c = new Curso();
        $cursos = $c->all()->lists('cur_nome', 'id');

        return view('turma.edit', ['turma'=>$turma,'cursos'=>$cursos, 'cur_id'=>$cur_id, 'polos'=>$polos, 'pol_id'=>$pol_id]);

    }
    public function update(TurmaRequest $request, $id){
        $t = Turma::find($id);
        $t->tur_cur_id = $request->curso;
        $t->tur_nome = strtoupper($request->nome);
        $t->tur_data_inicio = date('Y-m-d', strtotime(str_replace('/','-',$request->data_inicio)));
        $t->save();

        $c = new Curso();
        $cursos = $c->all()->lists('cur_nome', 'id');
        $polo = new Polo();
        $polos = $polo->all()->lists('pol_nome', 'id');
        $tur = new Turma();
        $turmas = $tur->all();
        return view('turma.create', ['cursos'=>$cursos,'polos'=>$polos,'turmas'=>$turmas]);
    }
    public function destroy($id){
        $turma = Turma::findOrFail($id);
        $turma->delete();
        $polo = new Polo();
        $polos = $polo->all()->lists('pol_nome', 'id');
        $c = new Curso();
        $cursos = $c->all()->lists('cur_nome', 'cur_id');
        $tur = new Turma();
        $turmas = $tur->all();
        return view('turma.create', ['polos'=>$polos, 'cursos'=>$cursos, 'turmas'=>$turmas]);
    }

    public function getJsonTurmas(Turma $turmas, Request $requests){
        if ($requests->has("term")){
            $result = $turmas->where("tur_nome", "like", "%" . $requests->term . "%")->get();
        } else {
            $result = $turmas->all();
        }
        $list = [];
        foreach($result as $key => $value){
            $list[$key]['id'] = $value->id;
            $list[$key]['text'] = $value->tur_nome;
        }
        return $list;
    }

    /**
     * @params id do polo
     */
    public function getTurmasPorPolo($idPolo){
        $p = new Polo();
        $c = new Curso();

    }

}
