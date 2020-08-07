<?php

function obtenerProyectos(){
include 'conexion.php';
try{
  return $conn->query("SELECT ID_Lincenciatura,NombreLic FROM licenciatura");
}catch(Exception $e){
  echo "Error! :" . $e->getMessage();
  return false;
}
  }