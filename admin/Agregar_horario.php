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
            <h1 class="m-0 text-dark">Horario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
          <div class="row">  <!-- espaciado del contenedor padre-->
            <div	class="col-lg-10 offset-lg-1"> <!-- ajuste del contenedor padre-->
                <div class="card">
                    <div class="card-header"> Agregar Horario</div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="row">
                                <div class="col-md-2">
                                    <div	class="dropdown">
                                        <button	class="btn	btn-secondary	dropdown-toggle"	type="button"	id="dropdownMenuButt
                                on"	data-toggle="dropdown"	aria-haspopup="true"	aria-expanded="false">
                                                Licenciatura
                                        </button>
                                        <div	class="dropdown-menu"	aria-labelledby="dropdownMenuButton">
                                                <a	class="dropdown-item"	href="#">Sistemas</a>
                                                <a	class="dropdown-item"	href="#">Contabilidad </a>
                                                <a	class="dropdown-item"	href="#">Recursos Humanos</a>
                                        </div>
                                </div>
                                </div>
                                <div class="col-md-1">
                                    ------->
                                </div>
                                <div class="col-md-9">
                                    <div	class="dropdown">
                                        <button	class="btn	btn-secondary	dropdown-toggle"	type="button"	id="dropdownMenuButt
                                on"	data-toggle="dropdown"	aria-haspopup="true"	aria-expanded="false">
                                                periodo
                                        </button>
                                        <div	class="dropdown-menu"	aria-labelledby="dropdownMenuButton">
                                                <a	class="dropdown-item"	href="#">II</a>
                                                <a	class="dropdown-item"	href="#">IV</a>
                                                <a	class="dropdown-item"	href="#">VII</a>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="card">
                            <div class="card-header">
                                <h2>Horario De Sistemas</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-responsive-md">
                                    <tr align="center">
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                        <th>Miercoles</th>
                                        <th>Jueves</th>
                                        <th>Viernes</th>
                                    </tr>
                                    <tr align="center">
                                        <td><a href="" data-toggle="modal" data-target="#exampleModal"> Agregar</a> </td>
                                        <td><a href="">Agregar</a> </td>
                                            <td>algoritmos <br> 8:00 A.M - 8:30 A.M</td>
                                        <td><a href="">Agregar</a> </td>
                                        <td><a href="">Agregar</a> </td>
                                    </tr>
                                    <tr align="center">
                                        <td><a href="">Agregar</a> </td>
                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                           Agregar
                                          </button> </td>
                                        <td><a href="">Agregar</a> </td>
                                        <td>matematicas <br> 8:00 A.M - 8:30 A.M</td>
                                        <td><a href="">Agregar</a> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>matematicas <br> 8:00 A.M - 8:30 A.M</td>
                                        <td>matematicas <br> 8:00 A.M - 8:30 A.M</td>
                                        <td><a href="">Agregar</a> </td>
                                        <td align="center">ingles <br> 9:00 A.M - 10:30 A.M</td>
                                        <td><a href="">Agregar</a> </td>
                                    </tr>
                                    <tr align="center">
                                        <td><a href="">Agregar</a> </td>
                                        <td><a href="">Agregar</a> </td>
                                        <td>algoritmos <br> 8:00 A.M - 8:30 A.M</td>
                                        <td><a href="">Agregar</a> </td>
                                        <td><a href="">Agregar</a> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>pesca <br> 8:00 A.M - 8:30 A.M</td>
                                        <td><a href="">Agregar</a> </td>
                                        <td><a href="">Agregar</a> </td>
                                        <td><a href="">Agregar</a> </td>
                                        <td>ingles <br> 8:00 A.M - 8:30 A.M</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-text">
                                <div class="card-body">
                                      <div class="row">
                                        <div class="col-md"> <button type="button" class="btn btn-primary">Editar</button> </div>
                                        <div class="col-md-auto"><button type="button" class="btn btn-warning">Imprimir</button></div>
                                        <div class="col-md-auto"><button type="button" class="btn btn-danger">Eliminar</button></div>
                                      </div>
                                </div>
                            </div>
                        </div>
                          <!-- Modal -->
                          <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Asginacion de la materia</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3"><form>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Materia:</label>
                                              <div	class="dropdown">
                                                <button	class="btn	btn-secondary	dropdown-toggle"	type="button"	id="dropdownMenuButt
                                        on"	data-toggle="dropdown"	aria-haspopup="true"	aria-expanded="false">
                                                        Materia
                                                </button>
                                                <div	class="dropdown-menu"	aria-labelledby="dropdownMenuButton">
                                                        <a	class="dropdown-item"	href="#">Pesca</a>
                                                        <a	class="dropdown-item"	href="#">Matematicas</a>
                                                        <a	class="dropdown-item"	href="#">Ingles</a>
                                                </div>
                                        </div>
                                            </div>
                                          </form></div>
                                        <div class="col-md-4">
                                            <label for="message-text" class="col-form-label">Hora de comienzo:</label>
                                            <input>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="message-text" class="col-form-label">Hora de Finalizacion:</label>
                                            <input>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                              </div>
                            </div>
                          </div>
             </div>
                </div>    
      </div><!-- /.container-fluid -->
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
