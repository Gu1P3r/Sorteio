<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pessoa/index', 'PessoaController@index');
Route::post('/pessoa/salvar', 'PessoaController@salvar');
Route::get('/pessoa/listagem', 'PessoaController@listagem');
Route::get('/pessoa/excluir', 'PessoaController@excluir');

Route::get('/pedra/index', 'PedraController@index');
Route::post('/pedra/salvar', 'PedraController@salvar');
Route::get('/pedra/listagem', 'PedraController@listagem');
Route::get('/pedra/excluir', 'PedraController@excluir');
Route::get('/pedra/buscar{numero}', 'PedraController@buscar');