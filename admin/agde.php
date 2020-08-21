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
    if ($resultado = mysqli_query($link, "SELECT id_instituto FROM instituto where id_instituto=1")) {
        echo(mysqli_num_rows($resultado));
        $valor =mysqli_num_rows($resultado);
    }
 

if($valor == 0){
    //echo"Entro al IF";
    //Insersion de datos a la tabla "instituto" en la BD
        mysqli_query($link,"INSERT INTO instituto (id_instituto,nombre,clave,tipo_de_institucion,descripcion,direccion,telefono,correo) 
        VALUES(1,'$nominst','$clave','$tipo','$desc','$direc','$tel','$correo')");
        echo "<meta http-equiv='REFRESH'content='0;URL=institucion.php'>";
        
}else{
        //echo"Entro al ELSE :/";
     //echo"Ya existe una institución";
        //echo"Se actualizaran Datos";
        //Actualiza datos de la tabla "instituto" en la BD
        mysqli_query($link,"UPDATE instituto SET nombre='$nominst',clave='$clave',tipo_de_institucion='$tipo',descripcion='$desc'
        ,direccion='$direc',telefono='$tel',correo='$correo' WHERE id_instituto=1");
        echo "<meta http-equiv='REFRESH'content='0;URL=institucion.php'>";
}
?>