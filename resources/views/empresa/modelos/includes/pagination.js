$( '.nodata' ).show();

$( '.bodyImovelModal' ).find( "tr" ).not(":first").remove();

hideShowTableAndButton( false );

hideShowContainerIMG( true );

var pOffset = 0;

var imgOffset = 0;

var idImg = 0;

$( '.btn-next' ).click( function () {

	$( this ).prop("disabled", true);

	$( ".btn-prev" ).prop("disabled", true);

	pOffset += 10;

	consultaImoveis( pOffset, $( '#keySearch' ).val() );	

});

$( '.btn-prev' ).click( function () {

	$( ".btn-next" ).prop("disabled", true);

	$( this ).prop("disabled", true);	

	pOffset -= 10;

	consultaImoveis( pOffset, $( '#keySearch' ).val() );
	
});

$( ".selectImageImovel" ).click( function () {

	pOffset = 0;

	hideShowTableAndButton( false );
	hideShowContainerIMG( true );
	consultaImoveis( pOffset, $( '#keySearch' ).val() );

});

$( '#keySearch' ).keyup( function () {

	var search  =   $( this ).val();

	pOffset     =   0;
  
	if( search.length > 2 ) {

		$( '.btn-next' ).prop("disabled", true);

		$( '.btn-prev' ).prop("disabled", true);

		consultaImoveis( pOffset, search );

	}

});

$( '.btn-img-next' ).click( function () {

	$( this ).prop("disabled", true);

	$( ".btn-img-prev" ).prop("disabled", true);

	imgOffset += 10;

	getImagesImoveis( imgOffset, idImg );	

});

$( '.btn-img-prev' ).click( function () {

	$( ".btn-img-next" ).prop("disabled", true);

	$( this ).prop("disabled", true);	

	imgOffset -= 10;

	getImagesImoveis( imgOffset, idImg );
	
});


var consultaImoveis  =  function ( offset, search ) {

    $.ajax({

        type: 'POST',

        url: baseUrl + 'ajax/imoveis/getImoveis',

        data: 'offset=' + offset + '&search=' + search,

        dataType: 'json',

        success: function (data) {

            if( data["imoveis"].length > 0 ) {

            	$( '.nodata' ).hide();

            	$( '.bodyImovelModal' ).find( "tr" ).not(":first").remove();

            	$( ".btn-next" ).prop("disabled", false);

            	if( offset > 0 ) {
            		$( ".btn-prev" ).prop("disabled", false);
            	}else {
            		$( ".btn-prev" ).prop("disabled", true);
            	}

            	if( data["count"] == ( offset + data["imoveis"].length ) ) {
            		$( ".btn-next" ).prop("disabled", true);

            		if( offset > 0 )
            			$( ".btn-prev" ).prop("disabled", false);
            		else
            			$( ".btn-prev" ).prop("disabled", true);
            	}

            	for( var i = 0; i < data.imoveis.length; i++) {
					
					var $id    = null;
					var $title = null;
					var $ref   = null;
					var $ofe   = null;
					var $tr    = null;

            		$id     =   data.imoveis[i].id;

            		$title  =   $( '<td></td>' ).text( data.imoveis[i].title ).css({ "width" : "70%" });
 
            		$ref    =   $( '<td></td>' ).text( data.imoveis[i].ref ).css({ "width" : "20%" });

            		$ofe    =   $( '<td></td>' ).text( data.imoveis[i].oferta ).css({ "width" : "10%" });

            		$tr     =   $( '<tr class="tr-imovel"></tr>' ).attr({ "data-tr" : $id });

            		$tr.append( $title ).append( $ref ).append( $ofe );

            		$( '.bodyImovelModal' ).append( $tr );
  
            	}

            }else {

            	$( '.nodata' ).show();

            	$( '.bodyImovelModal' ).find( "tr" ).not(":first").remove();

            	$( ".btn-next" ).prop("disabled", true);

            	$( ".btn-prev" ).prop("disabled", true);

            }

            $( '#selectImovelModal' ).modal();

        },error: function(request, status, error){
            
            alert( "Ocorreu um erro inesperado" );
        
        }

    });

}

var getImagesImoveis  =  function ( offset, id ) {

    $.ajax({

        type: 'POST',

        url: baseUrl + 'ajax/imoveis/getImagesImoveis',

        data: 'offset=' + offset + '&id=' + id,

        dataType: 'json',

        success: function (data) {

        	if( data["imoveis"].length > 0 ) {

        		$( '.container-img' ).find("img, p").remove();

            	$( ".btn-img-next" ).prop("disabled", false);

            	if( offset > 0 ) {
            		$( ".btn-img-prev" ).prop("disabled", false);
            	}else {
            		$( ".btn-img-prev" ).prop("disabled", true);
            	}

            	if( data["count"] == ( offset + data["imoveis"].length ) ) {
            		$( ".btn-img-next" ).prop("disabled", true);

            		if( offset > 0 )
            			$( ".btn-img-prev" ).prop("disabled", false);
            		else
            			$( ".btn-img-prev" ).prop("disabled", true);
            	}

            	for( var i = 0; i < data.imoveis.length; i++) {
					
            		$img  =   $( '<img class="img-select" />' ).attr({ "title" : "Selecione essa imagem", "src" : data.imoveis[i].img, "data-id" : data.imoveis.id  }).css({ "width" : "140px", "height" : "140px", "padding" : "10px" });

            		$( '.container-img' ).append( $img );
  
            	}
        	}else {
        		$( '.container-img' ).find("img, p").remove();
        		$( '.container-img' ).append("<p style='text-align: center;'>Nenhuma imagem encontrada</p>")
        	}

        },error: function(request, status, error){
            alert(request.responseText);
        }

    });

}

function hideShowTableAndButton( hide ) {

	if( hide ) {
		$( '.btn-prev' ).hide();
		$( '.btn-next' ).hide();
		$( '.table-imoveis' ).hide();
	}else {
		$( '.btn-prev' ).show();
		$( '.btn-next' ).show();
		$( '.table-imoveis' ).show();
	}

}

function hideShowContainerIMG( hide ) {

	if( hide ) {
		$( '.btn-img-prev' ).hide();
		$( '.btn-img-next' ).hide();
		$( '.container-img' ).hide();
	}else {
		$( '.btn-img-prev' ).show();
		$( '.btn-img-next' ).show();
		$( '.container-img' ).show();
	}

	$( '.container-img' ).find( 'img, p' ).remove();

}