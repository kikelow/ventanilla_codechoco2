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
        $ruta = "../subidas/".$_POST['pregunta_m2'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m22'][$key]."_$_GET[empresa]_$name";

 2       move_uploaded_file($tmp_name, $ruta);

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



///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m2'];
$calificador_m = $_POST['calificador_m2'];
$descripcion_m = $_POST['descripcion_m2'];
$name_evidencia = $_POST['name_evidencia2'];
$medio_m = $_POST['medio2'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m2"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m2"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m2"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m2"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m2'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m2'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}

///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m3'];
$calificador_m = $_POST['calificador_m3'];
$descripcion_m = $_POST['descripcion_m3'];
$name_evidencia = $_POST['name_evidencia3'];
$medio_m = $_POST['medio3'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m3"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m3"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m3"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m3"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m3'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m3'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m4'];
$calificador_m = $_POST['calificador_m4'];
$descripcion_m = $_POST['descripcion_m4'];
$name_evidencia = $_POST['name_evidencia4'];
$medio_m = $_POST['medio4'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m4"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m4"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m4"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m4"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m4'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m4'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m5'];
$calificador_m = $_POST['calificador_m5'];
$descripcion_m = $_POST['descripcion_m5'];
$name_evidencia = $_POST['name_evidencia5'];
$medio_m = $_POST['medio5'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m5"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m5"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m5"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m5"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m5'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m5'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m6'];
$calificador_m = $_POST['calificador_m6'];
$descripcion_m = $_POST['descripcion_m6'];
$name_evidencia = $_POST['name_evidencia6'];
$medio_m = $_POST['medio6'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m6"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m6"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m6"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m6"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m6'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m6'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m7'];
$calificador_m = $_POST['calificador_m7'];
$descripcion_m = $_POST['descripcion_m7'];
$name_evidencia = $_POST['name_evidencia7'];
$medio_m = $_POST['medio7'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m7"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m7"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m7"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m7"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m7'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m7'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m8'];
$calificador_m = $_POST['calificador_m8'];
$descripcion_m = $_POST['descripcion_m8'];
$name_evidencia = $_POST['name_evidencia8'];
$medio_m = $_POST['medio8'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m8"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m8"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m8"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m8"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m8'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m8'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m9'];
$calificador_m = $_POST['calificador_m9'];
$descripcion_m = $_POST['descripcion_m9'];
$name_evidencia = $_POST['name_evidencia9'];
$medio_m = $_POST['medio9'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m9"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m9"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m9"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m9"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m9'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m9'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m10'];
$calificador_m = $_POST['calificador_m10'];
$descripcion_m = $_POST['descripcion_m10'];
$name_evidencia = $_POST['name_evidencia10'];
$medio_m = $_POST['medio10'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m10"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m10"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m10"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m10"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m20'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m10'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m11'];
$calificador_m = $_POST['calificador_m11'];
$descripcion_m = $_POST['descripcion_m11'];
$name_evidencia = $_POST['name_evidencia11'];
$medio_m = $_POST['medio11'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m11"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m11"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m11"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m11"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m11'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m11'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m12'];
$calificador_m = $_POST['calificador_m12'];
$descripcion_m = $_POST['descripcion_m12'];
$name_evidencia = $_POST['name_evidencia12'];
$medio_m = $_POST['medio12'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m12"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m12"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m12"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m12"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m12'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m12'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}


///////////////7----------------------------------------------------------


$pregunta_m = $_POST['pregunta_m13'];
$calificador_m = $_POST['calificador_m13'];
$descripcion_m = $_POST['descripcion_m13'];
$name_evidencia = $_POST['name_evidencia13'];
$medio_m = $_POST['medio13'];
// var_dump($name_veidencia);


$limite_kb = 1000;
for ($key=0; $key <sizeof($pregunta_m); $key++) {
    if ($_FILES["evidencia_m13"]["name"][$key] == "" ) {


      $s= "UPDATE `hoja_verificacion_2` 
      SET `calificador_id`='$calificador_m[$key]',
          `descripcion`='$descripcion_m[$key]',
          `evidencia`='$name_evidencia[$key]',
          medio_verificacion = '$medio_m[$key]'
      WHERE empresa_id = $empresa AND pregunta_id = $pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));
    }else{
          if ($_FILES["evidencia_m13"]["size"][$key] <= $limite_kb * 1024) {
            $s="SELECT evidencia FROM hoja_verificacion_2 WHERE empresa_id = '$empresa' AND pregunta_id='$pregunta_m[$key]'";
            $r = mysqli_query($conn,$s);
            while ($rw=mysqli_fetch_assoc($r)) {
              unlink("../subidas/".$rw['evidencia']);
            }
             $tmp_name = $_FILES["evidencia_m13"]["tmp_name"][$key];

        $name = basename($_FILES["evidencia_m13"]["name"][$key]);
        $ruta = "../subidas/".$_POST['pregunta_m13'][$key]."_$_GET[empresa]_$name";
        $nombre = "".$_POST['pregunta_m13'][$key]."_$_GET[empresa]_$name";

        move_uploaded_file($tmp_name, $ruta);

  $s= "UPDATE `hoja_verificacion_2` 
       SET `calificador_id`='$calificador_m[$key]',
           `descripcion`='$descripcion_m[$key]',
           `evidencia`='$nombre',
           medio_verificacion = '$medio_m[$key]'

       WHERE empresa_id = '$empresa' AND pregunta_id=$pregunta_m[$key]";
        mysqli_query($conn,$s) or die(mysqli_error($conn));

        }
    }    
}

//___________________________________________________________________________

$s="UPDATE `empresa` SET `puntaje` = '$resultado'  WHERE id = '$empresa'";

mysqli_query($conn,$s);






?>