<?php include '../../../conexion.php';

$id = $_GET['id'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ventanilla de Emprendimientos Verdes</title>
   <link rel="shortcut icon" href="../../../img/favicon2.ico" type="image/x-icon">
  <link rel="icon" href="../../../img/favicon2.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../../css/materialize.min.css" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link rel="stylesheet" href="../../../css/animations.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Londrina+Outline|Sniglet|Nanum+Myeongjo:800" rel="stylesheet">
</head>
<script src="../../../js/jquery.min.js"  type="text/javascript"></script>

<body >

<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn" onclick='window.history.back();' style="background: #00853bb3;margin-top: 10px; "><i class="material-icons left">arrow_back_ios</i>Volver</a>
    <!-- <a href="#" onclick='window.history.back();'></a> -->
  </div>
</div>

   
<?php 

$s = "SELECT e.id,e.razon_social,e.descripcion,i.imagen from empresa e,img_empresa i where e.id = i.empresa_id and e.id = '$id'" ;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

     if(mysqli_num_rows($res)>0){
        while($rw=mysqli_fetch_array($res)){
 ?>


 <div class="row" >
   <div class="row">
     <div class="col s12">
        <div style="width: 300px;height: 300px;margin:auto;">
          <?php   if ($rw['imagen'] == "") { ?> 
          <img class="c_img" src="../../../img/img_nd.png" alt="" width="300" height="300">
          <?php } else { ?> 
          <img class="c_img" src="../../../evaluacion/formato_inscripcion/imagenes/<?php echo $rw['imagen'] ?> " alt="" width="300" height="300">
          <?php } ?>  
        </div> 
     </div>
   </div>
   <div class="divider"></div>
   <div class="row">
    <div class="col s12">
       <h4 class="diagonal" style="text-align: center;"><?php echo $rw['razon_social'] ?></h4>
       <div class="divider" style=" background-color:#00853b;"></div>
    </div>
   
      <div class="col s12">
         <p style="text-align: justify;"><span><?php echo $rw['descripcion'] ?></span></p>
      </div>
    </div>
 </div>

<?php 
}

}

 ?>



<footer class="page-footer" style="background-color: #00853bed;">
<div class="container">
  <div class="row">
    <div class="col l8 s12">
      <h5 class="white-text"><i class="fa fa-globe" aria-hidden="true"></i> Información de Contacto</h5>
      <p class="grey-text text-lighten-4">
          <i class="fa fa-map-marker"></i>Corporación Autónoma Regional para el Desarrollo Sostenible del Chocó-Codechocó<br>
          <i class="fa fa-map-marker"></i>
          Subdirección de Planeación - Oficina Ventanilla de Emprendimientos Verdes<br> 
          Coordinación general de la Ventanilla: <br>
          <b>YOVANNY RODRÍGUEZ CÓRDOBA</b> <br>
          Correo: yrodriguez@codechoco.gov.co <br> <br>

          
          <i class="fa fa-map-marker"></i> Quibdó - Chocó <br>
          <i class="fa fa-building" aria-hidden="true"></i> Cra 4 No. 22-96. Quibdó – Chocó – Colombia
          
          <br> <i class="fa fa-envelope-o"></i> Correos:
          negociosverdes@codechoco.gov.co <br>
          
      </p>
    </div>
    <!-- <div class="col l4 offset-l2 s12">
      <h5 class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Lineas de Atención</h5>
      <ul>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-phone"></i> Domicilio: 6714 658 - 6712 347</a></li>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-bell"></i> Denuncia Ciudadana:</a></li>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-mobile" aria-hidden="true"></i> Linea de Emergencias: 312 711 9708 </a></li>
        
      </ul>
    </div> -->
  </div>
</div>
<div class="footer-copyright" style="background-color: #00853b">
  <div class="container">
  © <?php echo date('Y'); ?> Copyright
 <a class="grey-text text-lighten-4 right" href="#!"> Desarrollo: <i class="fa fa-code"></i> Harinson Palacios | David Raga
  </div>
</div>
</footer>
</body>
</html>
<script src="../../../js/materialize.min.js"  type="text/javascript"></script>

