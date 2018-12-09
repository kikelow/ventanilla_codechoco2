<?php
include "../../conexion.php";
$s="SELECT autoridad_amb from municipio where id = '$_POST[municipio]' ";
$autoridad_amb = "";
$cs= mysqli_query($conn,$s);
while ($rw=mysqli_fetch_assoc($cs)) {
	$autoridad_amb = $rw['autoridad_amb'];
}

echo $autoridad_amb;
// echo json_encode($datos);
?>
 