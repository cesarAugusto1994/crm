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
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">{{ $chamado->cliente->nome }}</h3>
              <p class="text-muted text-center">{{ $chamado->cliente->email->email ?? '' }}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Telefone</b> <a class="pull-right">
                    @if($chamado->cliente->telefones->isNotEmpty())
                      {{ $chamado->cliente->telefones->first()->ddd }} - {{ $chamado->cliente->telefones->first()->telefone }}
                    @endif</a>
                </li>
                <li class="list-group-item">
                  <b>CPF</b> <a class="pull-right">{{ $chamado->cliente->cpf }}</a>
                </li>
              </ul>
              <a href="{{ route('clientes.show', ['id' => $chamado->cliente->id]) }}" class="btn btn-primary btn-block"><b>Acessar</b></a>
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

          <form method="post" action="{{ route('chamados.update', ['id' => $chamado->id]) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <input type="hidden" name="id" value="{{ $chamado->id }}"/>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" data-default="{{ $chamado->classificacao }}" onload="carregarItens()" data-target="#previsao" data-url="/chamado/previsoes/" class="form-control select2 select-ajax" style="width: 100%;">
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
                      <select id="previsao" class="form-control select2" style="width: 100%;" name="previsao_conclusao" data-default="{{ $chamado->previsao_conclusao }}">
                        <option selected="selected"></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Área Resolvedora </label>
                      <select class="form-control select2 select-ajax" id="area" data-default="{{ $chamado->area_atendimento }}"
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
                      <select class="form-control select2" id="resposanvel" data-default="{{ $chamado->pessoa_responsavel }}" style="width: 100%;" name="pessoa_responsavel" required>
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

      <div class="col-md-6">
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


                @endforelse
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
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
                    <li class="list-group-item"><p class="lead">{{ $item->midia->nome }}</p> <small class="">Adicionado em {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</small></li>
                  @empty

                  @endforelse
                </ul>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="box box-default direct-chat direct-chat-success">
          <div class="box-header with-border">
            <h3 class="box-title">Descrição</h3>

            <div class="box-tools pull-right">
              <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="{{ $chamado->logs->count() }} novas mensagens">{{ $chamado->logs->count() }}</span>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="direct-chat-messages">
              @forelse($chamado->logs as $log)
              <div class="direct-chat-msg {{ $log->usuario && $log->usuario->id == \Auth::user()->id ? 'right' : '' }}">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name {{ $log->usuario && $log->usuario->id == \Auth::user()->id ? 'pull-right' : 'pull-left' }}">{{ $log->usuario ? $log->usuario->id == \Auth::user()->id ? 'Você   ' : $log->usuario->name : 'Cliente' }}</span>
                  <span class="direct-chat-timestamp {{ $log->usuario && $log->usuario->id == \Auth::user()->id ? 'pull-left' : 'pull-right' }}">{{ $log->created_at ? $log->created_at->format('d/m/Y H:i') : '-' }}</span>
                </div>
                <img class="direct-chat-img" src="holder.js/32x32" alt="">
                <div class="direct-chat-text">
                  {{ $log->descricao }}
                </div>
              </div>
              @empty

              @endforelse
            </div>

          </div>
          <div class="box-footer">
            <form action="{{ route('chamados_logs_store', ['id' => $chamado->id]) }}" method="post">
              {{csrf_field()}}
              <div class="input-group">
                <div class="input-group-btn dropup">

                  <label class="btn btn-file btn-warning">
                      Anexar
                      <input type="file" name="anexo" />
                  </label>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Olá</a></li>
                    <li><a href="#">Seja Bem vindo</a></li>
                    <li><a href="#">Alguma resposta aqui</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Outra mensagem</a></li>
                  </ul>

                </div>
                <textarea type="text" name="descricao" rows="1" placeholder="Mensagem" required class="form-control"></textarea>
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning btn-flat">Enviar</button>
                  </span>
              </div>
            </form>
          </div>
        </div>
      </div>

  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
