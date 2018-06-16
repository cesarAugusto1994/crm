@extends('adminlte::page')

@section('title', 'Painel de Usuários')

@section('content_header')
    <h1>Painel de Usuários</h1>
@stop

@section('content')

  <form method="post" action="{{ route('usuarios.update', ['id' => $user->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Usuário #{{ $user->id }}</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>

            <div class="box-body">

                <div class="row">

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Nome
                        <input type="text" class="form-control" name="nome" value="{{ $user->name }}"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Login
                        <input type="text" class="form-control" name="login" value="{{ $user->login }}"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Email
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}"/>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Area
                        <select class="form-control" name="area_id">
                          <option value="">Selecione</option>
                          @foreach($departamentos as $departamento)
                              <option value="{{ $departamento->id }}" {{ $departamento->id == $user->departamento->id ? 'selected' : '' }}>{{ $departamento->descricao }}</option>
                          @endforeach
                        </select>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Nivel
                        <select class="form-control" name="nivel">
                            <option value="1" {{ $user->nivel == "1" ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $user->nivel == "2" ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $user->nivel == "3" ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $user->nivel == "4" ? 'selected' : '' }}>4</option>
                        </select>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Situação
                        <select class="form-control" name="status">
                            <option value="1" {{ $user->status == "1" ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ $user->status == "0" ? 'selected' : '' }}>Inativo</option>
                        </select>
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
