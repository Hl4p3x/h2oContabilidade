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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato.index');
});

Route::get('contatos/listar', ['as' => 'admin.contato.index', 'uses' => 'ContatoController@index']);

Route::post('contato/gravar', ['as' => 'admin.contato.store', 'uses' => 'ContatoController@store']);

Route::get('contato/excluir/{id}', ['as' => 'admin.contato.destroy', 'uses'=> 'ContatoController@destroy']);

Route::get('contato/exibir/{id}', ['as' => 'admin.contato.show', 'uses' => 'ContatoController@show']);
