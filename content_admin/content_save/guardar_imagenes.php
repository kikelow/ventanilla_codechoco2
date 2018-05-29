<?php 
include "../../conexion.php";

$nombre = $_POST['nombre_imagen'];


$limite_kb = 5120;


    if ($_FILES["file_img"]["size"] > 0) {

          if ($_FILES["file_img"]["size"] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["file_img"]["tmp_name"];

		        $name = basename($_FILES["file_img"]["name"]);
		        $ruta = "img_content";
		        $ruta=$ruta."/".$name;

		        ///$archivo = $ruta.$name;

		        $m = move_uploaded_file($tmp_name, $ruta);

		        if ($m != false) {
		        	
		        	$s="INSERT INTO `img_page` VALUES (null,'$nombre','$name')";
        			$q = mysqli_query($conn,$s) or die(mysqli_error($conn));

        			if ($q == true) {
        				
        				echo "Guardado exitoso";
        			}else{
        				echo "Error al guardar";
        			}

		        }else 
					{
					echo "error al subir el archivo";		        

		        }
        }
        else
        {
        	echo "Ha excedido la el tamaño permito de carga para imagenes";
        }

    }
    else{
       
    	echo "Debe seleccionar una imagen";

    }    
?>