<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Imovel;
use App\Models\Perfil\Imoveis as PerfilImovel;
use App\Models\{Chamados, Manifestacao, Empresa, Produtos, LogEmail, Clientes};
use App\Models\Chamados\{Classificacao, Previsao, Status, Empreendimentos, Midias, Logs, Anotacoes, Fase};

class PerfisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfis = Perfil::paginate();

        return view('empresa.perfil.index', compact('perfis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.perfil.create');
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

        Perfil::create($data);

        return redirect()->route('perfis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = Perfil::findOrFail($id);
        return view('empresa.perfil.show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil = Perfil::findOrFail($id);
        return view('empresa.perfil.edit', compact('perfil'));
    }

    public function adicionarImovel(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);

        $data = $request->request->all();

        $empreendimentos = [];

        if($request->has('adicionar_imovel')) {

            $PerfilImovel = PerfilImovel::where('imovel_id', $request->get('imovel_id'))->get();

            $imovel = Imovel::where('seabra_id', $data['imovel_id'])->get();

            if($imovel->isEmpty()) {

              $data['faixa_preco_ini'] = (float)$data['faixa_preco_ini'];
              $data['faixa_preco_fim'] = (float)$data['faixa_preco_fim'];
              $data['seabra_id'] = $request->get('imovel_id');

              $imovel = Imovel::create($data);
            } else {
              $imovel = $imovel->first();
            }

            $perfilImovel2 = PerfilImovel::where('imovel_id', $imovel->id)->where('perfil_id', $id)->get();

            if($perfilImovel2->isEmpty()) {

              $perfilImovel2 = PerfilImovel::create([
                'imovel_id' => $imovel->id,
                'perfil_id' => $id,
              ]);

            }

        }

        if($request->has('buscar')) {
            $sql = "
              select *, (
                select group_concat(ac.arc_nome)
                from areas_comuns_imoveis aci
                inner join areas_comuns ac ON (ac.arc_id = aci.arc_id)
                where aci.imv_id = imovel.imv_id";

            if(!empty($data['areas'])) {
              if(is_array($data['areas'])) {
                foreach ($data['areas'] as $key => $area) {

                  $sql .= " AND aci.arc_id = " . (int)$area . " ";

                }
              }
            }

            $sql .= ") as areas
              from imoveis imovel
              inner join tipologias tip ON (tip.imv_id = imovel.imv_id)
              inner join empreendimentos emp ON (emp.imv_id = imovel.imv_id)
              left join localidades local ON (local.imv_id = imovel.imv_id)
              left join bairros bairro ON (bairro.bai_id = local.bai_id)
              where 1 = 1
            ";

            if($request->has('empreendimento') && !empty((int)$request->get('empreendimento'))) {
                //$produto = \App\Models\Produtos::findOrFail((int)$request->get('empreendimento'));

                #dd($produto);

                $sql .= " AND imovel.imv_id = " . (int)$request->get('empreendimento');

                /*
                $sql2 = "select * from imoveis where imv_id = '" . (int)$request->get('empreendimento');

                $imovel = \DB::connection('mysql_seabra')->select($sql2);
                #dd($imovel);
                $imovelId = null;

                if(!empty($imovel[0])) {
                  $imovelId = $imovel[0]->imv_id;
                  if(!empty($imovelId)) {
                    $sql .= " AND imovel.imv_id = " . $imovelId;
                  }
                }
                */

            }

            if($request->has('codigo') && !empty($request->get('codigo'))) {
                $sql .= " AND imovel.imv_id = " . (int)$request->get('codigo');
            }

            if($request->has('estagio') && !empty($request->get('estagio'))) {
                $sql .= " AND imovel.imv_publicidade = " . (int)$request->get('estagio');
            }

            if($request->has('zona') && !empty($request->get('zona'))) {
                $sql .= " AND local.zn_id = " . (int)$request->get('zona');
            }

            if($request->has('tipo') && !empty($request->get('tipo'))) {
                $sql .= " AND imovel.imv_tipo = " . (int)$request->get('tipo');
            }

            if($request->has('cidade') && !empty($request->get('cidade'))) {
                $sql .= " AND local.cid_id = " . (int)$request->get('cidade');
            }

            if($request->has('incorporadora') && !empty($request->get('incorporadora'))) {
                $sql .= " AND emp.emp_incorporacao LIKE '%" . $request->get('incorporadora') . "%'";
            }

            if($request->has('nome') && !empty($request->get('nome'))) {
                $sql .= " AND imovel.imv_titulo LIKE '%" . $request->get('nome') . "%'";
            }

            if($request->has('bairros')) {
                $sql .= " AND local.bai_id = " . (int)$request->get('bairros');
            }

            if($request->has('habilitar_dormitorios')) {

                if($request->has('dormitorios_min') && !empty($request->get('dormitorios_min'))) {
                    $sql .= " AND tip.tip_dorms >= " . $request->get('dormitorios_min');
                }

                if($request->has('dormitorios_max') && !empty($request->get('dormitorios_max'))) {
                    $sql .= " AND tip.tip_dorms <= " . $request->get('dormitorios_max');
                }

            }

            if($request->has('habilitar_suites')) {

                if($request->has('suites_min') && !empty($request->get('suites_min'))) {
                    $sql .= " AND tip.tip_suite >= " . $request->get('suites_min');
                }

                if($request->has('suites_max') && !empty($request->get('suites_max'))) {
                    $sql .= " AND tip.tip_suite <= " . $request->get('suites_max');
                }

            }

            if($request->has('habilitar_vagas')) {

                if($request->has('vagas_min') && !empty($request->get('vagas_min'))) {
                    $sql .= " AND tip.tip_vagas >= " . $request->get('vagas_min');
                }

                if($request->has('vagas_max') && !empty($request->get('vagas_max'))) {
                    $sql .= " AND tip.tip_vagas <= " . $request->get('vagas_max');
                }

            }

            if($request->has('habilitar_entrega')) {

                if($request->has('entrega_min') && !empty($request->get('entrega_min'))) {

                    $entregaInicio = $request->get('entrega_min');
                    $entregaInicio = \DateTime::createFromFormat('d/m/Y', $entregaInicio);
                    $entregaInicio->setTime(0,0,0);

                    $sql .= " AND emp.emp_previsao_entrega >= '" . $entregaInicio->format('Y-m-d H:i:s') . "'";
                }

                if($request->has('entrega_max') && !empty($request->get('entrega_max'))) {

                    $entregaFim = $request->get('entrega_max');
                    $entregaFim = \DateTime::createFromFormat('d/m/Y', $entregaFim);
                    $entregaFim->setTime(23,59,59);

                    $sql .= " AND emp.emp_previsao_entrega <= '" . $entregaFim->format('Y-m-d H:i:s') . "'";
                }

            }

            if($request->has('habilitar_areas')) {

                if($request->has('area_min')) {
                    $sql .= " AND tip.tip_area >= " . (int)$request->get('area_min');
                }

                if($request->has('area_max')) {
                    $sql .= " AND tip.tip_area <= " . (int)$request->get('area_max');
                }

            }

            if($request->has('habilitar_valor_mt2')) {

              if($request->has('valor_min')) {
                  $sql .= " AND tip.tip_valor_metro_quad = " . (int)$request->get('valor_min');
              }
              if($request->has('valor_max')) {
                  $sql .= " AND tip.tip_valor_metro_quad = " . (int)$request->get('valor_max');
              }

            }

            if($request->has('habilitar_faixa_preco')) {

              $valorInicio = floatval(str_replace(['.',','],['','.'],$request->get('preco_min')));
              $valorInicio = number_format($valorInicio,2,'.','');

              $valorFim= floatval(str_replace(['.',','],['','.'],$request->get('preco_max')));
              $valorFim = number_format($valorFim,2,'.','');

              if($request->has('preco_min')) {
                  $sql .= " AND emp.emp_faixa_preco_ini >= " . $valorInicio;
              }
              if($request->has('preco_max')) {
                  $sql .= " AND emp.emp_faixa_preco_fim <= " . $valorFim;
              }

            }

            $registros = \DB::connection('mysql_seabra')->select($sql);

            foreach ($registros as $key => $empreendimento) {

                $adicionado = false;

                $imoveis = Imovel::where('seabra_id', $empreendimento->imv_id)->get();

                if($imoveis->isNotEmpty()) {

                  $imovel = $imoveis->first();

                  $perfilImovel = \App\Models\Perfil\Imoveis::where('perfil_id', $perfil->id)->where('imovel_id', $imovel->id)->get();

                  if($perfilImovel->isNotEmpty()) {
                    $adicionado = true;
                  }

                }

                $empreendimentos[$empreendimento->imv_id] = [
                    'id' => $empreendimento->imv_id,
                    'slug' => $empreendimento->imv_id,
                    'localidade' => $empreendimento->imv_localidade,
                    'titulo' => $empreendimento->imv_titulo,
                    'referencia' => $empreendimento->imv_referencia,
                    'incorporacao' => $empreendimento->emp_incorporacao,
                    'construcao' => $empreendimento->emp_construcao,
                    'arquitetura' => $empreendimento->emp_arquitetura,
                    'torres' => (int)$empreendimento->emp_qtd_torres,
                    'unidades' => (int)$empreendimento->emp_qtd_unidades,
                    'elevadores' => (int)$empreendimento->emp_qtd_elevadores,
                    'dormitorios' => (int)$empreendimento->tip_dorms,
                    'suites' => (int)$empreendimento->tip_suite,
                    'vagas' => (int)$empreendimento->tip_vagas,
                    'areas' => $this->getArea($empreendimento->imv_id),
                    'estacoes_proximas' => $empreendimento->emp_estacoes_proximas,
                    'previsao_entrega' => $empreendimento->emp_previsao_entrega,
                    'faixa_preco_ini' => $empreendimento->emp_faixa_preco_ini,
                    'faixa_preco_fim' => $empreendimento->emp_faixa_preco_fim,
                    'fases_obra' => (int)$empreendimento->emp_fases_obra,
                    'areas_comuns' => $empreendimento->areas,
                    'adicionado' => $adicionado
                ];
            }

        }

        $paginate = 10;
        $page = $request->get('page', 1) ?? 1;
        $offSet = ($page * $paginate) - $paginate;
        $itemsForCurrentPage = array_slice($empreendimentos, $offSet, $paginate, true);

        $empreendimentos = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($empreendimentos), $paginate, $page, ['path'=>url('/perfis/'.$request->get('perfil').'/imoveis?' . $request->getQueryString())]);

        return view('empresa.perfil.adicionar-imovel', compact('perfil', 'empreendimentos', 'perfil'));
    }

    public function getArea($id)
    {
        $sql = " select tip_area from tipologias where imv_id = ? ";

        $area = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $arrayArea = [];

        foreach ($area as $key => $item) {
          $arrayArea[] = $item->tip_area;
        }

        $minArea = min($arrayArea);
        $maxArea = max($arrayArea);

        if ($maxArea > $minArea) {
            $resultado= $minArea.' a '.$maxArea.' m área privativa';
        } else {
            $resultado= $minArea.' m área privativa';
        }

        return $resultado;
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

        $perfil = Perfil::findOrFail($id);
        $perfil->update($data);

        return redirect()->route('perfis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $registro = Perfil::findOrFail($id);
            $registro->delete();

            return response()->json([
              'code' => 201,
              'message' => 'Removido com sucesso!'
            ]);

        } catch(Exception $e) {
            return response()->json([
              'code' => 501,
              'message' => $e->getMessage()
            ]);
        }
    }

    public function adicionarCliente(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);

        return view('empresa.perfil.adicionar-cliente', compact('perfil'));
    }

    public function envioEmail(Request $request, $id)
    {
        $data = $request->request->all();

        if(!$request->has('cliente')) {
          flash('Informe o cliente para enviar o e-mail.')->error()->important();
          return back();
        }

        $perfil = Perfil::findOrFail($id);

        if($perfil->imoveis->isEmpty()) {
          flash('Nenhum imóvel encontrado')->info()->important();
          return back();
        }

        if($request->has('cliente')) {

          $cliente = Clientes::findOrFail($request->get('cliente'));

          $chamados = Chamados::where('id_cliente', $cliente->id)->whereIn('situacao', [1,2])->get();

          if($chamados->isNotEmpty()) {

              $chamado = $chamados->first();

          } else {

              $chamado = new Chamados();
              $chamado->id_usuario = \Auth::user()->id;
              $chamado->id_empresa = \Auth::user()->empresa_id;
              $chamado->id_cliente = $cliente->id;
              $chamado->perfil_id = $perfil->id;
              $chamado->abertura_chamado = now();
              $cliente = $request->get('cliente');
              $chamado->save();

          }

          $rota = route('perfis.show', $perfil->id);

          $anotacao = new Anotacoes();
          $anotacao->descricao = 'Chamado gerado a aprtir do Perfil #<a href="'.$rota.'">' . $perfil->id . '</a>';
          $anotacao->chamado_id = $chamado->id;
          $anotacao->save();

        }

        $modelo = $data['modelo'] ?? 3;

        $imoveisModelo2 = $imoveisModelo3 = [];

        foreach ($perfil->imoveis as $key => $itemLoop) {

          $referencia = $itemLoop->imovel->referencia;
          $imovelId = $itemLoop->imovel->seabra_id;

          $emp = \App\Models\Imovel::where('referencia', $referencia)->get()->first();

          $nomesEmpreendimentos[$emp->id] = $emp->nome;
          $empreendimento = $this->getEmpreendimento($emp->referencia);

          $tipologias = $this->getTipolias($empreendimento['imovel'], $empreendimento['tipo']);
          $imovel = $this->getImovel($empreendimento['imovel']);

          $dataEntrega = null;

          if(!empty($imovel[0]->emp_previsao_entrega)) {
            $dataEntrega = new \DateTime($imovel[0]->emp_previsao_entrega);
            $dataEntrega = $dataEntrega->format('d/m/Y');
          }

          $imoveisModelo2[$imovelId] = [
              'empreendimento' => $emp->nome,
              'referencia' => $emp->referencia,
              'imovel' => $empreendimento,
              'arquitetura' => $empreendimento['arquitetura'],
              'codigo' => $empreendimento['imovel'],
              'tipologia' => $empreendimento['tipologia'],
              'terreno' => str_replace('área privativa', '', $empreendimento['tipologia']['area']),
              'faseobra' => $empreendimento['faseobra'],
              'entrega' => $dataEntrega,
              'imagens' => $imagensfachada = $this->getImagensImoveis($empreendimento['imovel'], 4),
              'link' => 'http://www.seabra.com.br/' . $empreendimento['extras'][0]['link'],
              'extras' => $this->getImovelExtras($empreendimento['imovel'])
          ];

          $imoveisModelo3[$imovelId] = [
            'empreendimento' => $emp->nome,
            'referencia' => $emp->referencia,
            'imovel' => $empreendimento,
            'arquitetura' => $empreendimento['arquitetura'],
            'codigo' => $empreendimento['imovel'],
            'tipologia' => $empreendimento['tipologia'],
            'terreno' => str_replace('área privativa', '', $empreendimento['tipologia']['area']),
            'faseobra' => $empreendimento['faseobra'],
            'entrega' => $dataEntrega,
            'imagens' => $imagensfachada = $this->getImagensImoveis($empreendimento['imovel'], 4),
            'link' => 'http://www.seabra.com.br/' . $empreendimento['extras'][0]['link'],
            'extras' => $this->getImovelExtras($empreendimento['imovel'])
          ];

          $decricaoProjeto = $this->getDescricao($empreendimento['imovel'], 1);
          $areasComuns = $this->getAreasComuns($empreendimento['imovel']);
          $imagensEmpreendimento = $this->getImagensImoveis($empreendimento['imovel'], 2);
          $plantasEmpreendimento = $this->getImagensImoveis($empreendimento['imovel'], 3);
          $imagensImovel = $this->getImagensImoveis($empreendimento['imovel'], 5);
          $imagensfachada = $this->getImagensImoveis($empreendimento['imovel'], 4);
          $imagensLazer = $this->getImagensImovel($empreendimento['imovel']);

          $lista[$emp->id] = [
            'empreendimento' => $empreendimento,
            'emp' => $emp,
            'tipologias' => $tipologias,
            'imovel' => $imovel,
            'decricaoProjeto' => $decricaoProjeto,
            'areasComuns' => $areasComuns,
            'imagensEmpreendimento' => $imagensEmpreendimento,
            'plantasEmpreendimento' => $plantasEmpreendimento,
            'imagensImovel' => $imagensImovel,
            'imagensfachada' => $imagensfachada,
            'imagensLazer' => $imagensLazer
          ];

        }

        $mensagem = [];

        $modeloKey = null;

        foreach ($lista as $key => $item) {

          if(empty($modeloKey)) {
            $modeloKey = $key;
          }

          $imagensLazer = $imagemFachada = $imagensEmpreendimento = $planta = $imagemFooter = [];

          if(!empty($item['imagensLazer'])) {

            foreach ($item['imagensLazer'] as $img) {
              $imagensLazer[] = 'http://www.seabra.com.br/admin/' . str_replace('../', '', $img->imagem);
            }

          }

          if(!empty($item['imagensfachada'])) {
            $imagemFachada = current($item['imagensfachada']);
          }

          if(empty($imagemFachada)) {
            //$imagemFachada = current($item['imagensEmpreendimento']);
          }

          //$imagensEmpreendimento = array_slice($item['imagensEmpreendimento'], 1, 5);

          if(!empty($item['plantasEmpreendimento'])) {
            $planta = current($item['plantasEmpreendimento']);
          }

          $imagensEmpreendimento = array_merge($imagensEmpreendimento, [$planta]);

          if(!empty($item['imagensEmpreendimento'])) {
            $ultimaImagem = array_slice($item['imagensEmpreendimento'], -1);
            $imagemFooter = current($ultimaImagem);
          }

          if(count($imagensLazer) < 8) {

              $imagensLazer = array_merge(array_slice($imagensEmpreendimento, 1, count($imagensLazer) - 8));

          } elseif(count($imagensLazer) > 8) {

              $imagensLazer = array_slice($imagensLazer, 1, 8);
          }

          $dataEntrega = null;

          if(!empty($item['imovel'][0]->emp_previsao_entrega)) {
            $dataEntrega = new \DateTime($imovel[0]->emp_previsao_entrega);
            $dataEntrega = $dataEntrega->format('d/m/Y');
          }

          $mensagem[$key] = view('empresa.chamados.includes.modelo-'.$modelo,
          compact('chamado', 'nomesEmpreendimentos', 'imoveisModelo2', 'imoveisModelo3', 'modelo', 'dataEntrega'))
          ->with('imagensLazer', $imagensLazer)
          ->with('empreendimento', $item['empreendimento'])
          ->with('emp', $item['emp'])
          ->with('tipologias', $item['tipologias'])
          ->with('imovel', $item['imovel'])
          ->with('decricaoProjeto', $item['decricaoProjeto'])
          ->with('areasComuns', $item['areasComuns'])
          ->with('imagensEmpreendimento', $imagensEmpreendimento)
          ->with('plantasEmpreendimento', $planta)
          ->with('imagensImovel', $item['imagensImovel'])
          ->with('imagemFachada', $imagemFachada)
          ->with('imagemFooter', $imagemFooter);
        }

        $mensagem = ($modelo == 2) ? [$modeloKey => current($mensagem)] : $mensagem;
        $nomesEmpreendimentos = ($modelo == 2) ? [current($nomesEmpreendimentos)] : $nomesEmpreendimentos;

        return view('empresa.perfil.editor',
        compact('mensagem', 'imovel', 'perfil', 'nomesEmpreendimentos', 'modelo', 'chamado'))
        ->with('empreendimento', current($lista));
    }

    public function sendEmail(Request $request, $id)
    {
        $data = $request->request->all();

        $perfil = Perfil::findOrFail($id);

        $nome = $perfil->nome;

        if($request->has('cliente')) {
          $cliente=Clientes::find($request->get('cliente'));
          $nome=$cliente->nome;
        }

        $path = "";

        if(isset($data['enviar_email'])) {

            $user = \Auth::user();

            $empresa = Empresa::where('id', $user->empresa_id)->get();
            $empresa = $empresa->first();

            $descricao = "";

            if(!$empresa->mail_username || !$empresa->mail_password || !$empresa->mail_driver || !$empresa->mail_host || !$empresa->mail_port) {
                flash('Erro no envio: Por favor verifique as configurações de envio de email na cadastro da empresa!')->error()->important();
                return redirect()->back();
            } else {

                \Config::set('mail.username', $empresa->mail_username);
                \Config::set('mail.password', $empresa->mail_password);
                \Config::set('mail.port', $empresa->mail_port);
                \Config::set('mail.driver', $empresa->mail_driver);
                \Config::set('mail.host', $empresa->mail_host);
                \Config::set('mail.encryption', $empresa->mail_encription);
                \Config::set('app.name', $empresa->nome);

            }



            }

        if(isset($data['enviar_email']) && isset($data['empreendimentos']) || isset($data['email_em_branco'])) {

            $emails = explode(', ', $data['email']);

            if(isset($data['empreendimentos'])) {

                foreach ($data['empreendimentos'] as $key => $item) {

                    $texto = $data['descricao-'.$item];

                    $assunto = 'SEABRA – '.$data['empreendimentos'][$key].' – INFORMAÇÕES';

                    if($data['modelo'] == 3) {
                      $assunto = 'SEABRA – IMÓVEIS SELECIONADOS CONFORME PERFIL DESEJADO';
                    }

                    $assunto = strtoupper($assunto);

                    foreach ($emails as $key => $email) {
                      \Mail::to([
                        $nome => $email,
                      ])->send(new \App\Mail\Perfil($perfil, $empresa, $texto, $path, $assunto, $data['modelo']));
                    }

                }
            } elseif(isset($data['email_em_branco'])) {

              $assunto = 'SEABRA – INFORMAÇÕES';

              foreach ($emails as $key => $email) {
                \Mail::to([
                  $nome => $email,
                ])->send(new \App\Mail\Resposta($log, $perfil, $empresa, $data['descricao'], $path, $assunto, $data['modelo']));
              }

            }

            flash('Email enviado com sucesso!')->success()->important();
        }

        return redirect()->back();

        flash('A descrição foi adicionada ao chamado com sucesso!')->success()->important();
    }

    public function getAreasComuns($id)
    {
        $sql = "select arc_nome
        from imoveis AS IMV
        INNER JOIN areas_comuns_imoveis AS AREA ON AREA.imv_id = IMV.imv_id
        INNER JOIN areas_comuns AS COM ON COM.arc_id = AREA.arc_id
        where IMV.imv_id = ?";

        $areas = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $areas;
    }

    public function getDescricao($id, $tipo)
    {
        switch ($tipo) {
            case 1:
                $field = 'des_basica';
                break;
            case 2:
                $field = 'des_regiao';
                break;
            case 3:
                $field = 'des_areas_comuns';
                break;
            default:
                $field = 'des_plantas';
                break;
        }

        $sql = "select $field from descricoes_imoveis where imv_id = ?";

        $descricao = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $descricao;
    }

    public function getImovel($id)
    {
        $sql = "Select IMV.imv_id, BAI.bai_id, imv_referencia,
          imv_publicidade, imv_uso, imv_titulo, imv_tipo, EMP.emp_previsao_entrega,
          imv_localidade, imv_oferta, est_uf, cid_nome,
          bai_nome, imv_oferta, emp_faixa_preco_ini,
          imv_area_terreno, imv_operacao, imv_portifolio
          from imoveis IMV
          LEFT JOIN empreendimentos AS EMP ON EMP.imv_id = IMV.imv_id
          LEFT JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
          LEFT JOIN estados AS EST ON EST.est_id = LOC.est_id
          LEFT JOIN cidades AS CID ON CID.cid_id = LOC.cid_id
          LEFT JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
          where IMV.imv_id = ? ";

        $imovel = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $imovel;
    }

    public function getImagensImovel($id, $tipo = 'img_lazer')
    {
        $sql = "Select imagens.img_diretorio imagem
          from imoveis IMV
          left JOIN empreendimentos AS EMP ON EMP.imv_id = IMV.imv_id
          INNER JOIN imagens_imoveis AS imagens ON imagens.imv_id = IMV.imv_id
          where IMV.imv_id = ? ";

        $sql .= " AND $tipo = 1 ";

        $imovel = \DB::connection('mysql_seabra')->select($sql, [$id]);

        #dd($imovel);

        return $imovel;
    }

    public function getTipolias($id, $tipo)
    {
      $sql = "select tip_dorms, tip_suite, tip_vagas, tip_area from tipologias where imv_id = ? and tip_status = 0 ";

      if ($tipo == 1) {
          //$sql .= " AND tip_cobertura = 1";
      }

      $tipologias = \DB::connection('mysql_seabra')->select($sql, [$id]);

      $result = [];

      $i = 0;

      foreach ($tipologias as $tipologia) {
          if ($tipo == 4 || $tipo == 7 || $tipo == 8 || $tipo == 13 || $tipo == 14) {
              $result[$i]['tipologiaExtenso'] = $tipologia->tip_vagas.' vaga(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_area.' m<sup>2</sup> área privativa';
          } elseif ($tipo == 9 || $tipo == 11) {
              $result[$i]['tipologiaExtenso'] = $tipologia->tip_area.' m<sup>2</sup> área privativa';
          } else {
              $result[$i]['tipologiaExtenso'] = $tipologia->tip_dorms.' dormitório(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_suite.' suite(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_vagas.' vaga(s) | ';

              $result[$i]['tipologiaExtenso'] .= $tipologia->tip_area.' m<sup>2</sup> área privativa';
          }

          ++$i;
      }

      return $result;
    }

    public function getImagensImoveis($id, $tipo)
    {
        $where = '';

        switch ($tipo) {
            case 1:
                $where = "AND img_home = '1'";
                break;

            case 2:
                $where = "AND img_lazer = '1'";
                break;

            case 3:
                $where = "AND img_planta = '1'";
                break;

            case 4:
                $where = "AND img_fachada = '1'";
                break;

            case 5:
                $where = "AND img_decorado = '1'";
                break;

            case 6:
                $where = "AND (img_fachada = '1' OR img_planta = '1')";
                break;

            default:
                $where = 'AND img_home = 0 AND img_lazer = 0 AND img_planta = 0 AND img_fachada = 0 AND img_decorado = 0';
                break;
        }

        $sql = " select img_diretorio from imagens_imoveis where imv_id = ? $where ";

        $imagens = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $result = [];

        $i = 0;

        if (count($imagens) > 0) {
            foreach ($imagens as $imagem) {
                $path = pathinfo($imagem->img_diretorio);

                $result[$i] = 'http://www.seabra.com.br/admin/assets/images/upload/img/'.$path['basename'];

                ++$i;
            }
        } elseif ($tipo == 1) {
            $result[0] = 'http://www.seabra.com.br/admin/assets/images/upload/img/image_break.jpg';
        }

        return $result;
    }

    public function getEmpreendimentoAjax(Request $request)
    {
        if(!$request->has('referencia')) {
            return response()->json([
              'code' => 403,
              'message' => 'Parametros insuficientes para a pesquisa.'
            ]);
        }

        return json_encode($this->getEmpreendimento($request->get('referencia')));
    }

    public function getEmpreendimento($referencia)
    {
        $sql = "select IMV.imv_id, imv_referencia, imv_publicidade, imv_tipo,
        imv_area_terreno, emp_incorporacao, emp_construcao,
        emp_arquitetura, emp_qtd_torres, emp_qtd_unidades,
        emp_qtd_elevadores, emp_estacoes_proximas, emp_previsao_entrega,
        emp_fases_obra, emp_link_hot_site, emp_link_video
        from empreendimentos AS EMP
        INNER JOIN imoveis AS IMV ON IMV.imv_id = EMP.imv_id
        where IMV.imv_referencia = ?
        ";

        $empreendimentos = \DB::connection('mysql_seabra')->select($sql, [$referencia]);

        $result = [];

        foreach ($empreendimentos as $empreendimento) {

            $entrega = $empreendimento->emp_previsao_entrega;

            $result['imovel'] = $empreendimento->imv_id;
            $result['referencia'] = $empreendimento->imv_referencia;
            $result['incorporacao'] = $empreendimento->emp_incorporacao;
            $result['construcao'] = $empreendimento->emp_construcao;
            $result['arquitetura'] = $empreendimento->emp_arquitetura;
            $result['qtdtorres'] = $empreendimento->emp_qtd_torres;
            $result['qtdunidades'] = $empreendimento->emp_qtd_unidades;
            $result['qtdelevadores'] = $empreendimento->emp_qtd_elevadores;
            $result['estproximas'] = $empreendimento->emp_estacoes_proximas;
            $result['entrega'] = (new \DateTime($entrega))->format('d/m/Y');
            $result['faseobra'] = mb_strtoupper($this->getPublicidade($empreendimento->imv_publicidade), 'UTF-8');
            $result['tipo'] = $empreendimento->imv_tipo;
            $result['terreno'] = $empreendimento->imv_area_terreno.' mts<sup>2</sup>';
            $result['hotsite'] = $empreendimento->emp_link_hot_site;
            $result['video'] = $empreendimento->emp_link_video;
            $result['tipologia'] = $this->getTipologia($empreendimento->imv_id, $empreendimento->imv_tipo == 1);
            $result['tipologias'] = $this->getTipolias($empreendimento->imv_id, $empreendimento->imv_tipo);
            $result['extras'] = $this->getImovelExtras($empreendimento->imv_id);
        }

        return $result;

    }

    public function getImovelExtras($id)
    {
        $sql = "select IMV.imv_id, imv_titulo,
          imv_publicidade, imv_uso, imv_tipo,
          est_uf, cid_nome, bai_nome, imv_localidade
          from imoveis AS IMV
          LEFT JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
          LEFT JOIN estados AS EST ON EST.est_id = LOC.est_id
          LEFT JOIN cidades AS CID ON CID.cid_id = LOC.cid_id
          LEFT JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
          where IMV.imv_id = ?
        ";

        $imoveis = $empreendimentos = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $result = [];

        if (count($imoveis) > 0) {
            $i = 0;

            foreach ($imoveis as $imovel) {

                $id = $imovel->imv_id;

                $titulo = $imovel->imv_titulo;

                $estado = $imovel->est_uf;

                $cidade = $imovel->cid_nome;

                $bairro = $imovel->bai_nome;

                $endereco = $imovel->imv_localidade;

                $uso = $imovel->imv_uso;

                $tipo2 = $imovel->imv_tipo;

                $result[$i]['value'] = $id;

                $result[$i]['titulo'] = $titulo;

                $result[$i]['endereco'] = $endereco;

                $result[$i]['tipo'] = $tipo2;

                $result[$i]['estado'] = $estado;

                $result[$i]['cidade'] = mb_strtoupper($cidade, 'UTF-8');

                $result[$i]['bairro'] = mb_strtoupper($bairro, 'UTF-8');

                $result[$i]['link'] = 'app_user/imoveis/detalhes_busca/estado='.$this->sanitizeString($estado).'/cidade='.$this->sanitizeString(preg_replace('/\s+/', '_', $cidade)).'/bairro='.$this->sanitizeString(preg_replace('/\s+/', '_', $bairro)).'/tipo='.$this->detectTipo($tipo2).'/'.$id;

                ++$i;
            }
        }

        return $result;
    }

    public function getPublicidade($publicidade)
    {
        switch ($publicidade) {
            case 1:
                $publicidade = 'Pronto Para Morar';
                break;
            case 2:
                $publicidade = 'Em Construção';
                break;
            case 3:
                $publicidade = 'Lançamento';
                break;
            case 4:
                $publicidade = 'Pronto Para Morar *';
                break;
            default:
                $publicidade = 'Indisponível';
                break;
        }

        return $publicidade;
    }

    public function queryTipologias($id, $campo)
    {
        $sql = " select $campo from tipologias where imv_id = ? AND tip_status = 0 ";

        $result = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $result;
    }

    public function sanitizeString($str)
    {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        return $str;
    }

    public function detectTipo($tipo)
    {
        switch ($tipo) {
            case 1:
                $tipo = 'Apartamento';
                break;
            case 2:
                $tipo = 'Casa';
                break;
            case 3:
                $tipo = 'Cobertura';
                break;
            case 4:
                $tipo = 'Conjunto Comercial';
                break;
            case 5:
                $tipo = 'Duplex';
                break;
            case 6:
                $tipo = 'Flat';
                break;
            case 7:
                $tipo = 'Loja';
                break;
            case 8:
                $tipo = 'Ponto Comercial';
                break;
            case 9:
                $tipo = 'Terreno/Loteamento';
                break;
            case 10:
                $tipo = 'Vaga de Garagem';
                break;
            case 11:
                $tipo = 'Rural';
                break;
            default:
                $tipo = 'Indefinido';
                break;
        }

        return $tipo;
    }

    public function getTipologia($id, $tipo)
    {
        $cobertura = $tipo;

        if ($cobertura == 1) {
            //$sql .= " AND tip_cobertura = 1";
        }

        $dormitorios = $this->queryTipologias($id, 'tip_dorms');

        $resultDormitorio = [];

        foreach ($dormitorios as $key => $item) {
          $resultDormitorio[] = $item->tip_dorms;
        }

        $minDorms = min($resultDormitorio);
        $maxDorms = max($resultDormitorio);

        $result = [];

        if ($maxDorms > $minDorms) {
            $result['dorms'] = $minDorms.' a '.$maxDorms.' dormitório(s)';
        } else {
            $result['dorms'] = $minDorms.' dormitório(s)';
        }

        /* SUITES **/
        $suites = $this->queryTipologias($id, 'tip_suite');

        $arraySuites = [];

        foreach ($suites as $key => $item) {
          $arraySuites[] = $item->tip_suite;
        }

        $minSuites = min($arraySuites);
        $maxSuites = max($arraySuites);

        if ($maxSuites > $minSuites) {
            $result['suites'] = $minSuites.' a '.$maxSuites.' suite(s)';
        } else {
            $result['suites'] = $minSuites.' suite(s)';
        }

        /* Vagas **/

        $vagas = $this->queryTipologias($id, 'tip_vagas');

        $arrayVagas = [];

        foreach ($vagas as $key => $item) {
          $arrayVagas[] = $item->tip_vagas;
        }

        $minVagas = min($arrayVagas);
        $maxVagas = max($arrayVagas);

        if ($maxVagas > $minVagas) {
            $result['vagas'] = $minVagas.' a '.$maxVagas.' vaga(s)';
        } else {
            $result['vagas'] = $minVagas.' vaga(s)';
        }

        /* Vagas **/

        $area = $this->queryTipologias($id, 'tip_area');

        $arrayArea = [];

        foreach ($area as $key => $item) {
          $arrayArea[] = $item->tip_area;
        }

        $minArea = min($arrayArea);
        $maxArea = max($arrayArea);

        $result['valor'] = 0;

        if ($maxArea > $minArea) {
            $result['area'] = $minArea.' a '.$maxArea.' m<sup>2</sup> área privativa';
        } else {
            $result['area'] = $minArea.' m<sup>2</sup> área privativa';
            $result['valor'] = $minArea;
        }

        /* Preço M² Venda **/

        $mt2 = $this->queryTipologias($id, 'tip_valor_metro_quad');

        $arrayMt2 = [];

        foreach ($mt2 as $key => $item) {
          $arrayMt2[] = $item->tip_valor_metro_quad;
        }

        $minArea = min($arrayMt2);

        $result['valorImovelTotal'] = 0;

        if ($result['valor'] > 0) {
            $result['valorImovelTotal'] = number_format($minArea * $result['valor'], 2, ',', '.');

            $result['valorImovelTotal'] = substr($result['valorImovelTotal'], 0, -2);
        }

        $minArea = number_format($minArea, 2, ',', '.');

        $result['quadrado'] = 'R$ '.$minArea.'  por m<sup>2</sup>';

        /* Preço M² Aluguel **/

        $tipoArea = $this->queryTipologias($id, 'tip_area');

        $arrayTipoArea = [];

        foreach ($tipoArea as $key => $item) {
          $arrayTipoArea[] = $item->tip_area;
        }

        $tipArea = max($arrayTipoArea);

        $sql = "select imvof_valor_aluguel from imoveis_oferta where imv_id = ?";
        $areaAluguelResult = \DB::connection('mysql_seabra')->select($sql, [$id]);

        #dd($areaAluguel);

        $areaAluguel = 0;

        if($tipArea > 0 && $areaAluguelResult > 0) {
           $areaAluguel = $areaAluguel / $tipArea;
        }

        $areaAluguel = number_format($areaAluguel, 2, ',', '.');

        $result['quadradoAluguel'] = '( R$ '.$areaAluguel.'  por m<sup>2</sup> )';

        return $result;
    }

    public function cidades(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $user = \Auth::user();

        $cidades = \App\Models\Cidade::where('nome', 'like', "%$search%")->where('estado_id', 26)->get();

        $resultado = [];

        foreach ($cidades as $key => $cidade) {
          $resultado[] = [
            'id' => $cidade->id,
            'nome' => $cidade->nome,
            'estado_nome' => $cidade->estado->nome,
          ];
        }

        return json_encode($resultado);
    }
}
