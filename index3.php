<?php 
ob_start();
session_start();
  if(!isset($_SESSION["vev_admin_contenido"])){
    header("Location:index.php");
    // exit();
  }else{
 ?>
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
  <script src="js/jquery.min.js"  type="text/javascript"></script>
	

  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Londrina+Outline|Sniglet|Nanum+Myeongjo:800" rel="stylesheet">
  
</head>
<body>
  <ul id="ajuste" class="dropdown-content">
    <li><a href="index3.php?modulo=content_admin/informacion_personal" class="black-text">Editar perfil</a></li>
    <li><a href="access/cerrar_sesion.php" class="black-text">Salir</a></li>
  </ul>

<nav class="black-text navbar-fixed grey lighten-4 right" style="width: 80%"> 
  <div class="nav-wrapper">
      <!-- <a href="#" class="brand-logo">Logo</a> -->
      <ul id="nav-mobile" class="right  ">
     <li><a class="dropdown-button black-text" href="#!" data-activates="ajuste"><i class="material-icons left">settings</i>Configuracion<i class="material-icons right">arrow_drop_down</i></a></li>
       <!--  <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li> -->
      </ul>
    </div>
    </nav>

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
                   include_once("content_admin/index/index3.php");
                   }
    ?>    
    </div>
  </div>




  <script src="js/materialize.min.js"  type="text/javascript"></script>
  <script type="text/javascript" src="js/select2.js"></script>
  <script type="text/javascript" src="js/admin_content_crud.js"></script>
  <script type="text/javascript" src="js/sweetalert.js"></script>
   <script type="text/javascript" src="js/Trumbowyg-master/dist/trumbowyg.min.js"></script>
   <script type="text/javascript">
      $('#descripcion').trumbowyg();
      $('#descripcion_nt').trumbowyg();
   </script>


   <script src="js/Trumbowyg-master/plugins/upload/trumbowyg.upload.js"></script>
  <script>
    $(document).ready(function(){

      $('.collapsible').collapsible();
      $('.modal').modal();
      $('select').material_select();

    });
  </script>
</body>
</html>
<?php 
}
ob_end_flush();
 ?>