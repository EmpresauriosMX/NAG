<?php
  $conn = new mysqli('localhost','root','babaro123','escolar');

  if ($conn->ping()) {
   echo json_encode ('La conexion esta bien');
   /* $respuesta = array(   //enviar esta respuesta (se puede cambiar)
        'respuesta' => 'correcto',
        'id_tarea' => $stmt->insert_id,
        'tipo' => $accion,
        'tarea' => $tarea
      );
      echo json_encode($respuesta);*/
} else {
    echo json_encode ('Error:', $conn->error);
}
 ?>
