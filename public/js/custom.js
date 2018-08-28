function getAjax(self) {

  var valor = self.val();
  var url = self.data('url') + '?id=' + valor;
  var target = self.data('target');

  $.ajax(
    {
      url: url,
      dataType: 'json'
    }
  ).done(function(data) {

    var option = "<option value=''>Selecione </option>";
    selected = "";

    var destino = $(target);

    destino.append(option);

    var defaultValue = destino.data('default');

    $.each(data, function(i, item) {

        if(defaultValue == item.id) {
          selected = "selected='selected'";
        }

        option += "<option value='"+ item.id +"' " + selected + ">"+ item.nome +" </option>";
    });

    $(target).html(option);

  });
}

function carregarResponsvel() {

  var area = $('#agenda-area');
  var responsavel = $('#agenda-resposanvel');

  var valor = area.val();
  var url = area.data('url') + '?id=' + valor;

  $.ajax(
    {
      url: url,
      dataType: 'json'
    }
  ).done(function(data) {

    var option = "<option value=''>Selecione </option>";
    selected = "";

    var destino = responsavel;

    destino.append(option);

    var defaultValue = destino.data('default');

    $.each(data, function(i, item) {

        if(defaultValue == item.id) {
          selected = "selected='selected'";
        }

        option += "<option value='"+ item.id +"' " + selected + ">"+ item.nome +" </option>";
    });

    responsavel.html(option);

  });

}

