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
    //-------------------editar licenciaturas -----------------------------
    case 'editar_licenciatura':
      $id_recibido = $_POST['id_licenciatura'];
      $NombreLicenciatura = $_POST['nombre'];
      $periodos = $_POST['periodos'];
      include 'conexion.php';
      try{
     $stmt = $conn->prepare("update licenciatura set NombreLic=?,periodos=? where ID_Lincenciatura=?");
     $stmt->bind_param('ssi',$NombreLicenciatura,$periodos,$id_recibido);
     $stmt->execute(); 
   
     if($stmt->affected_rows > 0){  
       $respuesta = array(   
         'como_respuesta' => 'editar_la_lic',
         'numero' => $periodos,
         'Nombre_Asignatura' => $NombreLicenciatura
       );
     }else{
       $respuesta = array(
         'respuesta' => 'error',
         'id_recibido' => $id_recibido,
          'nombre_asignatura' => $NombreLicenciatura
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
    // *********************** eliminar licenciatura **************************
    case 'Eliminar_licenciatura':
      $id_recibido = $_POST['id_licenciatura'];
      include 'conexion.php';
      try{
     $stmt = $conn->prepare("delete from licenciatura where ID_Lincenciatura=?");
     $stmt->bind_param('i',$id_recibido);
     $stmt->execute(); 
   
     if($stmt->affected_rows > 0){  
       $respuesta = array(   
         'como_respuesta' => 'borrado',
         'id_asignatura' => $id_recibido
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
          /*--------------- Eliminar materias ---- */
          case 'eliminar_materia':
            $id_recibido = $_POST['id_recibido'];
       include 'conexion.php';
       try{
         $stmt = $conn->prepare("delete from asignatura where ID_Asignatura=?");
         $stmt->bind_param('i',$id_recibido);
         $stmt->execute();     
         if($stmt->affected_rows > 0){  
           $respuesta = array(   
             'estado' => 'se borro correctamente de asignatura',
             'id_asignatura' => $id_recibido
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

          //------------editar asignatura --------------------------------*
      case 'editar_asignatura':
        $id_recibido = $_POST['id_asignatura'];
        $Nombre_asignatura = $_POST['nombre'];
        include 'conexion.php';
        try{
       $stmt = $conn->prepare("update asignatura set Nombre_Asignatura=? where ID_Asignatura=?");
       $stmt->bind_param('si',$Nombre_asignatura,$id_recibido);
       $stmt->execute(); 
     
       if($stmt->affected_rows > 0){  
         $respuesta = array(   
           'como_respuesta' => 'editar_materias',
           'id de asignatura' => $id_recibido,
           'Nombre_Asignatura' => $Nombre_asignatura
         );
       }else{
         $respuesta = array(
           'respuesta' => 'error',
           'valor' =>  'editar materias',
            'nombre_asignatura' => $Nombre_asignatura
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