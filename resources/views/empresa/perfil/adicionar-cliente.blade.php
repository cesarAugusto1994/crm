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
        </div>
      </div>
    </div>

    <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Cliente</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">

            <div class="row">

              <form method="get" action="{{ route('perfil_envio_email_cliente', $perfil->id) }}">

              <div class="col-md-5">
                <div class="form-group">
                  <label>Cliente</label>
                      <select required style="width:150px" id="select-cliente" name="cliente" data-url="{{ route('clientes') }}" class="form-control"></select>
                </div>
              </div>

              <div class="col-md-12">

              <button class="btn"><i class="fa fa-envelope"></i> Enviar Email</button>

              </div>

              </form>

            </div>

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
