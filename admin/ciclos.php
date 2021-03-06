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

  <!-- inicio --------------------- BARRA DE NAVEGACI??N IZQUIERDA------------->
  <?php
    include 'plantilla_barra_izquierda.php';
  ?>
  <!-- Fin --------------------- BARRA DE NAVEGACI??N IZQUIERDA------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6  ">
            <h1 class="m-0 text-dark mx-auto">Ciclos</h1>
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
        <div class="row" id="recarga_ciclos">
            <div class="col-md-12 col-lg-10 mx-auto col-s-12">
                <!----------------------------------------ESTE CICLO--------------------------------------------->
                <?php
                  include("../inc/funciones/conexal.php");
                  $link = Conectarse(); /*conexion a la bd*/
                  $result = mysqli_query($link, "SELECT * FROM `ciclo` WHERE estatus = 'activo'");
                  $hay_ciclo_activo = mysqli_num_rows($result);
                  $ciclo_actual=mysqli_fetch_array($result);
                  $checkBox = false;
                  if ($hay_ciclo_activo){
                    $checkBox = true;
                    echo'
                      <div class="card card-danger">
                          <div class="card-header">
                              <h3 class="card-title">Configuraci??n del ciclo actual</h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <h5>Ciclo actual: Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5>
                              <div class="actualizar_ciclo_actual">
                                <!-------FORMULARIO CICLO ACTUAL-------->
                                <form action="#" method="GET">
                                  <div class="form-group">
                                    <label>Periodo en rango de fechas:</label>
                                    <div class="row">
                                        <!--FECHA DE INICIO-->
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Fecha de inicio</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" value="'.$ciclo_actual["fecha_inicio"].'" id="fecha_i_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                              </div>
                                          </div>
                                        </div>
                                        <!--FECHA DE FIN-->
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Fecha de fin</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" value="'.$ciclo_actual["fecha_fin"].'" id="fecha_f_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <p style="color:red;"> Cambiar a ciclo inactivo </p>
                                  <p> Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y dem??s </p>
                                  <input type="checkbox" id="estado_ciclo_a" name="my-checkbox" checked="true" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                  <!--input type="hidden" id="id_ciclo_a" value="'.$ciclo_actual["ID_Ciclo"].'"-->
                                  <button type="button" onClick=actualizar_ciclo("'.$ciclo_actual["ID_Ciclo"].'") class="btn btn-danger float-right">Guardar Cambios</button>
                                </form>
                              </div>
                          </div>
                      </div>  
                    ';
                  }
                  //--------------------------------CICLO NUEVO--------------------------------
                  echo'
                  <!--Fin Este ciclo----->
                  <!-----------------------------------------AGREGAR CICLO NUEVO ------------------------------>
                  <div class="card card-success">
                      <div class="card-header">
                          <h3 class="card-title">Agregar un cliclo nuevo</h3>
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">';
                      if($hay_ciclo_activo){
                        echo' <h5>Ciclo actual: Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5>';
                      }
                      else{
                        echo '<h5><strong> No hay un ciclo actual </strong></h5>';
                      }
                          echo'
                          <!-- Date range -->
                          <!--------------------------------------- FORMULARIO DEL CICLO NUEVO --------------------------->
                          <div class="form">
                            <form action="#" method="GET" name="form_ciclo_nuevo">
                              <div class="form-group">
                                <label>Periodo. Elige el principio y fin del ciclo</label>
                                <div class="row">
                                  <!--FECHA DE INICIO-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label>Fecha de inicio</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" name="fecha_i_ciclo_n" id="fecha_i_ciclo_n" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>

                                    </div>
                                  </div>
                                  <!--FECHA DE FIN-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label>Fecha de fin</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" name="fecha_f_ciclo_n" id="fecha_f_ciclo_n" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p style="color:red;">1. Cambiar a ciclo activo </p>
                              <p> 1.1Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y dem??s campos. aplicar solo cuando haya finalizado el ciclo anterior </p>
                              <p style="color:red;">2. S??lo cambia a activo si no hay otro ciclo activo </p>
                              <p style="color:red;">3. Si hay un ciclo activo se guardar?? como ciclo futuro </p>
                              ';
                              /*
                              if(!$hay_ciclo_activo){
                                echo '<input type="checkbox"  name="my-checkbox" id="estado_ciclo_n" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                              }*/
                              echo'
                              <!----- ON OFF BUTTON --->
                              
                              <!-- / FORMULARIO DEL CICLO NUEVO -->
                            </form> 
                          </div>
                            <input type="hidden" value="'.$hay_ciclo_activo.'" id="ciclo_activo">
                            <button type="button" onClick=nuevo_ciclo("nuevo") class="btn btn-success float-right">Guardar Cambios</button>
                      </div>
                  </div>
                  ';
                ?>
                <!-- Fin de agregar ciclo ---------->
                
                      <!--- -------------------- TABLA DE CICLOS ---------------------->
                      <div class="card" id="">
                          <div class="card-header">
                          <h3 class="card-title">CICLOS FUTUROS</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th style="width: 10px">ID </th>
                                <th>Periodo</th>
                                <th>Acci??n</th>
                                <th>Estado</th  >
                              </tr>
                            </thead>
                            <tbody>
          <?php             //CICLO ACTUAL
                              $cont_ciclos = 0;
                              //Si existe un ciclo actual en la tabla de los ciclos se crea el primer elemento que es el ese ciclo
                              //en este se agrega el boton para encender o apagar el ciclo
                              if($hay_ciclo_activo){
                                $cont_ciclos += 1;
                                echo'
                                  <tr>
                                    <td>'.$cont_ciclos.'</td>
                                    <th>'.$ciclo_actual["ID_Ciclo"].'</th>
                                    <td>Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5></td>
                                    <td>
                                    <button type="button" class="btn btn-block btn-outline-primary btn-xs" data-toggle="modal" data-target="#modal-xl'.$ciclo_actual["ID_Ciclo"].'">Configurar</button>
                                    
                                    </td>
                                    <td><span class="badge bg-danger">Actual</span></td>
                                  </tr>
                                  <!-----------------------------MODAL DE CONFIGURACI??N--------->
                                    <div class="modal fade" id="modal-xl'.$ciclo_actual["ID_Ciclo"].'">
                                      <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Configurando el ciclo Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                                    <form action="#" method="GET" name="form_ciclo_nuevo">
                                                      <div class="form-group">
                                                        <label>Rango de fechas</label>
                                                        <div class="row">
                                                          <!--FECHA DE INICIO-->
                                                          <div class="col-md-3">
                                                            <div class="form-group">
                                                              <label>Fecha de inicio</label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                  </div>
                                                                  <input type="text" value="'.$ciclo_actual["fecha_inicio"].'" id="fecha_i_ciclo_a'.$ciclo_actual["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <!--FECHA DE FIN-->
                                                          <div class="col-md-3">
                                                            <div class="form-group">
                                                              <label>Fecha de fin</label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                  </div>
                                                                  <input type="text" value="'.$ciclo_actual["fecha_fin"].'" id="fecha_f_ciclo_a'.$ciclo_actual["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <p style="color:red;">1. Cambiar a ciclo activo </p>
                                                      <p> 1.1Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y dem??s campos. aplicar solo cuando haya finalizado el ciclo anterior </p>
                                                      <p style="color:red;">2. S??lo cambia a activo si no hay otro ciclo activo </p>
                                                      <p style="color:red;">3. Si hay un ciclo activo se guardar?? como ciclo futuro </p>
                                                      <!----- ON OFF BUTTON --->
                                                      <input type="checkbox"  name="my-checkbox" id="estado_ciclo_a'.$ciclo_actual["ID_Ciclo"].'" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                      <!-- / FORMULARIO DEL CICLO NUEVO -->
                                                    </form> 
                                                  
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" onClick=actualizar_ciclo_inactivo('.$ciclo_actual["ID_Ciclo"].')>Guardar cambios</button>
                                          </div>
                                        </div>
                                        <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                    </div>
                                  <!-- /.modal -->
                                ';
                              }
                              //----CICLOS FUTUROS
                              $ciclos_futuros = mysqli_query($link, "SELECT * FROM `ciclo` WHERE estatus = 'futuro'");
                              $n_ciclos_futuros = mysqli_num_rows($ciclos_futuros);
                              //$ciclos_futuros = mysqli_fetch_array($ciclos_futuros);
                              
                              while($row_ciclos_futuros = mysqli_fetch_array($ciclos_futuros)){
                                $cont_ciclos += 1;
                                echo'
                                  <tr>
                                    <td>'.$cont_ciclos.'</td>
                                    <th>'.$row_ciclos_futuros["ID_Ciclo"].'</th>
                                    <td>Fecha inicio: <strong>'.$row_ciclos_futuros["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$row_ciclos_futuros["fecha_fin"].'</strong></td>
                                    <td>
                                      <button type="button" class="btn btn-block btn-outline-primary btn-xs" data-toggle="modal" data-target="#modal-xl'.$row_ciclos_futuros["ID_Ciclo"].'">Configurar</button>
                                      <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-default'.$row_ciclos_futuros["ID_Ciclo"].'">Eliminar</button>
                                    </td>
                                    <td><span class="badge bg-primary">Futuro</span></td>
                                  </tr>
                                  <!-----------------------------MODAL PARA ELIMINAR LOS CICLOS-------->
                                  <div class="modal fade" id="modal-default'.$row_ciclos_futuros["ID_Ciclo"].'">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Ciclo Fecha inicio: <strong>'.$row_ciclos_futuros["fecha_inicio"].'</strong> Fecha fin: <strong>'.$row_ciclos_futuros["fecha_fin"].'</strong></h5> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>??Desea eliminar este ciclo?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                          <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=eliminar_ciclo_futuro('.$row_ciclos_futuros["ID_Ciclo"].')>Eliminar</button>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>


                                  <!-----------------------------MODAL DE CONFIGURACI??N--------->
                                  <div class="modal fade" id="modal-xl'.$row_ciclos_futuros["ID_Ciclo"].'">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Configurando el ciclo Fecha inicio: <strong>'.$row_ciclos_futuros["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$row_ciclos_futuros  ["fecha_fin"].'</strong></h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                
                                                  <form action="#" method="GET" name="form_ciclo_nuevo">
                                                    <div class="form-group">
                                                      <label>Rango de fechas</label>
                                                      <div class="row">
                                                        <!--FECHA DE INICIO-->
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label>Fecha de inicio</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" value="'.$row_ciclos_futuros["fecha_inicio"].'" id="fecha_i_ciclo_a'.$row_ciclos_futuros["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <!--FECHA DE FIN-->
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label>Fecha de fin</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" value="'.$row_ciclos_futuros["fecha_fin"].'"  id="fecha_f_ciclo_a'.$row_ciclos_futuros["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                              </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <p style="color:red;">1. Cambiar a ciclo activo </p>
                                                    <p> 1.1Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y dem??s campos. aplicar solo cuando haya finalizado el ciclo anterior </p>
                                                    <p style="color:red;">2. S??lo cambia a activo si no hay otro ciclo activo </p>
                                                    <p style="color:red;">3. Si hay un ciclo activo se guardar?? como ciclo futuro </p>
                                                    <!----- ON OFF BUTTON --->';
                                      if(!$hay_ciclo_activo){
                                      echo '<input type="checkbox"  name="my-checkbox" id="estado_ciclo_a'.$row_ciclos_futuros["ID_Ciclo"].'" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                        <!-- / FORMULARIO DEL CICLO NUEVO -->
                                                        <input type="hidden" id="id_ciclo" value="">
                                                      </form> 
                                                    
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary" data-dismiss="modal" onClick=actualizar_ciclo_inactivo('.$row_ciclos_futuros["ID_Ciclo"].')>Guardar cambios</button>
                                            </div>
                                      
                                      ';                
                                      }    
                                      else{        
                                        echo'  
                                                    <!-- / FORMULARIO DEL CICLO NUEVO -->
                                                    <input type="hidden" id="id_ciclo" value="">
                                                  </form> 
                                                
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal" onClick=actualizar_ciclo_inactivo_con_uno_activo('.$row_ciclos_futuros["ID_Ciclo"].')>Guardar cambios</button>
                                        </div>
                                        ';
                                      }
                                        echo '
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <!-- /.modal -->
                                ';
                              }
                echo '
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!----------------------FIN DE LA TABLA DE CICLOS--------------->
                    
              </div>
            </div>
            <!-- /.row (main row) -->
                    
                  ';
                ?>
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

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!--SCRIPT DE ENVIO DE DATOS -->
<script src="../admin/funciones js/ciclos.js"> </script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Page script -->
</body>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm-dd-yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()  
       
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</html>