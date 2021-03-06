@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <h1>Painel de Midias</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Midias</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Midias</h3>
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
                <a class="btn btn-success btn-sm" href="{{ route('midias.create') }}">Adicionar Midia</a>
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
                <th>Status</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($midias as $midia)
                  <tr>
                    <td>{{ $midia->id }}</td>
                    <td>{{ $midia->nome ?? '-' }}</td>
                    <td>{{ $midia->empresa->nome ?? '-' }}</td>
                    <td>
                      @if($midia->ativo)
                          <span class="badge bg-teal">Ativo</span>
                      @else
                          <span class="badge bg-red">Inativo</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('midias.edit', $midia->id) }}" class="btn btn-primary"><i class="icon fa fa-edit"></i> </a>
                      <a data-route="{{ route('midias.destroy', $midia->id) }}" class="btn btn-danger btnRemoveItem"><i class="icon fa fa-trash"></i> </a>
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
          {{ $midias->links() }}
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
