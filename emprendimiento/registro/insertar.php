<?php 
include "../../conexion.php";

 // Inserto los datos del representante legal
	 $s="INSERT INTO `persona`(`identificacion`, `nombre1`, `nombre2`, `apellido1`, `paellido2`, `correo`, `celular`, `fijo`, `direccion`, `rol_id`, `entidad`, `area_id`, `cargo`) VALUES ('$_POST[documento]','$_POST[representante]','','','','$_POST[correo]','$_POST[celular]','$_POST[fijo]','$_POST[direccion_c]','4','','1','')";
	mysqli_query($conn,$s);

//selecciono el id del ultimo representante legal insertado
	$s="SELECT id FROM persona WHERE id = (SELECT MAX(id) FROM persona)";
	$cs=mysqli_query($conn,$s);
	$persona_id="";
	while($resul=mysqli_fetch_array($cs)){
		$persona_id=$resul[0];
	}
	//sacar la fecha
		date_default_timezone_set('America/Bogota');
		$fecha_registro = date("Y-m-d H:i:s");


// Inserto los datos del empresario
	 $s="INSERT INTO `empresario`(`identificacion`, `nombre`, `cargo`) VALUES ('$_POST[identificacion_entrevistado]','$_POST[entrevistado]','$_POST[cargo_entrevistado]')";
	mysqli_query($conn,$s);

//selecciono el id del ultimo empresario insertado
	$s="SELECT id FROM empresario WHERE id = (SELECT MAX(id) FROM empresario)";
	$cs=mysqli_query($conn,$s);
	$empresario_id="";
	while($resul=mysqli_fetch_array($cs)){
		$empresario_id=$resul[0];
	}

//inserto los datos de la empresa
	$s="INSERT INTO `empresa`(`tipo_persona_id`, `tipo_identificacion_id`, `identificacion`, `razon_social`, `persona_id`, `empresario_id`, `municipio_id`, `vereda`, `direccion`, `aut_ambiental`, `coodenadas_n`, `coordenadas_w`, `altitud`, `area`, `si_no_pot_id`, `fami_empresa_si_no`, `tamaño_empresa_id`, `fecha_registro`, `descripcion`, `desc_impacto_amb`, `num_socios`, `asociacion_si_no`, `subsector_id`, `etapa_empresa_id`, `const_legalmente_sino`, `año_funcionamiento`, `opera_actualmente_sino`, `año_func_desp_reg_camara`, `obs_general`, `informacion_as`, `verificacion1`, `verificacion2`, `plan_mejora`,`puntaje`) VALUES ('$_POST[t_persona]','$_POST[t_identificacion]','$_POST[identificacion]','$_POST[razon_social]','$persona_id','$empresario_id','$_POST[municipio]','$_POST[vereda]','$_POST[direccion_p]','$_POST[autoridad_ambiental]','$_POST[coordenada_n]','$_POST[coordenada_w]','$_POST[altitud]','$_POST[area]','$_POST[pot]','$_POST[famiempresa]','$_POST[tamaño_empresa]','$fecha_registro','$_POST[desc_negocio]','$_POST[desc_imp_ambiental]','$_POST[num_asociados]','$_POST[asosiacion]','$_POST[subsector]','$_POST[etapa_empresa]','$_POST[cmb_legal]','$_POST[legal]','$_POST[cmb_ope_actualidad]','$_POST[año_desp_registro]','$_POST[observacion_general]','no','no','no','no','')";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
	echo $s;
