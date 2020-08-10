<?php
    //Creacion de variables por metodo GET
    $nominst=$_GET["nombreinstitucion"];
    $clave=$_GET["claveinstitucion"];
    $tipo=$_GET["tipoinstitucion"];
    $desc=$_GET["descripcioninstitucion"];
    $direc=$_GET["direccioninstitucion"];
    $tel=$_GET["telefonoinst"];
    $correo=$_GET["correoinst"];

    //Conexion a la Base de Datos
    include("../inc/funciones/conexal.php");
	$link=Conectarse();

    //Insersion de datos a la tabla "instituto" en la BD
    mysqli_query($link,"INSERT INTO instituto (nombre,clave,tipo_de_institucion,descripcion,direccion,telefono,correo) 
    VALUES('$nominst','$clave','$tipo','$desc','$direc','$tel','$correo')");
    echo "<meta http-equiv='REFRESH'content='0;URL=Datos_escolares.php'>";

?>