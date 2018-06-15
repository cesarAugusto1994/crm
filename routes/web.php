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

Route::get('/home', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::middleware('auth')->group(function() {
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('chamados', 'ChamadosController');
  Route::resource('clientes', 'ClientesController');

  Route::get('/chamado/previsoes/{id}', 'ChamadosController@previsao')->name('previsao');
  //Route::get('/chamado/departamentos', 'ChamadosController@departamentos')->name('departamentos');
  Route::get('/chamado/departamento/{id}', 'ChamadosController@departamento')->name('departamentos');
  Route::get('/chamado/empreendimentos', 'ChamadosController@empreendimentos')->name('empreendimentos');
  Route::get('/chamado/midias', 'ChamadosController@midias')->name('midias');
  Route::post('/chamado/{id}/empreendimentos/store', 'ChamadosController@empreendimentoStore')->name('chamados_empreendimento_store');
  Route::post('/chamado/{id}/midias/store', 'ChamadosController@midiaStore')->name('chamados_midia_store');
  Route::post('/chamado/{id}/logs/store', 'ChamadosController@logStore')->name('chamados_logs_store');

});
