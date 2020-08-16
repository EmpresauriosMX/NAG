<?php
$us=$_POST["us"];
$cont=$_POST["cont"];
include("conexion.php");
$link=conectarse();

//-----------------------------------------verifica si existe el usuario con id ---------------------------------------------
$qry = mysqli_query($link,"select * from usuarios where ID_Usuario = '$us'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($qry);

//dehash contra
$ver=password_verify($cont,$row['Contrasena']);

//----------------------------verifica si es primer inicio de sesion del usuario-------------------------------------------------
$qry2 = mysqli_query($link,"select * from usuarios where cambio=1")
or die("Failed to query database".mysql_error());
$row2 = mysqli_fetch_array($qry2);
$array = str_split($us);
//-----------------------------------------------------inicio------------------------------------------------------------------------
if($row['ID_Usuario']==$us && $ver==1 ){
	session_start();
		$_SESSION["user"]=$us;
		
		if($row['cambio']==2){
		echo "<meta http-equiv='REFRESH'content='0;URL=../admin/editar_admin.php'>";
		}else if($row2['cambio']==1){
		
		if($array[4]=="A"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../alumnos/editar_alumno.php'>";
		}else if($array[4]=="M"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../docente/editar_docente.php'>";
		}else if($array[4]=="D") {
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/editar_admin.php'>";
		}	
		}else{
		if($array[4]=="A"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../alumnos/index_alumnos.php'>";
		}else if($array[4]=="M"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../docente/index.php'>";
		}else if($array[4]=="D"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/index.php'>";
		}
		}
}else{
//-----------------------------------------verifica si existe el usuario con correo ---------------------------------------------
$qry = mysqli_query($link,"select * from usuarios where correo = '$us'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($qry);
//dehash contra
$ver=password_verify($cont,$row['Contrasena']);
//----------------------------verifica si es primer inicio de sesion del usuario-------------------------------------------------
$qry2 = mysqli_query($link,"select * from usuarios where cambio = 1")
or die("Failed to query database".mysql_error());
$row2 = mysqli_fetch_array($qry2);
//-----------------------------------------------------inicio------------------------------------------------------------------------
	if($row['correo']==$us && $ver==1 ){
		session_start();
		$_SESSION["user"]=$row['ID_Usuario'];
		$array = str_split($row['ID_Usuario']);
		if($row2['cambio']==1){
		if($array[4]=="A"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../alumnos/editar_alumno.php'>";
		}else if($array[4]=="M"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../docente/editar_docente.php'>";
		}else if($array[4]=="D") {
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/editar_admin.php'>";
		}	
		}else{
		if($array[4]=="A"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../alumnos/index_alumnos.php'>";
		}else if($array[4]=="M"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../docente/index.php'>";
		}else if($array[4]=="D"){
			echo "<meta http-equiv='REFRESH'content='0;URL=../admin/index.php'>";
		}
		}
	}else{
		echo '<script>alert("Correo o contraseña invalida");</script>';
		echo "<meta http-equiv='REFRESH'content='0;URL=../index.php'>";
	}
}
?>