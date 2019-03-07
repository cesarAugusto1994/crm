<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamados;
use App\Models\Empresa\Departamentos;
use DB;

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
        $chamados = Chamados::where('id_empresa', \Auth::user()->empresa_id)->get();

        $chats = DB::connection('mysql_chat')->table('lh_chat')->get();
        $chat = [];

        foreach ($chats as $key => $item) {
            if(!$item->email) {
              continue;
            }
            $chat[] = $item;
        }

        $quantidadeChat = count($chat);

        $chamadosTotal = $total = $chamados->whereIn('situacao',[1,2,3]);

        $chamadosTotal = $chamadosTotal->count();

        $chamadosFinalizados = $chamados->filter(function($chamado) {
            return $chamado->situacao == 3;
        })->count();

        $chamadosAberto = $chamados->filter(function($chamado) {
          return ($chamado->situacao == 1);
        })->count();

        $chamadosAndamento = $chamados->filter(function($chamado) {
          return ($chamado->situacao == 2);
        })->count();

        $chamadosMailling = $chamados->filter(function($chamado) {
          return ($chamado->situacao == 4);
        })->count();

        $chamadosAtrasados = $chamados->where('previsao_conclusao', '<', now())->whereIn('situacao', [1,2])->count();

        $temperaturaFrio = $chamados->where('temperatura', 'frio')->whereIn('situacao', [1,2,3])->count();
        $temperaturaMorno = $chamados->where('temperatura', 'morno')->whereIn('situacao', [1,2,3])->count();
        $temperaturaQuente = $chamados->where('temperatura', 'quente')->whereIn('situacao', [1,2,3])->count();

        $empresa = \Auth::user()->empresa_id;

        $areas = Departamentos::where('id_empresa', $empresa)->get();

        $empresas = \App\Models\Empresa::paginate();
        $users = \App\User::paginate();

        $clientes = \App\Models\Clientes::where('id_empresa', $empresa)
        ->where('tipo', 2)
        ->where('ativo', true)
        ->count();

        $clientesAtivos = \App\Models\Clientes::where('id_empresa', $empresa)
        ->where('tipo', 2)
        ->where('ativo', true)
        ->whereHas('chamados', function($query) {
            $query->whereIn('situacao', [1,2]);
        })
        ->count();

        $clientesAtedimentosFinalizados = \App\Models\Clientes::where('id_empresa', $empresa)
        ->where('tipo', 2)
        ->where('ativo', true)
        ->whereHas('chamados', function($query) {
            $query->where('situacao', 3);
        })->count();

        $clientesSemchamados = \App\Models\Clientes::where('id_empresa', $empresa)
        ->where('tipo', 2)
        ->where('ativo', true)
        ->doesntHave('chamados')->count();

        #dd($clientes);

        return view('home',
        compact('areas',
        'chamadosAtrasados',
        'chamadosFinalizados',
        'chamadosAberto',
        'chamadosAndamento',
        'empresas',
        'users',
        'chat',
        'clientes',
        'clientesAtivos',
        'clientesAtedimentosFinalizados',
        'clientesSemchamados',
        'temperaturaFrio',
        'temperaturaMorno',
        'temperaturaQuente',
        'chamadosMailling',
        'quantidadeChat',
        'chamadosTotal'));
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
