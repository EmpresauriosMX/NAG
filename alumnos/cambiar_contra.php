<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

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
            <a href="#" class="nav-link">Asignaturas</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Calificaciones</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Horarios</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Perfil</a>
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
              <!--<li><a href="#" class="dropdown-item">Cambiar contraseña</a></li>-->
            <!--</ul>-->
         <!-- </li>-->
          <!--fin opciones perfil-->
          
          
          <!--Imagen de usuario y nombre usuario-->
          <li class="nav-item">
          <a href="#">
            <img src="../dist/img/avatar4.png"  class="brand-image img-circle" style="opacity: .8">
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
            <h1 class="m-0 text-dark"> Actualización de información </h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <main class="dividir-dos">
        <div class="perfil">
             <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="../dist/img/user4-128x128.jpg"
                        alt="User profile picture">
                        </div>
        
                        <h3 class="profile-username text-center">Nina Quedé</h3>
        
                        <p class="text-muted text-center">JUCE000118HQRRSMA1</p>
                        <p class="text-muted text-center">Software Engineer</p>
        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Cuatrimestre</b> <a class="float-right">6°</a>
                            </li>
                            <li class="list-group-item">
                                <b>Dirección</b> <a class="float-right">Calle 109 No.220</a>
                            </li>
                            <li class="list-group-item">
                                <b>Teléfono</b> <a class="float-right">9871153301</a>
                            </li>
                            <li class="list-group-item">
                                <b>Género</b> <a class="float-right">F</a>
                            </li>
                            <li class="list-group-item">
                                <b>Teléfono</b> <a class="float-right">quedé@hotmail.com</a>
                            </li>
                        </ul>
        
                        <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
                        </div>
                        <!-- /.card-body -->
            </div>
                  <!-- /.card -->
        </div>
    <div class="cambiar-datos">
        <div class="content">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">


                <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="card card-info">
                        <div class="card-header">
                        <h3 class="card-title">Cambiar Contraseña: </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-5 col-form-label">Actual Contraseña:</label>
                                <div class="col-sm-6">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-5 col-form-label">Nueva Contraseña:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-5 col-form-label">Confirmar Contraseña:</label>
                                <div class="col-sm-6">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Cambiar Contraseña</button>
                        </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                </div>
            </div>
            <!-- /.col-md-11 -->

            <div class="col-lg-6">

                <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="card card-info">
                        <div class="card-header">
                        <h3 class="card-title">Cambiar correo y número de teléfono: </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label">Correo: </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3">
                            </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-5 col-form-label">Teléfono: </label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" >
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Guardar cambios</button>
                        </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
                </div>
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