<?php 
	require_once("../../conexion.php");
	
$id = $_POST['id'];


$sql = "SELECT n.id,n.titulo,n.descripcion,n.fecha_publicacion,n.fuente_autor,n.id_img_page,i.nombre as imagen FROM noticia n, img_page i WHERE n.id_img_page = i.id and n.id = '$id'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$datos = array();
if (mysqli_num_rows($result)>0) {
	while ($sql2 = mysqli_fetch_array($result)) {

		$datos = array(
			"id" => $sql2['id'],
			"titulo" => $sql2['titulo'],
			"descripcion" => $sql2['descripcion'],
			"fecha_publicacion" => $sql2['fecha_publicacion'],
			"fuente_autor" => $sql2['fuente_autor'],
			"id_img_page" => $sql2['id_img_page'],
			"nombre_img_page" => $sql2['imagen']
		);
	}
}

echo json_encode($datos);

 ?>