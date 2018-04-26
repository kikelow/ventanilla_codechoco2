<?php 
	require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT l.id,l.usuario,l.clave,l.persona_id, concat(persona.nombre1,' ',ifnull(persona.nombre2,' '),' ',persona.apellido1) as empleado FROM login l, persona WHERE l.persona_id = persona.id and l.id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(
			"id" => $sql2['id'],
			"usuario" => $sql2['usuario'],
			"clave" => $sql2['clave'],
			"persona_id" => $sql2['persona_id'],
			"Empleado" => $sql2['empleado']
		);
	}
}

echo json_encode($datos);

 ?>