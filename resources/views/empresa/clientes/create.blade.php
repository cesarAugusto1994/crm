@extends('adminlte::page')

@section('title', 'Chamado')

@section('content_header')
    <h1>Novo Chamado</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="{{ route('chamados.index') }}"><i class="fa fa-newspaper-o"></i> Chamados</a></li>
      <li class="active">Novo Cliente</li>
    </ol>
@stop

@section('content')

<form method="post" action="{{ route('clientes.store') }}">
    {{ csrf_field() }}

  <div class="row">
      <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Informações do Cliente</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label>Email</label>

                  <input class="form-control emailExiste" data-url="{{ route('verifica_email') }}" type="email" id="email" name="email"/>

                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Nome </label>
                  <input class="form-control" type="text" id="nome" name="nome" value="">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Pessoa </label>
                  <select class="form-control select2" id="pessoa"
                  style="width: 100%;"
                  name="pessoa"  >
                    <option value="1">Fisica</option>
                    <option value="2">Juridica</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>CPF/CNPJ </label>
                  <input class="form-control" type="text" id="documento" name="cpf">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Tipo Cadastro </label>
                  <select class="form-control select2" id="tipo_cliente"
                  style="width: 100%;"
                  name="tipo">
                    @foreach($tipos as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Formas Tratamento</label>
                  <select class="form-control select2" id="tratamento"
                  style="width: 100%;"
                  name="forma_tratamento">
                    @foreach($formas as $item)
                        <option value="{{ $item->id }}">{{ $item->forma }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Sexo </label>
                  <select class="form-control select2" id="sexo"
                  style="width: 100%;"
                  name="sexo"  >
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                  </select>
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
            <button type="submit" class="btn btn-success btnSalvar">Salvar</button>
            <a href="{{ route('chamados.index') }}" type="submit" class="btn btn-danger">Voltar</a>
        </div>
      </div>
    </div>
  </div>

</form>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>

    $('input').not('.emailExiste').attr('disabled', true);
    $('select').attr('disabled', true);
    $('.btnSalvar').attr('disabled', true);

    $('.emailExiste').change(function(e) {

    $('input').not('.emailExiste').attr('disabled', true);
    $('select').attr('disabled', true);
    $('.btnSalvar').attr('disabled', true);

    });

    $('.emailExiste').blur(function(e) {

      var self = $(this);

      if(self.val() == '') {
        e.preventDefault();
        return false;
      }

      window.swal({
        title: 'Aguarde...',
        text: 'Verificando email.',
        timer: 2000,
        onOpen: () => {
          swal.showLoading()
        }
        }).then((result) => {

      })

      $.ajax({
        type : 'GET',
        url : self.data('url'),
        data : {
          email : self.val()
        }
      }).done(function(data) {

        data = JSON.parse(data);

        console.log(data);

        var msg = data.message;

        if(data.code !== 100) {

          swal({
            title: 'Este e-mail já pertence a alguém',
            text: "Não é possivel continuar o cadastro com o e-mail informado!",
            type: 'warning',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            }).then((result) => {
            if (result.value) {


          }
        })

      } else {

        $('input').not('.emailExiste').attr('disabled', false);
        $('select').attr('disabled', false);
        $('.btn').attr('disabled', false);

      }

      });

    });


    </script>
@stop
