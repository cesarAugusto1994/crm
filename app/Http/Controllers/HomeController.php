<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamados;
use App\Models\Empresa\Departamentos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chamados = Chamados::where('id_empresa', \Auth::user()->id)->get();

        $total = $chamados->count();

        $chamadosFinalizados = $chamados->filter(function($chamado) {
            return $chamado->situacao == 3;
        });

        $chamadosAtrasados = $chamados->filter(function($chamado) {
          return ($chamado->situacao == 1 || $chamado->situacao == 2) && $chamado->previsao_conclusao < (new \DateTime('now'));
        });

        $chamadosAtrasados = $chamadosAtrasados->count();

        $finalizados = $chamadosFinalizados->count();

        $porcentagemTarefas = ceil($total/($finalizados ?: 1));

        if(empty($finalizados)) {
          $porcentagemTarefas = 0;
        }

        $areas = Departamentos::where('id_empresa', \Auth::user()->id)->get();

        return view('home', compact('porcentagemTarefas', 'areas', 'chamadosAtrasados'));
    }

    public function toGraph()
    {
        $chamados = Chamados::where('id_empresa', \Auth::user()->empresa_id)
        ->orderBy('abertura_chamado')
        ->get();

        if($chamados->isEmpty()) {
            return json_encode(false);
        }

        $chamadoInicio = $chamados->first();
        $chamadoFim = $chamados->last();

        if(!$chamadoInicio) {
          $chamadoInicio = $chamados->last();
        }

        $dataInicio = $chamadoInicio->abertura_chamado;
        $dataFinal = $chamadoFim->abertura_chamado;

        $result = [];

        $result['meta'] = [
           'inicio' => [
             'd' => (int)$dataInicio->format('d'),
             'm' => (int)$dataInicio->format('m'),
             'Y' => (int)$dataInicio->format('Y'),
           ],
           'fim' => [
             'd' => (int)$dataFinal->format('d'),
             'm' => (int)$dataFinal->format('m'),
             'Y' => (int)$dataFinal->format('Y'),
           ]
        ];

        $result['body'][0]['quantidade'] = 0;
        $result['body'][0]['d'] = (int)$dataInicio->format('d');
        $result['body'][0]['m'] = (int)$dataInicio->format('m');
        $result['body'][0]['Y'] = (int)$dataInicio->format('Y');

        foreach ($chamados as $k => $chamado) {

          $date = $chamado->abertura_chamado;

          $key = $date->format('Ymd');

          if(!isset($result['body'][$key])) {
            $result['body'][$key]['quantidade'] = 0;
            $result['body'][$key]['d'] = (int)$date->format('d');
            $result['body'][$key]['m'] = (int)$date->format('m');
            $result['body'][$key]['Y'] = (int)$date->format('Y');
          }

          $result['body'][$key]['quantidade']++;

        }

        echo json_encode($result);
    }
}