//selecciono el id de la ultima empresa insertada
	$s="SELECT id FROM empresa WHERE id = (SELECT MAX(id) FROM empresa)";
	$cs=mysqli_query($conn,$s);
	$empresa_id="";
	while($resul=mysqli_fetch_array($cs)){
		$empresa_id=$resul[0];
	}
	//insertar datos en la tabla empleado sexo
	$s="INSERT INTO `empleado_sexo`(`empresa_id`, `socio_empleado_id`, `sexo_id`, `cantidad`) VALUES
	('$empresa_id','1','1','$_POST[masculino_1]'),('$empresa_id','1','2','$_POST[femenino_1]'),
	('$empresa_id','2','1','$_POST[masculino_2]'),('$empresa_id','2','2','$_POST[femenino_2]'),
	('$empresa_id','3','1','$_POST[masculino_3]'),('$empresa_id','3','2','$_POST[femenino_3]')";
	mysqli_query($conn,$s);

	//insertar datos en la tabla empleado_edad
	$s="INSERT INTO `empleado_edad`(`empresa_id`, `edad_id`, `cantidad`) VALUES('$empresa_id','1','$_POST[entre_18_30]'), ('$empresa_id','2','$_POST[entre_30_50]'), ('$empresa_id','3','$_POST[mayor_50]')";
	mysqli_query($conn,$s);

	//insetar datos en la tabla tipo_vinculacion
	$s="INSERT INTO `tipo_vinculacion`(`empresa_id`, `vinculacion_id`, `cantidad`) VALUES('$empresa_id','1','$_POST[indefinido]'), ('$empresa_id','2','$_POST[definido]'), ('$empresa_id','3','$_POST[por_dias]')";
	mysqli_query($conn,$s);

	//insertar datos en la tabla nivel_educativo
	$s="INSERT INTO `nivel_educativo`(`empresa_id`, `nivel_id`, `cantiad`) VALUES('$empresa_id','1','$_POST[primaria]'), ('$empresa_id','2','$_POST[bachillerato]'),('$empresa_id','3','$_POST[tecnico]'), ('$empresa_id','4','$_POST[universitario]'), ('$empresa_id','5','$_POST[otro]')";
	mysqli_query($conn,$s);

	//insertar datos en la tabla demografia
	$s="INSERT INTO `demografia`(`empresa_id`, `desc_demografia_id`, `si_no_id`, `cantidad`) VALUES('$empresa_id','1','$_POST[cmb_indigena]','$_POST[indigena]'), ('$empresa_id','2','$_POST[cmb_discapacitado]','$_POST[discapacitado]'),('$empresa_id','3','$_POST[cmb_adulto]','$_POST[adulto]'), ('$empresa_id','4','$_POST[cmb_madre_familia]','$_POST[madre_familia]'),('$empresa_id','5','$_POST[cmb_reinsertados]','$_POST[reinsertados]'), ('$empresa_id','6','$_POST[cmb_desplazado]','$_POST[desplazado]'),('$empresa_id','7','$_POST[cmb_demografia_otro]','$_POST[demografia_otro]') ";
	mysqli_query($conn,$s);

	//insetar datos en la tabla activdad_empresa
	$check = $_POST['actividad_emp'];
	$confirmacion = $_POST['actividad_emp_hidden'];

	$resultado_chequeado = array_intersect($confirmacion,$check);
	$resultadom_nochequeado = array_diff($confirmacion,$check);
	$y = 0;
	for ($i=0; $i <sizeof($confirmacion); $i++) {
		$y++;
		if ($resultadom_nochequeado[$i]) {
		$s="INSERT INTO `actividad_empresa`(`empresa_id`, `actividad_item_id`,`confirmacion`) VALUES('$empresa_id','".$resultadom_nochequeado[$i]."','no')";
		mysqli_query($conn,$s) or die(mysqli_error($conn))  ;	
		}else if ($resultado_chequeado[$i]) {
			$s="INSERT INTO `actividad_empresa`(`empresa_id`, `actividad_item_id`,`confirmacion`) VALUES('$empresa_id','".$resultado_chequeado[$i]."','si')";
			mysqli_query($conn,$s) or die(mysqli_error($conn))  ;
		}else if (!$check) {
			$s="INSERT INTO `actividad_empresa`(`empresa_id`, `actividad_item_id`,`confirmacion`) VALUES('$empresa_id','".$confirmacion[$i]."','no')";
			mysqli_query($conn,$s) or die(mysqli_error($conn)) ;
		}
	}

	// Insertar datos en la tabla de bienes o servicios
	$s="INSERT INTO `bienes_servicios`(`empresa_id`, `nombre`, `lider`) VALUES ('$empresa_id','$_POST[b1]',''),  ('$empresa_id','$_POST[b2]',''),  ('$empresa_id','$_POST[b3]',''),  ('$empresa_id','$_POST[b4]',''),  ('$empresa_id','$_POST[b5]',''),  ('$empresa_id','','$_POST[b_lider]')";
	mysqli_query($conn,$s);

	// Inserto los datos del verificador
	 $s="INSERT INTO `verificador`(`empresa_id`, `nombre`, `entidad`, `area`, `cargo`) VALUES ('$empresa_id','$_POST[verificador]','$_POST[entidad_verificador]','$_POST[area_verificador]','$_POST[cargo_verificador]')";
	mysqli_query($conn,$s);


	//insertar la imagen de cada emprendimiento img_emprendimiento

	$limite_kb = 5000;
	if ($_FILES["img_emprendimiento"]["size"] > 0) {
          if ($_FILES["img_emprendimiento"]["size"] <= $limite_kb * 1024) {
          	 if (($_FILES["img_emprendimiento"]["type"] == "image/gif")
		   		|| ($_FILES["img_emprendimiento"]["type"] == "image/jpeg")
		   		|| ($_FILES["img_emprendimiento"]["type"] == "image/jpg")
		   		|| ($_FILES["img_emprendimiento"]["type"] == "image/png")){
		   
            
             $tmp_name = $_FILES["img_emprendimiento"]["tmp_name"];

        $name = basename($_FILES["img_emprendimiento"]["name"]);
        $ruta = "../../evaluacion/formato_inscripcion/imagenes/$empresa_id"."_$name";
        $nombre = "$empresa_id"."_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `img_empresa`(`empresa_id`, `imagen`) VALUES ('$empresa_id','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }
        }
    }elseif (!$_FILES["img_emprendimiento"]["size"]) {
    	$s="INSERT INTO `img_empresa`(`empresa_id`, `imagen`) VALUES ('$empresa_id','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }





 ?>
