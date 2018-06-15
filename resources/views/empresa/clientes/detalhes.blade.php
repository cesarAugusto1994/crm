@extends('adminlte::page')

@section('title', 'Chamado')

@section('content_header')
    <h1>Chamado #{{ $chamado->id }}</h1>
@stop

@section('content')

  <div class="row">

      <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">{{ $chamado->cliente->nome }}</h3>
              <p class="text-muted text-center">{{ $chamado->cliente->email->email }}</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Telefone</b> <a class="pull-right">{{ $chamado->cliente->telefones->first()->ddd }} - {{ $chamado->cliente->telefones->first()->telefone }}</a>
                </li>
                <li class="list-group-item">
                  <b>CPF</b> <a class="pull-right">{{ $chamado->cliente->cpf }}</a>
                </li>
              </ul>
              <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
            </div>
          </div>
      </div>

      <div class="col-md-9">

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Informações do chamado</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>

          <form method="post" action="{{ url('/chamados') }}">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $chamado->id }}"/>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status/Classificação</label>
                      <select id="classificacao" name="classificacao" data-target="#previsao" data-url="/chamado/previsoes/" class="form-control select2 select-ajax" style="width: 100%;">
                        <option value="">Selecione</option>
                        @foreach($classificacao as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $chamado->categoria->id ? 'selected' : '' }}>{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Previsão de conclusão </label>
                      <select id="previsao" class="form-control select2" style="width: 100%;" name="previsao_conclusao">
                        <option selected="selected"></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Área Resolvedora </label>
                      <select class="form-control select2 select-ajax" id="area"
                      data-target="#resposanvel" data-url="/chamado/departamento/" style="width: 100%;"
                      name="area_atendimento"
                      >
                        <option value="">Selecione</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Pessoa Responsável </label>
                      <select class="form-control select2" id="resposanvel" style="width: 100%;" name="pessoa_responsavel">
                        <option selected="selected">Selecione</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Abertura </label>
                        <input type="text" readonly class="form-control" name="abertura_chamado" value="{{ $chamado->abertura_chamado->format('d/m/Y') }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Atendimento </label>
                        <input type="text" class="form-control datepicker" name="atendimento_chamado" value="{{ $chamado->atendimento_chamado ? $chamado->atendimento_chamado->format('d/m/Y') : '' }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Conclusão </label>
                        <input type="text" class="form-control datepicker" name="conclusao_chamado" value="{{ $chamado->conclusao_chamado ? $chamado->conclusao_chamado->format('d/m/Y') : '' }}"/>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Status do chamado </label>
                      <select class="form-control select2" style="width: 100%;" name="situacao">
                        @foreach($status as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $chamado->situacao ? 'selected' : '' }}>{{ $item->descricao }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Conclusão </label>
                      <textarea name="conclusao" class="form-control">{{ $chamado->conclusao }}</textarea>
                    </div>
                  </div>

                </div>
              </div>

              <div class="box-footer">
                  <button type="submit" class="btn btn-success">Salvar</button>
              </div>

          </form>

        </div>

      </div>

  </div>

@stop

@section('js')
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
