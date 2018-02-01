<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrativos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventanilla de Emprendiminetos Verdes</title>
	
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<nav class=" grey lighten-1">	
	
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

       <ul class="side-nav" id="mobile-demo">
        <li><a href="index2.php?modulo=emprendimiento/formato_inscripcion" class="collection-item active black-text">Formato de Inscripción</a></li>
        <li><a href="index2.php?modulo=emprendimiento/formato_informacion_as" class="collection-item  black-text">Formato de Información AS</a></li>
        <li> <a href="index2.php?modulo=emprendimiento/hoja_verificacion_1" class="collection-item  black-text">Hoja de Verificación 1</a></li>
        <li> <a href="index2.php?modulo=emprendimiento/hoja_verificacion_2" class="collection-item black-text">Hoja de Verificación 2</a></li>
        <li> <a href="index2.php?modulo=emprendimiento/registro_fotografico" class="collection-item black-text">Registro Fotografico</a></li>
        <li><a href="index2.php?modulo=emprendimiento/plan_mejora" class="collection-item black-text">Plan de Mejora</a></li>
      </ul>
</nav>

<aside style="background-color: white" class="hide-on-small-only hide-on-med-only">

	 <div class="row" style="min-height: 700px;border-right: 4px solid;border-color: #e0e0e0 ;margin-bottom: 0px;">
        <div class="col s12 m12 l12" >
          <div class="card  grey lighten-4" style="min-height: 690px;margin: 0px">
            <div class="card-content black-text" style="padding: 10px;min-height: 690px;margin:0px;">
              <span class="card-title black-text">Menú</span>
            	
			
				 <div class="collection " id="mobile-demo">
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
</aside>

<div id="contenedor" style="min-height: 701px;">
<section id="base1" style="overflow-y: auto;max-height: 700px;">
<div class="row">
<div class="col s12 m12 l12">
  <div class="card grey lighten-4 ">
    <div class="card-content black-text">
      
    		
		<?php 
            			 $mod = @$_GET['modulo'];
            			 $archivo = $mod.'/index2.php';

              			if (file_exists($archivo) and !empty($_GET['modulo'])) {
               				 include_once($archivo);
              			}else
              			{
                		include_once("emprendimiento/formato_inscripcion/index2.php");
             			 }
		?>		
		

    </div>
  </div>
</div>
</div>
</section>	
</div>

<footer class="grey darken-3" style="height: 50px ;background-color:green">
	pie de pagina
</footer>

<script src="js/jquery.min.js"  type="text/javascript"></script>
<script src="js/materialize.min.js"  type="text/javascript"></script>
<script type="text/javascript">
	 $(document).ready(function(){
	 	$('.carousel.carousel-slider').carousel({fullWidth: true});
	 	$('.carousel.carousel-slider').carousel({duration:50});
	    $('.carousel.carousel-slider').carousel('next');
	    $(".button-collapse").sideNav();
	    $('select').material_select();
	    });	
</script>
</body>
</html>