<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Chamados, Manifestacao};
use App\Models\Chamados\{Classificacao, Previsao, Status, Empreendimentos, Midias, Logs, Anotacoes};
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
        $user = \Auth::user();

        $classificacao = Classificacao::where('id_empresa', $user->empresa->id)->get();
        $departamentos = Departamentos::where('id_empresa', $user->empresa->id)->get();
        $status = Status::where('id_empresa', $user->empresa->id)->get();
        $manifestacoes = Manifestacao::all();

        return view('empresa.chamados.create', compact('classificacao', 'departamentos', 'status', 'manifestacoes'));
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
        $data = $request->request->all();

        $chamado = Chamados::findOrFail($id);
        $chamado->area_atendimento = $data['area_atendimento'] ?? null;
        $chamado->classificacao = $data['classificacao'];
        $chamado->situacao = $data['situacao'];
        $chamado->conclusao = $data['conclusao'] ?? '';
        $chamado->pessoa_responsavel = $data['pessoa_responsavel'];
        $chamado->atendimento_chamado = $data['atendimento_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['atendimento_chamado'])) : null;
        $chamado->conclusao_chamado = $data['conclusao_chamado'] ? (\DateTime::createFromFormat('d/m/Y', $data['conclusao_chamado'])) : null;

        $previsao = null;

        if($data['previsao_conclusao']) {
            $date = new \DateTime('now');
            $previsao = Previsao::findOrFail($data['previsao_conclusao']);
            $date->modify('+'. $previsao->descricao . ' days');
            $previsao = $date;
        }

        $chamado->previsao_conclusao = $previsao;
        $chamado->save();

        flash('Os dados foram alterados com sucesso!')->success()->important();

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

        $usuarios = $departamentos->usuarios->map(function($usuario) {
            return ['id' => $usuario->id, 'nome' => $usuario->name];
        });

        return json_encode($usuarios);
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

        $user = \Auth::user();

        $empreendimentos = \App\Models\Produtos::where('nome', 'like', "%$search%")->where('id_empresa', $user->empresa_id)->get();

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

        $empreendimentos = \App\Models\Clientes::where('nome', 'like', "%$search%")->where('id_empresa', $user->empresa_id)->get();

        return $empreendimentos->toJson();
    }

    public function grupos(Request $request, $id)
    {
        $data = $request->request->all();

        $user = \Auth::user();

        $manifestacoes = \App\Models\Manifestacao\Grupo::where('id_manifestacao', $id)->get();

        $itens = $manifestacoes->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->descricao];
        });

        return json_encode($itens);
    }

    public function tipos(Request $request, $id)
    {
        $data = $request->request->all();

        $user = \Auth::user();

        $manifestacoes = \App\Models\Manifestacao\Grupo\Tipo::where('id_grupo', $id)->get();

        $itens = $manifestacoes->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->descricao];
        });

        return json_encode($itens);
    }
}
