@extends('adminlte::page')

@section('title', 'Editor')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
@stop

@section('content_header')
    <h1>Log envio email</h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Painel Principal</a></li>
      <li><a href="#"><i class="fa fa-newspaper-o"></i> Email</a></li>
      <li class="active">Log</li>
    </ol>
@stop

@section('content')

  <div class="row">

      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Email enviado em {{ $log->created_at->format('d/m/Y H:i') }}</h3>
          </div>
          <form class="form-horizontal" enctype="multipart/form-data" novalidate action="{{ route('chamados_logs_store', ['id' => $chamado->id]) }}" method="post">

              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Chamado</label>
                  <div class="col-sm-10">
                    <p class="lead">#{{ $chamado->id }}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Cliente</label>
                  <div class="col-sm-10">
                    <p class="lead">{{ $chamado->cliente->nome }}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" readonly class="form-control" name="email" id="email" value="{{ $emailList }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mensagem</label>
                  <div class="col-sm-10">

                    <ul class="nav nav-tabs">
                        @foreach($nomesEmpreendimentos as $key => $item)
                            <li role="presentation" class="{{ $loop->index == 0 ? 'active' : '' }}"><a href="#item"
                              aria-controls="item-{{ $key }}" role="tab" data-toggle="tab">{{ $item }}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="item">

                            <textarea rows="8" name="descricao" id="editor" class="form-control editor">
                                {{ $mensagem }}
                            </textarea>

                          </div>
                    </div>

                  </div>
                </div>


              </div>
              <div class="box-footer">

                <a class="btn btn-default btn-flat" href="{{ route('chamados.show', ['id' => $chamado->id]) }}">Voltar</a>

              </div>

          </form>
        </div>
      </div>
  </div>

@stop

@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCdFj8jkxW4lzvZjL7R86Smrgy9lmO5wAE"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script>

       $("#email1").tagsinput()

       var portifolio = $("#portifolio").val();

       var getMaps  =   function( endereco, oferta ) {

           var latlng    =  new google.maps.LatLng(-34.397, 150.644);

           var geocoder  =  new google.maps.Geocoder();

           if( oferta == 1 ) {

               var myOptions = {
                   zoom: 15,
                   center: latlng,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
               };

           }else {

               var myOptions =  {
                   zoom: 16,
                   scrollwheel:false,
                   disableDefaultUI: false,
                   center: latlng,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
               };

           }

           var map = new google.maps.Map( document.getElementById("map") , myOptions);

           google.maps.event.addListener(map,'zoom_changed',function() {
               map.setZoom(16);
           });

           geocoder.geocode({ 'address': endereco}, function(results, status) {

               if (status == google.maps.GeocoderStatus.OK) {

                   map.setCenter(results[0].geometry.location);

                   if( oferta == 1 ) {

                       var marker = new google.maps.Marker({
                           map: map,
                           position: results[0].geometry.location
                       });

                   } else {

                       if(portifolio == '1') {
                           var marker = new google.maps.Marker({
                               map: map,
                               position: results[0].geometry.location
                           });
                       } else{
                           var populationOptions = {
                               strokeColor: "#000000",
                               strokeOpacity: 0.8,
                               strokeWeight: 1,
                               fillColor: "#0000CC",
                               fillOpacity: 0.35,
                               map: map,
                               center: map.getCenter(),
                               radius: 300
                           };
                       }

                   }

                   cityCircle = new google.maps.Circle(populationOptions);

               }

           });

       };

       $("#editor").append('<div id="map" class="maps-canvas" style="width: 100%; height: 400px;"></div>');

       setTimeout(function() {

         console.log(document.getElementById("map"));

          getMaps($("#local").val(), $("#oferta").val());

       }, 5000);

   </script>

    <script type="text/javascript" src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>

    <script type="text/javascript">


          setTimeout(function() {

            var editor = CKEDITOR.replace('editor' , {
               	height:500,
               filebrowserBrowseUrl:'browse.php',
               filebrowserUploadUrl:'upload.php'
               }, 15000);

          });

        

   </script>

@stop
