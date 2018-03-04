<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>templete</title>
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
</head>
<script src="js/jquery.min.js"  type="text/javascript"></script>

<body >

      <div class="nav animatedParent">
      <div id="div_logo" class="animated growIn slow">
        <a  class="brand-logo" href="#"><img class="logo" id="logo" src="img/logo1.png" style="width:118px;height:118px;padding-bottom: 5px;padding-left: 5px;border-right-width: 5px;border-top-width: 5px;padding-right: 5px;padding-top: 5px;"></a> 
      </div>
      
      <ul class="hide-on-med-and-down" >
        <li><a class="sub_line"  href="index.php?modulo=emprendimiento/inicio">Inicio</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/q_somos">¿Quienes Somos?</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/m_verdes">Negocios Verdes</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/registro">Registro</a></li>
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/noticias">Noticias</a></li>  
            <li><a class="sub_line" style="font-family: 'Sniglet', cursive" href="index.php?modulo=emprendimiento/m_evaluados">Negocios Evaluados</a></li>
            <li><a class="sub_line" style="margin-right:  10px;font-family: 'Sniglet', cursive" href="#">Documentación</a></li>
        <li><a style="font-family: 'Sniglet', cursive" href="access/login.php" class="active hoverable">Login</a></li>
      </ul>
  </div>

<!-- <div id="contenedor" style="min-height: 701px;">

<section id="base" style="min-height: 700px;background-color: white"> -->
<div style="height: auto;min-height: 700px;">
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

<!-- </section>  
</div> -->

</body>
</html>
<footer class="page-footer" style="background-color: #00853bed;">
<div class="container">
  <div class="row">
    <div class="col l6 s12">
      <h5 class="white-text"><i class="fa fa-globe" aria-hidden="true"></i> Información de Contacto</h5>
      <p class="grey-text text-lighten-4">
          <i class="fa fa-map-marker"></i> Quibdó - Chocó <br>
          <i class="fa fa-building" aria-hidden="true"></i> Cra. 1 #2437 
          
          <br><i class="fa fa-envelope-o"></i> Correos rivergas@live.com - admin@rivergas.com.co.
      </p>
    </div>
    <div class="col l4 offset-l2 s12">
      <h5 class="white-text"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Lineas de Atención</h5>
      <ul>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-phone"></i> Domicilio: 6714 658 - 6712 347</a></li>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-bell"></i> Denuncia Ciudadana:</a></li>
        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-mobile" aria-hidden="true"></i> Linea de Emergencias: 312 711 9708 </a></li>
        
      </ul>
    </div>
  </div>
</div>
<div class="footer-copyright" style="background-color: #00853b">
  <div class="container">
  © <?php echo date('Y'); ?> Copyright Text
 <a class="grey-text text-lighten-4 right" href="#!"> Desarrollo: <i class="fa fa-code"></i> Harinson Palacios | David Raga
  </div>
</div>
</footer>

<script src="js/materialize.min.js"  type="text/javascript"></script>
<script src='js/css3-animate-it.js'></script>
<script src='slick/slick.min.js'></script>
<script src='js/slider_1.js'></script>
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


