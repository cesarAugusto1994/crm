function getAjax(self) {
  var valor = self.val();
  var url = self.data('url') + valor;
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

$( document ).ready(function(){
    carregarItens();

    $('#select-empreendimento').select2({
        ajax: {
          type: "GET",
          url: $('#select-empreendimento').data('url'),
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
        placeholder: 'Selecione uma midia',
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
        placeholder: 'Selecione um cliente',
        minimumInputLength: 1,
        width: '100%'
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

$('.collapse-emprrendimentos').click(function() {
    var self = $(this);

    var referencia = self.data('referencia');
    var url = 'http://www.seabra.com.br/ajax/imoveis/getEmpreendimentoAjax?referencia='+referencia;
    var target = self.attr('href');

    $.ajax(
      {
        url: url,
        dataType: 'json'
      }
    ).done(function(data) {

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
                  '<li class="list-group-item"><b>No de torres:</b> <br/>'+data.qtdtorres+'</li>' +
                  '<li class="list-group-item"><b>No de unidades:</b> <br/>'+data.qtdunidades+'</li>' +
              '</ul>' +

          '</div>' +

          '<div class="col-md-4">' +

              '<ul class="list-group">' +
                  '<li class="list-group-item"><b>Ponto de referencia:</b> <br/>'+ data.estproximas +'</li>' +
                  '<li class="list-group-item"><b>Estagio da obra:</b> <br/>'+ data.fasesobra +'</li>' +
                  '<li class="list-group-item"><b>Valor metro quadrado:</b> <br/>'+data.tipologia.quadrado+'</li>' +
                  '<li class="list-group-item"><b>Link do site:</b> <br/><a target="_blank" class="btn btn-instagram btn-xs" href="http://www.seabra.com.br/'+ data.extras[0].link +'">Acessar</a></li>' +
              '</ul>' +

          '</div>' +


      '</div>';



      $(target).find('.box-body').html(html);


    });
});


  $.get($("#url-chamados-graph").val(), function(data) {

      if(false != data) {

        data = JSON.parse(data);

        var result = [];

        $.each(data['body'], function(i, item) {

            result.push([gd(item.Y, item.m, item.d), item.quantidade]);

        });

        var barOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.0
                        }, {
                            opacity: 0.0
                        }]
                    }
                }
            },
            yaxis: {
                color: "black",
                tickDecimals: 2,
                axisLabel: "Medidas",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 5
            },
            xaxis: {
                   mode: "time",timeformat: "%d/%m",
                   min: gd(data['meta']['inicio']['Y'], data['meta']['inicio']['m'], data['meta']['inicio']['d']),
                   max: gd(data['meta']['fim']['Y'], data['meta']['fim']['m'], data['meta']['fim']['d'])
            },

            colors: ["#1ab394"],
            grid: {
                color: "#999999",
                hoverable: true,
                clickable: true,
                tickColor: "#D4D4D4",
                borderWidth:0,
                mouseActiveRadius: 50
            },
            legend: {
                show: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "Data: %x, Valor: %y"
            }
        };
        var barData = {
            label: "Consultas",
            data: result
        };

        $.plot($("#flot-chart-consultas"), [barData], barOptions);

      }


  });
