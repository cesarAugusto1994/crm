@extends('adminlte::page')

@section('title', 'Chamados')

@section('content_header')
    <h1>Painel de Clientes</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Midias</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">

          <div class="box-header with-border">
            <h3 class="box-title">Filtros</h3>
          </div>

          <form action="{{ route('clientes.index') }}">
              <div class="box-body">
                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="codigo">Codigo</label>
                      <input type="text" class="form-control" id="codigo" name="id">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="codigo">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Cliente</label>
                      <select style="width:150px" id="select-cliente" name="cliente" data-url="{{ route('clientes') }}" class="form-control"></select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                  </div>



                </div>

                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-empreendimento">Empreendimento</label>
                      <select style="width:150px" id="select-empreendimento" name="empreendimento" data-url="{{ route('empreendimentos') }}" class="select2"></select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="select-midias">Midia</label>
                      <select style="width:150px" id="select-midias" name="midia" data-url="{{ route('midias') }}" class="form-control"></select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="codigo">Chamado</label>
                      <input type="text" class="form-control" id="chamado" name="chamado"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="codigo">Empresa</label>
                      <input type="text" class="form-control" id="empresa" name="empresa"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status do chamado </label>
                      <select class="form-control select2" style="width: 100%;" name="situacao">
                            <option value=""></option>
                        @foreach($status as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">

                    <div class="form-group">
                      <label for="tipo">Tipo</label>
                      <select class="form-control" name="tipo" id="tipo" style="width:100%">
                        <option value=""></option>
                        @foreach(\App\Models\Clientes\Tipo::all() as $tipo)
                            <option value="{{  $tipo->id }}">{{ $tipo->nome }}</option>
                        @endforeach
                      </select>
                    </div>

                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" onload="carregarItens()" data-target="#previsao"
                        data-url="{{ route('previsao') }}" class="form-control select2 select-ajax" style="width: 100%;">
                        <option value=""></option>
                        @foreach($classificacao as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Pessoa Responsável </label>
                      <select class="form-control select2" id="resposanvel" style="width: 100%;" name="pessoa_responsavel">
                        <option value=""></option>
                        @foreach($responsaveis as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>

              </div>
              <div class="box-footer clearfix">
              <button type="submit" class="btn btn-warning">Buscar</button>
          </div>
          </form>

      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Opções</h3>
        </div>
        <div class="box-body">
          <a class="btn btn-success" href="{{ route('clientes.create') }}">Novo Cliente</a>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Clientes</h3>
        </div>
        <div class="box-body">

          <table class="table table-bordered table-condensed">
            <thead>

              <tr>
                <th style="width: 10px">#</th>
                <th>Cliente</th>
                <th>Empresa</th>
                <th>Email</th>
                <th>Empreendimentos</th>
                <th>Midias</th>
                <th>Telefone</th>
                <th>Cadastro</th>
                <th style="width:100px">Opções</th>
              </tr>

            </thead>
            <tbody>

              @forelse($clientes as $cliente)
                  <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome ?? '-' }}</td>
                    <td>{{ $cliente->empresa ?? '-' }}</td>
                    <td>
                      @foreach($cliente->emails as $emails)
                          <p>{{ $emails->email ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($cliente->empreendimentos as $empreendimento)
                          <p>{{ $empreendimento->empreendimento->nome ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($cliente->midias as $midia)
                          <p>{{ $midia->midia->nome ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      @foreach($cliente->telefones as $telefones)
                          <p>{{ $telefones->telefone ?? '-' }}</p>
                      @endforeach
                    </td>
                    <td>
                      {{ $cliente->created_at ? $cliente->created_at->format('d/m/Y') : '-' }}
                    </td>
                    <td>
                      <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-success"><i class="icon fa fa-eye"></i> </a>
                      <a data-route="{{ route('clientes.destroy', $cliente->id) }}" class="btn btn-sm btn-danger btnRemoveItem"><i class="icon fa fa-trash"></i> </a>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="9">
                      <div class="alert alert-warning">
                        <p><i class="icon fa fa-info"></i> Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
          </tbody></table>
        </div>
        <div class="box-footer clearfix">
          {{ $clientes->links() }}
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
