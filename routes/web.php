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

Route::get('/crm/images', 'PropagandasController@images')->name('images');
Route::get('/crm/images/external', 'PropagandasController@externalImages')->name('external_images');

Route::middleware('auth')->middleware('status')->group(function() {
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('chamados', 'ChamadosController');
  Route::resource('clientes', 'ClientesController');
  Route::resource('empreendimentos', 'EmpreendimentosController');
  Route::resource('agenda', 'AgendaController');
  Route::resource('perfis', 'PerfisController');
  Route::resource('areas', 'AreasController');
  Route::resource('imoveis', 'PerfilImoveisController');

  Route::get('perfis/{id}/imoveis', 'PerfisController@adicionarImovel')->name('adicionar_imoveis');
  Route::get('perfis/{id}/cliente', 'PerfisController@adicionarCliente')->name('adicionar_cliente');

  Route::get('/chamado/previsoes', 'ChamadosController@previsao')->name('previsao');
  //Route::get('/chamado/departamentos', 'ChamadosController@departamentos')->name('departamentos');
  Route::get('/chamado/departamento', 'ChamadosController@departamento')->name('departamentos');
  Route::get('/chamado/empreendimentos', 'ChamadosController@empreendimentos')->name('empreendimentos');
  Route::get('/chamado/midias', 'ChamadosController@midias')->name('midias');
  Route::get('/chamado/clientes', 'ChamadosController@clientes')->name('clientes');

  Route::get('/chamado/fases', 'ChamadosController@fases')->name('fases');

  Route::get('/chamado/grupos', 'ChamadosController@grupos')->name('grupos');
  Route::get('/chamado/tipos', 'ChamadosController@tipos')->name('tipos');

  Route::post('/chamado/{id}/empreendimentos/store', 'ChamadosController@empreendimentoStore')->name('chamados_empreendimento_store');
  Route::post('/chamado/{id}/midias/store', 'ChamadosController@midiaStore')->name('chamados_midia_store');
  Route::post('/chamado/{id}/logs/store-and-send-mail', 'ChamadosController@logStore')->name('chamados_logs_store');

  Route::post('/chamado/descricao/responder', 'ChamadosController@responder')->name('responder');

  Route::get('/cliente/email/{id}/remove', 'ClientesController@emailRemove')->name('cliente_email_remove');
  Route::get('/cliente/telefone/{id}/remove', 'ClientesController@telefoneRemove')->name('cliente_telefone_remove');
  Route::get('/cliente/endereco/{id}/remove', 'ClientesController@enderecoRemove')->name('cliente_endereco_remove');

  Route::get('/cliente/empreendimento/{id}/remove', 'ClientesController@empreendimentoRemove')->name('cliente_empreendimento_remove');
  Route::get('/cliente/midia/{id}/remove', 'ClientesController@midiaRemove')->name('cliente_midia_remove');


  Route::get('/cliente/verifica-email', 'ClientesController@verificaEmail')->name('verifica_email');

  Route::get('/chamados-por-mes/graph', 'HomeController@toGraph')->name('chamados_graph');

  Route::get('/empresa/area/responsaveis', 'EmpresasController@responsaveis')->name('responsaveis');

  Route::get('/agenda/compromissos/agenda', 'AgendaController@compromissos')->name('compromissos_agenda');
  Route::post('/agenda/{id}/update-ajax', 'AgendaController@updateAjax')->name('atualizar_agenda');

  Route::post('/cliente/{id}/empreendimentos/store', 'ClientesController@empreendimentoStore')->name('clientes_empreendimento_store');
  Route::post('/cliente/{id}/midias/store', 'ClientesController@midiaStore')->name('clientes_midia_store');
  Route::post('/cliente/{id}/email/store', 'ClientesController@emailStore')->name('cliente_email_store');
  Route::post('/cliente/{id}/telefone/store', 'ClientesController@telefoneStore')->name('cliente_telefone_store');
  Route::post('/cliente/{id}/endereco/store', 'ClientesController@enderecoStore')->name('cliente_endereco_store');

  Route::get('/cliente/cep', 'ClientesController@cep')->name('cep');

  Route::get('/chamado/{chamado}/envio-email', 'ChamadosController@envioEmail')->name('chamado_envio_email_cliente');

  Route::get('/chamado/{chamado}/envio-email/{id}/log', 'ChamadosController@envioEmailLog')->name('chamado_envio_email_log');

  Route::get('/chamado/{chamado}/email', 'ChamadosController@email')->name('email_create');

  Route::get('/perfil', 'UsersController@profile')->name('perfil');
  Route::put('/perfil', 'UsersController@editarPerfil')->name('perfil_editar');
  Route::get('/perfil/{id}/envio-email', 'PerfisController@envioEmail')->name('perfil_envio_email_cliente');
  Route::post('/perfil/{id}/send/email', 'PerfisController@sendEmail')->name('perfil_send_email');

  Route::get('/propagandas/{id}/adicionar-cliente', 'PropagandasController@adicionarCliente')->name('propaganda_adicionar_cliente');
  Route::get('/propagandas/{id}/envio-email', 'PropagandasController@envioEmail')->name('propaganda_envio_email_cliente');
  Route::post('/propagandas/{id}/send/email', 'PropagandasController@sendEmail')->name('propaganda_send_email');

  Route::get('/perfil/cidades', 'PerfisController@cidades')->name('cidades');

  Route::get('/empreendimento/ajax', 'ChamadosController@getEmpreendimentoAjax')->name('empreendimento_ajax');

  Route::get('/empreendimento/bairros', 'EmpreendimentosController@bairros')->name('bairros');
  Route::get('/empreendimento/areas-privativas', 'EmpreendimentosController@areaPrivativa')->name('areas_privativas');

  Route::get('/clientes/importar/cliente', 'ClientesController@importarClientes')->name('importar_clientes');

  Route::prefix('/admin')->group(function() {
      Route::resource('empresas', 'EmpresasController');
      Route::resource('usuarios', 'UsersController');
      Route::resource('midias', 'MidiasController');
      Route::resource('areas', 'AreasController');
      Route::resource('templates', 'TemplatesController');
      Route::resource('modelos', 'ModelosController');
      Route::resource('propagandas', 'PropagandasController');

      Route::post('imoveis/ajax', 'HelpersController@imoveis')->name('imoveis_ajax');
      Route::post('imoveis/imagens/ajax', 'HelpersController@imagens')->name('imoveis_imagens_ajax');
      Route::post('imoveis/dormitorios/ajax', 'HelpersController@dormitorios')->name('imoveis_dormitorios_ajax');
      Route::post('imoveis/informacoes/ajax', 'HelpersController@informacoes')->name('imoveis_informacoes_ajax');

      Route::post('/templates/preview', 'ModelosController@setPreview')->name('template_preview');
      Route::get('/templates/preview/{id}', 'ModelosController@preview')->name('template_preview_item');


      Route::get('/images/google', 'PropagandasController@googleImages')->name('google_images');

      Route::post('/images/upload', 'PropagandasController@enviarImagem')->name('upload_images');

      Route::post('/templates/preview/storeImages', 'PropagandasController@storeImages')->name('template_store_images');

      Route::get('usuarios/{id}/alterar-senha', 'UsersController@editPassword')->name('editar_senha');
      Route::post('usuarios/{id}/alterar-senha-update', 'UsersController@updatePassword')->name('editar_senha_update');
  });

});
