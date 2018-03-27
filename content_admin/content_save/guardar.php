<?php 

include '../../conexion.php';

$titulo = $_POST['titulo'];
$alias = $_POST['alias'];
$descripcion = $_POST['descripcion'];
//$img = $_POST['img'];

if ($titulo != "" && $alias != "" && $descripcion != "") {
	
	$s = "INSERT INTO contenido values (null,'$alias','$titulo','$descripcion',1)";
	$guardar = mysqli_query($conn,$s) or die (mysqli_error($conn));

	
	echo $guardar;

	if ($guardar) {
		
		echo "datos guardados";
	}

}else{

	echo "Campos vacios";
}

?>
