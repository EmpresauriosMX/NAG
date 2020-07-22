<?php
function Conectarse()
{
	if (!($link=mysqli_connect("localhost","root","adminadmin")))
	{
		echo "Error conectando a la basee de datos.";
		exit();
	}
	if(!mysqli_select_db($link,"basenag"))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}
?>
