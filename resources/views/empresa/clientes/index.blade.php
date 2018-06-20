@extends('adminlte::page')

@section('title', 'Chamados')

@section('content_header')
    <h1>Painel de Clientes</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Midias</li>
    </ol>
@stop

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="box box-solid">

          <div class="box-header with-border">
            <h3 class="box-title">Filtros</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

          <form action="{{ route('clientes.index') }}">
              <div class="box-body">
                <div class="row">

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="codigo">Codigo</label>
                      <input type="text" class="form-control" id="codigo" name="id" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-empreendimento">Empreendimento</label>
                      <select style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="select2"></select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-midias">Midia</label>
                      <select style="width:150px" id="select-midias" name="midia" data-url="{{ route('midias') }}" class="form-control"></select>
                    </div>
                  </div>

                </div>
              </div>
              <div class="box-footer clearfix">
              <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
          </form>

      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Cadastro de Clientes</h3>
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
                <a class="btn btn-success" href="{{ route('clientes.create') }}">Adicionar Cliente</a>
              </div>
            </div>
            </div>
          </div>

          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Cliente</th>
                <th>Email</th>
                <th>Empreendimentos</th>
                <th>Midias</th>
                <th>Telefone</th>
                <th>Cadastro</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($clientes as $cliente)
                  <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome ?? '-' }}</td>
                    <td>
                      @foreach($cliente->emails as $emails)
                          <p>{{ $emails->email ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($cliente->empreendimentos as $empreendimento)
                          <p>{{ $empreendimento->empreendimento->nome ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($cliente->midias as $midia)
                          <p>{{ $midia->midia->nome ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($cliente->telefones as $telefones)
                          <p>{{ $telefones->telefone ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      {{ $cliente->created_at ? $cliente->created_at->format('d/m/Y') : '-' }}
                    </td>
                    <td>
                      <a href="{{ url('/clientes/' . $cliente->id) }}" class="btn btn-primary btn-xs">Visualizar</a>
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
          {{ $clientes->links() }}
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
