<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <script language="javascript">
    function validar(){
      var nom=document.formescolar.nombreinstitucion.value;
      var clave=document.formescolar.claveinstitucion.value;
      var tipo=document.formescolar.tipoinstitucion.value;
      var desc=document.formescolar.descripcioninstitucion.value;
      var direc=document.formescolar.direccioninstitucion.value;
      var correo=document.formescolar.correoinst.value;
      var tel=document.formescolar.telefonoinst.value;

      //Comprobar campos completos
      if(nom!="" & clave!="" & tipo!="" & desc!="" & direc!="" & correo!="" & tel!=""){
        document.formescolar.submit();
        //alert("Paso a agde.php");
      }else{
        alert("Rellene todos los campos");
      }
      //Fin comprobar campos
    }
  </script>

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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="institucion.php" class="nav-link">Informacion de la Institución</a>
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

    
  <?php
  /*CONEXION A BD*/ 
  include("../inc/funciones/conexal.php");
  $link=Conectarse();
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <?php
               $result=mysqli_query($link,"select Puesto_laboral from administrador where ID_Admin=2");
               $total = mysqli_num_rows($result);
               while($row=mysqli_fetch_array($result)){
                   echo'
            <h1 class="m-0 text-dark">Bienvenido  '.$row["Puesto_laboral"].'</h1>
            ';
               }
            ?>
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
      
      <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de la Institución</h3>
              </div>

              <form name="formescolar" id="formescolar" data-parsley-validate class="form-horizontal form-label-left" method="get" action="agde.php" enctype="multipart/form-data">
                
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de institucion</label>
                    <input type="text" class="form-control" id="nombreinstitucion" name="nombreinstitucion" required="required" placeholder="Escribe el nombre de la Institución">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Clave</label>
                    <input type="text" class="form-control" id="claveinstitucion" name="claveinstitucion" required="required" placeholder="Escribe la clave de la institución">
                  </div>
                 
                  <div class="form-group">
                    <label for="ap">Tipo de institución</label>
                    <input type="text" class="form-control" id="tipoinstitucion" name="tipoinstitucion" required="required" placeholder="Escribe el Atipo de institución">
                  </div>

                  <div class="form-group">
                    <label for="ap">Descripción</label>
                    <input type="text" class="form-control" id="descripcioninstitucion" name="descripcioninstitucion" required="required" placeholder="Escribe la descripción de la institución">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <input type="text" class="form-control" id="direccioninstitucion" name="direccioninstitucion" required="required" placeholder="Escribe la direccion de la Institución">
                  </div>

                  
                  <label for="exampleInputPassword1">Correo</label>
                  <div class="col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" id="correoinst" name="correoinst" class="form-control" required="required" placeholder="Escribe el Correo" data-mask>
                  </div>
                  </div>

                  <label for="exampleInputPassword1">Telefono</label>
                  <div class="col-md-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" id="telefonoinst" name="telefonoinst" class="form-control" required="required" data-inputmask='"mask": "(999) 999-9999"' placeholder="(999) 999-9999"  data-mask>
                  </div>
                  </div>

                  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="enviar" onClick="validar()" class="btn btn-success">Guardar</button>
                </div>
              </form>
            </div>
        </div>
      </div>












      </div>
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
