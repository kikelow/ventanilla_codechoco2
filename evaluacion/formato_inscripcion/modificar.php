<?php 
include "../../conexion.php";
	$empresa = $_GET['empresa'];




// Modificar de actividad empresa checkbox
	$check = $_POST['actividad_emp_m'];
	$confirmacion = $_POST['actividad_emp_hidden_m'];
	$resultado_chequeado = array_intersect($confirmacion,$check);
	$resultado_nochequeado = array_diff($confirmacion,$check);
	for ($i=0; $i <sizeof($confirmacion); $i++) {
	
		if ($resultado_nochequeado[$i]) {
		$s="UPDATE `actividad_empresa` SET 
	`confirmacion`='no' WHERE empresa_id ='$empresa' and `actividad_item_id` = '".$resultado_nochequeado[$i]."'";
		mysqli_query($conn,$s);	
		}else if ($resultado_chequeado[$i]) {
			$s="UPDATE `actividad_empresa` SET 
		`confirmacion`='si' WHERE empresa_id ='$empresa' and `actividad_item_id` = '".$resultado_chequeado[$i]."' ";
			mysqli_query($conn,$s);
		}else if (!$check) {
			$s="UPDATE `actividad_empresa` SET 
		`confirmacion`='no' WHERE empresa_id ='$empresa' and `actividad_item_id` = '".$confirmacion[$i]."' ";
			mysqli_query($conn,$s);
		}
	}

 ?>