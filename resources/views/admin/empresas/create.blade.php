@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>Painel de Empresas</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('empresas.index') }}"><i class="fa fa-building-o"></i> Empresas</a></li>
      <li class="active">Editar Empresa</li>
    </ol>
@stop

@section('content')

  <form method="post" action="{{ route('empresas.store') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Adicionar Empresa</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

            <div class="box-body">

                <div class="row">

                  <div class="col-md-2">

                    <div class="form-group {{ $errors->has('nome') ? ' has-error' : '' }}">
                      <label>Nome
                        <input type="text" class="form-control" name="nome"/>
                        @if ($errors->has('nome'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('nome') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>

                  </div>

                  <div class="col-md-2">

                    <div class="form-group {{ $errors->has('num_usuarios') ? ' has-error' : '' }}">
                      <label>Quantidade Funcionários
                        <input type="text" class="form-control" name="num_usuarios"/>
                        @if ($errors->has('num_usuarios'))
            								<span class="help-block">
            		                <strong>{{ $errors->first('num_usuarios') }}</strong>
            		            </span>
            						@endif
                      </label>
                    </div>

                  </div>

                  <div class="col-md-4">

                    <label>Situação
                      <select class="form-control" name="status">
                          <option value="1">Ativo</option>
                          <option value="0">Inativo</option>
                      </select>
                    </label>

                  </div>

                </div>

            </div>
            <div class="box-footer clearfix">

            </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Configurações de Email</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="box-body">

                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Driver
                        <input type="text" class="form-control" name="mail_driver"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Host
                        <input type="text" class="form-control" name="mail_host"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Porta
                        <input type="text" class="form-control" name="mail_port"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Usuário
                        <input type="text" class="form-control" name="mail_username"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Senha
                        <input type="text" class="form-control" name="mail_password"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Encriptação
                        <input type="text" class="form-control" name="mail_encription"/>
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
              <a href="{{ route('empresas.index') }}" type="submit" class="btn btn-danger">Voltar</a>

          </div>
        </div>
      </div>
    </div>
  </form>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
