<?php
			$nom=$_POST["nom"];
			$ap=$_POST["ap"];
			$am=$_POST["am"];
			$dir=$_POST["dir"];
			$tel=$_POST["tel"];
			$gen=$_POST["gen"];
			$tc=$_POST["tc"];
			$act=$_POST["act"];
//creacion de nombre de usuario -----------------------------------------------------------------------			
			$array = str_split($nom);
			$array1 = str_split($ap);
			$array2 = str_split($am);
			$array3 = str_split($tc);
			//----------------------detecta contador y lo actualiza -----------------------------------
			if($tc=="D"){
			$file="../admin.txt";
			$cont=file_get_contents($file);
			$ccont=$cont+1;	
			
			$fp = fopen($file, "w");
			fputs($fp, $ccont);
			fclose($fp);
			}else if($tc=="M"){
			$file="../maestros.txt";
			$cont=file_get_contents($file);
			$ccont=$cont+1;
			
			$fp = fopen($file, "w");
			fputs($fp, $ccont);
			fclose($fp);
			}else {
			$file="../alumnos.txt";
			$cont=file_get_contents($file);
			$ccont=$cont+1;
			
			$fp = fopen($file, "w");
			fputs($fp, $ccont);
			fclose($fp);	
			}
//---------------------------------------------------------------------------------------------------------
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
			$us= $array[0] . $array[$n+1] . $array1[0] . $array2[0] . $array3[0]. $cont;
//-----------------------------------------------------------------------------------------------------
			$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
			$contr=substr(str_shuffle($permitted_chars), 0, 10);
			$hcont=password_hash($contr,PASSWORD_DEFAULT);
			//$hus=password_hash($us,PASSWORD_DEFAULT);
			include("conexion.php");
			$link=conectarse();
			mysqli_query($link,"insert into usuarios(ID_Usuario,Nombre,ApellidoPat,ApellidoMat,Direccion,Telefono,Genero,Contrasena,status,cambio) values('$us','$nom','$ap','$am','$dir',$tel,'$gen','$hcont','$act','1')");
			
			if($tc=="A"){
				mysqli_query($link,"insert into alumnos(ID_Usuario,Status) values('$us','$act')");
			}else if($tc=="M"){
				mysqli_query($link,"insert into maestros(ID_Profesor,Status) values('$us','$act')");
			}else if($tc=="D"){
				mysqli_query($link,"insert into administrador(ID_Admin,status) values('$us','$act')");
			}
			
			//echo "<meta http-equiv='REFRESH'content='0;URL=us.php'>";
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/config_usuario.php'>";
			echo '<script> alert("Usuario: '.$us.' contraseña: '.$contr.'");</script>';			
			//RJAAA01 = $2y$10$98CBiqJhUVYGwKVH4Flf6eFMM0I2UU9pX.B558c9ZWdHRWAkCns6m
			//67hi9qj28f
?>










