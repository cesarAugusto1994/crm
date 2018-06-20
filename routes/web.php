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
  Route::resource('agenda', 'AgendaController');

  Route::get('/chamado/previsoes', 'ChamadosController@previsao')->name('previsao');
  //Route::get('/chamado/departamentos', 'ChamadosController@departamentos')->name('departamentos');
  Route::get('/chamado/departamento', 'ChamadosController@departamento')->name('departamentos');
  Route::get('/chamado/empreendimentos', 'ChamadosController@empreendimentos')->name('empreendimentos');
  Route::get('/chamado/midias', 'ChamadosController@midias')->name('midias');
  Route::get('/chamado/clientes', 'ChamadosController@clientes')->name('clientes');

  Route::get('/chamado/grupos', 'ChamadosController@grupos')->name('grupos');
  Route::get('/chamado/tipos', 'ChamadosController@tipos')->name('tipos');

  Route::post('/chamado/{id}/empreendimentos/store', 'ChamadosController@empreendimentoStore')->name('chamados_empreendimento_store');
  Route::post('/chamado/{id}/midias/store', 'ChamadosController@midiaStore')->name('chamados_midia_store');
  Route::post('/chamado/{id}/logs/store', 'ChamadosController@logStore')->name('chamados_logs_store');

  Route::post('/chamado/descricao/responder', 'ChamadosController@responder')->name('responder');

  Route::get('/cliente/email/{id}/remove', 'ClientesController@emailRemove')->name('cliente_email_remove');
  Route::get('/cliente/telefone/{id}/remove', 'ClientesController@telefoneRemove')->name('cliente_telefone_remove');
  Route::get('/cliente/endereco/{id}/remove', 'ClientesController@enderecoRemove')->name('cliente_endereco_remove');

  Route::get('/cliente/verifica-email', 'ClientesController@verificaEmail')->name('verifica_email');

  Route::get('/chamados-por-mes/graph', 'HomeController@toGraph')->name('chamados_graph');

  Route::get('/empresa/area/responsaveis', 'EmpresasController@responsaveis')->name('responsaveis');

  Route::get('/agenda/compromissos/agenda', 'AgendaController@compromissos')->name('compromissos_agenda');

  Route::post('/cliente/{id}/empreendimentos/store', 'ClientesController@empreendimentoStore')->name('clientes_empreendimento_store');
  Route::post('/cliente/{id}/midias/store', 'ClientesController@midiaStore')->name('clientes_midia_store');
  Route::post('/cliente/{id}/email/store', 'ClientesController@emailStore')->name('cliente_email_store');
  Route::post('/cliente/{id}/telefone/store', 'ClientesController@telefoneStore')->name('cliente_telefone_store');
  Route::post('/cliente/{id}/endereco/store', 'ClientesController@enderecoStore')->name('cliente_endereco_store');

  Route::get('/cliente/cep', 'ClientesController@cep')->name('cep');

  Route::prefix('/admin')->group(function() {
      Route::resource('empresas', 'EmpresasController');
      Route::resource('usuarios', 'UsersController');
      Route::resource('midias', 'MidiasController');

      Route::get('usuarios/{id}/alterar-senha', 'UsersController@editPassword')->name('editar_senha');
      Route::post('usuarios/{id}/alterar-senha-update', 'UsersController@updatePassword')->name('editar_senha_update');
  });

});
