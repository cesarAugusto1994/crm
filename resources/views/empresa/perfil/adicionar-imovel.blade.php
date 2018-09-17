@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <h1>Painel de Perfis</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Perfis</li>
    </ol>
@stop

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Perfil</h3>
        </div>
        <div class="box-body">
          <p class="lead">{{ $perfil->nome }}</p>

          <a href="{{ route('perfis.edit', $perfil->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> IEditar</a>
          <a href="{{ route('perfis.show', $perfil->id) }}" class="btn btn-info"><i class="fa fa-home"></i> Imóveis</a>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">

          <div class="box-header with-border">
            <h3 class="box-title">Filtros</h3>
          </div>

          <form action="{{ route('adicionar_imoveis', $perfil->id) }}">
              <input type="hidden" class="form-control" id="buscar" value="1" name="buscar"/>
              <div class="box-body">
                <div class="row">

                  <div class="col-md-2">
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

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="select-empreendimento">Empreendimento</label>
                      <select style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="select2"></select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-midias">Estágio</label>
                      <select name="estagio" class="form-control">
                        <option value=""></option>
                        <option value="3">Lancamento</option>
                        <option value="2">Em construção</option>
                        <option value="1">Pronto para morar</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Tipo Imóvel</label>
                      <select id="select-zonas" name="zona" class="form-control">
                        <option value=""></option>
                        <option value="1">Apartamento</option>
                        <option value="2">Casa</option>
                        <option value="3">Cobertura</option>
                        <option value="4">Conjunto Comercial</option>
                        <option value="5">Duplex</option>

                        <option value="6">Flat</option>
                        <option value="7">Loja</option>
                        <option value="8">Ponto Comercial</option>
                        <option value="9">Terreno/Loteamento</option>
                        <option value="10">Vaga de Garagem</option>
                        <option value="11">Rural</option>

                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-midias">Cidade</label>
                      <select style="width:150px" id="select-cidade" name="cidade" data-url="{{ route('cidades') }}" class="form-control"></select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="select-midias">Bairro</label>
                      <select style="width:150px" id="select-bairros" name="bairros" data-url="{{ route('bairros') }}" class="form-control"></select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-midias">Zona</label>
                      <select id="select-zonas" name="zona" class="form-control">
                        <option value=""></option>
                        <option value="1">Centro</option>
                        <option value="2">Leste</option>
                        <option value="3">Norte</option>
                        <option value="4">Oeste</option>
                        <option value="5">Sul</option>
                      </select>
                    </div>
                  </div>

                </div>


                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Dorms</label>
                      <input type="checkbox" id="habilitar_dormitorios" class="enabler" name="habilitar_dormitorios" value="1">
                      <select name="dormitorios_min" class="form-control disabled" data-target-element="habilitar_dormitorios">
                        <option value=""></option>
                        @foreach(range(1, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>

                      <select name="dormitorios_max" class="form-control disabled" data-target-element="habilitar_dormitorios">
                        <option value=""></option>
                        @foreach(range(1, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Suites</label>
                      <input type="checkbox" id="habilitar_suites" class="enabler" name="habilitar_suites" value="1">
                      <select name="suites_min" class="form-control disabled" data-target-element="habilitar_suites">
                        <option value=""></option>
                        @foreach(range(1, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>

                      <select name="suites_max" class="form-control disabled" data-target-element="habilitar_suites">
                        <option value=""></option>
                        @foreach(range(1, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Vagas</label>
                      <input type="checkbox" id="habilitar_vagas" class="enabler" name="habilitar_vagas" value="1">
                      <select name="vagas_min" class="form-control disabled" data-target-element="habilitar_vagas">
                        <option value=""></option>
                        @foreach(range(1, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>

                      <select name="vagas_max" class="form-control disabled" data-target-element="habilitar_vagas">
                        <option value=""></option>
                        @foreach(range(1, 10) as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Área</label>
                      <input type="checkbox" id="habilitar_areas" class="enabler" name="habilitar_areas" value="1"/>
                      <input type="text" class="form-control disabled" id="area_min" name="area_min" data-target-element="habilitar_areas"/>
                      <input type="text" class="form-control disabled" id="area_max" name="area_max" data-target-element="habilitar_areas"/>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Entrega</label>
                      <input type="checkbox" id="habilitar_entrega" class="enabler" name="habilitar_entrega" value="1"/>
                      <input type="text" class="form-control date disabled" data-target-element="habilitar_entrega" id="entrega_min" name="entrega_min"/>
                      <input type="text" class="form-control date disabled" id="entrega_max" data-target-element="habilitar_entrega" name="entrega_max"/>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="select-midias">Incorporadora</label>
                      <input type="text" class="form-control" id="incorporadora" name="incorporadora"/>
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
          <h3 class="box-title">Lista Imóveis</h3>
        </div>
        <div class="box-body table-responsive">
          <form action="{{ route('adicionar_imoveis', $perfil->id) }}">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th style="width: 10px"></th>
                <th>Titulo</th>
                <th>Código</th>
                <th>Referencia</th>
                <th>Area privativa</th>
                <th>Dormitórios</th>
                <th>Suites</th>
                <th>Vagas</th>
                <th>Fase Obra</th>
                <th>Entrega</th>
                <th>Faixa Preço</th>
                <th>Localidade</th>
                <th>Incorporação</th>
              </tr>
            </thead>
            <tbody>
              @forelse($empreendimentos as $empreendimento)
                  <tr>
                    @php
                      $query = http_build_query($empreendimento);
                    @endphp
                    <td><a href="?adicionar_imovel=1&perfil_id={{ $perfil->id }}&imovel_id={{ $empreendimento['id'] }}&{{ request()->getQueryString() }}&{{ $query }}" class="btn btn-success btn-xs">Adicionar</a></td>
                    <td>{{ $empreendimento['titulo'] }}</td>
                    <td>{{ $empreendimento['id'] }}</td>
                    <td>{{ $empreendimento['referencia'] }}</td>
                    <td>{{ $empreendimento['areas'] }}</td>
                    <td>{{ $empreendimento['dormitorios'] }}</td>
                    <td>{{ $empreendimento['suites'] }}</td>
                    <td>{{ $empreendimento['vagas'] }}</td>
                    <td>{{ $empreendimento['fases_obra'] }}</td>
                    <td>{{ $empreendimento['previsao_entrega'] }}</td>
                    <td>{{ number_format($empreendimento['faixa_preco_ini'], 2, ',', '.') }} / {{ number_format($empreendimento['faixa_preco_fim'], 2, ',', '.') }}</td>
                    <td>{{ $empreendimento['localidade'] }}</td>
                    <td>{{ $empreendimento['incorporacao'] }}</td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="21">
                      <div class="alert alert-warning text-center">
                        <h4><i class="icon fa fa-info"></i> Ops...</h4>
                        <p>Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
          </tbody></table>
          </form>
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

    <script>

      $(document).ready(function() {

        var disabled = $(".disabled");
        disabled.attr('disabled', true);

        var item = $(".enabler");

        item.change(function() {

          var self = $(this);

          if (self.is(':checked')) {

            $.each(disabled, function(idx, element) {

              var elemento = $(element);

              if(elemento.data('target-element') == self.attr('id')) {

                elemento.attr('disabled', false);

              }

            });

          } else {

            $.each(disabled, function(idx, element) {

              var elemento = $(element);

              if(elemento.data('target-element') == self.attr('id')) {

                elemento.attr('disabled', true);

              }

            });


          }

        });

      });

    </script>
@stop
