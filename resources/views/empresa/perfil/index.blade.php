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

            <a href="{{ route('perfis.create') }}" class="btn btn-primary">Novo Perfil</a>

          </div>

      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Lista Perfis</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body table-responsive">

          <table class="table table-hover">
            <thead>

              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($perfis as $perfil)
                  <tr>
                    <td>{{ $perfil->id }}</td>
                    <td>{{ $perfil->nome }}</td>
                    <td>
                      <a href="{{ route('perfis.show', $perfil->id) }}"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('perfis.edit', $perfil->id) }}"><i class="fa fa-edit"></i></a>
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
          {{ $perfis->links() }}
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
