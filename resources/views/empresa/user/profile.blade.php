@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1>Painel Principal</h1>
    <ol class="breadcrumb">
      <li class="active">Perfil</li>
    </ol>
@stop

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="box box-solid">

          <div class="box-header with-border">
            <h3 class="box-title">Perfil</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

          <form class="form-horizontal" method="post" action="{{ route('perfil_editar') }}">
              <div class="box-body">

                  {{ csrf_field() }}

                  {{ method_field('PUT') }}

                  <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">

                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Nome">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="login" class="col-sm-2 control-label">Login</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="login" id="login" value="{{ $user->login }}" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="creci" class="col-sm-2 control-label">Creci</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="creci" id="creci" value="{{ $user->creci }}" placeholder="Informe o número do Creci">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="celular" class="col-sm-2 control-label">Contato</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="celular" id="celular" value="{{ $user->celular }}" placeholder="Informe o número de contato">
                    </div>
                  </div>

              </div>
              <div class="box-footer clearfix">
              <button type="submit" class="btn btn-success">Salvar</button>
          </div>
          </form>

      </div>
    </div>

  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@stop
