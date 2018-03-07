<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrativos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventanilla de Emprendiminetos Verdes</title>
	
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
<aside style="background-color: white;width: 20%" class="hide-on-small-only hide-on-med-only" >

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
</aside>

<div class="row right" style="width: 80%;" id="sub_tabs">
    <div class="col s12" style="">
      <ul class="tabs grey lighten-4">
        <li class="tab col s3"><a href="#test1" id="e"><strong>REGISTRAR</strong></a></li>
        <li class="tab col s3"><a href="#test2"><strong>MODIFICAR</strong></a></li>
     
      </ul>
    </div>

 <div class="white  hide-on-large-only" style="width: 100%">
    <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons black-text">menu</i></a>

       <ul class="side-nav" id="mobile-demo">
        <li><a href="index2.php?modulo=evaluacion/formato_inscripcion" class="collection-item active black-text">Formato de Inscripción</a></li>
        <li><a href="index2.php?modulo=evaluacion/formato_informacion_as" class="collection-item  black-text">Formato de Información AS</a></li>
        <li> <a href="index2.php?modulo=evaluacion/hoja_verificacion_1" class="collection-item  black-text">Hoja de Verificación 1</a></li>
        <li> <a href="index2.php?modulo=evaluacion/hoja_verificacion_2" class="collection-item black-text">Hoja de Verificación 2</a></li>
        <li> <a href="index2.php?modulo=evaluacion/registro_fotografico" class="collection-item black-text">Registro Fotografico</a></li>
        <li><a href="index2.php?modulo=evaluacion/plan_mejora" class="collection-item black-text">Plan de Mejora</a></li>
      </ul>
     </div>   


    <div> 
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







<footer class="grey darken-3" style="height: 60px;display:inline-block;width: 100%;" >
  pie de pagina
</footer>
<script src="js/materialize.min.js"  type="text/javascript"></script>
<script type="text/javascript">
	 $(document).ready(function(){
	 	$('.carousel.carousel-slider').carousel({fullWidth: true});
	 	$('.carousel.carousel-slider').carousel({duration:50});
	    $('.carousel.carousel-slider').carousel('next');
	    $(".button-collapse").sideNav();
	    $('select').material_select();

      // $('#e').click(function(event) {
      //   alert('message?: DOMString');
      // });
	    });	
</script>
</body>
</html>