$( document ).ready(function(){

    carregarItens();

    $('#endereco-cep').mask('00000-000');

    $('#select-empreendimento').select2({
        ajax: {
          type: "GET",
          url: $('#select-empreendimento').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione um Empreendimento',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#select-midias').select2({
        ajax: {
          type: "GET",
          url: $('#select-midias').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione uma midia',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#select-cidade').select2({
        ajax: {
          type: "GET",
          url: $('#select-cidade').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione uma cidade',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#select-bairros').select2({
        ajax: {
          type: "GET",
          url: $('#select-bairros').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione um bairro',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#select-areas-privativas').select2({
        ajax: {
          type: "GET",
          url: $('#select-areas-privativas').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione uma área',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#select-cliente').select2({
        ajax: {
          type: "GET",
          url: $('#select-cliente').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione um cliente',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#select-areas').select2({
        ajax: {
          type: "GET",
          url: $('#select-areas').data('url'),
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            // Query parameters will be ?search=[term]&type=public
            return query;
          },
          processResults: function (data) {
              return {
                  results: $.map(JSON.parse(data), function (item) {
                      return {
                          text: item.nome,
                          id: item.id
                      }
                  })
              };
          }
        },
        placeholder: 'Selecione uma area',
        minimumInputLength: 1,
        width: '100%'
    });

    $('#endereco-cep').blur(function() {

      var self = $(this);
      var cep = self.val();
      var url = self.data('url');

      if(cep.length > 7) {

          $.ajax(
            {
              url: url,
              data: {
                cep: cep
              },
              dataType: 'json'
            }
          ).done(function(data) {

            if(data.code == 101) {

              swal(
                'Atenção!',
                'Endereço não encontrado',
                'error'
              )

              $("#adicionar-cep").val('1');

            } else {

              var info = data.data;

              $("#endereco-cep").val(info.cep);
              $("#endereco").val(info.logradouro);
              $("#endereco-bairro").val(info.bairro);
              $("#endereco-cidade").val(info.localidade);
              $("#endereco-uf").val(info.uf);

              $("#endereco-numero").focus();

            }


          })

      } else {

        swal(
          'Atenção!',
          'O CEP deve conter 8 digitos.',
          'info'
        )

      }

    });
});

function carregarItens()
{
    var elementos = $('.select-ajax');

    $(elementos).each(function(i, elemento) {

      var self = $(elemento);
      if(self.val() !== '') {
        getAjax(self);
      }

    });
}

$('.select-ajax').change(function() {
    var self = $(this);
    getAjax(self);
});

$('.collapse-emprrendimentos, .empreendimentoLabel').click(function() {
    var self = $(this);

    var rota = $("#url-empreendimentos").val();

    var referencia = self.data('referencia');
    var url = rota;
    var target = self.attr('href');

    $.ajax(
      {
        url: url,
        dataType: 'json',
        data: {
          referencia:referencia
        }
      }
    ).done(function(data) {

      var tipologias = "";

      $.each(data.tipologias, function(i, tipologia) {
        tipologias += '<p>'+ tipologia.tipologiaExtenso +'</p>';
      });

      var html = '<div class="row">' +
          '<div class="col-md-4">' +

              '<ul class="list-group">' +
                  '<li class="list-group-item"><b>Referencia:</b> <br/>'+data.referencia+'</li>' +
                  '<li class="list-group-item"><b>Endereco:</b> <br/>'+ data.extras[0].endereco +'</li>' +
                  '<li class="list-group-item"><b>Dormitorios:</b> <br/>'+data.tipologia.dorms+'</li>' +
                  '<li class="list-group-item"><b>Suites:</b> <br/>'+data.tipologia.suites+'</li>' +
                  '<li class="list-group-item"><b>Vagas:</b> <br/>'+data.tipologia.vagas+'</li>' +
                  '<li class="list-group-item"><b>Area:</b> <br/>'+data.tipologia.area+'</li>' +
              '</ul>' +

          '</div>' +

          '<div class="col-md-4">' +

              '<ul class="list-group">' +
                  '<li class="list-group-item"><b>Incorporação:</b> <br/>'+data.incorporacao+'</li>' +
                  '<li class="list-group-item"><b>Arquitetura:</b> <br/>'+data.arquitetura+'</li>' +
                  '<li class="list-group-item"><b>Construção:</b> <br/>'+data.construcao+'</li>' +
                  '<li class="list-group-item"><b>Data Entrega:</b> <br/>'+data.entrega+'</li>' +
                  '<li class="list-group-item"><b>No de torres:</b> <br/>'+data.qtdtorres+'</li>' +
                  '<li class="list-group-item"><b>No de unidades:</b> <br/>'+data.qtdunidades+'</li>' +
              '</ul>' +

          '</div>' +

          '<div class="col-md-4">' +

              '<ul class="list-group">' +

                  '<li class="list-group-item"><b>Ponto de referencia:</b> <br/>'+ data.estproximas +'</li>' +
                  '<li class="list-group-item"><b>Estagio da obra:</b> <br/>'+ data.faseobra +'</li>' +
                  '<li class="list-group-item"><b>Valor metro quadrado:</b> <br/>'+data.tipologia.quadrado+'</li>' +
                  '<li class="list-group-item"><b>Tipologias:</b> <br/>'+ tipologias +'</li>' +
                  '<li class="list-group-item"><b>Link do site:</b> <br/><a target="_blank" class="btn btn-instagram btn-xs" href="http://www.seabra.com.br/'+ data.extras[0].link +'">Acessar</a></li>' +
              '</ul>' +

          '</div>' +


      '</div>';

      $(target).find('.box-body').html(html);

      //$('.ck-content').replace(/###empreendimento/, '<div></div>');

    });
});

  function gd(year, month, day) {
      return new Date(year, month, day).getTime();
  }

  function limparModal() {
    $("#agenda-data").val("");
    $("#agenda-lembrete").val("");
    $('#agenda-local option')
     .removeAttr('selected');
    $('#agenda-resposanvel option')
     .removeAttr('selected');
    $("#consulta-notas").val("");
  }

  function popularModal(event) {

    var url = '/agenda/' + event.id;

    $("#formAgendaModal").prop('action', url);

    $("#formAgendaModal").append('<input name="_method" type="hidden" value="PUT">');

    $("#cadastra-agenda-modal").modal('show');
    $("#cadastra-agenda-modal").find('#title').val(event.title);

    $("#agenda-data").val(event.start.format('DD/MM/YYYY HH:mm'));
    $("#agenda-lembrete").val(event.lembrete);

    $("#agenda-local").val(event.local);

    $('#agenda-area option')
     .removeAttr('selected')
     .filter('[value="' + event.area + '"]')
         .attr('selected', true)

     $('#agenda-resposanvel option')
      .removeAttr('selected')
      .filter('[value="' + event.resposanvel + '"]')
          .attr('selected', true)

    $("#agenda-notas").val(event.notas);
  }

  function popularModalAjax(event) {

    var url = '/agenda/'+ event.id +'/update-ajax';

    $("#formAgendaModal").prop('action', url);

    //$("#formAgendaModal").append('<input name="_method" type="hidden" value="PUT">');
    $("#formAgendaModal").append('<input name="agd_func_id" type="hidden" value="'+ event.responsavel +'">');

    //$("#formAgendaModal").val(event.responsavel);

    //$("#cadastra-agenda-modal").modal('show');
    $("#cadastra-agenda-modal").find('#title').val(event.title);

    $("#agenda-data").val(event.start.format('DD/MM/YYYY HH:mm'));
    $("#agenda-lembrete").val(event.lembrete);

    $("#agenda-local").val(event.local);

    $('#agenda-area option')
     .removeAttr('selected')
     .filter('[value="' + event.area + '"]')
         .attr('selected', true)

     $('#agenda-resposanvel option')
      .removeAttr('selected')
      .filter('[value="' + event.resposanvel + '"]')
          .attr('selected', true)

    $("#agenda-notas").val(event.notas);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: $("#formAgendaModal").attr('action'),
        data: $("#formAgendaModal").serialize(),
        dataType: 'json',
        success: function(data) {
            //openSwalScreenProgress();
        },
        error: function(data) {
            //openSwalMessage('Erro', data.message);
        }
    })
  }

  let $calendar = $('.calendar');

  $calendar.fullCalendar({
      views: {
        listDay: {
          buttonText: 'list day',
          titleFormat: "dddd, DD MMMM YYYY",
          columnFormat: "",
          timeFormat: "HH:mm"
        },

        listWeek: {
          buttonText: 'list week',
          columnFormat: "ddd D",
          timeFormat: "HH:mm"
        },

        listMonth: {
          buttonText: 'list month',
          titleFormat: "MMMM YYYY",
          timeFormat: "HH:mm"
        },

        month: {
          buttonText: 'month',
          titleFormat: 'MMMM YYYY',
          columnFormat: "ddd",
          timeFormat: "HH:mm"
        },

        agendaWeek: {
          buttonText: 'agendaWeek',
          titleFormat: 'MMM D YYYY',
          columnFormat: "ddd D",
          timeFormat: "HH:mm"
        },

        agendaDay: {
          buttonText: 'agendaDay',
          titleFormat: 'dddd, DD MMMM YYYY',
          columnFormat: "",
          timeFormat: "HH:mm"
        },
      },
      lang: 'pt-br',
      defaultView: 'month',
      eventBorderColor: "#de1f1f",
      eventColor: "#AC1E23",
      slotLabelFormat: 'HH:mm',
      eventLimitText: 'consultas',
      minTime: '06:00:00',
      maxTime: '22:00:00',
      header: {
          left: 'prev,next,today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
      },

      navLinks: true,
      selectable: true,
      selectHelper: true,
      select: function(start, end, jsEvent, view) {

          limparModal();
          var view = $('.calendar').fullCalendar('getView');

          if(view.name == 'agendaDay' || view.name == 'agendaWeek') {

            $("#cadastra-agenda-modal").modal('show');
            $("#agenda-data").val(start.format('DD/MM/YYYY HH:mm'));
            //$("#consulta-fim").val(end.format('DD/MM/YYYY HH:mm'));

            carregarResponsvel();

          }

      },
      eventClick: function(event, element, view) {
          popularModal(event);
          carregarResponsvel();
      },
      editable: true,
      allDaySlot: false,
      eventLimit: true,
      dayClick: function(date, jsEvent, view) {

          jsEvent.preventDefault();

            /*setTimeout(function() {

              $('.calendar').fullCalendar('gotoDate', date);
              $('.calendar').fullCalendar('changeView','agendaDay');

              carregarResponsvel();

            }, 100);*/

      },
      events: $("#agenda-json").val(),
      color: 'black',     // an option!
      textColor: 'yellow', // an option!
      //When u drop an event in the calendar do the following:
      eventDrop: function (event, delta, revertFunc) {
        popularModalAjax(event);
        carregarResponsvel();
      },
      //When u resize an event in the calendar do the following:
      eventResize: function (event, delta, revertFunc) {
        popularModal(event);
        carregarResponsvel();
      },
      eventRender: function(event, element) {
          $(element).tooltip({title: event.title});
          carregarResponsvel();
      },
      ignoreTimezone: false,
      allDayText: 'Dia Inteiro',
      monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
      dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
      dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
      titleFormat: {
          month: 'MMMM YYYY',
          week: "MMMM YYYY",
          day: 'dddd, DD MMMM YYYY'
      },
      columnFormat: {
          month: 'ddd',
          week: 'ddd D',
          day: ''
      },
      axisFormat: 'HH:mm',
      timeFormat: {
          '': 'HH:mm',
          agenda: 'HH:mm'
      },
      buttonText: {
          prev: "<",
          next: ">",
          prevYear: "Ano anterior",
          nextYear: "Proximo ano",
          today: "Hoje",
          month: "Mês",
          week: "Semana",
          day: "Dia",
          listMonth: "Lista Mensal",
          listWeek: "Lista Semanal",
          listDay: "Lista Diária"
      }

  });
