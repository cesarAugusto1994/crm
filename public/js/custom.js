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

    var option = "";

    $.each(data, function(i, item) {
        option += "<option value'"+ item.id +"'>"+ item.nome +" </option>";
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
});

function carregarItens()
{
    var elementos = $('.select-ajax');

    $(elementos).each(function(i, elemento) {

      var self = $(elemento);
      getAjax(self);

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
