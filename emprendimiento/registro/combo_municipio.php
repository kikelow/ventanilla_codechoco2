<?php
include "../../conexion.php";
$depto = $_POST['departamento'];
$s="SELECT id,nombre from municipio where departamento_id = '$depto' ORDER by nombre ";
$cs= mysqli_query($conn,$s);

while ($rw=mysqli_fetch_array($cs)) {
	$id = $rw['id'];
	$nombre = $rw['nombre']; 
	 echo"<option value='$rw[id]'>$rw[nombre]</option>";
}

?>
