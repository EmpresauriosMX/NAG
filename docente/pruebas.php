<?php
//include '../inc/funciones/funciones.php';
/*
while($row=mysqli_fetch_array($resultado)){ ?> 
    <a class="dropdown-item" href="#"> <?php echo ($row["NombreLic"]);?> </a>
   <?php
} ?>*/
while($row=mysqli_fetch_array($resultado)){ ?> 
<tr>
<td> <?php echo ($row["ID_Lincenciatura"]);?> 
<td> <?php echo ($row["NombreLic"]);?> </td>
<td> <input type="text" name="calificacion_prueba" id="calificacion" class="calificaciones" placeholder="calificacion"  required disabled></td>
<?php
} ?>