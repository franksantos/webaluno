<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class TurmaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(FormBuilder $formBuilder){
        $form = $formBuilder->create('app\Forms\CadTurma', ['method' => 'POST', 'url' => route('turma.store')]);
        return view('welcome', compact($form));
    }
    public function create(){

        return view('turma.create');
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
