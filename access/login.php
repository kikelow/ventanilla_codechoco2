

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/materialize.min.css" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link rel="stylesheet" href="css/animations.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:700|Londrina+Outline|Sniglet|Barlow" rel="stylesheet">
 
</head>

<body style="background-color: #00853b">
 

  <div id="login-page" class="row" style="position: absolute;top:0;left:0;right:0;bottom: 0;margin:auto;width:25%;">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../img/logo1.png" alt="" class="circle responsive-img valign profile-image-login" width="115" height="120">
            <p class="center login-form-text " style="font-family: 'Alegreya Sans', sans-serif;font-size: 18px;">Ventanilla de Emprendimientos Verdes</p>
            <p class="center login-form-text " style="font-family: 'Alegreya Sans', sans-serif;font-size: 18px;">(Administrativos)</p>
          </div>
        </div>
        <div class="row margin" style="border-top: 1px solid #e0e0e0">
          <div class="input-field col s12 m2 l2">
            <i class="material-icons">person</i>
          </div>
          <div class="input-field col s12 m10 l10">
            <input id="username" type="text">
            <label for="username" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row margin">
           <div class="input-field col s12 m2 l2">
            <i class="material-icons">lock</i>
          </div>
          <div class="input-field col s12 m10 l10">
            <input id="password" type="password">
            <label for="password">Contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="#" class="btn waves-effect waves-light col s12 " style="background-color: #00853b">Iniciar sesión</a>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

<script src="../js/jquery.min.js"  type="text/javascript"></script>
<script src="../js/materialize.min.js"  type="text/javascript"></script>
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
