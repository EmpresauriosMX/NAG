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
	<link rel="stylesheet" href="../css/bootstrap.css" />
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
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
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nombre apellido</a>
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
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bienvenido  _</h1>
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
			<p>
<table class="table">      
	<thead class="thead-dark">
					<tr>
                    <th scope="col">ID de usuario</th>
                    <th scope="col">Nombre/s</th>
                    <th scope="col">Apellido paterno</th>
					<th scope="col">Apellido materno</th>
					<th scope="col">Direccion</th>
					<th scope="col">Telefono</th>
					<th scope="col">Genero</th>
					<th scope="col">Estatus</th>
                    <th scope="col">Correo Electrónico</th>
					<th scope="col">Tipo de cuenta</th>
					<th scope="col">Funcion</th>
					
                </tr>
		</thead>    
<?php
	include("../php/conexion.php");
	$link=conectarse();
			
	$qry = mysqli_query($link,"select * from usuarios");
	
	while($row = mysqli_fetch_array($qry)){
	
	$array = str_split($row['ID_Usuario']);
	if($array[4]=="A"){
			$tc="Alumno";
	}else if($array[4]=="M"){
			$tc="Maestro";
	}else if($array[4]=="D") {
			$tc="Administrador";
	}	
	?>
               <tr>
                  <td><?php echo ''.$row['ID_Usuario'].' <input type="hidden" value="'.$row['ID_Usuario'].'" id="us" name="us">';?></td>
                  <td><?php echo $row['Nombre'];?></td>
                  <td><?php echo $row['ApellidoPat'];?></td>
                  <td><?php echo $row['ApellidoMat'];?></td>
				  <td><?php echo $row['Direccion'];?></td>
                  <td><?php echo $row['Telefono'];?></td>
                  <td><?php echo $row['Genero'];?></td>
                  <td><?php echo $row['status'];?></td>
				  <td><?php echo $row['correo'];?></td>
				  <td><?php echo $tc;?></td>
				  <td><?php echo '<button type="button" class="fa fa-remove" id="button" data-toggle="modal" data-target=".bs-example-modal-sm4'.$row["ID_Usuario"].'">Editar</button>'; ?></td>
                </tr>
		<?php
		echo '
						<div class="modal fade bs-example-modal-sm4'.$row["ID_Usuario"].'" tabindex="-1" role="dialog" aria-hidden="true">
						
						<div class="modal-dialog modal-lg">
                		<div class="modal-content">
                       
					   <div class="modal-header">
                       <h4 class="modal-title" id="myModalLabel2" >Editar usuario con id: '.$row["ID_Usuario"].'</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                       </button>
					   </div>
					   
                       <div class="modal-body">
						
 					
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="../php/edus.php" method="post">	
					<div class="form-group row">
					<div class="asd"></div>
					<div class="form-group">
  						 <label for="exampleInputPassword1">Nombre</label>
						 <input type="text" class="form-control" value="'.$row["Nombre"].'" id="ex1" name="nom" required="required" placeholder="Escribe el Nombre">
					</div>
					<div class="asd"></div>
					<div class="form-group">
					<label for="ap">Apellido Paterno</label>
                    <input type="text" class="form-control" value="'.$row["ApellidoPat"].'" id="ap" name="ap" required="required" placeholder="Escribe el Apellido Paterno">
					</div>
					<div class="asd"></div>
					<div class="form-group">
					<label for="ap">Apellido Materno</label>
                    <input type="text" class="form-control" value="'.$row["ApellidoMat"].'" id="am" name="am" required="required" placeholder="Escribe el Apellido Materno">
					</div>
					</div>
					
					<div class="form-group row">
					<div class="asd"></div>
				    <div class="form-group">
					<label for="ap">Dirección</label>
                    <input type="text" class="form-control" value="'.$row["Direccion"].'" id="dir" name="dir" required="required" placeholder="Escribe tu direccion">
					</div>
					<div class="asd"></div>
					<div class="form-group">
					<label for="ap">Correo electronico</label>
                    <input type="text" class="form-control" value="'.$row['correo'].'" id="cor" name="cor" required="required" placeholder="Escribe tu direccion">
					</div>
					
					<div class="asd"></div>
					<div class="form-group">
					<label for="ap">Telefono</label>
					<input type="text" id="tel" name="tel" required="required" value="'.$row['Telefono'].'" class="form-control" data-inputmask="mask": "(999) 999-9999"  data-mask>
					</div>
					</div>
				';
		$temp=$row["ID_Usuario"];
			if($array[4]=="A"){	
				$qry2 = mysqli_query($link,"select * from alumnos where ID_Usuario='$temp'");
				$row2 = mysqli_fetch_array($qry2);
				echo'
			<div class="form-group row">
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Matricula</label>
            <input type="text" class="form-control" value="'.$row2['Matricula'].'" id="mat" name="mat" required="required" placeholder="Escribe tu direccion">
			</div>
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Ciclo</label>
            <input type="text" class="form-control" value="'.$row2['ID_Ciclo'].'" id="idc" name="idc" required="required" placeholder="Escribe tu direccion">
			</div>
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Nombre del tutor</label>
            <input type="text" class="form-control" value="'.$row2['NombreTutor'].'" id="nt" name="nt" required="required" placeholder="Escribe tu direccion">
			</div>
			</div>
			<div class="form-group row">
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Estado economico</label>
            <input type="text" class="form-control" value="'.$row2['Estado_Economico'].'" id="ee" name="ee" required="required" placeholder="Escribe tu direccion">
			</div>
			</div>';
			}else if($array[4]=="M"){
				$qry2 = mysqli_query($link,"select * from maestros where ID_Profesor='$temp'");
			$row2 = mysqli_fetch_array($qry2);
				echo'
			<div class="form-group row">
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Ciclo</label>
            <input type="text" class="form-control" value="'.$row2['ID_Ciclo'].'" id="idc" name="idc" required="required" placeholder="Escribe tu direccion">
			</div>
			
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Numero de contrato</label>
            <input type="text" class="form-control" value="'.$row2['Num_Contrato'].'" id="nc" name="nc" required="required" placeholder="Escribe tu direccion">
			</div>
			
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Especialidad</label>
            <input type="text" class="form-control" value="'.$row2['Especialidad'].'" id="esp" name="esp" required="required" placeholder="Escribe tu direccion">
			</div>
					
			</div>
			
			<div class="form-group row">
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Grado de estudio</label>
            <input type="text" class="form-control" value="'.$row2['Grado_Estudio'].'" id="ge" name="ge" required="required" placeholder="Escribe tu direccion">
			</div>
			
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Titulo</label>
            <input type="text" class="form-control" value="'.$row2['Titulo'].'" id="tit" name="tit" required="required" placeholder="Escribe tu direccion">
			</div>
			</div>

			';
			}else if($array[4]=="D") {
				$qry2 = mysqli_query($link,"select * from administrador where ID_Admin='$temp'")or die("Failed to query database".mysql_error());
				$row2 = mysqli_fetch_array($qry2);
			echo'
			<div class="form-group row">
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Puesto laboral</label>
            <input type="text" class="form-control" value="'.$row2['Puesto_laboral'].'" id="pl" name="pl" required="required" placeholder="Escribe tu direccion">
			</div>
			</div>
			';
			}
			echo'
			<div class="form-group row">
			<div class="asd2"></div>
		  	<div class="col-sm-3">
            <div class="form-group">
            <label>Genero</label>
            <select class="form-control" id="gen" name="gen" required="required">
  			<option value="Masculino">Masculino</option>
  			<option value="Femenino">Femenino</option>
            </select>
            </div>
            </div>	
				   
			<div class="col-sm-3">
            <div class="form-group">
			<label>Estatus de cuenta</label>
			<select class="form-control" id="act" name="act" required="required">
			<option value="Activo">Activa</option>
			<option value="Inactivo">Inactiva</option>
			</select>
			</div>
			</div>
			</div>
			<input type="hidden" value="'.$row["ID_Usuario"].'" name="us" id="us">
			</div>
            <div class="modal-footer">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
			</div>
			<button type="submit" class="btn btn-success">Guardar Cambios</button>
			</div>
            </div>
			</div>
			</form>';

	}
	?>
            </table>
              
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
		<style type="text/css">
		.asd{
			width: 20px;
		}
				.asd2{
			width: 8px;
		}
	</style>
</html>
