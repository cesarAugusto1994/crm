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
        </div>
        <div class="box-body">
          <p class="lead">{{ $perfil->nome }}</p>

          <a href="{{ route('adicionar_imoveis', $perfil->id) }}" class="btn btn-primary"><i class="fa fa-home"></i> Adicionar Imóveis</a>
          <a href="{{ route('adicionar_cliente', $perfil->id) }}" class="btn btn-info"><i class="fa fa-user"></i> Adicionar Cliente</a>

        </div>
      </div>
    </div>

    <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Lista Empreendimentos</h3>

          </div>
          <div class="box-body table-responsive">
            <table class="table table-striped table-hover">
              <thead>

                <tr>
                  <th style="width: 10px"></th>
                  <th>Titulo</th>
                  <th>Código</th>
                  <th>Referencia</th>
                  <th>Area privativa</th>
                  <th>Dormitórios</th>
                  <th>Suites</th>
                  <th>Vagas</th>
                  <th>Fase Obra</th>
                  <th>Entrega</th>
                  <th>Faixa Preço</th>
                  <th>Localidade</th>
                  <th>Incorporação</th>
                  <th>Opções</th>
                </tr>

              </thead>
              <tbody>

                @forelse($perfil->imoveis as $imovel)

                    @php

                      $id = $imovel->id;
                      $imovel = $imovel->imovel;

                    @endphp

                    <tr>
                      <td></td>
                      <td>{{ $imovel->titulo }}</td>
                      <td>{{ $imovel->id }}</td>
                      <td>{{ $imovel->referencia }}</td>
                      <td>{{ $imovel->areas }}</td>
                      <td>{{ $imovel->dormitorios }}</td>
                      <td>{{ $imovel->suites }}</td>
                      <td>{{ $imovel->vagas }}</td>
                      <td>{{ $imovel->fases_obra }}</td>
                      <td>{{ $imovel->previsao_entrega }}</td>
                      <td>{{ $imovel->faixa_preco_ini }} - {{ $imovel->faixa_preco_fim }}</td>
                      <td>{{ $imovel->localidade }}</td>
                      <td>{{ $imovel->incorporacao }}</td>
                      <td>
                        <a data-route="{{ route('imoveis.destroy', $id) }}" class="btn btn-danger btnRemoveItem"><i class="icon fa fa-trash"></i> </a>
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
