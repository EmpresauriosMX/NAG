<?php
$NombreLicenciatura = $_POST['NombreLicenciatura'];

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