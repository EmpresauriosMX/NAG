<?php
include("../php/conexion.php");
$link=conectarse();
session_start();
$usa=$_SESSION["user"];
			
			$contr=$_POST["contr"];
			$ge=$_POST["ge"];
			$tit=$_POST["tit"];
			$esp=$_POST["esp"];
			$dir=$_POST["dir"];
			$cor=$_POST["cor"];
			$tel=$_POST["tel"];
			$hcont=password_hash($contr,PASSWORD_DEFAULT);
			//$hus=password_hash($us,PASSWORD_DEFAULT);

			mysqli_query($link,"update usuarios set Direccion = '$dir', Telefono = $tel, Contrasena = '$hcont', correo = '$cor', cambio = '0' where ID_Usuario = '$usa'");
			mysqli_query($link,"update maestros set Especialidad='$esp', Titulo='$tit',Grado_Estudio='$ge', correo='$cor' where ID_Profesor= '$usa'");	
			echo "<meta http-equiv='REFRESH'content='0;URL=../docente/editar_docente.php'>";
			echo '<script> alert("Nueva contraseña: '.$contr.'");</script>';		
?>

