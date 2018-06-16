<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Midias;
use App\Models\Empresa;

class MidiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage-midias.index', Midias::class);

        $midias = Midias::orderBy('empresa_id')->paginate();
        return view('admin.midias.index', compact('midias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manage-midias.create');

        $empresas = Empresa::where('status', true)->get();
        return view('admin.midias.create', compact('empresas'));
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

        $midia = Midias::create($data);

        flash('A midia foi adicionada com sucesso!')->success()->important();

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
        $midia = Midias::findOrFail($id);

        $this->authorize('manage-midias.view', $midia);

        return view('admin.midias.edit', compact('midia'));
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

        $validate = \Illuminate\Support\Facades\Validator::make($data, [
            'nome' => 'required|string|max:255',
            'ativo' => 'required',
        ]);

        if($validate->fails()) {
          return redirect()->back()->withErrors($validate)->withInput();
        }

        $midias = Midias::findOrFail($id);

        $midias->update($data);

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
}
