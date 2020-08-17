<?php
$respuesta ='entro';
echo json_encode($respuesta);

include 'conexion.php';
try {
    $stmt = $conn->prepare("SELECT usuario, id_usuarios, correo FROM usuarios WHERE correo = ?");
    $stmt->bind_param('s', $correo);
    $stmt->execute();
    // Loguear el usuario
    $stmt->bind_result($nombre_usuario, $id_usuario, $correo_usuario);
    $stmt->fetch();
    if($correo_usuario){
      $valor_correo = 'no';
      $respuesta = array ( //en caso de que este el correo
        'respuesta' => 'existe_correo',
        'tipo' => $accion
      );
    }else{
      $valor_correo = 'si';/*     variable de cambio        );*/
    }
    $stmt->close();
    $conn->close();
}catch(Exception $e){
$respuesta = array(
  'pass' => $e->getMessage()
);
}