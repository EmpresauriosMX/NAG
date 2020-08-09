<?php
$operacion = $_POST['operacion'];

switch ($operacion) {
  case 'AgregarLicenciatura': //agregar licenciatura en el case
    $Nombre_tarea = $_POST['Nombre_tarea'];
    $id = $_POST['id_licenciatura'];
    
    include 'conexion.php';
    try{
      //consulta a la base de datos
      $stmt = $conn->prepare("INSERT INTO licenciatura (NombreLic) VALUES(?)");
      $stmt->bind_param('s',$NombreLicenciatura);
      $stmt->execute(); 
    
      if($stmt->affected_rows > 0){  //si la columna de la tabla ha sido modicada entonces
        $respuesta = array(   //enviar esta respuesta (se puede cambiar)
          'respuesta' => 'correcto',
          'id_licenciatura' => $stmt->insert_id,
          'Nombre_lic' => $NombreLicenciatura
        );
      }else{
        $respuesta = array(
          'respuesta' => 'error'
        );
      }
    
      $stmt->close(); //termina la sentencia
      $conn->close(); //termina la conexion
    
    }catch(Exception $e){
      //tomar la Exception
      $respuesta = array(
        'error' => $e->getMessage()
      );
    }
    echo json_encode($respuesta);
    break;
      case 'agregar_materia': //agregar materia seccion del case
 
        $id_recibido = $_POST['id_licenciatura'];
        $ciclo = $_POST['ciclo'];
    
    include 'conexion.php';
    try{
      //consulta a la base de datos
      $stmt = $conn->prepare("INSERT INTO licenciatura_activa (ID_Lincenciatura,ID_Ciclo) VALUES(?,?)");
      $stmt->bind_param('ii',$id_recibido,$ciclo);
      $stmt->execute(); 
    
      if($stmt->affected_rows > 0){  //si la columna de la tabla ha sido modicada entonces
        $respuesta = array(   //enviar esta respuesta (se puede cambiar)
          'como_respuesta' => 'correcto',
          'id_licenciatura' => $stmt->insert_id,
          'Nombre_lic' => $id_recibido
        );
      }else{
        $respuesta = array(
          'respuesta' => 'error'
        );
      }
    
      $stmt->close(); //termina la sentencia
      $conn->close(); //termina la conexion
    
    }catch(Exception $e){
      //tomar la Exception
      $respuesta = array(
        'error' => $e->getMessage()
      );
    }
    echo json_encode($respuesta);
     
        break;
        case 'existe_correo':
       
          break;
  default:
    console.log('inexistente');
}