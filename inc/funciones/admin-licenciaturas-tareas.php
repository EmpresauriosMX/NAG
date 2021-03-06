<?php
$operacion = $_POST['operacion'];

switch ($operacion) {
  //*********************e************************
  case 'obtener_periodo':
    include 'conexion.php';
   $variable = $_POST['variable'];
   try {
    $stmt = $conn->prepare("SELECT periodos FROM licenciatura WHERE ID_Lincenciatura = ?");
    $stmt->bind_param('s', $variable);
    $stmt->execute();
    // Loguear el usuario
    $stmt->bind_result($periodo);
    $stmt->fetch();

      $respuesta = array ( //en caso de que este el correo
        'respuesta' => 'existe el valor',
        'valor_periodo' => $periodo,
        'valor_del_id' => $variable
      );

    $stmt->close();
    $conn->close();
}catch(Exception $e){
$respuesta = array(
  'pass' => $e->getMessage()
);
}

echo json_encode($respuesta);
  break;

  //ejemplo************************
  case 'poner':
    include 'conexion.php';
$query = "select * from licenciatura";

  $result = mysqli_query($conn,$query);

  $rows = array();
  /*
  while($r = mysqli_fetch_array($result)) {
    $rows[] = $r;
  }*/

  while ($fila = $result->fetch_assoc()) {
    //agregar una fila mas al array
    array_push($rows,array(
    "ID_Lincenciatura"=>$fila["ID_Lincenciatura"],
    "nombre"=>$fila["NombreLic"],
    "total_periodos"=>$fila["periodos"]));
}

  echo json_encode($rows);
  break;

  //*/////////////////agregar licenciatura**********************
  case 'AgregarLicenciatura':
    $NombreLicenciatura = $_POST['NombreLicenciatura'];
    $periodo = $_POST['periodo'];
    include 'conexion.php';
    try{
      $stmt = $conn->prepare("INSERT INTO licenciatura (NombreLic,periodos) VALUES(?,?)");
      $stmt->bind_param('si',$NombreLicenciatura,$periodo);
      $stmt->execute(); 
    
      if($stmt->affected_rows > 0){
        $respuesta = array( 
          'respuesta' => 'correcto_si',
          'id_licenciatura' => $stmt->insert_id,
          'Nombre_lic' => $NombreLicenciatura,
          'periodos' => $periodo
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
        $periodo = $_POST['periodo'];
    
    include 'conexion.php';
    try{
        
      $stmt = $conn->prepare("INSERT INTO licenciatura_activa (ID_Lincenciatura,ID_Ciclo,id_periodo) VALUES(?,?,?)");
      $stmt->bind_param('iii',$id_recibido,$ciclo,$periodo);
      $stmt->execute(); 
    
      if($stmt->affected_rows > 0){  
        $respuesta = array(  
          'como_respuesta' => 'correcto',
          'id_licenciatura' => $stmt->insert_id,
          'Nombre_lic' => $id_recibido
        );
      }else{
        $respuesta = array(
          'respuesta' => 'error al agregar licenciatura activa',
          'id_licenciatura' => $id_recibido,
          'ciclo' => $ciclo,
          'periodo' => $periodo
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
    // **********************     editar_licenciatura activa   ***************************
    case 'editar_licenciatura_activa':
      $id_activa = $_POST['id_activa'];
      $id_recibido = $_POST['id_licenciatura'];
      $periodos = $_POST['periodos'];
      include 'conexion.php';
      try{
     $stmt = $conn->prepare("update licenciatura_activa set ID_Lincenciatura=?,id_periodo=? where ID_LicActiva=?");
     $stmt->bind_param('ssi',$id_recibido,$periodos,$id_activa);
     $stmt->execute(); 
   
     if($stmt->affected_rows > 0){  
       $respuesta = array(   
         'como_respuesta' => 'editar_lic_activa',
         'numero' => $periodos,
         'Nombre_Asignatura' => $id_activa,
         'el_id_licenciatura' => $id_recibido
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
        break;
        // *****************  eliminar licenciatura activa     *******************
        case 'Eliminar_licenciatura_activa':
          $id_recibido = $_POST['id_licenciatura_activa'];
      include 'conexion.php';
      try{
     $stmt = $conn->prepare(" delete from licenciatura_activa where ID_LicActiva=?");
     $stmt->bind_param('i',$id_recibido);
     $stmt->execute(); 
   
     if($stmt->affected_rows > 0){  
       $respuesta = array(   
         'como_respuesta' => 'borrado',
         'id_asignatura_activa' => $id_recibido
       );
     }else{
       $respuesta = array(
         'respuesta' => 'error',
          'id_asignatura_activa' => $id_recibido
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