@extends('adminlte::page')

@section('title', 'Chamado')

@section('content_header')
    <h1>Chamado #{{ $chamado->id }}</h1>
@stop

@section('content')

  <div class="row">

      <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">{{ $chamado->cliente->nome }}</h3>
              <p class="text-muted text-center">{{ $chamado->cliente->email->email }}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Telefone</b> <a class="pull-right">{{ $chamado->cliente->telefones->first()->ddd }} - {{ $chamado->cliente->telefones->first()->telefone }}</a>
                </li>
                <li class="list-group-item">
                  <b>CPF</b> <a class="pull-right">{{ $chamado->cliente->cpf }}</a>
                </li>
              </ul>
              <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
            </div>
          </div>
      </div>

      <div class="col-md-9">

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Informações do chamado</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>

          <form method="post" action="{{ url('/chamados') }}">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $chamado->id }}"/>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" onload="carregarItens()" data-target="#previsao" data-url="/chamado/previsoes/" class="form-control select2 select-ajax" style="width: 100%;">
                        <option value="">Selecione</option>
                        @foreach($classificacao as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $chamado->categoria->id ? 'selected' : '' }}>{{ $item->descricao }}</option>
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
                      data-target="#resposanvel" data-url="/chamado/departamento/" style="width: 100%;"
                      name="area_atendimento"
                      >
                        <option value="">Selecione</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" {{ $departamento->id == $chamado->area_atendimento ? 'selected' : '' }}>{{ $departamento->descricao }}</option>
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
                        <input type="text" readonly class="form-control" name="abertura_chamado" value="{{ $chamado->abertura_chamado->format('d/m/Y') }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Atendimento </label>
                        <input type="text" class="form-control datepicker" name="atendimento_chamado" value="{{ $chamado->atendimento_chamado ? $chamado->atendimento_chamado->format('d/m/Y') : '' }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Conclusão </label>
                        <input type="text" class="form-control datepicker" name="conclusao_chamado" value="{{ $chamado->conclusao_chamado ? $chamado->conclusao_chamado->format('d/m/Y') : '' }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status do chamado </label>
                      <select class="form-control select2" style="width: 100%;" name="situacao">
                        @foreach($status as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $chamado->situacao ? 'selected' : '' }}>{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Conclusão </label>
                      <textarea name="conclusao" class="form-control">{{ $chamado->conclusao }}</textarea>
                    </div>
                  </div>

                </div>
              </div>

              <div class="box-footer">
                  <button type="submit" class="btn btn-success">Salvar</button>
              </div>

          </form>

        </div>

      </div>

      <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Empreendimentos</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <div class="box-body">

              <form name="form-emails" action="{{ route('chamados_empreendimento_store', ['id' => $chamado->id]) }}" method="post">
                  {{ csrf_field() }}
                  <label>
                      <select required style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="form-control"></select>
                  </label>
                  <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
              </form>

              <br/>

              <div class="box-group" id="accordion">
                @forelse($chamado->empreendimentos as $item)
                  @if(!$item->empreendimento)
                    @continue
                  @endif
                  <div class="panel box">
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

                <div class="callout callout-info">
                  <h4><i class="icon fa fa-info"></i> Ops...</h4>
                  <p>Nenhum registro encontrado.</p>
                </div>

                @endforelse
              </div>

            </div>
          </div>
        </div>
      </div>

  </div>


  <div class="row">

    <div class="col-md-6">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Midias</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <div class="box-body">

              <form name="form-emails" action="{{ route('chamados_midia_store', ['id' => $chamado->id]) }}" method="post">
                  {{ csrf_field() }}
                  <label>
                      <select required style="width:150px" id="select-midias" name="midia" data-url="{{ route('midias') }}" class="form-control"></select>
                  </label>
                  <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
              </form>

              <br/>

              <ul class="list-group">
                @forelse($chamado->midias as $item)
                  <li class="list-group-item">{{ $item->midia->nome }} <span class="pull-right">{{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</span></li>
                @empty
                  <div class="callout callout-info">
                    <h4><i class="icon fa fa-info"></i> Ops...</h4>
                    <p>Nenhum registro encontrado.</p>
                  </div>
                @endforelse
              </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Logs</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <div class="box-body">

              <form class="form-horizontal" name="form-emails" action="{{ route('chamados_logs_store', ['id' => $chamado->id]) }}" method="post">
                  {{ csrf_field() }}


                  <div class="form-group">
                    <label for="descricao-chamado" class="col-sm-2 control-label">Adicionar Anotação</label>
                    <div class="col-sm-10">
                      <textarea rows="5" required id="descricao-chamado" name="descricao" class="form-control"></textarea>
                    </div>
                  </div>

                  <button class="btn btn-instagram btn-sm " title="Acidionar">Adicionar</button>

                  <hr/>

              </form>

              <br/>

              <ul class="list-group">
                  @forelse($chamado->logs->sortByDesc('id') as $log)
                    <li class="list-group-item">{{ $log->descricao }} <small class="pull-right badge bg-blue">{{ $log->created_at ? $log->created_at->format('d/m/Y H:i') : '-' }}</small></li>
                  @empty
                    <div class="callout callout-info">
                      <h4><i class="icon fa fa-info"></i> Ops...</h4>
                      <p>Nenhum registro encontrado.</p>
                    </div>
                  @endforelse
              </ul>

          </div>
        </div>
      </div>
    </div>

  </div>

@stop

@section('js')
    <script>

      function getAjax(self) {
        var valor = self.val();
        var url = self.data('url') + valor;
        var target = self.data('target');

        $.ajax(
          {
            url: url,
            dataType: 'json'
          }
        ).done(function(data) {

          var option = "";

          $.each(data, function(i, item) {
              option += "<option value'"+ item.id +"'>"+ item.nome +" </option>";
          });

          $(target).html(option);

        });
      }

      $( document ).ready(function(){
          carregarItens();

          $('#select-empreendimento').select2({
              ajax: {
                type: "GET",
                url: $('#select-empreendimento').data('url'),
                data: function (params) {
                  var query = {
                    search: params.term,
                    type: 'public'
                  }

                  // Query parameters will be ?search=[term]&type=public
                  return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(JSON.parse(data), function (item) {
                            return {
                                text: item.nome,
                                id: item.id
                            }
                        })
                    };
                }
              },
              placeholder: 'Selecione um Empreendimento',
              minimumInputLength: 1,
              width: '100%'
          });

          $('#select-midias').select2({
              ajax: {
                type: "GET",
                url: $('#select-midias').data('url'),
                data: function (params) {
                  var query = {
                    search: params.term,
                    type: 'public'
                  }

                  // Query parameters will be ?search=[term]&type=public
                  return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(JSON.parse(data), function (item) {
                            return {
                                text: item.nome,
                                id: item.id
                            }
                        })
                    };
                }
              },
              placeholder: 'Selecione uma midia',
              minimumInputLength: 1,
              width: '100%'
          });
      });

      function carregarItens()
      {
          var elementos = $('.select-ajax');

          $(elementos).each(function(i, elemento) {

            var self = $(elemento);
            getAjax(self);

          });
      }

      $('.select-ajax').change(function() {
          var self = $(this);
          getAjax(self);
      });

      $('.collapse-emprrendimentos').click(function() {
          var self = $(this);

          var referencia = self.data('referencia');
          var url = 'http://www.seabra.com.br/ajax/imoveis/getEmpreendimentoAjax?referencia='+referencia;
          var target = self.attr('href');

          $.ajax(
            {
              url: url,
              dataType: 'json'
            }
          ).done(function(data) {

            var html = '<div class="row">' +
                '<div class="col-md-4">' +

                    '<ul class="list-group">' +
                        '<li class="list-group-item"><b>Referencia:</b> <br/>'+data.referencia+'</li>' +
                        '<li class="list-group-item"><b>Endereco:</b> <br/>'+ data.extras[0].endereco +'</li>' +
                        '<li class="list-group-item"><b>Dormitorios:</b> <br/>'+data.tipologia.dorms+'</li>' +
                        '<li class="list-group-item"><b>Suites:</b> <br/>'+data.tipologia.suites+'</li>' +
                        '<li class="list-group-item"><b>Vagas:</b> <br/>'+data.tipologia.vagas+'</li>' +
                        '<li class="list-group-item"><b>Area:</b> <br/>'+data.tipologia.area+'</li>' +
                    '</ul>' +

                '</div>' +

                '<div class="col-md-4">' +

                    '<ul class="list-group">' +
                        '<li class="list-group-item"><b>Incorporação:</b> <br/>'+data.incorporacao+'</li>' +
                        '<li class="list-group-item"><b>Arquitetura:</b> <br/>'+data.arquitetura+'</li>' +
                        '<li class="list-group-item"><b>Construção:</b> <br/>'+data.construcao+'</li>' +
                        '<li class="list-group-item"><b>No de torres:</b> <br/>'+data.qtdtorres+'</li>' +
                        '<li class="list-group-item"><b>No de unidades:</b> <br/>'+data.qtdunidades+'</li>' +
                    '</ul>' +

                '</div>' +

                '<div class="col-md-4">' +

                    '<ul class="list-group">' +
                        '<li class="list-group-item"><b>Ponto de referencia:</b> <br/>'+ data.estproximas +'</li>' +
                        '<li class="list-group-item"><b>Estagio da obra:</b> <br/>'+ data.fasesobra +'</li>' +
                        '<li class="list-group-item"><b>Valor metro quadrado:</b> <br/>'+data.tipologia.quadrado+'</li>' +
                        '<li class="list-group-item"><b>Link do site:</b> <br/><a target="_blank" class="btn btn-instagram btn-xs" href="http://www.seabra.com.br/'+ data.extras[0].link +'">Acessar</a></li>' +
                    '</ul>' +

                '</div>' +


            '</div>';



            $(target).find('.box-body').html(html);


          });
      });




      </script>

@stop
