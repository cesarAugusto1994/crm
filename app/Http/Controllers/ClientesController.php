<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Clientes\{Produtos, Midias, Emails, Telefones, Enderecos, Tipo as TipoCliente, Tratamento};
use App\Models\Chamados\{Status, Classificacao};
use App\Models\Clientes\Telefones\Tipo;
use App\Models\Clientes\Enderecos\Tipo as TipoEndereco;
use App\Models\Estados;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('manage-clientes.index', Empresa::class);

        $data = $request->request->all();

        $user = \Auth::user();

        $clientes = Clientes::where('id_empresa', $user->empresa_id);

        if($request->has('buscar')) {

            if(!empty($data['id'])) {
                $clientes->where('id', $data['id']);
            }

            if(!empty($data['cliente'])) {
                $clientes->where('id', $data['cliente']);
            }

            if($request->has('chamados_ativos')) {
                $clientes->where('tipo', 2);
                $clientes->where('ativo', true);
                $clientes->whereHas('chamados', function($query) {
                    $query->whereIn('situacao', [1,2]);
                });
            }

            if($request->has('chamados_finalizados')) {
                $clientes->where('tipo', 2);
                $clientes->where('ativo', true);
                $clientes->whereHas('chamados', function($query) {
                    $query->where('situacao', 3);
                });
            }

            if($request->has('sem_chamados')) {
                $clientes->where('tipo', 2);
                $clientes->where('ativo', true);
                $clientes->doesntHave('chamados');
            }

            if(!empty($data['nome'])) {
                $clientes->where('nome', 'LIKE', "%".$data['nome']."%");
            }

            if(!empty($data['empresa'])) {
                $clientes->where('empresa', 'LIKE', "%".$data['empresa']."%");
            }

            if(!empty($data['tipo'])) {
                $clientes->where('tipo', $data['tipo']);
            }

            if(!empty($data['email'])) {
                $clientes->whereHas('emails', function ($query) use ($data) {
                    $query->where('email', 'LIKE', "%".$data['email']."%");
                });
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

                    $clientes->whereHas('empreendimentos', function ($query) use ($data, $produto) {
                        $query->where('produto_id', $produto->id);
                    });
                  }
                }

            }

            if(!empty($data['midia'])) {
                $clientes->whereHas('midias', function ($query) use ($data) {
                    $query->where('midia_id', $data['midia']);
                });
            }

            if(!empty($data['chamado'])) {
                $clientes->whereHas('chamados', function ($query) use ($data) {
                    $query->where('id', $data['chamado']);
                });
            }

            if(!empty($data['classificacao'])) {
                $clientes->whereHas('chamados', function ($query) use ($data) {
                    $query->where('classificacao', $data['classificacao']);
                });
            }

            if(!empty($data['pessoa_responsavel'])) {
                $clientes->whereHas('chamados', function ($query) use ($data) {
                    $query->where('pessoa_responsavel', $data['pessoa_responsavel']);
                });
            }

            if(!empty($data['situacao'])) {
                $clientes->whereHas('chamados', function ($query) use ($data) {
                    $query->where('situacao', $data['situacao']);
                });
            }

            if(!empty($data['start']) && !empty($data['end'])) {

                $start = \DateTime::createFromFormat('d/m/Y', $data['start']);
                $end = \DateTime::createFromFormat('d/m/Y', $data['end']);

                $clientes->whereHas('chamados', function ($query) use ($start, $end) {
                    $query->where('created_at', '>=', $start->format('Y-m-d') . ' 00:00:00')
                    ->where('created_at', '<=', $end->format('Y-m-d') . ' 23:59:59');
                });

            }
        } else {
          $clientes->where('id', 0);
        }

        $clientes = $clientes->orderByDesc('created_at');

        $contador = $clientes->count();

        $clientes = $clientes->get();

        foreach ($data as $key => $value) {
            //$clientes->appends($key, $value);
        }

        $status = Status::where('id_empresa', $user->empresa->id)->get();

        $classificacao = Classificacao::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $responsaveis = \App\User::where('empresa_id', $user->empresa->id)->orderBy('name')->get();

        return view('empresa.clientes.index', compact('clientes','status','classificacao','responsaveis','contador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = TipoCliente::where('exibir', true)->get();
        $formas = Tratamento::where('exibir', true)->get();

        return view('empresa.clientes.create', compact('tipos', 'formas'));
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

        $data['id_empresa'] = \Auth::user()->empresa_id;

        if(empty($data['cpf'])) {
          $data['cpf'] = '';
        }

        $cliente = Clientes::create($data);

        $email = new Emails();
        $email->email = $data['email'];
        $email->cliente_id = $cliente->id;
        $email->principal = 'SIM';
        $email->save();

        flash('O cliente foi adicionado com sucesso!')->success()->important();

        return redirect()->route('clientes.show', ['id' => $cliente->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::FindOrFail($id);

        $this->authorize('manage-clientes.view', $cliente);

        $tipos = Tipo::all();
        $tiposEndereco = TipoEndereco::all();
        $estados = Estados::all();

        return view('empresa.clientes.detalhes', compact('cliente', 'tipos', 'tiposEndereco', 'estados'));
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

        $cliente = Clientes::findOrFail($id);
        $cliente->update($data);

        flash('O cliente foi atualizado com sucesso!')->success()->important();

        return redirect()->back();
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
            $registro = Clientes::findOrFail($id);
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

    public function empreendimentoStore(Request $request, $id)
    {
        $data = $request->request->all();
        $cliente = Clientes::findOrFail($id);

        $sql2 = "select * from imoveis where imv_id = " . (int)$request->get('empreendimento');
        $imovel = \DB::connection('mysql_seabra')->select($sql2);

        $referencia = null;

        if(!empty($imovel[0])) {
          $referencia = $imovel[0]->imv_referencia;
          $titulo = $imovel[0]->imv_titulo;
          if(!empty($referencia)) {

            $produtos = \App\Models\Produtos::where('referencia', $referencia)->where('nome', $titulo)->get();

            $produto = $produtos->first();

            $hasRegistro = Produtos::where('cliente_id', $cliente->id)->where('produto_id', $produto->id)->get();

            if($hasRegistro->isNotEmpty()) {
              flash('O empreendimento já foi adicionado ao cliente!')->error()->important();
              return redirect()->back();
            }

            $empreendimento = new Produtos();
            $empreendimento->cliente_id = $cliente->id;
            $empreendimento->chamado_id = null;
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
        $cliente = Clientes::findOrFail($id);

        $hasRegistro = Midias::where('cliente_id', $cliente->id)->where('midia_id', $data['midia'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('A midia já foi adicionada ao cliente!')->error()->important();
          return redirect()->back();
        }

        $empreendimento = new Midias();
        $empreendimento->cliente_id = $cliente->id;
        $empreendimento->chamado_id = null;
        $empreendimento->midia_id = $data['midia'];
        $empreendimento->save();

        flash('A midia foi adicionada ao cliente com sucesso!')->success()->important();

        return redirect()->back();
    }

    public function emailStore(Request $request, $id)
    {
        $data = $request->request->all();
        $cliente = Clientes::findOrFail($id);

        $hasRegistro = Emails::where('cliente_id', $cliente->id)->where('email', $data['email'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('O email já foi adicionado ao cliente!')->error()->important();
          return redirect()->back();
        }

        $empreendimento = new Emails();
        $empreendimento->cliente_id = $cliente->id;
        $empreendimento->email = $data['email'];

        $principal = 'NAO';

        if($cliente->emails->isEmpty()) {
          $principal = 'SIM';
        }

        $empreendimento->principal = $principal;

        $empreendimento->save();

        flash('O email foi adicionado ao cliente com sucesso!')->success()->important();

        return redirect()->back();
    }

    public function telefoneStore(Request $request, $id)
    {
        $data = $request->request->all();
        $cliente = Clientes::findOrFail($id);

        $hasRegistro = Telefones::where('cliente_id', $cliente->id)->where('telefone', $data['telefone'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('O telefone já foi adicionado ao cliente!')->error()->important();
          return redirect()->back();
        }

        $telefone = new Telefones();
        $telefone->cliente_id = $cliente->id;
        $telefone->telefone = $data['telefone'];
        $telefone->ddi = $data['ddi'] ?? "+55";
        $telefone->ddd = $data['ddd'] ?? "11";
        $telefone->ramal = $data['ramal'] ?? "";
        $telefone->tipo = $data['tipo'];

        $principal = 'NAO';

        if($cliente->emails->isEmpty()) {
          $principal = 'SIM';
        }

        $telefone->principal = $principal;

        $telefone->save();

        flash('O telefone foi adicionado ao cliente com sucesso!')->success()->important();

        return redirect()->back();
    }

    public function enderecoStore(Request $request, $id)
    {
        $data = $request->request->all();
        $cliente = Clientes::findOrFail($id);

        $hasRegistro = Enderecos::where('cliente_id', $cliente->id)->where('endereco', $data['endereco'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('O endereço já foi adicionado ao cliente!')->error()->important();
          return redirect()->back();
        }

        $endereco = new Enderecos();
        $endereco->cliente_id = $cliente->id;
        $endereco->endereco = $data['endereco'];
        $endereco->numero = $data['numero'] ?? '';
        $endereco->bairro = $data['bairro'] ?? '';
        $endereco->cidade = $data['cidade'] ?? '';
        $endereco->estado = $data['estado'];
        $endereco->tipo = $data['tipo'];
        $endereco->referencia = $data['referencia'] ?? '';
        $endereco->complemento = $data['complemento'] ?? '';
        $endereco->pais = "Brasil";
        $endereco->cep = $data['cep'] ?? '';
        $endereco->caixa_postal = '';

        $principal = 'NAO';

        if($cliente->emails->isEmpty()) {
          $principal = 'SIM';
        }

        $endereco->principal = $principal;

        $endereco->save();

        flash('O endereço foi adicionado ao cliente com sucesso!')->success()->important();

        return redirect()->back();
    }

    public function emailRemove(Request $request, $id)
    {
        $data = $request->request->all();
        $email = Emails::findOrFail($id);
        $email->delete();

        flash('O email foi removido com sucesso!')->success()->important();
        return redirect()->back();
    }

    public function empreendimentoRemove(Request $request, $id)
    {
        $data = $request->request->all();
        $registro = Produtos::findOrFail($id);
        $registro->delete();

        flash('O empreendimento foi removido com sucesso!')->success()->important();
        return redirect()->back();
    }

    public function midiaRemove(Request $request, $id)
    {
        $data = $request->request->all();
        $registro = Midias::findOrFail($id);
        $registro->delete();

        flash('Amidia foi removida com sucesso!')->success()->important();
        return redirect()->back();
    }

    public function telefoneRemove(Request $request, $id)
    {
        $data = $request->request->all();
        $telefone = Telefones::findOrFail($id);
        $telefone->delete();

        flash('O telefone foi removido com sucesso!')->success()->important();
        return redirect()->back();
    }

    public function enderecoRemove(Request $request, $id)
    {
        $data = $request->request->all();
        $endereco = Enderecos::findOrFail($id);
        $endereco->delete();

        flash('O endereco foi removido com sucesso!')->success()->important();
        return redirect()->back();
    }

    public function verificaEmail(Request $request)
    {
        $data = $request->request->all();

        $email = $data['email'];

        $clientes = Clientes::whereHas('emails', function ($query) use ($email) {
            $query->where('email', 'like', "%".$email."%");
        })->where('id_empresa', \Auth::user()->id)->get();

        $codigo = 100;
        $resultado = false;

        if($clientes->isNotEmpty()) {
          $codigo = 101;
          $resultado = true;
        }

        return json_encode([
          'code' => $codigo,
          'message' => $resultado,
        ]);
    }

    public function cep(Request $request)
    {
        $data = $request->request->all();

        $conection = \DB::connection('mysql_cep');

        if(!isset($data['cep'])) {
          return json_encode([
            'code' => 101,
            'data' => false
          ]);
        }

        $cep = $data['cep'];
        /*
                $query = "   SELECT
                                 log.log_nome endereco,
                                 bai.bai_no bairro,
                                 log.cep cep,
                                 log.ufe_sg uf,
                                 loc.loc_no cidade
                             FROM
                                 log_logradouro AS log
                             INNER JOIN log_bairro     AS bai ON log.bai_nu_sequencial_ini = bai.bai_nu_sequencial
                             INNER JOIN log_localidade AS loc ON loc.loc_nu_sequencial     = bai.loc_nu_sequencial
                             WHERE
                                 log.cep = ?
                             #GROUP BY
                                 #log.cep
                           ";

                $resultado = $conection->select($query, [$cep]);
        */
        $cepresult = app('Cep')->find($cep);

        $cepInfo = $cepresult->toJson();

        $resultado = json_decode($cepInfo->result(), 1);

        if(!empty($resultado)) {
            return json_encode([
              'code' => 100,
              'data' => $resultado
            ]);
        }

        return json_encode([
          'code' => 101,
          'data' => false
        ]);

    }

    public function importar(Request $request)
    {
        $data = $request->request->all();

        $resultado = [];

        if($request->has('buscar')) {

            $nome = $request->get('nome');

            $sql = "select * from email where grupo like '%$nome%'";

            $query = \DB::connection('mysql_mail')->select($sql);

            foreach ($query as $key => $item) {

                $importado = false;

                $email = Emails::where('email', $item->email)->get();

                if($email->isNotEmpty()) {
                    $importado = true;
                }

                $resultado[] = [
                    'id' => $item->seqemail,
                    'nome' => $item->nome,
                    'email' => $item->email,
                    'grupo' => $item->grupo,
                    'importado' => $importado
                ];
            }

        }

        return view('empresa.clientes.importar.importar', compact('resultado'));
    }

    public function importarClientes(Request $request)
    {
        $data = $request->request->all();

        $nome = $request->get('old_nome');
        $novoNome = $request->get('nome');
        $empreendimento = $request->get('empreendimento');

        $sql = "select * from email where grupo like '%$nome%'";
        $query = \DB::connection('mysql_mail')->select($sql);

        $sql2 = "select * from imoveis where imv_id = '" . $empreendimento . "'";
        $imovel = \DB::connection('mysql_seabra')->select($sql2);

        if(!empty($imovel[0])) {

            $referencia = $imovel[0]->imv_referencia;
            $titulo = $imovel[0]->imv_titulo;

            $produtos = \App\Models\Produtos::where('referencia', $referencia)
            ->where('nome', $titulo)
            ->get();

            if($produtos->isEmpty()) {

              flash('Empreendimento não encontrado no CRM!')->error()->important();
              return redirect()->back();

            }

            $produto = $produtos->first();

        }

        foreach ($query as $key => $item) {

            $email = Emails::where('email', $item->email)->get();

            if($email->isNotEmpty()) {
                continue;
            }

            $data = [
              'nome' => $item->nome,
              'pessoa'=>1,
              'cpf'=>'',
              'tipo'=>2,
              'forma_tratamento'=>1,
              'sexo'=>1,
              'id_empresa'=>8,
              'empresa'=>''
            ];

            $cliente = Clientes::create($data);

            $email = new Emails();
            $email->email = $item->email;
            $email->cliente_id = $cliente->id;
            $email->principal = 'SIM';
            $email->save();

            $telefone = new Telefones();
            $telefone->cliente_id = $cliente->id;
            $telefone->telefone = $item->tel_com;
            $telefone->ddi = "+55";
            $telefone->ddd = "11";
            $telefone->ramal = "";
            $telefone->tipo = 1;

            $principal = 'NAO';

            if($cliente->emails->isEmpty()) {
              $principal = 'SIM';
            }

            $telefone->principal = $principal;

            $telefone->save();

            $empreendimento = new Produtos();
            $empreendimento->cliente_id = $cliente->id;
            $empreendimento->chamado_id = null;
            $empreendimento->produto_id = $produto->id;
            $empreendimento->save();
        }

        flash('Clientes Importados')->success()->important();
        return redirect()->back();

    }

}
