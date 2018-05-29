<?php 
	
require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT a.id,a.nombre,a.ruta,a.contenido_id,c.titulo as contenido from archivo_page a,contenido c where c.id = a.contenido_id AND a.id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(

			"id" => $sql2['id'],
			"nombre" => $sql2['nombre'],
			"ruta" => $sql2['ruta'],
			"contenido_id" => $sql2['contenido_id'],
			"contenido" => $sql2['contenido']

		);
	}
}

echo json_encode($datos);

?>