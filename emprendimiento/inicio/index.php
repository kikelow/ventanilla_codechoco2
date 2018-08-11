<div class='slider' id='sliderp' style='background-size: cover;'>
  <ul class='slides' id='ulimg'>

<?php include "conexion.php";
  $s = "SELECT s.titulo,s.descripcion, i.ruta as ubicacion from slide s, img_page i where s.id_img_page = i.id" ;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

     if(mysqli_num_rows($res)>0){
        while($rw=mysqli_fetch_array($res)){
            echo "
            <li class='li_extend'>
             <img src='content_admin/content_save/img_content/$rw[ubicacion]'> 
              <div class='caption center-align'>
                <h1>$rw[titulo]</h1>
                <h3 class='light grey-text text-lighten-3'>$rw[descripcion]</h3>
              </div>
            </li>";
        }
      }
?>
  </ul>
</div>    



<div class="parallax-container">
<div class="section white" style="background-color: #f5f5f5">
   
    <div class="row container">
     
      <h5 style='text-align: center;color: #00853b;font-weight: bold;'><span>Nuestros Servicios<hr class='hr_title'></span></h5>
    <div class="row servicios">
        
        <div class="">
            <div class="">
              <h2 class="" style="text-align: center;"> <i class="material-icons icons_grandes">record_voice_over</i></h2>
               <h5 class="" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">Asesorias</h5>
               <p class="" style="text-align: center;">En creación, fortalecimiento y desarrollo de empresas de negocios verdes.</p>
               
            </div>  
        </div>
         <div class="">
            <div class="">
              <h2 class="" style="text-align: center;"> <i class="material-icons icons_grandes">group_add</i></h2>
               <h5 class="" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">Apoyo</h5>
               <p class="" style="text-align: center;">En trámites ambientales y demás relacionados con los negocios verdes.</p>
               
            </div>  
        </div>
         <div class="">
            <div class="">
              <h2 class="" style="text-align: center;"> <i class="material-icons icons_grandes">supervisor_account</i></h2>
               <h5 class="" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">Capacitaciones</h5>
               <p class="" style="text-align: center;">En desarrollo de competencias empresariales y humanas.</p>
               
            </div>  
        </div>
        <div class="">
            <div class="">
              <h2 class="" style="text-align: center;"> <i class="material-icons icons_grandes">wifi_tethering</i></h2>
               <h5 class="" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">Promoción</h5>
               <p class="" style="text-align: center;">Comercial de las empresas y sus productos en platarformas y ferias locales, nacionales e internacionales.</p>
               
            </div>  
        </div>
        <div class="">
            <div class="">
              <h2 class="" style="text-align: center;"> <i class="material-icons icons_grandes">description</i></h2>
               <h5 class="" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">Otorgar</h5>
               <p class="" style="text-align: center;">Certificaciones del cumplimiento de los criterios de negocios verdes.</p>
               
            </div>  
        </div>
       
        <div class="">
            <div class="">
              <h2 class="" style="text-align: center;"> <i class="material-icons icons_grandes">done_all</i></h2>
               <h5 class="" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">Valoración</h5>
               <p class="" style="text-align: center;">Del cumplimiento de los criterios e indicadores de los negocios verdes.</p>
               
            </div>  
        </div>

    </div>
   <!--   <div class="row">
   <div class="col s12 m4 l4">
    <div >
      <img class="responsive-img" src="img/img_m.png" alt="" width="400" height="400">
    </div>
   </div>
    <div class="col s12 m8 l8">
      <p>
        <h1 style="font-family: arial;padding-top:100px; text-align: justify;">
          Esta sección de la pagina se encuentra en mantenimiento. En breve estará disponible.
        </h1>
      </p>
   </div>
 </div> -->

    </div>
  </div>




<div class="row" id="mv_registro1">
  <div class="col s12">

      <div class="row " style="margin: auto;margin-top: 100px">
        <div class="col s12 ">
            <div class="row animatedParent">
              <div class="col s12 animated fadeInDown"><H5><p class="center" style="color: white;font-family: 'Sniglet', cursive;font-weight: bold">¿TIENES UN EMPRENDIMIENTO A BASE DE RECURSOS NATURALES?</p></H5></div>
          </div>
        
          <div class="row animatedParent">
              <div class="col s12 animated fadeInDown"><H3 style="margin-bottom: 0px;margin-top: 0px;padding: 0px;"><p class="center" style="color: white;margin-bottom: 0px;margin-top: 0px;padding: 0px;font-family: 'Sniglet', cursive"> REGISTRATE EN LA VENTANILLA DE EMPRENDIMIENTOS VERDES</p></H3></div>
          </div>
           <!-- <h2 class="green-text center ">¿Tiene un negocio a base de recursos naturales? Aprovecha esta oportunidad en mercados verdes.</h2> -->
        </div>
      </div>
      
      <div  class="row animatedParent" style="margin: auto;width: 200px;margin-top: 20px;font-family: 'Sniglet', cursive;margin-bottom: 100px;">
        <div class="col s12 animated  fadeInUp">
          <a class="boton_personalizado btn " href="index.php?modulo=emprendimiento/registro" style="width: 200px;height: 54px;">Registralo aquí</a>
        </div>
      </div>
  </div>
