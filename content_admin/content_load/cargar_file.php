<?php 
	
require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT a.id,a.nombre,a.ruta,a.alias_id,c.nombre as alias from archivo_page a,alias c where c.id = a.alias_id AND a.id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(

			"id" => $sql2['id'],
			"nombre" => $sql2['nombre'],
			"ruta" => $sql2['ruta'],
			"alias_id" => $sql2['alias_id'],
			"alias" => $sql2['alias']

		);
	}
}

echo json_encode($datos);

?>