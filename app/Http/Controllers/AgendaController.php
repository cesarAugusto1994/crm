<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $dataAgenda = \DateTime::createFromFormat('d/m/Y H:i', $data['data_hora']);

        $data['data_hora'] = $dataAgenda;

        /*if($data['agd_lemb_data_hora']) {
          $dataLembrete = \DateTime::createFromFormat('d/m/Y H:i', $data['agd_lemb_data_hora']);
          $data['agd_lemb_data'] = $dataLembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $dataLembrete->format('H:i:s');
        } else {

          $lembrete = new \DateTime($dataAgenda->format('Y-m-d H:i:s'));
          $lembrete->modify('-1 hour');

          $data['agd_lemb_data'] = $lembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $lembrete->format('H:i:s');

        }*/

        //$data['status'] = 1;

        $data['user_id'] = \Auth::user()->id;

        $agenda = Agenda::create($data);

        flash('Novo compromisso adicionado com sucesso!')->success()->important();

        return redirect()->route('home');
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

        $dataAgenda = \DateTime::createFromFormat('d/m/Y H:i', $data['data_hora']);

        $data['data_hora'] = $dataAgenda;

        /*if($data['agd_lemb_data_hora']) {
          $dataLembrete = \DateTime::createFromFormat('d/m/Y H:i', $data['agd_lemb_data_hora']);
          $data['agd_lemb_data'] = $dataLembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $dataLembrete->format('H:i:s');
        } else {

          $lembrete = new \DateTime($dataAgenda->format('Y-m-d H:i:s'));
          $lembrete->modify('-1 hour');

          $data['agd_lemb_data'] = $lembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $lembrete->format('H:i:s');

        }*/

        //$data['status'] = $data['status'] ?? 1;

        $agenda = Agenda::findOrFail($id);
        $agenda->update($data);

        flash('O compromisso alterado com sucesso!')->success()->important();

        return redirect()->route('home');

    }

    public function updateAjax(Request $request, $id)
    {
        $data = $request->request->all();

        $dataAgenda = \DateTime::createFromFormat('d/m/Y H:i', $data['data_hora']);

        $data['data_hora'] = $dataAgenda;

        /*if($data['agd_lemb_data_hora']) {
          $dataLembrete = \DateTime::createFromFormat('d/m/Y H:i', $data['agd_lemb_data_hora']);
          $data['agd_lemb_data'] = $dataLembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $dataLembrete->format('H:i:s');
        } else {

          $lembrete = new \DateTime($dataAgenda->format('Y-m-d H:i:s'));
          $lembrete->modify('-1 hour');

          $data['agd_lemb_data'] = $lembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $lembrete->format('H:i:s');

        }*/

        //$data['agd_status'] = 1;

        $agenda = Agenda::findOrFail($id);
        $agenda->update($data);

        return json_encode([
          'code' => 304,
          'message' => 'O compromisso alterado com sucesso!'
        ]);

        flash('O compromisso alterado com sucesso!')->success()->important();

        return redirect()->route('home');

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

    public function compromissos()
    {
        $user = \Auth::user();

        $agenda = Agenda::where('ativo', 1)->where('user_id', $user->id)->get();

        $con = $agenda->map(function($compromisso) {

            $data['data_hora'] = $compromisso->data_hora;

            $dataCompromisso = new \DateTime($data['data_hora']);

            return [
                'id' => $compromisso->id,
                'responsavel' => $compromisso->user_id,
                'area' => $compromisso->area_id,
                'status' => $compromisso->status,
                'title' => $compromisso->descricao,
                'local' => $compromisso->local,
                'start' => $dataCompromisso->format('Y-m-d H:i'),
                'end' => ($dataCompromisso->modify('+1 hour'))->format('Y-m-d H:i'),
                'notas' => $compromisso->descricao,
            ];
        });

        echo json_encode($con);
        exit;
    }
}
