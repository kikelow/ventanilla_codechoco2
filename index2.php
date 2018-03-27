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

<!-- <nav class=" grey lighten-1">	
	
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

       <ul class="side-nav" id="mobile-demo">
        <li><a href="index2.php?modulo=evaluacion/formato_inscripcion" class="collection-item active black-text">Formato de Inscripción</a></li>
        <li><a href="index2.php?modulo=evaluacion/formato_informacion_as" class="collection-item  black-text">Formato de Información AS</a></li>
        <li> <a href="index2.php?modulo=evaluacion/hoja_verificacion_1" class="collection-item  black-text">Hoja de Verificación 1</a></li>
        <li> <a href="index2.php?modulo=evaluacion/hoja_verificacion_2" class="collection-item black-text">Hoja de Verificación 2</a></li>
        <li> <a href="index2.php?modulo=evaluacion/registro_fotografico" class="collection-item black-text">Registro Fotografico</a></li>
        <li><a href="index2.php?modulo=evaluacion/plan_mejora" class="collection-item black-text">Plan de Mejora</a></li>
      </ul>
        
</nav> -->
<aside id="left-sidebar-nav" >
  <ul id="nav-mobile" class="side-nav fixed  grey lighten-4 " style="padding-top: 10px;width: 19%;">
    <li class="logo center"><img id="logo-container" src="img/logo1.png" class="brand-logo responsive-img " style="width: 150px">
            </img></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-green men ">Formato de Inscripción</a>
              <div class="collapsible-body">
                <ul>
                  <li class=""><a href="index2.php?modulo=evaluacion/formato_inscripcion">Registrar</a></li>
                  <li><a href="index2.php?modulo=evaluacion/formato_inscripcion/modificar">Modificar</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-green men">Formato de informacion AS</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="index2.php?modulo=evaluacion/formato_informacion_as">Registrar</a></li>
                  <li><a href="index2.php?modulo=evaluacion/formato_informacion_as/modificar">Modificar</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-green men">Hoja de verificacón 1</a>
              <div class="collapsible-body">
                <ul>
                  <li class="s"><a href="index2.php?modulo=evaluacion/hoja_verificacion_1">Registrar</a></li>
                  <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_1/modificar">Modificar</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-green men">Hoja de verificacón 2</a>
              <div class="collapsible-body">
                <ul>
                  <li class="s"><a href="index2.php?modulo=evaluacion/hoja_verificacion_2">Registrar</a></li>
                  <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_2/modificar">Modificar</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-green men">Plan de mejora</a>
              <div class="collapsible-body">
                <ul>
                  <li class="s"><a href="index2.php?modulo=evaluacion/hoja_verificacion_2">Registrar</a></li>
                  <li><a href="index2.php?modulo=evaluacion/hoja_verificacion_2/modificar">Modificar</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <!-- <li class="bold"><a href="mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
        <li class="bold"><a href="themes.html" class="waves-effect waves-teal">Themes</a></li> -->
      </ul>
  <!-- <a href="# " data-activates="slide-out " class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan "><i class="mdi-navigation-menu "></i></a> -->
</aside>
<!-- <aside style="background-color: white;width: 20%" class="hide-on-small-only hide-on-med-only" >

	 <div class="row" style="min-height: 700px;border-right: 4px solid;border-color: #e0e0e0 ;margin-bottom: 0px;">
        <div class="col s12 m12 l12" >
          <div class="card  grey lighten-4" style="min-height: 690px;margin: 0px">
            <div class="card-content black-text" style="padding: 10px;min-height: 690px;margin:0px;">
				 <div class="collection " >
			        <a href="index2.php?modulo=evaluacion/formato_inscripcion" class="collection-item active black-text">Formato de Inscripción</a>
			        <a href="index2.php?modulo=evaluacion/formato_informacion_as" class="collection-item  black-text">Formato de Información AS</a>
			        <a href="index2.php?modulo=evaluacion/hoja_verificacion_1" class="collection-item  black-text">Hoja de Verificación 1</a>
			        <a href="index2.php?modulo=evaluacion/hoja_verificacion_2" class="collection-item black-text">Hoja de Verificación 2</a>
			        <a href="index2.php?modulo=evaluacion/registro_fotografico" class="collection-item black-text">Registro Fotografico</a>
			        <a href="index2.php?modulo=evaluacion/plan_mejora" class="collection-item black-text">Plan de Mejora</a>
			     </div>

            </div>
          </div>
        </div>
      </div>	 
</aside> -->

<!-- <div class="row right" style="width: 80%;" id="sub_tabs">
    <div class="col s12" style="">
      <ul class="tabs grey lighten-4">
        <li class="tab col s3"><a href="#test1" id="e"><strong>REGISTRAR</strong></a></li>
        <li class="tab col s3"><a href="#test2"><strong>MODIFICAR</strong></a></li>
     
      </ul>
    </div> -->
<nav class="white  hide-on-large-only">
 <div class=" " style="width: 100%">
    <a href="#" data-activates="mobile-demo" class="button-collapse center"><i class="material-icons black-text">menu</i></a>
    <a href="#" class="brand-logo center black-text"></a>

       <ul class="side-nav" id="mobile-demo">
        <li><a href="index2.php?modulo=evaluacion/formato_inscripcion" class="collection-item active black-text">Formato de Inscripción</a></li>
        <li><a href="index2.php?modulo=evaluacion/formato_informacion_as" class="collection-item  black-text">Formato de Información AS</a></li>
        <li> <a href="index2.php?modulo=evaluacion/hoja_verificacion_1" class="collection-item  black-text">Hoja de Verificación 1</a></li>
        <li> <a href="index2.php?modulo=evaluacion/hoja_verificacion_2" class="collection-item black-text">Hoja de Verificación 2</a></li>
        <li> <a href="index2.php?modulo=evaluacion/registro_fotografico" class="collection-item black-text">Registro Fotografico</a></li>
        <li><a href="index2.php?modulo=evaluacion/plan_mejora" class="collection-item black-text">Plan de Mejora</a></li>
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