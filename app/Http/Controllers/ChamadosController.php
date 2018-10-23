<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes\Produtos as ClienteProduto;
use App\Models\{Chamados, Manifestacao, Empresa, Produtos, LogEmail, Clientes};
use App\Models\Chamados\{Classificacao, Previsao, Status, Empreendimentos, Midias, Logs, Anotacoes, Fase};
use App\Models\Empresa\Departamentos;
use App\User;
#use Ixudra\Curl\Facades\Curl;

class ChamadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->request->all();

        $user = \Auth::user();

        $this->authorize('manage-chamados.index', Chamados::class);

        $classificacao = Classificacao::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $departamentos = Departamentos::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $status = Status::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $fases = Fase::where('empresa_id', $user->empresa->id)->orderBy('nome')->get();
        $responsaveis = User::where('empresa_id', $user->empresa->id)->orderBy('name')->get();

        $chamados = Chamados::where('id_empresa', $user->empresa_id);

        if(!empty($data['id'])) {
            $chamados->where('id', $data['id']);
        }

        if(!empty($data['cliente'])) {
            $chamados->where('id_cliente', $data['cliente']);
        }

        if(!empty($data['pessoa_responsavel'])) {
            $chamados->where('pessoa_responsavel', $data['pessoa_responsavel']);
        }

        if(!empty($data['empreendimento'])) {

            $sql2 = "select * from imoveis where imv_id = " . (int)$request->get('empreendimento');
            $imovel = \DB::connection('mysql_seabra')->select($sql2);

            $produto = $imovelId = null;

            if(!empty($imovel[0])) {
              $imovelId = $imovel[0]->imv_referencia;
              $nome = $imovel[0]->imv_titulo;
              if(!empty($imovelId)) {

                $produto = \App\Models\Produtos::where('referencia', $imovelId)->where('nome', $nome)->get();

                if($produto->isEmpty()) {
                  flash('O Empreendimento não foi encontrado na base de dados.')->error()->important();
                  return back();
                }

                $produto = $produto->first();

                $chamados->whereHas('cliente', function ($cliente) use ($data, $produto) {
                    $cliente->whereHas('empreendimentos', function ($query) use ($data, $produto) {
                        $query->where('produto_id', $produto->id);
                    });
                });

                /*
                $chamados->whereHas('empreendimentos', function ($query) use ($data, $produto) {
                    $query->where('produto_id', $produto->id);
                });
                */
              }
            }

        }

        if(!empty($data['midia'])) {
            $chamados->whereHas('midias', function ($query) use ($data) {
                $query->where('midia_id', $data['midia']);
            });
        }

        if(!empty($data['situacao'])) {
            $chamados->where('situacao', $data['situacao']);
        }

        if(!empty($data['fase_id'])) {
            $chamados->where('fase_id', $data['fase_id']);
        }

        if(!empty($data['classificacao'])) {
            $chamados->where('classificacao', $data['classificacao']);
        }

        if(!empty($data['temperatura'])) {
            $chamados->where('temperatura', $data['temperatura']);
        }

        if(!empty($data['abertura_chamado'])) {

            $date = \DateTime::createFromFormat('d/m/Y', $data['abertura_chamado']);

            $chamados->where('abertura_chamado', $date->format('Y-m-d'));
        }

        if(!empty($data['atendimento_chamado'])) {

            $date = \DateTime::createFromFormat('d/m/Y', $data['atendimento_chamado']);

            $chamados->where('atendimento_chamado', $date->format('Y-m-d'));
        }

        if(!empty($data['conclusao_chamado'])) {

            $date = \DateTime::createFromFormat('d/m/Y', $data['conclusao_chamado']);

            $chamados->where('conclusao_chamado', $date->format('Y-m-d'));
        }

        if(!empty($data['start']) && !empty($data['end'])) {

            $start = \DateTime::createFromFormat('d/m/Y', $data['start']);
            $end = \DateTime::createFromFormat('d/m/Y', $data['end']);

            $chamados->where('created_at', '>=', $start->format('Y-m-d') . ' 00:00:00')
            ->where('created_at', '<=', $end->format('Y-m-d') . ' 23:59:59');

        }

        $chamados = $chamados->orderByDesc('id')->paginate();

        foreach ($data as $key => $value) {

            $chamados->appends($key, $value);

        }

        return view('empresa.chamados.index', compact('chamados', 'status','classificacao','departamentos','fases','responsaveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = \Auth::user();

        $classificacao = Classificacao::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $departamentos = Departamentos::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $status = Status::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $manifestacoes = Manifestacao::orderBy('descricao')->get();
        $fases = Fase::where('empresa_id', $user->empresa->id)->orderBy('nome')->get();

        $grupos = \App\Models\Manifestacao\Grupo::orderBy('descricao')->get();
        $tipos = \App\Models\Manifestacao\Grupo\Tipo::orderBy('descricao')->get();

        $ultimoChamado = Chamados::orderByDesc('id')->get();

        $ultimoChamado = $ultimoChamado->first();

        if($ultimoChamado && !$ultimoChamado->id_cliente && !$ultimoChamado->pessoa_responsavel) {

          $chamado = $ultimoChamado;

        } else {

          $chamado = new Chamados();
          $chamado->id_usuario = \Auth::user()->id;
          $chamado->id_empresa = \Auth::user()->empresa_id;
          $chamado->abertura_chamado = new \DateTime('now');
          $chamado->save();

        }

        $cliente = null;

        if($request->has('cliente_id')) {
            $cliente = $request->get('cliente_id');
            $cliente = Clientes::findOrFail($cliente);
        }

        return view('empresa.chamados.create', compact('chamado', 'classificacao', 'departamentos', 'status', 'manifestacoes', 'cliente', 'fases', 'grupos', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->request->all();

        $chamado = new Chamados();
        $chamado->id_cliente = $data['id_cliente'];
        $chamado->area_atendimento = $data['area_atendimento'] ?? null;
        $chamado->produto_servico = 0;
        $chamado->manifestacao = $data['manifestacao'] ?? null;
        $chamado->grupo_manifestacao = $data['grupo_manifestacao'] ?? null;
        $chamado->tipo_manifestacao = $data['tipo_manifestacao'] ?? null;
        $chamado->classificacao = $data['classificacao'];
        $chamado->descricao = $data['descricao'];
        $chamado->temperatura = $data['temperatura'];
        $chamado->situacao = $data['situacao'];
        $chamado->conclusao = $data['conclusao'] ?? '';
        $chamado->abertura_chamado = new \DateTime('now');
        $chamado->id_usuario = \Auth::user()->id;
        $chamado->id_empresa = \Auth::user()->empresa_id;
        $chamado->pessoa_responsavel = $data['pessoa_responsavel'] ? (\DateTime::createFromFormat('d/m/Y', $data['pessoa_responsavel'])) : null;
        $chamado->atendimento_chamado = $data['atendimento_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['atendimento_chamado'])) : null;
        $chamado->conclusao_chamado = $data['conclusao_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['conclusao_chamado'])) : null;
        $chamado->previsao_conclusao = $data['previsao_conclusao'] instanceof \Datetime ? (\DateTime::createFromFormat('d/m/Y', $data['previsao_conclusao'])) : null;
        $chamado->save();

        $anotacao = new Anotacoes();
        $anotacao->descricao = $data['descricao'];
        $anotacao->chamado_id = $chamado->id;
        $anotacao->user_id = \Auth::user()->id;
        $anotacao->save();

        flash('Novo Chamado adicionado com sucesso!')->success()->important();

        return redirect()->route('chamados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chamado = Chamados::findOrFail($id);

        $this->authorize('manage-chamados.view', $chamado);

        $user = \Auth::user();

        $classificacao = Classificacao::where('id_empresa', $user->empresa->id)->get();
        $departamentos = Departamentos::where('id_empresa', $user->empresa->id)->get();
        $status = Status::where('id_empresa', $user->empresa->id)->get();
        $fases = Fase::where('empresa_id', $user->empresa->id)->where('status_id', $chamado->situacao)->get();

        return view('empresa.chamados.detalhes', compact('chamado', 'classificacao', 'departamentos', 'status', 'fases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->request->all();

        $chamado = Chamados::findOrFail($id);

        if(isset($data['id_cliente'])) {
            $chamado->id_cliente = $data['id_cliente'];
        }

        $chamado->area_atendimento = $data['area_atendimento'] ?? null;
        $chamado->produto_servico = 0;
        $chamado->manifestacao = $data['manifestacao'] ?? null;
        $chamado->grupo_manifestacao = $data['grupo_manifestacao'] ?? null;
        $chamado->tipo_manifestacao = $data['tipo_manifestacao'] ?? null;
        $chamado->classificacao = $data['classificacao'];

        if(isset($data['descricao'])) {
            $chamado->descricao = $data['descricao'];
        }

        $chamado->fase_id = $data['fase_id'];
        $chamado->situacao = $data['situacao'];
        $chamado->temperatura = $data['temperatura'];
        $chamado->conclusao = $data['conclusao'] ?? '';
        $chamado->abertura_chamado = new \DateTime('now');
        $chamado->id_usuario = \Auth::user()->id;
        $chamado->id_empresa = \Auth::user()->empresa_id;
        $chamado->pessoa_responsavel = $data['pessoa_responsavel'];
        $chamado->atendimento_chamado = $data['atendimento_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['atendimento_chamado'])) : null;
        $chamado->conclusao_chamado = $data['conclusao_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['conclusao_chamado'])) : null;
        $chamado->previsao_conclusao = $data['previsao_conclusao'] instanceof \Datetime ? (\DateTime::createFromFormat('d/m/Y', $data['previsao_conclusao'])) : null;

        if($data['previsao_conclusao']) {
            $date = new \DateTime('now');
            $previsao = Previsao::findOrFail($data['previsao_conclusao']);
            $date->modify('+'. $previsao->descricao . ' days');
            $previsao = $date;

            $chamado->previsao_conclusao = $previsao;
        }

        $chamado->save();

        if(isset($data['descricao'])) {
            $anotacao = new Anotacoes();
            $anotacao->descricao = $data['descricao'];
            $anotacao->chamado_id = $chamado->id;
            $anotacao->save();
        }

        if(!empty($data['empreendimento'])) {

            foreach($data['empreendimento'] as $item) {

              $empreendimento = new Empreendimentos();
              $empreendimento->cliente_id = $chamado->cliente->id;
              $empreendimento->chamado_id = $chamado->id;
              $empreendimento->produto_id = $item;
              $empreendimento->save();
            }

        }

        if(!empty($data['midia'])) {
            foreach($data['midia'] as $item) {
                $empreendimento = new Midias();
                $empreendimento->cliente_id = $chamado->cliente->id;
                $empreendimento->chamado_id = $chamado->id;
                $empreendimento->midia_id = $item;
                $empreendimento->save();
            }
        }

        flash('Os dados foram alterados com sucesso!')->success()->important();

        return redirect()->route('chamados.show', ['id' => $chamado->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $registro = Chamados::findOrFail($id);
            $registro->delete();

            return response()->json([
              'code' => 201,
              'message' => 'Removido com sucesso!'
            ]);

        } catch(Exception $e) {
            return response()->json([
              'code' => 501,
              'message' => $e->getMessage()
            ]);
        }
    }

    public function previsao(Request $request)
    {
        $data = $request->request->all();

        $id = $data['id'];

        $previsao = Previsao::where('id_classificacao', $id)->get();

        $resultado = $previsao->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->descricao . ' dias'];
        });

        return json_encode($resultado);
    }

    public function departamento(Request $request)
    {
        $data = $request->request->all();

        $id = $data['id'];

        $departamentos = Departamentos::findOrFail($id);

        $usuarios = $departamentos->usuarios->map(function($usuario) {
            return ['id' => $usuario->id, 'nome' => $usuario->name];
        });

        return json_encode($usuarios);
    }
/*
    public function empreendimentoStore(Request $request, $id)
    {
        $data = $request->request->all();
        $chamado = Chamados::findOrFail($id);

        $hasRegistro = Empreendimentos::where('chamado_id', $chamado->id)->where('produto_id', $data['empreendimento'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('O empreendimento já foi adicionado ao chamado!')->error()->important();
          return redirect()->back();
        }

        $empreendimento = new Empreendimentos();
        $empreendimento->cliente_id = $chamado->cliente->id;
        $empreendimento->chamado_id = $chamado->id;
        $empreendimento->produto_id = $data['empreendimento'];
        $empreendimento->save();

        flash('O empreendimento foi adicionado ao chamado com sucesso!')->success()->important();

        return redirect()->back();
    }
*/
    public function empreendimentoStore(Request $request, $id)
    {
        $data = $request->request->all();
        $chamado = Chamados::findOrFail($id);
        $cliente = Clientes::findOrFail($chamado->cliente->id);

        $sql2 = "select * from imoveis where imv_id = " . (int)$request->get('empreendimento');
        $imovel = \DB::connection('mysql_seabra')->select($sql2);

        $referencia = null;

        if(!empty($imovel[0])) {
          $referencia = $imovel[0]->imv_referencia;
          $titulo = $imovel[0]->imv_titulo;
          if(!empty($referencia)) {

            $produtos = \App\Models\Produtos::where('referencia', $referencia)->where('nome', $titulo)->get();

            $produto = $produtos->first();

            $hasRegistro = ClienteProduto::where('cliente_id', $cliente->id)->where('produto_id', $produto->id)->get();

            if($hasRegistro->isNotEmpty()) {
              flash('O empreendimento já foi adicionado ao cliente!')->error()->important();
              return redirect()->back();
            }

            $empreendimento = new ClienteProduto();
            $empreendimento->cliente_id = $cliente->id;
            $empreendimento->chamado_id = $chamado->id;
            $empreendimento->produto_id = $produto->id;
            $empreendimento->save();

            flash('O empreendimento foi adicionado ao cliente com sucesso!')->success()->important();

            return redirect()->back();

          }
        }

    }

    public function midiaStore(Request $request, $id)
    {
        $data = $request->request->all();
        $chamado = Chamados::findOrFail($id);

        $hasRegistro = Midias::where('chamado_id', $chamado->id)->where('midia_id', $data['midia'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('A midia já foi adicionada ao chamado!')->error()->important();
          return redirect()->back();
        }

        $empreendimento = new Midias();
        $empreendimento->cliente_id = $chamado->cliente->id;
        $empreendimento->chamado_id = $chamado->id;
        $empreendimento->midia_id = $data['midia'];
        $empreendimento->save();

        flash('A midia foi adicionada ao chamado com sucesso!')->success()->important();

        return redirect()->back();
    }

    public function logStore(Request $request, $id)
    {
        $data = $request->request->all();

        $chamado = Chamados::findOrFail($data['chamado']);

        $path = "";

        if(isset($data['enviar_email'])) {

            $user = \Auth::user();

            $empresa = Empresa::where('id', $user->empresa_id)->get();
            $empresa = $empresa->first();

            $descricao = "";

            if(!$empresa->mail_username || !$empresa->mail_password || !$empresa->mail_driver || !$empresa->mail_host || !$empresa->mail_port) {
                flash('Erro no envio: Por favor verifique as configurações de envio de email na cadastro da empresa!')->error()->important();
                return redirect()->back();
            } else {

                \Config::set('mail.username', $empresa->mail_username);
                \Config::set('mail.password', $empresa->mail_password);
                \Config::set('mail.port', $empresa->mail_port);
                \Config::set('mail.driver', $empresa->mail_driver);
                \Config::set('mail.host', $empresa->mail_host);
                \Config::set('mail.encryption', $empresa->mail_encription);
                \Config::set('app.name', $empresa->nome);

            }

            if(isset($data['empreendimentos'])) {

                foreach ($data['empreendimentos'] as $key => $item) {

                    $texto = $data['descricao-'.$item];

                    $email = new LogEmail();
                    $email->chamado_id = $chamado->id;
                    $email->cliente_id = $chamado->cliente->id;
                    $email->user_id = \Auth::user()->id;
                    $email->mensagem = $texto;

                    if($request->hasFile('arquivo')) {
                        $path = $request->file('arquivo')->store('arquivos');
                        $email->arquivo = $path;
                    }

                    $email->save();

                    $emp = Produtos::find($item);
                    $descricao = "Email enviado para o cliente com as informações do empreendimento " . $emp->nome;

                    $log = new Logs();
                    $log->chamado_id = $chamado->id;
                    $log->user_id = \Auth::user()->id;
                    $log->descricao = $descricao;
                    $log->email_log_id = $email->id;
                    $log->origem = 'usuario';
                    $log->save();

                }

            } elseif(isset($data['email_em_branco'])) {

                  $email = new LogEmail();
                  $email->chamado_id = $chamado->id;
                  $email->cliente_id = $chamado->cliente->id;
                  $email->user_id = \Auth::user()->id;
                  $email->mensagem = $data['descricao'];

                  if($request->hasFile('arquivo')) {
                      $path = $request->file('arquivo')->store('arquivos');
                      $email->arquivo = $path;
                  }

                  $email->save();

                  $descricao = "Email enviado para o cliente.";

                  $log = new Logs();
                  $log->chamado_id = $chamado->id;
                  $log->user_id = \Auth::user()->id;
                  $log->descricao = $descricao;
                  $log->email_log_id = $email->id;
                  $log->origem = 'usuario';
                  $log->save();

            }


            } else {


              $log = new Logs();
              $log->chamado_id = $chamado->id;
              $log->user_id = \Auth::user()->id;
              $log->descricao = $data['descricao'];
              $log->origem = $data['side'];
              $log->save();


            }

        if(isset($data['enviar_email']) && isset($data['empreendimentos']) || isset($data['email_em_branco'])) {

            $emails = explode(',', $data['email']);

            if(isset($data['empreendimentos'])) {

                foreach ($data['empreendimentos'] as $key => $item) {

                    $texto = $data['descricao-'.$item];

                    //$assunto="";

                    $assunto = 'SEABRA – '.$data['empreendimentos'][$key].' – INFORMAÇÕES';

                    if($data['modelo'] == 3) {
                      $assunto = 'SEABRA – IMÓVEIS SELECIONADOS CONFORME PERFIL DESEJADO';
                    }

                    $assunto = strtoupper($assunto);

                    foreach ($emails as $key => $email) {
                      \Mail::to([
                        $chamado->cliente->nome => $email,
                      ])->send(new \App\Mail\Resposta($log, $chamado, $empresa, $texto, $path, $assunto, $data['modelo']));
                    }

                }
            } elseif(isset($data['email_em_branco'])) {

              $assunto = 'SEABRA – INFORMAÇÕES';

              foreach ($emails as $key => $email) {
                \Mail::to([
                  $chamado->cliente->nome => $email,
                ])->send(new \App\Mail\Resposta($log, $chamado, $empresa, $data['descricao'], $path, $assunto, $data['modelo']));
              }

            }

            flash('Email enviado com sucesso!')->success()->important();
        }

        return redirect()->back();

        flash('A descrição foi adicionada ao chamado com sucesso!')->success()->important();
    }

    public function empreendimentos(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $result = [];

        $user = \Auth::user();

        $sql2 = "select * from imoveis where imv_titulo LIKE '%". $search ."%' OR imv_referencia LIKE '%" . $search . "%'";

        $imoveis = \DB::connection('mysql_seabra')->select($sql2);

        foreach ($imoveis as $key => $imovel) {
            $result[] = [
              'id' => $imovel->imv_id,
              'nome' => $imovel->imv_titulo,
              'id_empresa' => 8,
              'referencia' => $imovel->imv_referencia,
              'midia' => "",
            ];
        }

        #$empreendimentos = \App\Models\Produtos::where('nome', 'like', "%$search%")->get();

        #dd($empreendimentos->toJson());

        return json_encode($result);

        return $empreendimentos->toJson();
    }

    public function midias(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $user = \Auth::user();

        $empreendimentos = \App\Models\Midias::where('nome', 'like', "%$search%")->where('empresa_id', $user->empresa_id)->get();

        return $empreendimentos->toJson();
    }

    public function clientes(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $user = \Auth::user();

        $empreendimentos = \App\Models\Clientes::where('nome', 'like', "%$search%")
        ->orWhere('id', $search)
        ->where('id_empresa', $user->empresa_id)->get();

        return $empreendimentos->toJson();
    }

    public function grupos(Request $request)
    {
        $data = $request->request->all();

        $id = $data['id'];

        $user = \Auth::user();

        $manifestacoes = \App\Models\Manifestacao\Grupo::orderBy('descricao')->get();

        $itens = $manifestacoes->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->descricao];
        });

        return json_encode($itens);
    }

    public function tipos(Request $request)
    {
        $data = $request->request->all();

        $user = \Auth::user();

        $manifestacoes = \App\Models\Manifestacao\Grupo\Tipo::orderBy('descricao')->get();

        $itens = $manifestacoes->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->descricao];
        });

        return json_encode($itens);
    }

    public function responder(Request $request)
    {
        $data = $request->request->all();

        dd($data);
    }

    public function envioEmail(Request $request, $chamadoId)
    {
        $data = $request->request->all();

        $chamado = Chamados::findOrFail($chamadoId);

        $modelo = $data['modelo'] ?? 1;

        if(!isset($data['empreendimentos'])) {
          $data['empreendimentos'] = array_column($chamado->cliente->empreendimentos->map(function($empreendimento) {
              return $empreendimento->empreendimento->toArray();
          })->toarray(), 'id') ?? [];
        }

        $empreendimentos = $data['empreendimentos'];
        $lista = $nomesEmpreendimentos = [];

        $imoveisModelo2 = $imoveisModelo3 = [];

        foreach ($empreendimentos as $key => $itemLoop) {

          $emp = Produtos::findOrFail($itemLoop);

          $nomesEmpreendimentos[$emp->id] = $emp->nome;
          $empreendimento = $this->getEmpreendimento($emp->referencia);

          $tipologias = $this->getTipolias($empreendimento['imovel'], $empreendimento['tipo']);
          $imovel = $this->getImovel($empreendimento['imovel']);

          $dataEntrega = null;

          if(!empty($imovel[0]->emp_previsao_entrega)) {
            $dataEntrega = new \DateTime($imovel[0]->emp_previsao_entrega);
            $dataEntrega = $dataEntrega->format('d/m/Y');
          }

          $imoveisModelo2[] = [
              'empreendimento' => $emp->nome,
              'referencia' => $emp->referencia,
              'imovel' => $empreendimento,
              'arquitetura' => $empreendimento['arquitetura'],
              'codigo' => $empreendimento['imovel'],
              'tipologia' => $empreendimento['tipologia'],
              'terreno' => str_replace('área privativa', '', $empreendimento['tipologia']['area']),
              'faseobra' => $empreendimento['faseobra'],
              'entrega' => $dataEntrega,
              'imagens' => $imagensfachada = $this->getImagensImoveis($empreendimento['imovel'], 4),
              'link' => 'http://www.seabra.com.br/' . $empreendimento['extras'][0]['link'],
              'extras' => $this->getImovelExtras($empreendimento['imovel'])
          ];

          $imoveisModelo3[] = [
            'empreendimento' => $emp->nome,
            'referencia' => $emp->referencia,
            'imovel' => $empreendimento,
            'arquitetura' => $empreendimento['arquitetura'],
            'codigo' => $empreendimento['imovel'],
            'tipologia' => $empreendimento['tipologia'],
            'terreno' => str_replace('área privativa', '', $empreendimento['tipologia']['area']),
            'faseobra' => $empreendimento['faseobra'],
            'entrega' => $dataEntrega,
            'imagens' => $imagensfachada = $this->getImagensImoveis($empreendimento['imovel'], 4),
            'link' => 'http://www.seabra.com.br/' . $empreendimento['extras'][0]['link'],
            'extras' => $this->getImovelExtras($empreendimento['imovel'])
          ];

          $decricaoProjeto = $this->getDescricao($empreendimento['imovel'], 1);
          $areasComuns = $this->getAreasComuns($empreendimento['imovel']);
          $imagensEmpreendimento = $this->getImagensImoveis($empreendimento['imovel'], 2);
          $plantasEmpreendimento = $this->getImagensImoveis($empreendimento['imovel'], 3);
          $imagensImovel = $this->getImagensImoveis($empreendimento['imovel'], 5);
          $imagensfachada = $this->getImagensImoveis($empreendimento['imovel'], 4);
          $imagensLazer = $this->getImagensImovel($empreendimento['imovel']);

          $lista[$emp->id] = [
            'empreendimento' => $empreendimento,
            'emp' => $emp,
            'tipologias' => $tipologias,
            'imovel' => $imovel,
            'decricaoProjeto' => $decricaoProjeto,
            'areasComuns' => $areasComuns,
            'imagensEmpreendimento' => $imagensEmpreendimento,
            'plantasEmpreendimento' => $plantasEmpreendimento,
            'imagensImovel' => $imagensImovel,
            'imagensfachada' => $imagensfachada,
            'imagensLazer' => $imagensLazer
          ];

        }

        $agora = now();
        $hora = (int)$agora->format('H');

        $saudacao = "Bom Dia";

        if($hora >= 12 && $hora < 18) {
            $saudacao = "Boa Tarde";
        } elseif($hora >= 18 && $hora < 23) {
            $saudacao = "Boa Noite";
        }elseif($hora >= 0 && $hora < 3) {
            $saudacao = "Boa Noite";
        }

        $emailsCliente = $chamado->cliente->emails;

        $emails = $emailsCliente->map(function($email) {
            return $email->email;
        })->toArray();

        $emailList = implode(',', $emails);

        $mensagem = [];

        $modeloKey = null;

        foreach ($lista as $key => $item) {

          if(empty($modeloKey)) {
            $modeloKey = $key;
          }

          $imagensLazer = $imagemFachada = $planta = $imagemFooter = [];

          if(!empty($item['imagensLazer'])) {

            foreach ($item['imagensLazer'] as $img) {
              $imagensLazer[] = 'http://www.seabra.com.br/admin/' . str_replace('../', '', $img->imagem);
            }

          }

          if(!empty($item['imagensfachada'])) {
            $imagemFachada = current($item['imagensfachada']);
          }

          if(empty($imagemFachada)) {
            $imagemFachada = current($item['imagensEmpreendimento']);
          }

          //$imagensEmpreendimento = array_slice($item['imagensEmpreendimento'], 1, 5);

          if(!empty($item['plantasEmpreendimento'])) {
            $planta = current($item['plantasEmpreendimento']);
          }

          $imagensEmpreendimento = array_merge($imagensEmpreendimento, [$planta]);

          if(!empty($item['imagensEmpreendimento'])) {
            $ultimaImagem = array_slice($item['imagensEmpreendimento'], -1);
            $imagemFooter = current($ultimaImagem);
          }

          if(count($imagensLazer) < 8) {

              $imagensLazer = array_merge(array_slice($imagensEmpreendimento, 1, count($imagensLazer) - 9));

          } elseif(count($imagensLazer) > 8) {

              $imagensLazer = array_slice($imagensLazer, 1, 8);
          }

          #dd($imagensLazer);

          $dataEntrega = null;

          if(!empty($item['imovel'][0]->emp_previsao_entrega)) {
            $dataEntrega = new \DateTime($imovel[0]->emp_previsao_entrega);
            $dataEntrega = $dataEntrega->format('d/m/Y');
          }

          $mensagem[$key] = view('empresa.chamados.includes.modelo-'.$modelo,
          compact('saudacao', 'chamado', 'nomesEmpreendimentos', 'imoveisModelo2', 'imoveisModelo3', 'modelo', 'dataEntrega'))
          ->with('imagensLazer', $imagensLazer)
          ->with('empreendimento', $item['empreendimento'])
          ->with('emp', $item['emp'])
          ->with('tipologias', $item['tipologias'])
          ->with('imovel', $item['imovel'])
          ->with('decricaoProjeto', $item['decricaoProjeto'])
          ->with('areasComuns', $item['areasComuns'])
          ->with('imagensEmpreendimento', $imagensEmpreendimento)
          ->with('plantasEmpreendimento', $planta)
          ->with('imagensImovel', $item['imagensImovel'])
          ->with('imagemFachada', $imagemFachada)
          ->with('imagemFooter', $imagemFooter);
        }

        $mensagem = ($modelo == 2) ? [$modeloKey => current($mensagem)] : $mensagem;
        $nomesEmpreendimentos = ($modelo == 2) ? [current($nomesEmpreendimentos)] : $nomesEmpreendimentos;

        return view('empresa.chamados.editor',
        compact('mensagem', 'imovel', 'chamado', 'emailList', 'nomesEmpreendimentos', 'modelo'))
        ->with('empreendimento', current($lista));
    }

    public function email($id)
    {
        $chamado = Chamados::findOrFail($id);

        $emailsCliente = $chamado->cliente->emails;

        $emails = $emailsCliente->map(function($email) {
            return $email->email;
        })->toArray();

        $emailList = implode('', $emails);

        return view('empresa.chamados.editor-blank', compact('chamado', 'emailList'));
    }

    public function envioEmailLog($chamado, $id)
    {
        $log = LogEmail::findOrFail($id);
        $chamado = Chamados::findOrFail($chamado);

        $emailsCliente = $chamado->cliente->emails;

        $emails = $emailsCliente->map(function($email) {
            return $email->email;
        })->toArray();

        $emailList = implode('', $emails);

        $mensagem = $log->mensagem;

        $nomesEmpreendimentos = [];

        return view('empresa.chamados.log', compact('mensagem', 'log', 'chamado', 'emailList', 'nomesEmpreendimentos'));
    }

    public function getAreasComuns($id)
    {
        $sql = "select arc_nome
        from imoveis AS IMV
        INNER JOIN areas_comuns_imoveis AS AREA ON AREA.imv_id = IMV.imv_id
        INNER JOIN areas_comuns AS COM ON COM.arc_id = AREA.arc_id
        where IMV.imv_id = ?";

        $areas = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $areas;
    }

    public function getDescricao($id, $tipo)
    {
        switch ($tipo) {
            case 1:
                $field = 'des_basica';
                break;
            case 2:
                $field = 'des_regiao';
                break;
            case 3:
                $field = 'des_areas_comuns';
                break;
            default:
                $field = 'des_plantas';
                break;
        }

        $sql = "select $field from descricoes_imoveis where imv_id = ?";

        $descricao = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $descricao;
    }

    public function getImovel($id)
    {
        $sql = "Select IMV.imv_id, BAI.bai_id, imv_referencia,
          imv_publicidade, imv_uso, imv_titulo, imv_tipo, EMP.emp_previsao_entrega,
          imv_localidade, imv_oferta, est_uf, cid_nome,
          bai_nome, imv_oferta, emp_faixa_preco_ini,
          imv_area_terreno, imv_operacao, imv_portifolio
          from imoveis IMV
          LEFT JOIN empreendimentos AS EMP ON EMP.imv_id = IMV.imv_id
          LEFT JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
          LEFT JOIN estados AS EST ON EST.est_id = LOC.est_id
          LEFT JOIN cidades AS CID ON CID.cid_id = LOC.cid_id
          LEFT JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
          where IMV.imv_id = ? ";

        $imovel = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $imovel;
    }

    public function getImagensImovel($id, $tipo = 'img_lazer')
    {
        $sql = "Select imagens.img_diretorio imagem
          from imoveis IMV
          left JOIN empreendimentos AS EMP ON EMP.imv_id = IMV.imv_id
          INNER JOIN imagens_imoveis AS imagens ON imagens.imv_id = IMV.imv_id
          where IMV.imv_id = ? ";

        $sql .= " AND $tipo = 1 ";

        $imovel = \DB::connection('mysql_seabra')->select($sql, [$id]);

        #dd($imovel);

        return $imovel;
    }

    public function getTipolias($id, $tipo)
    {
      $sql = "select tip_dorms, tip_suite, tip_vagas, tip_area from tipologias where imv_id = ? and tip_status = 0 ";

      if ($tipo == 1) {
          //$sql .= " AND tip_cobertura = 1";
      }

      $tipologias = \DB::connection('mysql_seabra')->select($sql, [$id]);

      $result = [];

      $i = 0;

      foreach ($tipologias as $tipologia) {
          if ($tipo == 4 || $tipo == 7 || $tipo == 8 || $tipo == 13 || $tipo == 14) {
              $result[$i]['tipologiaExtenso'] = $tipologia->tip_vagas.' vaga(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_area.' m<sup>2</sup> área privativa';
          } elseif ($tipo == 9 || $tipo == 11) {
              $result[$i]['tipologiaExtenso'] = $tipologia->tip_area.' m<sup>2</sup> área privativa';
          } else {
              $result[$i]['tipologiaExtenso'] = $tipologia->tip_dorms.' dormitório(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_suite.' suite(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_vagas.' vaga(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_area.' m<sup>2</sup> área privativa';
          }

          ++$i;
      }

      return $result;
    }

    public function getImagensImoveis($id, $tipo)
    {
        $where = '';

        switch ($tipo) {
            case 1:
                $where = "AND img_home = '1'";
                break;

            case 2:
                $where = "AND img_lazer = '1'";
                break;

            case 3:
                $where = "AND img_planta = '1'";
                break;

            case 4:
                $where = "AND img_fachada = '1'";
                break;

            case 5:
                $where = "AND img_decorado = '1'";
                break;

            case 6:
                $where = "AND (img_fachada = '1' OR img_planta = '1')";
                break;

            default:
                $where = 'AND img_home = 0 AND img_lazer = 0 AND img_planta = 0 AND img_fachada = 0 AND img_decorado = 0';
                break;
        }

        $sql = " select img_diretorio from imagens_imoveis where imv_id = ? $where ";

        $imagens = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $result = [];

        $i = 0;

        if (count($imagens) > 0) {
            foreach ($imagens as $imagem) {
                $path = pathinfo($imagem->img_diretorio);

                $result[$i] = 'http://www.seabra.com.br/admin/assets/images/upload/img/'.$path['basename'];

                ++$i;
            }
        } elseif ($tipo == 1) {
            $result[0] = 'http://www.seabra.com.br/admin/assets/images/upload/img/image_break.jpg';
        }

        return $result;
    }

    public function getEmpreendimentoAjax(Request $request)
    {
        if(!$request->has('referencia')) {
            return response()->json([
              'code' => 403,
              'message' => 'Parametros insuficientes para a pesquisa.'
            ]);
        }

        return json_encode($this->getEmpreendimento($request->get('referencia')));
    }

    public function getEmpreendimento($referencia)
    {
        $sql = "select IMV.imv_id, imv_referencia, imv_publicidade, imv_tipo,
        imv_area_terreno, emp_incorporacao, emp_construcao,
        emp_arquitetura, emp_qtd_torres, emp_qtd_unidades,
        emp_qtd_elevadores, emp_estacoes_proximas, emp_previsao_entrega,
        emp_fases_obra, emp_link_hot_site, emp_link_video
        from empreendimentos AS EMP
        INNER JOIN imoveis AS IMV ON IMV.imv_id = EMP.imv_id
        where IMV.imv_referencia = ?
        ";

        $empreendimentos = \DB::connection('mysql_seabra')->select($sql, [$referencia]);

        $result = [];

        foreach ($empreendimentos as $empreendimento) {

            $entrega = $empreendimento->emp_previsao_entrega;

            $result['imovel'] = $empreendimento->imv_id;
            $result['referencia'] = $empreendimento->imv_referencia;
            $result['incorporacao'] = $empreendimento->emp_incorporacao;
            $result['construcao'] = $empreendimento->emp_construcao;
            $result['arquitetura'] = $empreendimento->emp_arquitetura;
            $result['qtdtorres'] = $empreendimento->emp_qtd_torres;
            $result['qtdunidades'] = $empreendimento->emp_qtd_unidades;
            $result['qtdelevadores'] = $empreendimento->emp_qtd_elevadores;
            $result['estproximas'] = $empreendimento->emp_estacoes_proximas;
            $result['entrega'] = (new \DateTime($entrega))->format('d/m/Y');
            $result['faseobra'] = mb_strtoupper($this->getPublicidade($empreendimento->imv_publicidade), 'UTF-8');
            $result['tipo'] = $empreendimento->imv_tipo;
            $result['terreno'] = $empreendimento->imv_area_terreno.' mts<sup>2</sup>';
            $result['hotsite'] = $empreendimento->emp_link_hot_site;
            $result['video'] = $empreendimento->emp_link_video;
            $result['tipologia'] = $this->getTipologia($empreendimento->imv_id, $empreendimento->imv_tipo == 1);
            $result['tipologias'] = $this->getTipolias($empreendimento->imv_id, $empreendimento->imv_tipo);
            $result['extras'] = $this->getImovelExtras($empreendimento->imv_id);
        }

        return $result;

    }

    public function getImovelExtras($id)
    {
        $sql = "select IMV.imv_id, imv_titulo,
          imv_publicidade, imv_uso, imv_tipo,
          est_uf, cid_nome, bai_nome, imv_localidade
          from imoveis AS IMV
          LEFT JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
          LEFT JOIN estados AS EST ON EST.est_id = LOC.est_id
          LEFT JOIN cidades AS CID ON CID.cid_id = LOC.cid_id
          LEFT JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
          where IMV.imv_id = ?
        ";

        $imoveis = $empreendimentos = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $result = [];

        if (count($imoveis) > 0) {
            $i = 0;

            foreach ($imoveis as $imovel) {

                $id = $imovel->imv_id;

                $titulo = $imovel->imv_titulo;

                $estado = $imovel->est_uf;

                $cidade = $imovel->cid_nome;

                $bairro = $imovel->bai_nome;

                $endereco = $imovel->imv_localidade;

                $uso = $imovel->imv_uso;

                $tipo2 = $imovel->imv_tipo;

                $result[$i]['value'] = $id;

                $result[$i]['titulo'] = $titulo;

                $result[$i]['endereco'] = $endereco;

                $result[$i]['tipo'] = $tipo2;

                $result[$i]['estado'] = $estado;

                $result[$i]['cidade'] = mb_strtoupper($cidade, 'UTF-8');

                $result[$i]['bairro'] = mb_strtoupper($bairro, 'UTF-8');

                $result[$i]['link'] = 'app_user/imoveis/detalhes_busca/estado='.$this->sanitizeString($estado).'/cidade='.$this->sanitizeString(preg_replace('/\s+/', '_', $cidade)).'/bairro='.$this->sanitizeString(preg_replace('/\s+/', '_', $bairro)).'/tipo='.$this->detectTipo($tipo2).'/'.$id;

                ++$i;
            }
        }

        return $result;
    }

    public function getPublicidade($publicidade)
    {
        switch ($publicidade) {
            case 1:
                $publicidade = 'Pronto Para Morar';
                break;
            case 2:
                $publicidade = 'Em Construção';
                break;
            case 3:
                $publicidade = 'Lançamento';
                break;
            case 4:
                $publicidade = 'Pronto Para Morar *';
                break;
            default:
                $publicidade = 'Indisponível';
                break;
        }

        return $publicidade;
    }

    public function queryTipologias($id, $campo)
    {
        $sql = " select $campo from tipologias where imv_id = ? AND tip_status = 0 ";

        $result = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $result;
    }

    public function sanitizeString($str)
    {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        return $str;
    }

    public function detectTipo($tipo)
    {
        switch ($tipo) {
            case 1:
                $tipo = 'Apartamento';
                break;
            case 2:
                $tipo = 'Casa';
                break;
            case 3:
                $tipo = 'Cobertura';
                break;
            case 4:
                $tipo = 'Conjunto Comercial';
                break;
            case 5:
                $tipo = 'Duplex';
                break;
            case 6:
                $tipo = 'Flat';
                break;
            case 7:
                $tipo = 'Loja';
                break;
            case 8:
                $tipo = 'Ponto Comercial';
                break;
            case 9:
                $tipo = 'Terreno/Loteamento';
                break;
            case 10:
                $tipo = 'Vaga de Garagem';
                break;
            case 11:
                $tipo = 'Rural';
                break;
            default:
                $tipo = 'Indefinido';
                break;
        }

        return $tipo;
    }

    public function getTipologia($id, $tipo)
    {
        $cobertura = $tipo;

        if ($cobertura == 1) {
            //$sql .= " AND tip_cobertura = 1";
        }

        $dormitorios = $this->queryTipologias($id, 'tip_dorms');

        $resultDormitorio = [];

        foreach ($dormitorios as $key => $item) {
          $resultDormitorio[] = $item->tip_dorms;
        }

        $minDorms = min($resultDormitorio);
        $maxDorms = max($resultDormitorio);

        $result = [];

        if ($maxDorms > $minDorms) {
            $result['dorms'] = $minDorms.' a '.$maxDorms.' dormitório(s)';
        } else {
            $result['dorms'] = $minDorms.' dormitório(s)';
        }

        /* SUITES **/
        $suites = $this->queryTipologias($id, 'tip_suite');

        $arraySuites = [];

        foreach ($suites as $key => $item) {
          $arraySuites[] = $item->tip_suite;
        }

        $minSuites = min($arraySuites);
        $maxSuites = max($arraySuites);

        if ($maxSuites > $minSuites) {
            $result['suites'] = $minSuites.' a '.$maxSuites.' suite(s)';
        } else {
            $result['suites'] = $minSuites.' suite(s)';
        }

        /* Vagas **/

        $vagas = $this->queryTipologias($id, 'tip_vagas');

        $arrayVagas = [];

        foreach ($vagas as $key => $item) {
          $arrayVagas[] = $item->tip_vagas;
        }

        $minVagas = min($arrayVagas);
        $maxVagas = max($arrayVagas);

        if ($maxVagas > $minVagas) {
            $result['vagas'] = $minVagas.' a '.$maxVagas.' vaga(s)';
        } else {
            $result['vagas'] = $minVagas.' vaga(s)';
        }

        /* Vagas **/

        $area = $this->queryTipologias($id, 'tip_area');

        $arrayArea = [];

        foreach ($area as $key => $item) {
          $arrayArea[] = $item->tip_area;
        }

        $minArea = min($arrayArea);
        $maxArea = max($arrayArea);

        $result['valor'] = 0;

        if ($maxArea > $minArea) {
            $result['area'] = $minArea.' a '.$maxArea.' m<sup>2</sup> área privativa';
        } else {
            $result['area'] = $minArea.' m<sup>2</sup> área privativa';
            $result['valor'] = $minArea;
        }

        /* Preço M² Venda **/

        $mt2 = $this->queryTipologias($id, 'tip_valor_metro_quad');

        $arrayMt2 = [];

        foreach ($mt2 as $key => $item) {
          $arrayMt2[] = $item->tip_valor_metro_quad;
        }

        $minArea = min($arrayMt2);

        $result['valorImovelTotal'] = 0;

        if ($result['valor'] > 0) {
            $result['valorImovelTotal'] = number_format($minArea * $result['valor'], 2, ',', '.');

            $result['valorImovelTotal'] = substr($result['valorImovelTotal'], 0, -2);
        }

        $minArea = number_format($minArea, 2, ',', '.');

        $result['quadrado'] = 'R$ '.$minArea.'  por m<sup>2</sup>';

        /* Preço M² Aluguel **/

        $tipoArea = $this->queryTipologias($id, 'tip_area');

        $arrayTipoArea = [];

        foreach ($tipoArea as $key => $item) {
          $arrayTipoArea[] = $item->tip_area;
        }

        $tipArea = max($arrayTipoArea);

        $sql = "select imvof_valor_aluguel from imoveis_oferta where imv_id = ?";
        $areaAluguelResult = \DB::connection('mysql_seabra')->select($sql, [$id]);

        #dd($areaAluguel);

        $areaAluguel = 0;

        if($tipArea > 0 && $areaAluguelResult > 0) {
           $areaAluguel = $areaAluguel / $tipArea;
        }

        $areaAluguel = number_format($areaAluguel, 2, ',', '.');

        $result['quadradoAluguel'] = '( R$ '.$areaAluguel.'  por m<sup>2</sup> )';

        return $result;
    }

    public function fases(Request $request)
    {
        $data = $request->request->all();

        $id = $data['id'];

        $fase = Fase::where('status_id', $id)->get();

        $resultado = $fase->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->nome];
        });

        return json_encode($resultado);
    }
}
