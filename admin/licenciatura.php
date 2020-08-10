<?php
  include '../inc/funciones/funciones_admin_licenciaturas.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> licenciatura | Dashboard</title>
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

  <!-- inicio seccion de edicion-->

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Licenciatura y Materias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
    <div class="row">
        <div class="col-2">  </div>
        <div class="col-3">Nombre</div>
        <div class="col-md-5">
          <input type="text" class="form-control" id="nombres" placeholder="Escribe el Nombre">
          </div>
    </div>
<br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-3">Numero de periodos</div>
        <div class="col-3">

        <div class="btn-group" >
                    <button type="button" class="btn btn-default">periodo</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false"></button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" href="#">1</a>
                      <a class="dropdown-item" href="#">2 </a>
                      <a class="dropdown-item" href="#">3  </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">4 </a>
                    </div>
                  </div>

        </div>

      </div>
    </section>

    <div class="container-fluid"> 
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex p-0">
                <ul class="nav nav-pills ml-auto p-2" id = "submenu" name = "submenu">
                 <?php
                    $proyecto = obtenerProyectos();
                      foreach ($proyecto as $proyectos): ?>
                        <li class="nav-item"><a class="nav-link" href="#tab_<?php echo $proyectos['ID_Lincenciatura'] ?>" data-toggle="tab"><?php echo $proyectos['NombreLic'] ?></a></li>  
                    <?php endforeach; ?>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="contenedor_licenciaturas" name="contenedor_licenciaturas">
                  <?php
                    $proyecto = obtenerProyectos();
                      foreach ($proyecto as $proyectos): ?>

                      <div class="tab-pane" id="tab_<?php echo $proyectos['ID_Lincenciatura'] ?>">
                        <?php echo $proyectos['NombreLic']; 
                              echo $proyectos['NombreLic'];
                              echo $proyectos['NombreLic'];   
                        ?>
                      <div id="materias" name="materias">
                      <input name="Nombre_materia<?php echo $proyectos['ID_Lincenciatura']?>" id="Nombre_Materia<?php echo $proyectos['ID_Lincenciatura']?>">
                      <input type="hidden" id="id_lic" value="otro">
                            <button type="button" class="btn btn-block btn-info" onclick =AgregarMateria(<?php echo $proyectos['ID_Lincenciatura']?>)>Agregar materia</button>
                      </div>
                      </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
                          <!-- inicio tablas -->
        <div class="container-fluid">
  <h1>Licenciaturas</h1>
  <div class="row" style="background-color:white;">
    <div class="col-md-6">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar licenciatura</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre licenciatura</label>
                    <input class="form-control" placeholder="Ingrese un nombre" name="NombreLic" id="NombreLic">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <div id="formulario">
    <button type="button" class="btn btn-primary">Agregar</button>
    </div>
                </div>
              </form>
            </div>
    </div>

    
    <div class="col-xs-12 col-sm-6 col-lg-6">
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de Licenciaturas</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>licenciatura</th>
                    <th>opciones</th>
                  </tr>
                  </thead>
                  <tbody id="submenu1" name ="submenu1">
                  <?php
                    $proyecto = obtenerProyectos();
                      foreach ($proyecto as $proyectos): ?>
                      <tr>
                      <td><?php echo $proyectos['ID_Lincenciatura'] ?></td>
                      <td><?php echo $proyectos['NombreLic'] ?></td>
                      <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-sm">Editar</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Eliminar</button>
                      </div>
                      </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
  </div>
</div>



<!--seccion licenciatura activa -->
<div class="container-fluid">
  <h1>Licenciaturas activas</h1>
  <div class="row" style="background-color:white;">
    <div class="col-md-6">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">formulario licenciatura activa</h3>
              </div>
              
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre licenciatura</label>
                    
                    <input class="form-control" placeholder="Ingrese un nombre" name="NombreLic" id="NombreLic">
                   
                    <div class="btn-group">
                    <button type="button" class="btn btn-default btn-flat">Action</button>
                    <button type="button" class="btn btn-default btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                    <?php
                    $proyecto = obtenerProyectos();
                      foreach ($proyecto as $proyectos): ?>
                       <a class="dropdown-item" onclick =LicenciaturaActiva(<?php echo $proyectos['ID_Lincenciatura']?>)><?php echo $proyectos['NombreLic'] ?></a>
                    <?php endforeach; ?>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <div id="formulario">
    <button type="button" class="btn btn-primary">Agregar</button>
    </div>
                </div>
              </form>
            </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-6">
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">Licenciaturas Activas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>licenciatura</th>
                    <th>opciones</th>
                  </tr>
                  </thead>
                  <tbody id="tabla_lic_activa" name="tabla_lic_activa">
                  <?php
                    $LicActiva = obtenerLicActiva();
                      foreach ($LicActiva as $LicActiva_S): ?>
                      <tr>
                      <td><?php echo $LicActiva_S['ID_LicActiva'] ?> </td>
                      <td><?php echo $LicActiva_S['NombreLic']?> <?php echo $LicActiva_S['ID_LicActiva']?></td>
                      <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-sm">Editar</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Eliminar</button>
                      </div>
                      </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>licenciaturas</th>
                    <th>opciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
  </div>
</div>

 <!--fin seccion de edicion --> 
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
<!--  seccion de scriptos y footer-->
<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>
<script src="../admin/funciones js/licenciaturas.js"></script>

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
<script src="../dist/js/pages/dashboard2.js"></script>


<!--tablas-->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
