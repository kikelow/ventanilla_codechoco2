<?php 
session_start();
if (isset($_POST['conf_contra'])) {
		include '../../conexion.php';
		$clave = "";
		$query = "SELECT * FROM login WHERE persona_id = '$_SESSION[vev_admin_contenido]' ";
		$resultado = mysqli_query($conn,$query);
		while ($row = mysqli_fetch_assoc($resultado)) {
			$clave = $row['clave'];
		}
		if ($clave == $_POST['contra_actual']) {
			$query = "UPDATE login SET clave = '$_POST[conf_contra]' WHERE persona_id = '$_SESSION[vev_admin_contenido]' ";
			mysqli_query($conn,$query);
			print('si');
		}else{
			print('no');
		}
	 } 

 ?>