<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
$opcion = $_POST['verificacion2_opcion'];
$calificador = $_POST['verifica2_calificador'];
$observacion = $_POST['verificacion2_obs'];

$limite_kb = 300;
for ($key=0; $key <sizeof($opcion); $key++) {
    if ($_FILES["verificacion2_evidencia"]["size"][$key] > 0) {
          if ($_FILES["verificacion2_evidencia"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["verificacion2_evidencia"]["tmp_name"][$key];

        $name = basename($_FILES["verificacion2_evidencia"]["name"][$key]);
        $ruta = "subidas/".$_POST['verificacion2_opcion'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['verificacion2_opcion'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `verificacion_2`(`empresa_id`, `opciones_id`, `calificador_id`, `observacion`, `evidencia`) VALUES ('$empresa','$opcion[$key]','$calificador[$key]','$observacion[$key]','$nombre')";
        // mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `verificacion_2`(`empresa_id`, `opciones_id`, `calificador_id`, `observacion`, `evidencia`) VALUES ('$empresa','$opcion[$key]','$calificador[$key]','$observacion[$key]','')";
        // mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}
$s="UPDATE `empresa` SET `verificacion2`='si' WHERE id = '$empresa'";
// mysqli_query($conn,$s);
?>