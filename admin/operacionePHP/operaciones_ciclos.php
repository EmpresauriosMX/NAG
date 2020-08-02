<?php
$materia = $_GET["materia"];
$titulo = $_GET["titulo"];
$descripcion = $_GET["descripcion"];
$fecha = $_GET["fecha"];
$color = $_GET["color"];
//$usuario = $_GET["usuario"];
//echo $materia.  " ". $titulo . " " . $descripcion . " " . $fecha . " " . $color;
//echo $color . "---";

include("../php/conexion.php");
$link = conectarse();
mysqli_query($link, "INSERT INTO `eventos`(`id_materia`, `titulo`, `descripcion`, `fecha`, `color_importancia`, `id_usuario`, `estado`)
VALUES ($materia,'$titulo','$descripcion','$fecha','$color',1,0)");

//INSERT INTO `eventos`(`id_materia`, `titulo`, `descripcion`, `fecha`, `color_importancia`, `id_usuario`, `estado`) 
//VALUES (2,'Examen','estudiar el pdf','2020-04-09','#9ae6ae',1,0)

?> 