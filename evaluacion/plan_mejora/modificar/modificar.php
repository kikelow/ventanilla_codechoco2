<?php 

require_once('../../../conexion.php');
	  $empresa = $_GET['empresa'];
	  $opcion = array(); // Aqui se van a guardar las opciones de que vienen de la BD
	  $accion = $_POST['accion'];
	  $actor = $_POST['actor'];
	  $resultado = $_POST['resultado'];
    $uno = $_POST['uno'];
	$dos = $_POST['dos'];
	$tres = $_POST['tres'];
	$cuatro = $_POST['cuatro'];
	$cinco = $_POST['cinco'];
	$seis = $_POST['seis'];
	$siete = $_POST['siete'];
	$ocho = $_POST['ocho'];
	$nueve = $_POST['nueve'];
	$diez = $_POST['diez'];
	$once = $_POST['once'];
	$doce = $_POST['doce'];
	$observacion = $_POST['observacion'];
	  $s = "SELECT * FROM plan_mejora WHERE empresa_id = '$empresa'";
	  $r = mysqli_query($conn,$s);
	  while ($rw=mysqli_fetch_assoc($r)) {
	  	array_push($opcion, $rw['opciones_id']);
	  }

// opciones que estan en el plan de mejora(aplicativo) y no estan el plan de mejora(BD)
	  $opcion_insert =  array_values(array_diff($_POST['mejora_opcion'], $opcion));
	  echo "Insertar\n";
	  var_dump($opcion_insert);

	  // var_dump($opcion_insert);

	//   Insertar las opciones nuevas en caso de haber
	  if ($opcion_insert>0) {
	  	for ($i=0; $i <sizeof($opcion_insert); $i++) {
		
		$s="INSERT INTO `plan_mejora`(`empresa_id`, `opciones_id`, `acciones`, `actor`, `resultado`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `observacion`) 
		VALUES('$empresa',
		'$opcion_insert[$i]','','','','','','','','','','','','','','','','')";
		mysqli_query($conn,$s);
		echo($s);
	}
	  }

// opciones que no estan en el plan de mejora(aplicativo) y si estan el plan de mejora(BD)
	  $opcion_eliminar =  array_values(array_diff($opcion,$_POST['mejora_opcion']));
	  	echo "Eliminar\n";
	  	var_dump($opcion_eliminar);
// Eliminar las opciones que ya no estan estan en el plan de mejora(Aplicativo) y estan en el plan de mejora(BD)
	  	if ($opcion_eliminar>0) {
	  		for ($i=0; $i <count($opcion_eliminar) ; $i++) { 
	  			$s="DELETE FROM plan_mejora WHERE empresa_id='$empresa' AND opciones_id='$opcion_eliminar[$i]'";
	  			mysqli_query($conn,$s);
	  		}
	  	}

// realizar las modificaciones a todos los datos que traiga el formulario incluido los nuevos
	$opciones = $_POST['mejora_opcion'];

	  for ($i=0; $i < count($opciones) ; $i++) { 
	  	$s="UPDATE `plan_mejora` SET `acciones`='$accion[$i]',`actor`='$actor[$i]',`resultado`='$resultado[$i]',`1`='$uno[$i]',`2`='$dos[$i]',`3`='$tres[$i]',`4`='$cuatro[$i]',`5`='$cinco[$i]',`6`='$seis[$i]',`7`='$siete[$i]',`8`='$ocho[$i]',`9`='$nueve[$i]',`10`='$diez[$i]',`11`='$once[$i]',`12`='$doce[$i]',`observacion`='$observacion[$i]' WHERE `empresa_id` = '$empresa' AND `opciones_id` = '$opciones[$i]'";
	  	mysqli_query($conn,$s);
	  }
	 


 ?>