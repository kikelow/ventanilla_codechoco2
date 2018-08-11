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

  <link rel="shortcut icon" href="../../../img/favicon2.ico" type="image/x-icon">
  <link rel="icon" href="../../../img/favicon2.ico" type="image/x-icon">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../../css/materialize.min.css" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Londrina+Outline|Sniglet|Nanum+Myeongjo:800" rel="stylesheet">
  <script src="../../../js/jquery.min.js"  type="text/javascript"></script>
</head>


<body >



<div style="height: auto;min-height: 500px;">
   
<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn" onclick='window.history.back();' style="background: #00853bb3;margin-top: 10px; "><i class="material-icons left">arrow_back_ios</i>Volver</a>
    <!-- <a href="#" onclick='window.history.back();'></a> -->
  </div>
</div>


<?php include "../../../conexion.php"; 

  $id_noticia = $_GET['id'] ;

$s = "SELECT n.id,n.titulo,n.descripcion,n.fecha_publicacion,n.fuente_autor,i.ruta as ubicacion from noticia n, img_page i where n.id_img_page = i.id and n.id = '$id_noticia'";
$res = mysqli_query($conn,$s) or die(mysqli_error($conn));


            if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){
          
                echo "
          <div class='row'>
          <div class='col s12'>
          <h5 style='background-color: #00853b;color:#fff;padding-left: 5px;text-align:center;padding-top: 5px;padding-bottom: 5px;'>$rw[titulo]</h5>
          </div>  
          </div>

          <div class='row'>
            <div class='col s12'>
              <div class='img-container'>
                <img class='materialboxed' src='../../../content_admin/content_save/img_content/$rw[ubicacion]' alt='' width='300px' height='300px'>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col s12 '>
              <div class='notice-container'>
                <p style='font-family:Times'><span>$rw[descripcion]</span></p>

                <p style='background-color: #00853b;color:#fff;padding-left: 5px;'>Publicación: $rw[fecha_publicacion]</p>
            </div>
          </div>
        </div>  
       ";
              }
          }
?>

</div>



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
<!-- <script src='js/css3-animate-it.js'></script> -->
<!-- <script src='slick/slick.min.js'></script> -->
<script src='js/slider_1.js'></script>
<!-- <script src='js/index.js'></script> -->
<script src="../../../js/style.js"  type="text/javascript"></script>
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

