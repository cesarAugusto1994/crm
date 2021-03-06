@extends('adminlte::page')

@section('title', 'Painel Principal')

@section('content_header')
    <h1>Painel Principal</h1>
@stop

@section('css')

  <style>
      .widget-user .widget-user-header {
        height: auto!important;
      }
  </style>

@stop

@section('content')

@if(!\Auth::user()->isAdmin())
<div class="row">

    <div class="col-md-8">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-aqua-active">
          <h3 class="widget-user-username">Chamados</h3>
        </div>
        <div class="box-footer">
          <div class="row">

            <div class="col-sm-3 border-right">
              <a href="{{ route('chamados.index') }}">
                <div class="description-block">
                  <h5 class="description-header">{{ $chamadosTotal }}</h5>
                  <span class="description-text">Total</span>
                </div>
              </a>
            </div>

            <div class="col-sm-3 border-right">
              <a href="{{ route('chamados.index', ['situacao' => 1]) }}" class="small-box-footer">
              <div class="description-block">
                <h5 class="description-header">{{ $chamadosAberto }}</h5>
                <span class="description-text">Em Aberto</span>
              </div>
              </a>
            </div>

            <div class="col-sm-3 border-right">
              <a href="{{ route('chamados.index', ['situacao' => 2]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $chamadosAndamento }}</h5>
                  <span class="description-text">Em Andamento</span>
                </div>
              </a>
            </div>

            <div class="col-sm-3">
              <a href="{{ route('chamados.index', ['situacao' => 3]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $chamadosFinalizados }}</h5>
                  <span class="description-text">Finalizados</span>
                </div>
              </a>
            </div>

            <div class="col-sm-2 border-right">
              <a href="{{ route('chamados.index', ['atraso' => 1]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $chamadosAtrasados }}</h5>
                  <span class="description-text">Em Atraso</span>
                </div>
              </a>
            </div>

            <div class="col-sm-2 border-right">
              <a href="{{ route('chamados.index', ['temperatura' => 'frio']) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $temperaturaFrio }}</h5>
                  <span class="description-text">Frio</span>
                </div>
              </a>
            </div>

            <div class="col-sm-2 border-right">
              <a href="{{ route('chamados.index', ['temperatura' => 'morno']) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $temperaturaMorno }}</h5>
                  <span class="description-text">Morno</span>
                </div>
              </a>
            </div>

            <div class="col-sm-2 border-right">
              <a href="{{ route('chamados.index', ['temperatura' => 'quente']) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $temperaturaQuente }}</h5>
                  <span class="description-text">Quente</span>
                </div>
              </a>
            </div>

            <div class="col-sm-2">
              <a href="{{ route('chamados.index', ['buscar' => 1, 'situacao' => '4']) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $chamadosMailling }}</h5>
                  <span class="description-text">Mailling</span>
                </div>
              </a>
            </div>

            <div class="col-sm-2">
              <a href="{{ route('chats.index') }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $quantidadeChat }}</h5>
                  <span class="description-text">Chat</span>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-red-active">
          <h3 class="widget-user-username">Clientes</h3>
        </div>
        <div class="box-footer">
          <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 border-right">
              <a href="{{ route('clientes.index', ['buscar' => 1]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $clientes }}</h5>
                  <span class="description-text">Total</span>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 border-right">
              <a href="{{ route('clientes.index', ['buscar' => 1, 'chamados_ativos' => 1]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $clientesAtivos }}</h5>
                  <span class="description-text">Ativos</span>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 border-right">
              <a href="{{ route('clientes.index', ['buscar' => 1, 'chamados_finalizados' => 1]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $clientesAtedimentosFinalizados }}</h5>
                  <span class="description-text">Chamados Finalizados</span>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
              <a href="{{ route('clientes.index', ['buscar' => 1, 'sem_chamados' => 1]) }}" class="small-box-footer">
                <div class="description-block">
                  <h5 class="description-header">{{ $clientesSemchamados }}</h5>
                  <span class="description-text">Sem Chamados</span>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!--

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $chamadosTotal }}</h3>
          <p>Chamados</p>
        </div>
        <div class="icon">
          <i class="ion ion-alert"></i>
        </div>
        <a href="{{ route('chamados.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $chamadosAndamento }}<sup style="font-size: 20px"></sup></h3>
          <p>Chamados Em Andamento</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ route('chamados.index', ['situacao' => 2]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $chamadosFinalizados }}</h3>
          <p>Chamados Finalizados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('chamados.index', ['situacao' => 3]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $chamadosAtrasados }}</h3>
          <p>Chamados Em Atraso</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('chamados.index', ['atraso' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $chamadosAberto }}</h3>
          <p>Chamados Em Aberto</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('chamados.index', ['situacao' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $temperaturaFrio }}</h3>
          <p>Chamados Frios</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('chamados.index', ['situacao' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $temperaturaMorno }}</h3>
          <p>Chamados Morno</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('chamados.index', ['situacao' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $temperaturaQuente }}</h3>
          <p>Chamados Quentes</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('chamados.index', ['situacao' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>{{ $clientes }}</h3>
          <p>Clientes</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('clientes.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $clientesAtivos }}</h3>
          <p>Clientes Chamados Ativos</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('clientes.index', ['chamados_ativos' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $clientesAtedimentosFinalizados }}</h3>
          <p>Clientes Chamados Finalizados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('clientes.index', ['chamados_finalizados' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $clientesSemchamados }}</h3>
          <p>Clientes Sem Chamados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('clientes.index', ['sem_chamados' => 1]) }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    -->

  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Relatório de Chamados</h3>
        </div>
        <div class="box-body">
            <div class="flot-chart dashboard-chart" id="flot-chart-chamados" style="height:250px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Agenda</h3>
        </div>
        <div class="box-body">
            <div class="calendar"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal inmodal" id="cadastra-agenda-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
          <div class="modal-content animated fadeIn">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                  <h4 class="modal-title">Agenda</h4>
              </div>

              <form id="formAgendaModal" method="POST" action="{{ route('agenda.store') }}">
              <div class="modal-body">

                    {{  csrf_field() }}
                    <div class="row">

                      <div class="col-md-12">
                          <div class="form-group ">
                              <label>Data e Hora</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                  <input type="text" id="agenda-data" name="data_hora" required readonly class="form-control datetimepicker"/>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="form-group ">
                              <label>Local</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                  <input type="text" id="agenda-local" name="local" class="form-control"/>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Área</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                                  <select class="form-control select2 select-ajax" id="agenda-area" data-target="#agenda-resposanvel"
                                  data-url="{{ route('responsaveis') }}" name="area_id">
                                    <option value="">Selecione</option>
                                    @foreach($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->descricao }}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Responsável</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                  <select class="form-control" required
                                  name="user_id" id="agenda-resposanvel">
                                  <option value="">Selecione</option>
                                  </select>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Descrição</label>
                              <div class="input-group col-md-12 col-xs-12 col-sm-12">
                                  <textarea required class="form-control" rows="6" id="agenda-notas" name="descricao"></textarea>
                              </div>
                          </div>
                      </div>

                    </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                  <button type="submit" id="btnConsulta" class="btn btn-primary">Agendar Compromisso</button>
              </div>
              </form>
          </div>
      </div>
  </div>

  <input type="hidden" id="url-chamados-graph" value="{{route('chamados_graph')}}"/>
  <input type="hidden" id="agenda-json" value="{{route('compromissos_agenda')}}"/>
@else
<div class="row">

    <div class="col-lg-6 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ \App\Models\Empresa::count() }}</h3>
          <p>Empresas</p>
        </div>
        <div class="icon">
          <i class="ion ion-alert"></i>
        </div>
        <a href="{{ route('empresas.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-6 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ \App\User::where('empresa_id', \Auth::user()->id)->count() }}</h3>
          <p>Usuários</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('usuarios.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Empresas</h3>
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
                <a class="btn btn-success btn-sm" href="{{ route('empresas.create') }}">Adicionar Empresa</a>
              </div>
            </div>
            </div>
          </div>


          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Status</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($empresas as $empresa)
                  <tr>
                    <td>{{ $empresa->id }}</td>
                    <td>{{ $empresa->nome ?? '-' }}</td>
                    <td>
                      @if($empresa->status)
                          <span class="badge bg-teal">Ativo</span>
                      @else
                          <span class="badge bg-red">Inativo</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('empresas.edit', ['id' => $empresa->id]) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
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
          {{ $empresas->links() }}
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Usuários</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

          <div class="row">
            <div class="col-md-12">
            <div class="box box-solid">
              <div class="box-body">
                <a class="btn btn-success btn-sm" href="{{ route('usuarios.create') }}">Adicionar Empresa</a>
              </div>
            </div>
            </div>
          </div>

          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Empresa</th>
                <th>Área</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Email</th>
                <th>Nivel</th>
                <th>Status</th>
                <th>Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->empresa->nome}}</td>
                    <td>{{ $user->departamento->descricao}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->login}}</td>
                    <td>{{ $user->email}}</td>

                    <td>{{ $user->nivel}}</td>
                    <td>
                      @if($user->ativo)
                          <span class="badge bg-teal">Ativo</span>
                      @else
                          <span class="badge bg-red">Inativo</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('usuarios.edit', ['id' => $user->id]) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('editar_senha', ['id' => $user->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
          {{ $users->links() }}
        </div>
      </div>
    </div>

  </div>

  <input type="hidden" id="url-chamados-graph" value="{{route('chamados_graph')}}"/>
  <input type="hidden" id="agenda-json" value="{{route('compromissos_agenda')}}"/>
@endif

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>

    $.get($("#url-chamados-graph").val(), function(data) {

        data = JSON.parse(data);

        if(false != data) {

          var result = [];

          $.each(data['body'], function(i, item) {

              result.push([gd(item.Y, item.m, item.d), item.quantidade]);

          });

          var barOptions = {
              series: {
                  lines: {
                      show: true,
                      lineWidth: 2,
                      fill: true,
                      fillColor: {
                          colors: [{
                              opacity: 0.0
                          }, {
                              opacity: 0.0
                          }]
                      }
                  }
              },
              yaxis: {
                  color: "black",
                  tickDecimals: 2,
                  axisLabel: "Medidas",
                  axisLabelUseCanvas: true,
                  axisLabelFontSizePixels: 12,
                  axisLabelFontFamily: 'Verdana, Arial',
                  axisLabelPadding: 5
              },
              xaxis: {
                     mode: "time",timeformat: "%d/%m",
                     min: gd(data['meta']['inicio']['Y'], data['meta']['inicio']['m'], data['meta']['inicio']['d']),
                     max: gd(data['meta']['fim']['Y'], data['meta']['fim']['m'], data['meta']['fim']['d'])
              },

              colors: ["#1ab394"],
              grid: {
                  color: "#999999",
                  hoverable: true,
                  clickable: true,
                  tickColor: "#D4D4D4",
                  borderWidth:0,
                  mouseActiveRadius: 50
              },
              legend: {
                  show: true
              },
              tooltip: true,
              tooltipOpts: {
                  content: "Data: %x, Valor: %y"
              }
          };
          var barData = {
              label: "Chamados",
              data: result
          };

          $.plot($("#flot-chart-chamados"), [barData], barOptions);

        }
    });

    </script>

@stop
