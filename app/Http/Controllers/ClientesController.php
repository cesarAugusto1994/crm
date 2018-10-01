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

        if(!empty($data['id'])) {
            $clientes->where('id', $data['id']);
        }

        if(!empty($data['cliente'])) {
            $clientes->where('id', $data['cliente']);
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

        $clientes = $clientes->orderByDesc('created_at')->paginate();

        foreach ($data as $key => $value) {

            $clientes->appends($key, $value);

        }

        $status = Status::where('id_empresa', $user->empresa->id)->get();

        $classificacao = Classificacao::where('id_empresa', $user->empresa->id)->orderBy('descricao')->get();
        $responsaveis = \App\User::where('empresa_id', $user->empresa->id)->orderBy('name')->get();

        return view('empresa.clientes.index', compact('clientes','status','classificacao','responsaveis'));
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

    public function importarClientes()
    {
        $itens= array (
          0 =>
          array (
            'nome' => 'DANIELA MARE MARTINS',
            'empresa' => '',
            'email' => 'd.maremartins@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '981445631	',
          ),
          1 =>
          array (
            'nome' => 'PAULO SCHOR',
            'empresa' => '',
            'email' => 'pschor@pobox.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '991343694',
          ),
          2 =>
          array (
            'nome' => 'MICHELE ANTONIALLEC',
            'empresa' => '',
            'email' => 'miantoniallec@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '950401502',
          ),
          3 =>
          array (
            'nome' => 'JULIANO SANSAO',
            'empresa' => '',
            'email' => 'jcsansao@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '12996364252',
          ),
          4 =>
          array (
            'nome' => 'ISABELLA CALIXTO SIQUEIRA',
            'empresa' => '',
            'email' => 'isabellacalixtosiqueira@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '958074338	',
          ),
          5 =>
          array (
            'nome' => 'GUSTAVO',
            'empresa' => '',
            'email' => 'gutoy@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '23392880',
          ),
          6 =>
          array (
            'nome' => 'EDGAR CHUEMPIS',
            'empresa' => '',
            'email' => 'chuempis@hotmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '99991111',
          ),
          7 =>
          array (
            'nome' => 'VIRGILIO PAIVA',
            'empresa' => '',
            'email' => 'virgilio.paiva@terra.com.br	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '996459450',
          ),
          8 =>
          array (
            'nome' => 'TACIANA SOUZA STACCHINI ',
            'empresa' => '',
            'email' => 'tacidesouza@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '963684994',
          ),
          9 =>
          array (
            'nome' => 'GUSTAVO MODESTO',
            'empresa' => '',
            'email' => 'gumodesto@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '19983930348',
          ),
          10 =>
          array (
            'nome' => 'PRISCILA MALDONADO',
            'empresa' => '',
            'email' => 'priscila_maldonado@yahoo.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '949699926',
          ),
          11 =>
          array (
            'nome' => 'WAGNER LUCATELLI',
            'empresa' => '',
            'email' => 'wlucatelli@uol.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '99032189',
          ),
          12 =>
          array (
            'nome' => 'GUTO',
            'empresa' => '',
            'email' => 'gutoy@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '23392880',
          ),
          13 =>
          array (
            'nome' => 'RAFAEL DUTRA PEREIRA',
            'empresa' => '',
            'email' => 'rafael.dutra.pereira@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '999727255	',
          ),
          14 =>
          array (
            'nome' => 'ORNELLA NASSER',
            'empresa' => '',
            'email' => 'ornella1_nasser@yahoo.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '999152147	',
          ),
          15 =>
          array (
            'nome' => 'CARINA LOTTI',
            'empresa' => '',
            'email' => 'carillotti@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '976357629',
          ),
          16 =>
          array (
            'nome' => 'GRAZIELA FOLLA',
            'empresa' => '',
            'email' => 'graziela.folla@sc.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '987510197',
          ),
          17 =>
          array (
            'nome' => 'MARIA ANGELA',
            'empresa' => '',
            'email' => 'longhrirom@ig.com.br	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '988801057',
          ),
          18 =>
          array (
            'nome' => 'MARIA PASSONI',
            'empresa' => '',
            'email' => 'letspassoni@icloud.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '1353950545',
          ),
          19 =>
          array (
            'nome' => 'VALDIR ROMERO',
            'empresa' => '',
            'email' => 'longhirom@ig.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '988801057',
          ),
          20 =>
          array (
            'nome' => 'ILDIKO DE CARVALHO',
            'empresa' => '',
            'email' => 'ildikodc@web.de',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '17663426527	',
          ),
          21 =>
          array (
            'nome' => 'ANDRE GUSTAVO FERNANDES',
            'empresa' => '',
            'email' => 'andre.gustavo.fernandes@hotmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '992085537',
          ),
          22 =>
          array (
            'nome' => 'RODRIGO SORELLI',
            'empresa' => '',
            'email' => 'rsorelli@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '973725455',
          ),
          23 =>
          array (
            'nome' => 'FILIPE',
            'empresa' => '',
            'email' => 'furbysons@me.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '97415747',
          ),
          24 =>
          array (
            'nome' => 'FILIPE',
            'empresa' => '',
            'email' => 'furbysons@me.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '97415747',
          ),
          25 =>
          array (
            'nome' => 'MARCIA RABELLO',
            'empresa' => '',
            'email' => 'marcia@sustenta.eng.br	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '65999821089	',
          ),
          26 =>
          array (
            'nome' => 'EDVALDO GAMERO',
            'empresa' => '',
            'email' => 'egamero@uol.com.br	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '983743334',
          ),
          27 =>
          array (
            'nome' => 'ROBERTO',
            'empresa' => '',
            'email' => 'hrk@terra.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '992723673',
          ),
          28 =>
          array (
            'nome' => 'PATRICIA LUCCI',
            'empresa' => '',
            'email' => 'patricia@nataccilucci.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '992262675	',
          ),
          29 =>
          array (
            'nome' => 'VALMIR RAVAJO',
            'empresa' => '',
            'email' => 'rva.valmir@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '944003928	',
          ),
          30 =>
          array (
            'nome' => 'JULIO BULL',
            'empresa' => '',
            'email' => 'jclbull@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '995458431',
          ),
          31 =>
          array (
            'nome' => 'LEANDRO LOPES',
            'empresa' => '',
            'email' => 'lmlopes79@yahoo.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '12 976447643',
          ),
          32 =>
          array (
            'nome' => 'CINTIA GALVAO',
            'empresa' => '',
            'email' => 'cintiagalvao@me.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '999160584',
          ),
          33 =>
          array (
            'nome' => 'ROBERTO SCERVINO',
            'empresa' => '',
            'email' => 'rscervino@globo.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '98426-3065',
          ),
          34 =>
          array (
            'nome' => 'MARCO AURELIO CARVALHO JUNIOR',
            'empresa' => '',
            'email' => 'macarvalhojunior@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '975141835',
          ),
          35 =>
          array (
            'nome' => 'LILIAN MARQUES',
            'empresa' => '',
            'email' => 'marqueslily@hotmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '940562662	',
          ),
          36 =>
          array (
            'nome' => 'GUSTAVO CROITOR',
            'empresa' => '',
            'email' => 'gucroitor@gmail.com	',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '987646764	',
          ),
          37 =>
          array (
            'nome' => 'FABRIZIO MACIEL',
            'empresa' => '',
            'email' => 'fabrizio.maciel@ipsos.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '988266077	',
          ),
          38 =>
          array (
            'nome' => 'NATALIA LUIZ',
            'empresa' => '',
            'email' => 'natiaraujoluiz@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '981587030	',
          ),
          39 =>
          array (
            'nome' => 'MARCELO SOUZA',
            'empresa' => '',
            'email' => 'marcelo.g.souza@uol.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '999346834	',
          ),
          40 =>
          array (
            'nome' => 'EMANUELA BORGES',
            'empresa' => '',
            'email' => 'emanuelaborges@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '970476379	',
          ),
          41 =>
          array (
            'nome' => 'ALEXANDRE SANTOS',
            'empresa' => '',
            'email' => 'alexandre.j2903@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '947396794	',
          ),
          42 =>
          array (
            'nome' => 'GUSTAVO',
            'empresa' => '',
            'email' => 'gucroitor@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '985936333	',
          ),
          43 =>
          array (
            'nome' => 'LETICIA BASTOS',
            'empresa' => '',
            'email' => 'leticiaqbastos@hotmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '969681929',
          ),
          44 =>
          array (
            'nome' => 'VANUSA ALVES',
            'empresa' => '',
            'email' => 'van_alves@oi.com.br',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '950494426	',
          ),
          45 =>
          array (
            'nome' => 'LILLIAN BRAGA',
            'empresa' => '',
            'email' => 'lillian.braga@gmail.com',
            'tipo' => 1,
            'grupo' => 'CASAVIVA',
            'tel_com' => '964981444',
          ),
        );

        $beyound = array (
          0 =>
          array (
            'nome' => 'SERGIO MENEGUINI',
            'empresa' => '',
            'email' => 'smeneguini@ig.com.br',
            'tipo' => 1,
            'grupo' => 'BEYOND JARDINS',
            'tel_com' => '39517591	',
          ),
          1 =>
          array (
            'nome' => 'CELINA BARROS',
            'empresa' => '',
            'email' => 'celina.barros@item.com.br',
            'tipo' => 1,
            'grupo' => 'BEYOND JARDINS',
            'tel_com' => '00000000',
          ),
          2 =>
          array (
            'nome' => 'CRISTIANA AZEVEDO',
            'empresa' => '',
            'email' => 'cristiana.ra@uol.com.br',
            'tipo' => 1,
            'grupo' => 'BEYOND JARDINS',
            'tel_com' => '976930885',
          ),
          3 =>
          array (
            'nome' => 'Monica Carvalho',
            'empresa' => '',
            'email' => 'monica.carvalho02@hotmail.com',
            'tipo' => 1,
            'grupo' => 'BEYOND JARDINS',
            'tel_com' => '954368420',
          ),
        );

        $parkside = array (
          0 =>
          array (
            'nome' => 'MARCELO RODRIGUES PULCINELLI',
            'empresa' => '',
            'email' => 'marcelo.pulcinelli@uol.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '9139-4765',
          ),
          1 =>
          array (
            'nome' => 'LUIZ HENRIQUE M. PIMENTA',
            'empresa' => '',
            'email' => 'luispimenta@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '9113-9042',
          ),
          2 =>
          array (
            'nome' => 'EDUARDO MORANTE',
            'empresa' => '',
            'email' => 'morante@uol.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '3886-8117',
          ),
          3 =>
          array (
            'nome' => 'MARCO ANTONIO DARIM',
            'empresa' => '',
            'email' => 'mdarim@sabesp.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '3388-6546',
          ),
          4 =>
          array (
            'nome' => 'MARIA JUDITH MACHADO',
            'empresa' => '',
            'email' => 'vtscs01@trt02.gov.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '4221-1831',
          ),
          5 =>
          array (
            'nome' => 'MARIA LUCIA PANOSSIAN',
            'empresa' => '',
            'email' => 'malupanossian@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '3849-2947',
          ),
          6 =>
          array (
            'nome' => 'LUIS CARLOS SILVA',
            'empresa' => '',
            'email' => 'luiscs@uol.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '8536-5426',
          ),
          7 =>
          array (
            'nome' => 'LUCIANA MARIA FARISCO',
            'empresa' => '',
            'email' => 'lucianaf@br.ibm.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '9619-7262',
          ),
          8 =>
          array (
            'nome' => 'FABIO GALLI MATEO',
            'empresa' => '',
            'email' => 'fgdimatteo@gmx.net',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5584-9818',
          ),
          9 =>
          array (
            'nome' => 'GUSTAVO RICARDO DA ROCHA',
            'empresa' => '',
            'email' => 'gakken@uol.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '9793-2409',
          ),
          10 =>
          array (
            'nome' => 'JOSE ROBERTO NAPOLEONE',
            'empresa' => '',
            'email' => 'bnapoleone@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '3174-9776',
          ),
          11 =>
          array (
            'nome' => 'CARLOS ROBERTO VILANI',
            'empresa' => '',
            'email' => 'maoliveira@panamericano.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '3146-5688',
          ),
          12 =>
          array (
            'nome' => 'ANA MARIA MIRALLLA RONZI',
            'empresa' => '',
            'email' => 'anamiralla@companhiarh.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5055-0337',
          ),
          13 =>
          array (
            'nome' => 'CARLOS GUN',
            'empresa' => '',
            'email' => 'cgun@uol.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '9981-2721',
          ),
          14 =>
          array (
            'nome' => 'SANDRA TERESITA SORLINO',
            'empresa' => '',
            'email' => 'sandysorlino@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '9669-6946',
          ),
          15 =>
          array (
            'nome' => 'CLAUDIA T. PORCIUNCULA',
            'empresa' => '',
            'email' => 'dra.claudiasabah@uol.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '3681-5552',
          ),
          16 =>
          array (
            'nome' => 'RITA AIZENSTEIN FURMAN',
            'empresa' => '',
            'email' => 'raf@raf.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5573-8916',
          ),
          17 =>
          array (
            'nome' => 'CARLOS GIL LEMOS',
            'empresa' => '',
            'email' => 'cglemos@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5538-8822',
          ),
          18 =>
          array (
            'nome' => 'CLAUDIO DA SILVA SAPIA',
            'empresa' => '',
            'email' => 'cssapia@itauseguros.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5019-3249',
          ),
          19 =>
          array (
            'nome' => 'MINOL HONDA',
            'empresa' => '',
            'email' => 'victory@victorytravel.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5081-4936',
          ),
          20 =>
          array (
            'nome' => 'MARCELO GUIMARAES PERES',
            'empresa' => '',
            'email' => 'marceloperes@terra.com.br',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '8117-1514',
          ),
          21 =>
          array (
            'nome' => 'ORLANDO LAURENTI',
            'empresa' => '',
            'email' => 'paula_laurenti@bmc.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5573-3611',
          ),
          22 =>
          array (
            'nome' => 'EDUARDO MOMOLE CARNEVALE',
            'empresa' => '',
            'email' => 'ecarnevale@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '',
          ),
          23 =>
          array (
            'nome' => 'SILVANA PEDROSA BOTTA',
            'empresa' => '',
            'email' => 'silvanabotta@hotmail.com',
            'tipo' => 1,
            'grupo' => 'PARKSIDE IBIRAPUERA',
            'tel_com' => '5501-9700',
          ),
        );

        $mario = array (
          0 =>
          array (
            'nome' => 'SAMYA PAIVA',
            'empresa' => '',
            'email' => 'samya.paiva.apple@gmail.com',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '984476232',
          ),
          1 =>
          array (
            'nome' => 'AUGUSTO MALMEGRIM MAGRI',
            'empresa' => '',
            'email' => 'augustomagri.am@gmail.com',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '95981123070',
          ),
          2 =>
          array (
            'nome' => 'FABIO KAHILL',
            'empresa' => '',
            'email' => 'fabiokahil@gmail.com	',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '',
          ),
          3 =>
          array (
            'nome' => 'FERNANDA DEXHEIMER',
            'empresa' => '',
            'email' => 'fernanda_bona@hotmail.com	',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '943884911	',
          ),
          4 =>
          array (
            'nome' => 'EGLACY SOPHIA ',
            'empresa' => '',
            'email' => 'eglacy.sophia@gmail.com',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '991536657',
          ),
          5 =>
          array (
            'nome' => 'DANIEL MURIAS		',
            'empresa' => '',
            'email' => 'daniel_murias@hotmail.com',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '996258020	',
          ),
          6 =>
          array (
            'nome' => 'FLAVIO GREVE',
            'empresa' => '',
            'email' => 'flavio@greve.com	',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '981558255	',
          ),
          7 =>
          array (
            'nome' => 'ANA CAROLINA MIRANDEZ',
            'empresa' => '',
            'email' => 'cacamirandez@hotmail.com',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '78163133',
          ),
          8 =>
          array (
            'nome' => 'LUIZ',
            'empresa' => '',
            'email' => 'zaugustomig@hotmail.com',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '99999999 ',
          ),
          9 =>
          array (
            'nome' => 'RICARDO LAPA FILHO',
            'empresa' => '',
            'email' => 'ricardolapafilho@hotmail.com	',
            'tipo' => 1,
            'grupo' => 'MARIO FERRAZ 415',
            'tel_com' => '71 997119611',
          ),
        );

        $viazza = array (
          0 =>
          array (
            'nome' => 'DINAH SARTO  ',
            'empresa' => '',
            'email' => 'dinahsarto@terra.com.br',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '984292726',
          ),
          1 =>
          array (
            'nome' => 'SILVIA',
            'empresa' => '',
            'email' => 'lltorre2004@yahoo.com.br ',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '50580554',
          ),
          2 =>
          array (
            'nome' => 'JOSÉ ROBERTO PERINA',
            'empresa' => '',
            'email' => 'jrp.perina@gmail.com',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '9852705 ',
          ),
          3 =>
          array (
            'nome' => 'ELISABETE ',
            'empresa' => '',
            'email' => 'bete_pvp@hotmail.com',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '952527445 ',
          ),
          4 =>
          array (
            'nome' => 'ISABELLA NOSSIG CARVALHO ',
            'empresa' => '',
            'email' => 'bellanossig@hotmail.com',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => ' 949905591 ',
          ),
          5 =>
          array (
            'nome' => 'DENIZE NUNES LEITE BARREIRO ',
            'empresa' => '',
            'email' => 'denize_leite@hotmail.com',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '999191979',
          ),
          6 =>
          array (
            'nome' => 'ANDRESSA ZEIDAN',
            'empresa' => ' ',
            'email' => 'dessazeidan@gmail.com',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '9.81259843',
          ),
          7 =>
          array (
            'nome' => 'ANA MARIA BECKANN',
            'empresa' => '',
            'email' => 'anamariabeckmann@yahoo.com.br',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '968454653',
          ),
          8 =>
          array (
            'nome' => 'SABRINA LINS ROSA',
            'empresa' => '',
            'email' => 'sabrinalinsrosa@outlook.com.br',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '974482899',
          ),
          9 =>
          array (
            'nome' => 'GIOVANA ALVORADA',
            'empresa' => '',
            'email' => 'gialvorada@gmail.com',
            'tipo' => 1,
            'grupo' => 'VIAZZA 400',
            'tel_com' => '23689825',
          ),
        );

        foreach ($viazza as $key => $item) {

            $email = Emails::where('email', $item['email'])->get();

            if($email->isNotEmpty()) {
                continue;
            }

              $data = [
                'nome' => $item['nome'],
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
              $email->email = $item['email'];
              $email->cliente_id = $cliente->id;
              $email->principal = 'SIM';
              $email->save();

              $telefone = new Telefones();
              $telefone->cliente_id = $cliente->id;
              $telefone->telefone = $item['tel_com'];
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

              $sql2 = "select * from imoveis where imv_titulo = '" . $item['grupo'] . "'";
              $imovel = \DB::connection('mysql_seabra')->select($sql2);

              $referencia = null;

              if(!empty($imovel[0])) {
                $referencia = $imovel[0]->imv_referencia;
                $titulo = $imovel[0]->imv_titulo;
                if(!empty($referencia)) {

                  $produtos = \App\Models\Produtos::where('referencia', $referencia)->where('nome', $titulo)->get();

                  $produto = $produtos->first();

                  $empreendimento = new Produtos();
                  $empreendimento->cliente_id = $cliente->id;
                  $empreendimento->chamado_id = null;
                  $empreendimento->produto_id = $produto->id;
                  $empreendimento->save();

                }

              }

        }

    }

}
