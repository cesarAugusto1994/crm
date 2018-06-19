<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage-empresas.index', Empresa::class);

        $empresas = Empresa::paginate();

        return view('admin.empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.empresas.create');
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

        $validate = \Illuminate\Support\Facades\Validator::make($data, [
            'nome' => 'required|string|max:255',
            'num_usuarios' => 'required',
            'status' => 'required',
        ]);

        if($validate->fails()) {
          return redirect()->back()->withErrors($validate)->withInput();
        }

        $empresa = Empresa::create($data);

        flash('A empresa foi adicionada com sucesso!')->success()->important();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);

        return view('admin.empresas.edit', compact('empresa'));
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

        $empresa = Empresa::findOrFail($id);

        $empresa->update($data);

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

    public function areas(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $user = \Auth::user();

        $empreendimentos = \App\Models\Empresa\Departamentos::where('nome', 'like', "%$search%")->where('id_empresa', $user->empresa_id)->get();

        return $empreendimentos->toJson();
    }

    public function responsaveis(Request $request)
    {
        $data = $request->request->all();

        $id = $data['id'];

        $user = \Auth::user();

        $usuarios = \App\User::where('area_id', $id)->get();

        $itens = $usuarios->map(function($item) {
            return ['id' => $item->id, 'nome' => $item->name];
        });

        return json_encode($itens);
    }
}
