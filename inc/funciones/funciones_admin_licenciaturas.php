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

function obtenerLicActiva(){
  include 'conexion.php';
  try{
    return $conn->query("SELECT licenciatura.NombreLic,ciclo.fecha_inicio,ciclo.fecha_fin FROM ciclo,licenciatura,licenciatura_activa WHERE licenciatura_activa.ID_lincenciatura=licenciatura.ID_Lincenciatura AND licenciatura_activa.ID_ciclo=ciclo.ID_Ciclo");
  }catch(Exception $e){
    echo "Error! :" . $e->getMessage();
    return false;
  }
  }