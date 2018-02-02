<?php
include "../../conexion.php";
$s="select id,nombre from subsector where sector_id = '".$_POST["sector"]."' ";
$cs= mysqli_query($conn,$s);
while ($rw=mysqli_fetch_array($cs)) {
	$id = $rw['id'];
	$nombre = $rw['nombre']; 
	 echo"<option value='$rw[id]'>$rw[nombre]</option>";
	 
}
