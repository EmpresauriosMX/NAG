<?php
    //Conexion a la Base de Datos
    include("../inc/funciones/conexal.php");
	$link=Conectarse();

    //Creacion de variables por metodo GET
    $nominst=$_GET["nombreinstitucion"];
    $clave=$_GET["claveinstitucion"];
    $tipo=$_GET["tipoinstitucion"];
    $desc=$_GET["descripcioninstitucion"];
    $direc=$_GET["direccioninstitucion"];
    $tel=$_GET["telefonoinst"];
    $correo=$_GET["correoinst"];

    //Verifico si hay datos en la BD o no
    $res=mysqli_query($link,"SELECT COUNT(nombre) from instituto");


    //Si no hay datos en la BD inserto nuevos datos, si si hay solo actualizo datos
    if($res==0){
        //Insersion de datos a la tabla "instituto" en la BD
        mysqli_query($link,"INSERT INTO instituto (id_instituto,nombre,clave,tipo_de_institucion,descripcion,direccion,telefono,correo) 
        VALUES(1,'$nominst','$clave','$tipo','$desc','$direc','$tel','$correo')");
        echo "<meta http-equiv='REFRESH'content='3;URL=institucion.php'>";
        echo"Se insertaron datos pro primera vez en la tabla";
    }else{
        echo"Ya existe una institución";
        //Actualiza datos de la tabla "instituto" en la BD
        mysqli_query($link,"UPDATE instituto SET nombre='$nominst',clave='$clave',tipo_de_institucion='$tipo',descripcion='$desc'
        ,direccion='$direc',telefono='$tel',correo='$correo' WHERE id_instituto=1");
        echo "<meta http-equiv='REFRESH'content='3;URL=institucion.php'>";
    }


?>