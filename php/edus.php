<?php
include("../php/conexion.php");
$link=conectarse();			
			$us=$_POST["us"];
			$nom=$_POST["nom"];
			$ap=$_POST["ap"];
			$am=$_POST["am"];
			$dir=$_POST["dir"];
			$cor=$_POST["cor"];
			$tel=$_POST["tel"];
			$act=$_POST["act"];
			$gen=$_POST["gen"];
			$array = str_split($us);

	mysqli_query($link,"update usuarios set Nombre = '$nom', ApellidoPat = '$ap', ApellidoMat = '$am', Direccion = '$dir', Telefono = '$tel', Genero = '$gen',status = '$act', correo = '$cor' where ID_Usuario = '$us'");

	if($array[4]=="A"){
			$mat=$_POST["mat"];
			$idc=$_POST["idc"];
			$nt=$_POST["nt"];
			$ee=$_POST["ee"];
		mysqli_query($link,"update alumnos set Matricula='$mat',ID_Ciclo='$idc',NombreTutor='$nt', Status='$act',Estado_Economico='$ee', correo='$cor' where ID_Usuario= '$us'");	
	}else if($array[4]=="M"){
			$idc=$_POST["idc"];
			$esp=$_POST["esp"];
			$tit=$_POST["tit"];
			$nc=$_POST["nc"];
			$ge=$_POST["ge"];
			mysqli_query($link,"update maestros set ID_Ciclo='$idc', Num_Contrato = '$nc', Especialidad = '$esp', Status = '$act', Titulo = '$tit', Grado_Estudio = '$ge', Correo = '$cor' where ID_Profesor= '$us'");	
	}else if($array[4]=="D") {
					$pl=$_POST["pl"];
		mysqli_query($link,"update administrador set Puesto_laboral = '$pl', correo='$cor',status='$act' where ID_Admin= '$us'");
	}
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/tabla.php'>";
?>