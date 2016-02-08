<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TurmaRequest;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Curso;

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
		$c = new Curso();
		$cursos = $c->all()->lists('cur_nome', 'cur_id');
        $t = new Turma();
        $turmas = $t->all();
        return view('turma.create', ['cursos'=>$cursos, 'turmas'=>$turmas]);
    }
    public function store(TurmaRequest $request){
        $c = new Curso();
        $cursos = $c->all()->lists('cur_nome', 'cur_id');
        /*$data_BRA = $request->data_inicio;
        $data_USA = date('Y-m-d', strtotime(str_replace('/','-',$data_BRA)));
        echo $data_USA;
        dd();*/
        $t = new Turma();
        $t->tur_cur_id      = $request->curso;
        $t->tur_nome        = $request->nome;
        $t->tur_data_inicio = date('Y-m-d', strtotime(str_replace('/','-',$request->data_inicio)));
        $t->save();
        $turmas = $t->all();
        return view('turma.create', ['cursos'=>$cursos, 'turmas'=>$turmas]);
    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }

}
