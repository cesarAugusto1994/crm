btnSelected =  0;

$( '.selectImovel1, .selectImovel2, .selectImovel3, .selectImovel4, .selectImovel5, .selectImovel6' ).click( function () {
	pOffset   =  0;
	btnSelected =  $( this ).attr( 'data-id' );
	hideShowTableAndButton( false );
	hideShowContainerIMG( true );
	consultaImoveis( pOffset, $( '#keySearch' ).val() );
});

$( document ).on( 'click', 'tr.tr-imovel', function() {
	idImg      =   $( this ).attr( 'data-tr' );
	imgOffset  =   0;
	getInfoDormsImovel( idImg, 1 );
	hideShowTableAndButton( true );
	hideShowContainerIMG( false );
	getImagesImoveis( imgOffset, idImg );
});

$( document ).on( 'click', 'img.img-select', function() {
	var src  =  $( this ).attr( "src" );
	$( '.imgimovel' + btnSelected ).attr({ "src" : src, "id" : $( this ).attr( "data-id" ) }).show();
	$( ".messImagem" + btnSelected ).text("Imagem selecionada: ");
	$( '.closeModalSelectImovel' ).trigger( 'click' );
	hideShowTableAndButton( true );
	hideShowContainerIMG( true );
});

$( '.preview' ).click( function () {
	var idModelo  =  $( this ).attr( 'data-id' );
	if( idModelo == 3 ) {
		serializeTabs( true, idModelo );
	}else if( idModelo == 4 ) {
		serializeTabsModelo4( true, idModelo );
	}
});

$( '.salvar' ).click( function () {
	var idModelo  =  $( '.preview' ).attr( 'data-id' );
	if( idModelo == 3 ) {
		serializeTabs( false, idModelo );
	}else if( idModelo == 4 ) {
		serializeTabsModelo4( false, idModelo );
	}
});

var isEdit=1;

if( isEdit == '1' ) {

	$( '.messImagem1, .messImagem2, .messImagem3, .messImagem4, .messImagem5, .messImagem6' ).text("Imagem selecionada");

	$( '.imgimovel1' ).show();
	$( '.imgimovel2' ).show();
	$( '.imgimovel3' ).show();
	$( '.imgimovel4' ).show();
	$( '.imgimovel5' ).show();
	$( '.imgimovel6' ).show();

}
