<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Clientes\{Produtos, Midias, Emails, Telefones, Enderecos, Tipo as TipoCliente, Tratamento};
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

        if(!empty($data['nome'])) {
            $clientes->where('nome', 'like', "%".$data['nome']."%");
        }

        if(!empty($data['email'])) {
            $clientes->whereHas('emails', function ($query) use ($data) {
                $query->where('email', 'like', "%".$data['email']."%");
            });
        }

        if(!empty($data['empreendimento'])) {
            $clientes->whereHas('empreendimentos', function ($query) use ($data) {
                $query->where('produto_id', $data['empreendimento']);
            });
        }

        if(!empty($data['midia'])) {
            $clientes->whereHas('midias', function ($query) use ($data) {
                $query->where('midia_id', $data['midia']);
            });
        }

        $clientes = $clientes->paginate();

        foreach ($data as $key => $value) {

            $clientes->appends($key, $value);

        }

        /*$paginate = 10;
        $page = $request->get('page', 1) ?? 1;
        $offSet = ($page * $paginate) - $paginate;
        $itemsForCurrentPage = array_slice($clientes->toArray(), $offSet, $paginate, true);

        $clientes = new \Illuminate\Pagination\LengthAwarePaginator($clientes->toArray(), count($clientes), $paginate, $page, ['path'=>url('?' . $request->getQueryString())]);
*/

        return view('empresa.clientes.index', compact('clientes'));
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

        $hasRegistro = Produtos::where('cliente_id', $cliente->id)->where('produto_id', $data['empreendimento'])->get();

        if($hasRegistro->isNotEmpty()) {
          flash('O empreendimento já foi adicionado ao cliente!')->error()->important();
          return redirect()->back();
        }

        $empreendimento = new Produtos();
        $empreendimento->cliente_id = $cliente->id;
        $empreendimento->chamado_id = null;
        $empreendimento->produto_id = $data['empreendimento'];
        $empreendimento->save();

        flash('O empreendimento foi adicionado ao cliente com sucesso!')->success()->important();

        return redirect()->back();
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

}
