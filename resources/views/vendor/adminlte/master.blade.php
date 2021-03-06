<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Seabra CRM -
@yield('title', config('adminlte.title', 'AdminLTE 2'))
@yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

    @if(config('adminlte.plugins.select2'))
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    @endif

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">

    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    @endif

    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.0/fullcalendar.min.css" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<input type="hidden" id="route-preview" value="{{ route('template_preview') }}"/>

<script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/dist/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@endif

@if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
@endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/pt-br.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.0/locale/pt-br.js"></script>

    <script>
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.date').mask('00/00/0000');
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

@yield('adminlte_js')

<script>

  $('table').on('post-body.bs.table', function () {
    $(".btnRemoveItem").click(function(e) {
        var self = $(this);

        swal({
          title: 'Remover este item?',
          text: "Não será possível recuperá-lo!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim',
          cancelButtonText: 'Cancelar'
          }).then((result) => {
          if (result.value) {

            e.preventDefault();

            $.ajax({
              headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
              url: self.data('route'),
              type: 'POST',
              dataType: 'json',
              data: {
                _method: 'DELETE'
              }
            }).done(function() {

              self.parents('tr').hide();

              const toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });

              toast({
                type: 'success',
                title: 'Ok!, o registro foi removido com sucesso.'
              });


            });


          }
        });

    });
  });

  $(".btnRemoveItem").click(function(e) {
      var self = $(this);

      swal({
        title: 'Remover este item?',
        text: "Não será possível recuperá-lo!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.value) {

          e.preventDefault();

          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            url: self.data('route'),
            type: 'POST',
            dataType: 'json',
            data: {
              _method: 'DELETE'
            }
          }).done(function() {

            self.parents('tr').hide();

            const toast = swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });

            toast({
              type: 'success',
              title: 'Ok!, o registro foi removido com sucesso.'
            });


          });


        }
      });

  });

</script>

</body>
</html>
