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
            <h3 class="box-title">Filtros</h3>
          </div>

          <form action="{{ route('chamados.index') }}">
              <div class="box-body">
                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="codigo">Codigo</label>
                      <input type="text" class="form-control" id="codigo" name="id">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Cliente</label>
                      <select style="width:150px" id="select-cliente" name="cliente" data-url="{{ route('clientes') }}" class="form-control"></select>
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

                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Pessoa Responsável </label>
                      <select class="form-control select2" id="resposanvel" style="width: 100%;" name="pessoa_responsavel">
                        <option value="">Selecione</option>
                        @foreach($responsaveis as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" onload="carregarItens()" data-target="#previsao"
                        data-url="{{ route('previsao') }}" class="form-control select2 select-ajax" style="width: 100%;">
                        <option value="">Selecione</option>
                        @foreach($classificacao as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Fase </label>
                      <select id="fase" class="form-control select2" style="width: 100%;"
                      name="fase_id">
                        <option value="">Selecione</option>
                        @foreach($fases as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status do chamado </label>
                      <select class="form-control select2" style="width: 100%;" name="situacao">
                        <option value="">Selecione</option>
                        @foreach($status as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Temperatura </label>
                      <select class="form-control select2" style="width: 100%;" name="temperatura">
                        <option value="">Selecione</option>
                        <option value="frio">Frio</option>
                        <option value="morno">Morno</option>
                        <option value="quente">Quente</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Abertura </label>
                        <input type="text" class="form-control date" name="abertura_chamado"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Atendimento </label>
                        <input type="text" class="form-control date" name="atendimento_chamado"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Conclusão </label>
                        <input type="text" class="form-control date" name="conclusao_chamado"/>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="codigo">Periodo</label>
                      <div id="sandbox-container">
                        <div class="input-daterange input-group" id="datepicker">
                          <input type="text" class="form-control input-daterange date" name="start" />
                          <span class="input-group-addon">até</span>
                          <input type="text" class="form-control input-daterange date" name="end" />
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="box-footer clearfix">
              <button type="submit" class="btn btn-warning">Buscar</button>
          </div>
          </form>

      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Opções</h3>
        </div>
        <div class="box-body">
          <a class="btn btn-success" href="{{ route('chamados.create') }}">Novo Chamado</a>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Chamados</h3>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-condensed">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Cliente</th>
                <th>Empreendimentos</th>
                <th>Midias</th>
                <th>Status</th>
                <th>Abertura</th>
                <th>Previsão</th>
                <th style="width: 110px">Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($chamados as $chamado)

                  <tr>
                    <td>{{ $chamado->id }}</td>
                    <td>{{ $chamado->cliente->nome ?? '-' }}</td>
                    <td>
                      @if($chamado->cliente)
                        @foreach($chamado->cliente->empreendimentos as $empreendimento)
                            <p>{{ $empreendimento->empreendimento->nome ?? '-' }}</p>
                        @endforeach
                      @endif
                    </td>
                    <td>
                      @if($chamado->cliente)
                        @foreach($chamado->cliente->midias as $midia)
                            {{ $midia->midia->nome ?? '-' }} <br/>
                        @endforeach
                      @endif
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
                      <a href="{{ route('chamados.show', $chamado->id) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i> </a>
                      <a data-route="{{ route('chamados.destroy', $chamado->id) }}" class="btn btn-sm btn-danger btnRemoveItem"><i class="icon fa fa-trash"></i> </a>
                    </td>
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
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          {{ $chamados->links() }}
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $('.date').mask('00/00/0000');
    </script>
@stop
