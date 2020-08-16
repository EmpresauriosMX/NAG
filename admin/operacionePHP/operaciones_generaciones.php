<?php
    include("../../inc/funciones/conexal.php");
    $link = Conectarse();
    $operacion = $_GET["operacion"];
    switch($operacion){
        case "nuevo":
            $fecha1 = $_GET["fecha_i_n"];
            $fecha2 = $_GET["fecha_f_n"];
            echo $fecha1;
            echo $fecha2;
            mysqli_query($link, "INSERT INTO `generaciones` 
                                (`id_generacion`, `fecha_inicio`, `fecha_fin`, `ciclos`, `estatus`) 
                                VALUES (NULL, '$fecha1', '$fecha2', '0', '2')");
            
        break;
        case "actual":
            $fecha1 = $_GET["fecha_i_a"];
            $fecha2 = $_GET["fecha_f_a"];
            $estatus = $_GET["estado_a"];
            $id_ciclo_a =$_GET["id"];
            
                mysqli_query($link, "UPDATE `ciclo` SET `fecha_inicio`='$fecha1',`fecha_fin`='$fecha2',`estatus`= '$estatus' WHERE `ID_Ciclo`= $id_ciclo_a");
        break;

        case "eliminar":
            $id_ciclo_a =$_GET["id"];
            mysqli_query($link, "DELETE FROM `ciclo` WHERE `ID_Ciclo`= $id_ciclo_a");

        break;  
    }
?> 