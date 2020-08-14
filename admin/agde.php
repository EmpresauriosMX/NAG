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
    $res=mysqli_query($link,"SELECT * from instituto");
    $result=mysqli_query($link,"SELECT COUNT(id_instituto) from instituto");
    echo"ANTES DEL WHILE";
    while($row=mysqli_fetch_array($res)){
/*
       echo"resultado de la consulta es : $row[id_instituto]";
       echo'La variable row es:  '.$row[id_instituto].'';
       echo"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
       echo "La variable res: $result";
       echo"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

       if(0 == $row[id_instituto]){
           echo"Entro al IF";
       }else{
            echo"Entro al ELSE :/";
       }*/
}

if(0 == $row["id_instituto"]){
    echo"Entro al IF";
    //Insersion de datos a la tabla "instituto" en la BD
        mysqli_query($link,"INSERT INTO instituto (id_instituto,nombre,clave,tipo_de_institucion,descripcion,direccion,telefono,correo) 
        VALUES(1,'$nominst','$clave','$tipo','$desc','$direc','$tel','$correo')");
        echo "<meta http-equiv='REFRESH'content='5;URL=institucion.php'>";
        echo"Se insertaron datos por primera vez en la tabla";
}elseif(1 == $row["id_instituto"]){
     echo"Entro al ELSE :/";
     echo"Ya existe una institución";
        echo"Se actualizaran Datos";
        //Actualiza datos de la tabla "instituto" en la BD
        mysqli_query($link,"UPDATE instituto SET nombre='$nominst',clave='$clave',tipo_de_institucion='$tipo',descripcion='$desc'
        ,direccion='$direc',telefono='$tel',correo='$correo' WHERE id_instituto=1");
        echo "<meta http-equiv='REFRESH'content='5;URL=institucion.php'>";
}else{
    echo"Pinches problemas";
}

 //Si no hay datos en la BD inserto nuevos datos, si si hay solo actualizo datos
    /*
    if(0 == $row["id_instituto"]){
        
    }else{
        
    }
*/
?>