</div>

    <div class="parallax"><img src="img/p0.jpg"></div>
</div>



  


<div class="section" style="background-color:#c7ebd4;">
  <div class="row container ">
    <h5 style='text-align: center;color: #00853b;font-weight: bold;'><span>Noticias<hr class='hr_title'></span></h5>
  <div class="row noticias" style="margin-top: 80px;">
    <!-- <span class="black-text">  -->

        
        <?php 
            $s = "SELECT id,titulo,descripcion,fuente_autor from noticia";

            $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

           if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){

$titulo_c = substr($rw['titulo'], 0, 26);
$descripcion_c = substr($rw['descripcion'], 0, 270);

                  echo "
<div class='col s12 m4 l4'>
<div class='w3-card-4'>        
<header class='w3-container ' style='background-color:  #00853b'>
<h4 class='white-text'> <a href='emprendimiento/noticias/vermas/index.php?id=$rw[id]'>$titulo_c...</a></h4>

</header>

<div class='w3-container' style='background-color:  #fff;min-height:210px;max-height:210px;'>
<p >$descripcion_c...</p>
</div>

<footer class='w3-container' style='background-color:  #00853b'>
<h5 class='white-text'>Autor: $rw[fuente_autor]</h5>
</footer></div>
    </div>";
              }
            }else{

                 echo" 
                    <div class='col s12 m4 l4'>
                      <div>
                      <img class='responsive-img' src='img/img_m.png' alt='' width='400' height='400'>
                  </div>
                </div>
                  <div class='col s12 m8 l8'>
                <p>
                  <h1 style='font-family: arial;padding-top:100px;'>
                    Esta sección de la pagina se encuentra en mantenimiento. En breve estará disponible.
                    </h1>
                </p>
                </div>";
            }
        ?>
        


</div>    
</div>
</div>

<div class="divider"></div>


<div class="parallax-container">  
<div id="info_mv" style="height: auto;min-height: 500px;" > 
  <div class="row"> 

        <?php 
            $s = "SELECT c.id,c.titulo,c.descripcion, i.ruta as ubicacion from contenido c, img_page i where c.id_img_page = i.id and c.alias_id = 3 order by c.id";

            $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

           if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){

              if ($rw['id'] == 8) {
                           
      echo "

      <div class='col s12 animatedParent'>
          <h4 style='text-align: center;margin-top: 50px;color: #00853b;font-weight: bold;' class='flow-text animated fadeInDown'>$rw[titulo]<span><hr class='hr_title'></span></h4>
          <p style='text-align: center' class='animated fadeInDown'>$rw[descripcion]</p>
      </div>
    
    <div class='row' >
      <div class='col s12 m3 l3' >
        <div id='div_mv_img' class='animatedParent'>
          <img class='animated growIn responsive-img' src='content_admin/content_save/img_content/$rw[ubicacion]' height='403' width='212' style='margin-left: 90px;margin-top: 50px'>
        </div>
      </div>
  ";


    }
    if ($rw['id'] == 9) {

       echo "<div class='col s12 m9 l9'>
              <div class='row' >
               <div class='col s12 animatedParent'>
                <h5 style='text-align: center;color: #00853b;font-weight: bold;'  class='flow-text animated fadeInDown'>$rw[titulo]<span><hr class='hr_title'></span></h5>
                <p class='animated fadeInDown'>$rw[descripcion]</p>
              </div>
            </div>";

    }

    if ($rw['id'] == 10) {

     echo "<div class='row'>
              <div class='col s12 animatedParent' >
                <h5 style='text-align: center;color: #00853b;font-weight: bold;' class='flow-text animated fadeInDown' ><span>$rw[titulo]<hr class='hr_title'></span></h5>
                <p class='animated fadeInDown'>$rw[descripcion]</p>
              </div>
           </div>
           </div>
           </div>";

    }
 }
            }else{

                 echo" 
                    <div class='col s12 m4 l4'>
                      <div>
                        <img class='responsive-img' src='img/img_m.png' alt='' width='400' height='400'>
                      </div>
                    </div>
                  <div class='col s12 m8 l8'>
                  <p>
                    <h1 style='font-family: arial;padding-top:100px;'>
                      Esta sección de la pagina se encuentra en mantenimiento. En breve estará disponible.
                    </h1>
                  </p>
                </div>";
            }
