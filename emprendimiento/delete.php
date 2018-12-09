<?php 
$empresa = 9;


// registro__________________________________
$s="SELECT id,empresario_id FROM empresa WHERE id = $empresa";
	$cs=mysqli_query($conn,$s);
	$persona_id="";
	$empresario_id="";
	while($resul=mysqli_fetch_assoc($cs)){
		$persona_id=$resul['id'];
		$empresario_id=$resul['id'];
	}

$s="DELETE * FROM persona WHERE id = $persona_id";
mysqli_query($conn,$s);

$s="DELETE * FROM empresario WHERE id = $empresario_id";
mysqli_query($conn,$s);

$s="DELETE * FROM cabildo WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM consejo_comunitario WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM junta_comunal WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM grupo_etnico WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM tcip WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM veri_empresa WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM actividad_empresa WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM bienes_servicios WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM verificador WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM img_empresa WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

//informacion complementaria
$complementaria_id = "";
$s="SELECT id FROM informacion_complementaria WHERE empresa_id = $empresa";
	$cs=mysqli_query($conn,$s);
	while($resul=mysqli_fetch_assoc($cs)){
		$complementaria_id=$resul['id'];
	}

$s="DELETE * FROM impacto_practicas WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM conservacion WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM certificacion WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM total_empleados WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM tipo_contrato WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM descripcion_etaria WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM condicion_vulnerabilidad_es WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM otro_condicion_vulneravibilidad WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM nivel_educativo WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM otro_nivel_educativo WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM negocio_comunidad WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM otro_negocio_comunidad WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM actividades WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM programa WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM otro_programa WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM apoyo WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM cadena_valor WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM sost_economica WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM bienes_servicios_adicionales WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM total_ventas WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM comercializacion WHERE info_com_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM turismo WHERE info_com_id = $empresa";
mysqli_query($conn,$s);


$s="DELETE * FROM informacion_complementaria WHERE empresa_id = $empresa";
mysqli_query($conn,$s);


//hojas verificacion y plan de mejora 
$s="DELETE * FROM hoja_verificacion_1 WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM hoja_verificacion_2 WHERE empresa_id = $empresa";
mysqli_query($conn,$s);

$s="DELETE * FROM plan_mejora WHERE empresa_id = $empresa";
mysqli_query($conn,$s);



//verificador por empresa 

$s="DELETE * FROM verificadorxempresa WHERE empresa_id = $empresa";
mysqli_query($conn,$s);


//empresa_______________
$s="DELETE * FROM empresa WHERE id = $empresa";
mysqli_query($conn,$s);



 ?>