<?php
$us='root';
$contr='admin';
$hcont=password_hash($contr,PASSWORD_DEFAULT);
include("conexion.php");
$link=conectarse();
mysqli_query($link,"insert into usuarios(ID_Usuario,Contrasena,status,cambio) values('$us','$hcont','Activo','2')");
mysqli_query($link,"insert into administrador(ID_Admin,status) values('$us','Activo')");
?>