<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administración de Contenidos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon2.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/select2.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="js/Trumbowyg-master/dist/ui/trumbowyg.min.css">
	

  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Londrina+Outline|Sniglet|Nanum+Myeongjo:800" rel="stylesheet">
  
</head>
<body>


<aside id="left-sidebar-nav" >
  <ul id="nav-mobile" class="side-nav fixed  grey lighten-4 " style="padding-top: 10px;width: 19%;">
    <li class="logo center"><img id="logo-container" src="img/logo1.png" class="brand-logo responsive-img " style="width: 150px">
            </img></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-green" href="index3.php?modulo=content_admin/inicio">Contenidos</a></li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-green" href="index3.php?modulo=content_admin/usuarios">Usuarios</a></li>
          </ul>
        </li>
      </ul>
</aside>



<nav class="white  hide-on-large-only">
 <div class=" " style="width: 100%">
    <a href="#" data-activates="mobile-demo" class="button-collapse center"><i class="material-icons black-text">menu</i></a>
    <a href="#" class="brand-logo center black-text"></a>

       <ul class="side-nav" id="mobile-demo">
        <li><a href="index3.php?modulo=evaluacion/formato_inscripcion" class="collection-item active black-text">Formato de Inscripción</a></li>
        <li><a href="index3.php?modulo=evaluacion/formato_informacion_as" class="collection-item  black-text">Formato de Información AS</a></li>
        <li> <a href="index3.php?modulo=evaluacion/hoja_verificacion_1" class="collection-item  black-text">Hoja de Verificación 1</a></li>
        <li> <a href="index3.php?modulo=evaluacion/hoja_verificacion_2" class="collection-item black-text">Hoja de Verificación 2</a></li>
        <li> <a href="index3.php?modulo=evaluacion/registro_fotografico" class="collection-item black-text">Registro Fotografico</a></li>
        <li><a href="index3.php?modulo=evaluacion/plan_mejora" class="collection-item black-text">Plan de Mejora</a></li>
      </ul>
     </div>   
</nav>

    <div class="right" style="margin-top: 15px; width:80%;" id="contenedor"  > 
    <?php 
                   $mod = @$_GET['modulo'];
                   $archivo = $mod.'/index3.php';

                   if (file_exists($archivo) and !empty($_GET['modulo'])) {
                      include_once($archivo);
                   }else
                   {
                   include_once("content_admin/inicio/index3.php");
                   }
    ?>    
    </div>
  </div>







<footer class="grey lighten-3" style="height: 60px;display: inline-block;width: 100%;position: relative;">
 <div class="row">
   <div class="col s12 m6 l6 ">&copy Ventanilla de emprendimientos verdes</div>
   <div class="col s12 m6 l6 ">Desarrollo: David y Harinson</div>
 </div>
</footer>
<script src="js/jquery.min.js"  type="text/javascript"></script>
  <script src="js/materialize.min.js"  type="text/javascript"></script>
  <script type="text/javascript" src="js/select2.js"></script>
  <script type="text/javascript" src="js/admin_content_crud.js"></script>
  <script type="text/javascript" src="js/sweetalert.js"></script>
   <script type="text/javascript" src="js/Trumbowyg-master/dist/trumbowyg.min.js"></script>
   <script type="text/javascript">
      $('textarea').trumbowyg();
   </script>
  <script>
    $(document).ready(function(){

      $('.collapsible').collapsible();
      $('.modal').modal();
      $('select').material_select();

    });
  </script>
</body>
</html>