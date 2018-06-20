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

      <div class="col-md-2">
          <div class="box box-widget widget-user">
            <div class="widget-user-header bg-green">
              <h3 class="widget-user-username">{{ $cliente->nome }}</h3>
              <h5 class="widget-user-desc">#{{ $cliente->id }}</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#"><b>Publico</b> <span class="pull-right">{{ $cliente->tipoCadastro->nome }}</span></a></li>
                <li><a href="#"><b>Tratamento</b> <span class="pull-right">{{ $cliente->tratamento->forma }}</span></a></li>
                <li><a href="#"><b>Sexo</b> <span class="pull-right">{{ $cliente->sexo == 1 ? 'Masculino' : 'Feminino' }}</span></a></li>
                <li><a href="#"><b>Tipo Pessoa</b> <span class="pull-right">{{ $cliente->pessoa == 1 ? 'Pessoa Fisica' : 'Pessoa Juridica' }}</span></a></li>
              </ul>
            </div>
          </div>
        </div>

      <div class="col-md-3">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Email</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
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

      <div class="col-md-3">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Telefone</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">

            <form action="{{ route('cliente_telefone_store', ['id' => $cliente->id]) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                  <select name="tipo" class="form-control" placeholder="Selecione o tipo" required>
                      <option value="">Selecione o tipo do telefone</option>
                      @foreach($tipos as $tipo)
                          <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                      @endforeach
                  </select>
              </div>

              <div class="row">

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="DDD" name="ddd" maxlength="3">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ramal" name="ramal">
                  </div>
                </div>

                <div class="col-md-6">
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
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Endereço</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
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
                      <select name="estado" class="form-control" required>
                          <option value="">Estado</option>
                          @foreach($estados as $tipo)
                              <option value="{{ $tipo->uf }}">{{ $tipo->uf }}</option>
                          @endforeach
                      </select>
                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="CEP" name="cep">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Numero" name="numero">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Bairro" name="bairro" maxlength="3">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Cidade" name="cidade">
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
                      <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
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

    <div class="col-md-8">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Empreendimentos</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
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

    <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Midias</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <div class="box-body">

              <form name="form-emails" action="{{ route('clientes_midia_store', ['id' => $cliente->id]) }}" method="post">
                  {{ csrf_field() }}
                  <label>
                      <select required style="width:150px" id="select-midias" name="midia" data-url="{{ route('midias') }}" class="form-control"></select>
                  </label>
                  <button class="btn btn-instagram btn-sm" title="Acidionar">Adicionar</button>
              </form>

              <br/>

              <ul class="list-group">
                @forelse($cliente->midias->sortByDesc('id') as $item)
                  <li class="list-group-item">{{ $item->midia->nome }} <span class="pull-right">{{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</span></li>
                @empty

                @endforelse
              </ul>

          </div>
        </div>
      </div>

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Chamados</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <div class="box-body">

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
              console.log(item);
              option += "<option>"+ item.descricao +" dias</option>";
          });

          $(target).html(option);

        });
      });

    </script>
@stop
