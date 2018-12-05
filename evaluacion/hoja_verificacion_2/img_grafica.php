<?php
/* saveFile.php */
//Obtener variable POST e desemcriptarla

$img = $_POST['img'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
// $im = imagecreatefromstring($data);  //convertir text a imagen
 if ($data) {

	file_put_contents('img_grafica/grafica.jpg', $data);

    // imagejpeg($im, 'img_grafica/grafica.jpg'); //guardar a server 
    // imagedestroy($im); //liberar memoria  
    echo 'Todo salio bien tu imagen ha sido guardada';
 }else {
    echo 'Un error ocurrio al convertir la imagen.';    
}
?>