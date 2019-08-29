<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/',['middleware' => 'auth', function () {
    return view('home');
}]);*/
//ROTA PARA O TEMPLATE
Route::get('admin', function(){
    return view('admin_template');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::auth();

//Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Route::get('/',['middleware' => 'auth', function () {
    //     return view('home');
    // }]);

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');

    /**
     * Todas as Rotas de Alunos
     */
    /* -- rota cadastro de aluno --*/
    Route::get('aluno/create',['as' => 'alunos.create', 'uses' => 'AlunoController@create']);
    /* -- rota listagem de aluno --*/
    Route::get('aluno/lista',['as' => 'alunos.lista', 'uses' => 'AlunoController@index']);
    /* -- rota salvar aluno --*/
    Route::post('aluno/store',['as' => 'alunos.store', 'uses' => 'AlunoController@store']);
    Route::get('aluno/{id}/edit', ['as' => 'alunos.edit', 'uses' => 'AlunoController@edit']);
    Route::put('aluno/{id}/update', ['as' => 'alunos.update', 'uses' => 'AlunoController@update']);
    Route::get('aluno/{id}/destroy', ['as' => 'alunos.destroy', 'uses' => 'AlunoController@destroy']);
    Route::post('aluno/busca',['as' => 'alunos.busca', 'uses' => 'AlunoController@busca']);
    /*
     * -- Rota para API retornar alunos JSON --
     * -- O Retorno sera a lista de todos os alunos
     * -- conforme a busca na view, pelo nome do aluno
     * */
    Route::get('api/alunos-com-parcelas-cadastradas','PagamentoController@getJsonAlunosComParcelas');
    /*
    -- rota alternativa do DataTable
    */
    Route::controller('aluno/busca', 'AlunoController', [
        'anyData'  => 'datatables.aluno',
        'getIndex' => 'datatables',
    ]);

    /**
     * Todas as Rotas de Polos
     */
    /* -- rota cadastro de polo --*/
    Route::get('polo/create',['as' => 'polos.create', 'uses' => 'PoloController@create']);
    /* -- rota listagem de polo --*/
    Route::get('polo/lista',['as' => 'polos.lista', 'uses' => 'PoloController@index']);
    /* -- rota salvar polo --*/
    Route::post('polo/store',['as' => 'polos.store', 'uses' => 'PoloController@store']);
    Route::get('polo/{id}/edit', ['as' => 'polos.edit', 'uses' => 'PoloController@edit']);
    Route::put('polo/{id}/update', ['as' => 'polos.update', 'uses' => 'PoloController@update']);
    Route::get('polo/{id}/destroy', ['as' => 'polos.destroy', 'uses' => 'PoloController@destroy']);



    /**
     * Todas as Rotas de Cursos
     */
    /* -- rota cadastro de curso --*/
    Route::get('curso/create',['as' => 'cursos.create', 'uses' => 'CursoController@create']);
    /* -- rota listagem de curso --*/
    Route::get('curso/lista',['as' => 'cursos.lista', 'uses' => 'CursoController@index']);
    /* -- rota salvar curso --*/
    Route::post('curso/store',['as' => 'cursos.store', 'uses' => 'CursoController@store']);
    Route::get('curso/{id}/edit', ['as' => 'cursos.edit', 'uses' => 'CursoController@edit']);
    Route::put('curso/{id}/update', ['as' => 'cursos.update', 'uses' => 'CursoController@update']);
    Route::get('curso/{id}/destroy', ['as' => 'cursos.destroy', 'uses' => 'CursoController@destroy']);


    /**
     * Todas as Rotas de Turmas
     */
    /* -- rota cadastro de turmas --*/
    Route::get('turma/create',['as' => 'turmas.create', 'uses' => 'TurmaController@create']);
    /* -- rota listagem de turma --*/
    Route::get('turma/lista',['as' => 'turmas.lista', 'uses' => 'TurmaController@index']);
    /* -- rota salvar turma --*/
    Route::post('turma/store',['as' => 'turmas.store', 'uses' => 'TurmaController@store']);
    Route::get('turma/{id}/edit', ['as' => 'turmas.edit', 'uses' => 'TurmaController@edit']);
    Route::put('turma/{id}/update', ['as' => 'turmas.update', 'uses' => 'TurmaController@update']);
    Route::get('turma/{id}/destroy', ['as' => 'turmas.destroy', 'uses' => 'TurmaController@destroy']);
    /*-- Rota para API retornar turmas JSON --*/
    Route::get('turma/api','TurmaController@getJsonTurmas');
    /*-- Rota pegar a turmas de um polo --*/
    Route::get('get-turma/{idPolo}', 'TurmaController@getTurmasPorPolo');

    /**
     * Todas as Rotas de Mensalidades
     */
    /* -- rota cadastro de Mensalidades --*/
    Route::get('mensalidade/create',['as' => 'mensalidades.create', 'uses' => 'MensalidadeController@create']);
    /* -- rota listagem de mensalidade --*/
    Route::get('mensalidade/{id}/lista',['as' => 'mensalidades.lista', 'uses' => 'MensalidadeController@show']);
    /* -- rota Index Mensalidade --*/
    //Route::get('mensalidade', ['as' => ''])
    /* -- rota salvar mensalidade --*/
    Route::post('mensalidade/store',['as' => 'mensalidades.store', 'uses' => 'MensalidadeController@store']);
    Route::get('mensalidade/{id}/edit', ['as' => 'mensalidades.edit', 'uses' => 'MensalidadeController@edit']);
    Route::put('mensalidade/{id}/update', ['as' => 'mensalidades.update', 'uses' => 'MensalidadeController@update']);
    Route::get('mensalidade/{id}/destroy', ['as' => 'mensalidades.destroy', 'uses' => 'MensalidadeController@destroy']);
    /*-- Rota para API retornar alunos JSON --*/
    Route::get('aluno/api','MensalidadeController@getJsonAlunos');
    /*-- Rota para retornar todas as mensalidade de um aluno por id --*/
    Route::get('mensalidade/{id}', ['as' => 'mensalidades.aluno', 'uses' => 'MensalidadeController@getMensalidadesAluno']);

    /**
     * Todas as Rotas de Pagamentos
     */
    /* -- rota cadastro de Pagamentos --*/
    Route::get('pagamento/create',['as' => 'pagamentos.create', 'uses' => 'PagamentoController@create']);
    /*-- lista todas as mensalidades de um aluno --*/
    Route::post('pagamento/lista/mensalidades',['as' => 'pagamentos.listamensalidades', 'uses' => 'PagamentoController@listaMensalidadesAluno']);
    /* -- rota listagem de pagamento --*/
    Route::get('pagamento/lista',['as' => 'pagamentos.lista', 'uses' => 'PagamentoController@index']);
    /* -- rota cadastrar um pagamento com os dados do comprovante de pagamento --*/
    Route::get('pagamento/comprovante/mensalidade/{idMensalidade}/aluno/{idAluno}',['as' => 'pagamentos.cadcomprovante', 'uses' => 'PagamentoController@cadComprovante']);
    /* -- rota salvar pagamento --*/
    Route::post('pagamento/store',['as' => 'pagamentos.store', 'uses' => 'PagamentoController@store']);
    Route::get('pagamento/{id}/edit', ['as' => 'pagamentos.edit', 'uses' => 'PagamentoController@edit']);
    /* -- rota para pesquisar um pagamento de aluno --*/
    Route::get('pagamento/pesquisar', ['as' => 'pagamentos.pesquisar', 'uses' => 'PagamentoController@show']);
    /* -- rota para exibir os detalhes de um pagamento CLONADO -- */
    Route::get('pagamento/clonado/detalhes/{id}', ['as' => 'pagamentos.clonado.detalhes', 'uses' => 'PagamentoController@showDetalhesClonado']);

    Route::post('pagamento/pesquisar/mensalidades', ['as' => 'pagamentos.searchmensalidade', 'uses' => 'PagamentoController@show']);
    /*-- rota para mostrar detalhes de um determinado pagamento --*/
    Route::get('pagamento/{id}/show', ['as' => 'pagamentos.show', 'uses' => 'PagamentoController@show']);
    /*-- rota para atualizar um pagamento --*/
    Route::put('pagamento/{id}/update', ['as' => 'pagamentos.update', 'uses' => 'PagamentoController@update']);
    Route::get('pagamento/{id}/destroy', ['as' => 'pagamentos.destroy', 'uses' => 'PagamentoController@destroy']);

    /*Rota Alternativa para DataTable */
    Route::controller('pagamento/lista/alunos', 'PagamentoController', [
        'getBasicData' => 'datatables.data',
        'getIndex' => 'datatables',
    ]);

    /* -- rota cadastro de Pagamentos --*/
    Route::get('pagamento/create',['as' => 'pagamentos.create', 'uses' => 'PagamentoController@create']);
    /*-- lista todas as mensalidades de um aluno --*/
    Route::post('pagamento/lista/mensalidades',['as' => 'pagamentos.listamensalidades', 'uses' => 'PagamentoController@listaMensalidadesAluno']);

    /** Rotas de despesas */
    Route::get('despesa/create', ['as'=>'despesa.crate', 'uses'=>'DespesaController@create']);
    Route::post('despesa/store', ['as'=>'despesa.store', 'uses'=>'DespesaController@store']);

});
