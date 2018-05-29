<?php 
require_once("../../conexion.php");

$id_file = $_GET['id_file'];

echo $id_file;
if ($_FILES['file']['name']=="") {
	mysqli_query($conn,"UPDATE archivo_page set nombre ='".$_POST['nombre_archivo']."' , contenido_id ='".$_POST['contenido_archivo']."' where id=".$id_file.";") or die (mysqli_error($conn));
	}
	else{
		$re = mysqli_query($conn,"SELECT ruta from archivo_page where id =".$id_file.";");
		while ($f=mysqli_fetch_array($re)) {
			unlink("../content_save/file_content/".$f['ruta']);
		}
		$ruta = "../content_save/file_content/";
		opendir($ruta);
		$destino = $ruta.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'],$destino);
		$nombre=$_FILES['file']['name'];
		mysqli_query($conn," UPDATE archivo_page set nombre ='".$_POST['nombre_archivo']."', ruta ='".$nombre."' , contenido_id ='".$_POST['contenido_archivo']."' where id =".$id_file.";");
	}

// $limite_kb = 5120;
?>