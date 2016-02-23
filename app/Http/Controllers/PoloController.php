<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PoloController extends Controller
{
    //
    //
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(){
        $p = new Polo();
        $todos = $p->all();
        return view('polo.index', ['polos' => compact($todos)]);
        //return view('curso.index');
    }
    public function create(){
        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'id');
        return view('polo.create', ['todosPolos' => $todosPolos]);
    }
    public function store(CursoRequest $request){
        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'id');
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
        $todosPolos = $polo->all()->lists('pol_nome', 'id');
        $curso = Curso::find($id);
        $cur_pol_id = $curso->cur_pol_id;
        return view('curso.edit', ['curso'=>$curso, 'todosPolos'=>$todosPolos, 'cur_pol_id'=>$cur_pol_id]);
    }
    public function update(CursoRequest $request, $id){
        $curso = Curso::find($id);
        $curso->cur_pol_id = $request->polo;
        $curso->cur_nome   = $request->nome;
        $curso->cur_area   = $request->area;
        $curso->save();
        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'id');
        $b = new Curso();
        $cursos = $b->all();
        return view('curso.create',['cursos' => $cursos, 'todosPolos'=>$todosPolos]);
    }
    public function destroy($id){
        $curso = Curso::find($id);
        $curso->delete();

        $polo = new Polo();
        $todosPolos = $polo->all()->lists('pol_nome', 'id');
        $b = new Curso();
        $cursos = $b->all();
        return view('curso.create',['cursos' => $cursos, 'todosPolos'=>$todosPolos]);
    }
}
