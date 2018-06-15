@extends('adminlte::page')

@section('title', 'Chamados')

@section('content_header')
    <h1>Painel de Chamados</h1>
@stop

@section('content')

  <div class="row">
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
                <th>Descrição</th>
                <th>Empreendimentos</th>
                <th>Midias</th>
                <th>Status</th>
                <th>Abertura</th>
                <th>Previsão</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @foreach($chamados as $chamado)
                  <tr>
                    <td>{{ $chamado->id }}</td>
                    <td>{{ $chamado->cliente->nome ?? '-' }}</td>
                    <td>{{ $chamado->descricao }}</td>
                    <td>
                      @foreach($chamado->empreendimentos as $empreendimento)
                          <p>{{ $empreendimento->empreendimento->nome ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($chamado->midias as $midia)
                          {{ $midia->midia->nome ?? '-' }}
                      @endforeach
                    </td>
                    <td>
                      {{ $chamado->status->descricao }}
                    </td>
                    <td>
                      {{ $chamado->abertura_chamado ? $chamado->abertura_chamado->format('d/m/Y') : '-' }}
                    </td>
                    <td>
                      {{ $chamado->previsao_conclusao ? $chamado->previsao_conclusao->format('d/m/Y') : '-' }}
                    </td>
                    <td>
                      <a href="{{ url('/chamados/' . $chamado->id) }}" class="btn btn-primary btn-xs">Visualizar</a>
                    </td>
                  </tr>
              @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          {{ $chamados->links() }}
        </div>
      </div>
    </div>
  </div>

@stop
