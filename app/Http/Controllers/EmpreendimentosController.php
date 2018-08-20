<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos as Empreendimento;
use App\Models\Bairro;

class EmpreendimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $this->authorize('manage-empreendimentos.index', Midias::class);

      $data = $request->request->all();

      $empreendimentos = [];

      if($request->has('buscar')) {
          $sql = "
            select *, (
              select group_concat(ac.arc_nome)
              from areas_comuns_imoveis aci
              inner join areas_comuns ac ON (ac.arc_id = aci.arc_id)
              where aci.imv_id = imovel.imv_id";

          if(!empty($data['areas'])) {

            foreach ($data['areas'] as $key => $area) {

              $sql .= " AND aci.arc_id = " . (int)$area . " ";

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
              $produto = \App\Models\Produtos::findOrFail((int)$request->get('empreendimento'));

              $sql2 = "select * from imoveis where imv_referencia = '" . $produto->referencia . "'";

              $imovel = \DB::connection('mysql_seabra')->select($sql2);
              $imovelId = null;

              if(!empty($imovel[0])) {
                $imovelId = $imovel[0]->imv_id;
                if(!empty($imovelId)) {
                  $sql .= " AND imovel.imv_id = " . $imovelId;
                }
              }

          }

          if($request->has('codigo') && !empty($request->get('codigo'))) {
              $sql .= " AND imovel.imv_id = " . (int)$request->get('codigo');
          }

          if($request->has('nome') && !empty($request->get('nome'))) {
              $sql .= " AND imovel.imv_titulo LIKE '%" . $request->get('nome') . "%'";
          }

          if($request->has('bairros')) {
              $sql .= " AND local.bai_id = " . (int)$request->get('bairros');
          }

          if($request->has('habilitar_dormitorios')) {
              $sql .= " AND tip.tip_dorms = " . (int)$request->get('dormitorios');
          }

          if($request->has('habilitar_dormitorios')) {
              $sql .= " AND tip.tip_dorms = " . (int)$request->get('dormitorios');
          }

          if($request->has('habilitar_suites')) {
              $sql .= " AND tip.tip_suite = " . (int)$request->get('suites');
          }

          if($request->has('habilitar_vagas')) {
              $sql .= " AND tip.tip_vagas = " . (int)$request->get('vagas');
          }

          if($request->has('habilitar_cobertura')) {
              $sql .= " AND tip.tip_cobertura = " . (int)$request->get('cobertura');
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

          $registros = \DB::connection('mysql_seabra')->select($sql);

          #dd($registros);

          foreach ($registros as $key => $empreendimento) {
              $empreendimentos[] = [
                  'id' => $empreendimento->imv_id,
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
                  'areas' => (int)$empreendimento->tip_area,
                  'estacoes_proximas' => $empreendimento->emp_estacoes_proximas,
                  'previsao_entrega' => $empreendimento->emp_previsao_entrega,
                  'faixa_preco_ini' => $empreendimento->emp_faixa_preco_ini,
                  'faixa_preco_fim' => $empreendimento->emp_faixa_preco_fim,
                  'fases_obra' => (int)$empreendimento->emp_fases_obra,
                  'areas_comuns' => $empreendimento->areas,
              ];
          }
      }

      $paginate = 10;
      $page = $request->get('page', 1) ?? 1;
      $offSet = ($page * $paginate) - $paginate;
      $itemsForCurrentPage = array_slice($empreendimentos, $offSet, $paginate, true);

      $empreendimentos = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($empreendimentos), $paginate, $page, ['path'=>url('/empreendimentos?' . $request->getQueryString())]);

      return view('empresa.empreendimentos.index', compact('empreendimentos'));
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

    public function bairros(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $user = \Auth::user();

        $bairros = Bairro::where('nome', 'like', "%$search%")->get();

        return $bairros->toJson();
    }

    public function areaPrivativa(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        $user = \Auth::user();

        $areas = \App\Models\Imovel\AreasComuns::where('nome', 'like', "%$search%")->get();

        return $areas->toJson();
    }
}
