<?php
if (isset($_GET["nombreinstitucion"]) && isset($_GET["correoinst"]) ){
    $nombre=$_GET["nomreinstitucion"];
    $correo=$_GET["correo"];

    echo"Nombre: $nombre......
    Email:$coreo";
}

?>