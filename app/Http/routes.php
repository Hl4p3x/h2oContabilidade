<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', ['as' => 'index', 'uses' => 'ContatoController@home']);

Route::get('/contato', function () {
    return view('contato.index');
});

Route::get('/localizacao', function () {
    return view('localizacao.index');
});

Route::get('/parceiros', function () {
    return view('parceiros.index');
});

Route::get('/quem-somos', function(){
    return view('quem-somos.index');
});

Route::get('/servicos', function () {
    return view('servicos.index');
});

Route::get('serv-contabil', function(){
    return view('servicos.serv-contabil');
});

Route::get('serv-diag', function(){
    return view('servicos.serv-diag');
});

Route::get('serv-fisc', function(){
    return view('servicos.serv-fisc');
});

Route::get('serv-gest', function(){
    return view('servicos.serv-gest');
});

Route::get('serv-lega', function(){
    return view('servicos.serv-lega');
});

Route::get('serv-plane', function(){
    return view('servicos.serv-plane');
});

Route::get('serv-socie', function(){
    return view('servicos.serv-socie');
});

Route::get('serv-ti', function(){
    return view('servicos.serv-ti');
});

Route::get('serv-trab', function(){
    return view('servicos.serv-trab');
});

Route::get('serv-treina', function(){
    return view('servicos.serv-treina');
});


Route::get('contatos/listar', ['as' => 'admin.contato.index', 'uses' => 'ContatoController@index']);

Route::post('contato/gravar', ['as' => 'admin.contato.store', 'uses' => 'ContatoController@store']);

Route::get('contato/excluir/{id}', ['as' => 'admin.contato.destroy', 'uses'=> 'ContatoController@destroy']);

Route::get('contato/exibir/{id}', ['as' => 'admin.contato.show', 'uses' => 'ContatoController@show']);
