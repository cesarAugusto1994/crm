@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>Painel de Empresas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('usuarios.index') }}"><i class="fa fa-newspaper-o"></i> Midias</a></li>
      <li class="active">Nova Midia</li>
    </ol>
@stop

@section('content')

  <form method="post" action="{{ route('midias.store') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Nova Midia</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

            <div class="box-body">

                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('nome') ? ' has-error' : '' }}">
                      <label>Nome
                        <input type="text" class="form-control" name="nome"/>
                        @if ($errors->has('nome'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('nome') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Empresa
                        <select class="form-control" name="empresa_id">
                          @foreach($empresas as $empresa)
                              <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                          @endforeach
                        </select>
                        @if ($errors->has('empresa_id'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('empresa_id') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group {{ $errors->has('ativo') ? ' has-error' : '' }}">
                        <label>Situação
                          <select class="form-control" name="ativo">
                              <option value="1">Ativo</option>
                              <option value="0">Inativo</option>
                          </select>
                          @if ($errors->has('ativo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('ativo') }}</strong>
                              </span>
                          @endif
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
