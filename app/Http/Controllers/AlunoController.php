<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AlunoRequest;
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
        $alunos = $a->all()->sortByDesc('alu_nome');
        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome','id');
        return view('aluno.create', ['alunos' => $alunos, 'turmas'=>$turmas]);
    }
    public function store(AlunoRequest $request, Aluno $query){
        $a = new Aluno();
        $a->alu_tur_id = $request->turma;
        $a->alu_nome   = $request->nome;
        $a->alu_cpf    = $request->cpf;
        $a->alu_tel    = $request->telefone;
        $a->save();
        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'id');
        //$alunos = $a->all()->sortByDesc('alu_nome');
        $alunos = $query->orderBy('created_at', 'desc')->get();
        return view('aluno.create',['alunos'=>$alunos,'turmas'=>$turmas]);

    }
    public function show(){

    }
    public function edit($id){
        $aluno = Aluno::find($id);
        $alu_tur_id = $aluno->alu_tur_id;//id da turma do aluno
        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'id');
        return view('aluno.edit',['aluno'=>$aluno, 'turmas'=>$turmas, 'alu_tur_id'=>$alu_tur_id ]);
    }
    public function update(AlunoRequest $request, $id){
        $aluno = Aluno::find($id);
        $aluno->alu_tur_id = $request->turma;
        $aluno->alu_nome   = $request->nome;
        $aluno->alu_cpf    = $request->cpf;
        $aluno->alu_tel    = $request->telefone;
        $aluno->save();

        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'id');
        $a = new Aluno();
        $alunos = $a->all();
        return view('aluno.create',['alunos'=>$alunos,'turmas'=>$turmas]);
    }
    public function destroy($id){
        $aluno = Aluno::find($id);
        $aluno->delete();

        $t = new Turma();
        $turmas = $t->all()->lists('tur_nome', 'id');
        $a = new Aluno();
        $alunos = $a->all();
        return view('aluno.create',['alunos'=>$alunos,'turmas'=>$turmas]);
    }
}
