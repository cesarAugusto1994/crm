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
            <h3 class="box-title">Perfis</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="box-body">
            <form action="{{ route('perfis.store') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="codigo">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"/>
              </div>

              <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
          </div>

      </div>
    </div>

  </div>


@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
