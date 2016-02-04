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

Route::get('/',['middleware' => 'auth', function () {
    return view('home');
}]);
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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    /**
     * Todas as Rotas de Turmas
     */
    /* -- rota cadastro de turma --*/
    Route::get('turma/create',['as' => 'turmas.create', 'uses' => 'TurmaController@create']);
    /* -- rota listagem de turma --*/
    Route::get('turma/lista',['as' => 'turmas.lista', 'uses' => 'TurmaController@index']);
    /* -- rota salvar turma --*/
    Route::get('turma/store',['as' => 'turmas.store', 'uses' => 'TurmaController@store']);
});
