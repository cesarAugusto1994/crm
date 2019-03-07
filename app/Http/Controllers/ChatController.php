<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\{Chamados, Clientes};
use App\Models\Clientes\Emails;
use App\Models\Chamados\{Anotacoes};
use App\Models\Clientes\Produtos as ClienteProduto;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = DB::connection('mysql_chat')->table('lh_chat')->whereNotNull('email')->get();

        $resultado = [];

        foreach ($chats as $key => $chat) {

            if(empty($chat->email)) {
              continue;
            }

            $timestamp = $chat->time;

            $emprendimento = null;

            $dadosAdicionais = json_decode($chat->additional_data);

            if(!empty($dadosAdicionais)) {

              $emprendimento = array_filter($dadosAdicionais, function($empreendimento) {
                  return $empreendimento->key == 'Empreendimento';
              });

              $emprendimento = current($dadosAdicionais)->value;

            }

            $date = new \DateTime();
            $date->setTimestamp($timestamp);
            $dataHora = $date->format('d/m/Y H:i:s');

            $chamado = Chamados::where('chat_id', $chat->id)->get();

            $resultado[] = [
              'id' => $chat->id,
              'user_id' => $chat->user_id,
              'data' => $dataHora,
              'nome' => $chat->nick,
              'email' => $chat->email,
              'empreendimento' => $emprendimento,
              'has_chamado' => $chamado->isNotEmpty(),
              'chamado' => $chamado->isNotEmpty() ? $chamado->first() : null
            ];
        }

        #dd($resultado);

        return view('empresa.chat.index', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->request->all();

        $email = $data['email'];

        $cliente = Clientes::whereHas('emails', function($query) use ($email) {
            $query->where('email', $email);
        })->first();

        if(!$cliente) {

          $cliente = Clientes::create([
            'nome' => $data['nome'],
            'sexo' => 1,
            'cpf' => null,
            'forma_tratamento' => 1,
            'pessoa' => 1,
            'tipo' => 2,
            'id_empresa' => 8,
            'inclusao' => now(),
          ]);

          $email = new Emails();
          $email->email = $data['email'];
          $email->cliente_id = $cliente->id;

          if($cliente->emails->isEmpty()) {
              $email->principal = 'SIM';
          }

          $email->save();

        }

        $chamado = new Chamados();
        $chamado->id_usuario = \Auth::user()->id;
        $chamado->id_empresa = \Auth::user()->empresa_id;
        $chamado->id_cliente = $cliente->id;
        $chamado->chat_id = $data['chat'];
        $chamado->abertura_chamado = now();
        $chamado->save();

        $anotacao = new Anotacoes();
        $anotacao->descricao = 'Foi gerado o chamado: '.$chamado->id.' referente ao chat de numero: ' . $data['chat'];
        $anotacao->chamado_id = $chamado->id;
        $anotacao->save();

        $mensagens = DB::connection('mysql_chat')->table('lh_msg')->where('chat_id', $data['chat'])->get();

        foreach ($mensagens as $key => $mensagem) {

          if($mensagem->user_id == $data['user_id']) {
              $origem = 'cliente';
          } else {
              $origem = 'usuario';
          }

          $anotacao = new Anotacoes();
          $anotacao->descricao = $mensagem->msg;
          $anotacao->chamado_id = $chamado->id;
          $anotacao->origem = $origem;
          $anotacao->user_id = \Auth::user()->id;
          $anotacao->save();

        }

        if(!empty($data['empreendimento'])) {

          $sql2 = "select * from imoveis where imv_titulo = '" . $data['empreendimento'] . "'";
          $imovel = \DB::connection('mysql_seabra')->select($sql2);

          $referencia = null;

          if(!empty($imovel[0])) {
            $referencia = $imovel[0]->imv_referencia;
            $titulo = $imovel[0]->imv_titulo;
            if(!empty($referencia)) {

              $produtos = \App\Models\Produtos::where('referencia', $referencia)->where('nome', $titulo)->get();

              $produto = $produtos->first();

              $hasRegistro = ClienteProduto::where('cliente_id', $cliente->id)->where('produto_id', $produto->id)->get();

              if($hasRegistro->isNotEmpty()) {
                flash('O empreendimento já foi adicionado ao cliente!')->error()->important();
                return redirect()->back();
              }

              $empreendimento = new ClienteProduto();
              $empreendimento->cliente_id = $cliente->id;
              $empreendimento->chamado_id = $chamado->id;
              $empreendimento->produto_id = $produto->id;
              $empreendimento->save();

              flash('O empreendimento foi adicionado ao cliente com sucesso!')->success()->important();

              return redirect()->back();

            }
          }

        }

        flash('Foi gerado o chamado: '.$chamado->id.' referente ao chat de numero ' . $data['chat'])->success()->important();
        return redirect()->back();
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
}
