@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Cliente #{{ $cliente->id }}</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('clientes.index') }}"><i class="fa fa-newspaper-o"></i> Clientes</a></li>
      <li class="active">Detalhes</li>
    </ol>
@stop

@section('content')

  <div class="row">

        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Informações</h3>
            </div>

            <form class="form-inline" action="{{ route('clientes.update', ['id' => $cliente->id]) }}" method="post">

              <div class="box-body">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="row">

                  <div class="col-md-2">

                    <div class="form-group">
                      <label for="codigo">Código</label>
                      <input type="text" class="form-control" disabled value="#{{ $cliente->id }}">
                    </div>

                  </div>
                  <div class="col-md-2">

                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do cliente" required value="{{ $cliente->nome }}">
                    </div>

                  </div>
                  <div class="col-md-2">

                    <div class="form-group">
                      <label for="nome">Empresa</label>
                      <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Informe a Empresa do cliente" value="{{ $cliente->empresa }}">
                    </div>

                  </div>
                  <div class="col-md-2">

                    <div class="form-group">
                      <label for="tipo">Tipo</label>
                      <select class="form-control" name="tipo" id="tipo" style="width:100%">
                        @foreach(\App\Models\Clientes\Tipo::all() as $tipo)
                            <option value="{{  $tipo->id }}" {{  $tipo->id == $cliente->tipoCadastro->id ? 'selected' : '' }}>{{ $tipo->nome }}</option>
                        @endforeach
                      </select>
                    </div>

                  </div>
                  <div class="col-md-2">

                    <div class="form-group">
                      <label for="tratamento">Tratamento</label>
                      <select class="form-control" name="forma_tratamento" id="tratamento" style="width:100%">
                        @foreach(\App\Models\Clientes\Tratamento::all() as $tratamento)
                            <option value="{{  $tratamento->id }}" {{  $tratamento->id == $cliente->tratamento->id ? 'selected' : '' }}>{{ $tratamento->forma }}</option>
                        @endforeach
                      </select>
                    </div>

                  </div>
                  <div class="col-md-2">

                    <div class="form-group">
                      <label for="sexo">Sexo</label>
                      <select class="form-control" name="sexo" id="sexo" style="width:100%">
                        <option value="1" {{ $cliente->sexo == 1 ? 'selected' : '' }}>Masculino</option>
                        <option value="0" {{ $cliente->sexo == 0 ? 'selected' : '' }}>Feminino</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-md-12">

                  </div>

                </div>

            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check"></i> Salvar</button>
            </div>
            </form>
          </div>
        </div>


      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Email</h3>
          </div>
          <div class="box-body">

            <form action="{{ route('cliente_email_store', ['id' => $cliente->id]) }}" method="post">
              {{ csrf_field() }}
              <div class="input-group">
                <input type="email" name="email" required placeholder="Informe um email" class="form-control">
                <span class="input-group-btn">
                      <button type="submit" class="btn btn-teal btn-flat"><i class="fa fa-check"></i></button>
                </span>
              </div>
            </form>

            <br/>

            <ul class="products-list product-list-in-box">
              @forelse($cliente->emails->sortByDesc('id') as $item)
              <li class="item">
                <div class="product-info" style="margin-left:0">
                  <a href="javascript:void(0)" class="product-title">{{ $item->email }}</a><a href="{{ route('cliente_email_remove', $item->id) }}" class="btn btn-xs btn-danger pull-right"><i class="fa fa-trash-o"></i></a>
                  <small class="product-description">Adicionado em: {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</small>
                </div>
              </li>
              @empty

              @endforelse
            </ul>

          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Telefone</h3>
          </div>
          <div class="box-body">

            <form action="{{ route('cliente_telefone_store', ['id' => $cliente->id]) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                  <select name="tipo" class="form-control" id="telefone-tipo" placeholder="Selecione o tipo" required>
                      <option value="">Selecione o tipo do telefone</option>
                      @foreach($tipos as $tipo)
                          <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                      @endforeach
                  </select>
              </div>

              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="DDD" name="ddd" maxlength="3">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ramal" id="telefone-ramal" name="ramal">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-group">
                      <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                      <span class="input-group-btn">
                          <button type="submit" class="btn btn-teal btn-flat"><i class="fa fa-check"></i></button>
                      </span>
                  </div>
                </div>

              </div>

            </form>

            <br/>

            <ul class="products-list product-list-in-box">
              @forelse($cliente->telefones->sortByDesc('id') as $item)
              <li class="item">
                <div class="product-info" style="margin-left:0">
                  <a href="javascript:void(0)" class="product-title">{{ $item->ddi }} {{ $item->ddd }} {{ $item->telefone }}</a><a href="{{ route('cliente_telefone_remove', $item->id) }}" class="btn btn-xs btn-danger pull-right"><i class="fa fa-trash-o"></i></a>
                  <span class="product-description">Tipo: {{ $item->tipoTelefone->tipo }}</span>
                  <span class="product-description">Ramal: {{ $item->ramal }}</span>
                  <small class="product-description">Adicionado em: {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</small>
                </div>
              </li>
              @empty

              @endforelse
            </ul>

          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Endereço</h3>
          </div>
          <div class="box-body">

            <form action="{{ route('cliente_endereco_store', ['id' => $cliente->id]) }}" method="post">
              {{ csrf_field() }}

              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                      <select name="tipo" class="form-control" required>
                          <option value="">Tipo Endereço</option>
                          @foreach($tiposEndereco as $tipo)
                              <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                          @endforeach
                      </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <input type="hidden" name="adicionar_cep" id="adicionar-cep" value="0"/>
                      <input type="text" class="form-control" placeholder="CEP" id="endereco-cep" data-url="{{ route('cep') }}" name="cep">
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-md-3">
                  <div class="form-group">
                      <select name="estado" class="form-control" required id="endereco-uf">
                          <option value="">Estado</option>
                          @foreach($estados as $tipo)
                              <option value="{{ $tipo->uf }}">{{ $tipo->uf }}</option>
                          @endforeach
                      </select>
                  </div>
                </div>


                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Numero" id="endereco-numero" name="numero">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Bairro" name="bairro" id="endereco-bairro" maxlength="3">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="endereco-cidade">
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Complemento" name="complemento">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Referêcia" name="referencia">
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-md-12">
                  <div class="input-group">
                      <input type="text" class="form-control" name="endereco" placeholder="Endereço" id="endereco" required>
                      <span class="input-group-btn">
                          <button type="submit" class="btn btn-teal btn-flat"><i class="fa fa-check"></i></button>
                      </span>
                  </div>
                </div>

              </div>

            </form>

            <br/>

            <ul class="products-list product-list-in-box">
              @forelse($cliente->enderecos->sortByDesc('id') as $item)
              <li class="item">
                <div class="product-info" style="margin-left:0">
                  <a href="javascript:void(0)" class="product-title">{{ $item->endereco }}, {{ $item->numero }} - {{ $item->bairro }}, {{ $item->cidade }}/{{ $item->estado }}</a><a href="{{ route('cliente_endereco_remove', ['id' => $item->id]) }}" class="btn btn-xs btn-danger pull-right"><i class="fa fa-trash-o"></i></a>

                  <span class="product-description">CEP: {{ $item->cep }}</span>
                  <span class="product-description">Ref.: {{ $item->referencia }}</span>
                  <span class="product-description">Compl.: {{ $item->complemento }}</span>
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

  <div class="row">

    <div class="col-md-6">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Empreendimentos</h3>
          <div class="box-body">

            <form name="form-emails" action="{{ route('clientes_empreendimento_store', ['id' => $cliente->id]) }}" method="post">
                {{ csrf_field() }}
                <label>
                    <select required style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="form-control"></select>
                </label>
                <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
            </form>

            <br/>

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

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Midias</h3>
          <div class="box-body">

              <form name="form-emails" action="{{ route('clientes_midia_store', ['id' => $cliente->id]) }}" method="post">
                  {{ csrf_field() }}
                  <label>
                      <select required style="width:150px" id="select-midias" name="midia" data-url="{{ route('midias') }}" class="form-control"></select>
                  </label>
                  <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
              </form>

              <br/>

              <ul class="products-list product-list-in-box">
                @forelse($cliente->midias->sortByDesc('id') as $item)
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
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Chamados</h3>
          <div class="box-body">

              <a href="{{ route('chamados.create', ['cliente_id' => $cliente->id]) }}" class="btn btn-bitbucket btn-sm"> Novo Chamado</a>

              <br/>

              <ul class="products-list product-list-in-box">
                @forelse($cliente->chamados->sortByDesc('id') as $item)
                  <li class="item">
                    <div class="product-info" style="margin-left:0">
                      <a class="product-title lead" href="{{ route('chamados.show', ['id' => $item->id]) }}" class="lead">{{ $item->id }}</a>
                      <span class="product-description">{{ $item->descricao }}</span>
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

@stop

@section('js')

    <script src="{{ asset('js/custom.js') }}"></script>

    <script>

      $( document ).ready(function(){

        $("#telefone-tipo").change(function() {
          var self = $(this);

          if(self.val() == '3') {
            $("#telefone-ramal").hide();
          } else {
            $("#telefone-ramal").show();
          }
        })

      });

      $('.select-ajax').change(function() {
        var self = $(this);
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
              option += "<option>"+ item.descricao +" dias</option>";
          });

          $(target).html(option);

        });
      });

    </script>
@stop
