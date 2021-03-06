<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NAG | Asignaturas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="estilo_cambios.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="Index_alumnos.php" class="navbar-brand">
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
            <a href="#" class="nav-link">Asignaturas</a>
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
          <!--Opciones de perfil-->
          <!--<li class="nav-item dropdown"> -->
            <!--<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perfil</a>-->
            <!--<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">-->
              <!--<li><a href="#" class="dropdown-item">Editar perfil </a></li>-->
              <!--<li class="dropdown-divider"></li>-->
              <!--<li><a href="#" class="dropdown-item">Cambiar contrase??a</a></li>-->
            <!--</ul>-->
         <!-- </li>-->
          <!--fin opciones perfil-->
          
          
          <!--Imagen de usuario y nombre usuario-->
          <li class="nav-item">
          <a href="#">
            <img src="../dist/img/user1-128x128.jpg"  class="brand-image img-circle" style="opacity: .8">
            <span class="brand-text">Alumno: ID_74</span>
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
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Asignaturas </h1>
            
          </div><!-- /.col -->
          <!-- Lista de cuatrimestres -->
            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                <label>Selecci??n de Cuatrimestre</label>
                <select class="form-control">
                  
                </select>
                </div>
            </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <main class="dividir-dos">
        
    <div class="cambiar-datos">
        <div class="content">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">

                <div class="card card-primary card-outline asignaturas">
                    <div class="card-body">
                        <h1>Cuatrimestre 6</h1>

                        <div class="card card-solid">
                            <div class="card-body pb-0">
                              <div class="row d-flex align-items-stretch">
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                  <div class="card bg-light">
                                    <div class="card-header text-muted border-bottom-0 perfil_profes">
                                      Informaci??n
                                    </div>
                                    <div class="card-body pt-0 perfil_profes">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead"><b>Guadalupe Puc Caamal</b></h2>
                                          <p class="text-muted text-sm"><b>Materia: </b> Programaci??n en Sistemas Distribuidos </p>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer perfil_profes">
                                      <div class="text-right">
                                        <h3>98.0</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                      <div class="card-header text-muted border-bottom-0 perfil_profes">
                                        Informaci??n
                                      </div>
                                      <div class="card-body pt-0 perfil_profes">
                                        <div class="row">
                                          <div class="col-7">
                                            <h2 class="lead"><b>Gabriela del R. Braga Manzano</b></h2>
                                            <p class="text-muted text-sm"><b>Materia: </b> Fundamentos de Desarrollo de Sistemas </p>
                                          </div>
                                          <div class="col-5 text-center">
                                            <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer perfil_profes">
                                        <div class="text-right">
                                          <h3>98.0</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                      <div class="card-header text-muted border-bottom-0 perfil_profes">
                                        Informaci??n
                                      </div>
                                      <div class="card-body pt-0 perfil_profes">
                                        <div class="row">
                                          <div class="col-7">
                                            <h2 class="lead"><b>Juan Carlos Cabello Contreras</b></h2>
                                            <p class="text-muted text-sm"><b>Materia: </b> Simulaci??n </p>
                                          </div>
                                          <div class="col-5 text-center">
                                            <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer perfil_profes">
                                        <div class="text-right">
                                          <h3>98.0</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                      <div class="card-header text-muted border-bottom-0 perfil_profes">
                                        Informaci??n
                                      </div>
                                      <div class="card-body pt-0 perfil_profes">
                                        <div class="row">
                                          <div class="col-7">
                                            <h2 class="lead"><b>Mauricio Pech Chan</b></h2>
                                            <p class="text-muted text-sm"><b>Materia: </b> Redes de Computadora </p>
                                          </div>
                                          <div class="col-5 text-center">
                                            <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer perfil_profes">
                                        <div class="text-right">
                                          <h3>98.0</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                      <div class="card-header text-muted border-bottom-0 perfil_profes">
                                        Informaci??n
                                      </div>
                                      <div class="card-body pt-0 perfil_profes">
                                        <div class="row">
                                          <div class="col-7">
                                            <h2 class="lead"><b>Lorenzo Balam Chay</b></h2>
                                            <p class="text-muted text-sm"><b>Materia: </b> Taller de Base de Datos </p>
                                          </div>
                                          <div class="col-5 text-center">
                                            <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer perfil_profes">
                                        <div class="text-right">
                                          <h3>98.0</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch perfil_tamano">
                                    <div class="card bg-light">
                                      <div class="card-header text-muted border-bottom-0 perfil_profes">
                                        Informaci??n
                                      </div>
                                      <div class="card-body pt-0 perfil_profes">
                                        <div class="row">
                                          <div class="col-7">
                                            <h2 class="lead"><b>Miguel Angel Garrido Be</b></h2>
                                            <p class="text-muted text-sm"><b>Materia: </b> Taller de Base de Datos </p>
                                          </div>
                                          <div class="col-5 text-center">
                                            <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer perfil_profes">
                                        <div class="text-right">
                                          <h3>98.0</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                      <div class="card-header text-muted border-bottom-0 perfil_profes">
                                        Informaci??n
                                      </div>
                                      <div class="card-body pt-0 perfil_profes">
                                        <div class="row">
                                          <div class="col-7">
                                            <h2 class="lead"><b>Yanin Abigail Romero Tuz</b></h2>
                                            <p class="text-muted text-sm"><b>Materia: </b> Taller de Responsabilidad Social VI </p>
                                          </div>
                                          <div class="col-5 text-center">
                                            <img src="../dist/img/user.png" alt="user-avatar" class="img-circle img-fluid">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer perfil_profes">
                                        <div class="text-right">
                                          <h3>98.0</h3>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  


                              </div>
                            </div>
                            <!-- /.card-body -->

                          </div>
                          <!-- /.card -->
                    </div>
                </div>


            </div>
            <!-- /.col-md-11 -->

            <div class="col-lg-6">

                
            </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content -->
   </main>
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
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">NAG</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>