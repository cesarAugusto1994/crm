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

        $dataAgenda = \DateTime::createFromFormat('d/m/Y H:i', $data['agd_data_hora']);

        $data['agd_data'] = $dataAgenda->format('Y-m-d');
        $data['agd_hora'] = $dataAgenda->format('H:i:s');

        if($data['agd_lemb_data_hora']) {
          $dataLembrete = \DateTime::createFromFormat('d/m/Y H:i', $data['agd_lemb_data_hora']);
          $data['agd_lemb_data'] = $dataLembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $dataLembrete->format('H:i:s');
        } else {

          $lembrete = new \DateTime($dataAgenda->format('Y-m-d H:i:s'));
          $lembrete->modify('-1 hour');

          $data['agd_lemb_data'] = $lembrete->format('Y-m-d');
          $data['agd_lemb_hora'] = $lembrete->format('H:i:s');

        }

        $data['agd_status'] = 1;

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
        #agd_status

        $data = $request->request->all();

        dd($data);

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

        $agenda = Agenda::where('agd_status', 1)->where('agd_func_id', $user->id)->get();

        $con = $agenda->map(function($compromisso) {

            $data['agd_data'] = $compromisso->agd_data->format('Y-m-d');
            $data['agd_hora'] = $compromisso->agd_hora;

            $data['agd_lemb_data'] = $compromisso->agd_lemb_data->format('Y-m-d');
            $data['agd_lemb_hora'] = $compromisso->agd_lemb_hora;

            $dataA = $data['agd_data'] . ' ' . $data['agd_hora'];
            $dataB = $data['agd_lemb_data'] . ' ' . $data['agd_lemb_hora'];

            $dataCompromisso = new \DateTime($dataA);
            $dataLembrete = new \DateTime($dataB);

            return [
                'id' => $compromisso->id,
                'responsavel' => $compromisso->agd_func_id,
                'area' => $compromisso->agd_func_area,
                'status' => $compromisso->agd_status,
                'title' => $compromisso->agd_nome,
                'local' => $compromisso->agd_local,
                'start' => $dataCompromisso->format('Y-m-d H:i'),
                'end' => ($dataCompromisso->modify('+1 hour'))->format('Y-m-d H:i'),
                'lembrete' => $dataLembrete->format('Y-m-d H:i'),
                'notas' => $compromisso->agd_nome,
            ];
        });

        echo json_encode($con);
        exit;
    }
}
