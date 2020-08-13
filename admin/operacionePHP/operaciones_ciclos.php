<?php
    include("../../inc/funciones/conexal.php");
    $link = Conectarse();
    $operacion = $_GET["operacion"];

    echo "operacion: $operacion";

    switch($operacion){
        case "nuevo":
            $fecha1 = $_GET["fecha_i_n"];
            $fecha2 = $_GET["fecha_f_n"];
            $estatus = $_GET["estado_n"];   
            $ciclo_activo =$_GET["ciclo_activo"];
            echo $fecha1;
            echo '<br>';
            echo $fecha2;
            echo '<br>';
            echo $estatus;
            if($ciclo_activo){
                $estatus_c = "futuro";
            }
            else{
                if ($estatus == false){
                    $estatus_c = "futuro";
                }
                else{
                    $estatus_c = "activo";
                }  
            }
            mysqli_query($link, "INSERT INTO `ciclo` (`ID_Ciclo`, `fecha_inicio`, `fecha_fin`, `estatus`) 
                                VALUES (NULL, '$fecha1', '$fecha2', '$estatus_c')");
        break;
        case "actual":
            $fecha1 = $_GET["fecha_i_a"];
            $fecha2 = $_GET["fecha_f_a"];
            $estatus = $_GET["estado_a"];
            $id_ciclo_a =$_GET["id"];

            echo $fecha1;
            echo '<br>';
            echo $fecha2;
            echo '<br>';
            echo $estatus;
            echo '<br>';
            echo $id_ciclo_a;
            
                mysqli_query($link, "UPDATE `ciclo` SET `fecha_inicio`='$fecha1',`fecha_fin`='$fecha2',`estatus`= '$estatus' WHERE `ID_Ciclo`= $id_ciclo_a");
        break;
        
    }
?> 