<?php
include("../php/conexion.php");
$link=conectarse();
session_start();
$usa=$_SESSION["user"];
$qry = mysqli_query($link,"select * from usuarios where ID_Usuario = '$usa'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($qry);
			
			$nom=$_POST["nom"];
			$ap=$_POST["ap"];
			$am=$_POST["am"];
			$dir=$_POST["dir"];
			$tel=$_POST["tel"];
			$gen=$_POST["gen"];
			$contr=$_POST["contr"];
			$pl=$_POST["pl"];
			$cor=$_POST["cor"];
//creacion de nombre de usuario -----------------------------------------------------------------------			
			$array = str_split($nom);
			$array1 = str_split($ap);
			$array2 = str_split($am);
			//----------------------detecta contador y lo actualiza -----------------------------------
			if($row['cambio']==2){
			$file="../admin.txt";
			$cont=file_get_contents($file);
			$ccont=$cont+1;	
			$fp = fopen($file, "w");
			fputs($fp, $ccont);
			fclose($fp);
			$n=0;
			if (strpos($nom, " ")){
			while($array[$n]!=" "):
			$n=$n+1;
			endwhile;								
			}else{
				$array[$n+1]='X';
			}
			//---verificacion de si hay un segundo nombre--
			//---------------------------------------------
			$us= $array[0] . $array[$n+1] . $array1[0] . $array2[0] . "D" . $cont;
			}else{
				$us=$usa;
			}
//-----------------------------------------------------------------------------------------------------
			
			$hcont=password_hash($contr,PASSWORD_DEFAULT);
			//$hus=password_hash($us,PASSWORD_DEFAULT);

			mysqli_query($link,"update usuarios set ID_Usuario = '$us', Nombre = '$nom', ApellidoPat = '$ap', ApellidoMat = '$am', Direccion = '$dir', Telefono = $tel, Genero = '$gen', Contrasena = '$hcont', correo = '$cor', cambio = '0' where ID_Usuario = '$usa'");
			mysqli_query($link,"update administrador set ID_Admin = '$us', Puesto_laboral = '$pl', correo='$cor' where ID_Admin= '$usa'");
			$_SESSION["user"]=$us;
			
			//echo "<meta http-equiv='REFRESH'content='0;URL=us.php'>";
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/editar_admin.php'>";
			echo '<script> alert("Usuario: '.$us.' contraseña: '.$contr.'");</script>';		
?>

