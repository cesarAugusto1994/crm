@extends('adminlte::page')

@section('title', 'Painel de Usuários')

@section('content_header')
    <h1>Painel de Usuários</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('usuarios.index') }}"><i class="fa fa-users"></i> Usuários</a></li>
      <li class="active">Novo Usuário</li>
    </ol>
@stop

@section('content')

  <form method="post" action="{{ route('usuarios.store') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Novo Usuário</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

            <div class="box-body">

                <div class="row">

                  <div class="col-md-3">
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                      <label>Nome
                        <input type="text" class="form-control" name="name"/>
                        @if ($errors->has('name'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('name') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group {{ $errors->has('login') ? ' has-error' : '' }}">
                      <label>Login
                        <input type="text" class="form-control" name="login"/>
                        @if ($errors->has('login'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('login') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                      <label>Email
                        <input type="text" class="form-control" name="email"/>
                        @if ($errors->has('email'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('email') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('empresa_id') ? ' has-error' : '' }}">
                      <label>Empresa
                        @if(\Auth::user()->isAdmin())
                        <select class="form-control" name="empresa_id">
                          @foreach($empresas as $empresa)
                              <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                          @endforeach
                        </select>
                        @else
                            <input type="hidden" name="empresa_id" value="{{ \Auth::user()->empresa_id }}">
                            <p class="lead">{{ \Auth::user()->empresa->nome }}</p>
                        @endif
                        @if ($errors->has('empresa_id'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('empresa_id') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('area_id') ? ' has-error' : '' }}">
                      <label>Area
                        <select class="form-control" name="area_id">
                          @foreach($departamentos as $departamento)
                              @if(\Auth::user()->isAdmin())
                                  <option value="{{ $departamento->id }}">{{ $departamento->descricao }} - {{ $departamento->empresa->nome }}</option>
                              @elseif($departamento->id_empresa == \Auth::user()->empresa_id)
                                  <option value="{{ $departamento->id }}">{{ $departamento->descricao }} - {{ $departamento->empresa->nome }}</option>
                              @endif
                          @endforeach
                        </select>
                        @if ($errors->has('area_id'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('area_id') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('nivel') ? ' has-error' : '' }}">
                      <label>Nivel
                        <select class="form-control" name="nivel">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        @if ($errors->has('nivel'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('nivel') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                      <label>Situação
                        <select class="form-control" name="status">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        @if ($errors->has('status'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('status') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('creci') ? ' has-error' : '' }}">
                      <label>Creci
                        <input type="text" class="form-control" name="creci"/>
                        @if ($errors->has('creci'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('creci') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group {{ $errors->has('celular') ? ' has-error' : '' }}">
                      <label>Telefone
                        <input type="text" class="form-control" name="celular"/>
                        @if ($errors->has('celular'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('celular') }}</strong>
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
          <div class="box-header with-border">
            <h3 class="box-title">Senha</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

            <div class="box-body">

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
