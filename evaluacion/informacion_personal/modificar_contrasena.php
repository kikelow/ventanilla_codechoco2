<?php 
session_start();
if (isset($_POST['conf_contra'])) {
		include '../../conexion.php';
		$clave = "";
		$query = "SELECT * FROM login WHERE persona_id = '$_SESSION[vev_verificador]' ";
		$resultado = mysqli_query($conn,$query);
		while ($row = mysqli_fetch_assoc($resultado)) {
			$clave = $row['clave'];
		}

		$verifi_contraseña = password_verify($_POST['contra_actual'],$clave);

		if ($verifi_contraseña) {

			$pass = password_hash($_POST['conf_contra'],PASSWORD_DEFAULT);
			
			$query = "UPDATE login SET clave = '$pass' WHERE persona_id = '$_SESSION[vev_verificador]' ";
			mysqli_query($conn,$query);
			print('si');
		}else{
			print('no');
		}
	 } 
	 
 ?>