<?php 
  session_start();
  if (isset($_SESSION["vev_admin_contenido"])){
    header("Location:index3.php");
  }else if (isset($_SESSION["vev_verificador"])) {
      header("Location:index2.php");
  }else if (isset($_SESSION["vev_admin_verificador"])) {
      // header("Location:index3.php");
  }
  else{
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ventanilla de Emprendimientos Verdes</title>

  <link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon2.ico" type="image/x-icon">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link href="https://fonts.googleapis.com/css?family=Londrina+Outline|Sniglet|Nanum+Myeongjo:800" rel="stylesheet">
  <script src="js/jquery.min.js"  type="text/javascript"></script>
</head>
<!-- <script src="js/jquery.min.js"  type="text/javascript"></script> -->

<body >

    <div class="nav animatedParent">
    <div id="div_logo" class="animated growIn slow">
      <a  class="brand-logo" href="#"><img class="logo center" id="logo" src="img/logo1.png" style="width:118px;height:118px;padding-bottom: 5px;padding-left: 5px;border-right-width: 5px;border-top-width: 5px;padding-right: 5px;padding-top: 5px;"></a> 
    </div>
      
      <ul class="hide-on-med-and-down">
        <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/inicio">Inicio</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/q_somos">¿Quienes Somos?</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/servicios">Servicios</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/m_verdes">Negocios Verdes</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/registro">Registro</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/noticias">Noticias</a></li>  
            <li><a class="sub_line" style="margin-right:10px;font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/m_evaluados">Negocios Evaluados</a></li>
        <li><a style="font-family: 'Sniglet', cursive" href="access/" class="active hoverable">Iniciar Sesión</a></li>
      </ul>
  </div>



<div class="fixed-action-btn  hide-on-large-only click-to-toggle">
  <a class="btn-floating btn-large" style="background-color:#00853bb3">
    <i class="large material-icons">menu</i>
  </a>
<ul>
<li><a href="index.php?modulo=emprendimiento/inicio" class="btn-floating tooltipped" data-position="left" data-tooltip="inicio" style="background:#00853bb3;"><i class="material-icons">home</i></a></li> 
<li><a href="index.php?modulo=emprendimiento/q_somos" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="¿Quienes somos?" style="background:#00853bb3;"><i class="material-icons">
help</i></a></li>
<li><a href="index.php?modulo=emprendimiento/servicios" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Servicios" style="background:#00853bb3;"><i class="material-icons">
settings</i>Servicios</a></li>
<li><a href="index.php?modulo=emprendimiento/m_verdes" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Mercados Verdes" style="background:#00853bb3;"><i class="material-icons">
store</i>Mercados verdes</a></li>
<li><a href="index.php?modulo=emprendimiento/registro" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Registro" style="background:#00853bb3;"><i class="material-icons">
create</i>Registro</a></li>
<li><a href="index.php?modulo=emprendimiento/noticias" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Noticias" style="background:#00853bb3;"><i class="material-icons">
chrome_reader_mode</i>Noticias</a></li>
<li><a href="index.php?modulo=emprendimiento/m_evaluados" class="btn-floating black-text tooltipped" data-position="left" data-tooltip="Evaluados" style="background:#00853bb3;"><i class="material-icons">
assignment_turned_in  </i>Negocios Evaluados</a></li>
<li><a href="access/" class="active btn-floating tooltipped" data-position="left" data-tooltip="Iniciar Sesión" style="background:#00853bb3;"><i class="material-icons">
lock_open</i>Iniciar Sesión</a></li>
</ul>
</div>


<div style="height: auto;min-height: 500px;">
   <?php 
                   $mod = @$_GET['modulo'];
                   $archivo = $mod.'/index.php';

                    if (file_exists($archivo) and !empty($_GET['modulo'])) {
                       include_once($archivo);
                    }else
                    {
                    include_once("emprendimiento/inicio/index.php");
                   }
    ?>    

</div>


</body>
</html>
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

<script src="js/materialize.min.js"  type="text/javascript"></script>
<script src='js/css3-animate-it.js'></script>
<script src='slick/slick.min.js'></script>
<script src='js/slider_1.js'></script>
<!-- <script src='js/index.js'></script> -->
<script src="js/style.js"  type="text/javascript"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('.carousel.carousel-slider').carousel({duration:50});
      $('.carousel.carousel-slider').carousel('next');
      $(".button-collapse").sideNav();
      $('select').material_select();
      $('.parallax').parallax();
      $('.slider').slider({height:700});
     

   
      }); 
</script>
<?php 
}
?>