@extends('adminlte::page')

@section('title', 'Áreas')

@section('content_header')
    <h1>Painel de Áreas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('areas.index') }}"><i class="fa fa-newspaper-o"></i> Áreas</a></li>
      <li class="active">Nova Área</li>
    </ol>
@stop

@section('content')

  <form method="post" action="{{ route('areas.store') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Nova Área</h3>
          </div>

            <div class="box-body">

                <div class="row">

                  <div class="col-md-4">
                    <div class="form-group {{ $errors->has('descricao') ? ' has-error' : '' }}">
                      <label>Nome
                        <input type="text" class="form-control" name="descricao" style="width:100%"/>
                        @if ($errors->has('descricao'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('descricao') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  @if(\Auth::user()->isAdmin())
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Empresa
                        <select class="form-control" name="id_empresa">
                          @foreach($empresas as $empresa)
                              <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                          @endforeach
                        </select>
                      </label>
                    </div>
                  </div>
                  @else
                    <input type="hidden" name="id_empresa" value="{{ \Auth::user()->empresa_id }}"/>
                  @endif

                </div>

            </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-body">

              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="{{ route('areas.index') }}" type="submit" class="btn btn-danger">Voltar</a>

          </div>
        </div>
      </div>
    </div>

  </form>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
