<?php
    $fecha1 = $_GET["fecha_i_n"];
    $fecha2 = $_GET["fecha_f_n"];
    $estatus = $_GET["estado_n"];

    if ($estatus == "false"){
        $estatus_c = "futuro";
    }
    else{
        $estatus_c = "activo";
    }
    
    echo "estatus: $estatus_c";

    include("../../inc/funciones/conexal.php");
    $link = Conectarse();
    mysqli_query($link, "INSERT INTO `ciclo` (`ID_Ciclo`, `fecha_inicio`, `fecha_fin`, `estatus`) 
                         VALUES (NULL, '$fecha1', '$fecha2', '$estatus_c')");

    echo "INSERT INTO `ciclo` (`ID_Ciclo`, `fecha_inicio`, `fecha_fin`, `estatus`) 
    VALUES (NULL, '$fecha1', '$fecha2', '$estatus_c')";
?> 