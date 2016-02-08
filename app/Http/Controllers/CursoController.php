<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Polo;
use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{
    //
    //
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(){
        $a = new Curso();
        $todos = $a->all();
        return view('curso.index', ['cursos' => compact($todos)]);
        //return view('curso.index');
    }
    public function create(){
        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'pol_id');
        $c = new Curso();
        $cursos = $c->all();
        return view('curso.create', ['cursos' => $cursos, 'todosPolos' => $todosPolos]);
    }
    public function store(CursoRequest $request){
        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'pol_id');
        $b = new Curso();
        $b->cur_pol_id = $request->polo;
        $b->cur_nome   = $request->nome;
        $b->cur_area   = $request->area;
        $b->save();
        $cursos = $b->all();
        return view('curso.create', ['cursos' => $cursos, 'todosPolos'=>$todosPolos]);
    }
    public function show(){

    }
    public function edit($id){
        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'pol_id');
        $curso = Curso::find($id);
        return view('curso.edit', ['curso'=>$curso, 'todosPolos'=>$todosPolos]);
    }
    public function update(){

    }
    public function destroy(){

    }
}
