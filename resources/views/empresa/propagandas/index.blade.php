@extends('adminlte::page')

@section('title', 'Propagandas')

@section('content_header')
    <h1>Painel de Propagandas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Propagandas</li>
    </ol>
@stop

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Lista Propagandas</h3>
        </div>
        <div class="box-body table-responsive">

          <table class="table table-hover table-bordered table-condensed table-striped">
            <thead>

              <tr>
                <th>#</th>
                <th>Nome</th>
                <th style="width:150px">Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($propagandas as $propaganda)
                  <tr>
                    <td>{{ $propaganda->id }}</td>
                    <td>{{ $propaganda->nome }}</td>
                    <td>

                      <a class="btn btn-success btn-sm" href="{{ route('propagandas.show', $propaganda->id) }}"><i class="fa fa-eye"></i> </a>
                      <a class="btn btn-info btn-sm" href="{{ route('propagandas.edit', $propaganda->id) }}"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger btn-sm btnRemoveItem" data-route="{{ route('propagandas.destroy', $propaganda->id) }}"><i class="fa fa-trash"></i> </a>

                    </td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="20">
                      <div class="alert alert-warning text-center">
                        <p>Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
          </tbody></table>
        </div>
        <div class="box-footer clearfix">
          {{ $propagandas->links() }}
        </div>
      </div>
    </div>
  </div>

  <input type="hidden" id="url-empreendimentos" value="{{ route('empreendimento_ajax') }}">
  <input type="hidden" id="url-bairros" value="{{ route('bairros') }}">

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
