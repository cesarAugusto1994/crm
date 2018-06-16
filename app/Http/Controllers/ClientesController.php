<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Clientes\{Produtos, Midias, Emails, Telefones, Enderecos};
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



        $clientes = $clientes->orderByDesc('id')->paginate();

        return view('empresa.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

}
