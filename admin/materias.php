<?php
  include '../inc/funciones/funciones_admin_licenciaturas.php';
?>
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
  <link rel="stylesheet" href="../dist/css/sweetalert2.min.css">
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
            <h1 class="m-0 text-dark">Seccion De Materias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!------------------------------------------------------------------------inicio seccion de edicion -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
            <div class="card-body" style="background-color:white;">
            <h4>Licenciaturas En El Ciclo Activo</h4>
            <div class="row" >
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                <?php
                    $LicActiva = obtenerLicActiva_materias();
                      foreach ($LicActiva as $LicActiva_S): ?>
                       <a class="nav-link" id="vert-tabs-<?php echo $LicActiva_S['ID_LicActiva']?>-tab" data-toggle="pill" href="#vert-tabs-<?php echo $LicActiva_S['ID_LicActiva']?>" role="tab" aria-controls="vert-tabs-<?php echo $LicActiva_S['ID_LicActiva']?>" aria-selected="false"><?php echo $LicActiva_S['NombreLic']?></a>
                    <?php endforeach; ?>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                <?php
                    $LicActiva = obtenerLicActiva_materias();
                      foreach ($LicActiva as $LicActiva_S): ?>
                        <div class="tab-pane fade" id="vert-tabs-<?php echo $LicActiva_S['ID_LicActiva']?>" role="tabpanel" aria-labelledby="vert-tabs-<?php echo $LicActiva_S['ID_LicActiva']?>-tab">

                            <!----------------------INICIO periodos----------------------------------------------------->
                            <div class="card">
              <div class="card-header d-flex p-0">
                <ul class="nav nav-pills ml-auto p-2" id = "submenu" name = "submenu">
               
                  <?php
                    $generacion = Obtener_Generaciones($LicActiva_S['ID_Lincenciatura']);
                      foreach($generacion as $generaciones):?>
                        <li class="nav-item"><a class="nav-link" href="#tab_<?php echo $generaciones['ID_LicActiva'] ?>" data-toggle="tab"><?php echo $LicActiva_S['NombreLic'] ?> <?php echo $generaciones['id_periodo']?></a></li>  
                  <?php endforeach; ?>

                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="Contenedor_Materias" name="Contenedor_Materias">
                  <?php
                   $generacion = Obtener_Generaciones($LicActiva_S['ID_Lincenciatura']);
                   foreach($generacion as $generaciones):?>
                      <div class="tab-pane" id="tab_<?php echo $generaciones['ID_LicActiva'] ?>">
                      <br>
                      <input name="Nombre_materia<?php echo $generaciones['ID_LicActiva']?>" id="Nombre_Materia<?php echo $generaciones['ID_LicActiva']?>">
                      <input type="hidden" id="valor_de_licenciatura_activa_otro<?php echo $generaciones['ID_LicActiva']?>" value="<?php echo $generaciones['ID_Lincenciatura'] ?>">
                            <br>
                            <button type="button" class="btn btn-block btn-info" onclick =AgregarNuevaMateria(<?php echo $generaciones['ID_LicActiva']?>)>Agregar Materia</button>
                            <?php
                          $asignaturas = Obtener_Asignaturas($generaciones['ID_LicActiva']);
                          foreach($asignaturas as $asignatura):?>
                          <div id="campo-de-materia<?php echo $asignatura['ID_Asignatura']?>" name="campo-de-materia<?php echo $asignatura['ID_Asignatura']?>">
                              <br>
                              <?php echo $asignatura['Nombre_Asignatura']?>
                              <div class="btn-group col-5">
                              <input type="hidden" id="valor_de_licenciatura<?php echo $asignatura['ID_Asignatura']?>" value="<?php echo $generaciones['ID_Lincenciatura'] ?>">
                              <input type="hidden" id="valor_de_licenciatura_activa<?php echo $asignatura['ID_Asignatura']?>" value="<?php echo $generaciones['ID_LicActiva'] ?>">
                              <button type="button" class="btn btn-outline-primary btn-sm" onclick =editar_materias(<?php echo $asignatura['ID_Asignatura']?>)>Editar</button>
                              <button type="button" class="btn btn-outline-danger btn-sm" onclick =Eliminar_materias(<?php echo $asignatura['ID_Asignatura']?>)>Eliminar</button>
                              </div> <br>
                          </div>
                          <?php endforeach; ?>
                      </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>

                                <!--------------------------fin de generacion------------------------------------ -->
                  </div>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!----------------------------------------------------------------------- /.fin seccion de edicion -->
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
<!--Mis scripts -->
<script src="../admin/funciones js/licenciaturas.js"></script> 
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
<script src="../dist/js/sweetalert2.all.min.js"></script>
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
