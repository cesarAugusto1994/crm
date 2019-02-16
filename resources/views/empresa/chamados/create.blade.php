@extends('adminlte::page')

@section('title', 'Chamado')

@section('content_header')
    <h1>Novo Chamado</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('chamados.index') }}"><i class="fa fa-newspaper-o"></i> Chamados</a></li>
      <li class="active">Novo Chamado</li>
    </ol>
@stop

@section('content')

<form method="post" action="{{ route('chamados.update', ['id' => $chamado->id]) }}">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Informações do Cliente</h3>
          </div>
          <div class="box-body">
            <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label>Cliente</label>
                    @if($cliente)
                      <p class="lead">{{ $cliente->nome }}</p>
                      <input type="hidden" name="id_cliente" value="{{ $cliente->id }}"/>
                    @else
                      <select required style="width:150px" id="select-cliente" name="id_cliente" data-url="{{ route('clientes') }}" class="form-control"></select>
                    @endif
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="select-empreendimento">Empreendimento</label>
                  <select style="width:150px" multiple id="select-empreendimento" name="empreendimento[]" data-url="{{ route('empreendimentos') }}" class="select2"></select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="select-midias">Midia</label>
                  <select style="width:150px" multiple id="select-midias" name="midia[]" data-url="{{ route('midias') }}" class="form-control"></select>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>
  </div>

  @if($cliente)

  <div class="row">

    <div class="col-md-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Empreendimentos</h3>
          <div class="box-body">

            <div class="box-group" id="accordion">
              @forelse($cliente->empreendimentos->sortByDesc('id') as $item)
                @if(!$item->empreendimento)
                  @continue
                @endif
                <div class="panel box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-referencia="{{ $item->empreendimento->referencia }}" data-parent="#accordion" href="#collapseOne-{{ $loop->index }}" aria-expanded="false" class="collapsed collapse-emprrendimentos">
                      #{{ $item->empreendimento->id }} - {{ $item->empreendimento->nome }}
                    </a>
                  </h4>
                </div>
                <div id="collapseOne-{{ $loop->index }}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                  <div class="box-body"></div>
                  <div class="box-footer">
                      <span class="">Adicionado em: {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</span>
                  </div>
                </div>
              </div>
              @empty

              @endforelse
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Midias</h3>
          <div class="box-body">

              <ul class="products-list product-list-in-box">
                @forelse($cliente->midias->sortByDesc('id') as $item)
                  <li class="item">
                    <div class="product-info" style="margin-left:0">
                      <a class="product-title lead" class="lead">{{ $item->midia->nome }}</a>
                      <small class="product-description">Adicionado em: {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</small>
                    </div>
                  </li>
                @empty

                @endforelse
              </ul>

          </div>
        </div>
      </div>
    </div>

  </div>

  @endif

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Ocorrência / Grupo / Tipo</h3>
        </div>
        <div class="box-body">
          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                <label>Ocorrência</label>
                <select id="manifestacao" name="manifestacao" required class="form-control" style="width: 100%;">
                  <option value="">Selecione</option>
                  @foreach($manifestacoes as $item)
                      <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Grupo </label>
                <select id="grupo_manifestacao" required class="form-control" style="width: 100%;" name="grupo_manifestacao">
                  <option value="">Selecione</option>
                  @foreach($grupos as $item)
                      <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Tipo </label>
                <select class="form-control" required id="tipo_manifestacao" style="width: 100%;" name="tipo_manifestacao">
                  <option value="">Selecione</option>
                  @foreach($tipos as $item)
                      <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                  @endforeach
                </select>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Descricão e anotações</h3>

        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Descricão do Chamado </label>
                <textarea class="form-control" name="descricao" required></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Informações do chamado</h3>

          </div>
          <div class="box-body">
            <div class="row">

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" onload="carregarItens()" data-target="#previsao" data-url="{{ route('previsao') }}" class="form-control select2 select-ajax" style="width: 100%;">
                        <option value="">Selecione</option>
                        @foreach($classificacao as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Fase </label>
                      <select id="" class="form-control" style="width: 100%;"
                      name="fase_id">
                      <option value="">Selecione</option>
                        @foreach($fases as $item)
                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Previsão de conclusão </label>
                      <select id="previsao" class="form-control select2" style="width: 100%;" name="previsao_conclusao">
                        <option selected="selected"></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Área Resolvedora </label>
                      <select class="form-control select2 select-ajax" id="area"29980000
                      data-target="#resposanvel" data-url="{{ route('departamentos') }}" style="width: 100%;"
                      name="area_atendimento" required
                      >
                        <option value="">Selecione</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Pessoa Responsável </label>
                      <select class="form-control select2" id="resposanvel" style="width: 100%;" name="pessoa_responsavel">
                        <option value="" selected="selected">Selecione</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Abertura </label>
                        <input type="text" readonly class="form-control" name="abertura_chamado" value="{{ (new \DateTime('now'))->format('d/m/Y') }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Atendimento </label>
                        <input type="text" class="form-control datepicker" name="atendimento_chamado"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Conclusão </label>
                        <input type="text" class="form-control datepicker" name="conclusao_chamado"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status do chamado </label>
                      <select class="form-control select2  select-ajax" data-target="#fase" data-url="{{ route('fases') }}" style="width: 100%;" name="situacao">
                        @foreach($status as $item)
                            <option value="{{ $item->id }}" {{ $item->id==1?'selected':'' }}>{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Temperatura </label>
                      <select class="form-control select2" style="width: 100%;" name="temperatura">

                            <option value="frio" {{ 'frio' == $chamado->temperatura ? 'selected' : '' }}>Frio</option>
                            <option value="morno" {{ 'morno' == $chamado->temperatura ? 'selected' : '' }}>Morno</option>
                            <option value="quente" {{ 'quente' == $chamado->temperatura ? 'selected' : '' }}>Quente</option>

                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Conclusão </label>
                      <textarea name="conclusao" class="form-control"></textarea>
                    </div>
                  </div>

                </div>
          </div>
        </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-body">

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('chamados.index') }}" type="submit" class="btn btn-danger">Voltar</a>

        </div>
      </div>
    </div>
  </div>

</form>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
