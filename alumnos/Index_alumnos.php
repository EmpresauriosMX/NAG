<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    // Definir archivo para cachear (puede ser .php también)
	$archivoCache = '../cache/alumnos-'.$pagina.'.html';
	// Cuanto tiempo deberá estar este archivo almacenado
	$tiempo = 36000;
	// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
	if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
   	include($archivoCache);
    	exit;
	}
	// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
	ob_start();
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
include("../php/conexion.php");
$link=conectarse();
session_start();
$us=$_SESSION["user"];
$qry = mysqli_query($link,"select * from usuarios where ID_Usuario = '$us'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($qry);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NAG | Alumnos</title>
  <!--Estilo body-->
  <link rel="stylesheet" href="estilo.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../img/naglogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">New Academic Generation</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Opciones de menu -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="asignaturas.php" class="nav-link">Asignaturas</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="Calificaciones.php" class="nav-link">Calificaciones</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="Horario.php" class="nav-link">Horarios</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="cambiar_contra.php" class="nav-link">Perfil</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
          <!--Opciones de perfil-->
          <!--<li class="nav-item dropdown"> -->
            <!--<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perfil</a>-->
            <!--<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">-->
              <!--<li><a href="#" class="dropdown-item">Editar perfil </a></li>-->
              <!--<li class="dropdown-divider"></li>-->
              <!--<li><a href="#" class="dropdown-item">Cambiar contraseña</a></li>-->
            <!--</ul>-->
         <!-- </li>-->
          <!--fin opciones perfil-->
          
          
          <!--Imagen de usuario y nombre usuario-->
          <li class="nav-item">
          <a href="#">
            <img src="../dist/img/user1-128x128.jpg"  class="brand-image img-circle" style="opacity: .8">
            <?php 
            /*echo
          '<span class="brand-text"> '."Alumno: ".$row['Nombre']. " " .$row['ApellidoPat'].'</span>';*/
          ?>
          <span class="brand-text">Alumno: Daniel</span>
          </a>
          </li>
          <!--Fin imagen usuario-->

        </ul>
      </div>
      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div>
  </nav>
<!--Fin de Navbar-->

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div  class="container">
          
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <?php
        
        $result=mysqli_query($link,"select usuarios.Nombre,usuarios.ApellidoPat,usuarios.ApellidoMat,usuarios.ID_Usuario, alumnos.Matricula from usuarios,alumnos where usuarios.ID_Usuario=alumnos.ID_Usuario");
        $total = mysqli_num_rows($result);
        while($row=mysqli_fetch_array($result)){
          echo' ';
        } ?>
        
        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--Perfil de Usuario-->
        <div class="row">
            <div class="col-md-5">
                
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">Alumno: Daniel Gonzalez Mejia</h3>
                    <h5 class="widget-user-desc">Matricula: 85000849652</h5>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                  </div>
                  <div class="card-footer">
                    <div class="row">

                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <span class="description-text">Promedio</span>
                          <h5 class="description-header">9.5</h5>
                        </div>
                      </div>
                      
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <span class="description-text">Licenciatura</span>
                          <h5 class="description-header">Sistemas Computacionales</h5>
                        </div>
                        
                      </div>
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                          <span class="description-text">Cuatrimestre</span>
                          <h5 class="description-header">6°</h5>
                        </div>
                        
                      </div>

                     

                    </div>
                  </div>


                  
                  <!--Barra de progreso-->
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">66%</div>
                  </div>
                  <!--Fin barra de progreso-->
                

                </div>
                
              </div>

             




              <!--Lista de Tareas-->
              <div class="col-md-7">
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Lista de pendientes
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>

             
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">

                  <li>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Hacer tarea de Fundamentos</span>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>


                  <li>                   
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Terminar ensayo de Taller de Responsabilidad</span>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>


                  <li>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Estudiar para exposision de redes</span>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>


                  <li>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Hacer linea del tiempo de Base de Datos</span>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>


                  <li>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Revisar mis calificaciones</span>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>


                  <li>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Corregir codigo de proyecto</span>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>

                  
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            </div>
            <!--Fin Lista de tareas-->
        </div>
        <!-- Fin del row -->


          
        


        <br>
        <!--Inicio de Tabla de Horario-->
       
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Horario del Cuatrimestre: 6, Parcial: 3</h3>
                            </div>
                            <div class="card-body">
                              <table class="table table-bordered">
                                <thead>
                                  <tr align="center">
                                    <th>Hora</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Domingo</th>
                                  </tr>
                                </thead>
        
                                <tbody>
                                  <tr align="center">
                                    <td style="width: 90px">2:00-3:00</td>
                                    <td>Programacion de Sisteas</td>
                                    <td>Fundamentos de Desarrollo de Sistemas</td>
                                    <td>Fundamentos de Desarrollo de Sistemas</td>
                                    <td>Fundamentos de Desarrollo de Sistemas</td>
                                    <td>Taller de Responsabilidad Social</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>
        
                                  <tr align="center">
                                    <td style="width: 90px">3:00-4:00</td>
                                    <td>Programacion de Sisteas</td>
                                    <td>Fundamentos de Desarrollo de Sistemas</td>
                                    <td>Fundamentos de Desarrollo de Sistemas</td>
                                    <td>Fundamentos de Desarrollo de Sistemas</td>
                                    <td>Taller de Responsabilidad Social</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>

                                  <tr align="center">
                                    <td style="width: 90px">4:00-5:00</td>
                                    <td>Interfaces</td>
                                    <td>Intercaces</td>
                                    <td>Programacion de Desarrollo de Sistemas</td>
                                    <td>Simulación</td>
                                    <td>Taller de Base de Datos</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>

                                  <tr align="center">
                                    <td style="width: 90px">5:30-6:30</td>
                                    <td>Interfaces</td>
                                    <td>Intercaces</td>
                                    <td>Simulación</td>
                                    <td>Simulación</td>
                                    <td>Taller de Base de Datos</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>

                                  <tr align="center">
                                    <td style="width: 90px">6:30-7:30</td>
                                    <td>Redes de Computadoras</td>
                                    <td>Taller de Base de Datos</td>
                                    <td>Simulación</td>
                                    <td>Redes de Computadoras</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>

                                  <tr align="center">
                                    <td style="width: 90px">7:30-8:30</td>
                                    <td>Redes de Computadoras</td>
                                    <td>Taller de Base de Datos</td>
                                    <td>Simulación</td>
                                    <td>Redes de Computadoras</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>

                                  <tr align="center">
                                    <td style="width: 90px">8:30-9:30</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                    <td>~~~~~~</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
        <!--Fin de tabla de horario-->




        <!--Row de estadisticas-->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Parcial #
                </h2>
                
                <div class="btn-group">
                  <button type="button" class="btn btn-default">Parcial</button>
                  <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">3</a>
                  </div>
              </div>
              <h1></h1>
              <br>
                 <!--Barra de progreso-->
                 <div class="progress" style="height: 20px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
                <!--Fin barra de progreso-->



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                  <!--En value sera en donde se cambia el promedio-->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="85" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">Sistemas Distribuidos</div>
                  </div>

                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="95" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">Base de Datos</div>
                  </div>

                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="92" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">Redes de Computadoras</div>
                  </div>

                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="88" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">Taller de Responsabilidad</div>
                  </div>
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="88" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">Taller de Responsabilidad</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!--Fin del row de estadisticas-->

  
    

        </div>
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>





<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
?>
</body>
</html>
