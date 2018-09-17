@extends('adminlte::page')

@section('title', 'Áreas')

@section('content_header')
    <h1>Painel de Áreas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('areas.index') }}"><i class="fa fa-newspaper-o"></i> Áreas</a></li>
      <li class="active">Editar Midia</li>
    </ol>
@stop

@section('content')

  <form method="post" action="{{ route('areas.update', ['id' => $area->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Empresa #{{ $area->id }}</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">

                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('descricao') ? ' has-error' : '' }}">
                      <label>Nome
                        <input type="text" class="form-control" name="descricao" value="{{ $area->descricao }}"/>
                        @if ($errors->has('descricao'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('descricao') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Empresa
                        <p class="lead">{{ $area->empresa->nome ?? 'Indefinido' }}</p>
                      </label>
                    </div>
                  </div>


                </div>

            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">

              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="{{ route('midias.index') }}" type="submit" class="btn btn-danger">Voltar</a>

          </div>
        </div>
      </div>
    </div>
  </form>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
