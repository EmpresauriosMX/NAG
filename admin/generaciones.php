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

  <link rel="stylesheet" href="generaciones.css">
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
    include("../inc/funciones/conexal.php");
    $link = Conectarse(); /*conexion a la bd*/
  ?>
  <!-- Fin --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Generaciones</h1>
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
        <!-- Main row -->
            <div class="col-md-10 mx-auto ">
              <!--------------------GENERACIONES------------------>
              <div class="card card-info ">
                <div class="card-header">
                  <h3 class="card-title">Configuración de la generación actual</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="card-body">
                  <?php
                    $result = mysqli_query($link, "SELECT * FROM `generaciones` WHERE estatus = 1");
                    $hay_ciclo_activo = mysqli_num_rows($result);
                    $generacion=mysqli_fetch_array($result);
                    echo'
                    <h3>Generación inicio <strong>'.$generacion["fecha_inicio"].' </strong> fin <strong> '.$generacion["fecha_fin"].' </strong></h3>
                    <label for="ciclo">Periodo</label>
                    <div class="row">
                        <div class="col-md-3">
                          <!-- Fecha 1 -->
                          <label >Inicio</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" value="'.$generacion["fecha_inicio"].'" id="fecha_i_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                        </div>
                        
                        <div class="col-md-3">
                          <!-- Fecha 1 -->
                          <label >Fin</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" value="'.$generacion["fecha_fin"].'" id="fecha_i_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                        </div>
                    </div>
                    ';
                  ?>
                  
                      <h6 style="color:red;">Cambiar a generación desactivada</h6>
                      <div class="desactivar">   
                          <p>Esta acción cambia toda la arquitectura de los alumnos, docentes,
                              licenciaturas, calificaciones y más
                          </p>
                          <div class="form-group">
                              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" name="gen1" class="custom-control-input" id="customSwitch1">
                              <label class="custom-control-label" for="customSwitch1">Desactivado / Activado</label>
                              </div>
                          </div>
                      </div>  
                      <div class="card-body p-0">
                      <h4>Ciclos de la generación</h6>
                          <table class="table">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th style="width: 10px">ID </th>
                                <th>Periodo</th>
                                <th>Acción</th>
                                <th>Estado</th  >
                              </tr>
                            </thead>
                            <tbody>
                          <?php             //CICLO ACTUAL
                            $result = mysqli_query($link, "SELECT `ciclo`.ID_Ciclo, ciclo.fecha_inicio , ciclo.fecha_fin FROM `generaciones-ciclos`,`ciclo` WHERE `generaciones-ciclos`.`id_generacion` = 1 and `ciclo`.`ID_Ciclo`= `generaciones-ciclos`.`ID_Ciclo` and `ciclo`.`estatus`= 'activo'");
                            $hay_ciclo_activo = mysqli_num_rows($result);
                            $ciclo_actual=mysqli_fetch_array($result);
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
                                      <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-default'.$ciclo_actual["ID_Ciclo"].'">Remover ciclo</button>
                                      </td>
                                      <td><span class="badge bg-danger">Actual</span></td>
                                    </tr>
                                    <!-------------------MODAL DE REMOVER CICLO DE LA GENERACION--------->
                                    <div class="modal fade" id="modal-default'.$ciclo_actual["ID_Ciclo"].'">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Ciclo Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong> Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5> </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p>¿Desea eliminar este ciclo?</p>
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=remover_ciclo('.$ciclo_actual["ID_Ciclo"].')>Eliminar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  ';
                                }
                                //----CICLOS FUTUROS
                                $ciclos_futuros = mysqli_query($link, "SELECT `ciclo`.ID_Ciclo, ciclo.fecha_inicio , ciclo.fecha_fin FROM `generaciones-ciclos`,`ciclo` WHERE `generaciones-ciclos`.`id_generacion` = 1 and `ciclo`.`ID_Ciclo`= `generaciones-ciclos`.`ID_Ciclo` and `ciclo`.`estatus`= 'futuro'");
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
                                        <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-default'.$row_ciclos_futuros["ID_Ciclo"].'">Remover ciclo</button>
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
                                            <p>¿Desea eliminar este ciclo?</p>
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=remover_ciclo('.$row_ciclos_futuros["ID_Ciclo"].')>Eliminar</button>
                                          </div>
                                        </div>
                                        <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                    </div>

                                  ';
                                }
                          ?>
                            </tbody>
                          </table>
                        </div>


                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <h5>Ciclos en la generación: </h5>
                    <button type="submit" class="btn btn-default float-right">Guardar Cambios</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.------FIN DE GENERACIONES-------------------->
            </div>

            <!--------------AGREGAR UNA GENERACIOON NUEVO--------->
            <div class="col-md-10 mx-auto ">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Agregar una nueva generación</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="card-body">
                    <label for="ciclo">Periodo</label>
                    <div class="row">
                        <div class="col-md-3">
                          <!-- Fecha 1 -->
                          <label >Inicio</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" value="" id="fecha_i_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                        </div>
                        
                        <div class="col-md-3">
                          <!-- Fecha 1 -->
                          <label >Fin</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" value="" id="fecha_i_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                        </div>
                    </div>
    

                        </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <h5>Ciclos activos en la generación: </h5>
                    <button type="submit" class="btn btn-default float-right">Guardar Cambios</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!--------------------FIN DE  AGREGAR GENERACION------>
            </div>
            
        <!-- /.row (main row) -->
        </div>
        
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
</body>
</html>