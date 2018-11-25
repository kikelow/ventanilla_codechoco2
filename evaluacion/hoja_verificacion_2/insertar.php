<?php 
include "../../conexion.php";

$empresa = $_GET['empresa'];
$pregunta = $_POST['pregunta'];
$calificador = $_POST['calificador'];
$descripcion = $_POST['descripcion'];
$medio_verificacion = $_POST['medio'];
// $resultado = $_POST['prom_form'];



if (isset($empresa)) {

  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta); $key++) {
    if ($_FILES["evidencia"]["size"][$key] > 0) {
          if ($_FILES["evidencia"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

$s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES (null,'$empresa','$pregunta[$key]','$calificador[$key]','$descripcion[$key]','$medio_verificacion[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
$s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES (null,'$empresa','$pregunta[$key]','$calificador[$key]','$descripcion[$key]','$medio_verificacion[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

//_______________________________________________________________

$pregunta2 = $_POST['pregunta2'];
$calificador2 = $_POST['calificador2'];
$descripcion2 = $_POST['descripcion2'];
$medio_verificacion2 = $_POST['medio2'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta2); $key++) {
    if ($_FILES["evidencia2"]["size"][$key] > 0) {
          if ($_FILES["evidencia2"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia2"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia2"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta2'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta2'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta2[$key]','$calificador2[$key]','$descripcion2[$key]','$medio_verificacion2[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta2[$key]','$calificador2[$key]','$descripcion2[$key]','$medio_verificacion2[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}


//------------------------------------------------------------------------------------------------------


$pregunta3 = $_POST['pregunta3'];
$calificador3 = $_POST['calificador3'];
$descripcion3 = $_POST['descripcion3'];
$medio_verificacion3 = $_POST['medio3'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta3); $key++) {
    if ($_FILES["evidencia3"]["size"][$key] > 0) {
          if ($_FILES["evidencia3"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia3"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia3"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta3'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta3'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta3[$key]','$calificador3[$key]','$descripcion3[$key]','$medio_verificacion3[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta3[$key]','$calificador3[$key]','$descripcion3[$key]','$medio_verificacion3[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}


// ----------------------------------------------------------------------------------------




$pregunta4 = $_POST['pregunta4'];
$calificador4 = $_POST['calificador4'];
$descripcion4 = $_POST['descripcion4'];
$medio_verificacion4 = $_POST['medio4'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta4); $key++) {
    if ($_FILES["evidencia4"]["size"][$key] > 0) {
          if ($_FILES["evidencia4"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia4"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia4"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta4'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta4'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta4[$key]','$calificador4[$key]','$descripcion4[$key]','$medio_verificacion4[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta4[$key]','$calificador4[$key]','$descripcion4[$key]','$medio_verificacion4[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

//-----------------------------------------------------------------------------------------------------


$pregunta5 = $_POST['pregunta5'];
$calificador5 = $_POST['calificador5'];
$descripcion5 = $_POST['descripcion5'];
$medio_verificacion5 = $_POST['medio5'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta5); $key++) {
    if ($_FILES["evidencia5"]["size"][$key] > 0) {
          if ($_FILES["evidencia5"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia5"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia5"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta5'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta5'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta5[$key]','$calificador5[$key]','$descripcion5[$key]','$medio_verificacion5[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES (null,'$empresa','$pregunta5[$key]','$calificador5[$key]','$descripcion5[$key]','$medio_verificacion5[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

//------------------------------------------------------------------------------------------------------


$pregunta6 = $_POST['pregunta6'];
$calificador6 = $_POST['calificador6'];
$descripcion6 = $_POST['descripcion6'];
$medio_verificacion6 = $_POST['medio6'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta6); $key++) {
    if ($_FILES["evidencia6"]["size"][$key] > 0) {
          if ($_FILES["evidencia6"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia6"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia6"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta6'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta6'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta6[$key]','$calificador6[$key]','$descripcion6[$key]','$medio_verificacion6[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta6[$key]','$calificador6[$key]','$descripcion6[$key]','$medio_verificacion6[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}


//-----------------------------------------------------------------------------------------------

$pregunta7 = $_POST['pregunta7'];
$calificador7 = $_POST['calificador7'];
$descripcion7 = $_POST['descripcion7'];
$medio_verificacion7 = $_POST['medio7'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta7); $key++) {
    if ($_FILES["evidencia7"]["size"][$key] > 0) {
          if ($_FILES["evidencia7"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia7"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia7"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta7'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta7'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta7[$key]','$calificador7[$key]','$descripcion7[$key]','$medio_verificacion7[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta7[$key]','$calificador7[$key]','$descripcion7[$key]','$medio_verificacion7[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}


//-----------------------------------------------------------------------------------


$pregunta8 = $_POST['pregunta8'];
$calificador8 = $_POST['calificador8'];
$descripcion8 = $_POST['descripcion8'];
$medio_verificacion8 = $_POST['medio8'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta8); $key++) {
    if ($_FILES["evidencia8"]["size"][$key] > 0) {
          if ($_FILES["evidencia8"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia8"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia8"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta8'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta8'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta8[$key]','$calificador8[$key]','$descripcion8[$key]','$medio_verificacion8[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES (null,'$empresa','$pregunta8[$key]','$calificador8[$key]','$descripcion8[$key]','$medio_verificacion8[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

//----------------------------------------------------------------------


$pregunta9 = $_POST['pregunta9'];
$calificador9 = $_POST['calificador9'];
$descripcion9 = $_POST['descripcion9'];
$medio_verificacion9 = $_POST['medio9'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta9); $key++) {
    if ($_FILES["evidencia9"]["size"][$key] > 0) {
          if ($_FILES["evidencia9"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia9"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia9"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta9'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta9'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta9[$key]','$calificador9[$key]','$descripcion9[$key]','$medio_verificacion9[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta9[$key]','$calificador9[$key]','$descripcion9[$key]','$medio_verificacion9[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}


//------------------------------------------------------------------
$pregunta10 = $_POST['pregunta10'];
$calificador10 = $_POST['calificador10'];
$descripcion10 = $_POST['descripcion10'];
$medio_verificacion10 = $_POST['medio10'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta10); $key++) {
    if ($_FILES["evidencia10"]["size"][$key] > 0) {
          if ($_FILES["evidencia10"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia10"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia10"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta10'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta10'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta10[$key]','$calificador10[$key]','$descripcion10[$key]','$medio_verificacion10[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES (null,'$empresa','$pregunta10[$key]','$calificador10[$key]','$descripcion10[$key]','$medio_verificacion10[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

//---------------------------------------------------------

$pregunta11 = $_POST['pregunta11'];
$calificador11 = $_POST['calificador11'];
$descripcion11 = $_POST['descripcion11'];
$medio_verificacion11 = $_POST['medio11'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta11); $key++) {
    if ($_FILES["evidencia11"]["size"][$key] > 0) {
          if ($_FILES["evidencia11"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia11"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia11"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta11'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta11'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta11[$key]','$calificador11[$key]','$descripcion11[$key]','$medio_verificacion11[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta11[$key]','$calificador11[$key]','$descripcion11[$key]','$medio_verificacion11[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

//---------------------------------------------------

$pregunta12 = $_POST['pregunta12'];
$calificador12 = $_POST['calificador12'];
$descripcion12 = $_POST['descripcion12'];
$medio_verificacion12 = $_POST['medio12'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta12); $key++) {
    if ($_FILES["evidencia12"]["size"][$key] > 0) {
          if ($_FILES["evidencia12"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia12"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia12"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta12'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta12'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta12[$key]','$calificador12[$key]','$descripcion12[$key]','$medio_verificacion12[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES (null,'$empresa','$pregunta12[$key]','$calificador12[$key]','$descripcion12[$key]','$medio_verificacion12[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}


//-------------------------------------------------------------------

$pregunta13 = $_POST['pregunta13'];
$calificador13 = $_POST['calificador13'];
$descripcion13 = $_POST['descripcion13'];
$medio_verificacion13 = $_POST['medio13'];


  $limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta13); $key++) {
    if ($_FILES["evidencia13"]["size"][$key] > 0) {
          if ($_FILES["evidencia13"]["size"][$key] <= $limite_kb * 1024) {
            
             $tmp_name = $_FILES["evidencia13"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia13"]["name"][$key]);
        $ruta = "subidas/".$_POST['pregunta13'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta13'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

        $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta13[$key]','$calificador13[$key]','$descripcion13[$key]','$medio_verificacion13[$key]','$nombre')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
        }
    }else{
         $s="INSERT INTO `hoja_verificacion_2`(`id`, `empresa_id`, `pregunta_id`, `calificador_id`, `descripcion`, `medio_verificacion`, `evidencia`) VALUES  (null,'$empresa','$pregunta13[$key]','$calificador13[$key]','$descripcion13[$key]','$medio_verificacion13[$key]','')";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

    }    
}

}

// $s="UPDATE `empresa` SET `verificacion2`='si', `puntaje` = '$resultado'  WHERE id = '$empresa'";
// mysqli_query($conn,$s);

// }


// echo "insertado";
?>