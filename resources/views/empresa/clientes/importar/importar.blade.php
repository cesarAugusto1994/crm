@extends('adminlte::page')

@section('title', 'Importar Clientes')

@section('content_header')
    <h1>Painel de Importar Clientes</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Importar Clientes</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">

          <div class="box-header with-border">
            <h3 class="box-title">Filtros</h3>
          </div>

          <form action="?" method="get">
              <input type="hidden" id="buscar" name="buscar" value="1"/>
              <div class="box-body">
                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="codigo">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                  </div>

                </div>

              </div>
              <div class="box-footer clearfix">
              <button type="submit" class="btn btn-success">Buscar</button>
          </div>
          </form>

      </div>
    </div>

    @if(\Request::has('buscar'))
        <form action="{{ route('importar_clientes') }}" method="post">
          <input type="hidden" name="old_nome" value="{{ \Request::get('nome') }}"/>
          {{ csrf_field() }}
          <div class="col-md-12">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Novo Nome do Empreendimento</h3>
              </div>
              <div class="box-body">
                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="select-empreendimento">Empreendimento</label>
                      <select style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="select2"></select>
                    </div>
                  </div>

                </div>

                <button class="btn btn-primary">Importar Clientes</button>
              </div>
            </div>
          </div>
        </form>
    @endif

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Clientes ({{count($resultado)}})</h3>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-condensed">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Grupo</th>
                <th>Importado</th>
              </tr>

            </thead>
            <tbody>

              @forelse($resultado as $item)
                  <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nome'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['grupo'] }}</td>
                    <td>{{ $item['importado'] ? 'SIM' : 'Não' }}</td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="9">
                      <div class="alert alert-warning">
                        <p><i class="icon fa fa-info"></i> Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
          </tbody></table>
        </div>

      </div>
    </div>

  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
