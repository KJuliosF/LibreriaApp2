<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Libreria</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/summernote/summernote-bs4.min.css">
  <!-- datatables bootstrap -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- datatables bootstrap responsive -->
  <link rel="stylesheet" href="http://localhost/LibreriaApp2/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  @if(Auth::user())
    <!-- /wrapper -->
    <div class="wrapper">
      @include('modulos.cabecera')

      @if(auth()->user()->rol=="Vendedor")
        @include('modulos.menuV')
      @else
        @include('modulos.menu')
      @endif
      
      @yield('contenido')
    </div>
    <!-- /wrapper -->
  @else
     <div class="login-page">
      @yield('content')
    </div>
  @endif

 
  <!-- jQuery -->
<script src="http://localhost/LibreriaApp2/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/LibreriaApp2/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/LibreriaApp2/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/LibreriaApp2/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/LibreriaApp2/public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/LibreriaApp2/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/LibreriaApp2/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/LibreriaApp2/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/LibreriaApp2/public/plugins/moment/moment.min.js"></script>
<script src="http://localhost/LibreriaApp2/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/LibreriaApp2/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/LibreriaApp2/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/LibreriaApp2/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/LibreriaApp2/public/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/LibreriaApp2/public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/LibreriaApp2/public/dist/js/pages/dashboard.js"></script>

<!-- dataTables scripts -->
<script src="http://localhost/LibreriaApp2/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/LibreriaApp2/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- dataTables Responsive scripts -->
<script src="http://localhost/LibreriaApp2/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="http://localhost/LibreriaApp2/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<!-- SweetAlert2 scripts -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(".dtUsers").DataTable({
    "language": {
      
        "sSearch": "Buscar:",
        "sEmptyTable": "No hay datos en la Tabla",
        "sZeroRecords": "No se encontraron resultados",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
        "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
        "oPaginate": {

          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
          
        },
        "sLoadingRecords": "Cargando...",
        "sLengthMenu": "Mostrar _MENU_ registros"
      } 
  }); 

  $('.table').on('click', '.EliminarUsuario', function(){
          var Uid = $(this).attr('Uid');
          var Usuario = $(this).attr('Usuario');

          Swal.fire({
            
             title: '¿Seguro que desea eliminar el Usuario: '+Usuario+'?',
             icon: 'warning',
             showCancelButton: true,
             cancelButtonText: 'Cancelar',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Eliminar',
             confirmButtonColor: '#3085d6'            
          }).then((result)=>{
              if(result.isConfirmed){
                window.location = "Eliminar-Usuario/"+Uid;
              }
          })
        })   
</script>


@if(session('UsuarioCreado')=='OK')
  <script type="text/javascript">
    Swal.fire(
      'El usuario ha sido creado',
      '',
      'success'
    );
  </script>
@endif


<?php
  $exp = explode('/', $_SERVER["REQUEST_URI"]);
 ?>


@if($exp[3] == 'Editar-Usuario')

 <script type="text/javascript">
      $(document).ready(function(){

        $('#EditarUsuario').modal('toggle');
      });
  </script> 

@endif


</body>
</html>
