<?php 
require_once("../../conexion.php");

$id_img = $_GET['id_img'];

echo $id_img;
if ($_FILES['file_img']['name']=="") {
	mysqli_query($conn,"UPDATE img_page set nombre ='".$_POST['nombre_imagen']."' where id=".$id_img.";") or die (mysqli_error($conn));
	}
	else{
		$re = mysqli_query($conn,"SELECT ruta from img_page where id =".$id_img.";");
		while ($f=mysqli_fetch_array($re)) {
			unlink("../content_save/img_content/".$f['ruta']);
		}
		$ruta = "../content_save/img_content/";
		opendir($ruta);
		$destino = $ruta.$_FILES['file_img']['name'];
		move_uploaded_file($_FILES['file_img']['tmp_name'],$destino);
		$nombre=$_FILES['file_img']['name'];
		mysqli_query($conn," UPDATE img_page set nombre ='".$_POST['nombre_imagen']."', ruta ='".$nombre."' where id =".$id_img.";");
	}

// $limite_kb = 5120;
//     if ($_FILES["file_img"]["size"] > 0) {
//           if ($_FILES["file_img"]["size"] <= $limite_kb * 1024) {
//              $tmp_name = $_FILES["file_img"]["tmp_name"];
// 		        $name = basename($_FILES["file_img"]["name"]);
// 		        $ruta = "img_content";
// 		        $ruta=$ruta."/".$name;

// 		        ///$archivo = $ruta.$name
// 		        $m = move_uploaded_file($tmp_name, $ruta);
// 		        if ($m != false) {
// 		        	$s="INSERT INTO `img_page` VALUES (null,'$nombre','$name')";
//         			$q = mysqli_query($conn,$s) or die(mysqli_error($conn));
//         			if ($q == true) {
//         				echo "Guardado exitoso";
//         			}else{
//         				echo "Error al guardar";
//         			}
// 		        }else 
// 					{
// 					echo "error al subir el archivo";		        
// 		        }
//         }
//         else
//         {
//         	echo "Ha excedido la el tamaño permito de carga para imagenes";
//         }
//     }
//     else{
//     	echo "Debe seleccionar una imagen";
//     }    
?>