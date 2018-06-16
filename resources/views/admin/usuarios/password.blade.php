@extends('adminlte::page')

@section('title', 'Painel de Usuários')

@section('content_header')
    <h1>Painel de Usuários</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('usuarios.index') }}"><i class="fa fa-users"></i> Usuários</a></li>
      <li class="active">Alterar Senha</li>
    </ol>
@stop

@section('content')

  <form method="post" action="{{ route('editar_senha_update', ['id' => $user->id]) }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Alterar Senha - Usuário #{{ $user->id }}</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

            <div class="box-body">

                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Nome
                        <p class="lead">{{ $user->name }}</p>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Login
                        <p class="lead">{{ $user->login }}</p>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Email
                        <p class="lead">{{ $user->email }}</p>
                      </label>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                      <label>Senha
                        <input type="password" class="form-control" name="password"/>
                        @if ($errors->has('password'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('password') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group  {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                      <label>Confirmar Senha
                        <input type="password" class="form-control" name="password_confirmation"/>
                        @if ($errors->has('password_confirmation'))
            								<span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                </div>

            </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">

              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="{{ route('usuarios.index') }}" type="submit" class="btn btn-danger">Voltar</a>

          </div>
        </div>
      </div>
    </div>
  </form>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
