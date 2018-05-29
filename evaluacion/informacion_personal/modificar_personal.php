<?php 
include "../../conexion.php";

	$s="UPDATE persona SET 
	identificacion = '$_POST[identificacion]',
	nombre1 = '$_POST[nombre1]',
	nombre2 = '$_POST[nombre2]',
	apellido1 = '$_POST[apellido1]',
	paellido2 = '$_POST[apellido2]',
	correo = '$_POST[email]',
	celular = '$_POST[celular]',
	fijo = '$_POST[fijo]',
	direccion = '$_POST[direccion]' WHERE id = '$_POST[id]' ";

	mysqli_query($conn,$s);
	echo $s;

 ?>