?>


</div>
</div>
</div>

<div class="divider"></div>

<div class="section" style="background-color: #c7ebd47a;">
  <div class="row">      
    <h5 class="flow-text" style="text-align: center;color: #00853b;font-weight: bold;">Negocios Evaluados<span><hr class="hr_title"></span></h5>       
      <div class="row mercados" style="margin:20px">
  
        
<?php 

 $s = "SELECT e.id,e.razon_social,e.descripcion,e.puntaje,i.imagen from empresa e,img_empresa i where e.id = i.empresa_id AND puntaje >" . 50;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

     if(mysqli_num_rows($res)>0){
        while($rw=mysqli_fetch_array($res)){          

        $desc1 = substr($rw['descripcion'], 0,50);

?>



 <div class="col s12 m4 l4">
            <div class="card sticky-action">
              <div class="card-image waves-effect waves-block waves-light">
                
                <?php   if ($rw['imagen'] == "") { ?> 
                <img class="activator" src="img/img_nd.png" alt="">
                <?php } else { ?> 
                <img class="activator" src="evaluacion/formato_inscripcion/imagenes/<?php echo $rw['imagen'] ?> " alt="">
                <?php } ?>  
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"> <?php echo$rw['razon_social']?><i class="material-icons right">more_vert</i></span>
                <p><a href="emprendimiento/m_evaluados/vermas/index.php?id=<?php echo $rw['id'] ?>">Ver mas...</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo$rw['razon_social']?><i class="material-icons right">close</i></span>
                <p><?php echo$rw['descripcion']?></p>
              </div>
          </div>
  </div>



<?php 
 }

    }else{

echo " <div class='row' style='margin-top: 200px;'>
<div class=' col s12  green lighten-5 ' id='' style='border: 1px solid green;margin-left:10%;margin-right: 10%;width: 80%;'>
  <h3>No hay información para mostrar</h3>
</div>
</div>
";

    }
?>


      </div>
    </div>
</div>






<div class="divider"></div>

<div class="section" style="background-color:#c7ebd4;">
  <div class="row container">
  <h5 class="flow-text center" style="margin-bottom: 5px;margin-top: 30px;color: #00853b;font-weight: bold;">Colaboradores<span><hr class="hr_title"></span></h5>



  <div class="row">
    <div class="responsive" id="slider">

          <?php 
            $s = "SELECT nombre,ruta from partner_page" ;
            $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

               if(mysqli_num_rows($res)>0){
                  while($rw=mysqli_fetch_array($res)){
                      echo "<div style='margin-left: 5px;margin-right: 5px;'><img src='content_admin/content_save/img_content/$rw[ruta]' alt='$rw[nombre]' height=''> </div>";             
                }

              }else{
                         echo " 

                      <div class='col s12 m4 l4'>
                        <div>
                        <img class='responsive-img' src='img/img_m.png' alt='' width='400' height='400'>
                    </div>
                  </div>
                    <div class='col s12 m8 l8'>
                  <p>
                    <h1 style='font-family: arial;padding-top:100px; text-align: justify;'>
                      Sección en mantenimiento.
                      </h1>
                  </p>
                  </div>";
              }
          ?>
      </div>
      </div>
    </div>
  </div>

<div class="section" style="background-color: #00853b14;">
  <div class="row container">
    <div class="row">
      <div class="col s12 m4 l4">
        <h4 style="text-transform: uppercase;font-weight: bold;color: #00853b;">Facebook</h4>
        <div class="divider" style="background-color:#00853b59;margin-bottom: 10px;"></div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCodechoco-Prensa-1318923414813039%2F&tabs=timeline&width=340&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div class="col s12 m4 l4" >
        <div style="">
          <h4 style="text-transform: uppercase;font-weight: bold;color: #00853b;">Twitter</h4>
          <div class="divider" style="background-color:#00853b59;margin-bottom: 10px;"></div>
          <div style="height: 450px;overflow-y: scroll;"> 
            <a class="twitter-timeline" href="https://twitter.com/CodechocoPrensa?ref_src=twsrc%5Etfw">Tweets by CodechocoPrensa</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
      <div class="col s12 m4 l4">
        <div style="height: 450px">
          <h4 style="text-transform: uppercase;font-weight: bold;color: #00853b;">Ubicación</h4>
          <div class="divider" style="background-color:#00853b59;margin-bottom: 10px;"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1191.7568271640066!2d-76.66211064842435!3d5.688497543935587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56e752a545b566e4!2sCodechoc%C3%B3!5e0!3m2!1ses-419!2sco!4v1519148260818" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>