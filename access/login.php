<?php 
if (isset($_POST["usuario"])) {
	require_once ("../conexion.php");
	$usuario = $_POST["usuario"];
	$contrasena = $_POST["contrasena"];
	
	$respuesta = "";
	$s = "SELECT persona.id, persona.rol_id,login.clave FROM login
		INNER JOIN persona ON login.persona_id = persona.id
		WHERE login.usuario = '$usuario'";
	$resultado = $conn->query($s);
	if ($resultado->num_rows > 0) {
		$rol ="";
		$id = "";
		$clave_bd = "";
		
		while($row=$resultado->fetch_assoc()){
			$rol = $row['rol_id'];
			$id = $row['id'];
			$clave_bd = $row['clave'];
		}

		// $verifi_contraseña = password_verify($contrasena,$clave_bd);

		// echo $verifi_contraseña;

		// // echo $verifi_contraseña;

		// if ($verifi_contraseña) {
		echo $rol;
				if ($rol == '1') {
			session_start();
			$_SESSION["vev_admin_contenido"]= $id;
			
		}else if ($rol == '2') {
			session_start();
			$_SESSION["vev_verificador"]= $id;
		}
		else if ($rol == '3') {
			session_start();
			$_SESSION["vev_admin_verificador"]= $id;
		}
			// }

	}else{
		// print(0);
	}
}else{
	
}

 ?>