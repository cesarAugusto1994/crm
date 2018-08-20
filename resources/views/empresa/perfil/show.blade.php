@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <h1>Painel de Perfis</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Perfis</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Perfil</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <p class="lead">{{ $perfil->nome }}</p>

          <a href="{{ route('adicionar_imoveis', $perfil->id) }}" class="btn btn-success">Adicionar Imóveis</a>
          <a href="{{ route('adicionar_imoveis', $perfil->id) }}" class="btn btn-warning">Enviar Email</a>

        </div>
      </div>
    </div>

    <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Lista Empreendimentos</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body table-responsive">
            <table class="table table-striped table-hover">
              <thead>

                <tr>
                  <th>Código</th>
                  <th>Titulo</th>
                  <th>Localidade</th>
                  <th>Referencia</th>
                  <th>Incorporação</th>
                  <th>Construtora</th>
                  <th>Arquitetura</th>
                  <th>Torres</th>
                  <th>Unidades</th>
                  <th>Elevadores</th>
                  <th>Dormitórios</th>
                  <th>Suites</th>
                  <th>Vagas</th>
                  <th>Area</th>
                  <th>Estações</th>
                  <th>Entrega</th>
                  <th>Faixa Precço</th>
                  <th>Faixa Precço</th>
                  <th>Fase Obra</th>
                  <th>Areas Comuns</th>
                </tr>

              </thead>
              <tbody>

                @forelse($perfil->imoveis as $imovel)

                    @php

                      $imovel = $imovel->imovel;

                    @endphp

                    <tr>
                      <td>{{ $imovel->id }}</td>
                      <td>{{ $imovel->titulo }}</td>
                      <td>{{ $imovel->localidade }}</td>
                      <td>{{ $imovel->referencia }}</td>
                      <td>{{ $imovel->incorporacao }}</td>
                      <td>{{ $imovel->construcao }}</td>
                      <td>{{ $imovel->arquitetura }}</td>
                      <td>{{ $imovel->torres }}</td>
                      <td>{{ $imovel->unidades }}</td>
                      <td>{{ $imovel->elevadores }}</td>
                      <td>{{ $imovel->dormitorios }}</td>
                      <td>{{ $imovel->suites }}</td>
                      <td>{{ $imovel->vagas }}</td>
                      <td>{{ $imovel->areas }}</td>
                      <td>{{ $imovel->estacoes_proximas }}</td>
                      <td>{{ $imovel->previsao_entrega }}</td>
                      <td>{{ $imovel->faixa_preco_ini }}</td>
                      <td>{{ $imovel->faixa_preco_fim }}</td>
                      <td>{{ $imovel->fases_obra }}</td>
                      <td>
                        @php

                          $areas = [];

                          if(!empty($imovel->areas_comuns)) {
                            $areas = explode(',' ,$imovel->areas_comuns);
                          }

                        @endphp

                        @foreach($areas as $area)

                          - {{ $area }} <br/>

                        @endforeach
                      </td>
                    </tr>
                @empty
                    <tr>
                      <td colspan="22">
                        <div class="alert alert-warning text-center">
                          <h4><i class="icon fa fa-info"></i> Ops...</h4>
                          <p>Nenhum registro encontrado.</p>
                        </div>
                      </td>
                    </tr>
                @endforelse
            </tbody></table>
          </div>
          <div class="box-footer clearfix">

          </div>
        </div>
      </div>
    </div>

  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
