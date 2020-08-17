<?php
function conectarse(){
	if(!($link=mysqli_connect("localhost", "root","adminadmin")))
	{
		echo "Error conectando a la base de datos";
		exit();
	}
if(!mysqli_select_db($link,"bd_nag"))
{
	echo "error seleccionando datos";
	exit();
	
}
	return $link;
}
?>