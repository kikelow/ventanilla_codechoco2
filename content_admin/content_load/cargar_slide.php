<?php 
	require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT id,titulo,descripcion,id_img_page from slide where id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(
			"id" => $sql2['id'],
			"titulo" => $sql2['titulo'],
			"descripcion" => $sql2['descripcion'],
			"id_img_page" => $sql2['id_img_page']
			
		);
	}
}

echo json_encode($datos);

 ?>