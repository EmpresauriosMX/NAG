<?php
include("../php/conexion.php");
$link=conectarse();
session_start();
$us=$_SESSION["user"];
$qry = mysqli_query($link,"select * from usuarios where ID_Usuario = '$us'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($qry);
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

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="indes.php" class="brand-link">
      <img src="../img/naglogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrador</span>
    </a>
    <!-- Sidebar -->
<<<<<<< HEAD
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <?php echo
          '<a href="#" class="d-block"> '.$row['Nombre']. " " .$row['ApellidoPat'].'</a>';
          ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Estadisticas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estudiantes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Docentes</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!--ALUMNOS-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Estudiantes
                <i class="fas fa-angle-left right"></i>
                <!--span class="badge badge-info right">6</span-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editar alumnos</p>
                </a>
              </li>
            </ul>
          </li>
          <!--DOCENTES-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Docentes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver docentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar docente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editar docente</p>
                </a>
              </li>
            </ul>
          </li>
          <!--ADMINS-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Administradores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver administradores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar administradores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editar administradores</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">ESTE CICLO</li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-circle-notch"></i>
              <p>
                Ciclos
                <span class="right badge badge-danger">No cambiar</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Generaciones
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Asignaturas
                <!--span class="badge badge-info right">2</span-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Grupos
              </p>
            </a>
          </li>
          
          <!--li class="nav-header">MISCELLANEOUS</li-->
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-scroll"></i>
              <p>Licenciaturas</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>Institución</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Configuracion de usuario</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
=======
    <?php
      include 'plantilla_barra_izquierda.php';
    ?>
>>>>>>> e5278cd3bb292f89c671a0d51a6640448edb2cb7
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <?php echo
          '<h1 class="m-0 text-dark"> '."Bienvenido " .$row['Nombre']. " " .$row['ApellidoPat'].'</h1>';
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
        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar Usuario</h3>
              </div>

              <form action="../php/agg.php" method="post">
                
                <div class="card-body">
                     <!-- select 
                <div class="col-sm-3">

                      <div class="form-group">
                        <label>Acción</label>
                        <select class="form-control">
                          <option value="N">Nuevo usuario</option>
                          <option value="E">Editar Usuario</option>
                        </select>
                      </div>
                    </div>
-->
				<div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Tipo de cuenta</label>
                        <select class="form-control" id="tc" name="tc" required="required">
  						<option value="D">Administrador</option>
						<option value="M">Maestro</option>
  						<option value="A">Alumno</option>
                        </select>
                      </div>
                 </div>

                 <!--- <div class="form-group">
                    <label for="exampleInputEmail1">ID del Usuario</label>
                    <input type="text" class="form-control" id="idusuario" name="" placeholder="Escribe el ID del Usuario">
                  </div>
				--->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nom" required="required" placeholder="Escribe el Nombre">
                  </div>
                 
                  <div class="form-group">
                    <label for="ap">Apellido Paterno</label>
                    <input type="text" class="form-control" id="ap" name="ap" required="required" placeholder="Escribe el Apellido Paterno">
                  </div>

                  <div class="form-group">
                    <label for="ap">Apellido Materno</label>
                    <input type="text" class="form-control" id="am" name="am" required="required" placeholder="Escribe el Apellido Materno">
                  </div>
					
                  <div class="form-group">
                    <label for="ap">Dirección</label>
                    <input type="text" class="form-control" id="dir" name="dir" required="required" placeholder="Escribe tu direccion">
                  </div>
					
                <!--  <div class="form-group">
                    <label for="exampleInputPassword1">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nombreusuario" placeholder="Escribe el Nombre del usuario">
                  </div>

                  <label for="exampleInputPassword1">Correo</label>
                  <div class="col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" id="correo" class="form-control" placeholder="Escribe el Correo" data-mask>
                  </div>
                  </div>
				-->	
                  <label for="exampleInputPassword1">Telefono</label>
                  <div class="col-md-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" id="tel" name="tel" required="required" class="form-control" data-inputmask='"mask": "(999) 999-9999"'  data-mask>
                  </div>
                  </div>

                  <div class="col-sm-3">
                      <!-- select -->
                 <div class="form-group">
                        <label>Genero</label>
                        <select class="form-control" id="gen" name="gen" required="required">
  						<option value="Masculino">Masculino</option>
  						<option value="Femenino">Femenino</option>
                        </select>
               		 </div>
                </div>
				 <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Estatus de cuenta</label>
                        <select class="form-control" id="act" name="act" required="required">
  						<option value="Activo">Activa</option>
 						<option value="Inactivo">Inactiva</option>
                        </select>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
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
