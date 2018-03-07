<?php 
// $empresa = $_GET['empresa'];
// $opcion = $_POST['verificacion2_opcion'];
// $calificador = $_POST['verifica2_calificador'];
// $observacion = $_POST['verificacion2_obs'];

// var_dump($_FILES);


// for ($i=0; $i <sizeof($_FILES['verificacion2_evidencia']); $i++) {
// if ($_FILES['verificacion2_evidencia1']["error"] > 0)
//   {
//   echo "Error: " . $_FILES['verificacion2_evidencia1']['error'] . "<br>";
//   }else
//   {
//   // echo "Nombre: " . $_FILES['verificacion2_evidencia1']['name'] . "<br>";
//   // echo "Tipo: " . $_FILES['verificacion2_evidencia1']['type'] . "<br>";
//   // echo "Tamaño: " . ($_FILES["verificacion2_evidencia1"]["size"] / 1024) . " kB<br>";
//   // echo "Carpeta temporal: " . $_FILES['verificacion2_evidencia1']['tmp_name'];

//   /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/
// move_uploaded_file($_FILES['verificacion2_evidencia1']['tmp_name'],
// "subidas/" . $_FILES['verificacion2_evidencia1']['name']);
// }
// print_r($_FILES);
// }

$carpeta = 'subidas/';
opendir($carpeta);
$destino = $carpeta.$_FILES['verificacion2_e']['name'];
copy($_FILES['verificacion2_e']['tmp_name'], $destino);
echo'archivo subido exitosamente';
$nombre = $_FILES['verificacion2_e']['name'];
echo($nombre);
?>