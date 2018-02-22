<?php
include "../../conexion.php";
$s="select id,nombre from sector where categoria_id = '".$_POST["categoria"]."' ";
$cs= mysqli_query($conn,$s);
while ($rw=mysqli_fetch_array($cs)) {
	$id = $rw['id'];
	$nombre = $rw['nombre']; 
	 echo"<option value='$rw[id]'>$rw[nombre]</option>";
	 
}
