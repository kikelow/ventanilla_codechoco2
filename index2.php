<?php 
ob_start();
session_start();
if(!isset($_SESSION["vev_verificador"])){
  header("Location:index.php");
    // exit();
}else{
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
   <meta charset="UTF-8">
   <title>Evaluación</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="img/favicon2.ico" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/select2.css">
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <script src="js/jquery.min.js"  type="text/javascript"></script>


 </head>
 <body>


  <ul id="ajuste" class="dropdown-content">
    <li><a href="index2.php?modulo=evaluacion/informacion_personal" class="black-text">Editar perfil</a></li>
    <li><a href="access/cerrar_sesion.php" class="black-text">Salir</a></li>
  </ul>

  <nav class="black-text right grey lighten-4 " style="width: 80%">	
   <div class="nav-wrapper">
    <!-- <a href="#" class="brand-logo">Logo</a> -->
    <ul id="nav-mobile" class="right  ">
     <li><a class="dropdown-button black-text" href="#!" data-activates="ajuste"><i class="material-icons left">settings</i>Configuracion<i class="material-icons right">arrow_drop_down</i></a></li>
       <!--  <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li> -->
      </ul>
    </div>
  </nav>


  <aside id="left-sidebar-nav" class="hide-on-med-and-down" >
    <ul id="nav-mobile" class="side-nav fixed  grey lighten-4 " style="padding-top: 10px;width: 19%;">
      <li class="logo center"><img id="logo-container" src="img/logo1.png" class="brand-logo responsive-img " style="width: 150px">
      </img></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="bold"><a class="collapsible-header  waves-effect waves-green men  ">Formato de Inscripción</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="index2.php?modulo=evaluacion/formato_inscripcion">Nuevo</a></li>
                <li><a href="index2.php?modulo=evaluacion/formato_inscripcion/modificar">Modificar</a></li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header  waves-effect waves-green men ">Formato de informacion AS</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="index2.php?modulo=evaluacion/formato_informacion_as">Nuevo</a></li>
                <li><a href="index2.php?modulo=evaluacion/formato_informacion_as/modificar">Modificar</a></li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header  waves-effect waves-green men ">Hoja de verificacón 1</a>
            <div class="collapsible-body">
              <ul>
                <li class="s"><a href="index2.php?modulo=evaluacion/hoja_verificacion_1">Nuevo</a></li>
                <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_1/modificar">Modificar</a></li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header  waves-effect waves-green men ">Hoja de verificacón 2</a>
            <div class="collapsible-body">
              <ul>
                <li class="s"><a href="index2.php?modulo=evaluacion/hoja_verificacion_2">Nuevo</a></li>
                <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_2/modificar">Modificar</a></li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header  waves-effect waves-green men ">Plan de mejora</a>
            <div class="collapsible-body">
              <ul>
                <li class="s"><a href="index2.php?modulo=evaluacion/plan_mejora">Nuevo</a></li>
                <li><a href="index2.php?modulo=evaluacion/plan_mejora/modificar">Modificar</a></li>
              </ul>
            </div>
          </li>
          <li class="bold"><a class="collapsible-header  waves-green " href="index2.php?modulo=evaluacion/reporte">Reportes</a>

          </li>
        </ul>
      </li>

    </ul>
  </aside>

  <!-- Menú para moviles -->

  <ul id="f_inscripcion" class="dropdown-content">
    <li><a href="index2.php?modulo=evaluacion/formato_inscripcion" class="black-text">Nuevo</a></li>
    <li><a href="index2.php?modulo=evaluacion/formato_inscripcion/modificar" class="black-text">Modificar</a></li>
  </ul>

  <ul id="f_as" class="dropdown-content">
    <li><a href="index2.php?modulo=evaluacion/formato_informacion_as" class="black-text">Nuevo</a></li>
    <li><a href="index2.php?modulo=evaluacion/formato_informacion_as/modificar" class="black-text">Modificar</a></li>
  </ul>

  <ul id="hoja_1" class="dropdown-content">
    <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_1" class="black-text">Nuevo</a></li>
    <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_1/modificar" class="black-text">Modificar</a></li>
  </ul>

  <ul id="hoja_2" class="dropdown-content">
    <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_2" class="black-text">Nuevo</a></li>
    <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_2/modificar" class="black-text">Modificar</a></li>
  </ul>
  
  <!-- <ul id="p_mejora" class="dropdown-content">
    <li><a href="index2.php?modulo=evaluacion/plan_mejora" class="black-text">Nuevo</a></li>
  </ul> -->

  <nav class="grey lighten-4  hide-on-large-only">
   <div class=" " style="width: 100%">
    <a href="#" data-activates="mobile-demo" class="button-collapse center"><i class="material-icons black-text">menu</i></a>
    <a href="#" class="brand-logo center black-text"></a>

    <ul class="side-nav" id="mobile-demo">
      <li><a class="dropdown-button black-text" href="#!" data-activates="f_inscripcion">Formato de Inscripción<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button black-text" href="#!" data-activates="f_as">Formato de Información AS<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button black-text" href="#!" data-activates="hoja_1">Hoja de Verificación 1<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button black-text" href="#!" data-activates="hoja_2">Hoja de Verificación 2<i class="material-icons right">arrow_drop_down</i></a></li>
      <li> <a href="index2.php?modulo=evaluacion/plan_mejora" class="collection-item black-text">Plan de Mejora</a></li>
      <li><a href="index2.php?modulo=evaluacion/reporte" class="collection-item black-text">Reportes</a></li>
    </ul>
  </div>   
</nav>

<div class="right" style="margin-top: 15px; width:80%;" id="contenedor"  > 
  <?php 
  $mod = @$_GET['modulo'];
  $archivo = $mod.'/index2.php';

  if (file_exists($archivo) and !empty($_GET['modulo'])) {
    include_once($archivo);
  }else
  {
   include_once("evaluacion/formato_inscripcion/index2.php");
 }
 ?>    
</div>


<!-- <div id="test2" class="col s12">Test 2</div> -->

</div>






<!-- 
<footer class="grey darken-3" style="height: 60px;display:inline-block;width: 100%;" >
  pie de pagina
</footer> -->
<script src="js/materialize.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_registro.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>


<script type="text/javascript">
  $(document).ready(function(){
   $('.carousel.carousel-slider').carousel({fullWidth: true});
   $('.carousel.carousel-slider').carousel({duration:50});
   $('.carousel.carousel-slider').carousel('next');
   $(".button-collapse").sideNav();
   $('select').material_select();

   $( document ).ready(function() {
//   $( document ).ready(function() {
  $("").on("click", function(){
    $(".check").find(".active").removeClass("active");
    $(this).addClass("active");
    $('.s').addClass('active')
  });
});
 });	
</script>
</body>
</html>
<?php 
}
ob_end_flush();
?>