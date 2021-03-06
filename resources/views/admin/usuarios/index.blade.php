@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <h1>Painel de Usuários</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li class="active">Usuários</li>
    </ol>
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
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
                <a class="btn btn-success btn-sm" href="{{ route('usuarios.create') }}">Adicionar Usuário</a>
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
                <th>Creci</th>
                <th>Celular</th>
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
                    <td>{{ $user->creci}}</td>
                    <td>{{ $user->celular}}</td>
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
                      <a href="{{ route('editar_senha', ['id' => $user->id]) }}" class="btn btn-danger"><i class="fa fa-key"></i></a>
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

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
