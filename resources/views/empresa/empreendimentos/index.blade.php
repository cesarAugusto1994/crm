@extends('adminlte::page')

@section('title', 'Empreendimentos')

@section('content_header')
    <h1>Painel de Empreendimentos</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Empreendimentos</li>
    </ol>
@stop

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="box box-solid">

          <div class="box-header with-border">
            <h3 class="box-title">Filtros</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

          <form action="{{ route('empreendimentos.index') }}">
              <input type="hidden" class="form-control" id="buscar" value="1" name="buscar"/>
              <div class="box-body">
                <div class="row">

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="codigo">Codigo</label>
                      <input type="text" class="form-control" id="codigo" name="codigo" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="">
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
                      <label for="select-midias">Bairro</label>
                      <select style="width:150px" id="select-bairros" name="bairros" data-url="{{ route('bairros') }}" class="form-control"></select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Áreas</label>
                      <select style="width:150px" multiple id="select-areas-privativas" name="areas[]" data-url="{{ route('areas_privativas') }}" class="form-control"></select>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="select-midias">Dormitórios</label>
                      <input type="checkbox" id="" name="habilitar_dormitorios" value="1">
                      <select name="dormitorios" class="form-control">
                        @foreach(range(0, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="select-midias">Suites</label>
                      <input type="checkbox" id="" name="habilitar_suites" value="1">
                      <select name="suites" class="form-control">
                        @foreach(range(0, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="select-midias">Vagas</label>
                      <input type="checkbox" id="" name="habilitar_vagas" value="1">
                      <select name="vagas" class="form-control">
                        @foreach(range(0, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="select-midias">Área</label>
                      <input type="checkbox" id="" name="habilitar_areas" value="1"/>
                      <input type="text" class="form-control" id="area_min" name="area_min"/>
                      Até
                      <input type="text" class="form-control" id="area_max" name="area_max"/>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="select-midias">Cobertura</label>
                      <input type="checkbox" id="habilitar_cobertura" name="habilitar_cobertura" value="1"/>
                      <select name="cobertura" class="form-control">
                          <option value="1">Sim</option>
                          <option value="0" selected>Não</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label for="select-midias">Valor MT2</label>
                      <input type="checkbox" id="habilitar_valor_mt2" name="habilitar_valor_mt2" value="1"/>
                      <input type="text" class="form-control money" id="valor_min" name="valor_min"/>
                      Até
                      <input type="text" class="form-control money" id="valor_max" name="valor_max"/>
                    </div>
                  </div>

                </div>

              </div>
              <div class="box-footer clearfix">
              <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
          </form>

      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Lista Empreendimentos</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-striped table-hover">
            <thead>

              <tr>
                <th style="width: 10px"><input type="checkbox" name="empreendimentos[]" value="{{ $empreendimento['id'] }}"></th>
                <th>Código</th>
                <th>Titulo</th>
                <th>Localidade</th>
                <th>Referencia</th>
                <th>Incorporação</th>
                <th>Construtora</th>
                <th>Arquitetura</th>
                <th>Torres</th>
                <th>Unidades</th>
                <th>Elevadores</th>
                <th>Dormitórios</th>
                <th>Suites</th>
                <th>Vagas</th>
                <th>Area</th>
                <th>Estações</th>
                <th>Entrega</th>
                <th>Faixa Precço</th>
                <th>Faixa Precço</th>
                <th>Fase Obra</th>
                <th>Areas Comuns</th>
              </tr>

            </thead>
            <tbody>

              @forelse($empreendimentos as $empreendimento)
                  <tr>
                    <td><input type="checkbox" name="empreendimentos[]" value="{{ $empreendimento['id'] }}"></td>
                    <td>{{ $empreendimento['id'] }}</td>
                    <td>{{ $empreendimento['titulo'] }}</td>
                    <td>{{ $empreendimento['localidade'] }}</td>
                    <td>{{ $empreendimento['referencia'] }}</td>
                    <td>{{ $empreendimento['incorporacao'] }}</td>
                    <td>{{ $empreendimento['construcao'] }}</td>
                    <td>{{ $empreendimento['arquitetura'] }}</td>
                    <td>{{ $empreendimento['torres'] }}</td>
                    <td>{{ $empreendimento['unidades'] }}</td>
                    <td>{{ $empreendimento['elevadores'] }}</td>
                    <td>{{ $empreendimento['dormitorios'] }}</td>
                    <td>{{ $empreendimento['suites'] }}</td>
                    <td>{{ $empreendimento['vagas'] }}</td>
                    <td>{{ $empreendimento['areas'] }}</td>
                    <td>{{ $empreendimento['estacoes_proximas'] }}</td>
                    <td>{{ $empreendimento['previsao_entrega'] }}</td>
                    <td>{{ $empreendimento['faixa_preco_ini'] }}</td>
                    <td>{{ $empreendimento['faixa_preco_fim'] }}</td>
                    <td>{{ $empreendimento['fases_obra'] }}</td>
                    <td>
                      @php

                        $areas = [];

                        if(!empty($empreendimento['areas_comuns'])) {
                          $areas = explode(',' ,$empreendimento['areas_comuns']);
                        }

                      @endphp

                      @foreach($areas as $area)

                        - {{ $area }} <br/>

                      @endforeach
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="20">
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
          {{ $empreendimentos->links() }}
        </div>
      </div>
    </div>
  </div>

  <input type="hidden" id="url-empreendimentos" value="{{ route('empreendimento_ajax') }}">
  <input type="hidden" id="url-bairros" value="{{ route('bairros') }}">

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
