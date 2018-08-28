@extends('adminlte::page')

@section('title', 'CRM')

@section('content_header')
    <h1>Painel Principal</h1>
@stop

@section('content')

@if(!\Auth::user()->isAdmin())
<div class="row">

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ \App\Models\Chamados::where('id_empresa', \Auth::user()->id)->count() }}</h3>
          <p>Chamados</p>
        </div>
        <div class="icon">
          <i class="ion ion-alert"></i>
        </div>
        <a href="{{ route('chamados.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $porcentagemTarefas }}<sup style="font-size: 20px">%</sup></h3>
          <p>Chamados Finalizados</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ \App\Models\Clientes::where('id_empresa', \Auth::user()->id)->count() }}</h3>
          <p>Clientes</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('clientes.index') }}" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $chamadosAtrasados }}</h3>
          <p>Chamados Em Atraso</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

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
