<?php
include("../php/conexion.php");
$link=conectarse();
session_start();
$usa=$_SESSION["user"];
			
			$contr=$_POST["contr"];
			$nt=$_POST["nt"];
			$dir=$_POST["dir"];
			$cor=$_POST["cor"];
			$tel=$_POST["tel"];
			$hcont=password_hash($contr,PASSWORD_DEFAULT);
			//$hus=password_hash($us,PASSWORD_DEFAULT);

			mysqli_query($link,"update usuarios set Direccion = '$dir', Telefono = $tel, Contrasena = '$hcont', correo = '$cor', cambio = '0' where ID_Usuario = '$usa'");
			mysqli_query($link,"update alumnos set NombreTutor='$nt', correo='$cor' where ID_Usuario= '$usa'");	
			echo "<meta http-equiv='REFRESH'content='0;URL=../alumnos/editar_alumno.php'>";
			echo '<script> alert("Nueva contraseña: '.$contr.'");</script>';		
?>

