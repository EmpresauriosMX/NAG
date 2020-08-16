<?php
function conectarse(){
	if(!($link=mysqli_connect("localhost", "root","")))
	{
		echo "Error conectando a la base de datos";
		exit();
	}
if(!mysqli_select_db($link,"escuela"))
{
	echo "error seleccionando datos";
	exit();
	
}
	return $link;
}
?>