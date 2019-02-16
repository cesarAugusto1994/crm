@extends('adminlte::page')

@section('title', 'Chamado')

@section('content_header')
    <h1>Chamado #{{ $chamado->id }}</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('chamados.index') }}"><i class="fa fa-newspaper-o"></i> Chamados</a></li>
      <li class="active">Detalhes</li>
    </ol>
@stop

@section('content')

  <div class="row">

      <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">{{ $chamado->cliente->nome ?? '' }}</h3>
              <p class="text-muted text-center">{{ $chamado->cliente->email->email ?? '' }}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Telefone</b> <a class="pull-right">
                    @if($chamado->cliente && $chamado->cliente->telefones->isNotEmpty())
                      {{ $chamado->cliente->telefones->first()->ddd }} - {{ $chamado->cliente->telefones->first()->telefone }}
                    @endif</a>
                </li>
                <li class="list-group-item">
                  <b>CPF</b> <a class="pull-right">{{ $chamado->cliente->cpf ?? '-' }}</a>
                </li>
              </ul>
              @if($chamado->cliente)
              <a href="{{ route('clientes.show', ['id' => $chamado->cliente->id]) }}" class="btn btn-primary btn-block"><b>Acessar</b></a>
              @endif
            </div>
          </div>
      </div>

      <div class="col-md-9">

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Informações do chamado</h3>

          </div>

          <form method="post" action="{{ route('chamados.update', ['id' => $chamado->id]) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <input type="hidden" name="id" value="{{ $chamado->id }}"/>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" data-default="{{ $chamado->classificacao }}" onload="carregarItens()" data-target="#previsao"
                        data-url="{{ route('previsao') }}" class="form-control select2 select-ajax" style="width: 100%;">
                        <option value="">Selecione</option>
                        @foreach($classificacao as $item)
                            <option value="{{ $item->id }}" {{ $chamado->categoria && $item->id == $chamado->categoria->id ? 'selected' : '' }}>{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Fase </label>
                      <select id="fase" class="form-control select2" style="width: 100%;"
                      name="fase_id">
                        @foreach($fases as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $chamado->fase_id ? 'selected' : '' }}>{{ $item->nome }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Previsão de conclusão </label>
                      <select id="previsao" class="form-control select2" style="width: 100%;"
                      name="previsao_conclusao" data-default="{{ $chamado->previsao_conclusao }}">
                        <option selected="selected"></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Área Resolvedora </label>
                      <select class="form-control select2 select-ajax" id="area" data-default="{{ $chamado->area_atendimento }}"
                      data-target="#resposanvel" data-url="{{ route('departamentos') }}" style="width: 100%;"
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
                      <select class="form-control select2" id="resposanvel" data-default="{{ $chamado->pessoa_responsavel }}"
                        style="width: 100%;" name="pessoa_responsavel" required>
                        <option value="">Selecione</option>
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
                      <label>Ultima Interação </label>
                        <input type="text" class="form-control datepicker" name="atendimento_chamado" value="{{ $chamado->updated_at ? $chamado->updated_at->format('d/m/Y') : '' }}"/>
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
                      <select class="form-control select2" style="width: 100%;" id="status" name="situacao"
                        data-default="{{ $chamado->situacao }}" onload="carregarItens()" data-target="#fase"
                        data-url="{{ route('fases') }}">
                        @foreach($status as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $chamado->situacao ? 'selected' : '' }}>{{ $item->descricao }}</option>
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

      <div class="col-md-8">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Empreendimentos</h3>

            <div class="box-body">

              <form name="form-emails" action="{{ route('chamados_empreendimento_store', ['id' => $chamado->id]) }}" method="post">
                  {{ csrf_field() }}
                  <label>
                      <select required style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="form-control"></select>
                  </label>
                  <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
              </form>

              <br/>

              @if($chamado->cliente)
                <div class="box-group" id="accordion">
                  @forelse($chamado->cliente->empreendimentos as $item)
                    @if(!$item->empreendimento)
                      @continue
                    @endif
                    <div class="panel box box-solid">
                    <div class="box-header with-border">
                      <h4 class="box-title">
                        <a data-toggle="collapse" data-referencia="{{ $item->empreendimento->referencia }}" data-parent="#accordion" href="#collapseOne-{{ $loop->index }}" aria-expanded="false" class="collapsed collapse-emprrendimentos">
                          #{{ $item->empreendimento->id }} - {{ $item->empreendimento->nome }}
                        </a>
                        <a href="{{ route('cliente_empreendimento_remove', $item->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
              @endif

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Midias</h3>

            <div class="box-body">

                <form name="form-emails" action="{{ route('chamados_midia_store', ['id' => $chamado->id]) }}" method="post">
                    {{ csrf_field() }}
                    <label>
                        <select required style="width:150px" id="select-midias" name="midia" data-url="{{ route('midias') }}" class="form-control"></select>
                    </label>
                    <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
                </form>

                <br/>

                @if($chamado->cliente)

                <div class="direct-chat-messages">

                <ul class="products-list product-list-in-box">
                  @forelse($chamado->cliente->midias->sortByDesc('id') as $item)
                    <li class="item">
                      <div class="product-info" style="margin-left:0">
                        <a class="product-title lead" class="lead">{{ $item->midia->nome }}</a>
                        <small class="product-description">Adicionado em: {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</small>
                      </div>
                      <a href="{{ route('cliente_midia_remove', $item->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </li>
                  @empty

                  @endforelse
                </ul>

                </div>

                @endif

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="box box-solid direct-chat direct-chat-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Descrição</h3>

            <div class="box-tools pull-right">
              <span data-toggle="tooltip" title="" class="badge bg-green" data-original-title="{{ $chamado->logs->count() }} novas mensagens">{{ $chamado->logs->count() }}</span>
            </div>
          </div>
          <div class="box-body">
            @if($chamado->logs->isNotEmpty())
            <div class="direct-chat-messages">
              @forelse($chamado->logs->sortByDesc('created_at') as $log)
              <div class="direct-chat-msg {{ $log->origem == 'usuario' ? 'right' : '' }}">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name {{ $log->origem == 'usuario' ? 'pull-right' : 'pull-left' }}">
                    @if($log->origem == 'cliente')
                        Cliente
                    @elseif($log->usuario && $log->usuario->id == \Auth::user()->id)
                        Você
                    @else
                        {{$log->usuario->name ?? 'Cliente'}}
                    @endif
                  </span>
                  <span class="direct-chat-timestamp {{ $log->origem == 'usuario' ? 'pull-left' : 'pull-right' }}">{{ $log->created_at ? $log->created_at->format('d/m/Y H:i') : '-' }}</span>
                </div>
                <img class="direct-chat-img" src="https://holder.js/32x32" alt="">
                <div class="direct-chat-text">

                  <p style="color:white">{!! $log->descricao !!}</p>

                  @if($log->logEmail)
                  <p>
                      <a class="btn btn-default btn-xs" href="{{ route('chamado_envio_email_log', ['chamado' => $chamado->id, 'id' => $log->logEmail->id]) }}">Acessar</a>
                  </p>
                  @endif
                </div>
              </div>
              @empty

              @endforelse
            </div>
            @endif
          </div>
          <div class="box-footer">
            <form action="{{ route('chamados_logs_store', ['id' => $chamado->id]) }}" method="post">
              {{csrf_field()}}
              <input id="chamado" name="chamado" type="hidden" value="{{ $chamado->id }}">
              <div class="input-group">
                <div class="input-group-btn dropup">

                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="btnRespostaEmail" data-id="1" data-toggle="modal" data-target="#modal-modelo-2">Modelo Resposta #1</a></li>
                    <li><a href="#" class="btnRespostaEmail" data-id="2" data-toggle="modal" data-target="#modal-modelo-2">Modelo Resposta #2</a></li>
                    <li><a href="#" class="btnRespostaEmail" data-id="3" data-toggle="modal" data-target="#modal-modelo-2">Modelo Resposta #3</a></li>
                    <li><a href="{{ route('modelos.index', ['chamado'=>$chamado->id]) }}" >Resposta por Novo Template</a></li>
                    <li><a href="{{ route('propagandas.index', ['chamado'=>$chamado->id]) }}">Resposta por Template Existente</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('email_create', ['id' => $chamado->id]) }}">Email em branco</a></li>
                  </ul>
                </div>
                <textarea type="text" name="descricao" rows="1" placeholder="Mensagem" required class="form-control"></textarea>
                  <span class="input-group-btn">
                    <label class="btn btn-default btn-flat">Cliente <input type="radio" name="side" value="cliente" /></label>
                    <label class="btn btn-primary btn-flat">Empresa <input type="radio" name="side" value="usuario" checked/></label>
                    <button type="submit" class="btn btn-success btn-flat">Enviar</button>
                  </span>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>

  <div class="modal fade" id="modal-modelo-2" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Selecione um Empreendimento</h4>
        </div>

        <form action="{{ route('chamado_envio_email_cliente', ['chamado' => $chamado->id]) }}" method="get">

          <input type="hidden" name="modelo" id="modelo" value=""/>

        <div class="modal-body">

          <div class="btn-group" data-toggle="buttons">

            @if($chamado->cliente)
            @foreach($chamado->cliente->empreendimentos as $item)
              @if(!$item->empreendimento)
                @continue
              @endif

            <label class="btn btn-default btn-flat">
              <input type="checkbox" name="empreendimentos[]" value="{{ $item->empreendimento->id }}" autocomplete="off"> {{ $item->empreendimento->nome }}
            </label>

            @endforeach
            @endif

          </div>

          <br/>
          <br/>

          <div class="alert alert-info">* Caso não selecione nenhum empreendimento, todos serão automaticamente selecionados.</div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Proximo</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <input type="hidden" id="url-empreendimentos" value="{{ route('empreendimento_ajax') }}">

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/10.1.0/classic/ckeditor.js"></script>

    <script>

        $(".btnRespostaEmail").click(function() {
          var self = $(this);
          var id = self.data('id');
          $("#modelo").val(id);
        });

    </script>

@stop
