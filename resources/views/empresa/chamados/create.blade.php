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
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
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

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Ocorrência / Grupo / Tipo</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                <label>Ocorrência</label>
                <select id="manifestacao" name="manifestacao" required data-target="#grupo_manifestacao" data-url="{{ route('grupos') }}" class="form-control select2 select-ajax" style="width: 100%;">
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
                <select id="grupo_manifestacao" required data-target="#tipo_manifestacao" data-url="{{ route('tipos') }}" class="form-control select2 select-ajax" style="width: 100%;" name="grupo_manifestacao">
                  <option value="">Selecione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Tipo </label>
                <select class="form-control select2" required id="tipo_manifestacao" style="width: 100%;" name="tipo_manifestacao">
                  <option value="">Selecione</option>
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
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
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
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">

                  <div class="col-md-3">
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
                  <div class="col-md-3">
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
                      <select class="form-control select2 select-ajax" id="area"
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
                      <select class="form-control select2" style="width: 100%;" name="situacao">
                        @foreach($status as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
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
