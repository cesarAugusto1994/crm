@extends('adminlte::page')

@section('title', 'CRM')

@section('content_header')
    <h1>Painel Principal</h1>
@stop

@section('content')

<div class="row">
    <div class="col-lg-3 col-xs-6">

      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ \App\Models\Chamados::count() }}</h3>
          <p>Chamados</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('chamados.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $porcentagemTarefas }}<sup style="font-size: 20px">%</sup></h3>
          <p>Chamados Finalizados</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ \App\Models\Clientes::count() }}</h3>
          <p>Clientes</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('clientes.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>
          <p>Chamados Em Atraso</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


    <div class="flot-chart dashboard-chart" id="flot-chart-consultas"></div>

  </div>

  <input type="" id="url-chamados-graph" value="{{route('chamados_graph')}}">

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
