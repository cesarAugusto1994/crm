@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <h1>Painel de Empresas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Empresas</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Empresas</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">

          <div class="row">
            <div class="col-md-12">
            <div class="box box-solid">
              <div class="box-body">
                <a class="btn btn-success btn-sm" href="{{ route('empresas.create') }}">Adicionar Empresa</a>
              </div>
            </div>
            </div>
          </div>

          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Status</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($empresas as $empresa)
                  <tr>
                    <td>{{ $empresa->id }}</td>
                    <td>{{ $empresa->nome ?? '-' }}</td>
                    <td>
                      @if($empresa->status)
                          <span class="badge bg-teal">Ativo</span>
                      @else
                          <span class="badge bg-red">Inativo</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('empresas.edit', ['id' => $empresa->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
          {{ $empresas->links() }}
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
