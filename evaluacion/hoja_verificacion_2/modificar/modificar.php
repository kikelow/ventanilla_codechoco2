<?php 
include "../../../conexion.php";
$resultado = $_POST['prom_form_m'];
$empresa = $_GET['empresa'];
$opcion = $_POST['verificacion2_opcion_m'];
$calificador = $_POST['verifica2_calificador_m'];
$observacion = $_POST['verificacion2_obs_m'];
$name_veidencia = $_POST['name_veidencia'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($opcion); $key++) {
    if ($_FILES["verificacion2_evidencia_m"]["name"][$key] == "" ) {
    	$s= "UPDATE `verificacion_2` SET `calificador_id`='$calificador[$key]',`observacion`='$observacion[$key]',`evidencia`='$name_veidencia[$key]' WHERE empresa_id = '$empresa' AND opciones_id='$opcion[$key]'";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["verificacion2_evidencia_m"]["size"][$key] <= $limite_kb * 1024) {
          	$s="SELECT evidencia FROM verificacion_2 WHERE empresa_id = '$empresa' AND opciones_id='$opcion[$key]'";
          	$r = mysqli_query($conn,$s);
          	while ($rw=mysqli_fetch_assoc($r)) {
          		unlink("../subidas/".$rw['evidencia']);
          	}
             $tmp_name = $_FILES["verificacion2_evidencia_m"]["tmp_name"][$key];

        $name = basename($_FILES["verificacion2_evidencia_m"]["name"][$key]);
        $ruta = "../subidas/".$_POST['verificacion2_opcion_m'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['verificacion2_opcion_m'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s= "UPDATE `verificacion_2` SET `calificador_id`='$calificador[$key]',`observacion`='$observacion[$key]',`evidencia`='$nombre' WHERE empresa_id = '$empresa' AND opciones_id='$opcion[$key]'";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }    
}
$s="UPDATE `empresa` SET `puntaje` = '$resultado'  WHERE id = '$empresa'";
mysqli_query($conn,$s);





?>