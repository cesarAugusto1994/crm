@extends('adminlte::page')

@section('title', 'Áreas')

@section('content_header')
    <h1>Painel de Áreas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Áreas</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Áreas</h3>
        </div>
        <div class="box-body">

          <div class="row">
            <div class="col-md-12">
            <div class="box box-solid">
              <div class="box-body">
                <a class="btn btn-success btn-sm" href="{{ route('areas.create') }}">Adicionar Área</a>
              </div>
            </div>
            </div>
          </div>

          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Empresa</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($areas as $area)
                  <tr>
                    <td>{{ $area->id }}</td>
                    <td>{{ $area->descricao ?? '-' }}</td>
                    <td>{{ $area->empresa->nome ?? '-' }}</td>
                    <td>
                      <a href="{{ route('areas.edit', $area->id) }}" class="btn btn-primary"><i class="icon fa fa-edit"></i> </a>
                      <a data-route="{{ route('areas.destroy', $area->id) }}" class="btn btn-danger btnRemoveItem"><i class="icon fa fa-trash"></i> </a>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="8">
                      <div class="callout callout-info">
                        <h4><i class="icon fa fa-info"></i> Ops...</h4>
                        <p>Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
          </tbody></table>
        </div>
        <div class="box-footer clearfix">
          {{ $areas->links() }}
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
