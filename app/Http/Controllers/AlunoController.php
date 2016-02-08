<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(){
        return view('aluno.index');
    }
    public function create(){
        $a = new Aluno();
        $alunos = $a->all();
        return view('aluno.create', ['alunos' => $alunos]);
    }
    public function store(Request $request){

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
