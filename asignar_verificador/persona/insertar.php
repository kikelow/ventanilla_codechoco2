<?php 
include "../../conexion.php";
// $identificacion = $_POST['identificacion'];
// echo ($identificacion);
// Inserto los datos del verificador
	 $s="INSERT INTO `persona`(`identificacion`, `nombre1`, `nombre2`, `apellido1`, `paellido2`, `correo`, `celular`, `fijo`, `direccion`, `rol_id`, `entidad`, `area_id`, `cargo`) VALUES ('$_POST[identificacion]','$_POST[nombre1]','$_POST[nombre2]','$_POST[apellido1]','$_POST[apellido2]','$_POST[email]','$_POST[celular]','$_POST[fijo]','$_POST[direccion]','2','','1','')";
	mysqli_query($conn,$s);

//selecciono el id del ultimo verificador insertado
	$s="SELECT id FROM persona WHERE id = (SELECT MAX(id) FROM persona)";
	$cs=mysqli_query($conn,$s);
	$persona_id="";
	while($resul=mysqli_fetch_array($cs)){
		$persona_id=$resul[0];
	}

	$s="INSERT INTO `login`(`usuario`, `clave`, `persona_id`) VALUES ('$_POST[identificacion]','$_POST[identificacion]','$persona_id')";
	mysqli_query($conn,$s);
	// echo $s;
 ?>
