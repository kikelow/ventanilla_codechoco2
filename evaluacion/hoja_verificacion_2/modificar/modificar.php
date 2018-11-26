<?php 
include "../../../conexion.php";
$resultado = $_POST['prom_form_m'];
$empresa = $_GET['empresa'];
$pregunta_m = $_POST['pregunta_m'];
$calificador_m = $_POST['calificador_m'];
$descripcion_m = $_POST['descripcion_m'];
$name_evidencia = $_POST['name_evidencia'];
$medio_m = $_POST['medio'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m"]["name"][$key] == "" ) {


    	$s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        echo("1 update " . $s);
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m"]["size"][$key] <= $limite_kb * 1024) {
          	$s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
          	$r = mysqli_query($conn,$s);
          	while ($rw=mysqli_fetch_assoc($r)) {
          		unlink("../subidas/".$rw['evidencia']);
          	}
             $tmp_name = $_FILES["evidencia_m"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
       echo("2 update " . $s);
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}
$s="UPDATE `empresa` SET `puntaje` = '$resultado'  WHERE id = '$empresa'";

mysqli_query($conn,$s);

?>