@extends('adminlte::page')

@section('title', 'Chat')

@section('content_header')
    <h1>Painel de Chat</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Midias</li>
    </ol>
@stop

@section('content')

    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Chats ({{ count($resultado) }})</h3>
        </div>
        <div class="box-body table-responsive">

        <div id="toolbar">

        </div>

          <table class="table table-hover">
            <thead>

              <tr>
                <th style="width: 10px">ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Empreendimento</th>
                <th>Cadastro</th>
                <th style="width: 100px">Chamado</th>
              </tr>

            </thead>
            <tbody>

              @forelse($resultado as $item)
                  <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nome'] ?? '-' }}</td>
                    <td>{{ $item['email'] ?? '-' }}</td>
                    <td>{{ $item['telefone'] ?? '-' }}</td>
                    <td>{{ $item['empreendimento'] ?? '-' }}</td>
                    <td>{{ $item['data'] }}</td>
                    @if(!$item['has_chamado'])
                    <td><a href="{{ route('chats.create', ['chat' => $item['id'], 'user_id' => $item['user_id'], 'nome' => $item['nome'], 'email' => $item['email'], 'telefone' => $item['telefone'], 'empreendimento' => $item['empreendimento']]) }}" class="btn btn-sm btn-success btn-block"><i class="icon fa fa-gear"></i> Chamado</a> </td>
                    @else
                    <td><a href="{{ route('chamados.show', $item['chamado']->id) }}" class="text-navy"> {{ $item['chamado']->id }}</a> </td>
                    @endif
                  </tr>
              @empty
                  <tr>
                    <td colspan="20">
                      <div class="alert alert-warning">
                        <p><i class="icon fa fa-info"></i> Nenhum registro encontrado.</p>
                      </div>
                    </td>
                  </tr>
              @endforelse
          </tbody></table>
        </div>
        <div class="box-footer clearfix">

        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
