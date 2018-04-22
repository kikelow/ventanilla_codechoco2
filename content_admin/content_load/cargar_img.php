<?php 
	require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT id,nombre,ruta from img_page where id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(
			"id" => $sql2['id'],
			"nombre" => $sql2['nombre'],
			"ruta" => $sql2['ruta']
			
		);
	}
}

echo json_encode($datos);

 ?>