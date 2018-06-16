<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Chamados};
use App\Models\Chamados\{Classificacao, Previsao, Status, Empreendimentos, Midias, Logs};
use App\Models\Empresa\Departamentos;

class ChamadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        $this->authorize('manage-chamados.index', Chamados::class);

        $chamados = Chamados::where('id_empresa', $user->empresa_id)->orderByDesc('id')->paginate();
        return view('empresa.chamados.index', compact('chamados'));
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
        $data = $request->request->all();

        $chamado = Chamados::findOrFail($data['id']);
        $chamado->area_atendimento = $data['area_atendimento'] ?? null;
        $chamado->classificacao = $data['classificacao'];
        $chamado->situacao = $data['situacao'];
        $chamado->conclusao = $data['conclusao'] ?? '';
        $chamado->pessoa_responsavel = $data['pessoa_responsavel'] ? (\DateTime::createFromFormat('d/m/Y', $data['pessoa_responsavel'])) : null;
        $chamado->atendimento_chamado = $data['atendimento_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['atendimento_chamado'])) : null;
        $chamado->conclusao_chamado = $data['conclusao_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['conclusao_chamado'])) : null;
        $chamado->previsao_conclusao = $data['previsao_conclusao'] instanceof \Datetime ? (\DateTime::createFromFormat('d/m/Y', $data['previsao_conclusao'])) : null;
        $chamado->save();

        flash('Os dados foram alterados com sucesso!')->success()->important();

        return redirect()->back();
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

        return view('empresa.chamados.detalhes', compact('chamado', 'classificacao', 'departamentos', 'status'));
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

    public function previsao($id)
    {
        $previsao = Previsao::where('id_classificacao', $id)->get();

        $resultado = $previsao->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->descricao . ' dias'];
        });

        return json_encode($resultado);
    }

    public function departamento($id)
    {
        $departamentos = Departamentos::findOrFail($id);

        $usaurios = $departamentos->usuarios->map(function($usuario) {
            return ['id' => $usuario->id, 'nome' => $usuario->name];
        });

        return json_encode($usaurios);
    }

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
        $chamado = Chamados::findOrFail($id);

        $empreendimento = new Logs();
        $empreendimento->chamado_id = $chamado->id;
        $empreendimento->user_id = \Auth::user()->id;
        $empreendimento->descricao = $data['descricao'];
        $empreendimento->save();

        flash('A descrição foi adicionada ao chamado com sucesso!')->success()->important();

        return redirect()->back();
    }

    public function empreendimentos(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $empreendimentos = \App\Models\Produtos::where('nome', 'like', "%$search%")->get();

        return $empreendimentos->toJson();
    }

    public function midias(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $empreendimentos = \App\Models\Midias::where('nome', 'like', "%$search%")->get();

        return $empreendimentos->toJson();
    }
}
