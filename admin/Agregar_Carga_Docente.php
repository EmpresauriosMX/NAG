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
            <h1 class="m-0 text-dark">Agregar la carga docente de juan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <img src="../img/users.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-footer text-center">
                           juan
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Datos</div>
                        </div>
                        <div class="card-body"> <!--contenido de los datos-->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                   <div class="row">
                                       <div class="col-md-6">licenciatura</div>
                                       <div class="col-md-6">
                                        <div class="card-text">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">Sistemas</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div>
                                        </div>
                                       </div>
                                   </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6">Periodo</div>
                                        <div class="col-md-6">
                                         <div class="card-text">
                                             <div class="btn-group">
                                                 <button type="button" class="btn btn-primary">6</button>
                                                 <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="sr-only">Toggle Dropdown</span>
                                                 </button>
                                                 <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Action</a>
                                                   <a class="dropdown-item" href="#">Another action</a>
                                                   <a class="dropdown-item" href="#">Something else here</a>
                                                   <div class="dropdown-divider"></div>
                                                   <a class="dropdown-item" href="#">Separated link</a>
                                                 </div>
                                               </div>
                                         </div>
                                        </div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6">Materia</div>
                                        <div class="col-md-6">
                                         <div class="card-text">
                                             <div class="btn-group">
                                                 <button type="button" class="btn btn-primary">Ingles</button>
                                                 <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="sr-only">Toggle Dropdown</span>
                                                 </button>
                                                 <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Action</a>
                                                   <a class="dropdown-item" href="#">Another action</a>
                                                   <a class="dropdown-item" href="#">Something else here</a>
                                                   <div class="dropdown-divider"></div>
                                                   <a class="dropdown-item" href="#">Separated link</a>
                                                 </div>
                                               </div>
                                         </div>
                                        </div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6">Horas</div>
                                        <div class="col-md-6">
                                         <div class="card-text">
                                             <div class="btn-group">
                                                 <button type="button" class="btn btn-primary">1</button>
                                                 <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="sr-only">Toggle Dropdown</span>
                                                 </button>
                                                 <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Action</a>
                                                   <a class="dropdown-item" href="#">Another action</a>
                                                   <a class="dropdown-item" href="#">Something else here</a>
                                                   <div class="dropdown-divider"></div>
                                                   <a class="dropdown-item" href="#">Separated link</a>
                                                 </div>
                                               </div>
                                         </div>
                                        </div>
                                    </div>
                                 </li>
                              </ul>
                        </div>
                        <div class="card-footer"> <!--conteido del footer-->
                                <button class=" btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
 <!--contenido de abajo de la carga docente-->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Cargas Asignadas o en curso</div>
                </div>
                <div class="card-body text-center">
                    <table class="table table-bordered table-responsive-md">
                        <tr>
                            <th>licenciatura</th>
                            <th>Periodo</th>
                            <th>Materia</th>
                            <th>Horas</th>
                            <th>Horas sin asignar</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                           <td>Contabilidad</td>
                           <td>3</td>
                           <td>Finanzas de mexico</td>
                           <td>10 hrs</td>
                           <td>8 hrs</td>
                           <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-primary">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                                </div>
                           </td>
                        </tr>
                        <tr>
                            <td>Contabilidad</td>
                            <td>3</td>
                            <td>Finanzas de mexico</td>
                            <td>10 hrs</td>
                            <td>8 hrs</td>
                            <td>
                             <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                 <button type="button" class="btn btn-primary">Editar</button>
                                 <button type="button" class="btn btn-danger">Eliminar</button>
                                 </div>
                            </td>
                         </tr>
                         <tr>
                            <td>Contabilidad</td>
                            <td>3</td>
                            <td>Finanzas de mexico</td>
                            <td>10 hrs</td>
                            <td>8 hrs</td>
                            <td>
                             <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                 <button type="button" class="btn btn-primary">Editar</button>
                                 <button type="button" class="btn btn-danger">Eliminar</button>
                                 </div>
                            </td>
                         </tr>
                         <tr>
                            <td>Contabilidad</td>
                            <td>3</td>
                            <td>Finanzas de mexico</td>
                            <td>10 hrs</td>
                            <td>8 hrs</td>
                            <td>
                             <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                 <button type="button" class="btn btn-primary">Editar</button>
                                 <button type="button" class="btn btn-danger">Eliminar</button>
                                 </div>
                            </td>
                         </tr>
                         <tr>
                            <td>Contabilidad</td>
                            <td>3</td>
                            <td>Finanzas de mexico</td>
                            <td>10 hrs</td>
                            <td>8 hrs</td>
                            <td>
                             <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                 <button type="button" class="btn btn-primary">Editar</button>
                                 <button type="button" class="btn btn-danger">Eliminar</button>
                                 </div>
                            </td>
                         </tr>
                         <tr>
                            <td>Contabilidad</td>
                            <td>3</td>
                            <td>Finanzas de mexico</td>
                            <td>10 hrs</td>
                            <td>8 hrs</td>
                            <td>
                             <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                 <button type="button" class="btn btn-primary">Editar</button>
                                 <button type="button" class="btn btn-danger">Eliminar</button>
                                 </div>
                            </td>
                         </tr>
                    </table>
                   <!-- <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-primary">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                                </div>
                        </div>
                    </div>-->
                </div>
            </div>

      </div><!-- /.container-fluid -->
    </section>
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
