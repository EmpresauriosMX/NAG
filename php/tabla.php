<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css" />
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<table>
					<tr>
                    <th>ID de usuario</th>
                    <th>Nombre/s</th>
                    <th>Apellido paterno</th>
					<th>Apellido materno</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Genero</th>
					<th>Estatus</th>
                    <th>Correo Electrónico</th>
					<th>Tipo de cuenta</th>
					<th>Funcion</th>
				
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
						
 					
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="../php/sus.php" method="post">	
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
            <input type="text" class="form-control" value="'.$row2['Especialidad'].'" id="nc" name="nc" required="required" placeholder="Escribe tu direccion">
			</div>
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Titulo</label>
            <input type="text" class="form-control" value="'.$row2['Titulo'].'" id="tit" name="tit" required="required" placeholder="Escribe tu direccion">
			</div>
			</div>
			<div class="form-group row">
			<div class="asd"></div>
			<div class="form-group">
			<label for="ap">Grado de estudio</label>
            <input type="text" class="form-control" value="'.$row2['Grado_Estudio'].'" id="ge" name="ge" required="required" placeholder="Escribe tu direccion">
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
			<input type="hidden" value="'.$row["ID_Usuario"].'" name="id" id="id">
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
<!---

						
Usuario: RJAAD0 contraseña: 0sjitakvz5
Usuario: JAMBA0 contraseña: b6nkj5fspl
Usuario: JRABM0 contraseña: ukfnazx1yl

--->