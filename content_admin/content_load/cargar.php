<?php 
	require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT c.id,c.titulo,c.alias_id as alias_id,a.nombre as alias,c.descripcion,c.id_img_page,i.nombre as imagen FROM contenido c,alias a,img_page i WHERE c.alias_id = a.id and c.id_img_page = i.id and c.id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(
			"id" => $sql2['id'],
			"titulo" => $sql2['titulo'],
			"alias_id" => $sql2['alias_id'],
			"alias" => $sql2['alias'],
			"descripcion" => $sql2['descripcion'],
			"id_img_page" => $sql2['id_img_page'],
			"nombre_img_page" => $sql2['imagen']
		);
	}
}

echo json_encode($datos);

 ?>