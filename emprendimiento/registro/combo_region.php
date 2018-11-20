<?php
include "../../conexion.php";
$s="SELECT region.id as id,region.nombre as nombre,departamento.autoridad_amb as autoridad from departamento
INNER JOIN region ON region.id = departamento.region_id
where departamento.id = '".$_POST["departamento"]."' ";
$cs= mysqli_query($conn,$s);

$datos = array();

while ($rw=mysqli_fetch_array($cs)) {
	
	$datos = array(

	"id" => $rw['id'],
	"nombre" => $rw['nombre'],
	"autoridad" => $rw['autoridad']

	);

	 // echo"<option value='$rw[id]'>$rw[nombre]</option>";
	 // $datos['datos'][] = $rw;
}

echo json_encode($datos);

 