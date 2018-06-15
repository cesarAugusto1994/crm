@extends('adminlte::page')

@section('title', 'Chamados')

@section('content_header')
    <h1>Painel de Clientes</h1>
@stop

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Filtros</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">

        <div class="box-footer clearfix">
        </div>
      </div>
    </div>
  </div>

    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
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

              @foreach($clientes as $cliente)
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
              @endforeach
          </tbody></table>
        </div>
        <div class="box-footer clearfix">
          {{ $clientes->links() }}
        </div>
      </div>
    </div>
  </div>

@stop
