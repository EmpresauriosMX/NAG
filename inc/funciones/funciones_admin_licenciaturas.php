<?php

function obtenerProyectos(){
include 'conexion.php';
try{
  return $conn->query("SELECT * FROM licenciatura");
}catch(Exception $e){
  echo "Error! :" . $e->getMessage();
  return false;
}
}

function obtenerLicActiva(){
  include 'conexion.php';
  try{
    return $conn->query("SELECT licenciatura_activa.id_periodo,licenciatura_activa.ID_LicActiva,licenciatura.NombreLic,ciclo.fecha_inicio,ciclo.fecha_fin FROM ciclo,licenciatura,licenciatura_activa WHERE licenciatura_activa.ID_lincenciatura=licenciatura.ID_Lincenciatura AND licenciatura_activa.ID_ciclo=ciclo.ID_Ciclo");
  }catch(Exception $e){
    echo "Error! :" . $e->getMessage();
    return false;
  }
  }

  function obtenerLicActiva_materias(){
    include 'conexion.php';
    try{
      return $conn->query("SELECT licenciatura_activa.ID_LicActiva,licenciatura.NombreLic,licenciatura_activa.ID_Lincenciatura FROM licenciatura_activa,licenciatura where licenciatura_activa.ID_lincenciatura=licenciatura.ID_Lincenciatura group by licenciatura_activa.ID_Lincenciatura");
    }catch(Exception $e){
      echo "Error! :" . $e->getMessage();
      return false;
    }
    }

    function Obtener_Generaciones($id_licenciatura){
      include 'conexion.php';
      try{
          return $conn->query("SELECT * from licenciatura_activa where ID_Lincenciatura=$id_licenciatura");
      }catch(Exception $e){
        echo "Error! :" . $e->getMessage();
        return false;
      }
    }

    function Obtener_Asignaturas($id_licenciatura_Activa){
      include 'conexion.php';
      try{
          return $conn->query("SELECT * from asignatura where ID_LicActiva=$id_licenciatura_Activa");
      }catch(Exception $e){
        echo "Error! :" . $e->getMessage();
        return false;
      }
    }