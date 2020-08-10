<?php
$operacion = $_POST['operacion'];

switch ($operacion) {
  //*********************agregar licenciatura en el case************************
  case 'AgregarLicenciatura':
    $NombreLicenciatura = $_POST['NombreLicenciatura'];
    include 'conexion.php';
    try{

      $stmt = $conn->prepare("INSERT INTO licenciatura (NombreLic) VALUES(?)");
      $stmt->bind_param('s',$NombreLicenciatura);
      $stmt->execute(); 
    
      if($stmt->affected_rows > 0){
        $respuesta = array( 
          'respuesta' => 'correcto',
          'id_licenciatura' => $stmt->insert_id,
          'Nombre_lic' => $NombreLicenciatura
        );
      }else{
        $respuesta = array(
          'respuesta' => 'error'
        );
      }
    
      $stmt->close();
      $conn->close(); 
    
    }catch(Exception $e){
      $respuesta = array(
        'error' => $e->getMessage()
      );
    }
    echo json_encode($respuesta);
    break;
//    ************agregar Licenciatura_activa seccion del case************************
      case 'agregar_materia':
        $id_recibido = $_POST['id_licenciatura'];
        $ciclo = $_POST['ciclo'];
    
    include 'conexion.php';
    try{
    
      $stmt = $conn->prepare("INSERT INTO licenciatura_activa (ID_Lincenciatura,ID_Ciclo) VALUES(?,?)");
      $stmt->bind_param('ii',$id_recibido,$ciclo);
      $stmt->execute(); 
    
      if($stmt->affected_rows > 0){  
        $respuesta = array(  
          'como_respuesta' => 'correcto',
          'id_licenciatura' => $stmt->insert_id,
          'Nombre_lic' => $id_recibido
        );
      }else{
        $respuesta = array(
          'respuesta' => 'error'
        );
      }
    
      $stmt->close(); 
      $conn->close(); 
    
    }catch(Exception $e){
      $respuesta = array(
        'error' => $e->getMessage()
      );
    }
    echo json_encode($respuesta);
        break;
        //********** */  FUNCION AGREGAR NUEVA METERIA ******************
        case 'agregar_nueva_materia':
          $id_Lic_Activa = $_POST['id_Lic_Recibida'];
          $Nombre_asignatura = $_POST['Nueva_tarea'];
       include 'conexion.php';
       try{

         $stmt = $conn->prepare("INSERT INTO asignatura (Nombre_Asignatura,ID_LicActiva) VALUES(?,?)");
         $stmt->bind_param('si',$Nombre_asignatura,$id_Lic_Activa);
         $stmt->execute(); 
       
         if($stmt->affected_rows > 0){  
           $respuesta = array(   
             'como_respuesta' => 'correcto',
             'id_asignatura' => $stmt->insert_id,
             'Nombre_Asignatura' => $Nombre_asignatura
           );
         }else{
           $respuesta = array(
             'respuesta' => 'error'
           );
         }   
         $stmt->close(); 
         $conn->close(); 

       }catch(Exception $e){
         $respuesta = array(
           'error' => $e->getMessage()
         );
       }
       echo json_encode($respuesta);
          break;
  default:
    console.log('inexistente');
}