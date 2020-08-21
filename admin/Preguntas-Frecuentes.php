<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="funciones js/main.js" defer></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
    <!--nav derecha-->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link">Ciclo: cuatrimestre 6. junio - agosto</a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- inicio --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->
  <?php
    include 'plantilla_barra_izquierda.php';
  ?>
  <!-- Fin --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

  
          

          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
  <h1 class="m-0 text-dark">PREGUNTAS FRECUENTES...</h1>
        
        <div class="accordion">
    <div class="accordion-item">
      <div class="accordion-item-header">
        ¿Que es NAG?        
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          NAG que significa "New Academic Generation"es una pagina creado por estudiantes del "Centro Universitario de Valladolid [CUV] la cual su objetivo principal es de poder administrar los datos de la escuela, cuenta conmultiples caracteristicas que podran facilitar la manera de almacenar los datos que este admita...          
        <img src="../img/naglogo.PNG" class="img-modify"></img>
        </div>  
      </div>
    </div>

     <div class="accordion-item">
      <div class="accordion-item-header">
        ¿Cómo ingresar nuevos usuarios?        
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
        <ol class="listado">
          <li>Se dirigirá en "Configuracion de usuario".</li>
          <img src="../img/22/3.PNG" class="img-modify"></img>
          <li>Donde buscará registros de Usuario y le dará clic (Nuevo Usuario).</li>
          <img src="../img/22/3.1.PNG" class="img-modify"></img>
          <li>Llenara los cuadros de datos solicitados y obligatorios que se requieran.</li>
          <li>Seguidamente le dará en SUMIT.</li>
          <img src="../img/22/4.1.PNG" class="img-modify"></img>
          
        </ol>
        </div>  
          </div>
        </div>


     <div class="accordion-item">
          <div class="accordion-item-header">
            ¿Cómo Insertar los datos de la institución? 
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
            <ol class="listado">
              <li>Se dirigirá en el apartado de Institucion y se desplaza hasta buscar "Datos de la institucion"</li>
              <img src="../img/6.PNG" class="img-modify"></img>
              <li>Llenar los cuadros de datos solicitados y obligatorios.</li>
              <li>Para guardar los datos darle clic en SUMIT.</li>
              <img src="../img/6.1.PNG" class="img-modify"></img>
            </ol>
            </div>  
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-item-header">
            ¿Cómo añadir una nueva generación?    
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
            <ol class="listado">
              <li>Se dirigirá en "Generaciones".</li>
              <img src="../img/22/5.PNG" class="img-modify"></img>
              <li>Donde se desplazara hasta bajo y buscará "Agregar una nueva generación".</li>
              <img src="../img/22/6.PNG" class="img-modify"></img>
              <li>Se indicara el inicio y debajo de él, el final.</li>
              <img src="../img/22/6.1.PNG" class="img-modify"></img>
              <li>Seguidamente seleccionara o agregara el ciclo de la generación.</li>
              <li>Dar click en el boton "Guardara los cambios".</li>
              <img src="../img/22/6.2.PNG" class="img-modify"></img>
            </ol>
            </div>  
          </div>
        </div>




    <div class="accordion-item">
      <div class="accordion-item-header">
        ¿Cómo insertar nuevos ciclos?        
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
        <ol class="listado">
          <li>Se dirigirá en el apartado de "Ciclos" y se busca el apartado de "Agregar un ciclo nuevo".</li>
          <img src="../img/22/1.PNG" class="img-modify"></img>
          <li>Buscará ciclos nuevos.</li>
          <li>Ingresara en el primer recuadro el inicio del ciclo y en el segundo el término del ciclo.</li>
          <img src="../img/22/1.1.PNG" class="img-modify"></img>
          <li>Presione guardar cambios.</li>
          <img src="../img/22/1.2.PNG" class="img-modify"></img>
          <li>En la parte inferior podrá ver los ciclos guardados.</li>
        </ol>
        </div>  
      </div>
    </div>

    
        

       

  <div class="accordion-item">
          <div class="accordion-item-header">
            ¿Cómo agregar licenciaturas nuevas?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
            <ol class="listado">
              <li>Se dirigirá en la parte de agregar licenciaturas y se buscara "Agregar licenciatura".</li>
              <img src="../img/33/1.PNG" class="img-modify"></img>
              <li>Insertará el nombre de la licenciatura.</li>
              <img src="../img/33/1.1.PNG" class="img-modify"></img>
              <li>Seguidamente le dará clic en el botón de agregar.</li>
              <img src="../img/33/1.2.1.PNG" class="img-modify"></img>
              <li>Al agregarse, se mostrará la licenciatura en la parte derecha. </li>
              <img src="../img/33/1.2.2.PNG" class="img-modify"></img>
              <li>Si desea editar o eliminar la licenciatura en la parte de la derecha están los campos de editar y eliminar.</li>
              <img src="../img/33/1.2.3.PNG" class="img-modify"></img>
            </ol>
            </div>  
          </div>
        </div>
      </div>
  </div>

       
   

  
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>
