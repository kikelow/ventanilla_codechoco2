<?php
include "../../conexion.php";
$s="select id,nombre from departamento where region_id = '".$_POST["region"]."' ";
$cs= mysqli_query($conn,$s);
while ($rw=mysqli_fetch_array($cs)) {
	$id = $rw['id'];
	$nombre = $rw['nombre']; 
	 echo"<option value='$rw[id]'>$rw[nombre]</option>";
	 // $datos['datos'][] = $rw;
	 
}

// echo json_encode($datos);

 