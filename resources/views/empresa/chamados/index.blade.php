@extends('adminlte::page')

@section('title', 'Chamados')

@section('content_header')
    <h1>Painel de Chamados</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Chamados</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Cadastro de Chamados</h3>
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
                <a class="btn btn-success" href="{{ route('chamados.create') }}">Adicionar Chamado</a>
              </div>
            </div>
            </div>
          </div>

          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Cliente</th>
                <th>Empreendimentos</th>
                <th>Midias</th>
                <th>Status</th>
                <th>Abertura</th>
                <th>Previsão</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($chamados as $chamado)

                  <tr>
                    <td>{{ $chamado->id }}</td>
                    <td>{{ $chamado->cliente->nome ?? '-' }}</td>
                    <td>
                      @foreach($chamado->empreendimentos as $empreendimento)
                          <p>{{ $empreendimento->empreendimento->nome ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($chamado->midias as $midia)
                          {{ $midia->midia->nome ?? '-' }} <br/>
                      @endforeach
                    </td>
                    <td>
                      {{ $chamado->status->descricao ?? '' }}
                    </td>
                    <td>
                      {{ $chamado->abertura_chamado ? $chamado->abertura_chamado->format('d/m/Y') : '-' }}
                    </td>
                    <td>
                      {{ $chamado->previsao_conclusao ? $chamado->previsao_conclusao->format('d/m/Y') : '-' }}
                    </td>
                    <td>
                      <a href="{{ route('chamados.show', $chamado->id) }}" class="btn btn-primary"><i class="icon fa fa-eye"></i> </a>
                      <a data-route="{{ route('chamados.destroy', $chamado->id) }}" class="btn btn-danger btnRemoveItem"><i class="icon fa fa-trash"></i> </a>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="9">
                      <div class="callout callout-info">
                        <h4><i class="icon fa fa-info"></i> Ops...</h4>
                        <p>Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
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
