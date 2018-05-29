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
    <div class="row container" >

 <!--    <div class="row" >

        <div class="col s12 m3 l3">
            <div class="animatedParent">
              <h2 class="animated growIn" style="text-align: center;"> <i class="material-icons icons_grandes">account_balance</i></h2>
               <h5 class="animated growIn" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">servicio 1</h5>
               <p class="animated growIn" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio</p>
               <p class="animated growIn" style="text-align: center;"><a class=" waves-effect waves-light btn  hoverable btn-flat  white-text" style="background-color: #00853bed;border-radius: 20px;" href="#">Más información </a></p>
            </div>  
        </div>
         <div class="col s12 m3 l3">
            <div class="animatedParent">
              <h2 class="animated growIn" style="text-align: center;"> <i class="material-icons icons_grandes">shopping_basket</i></h2>
               <h5 class="animated growIn" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">servicio 2</h5>
               <p class="animated growIn" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio</p>
               <p class="animated growIn" style="text-align: center;"><a class=" waves-effect waves-light btn  hoverable btn-flat  white-text hoverable" style="background-color: #00853bed;border-radius: 20px;" href="#">Más información </a></p>
            </div>  
        </div>
         <div class="col s12 m3 l3">
            <div class="animatedParent">
              <h2 class="animated growIn" style="text-align: center;"> <i class="material-icons icons_grandes">supervisor_account</i></h2>
               <h5 class="animated growIn" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">servicio 3</h5>
               <p class="animated growIn" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio</p>
               <p class="animated growIn" style="text-align: center;"><a class=" waves-effect waves-light btn  hoverable btn-flat  white-text" style="background-color: #00853bed;border-radius: 20px;" href="#">Más información </a></p>
            </div>  
        </div>
        <div class="col s12 m3 l3">
            <div class="animatedParent">
              <h2 class="animated growIn" style="text-align: center;"> <i class="material-icons icons_grandes">forum</i></h2>
               <h5 class="animated growIn" style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text">servicio 4</h5>
               <p class="animated growIn" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio</p>
               <p class="animated growIn" style="text-align: center;"><a class=" waves-effect waves-light btn  hoverable btn-flat  white-text" style="background-color: #00853bed;border-radius: 20px;" href="#">Más información </a></p>
            </div>  
        </div>

    </div> -->
     <div class="row">
   <div class="col s12 m4 l4">
    <div >
      <img class="responsive-img" src="img/img_m.png" alt="" width="400" height="400">
    </div>
   </div>
    <div class="col s12 m8 l8">
      <p>
        <h1 style="font-family: arial;padding-top:100px;">
          Esta sección de la pagina se encuentra en mantenimiento. En breve estara disponible.
        </h1>
      </p>
   </div>
 </div>

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
              <div class="col s12 animated fadeInDown"><H2 style="margin-top: 0px;margin-bottom: 0px;margin-top: 0px;padding: 0px;"><p class="center" style="font-family: 'Sniglet', cursive;color:orange;font-weight: bold;margin-top: 0px;margin-bottom: 0px;margin-top: 0px;padding: 0px;">AUMENTA TU LA PRODUCTIVIDAD DE TU NEGOCIO</p></H2></div>
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
  <div class="row noticias" style="margin-top: 80px;">
    <!-- <span class="black-text">  -->

        
        <?php 
            $s = "SELECT titulo,descripcion,fuente_autor from noticia";

            $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

           if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){

$titulo_c = substr($rw['titulo'], 0, 26);
$descripcion_c = substr($rw['descripcion'], 0, 270);

                  echo "
<div class='col s12 m4 l4'>
<div class='w3-card-4'>        
<header class='w3-container ' style='background-color:  #00853b'>
<h4 class='white-text'>$titulo_c...</h4>
</header>

<div class='w3-container' style='background-color:  #fff;min-height:210px;max-height:210px;'>
<p >$descripcion_c...</p>
</div>

<footer class='w3-container' style='background-color:  #00853b'>
<h5 class='white-text'>$rw[fuente_autor]</h5>
</footer></div>
    </div>";
              }
            }
        ?>
        

<!--      <div class="col s12 m4 l4">
        <div class="w3-card-4">
            <header class="w3-container " style="background-color:  #00853b">
              <h1 class="white-text">Titulo noticia</h1>
            </header>

        <div class="w3-container" style="background-color:  #fff">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <footer class="w3-container " style="background-color:  #00853b">
          <h5 class="white-text">Fuente o responsbale de la noticia</h5>
        </footer>
        </div>
    </div> -->

    <!--  <div class="col s12 m4 l4">
        <div class="w3-card-4">
            <header class="w3-container " style="background-color:  #00853b">
              <h1 class="white-text">Titulo noticia</h1>
            </header>

        <div class="w3-container" style="background-color:  #fff;">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <footer class="w3-container " style="background-color:  #00853b">
          <h5 class="white-text">Fuente o responsbale de la noticia</h5>
        </footer>
        </div>
    </div> -->

    <!--  <div class="col s12 m4 l4">
        <div class="w3-card-4">
            <header class="w3-container " style="background-color:  #00853b">
              <h1 class="white-text">Titulo noticia</h1>
            </header>

        <div class="w3-container" style="background-color:  #fff">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <footer class="w3-container " style="background-color:  #00853b">
          <h5 class="white-text">Fuente o responsbale de la noticia</h5>
        </footer>
        </div>
    </div> -->

  <!--    <div class="col s12 m4 l4">
        <div class="w3-card-4">
            <header class="w3-container " style="background-color:  #00853b">
              <h1 class="white-text">Titulo noticia</h1>
            </header>

        <div class="w3-container" style="background-color:  #fff">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <footer class="w3-container " style="background-color:  #00853b">
          <h5 class="white-text">Fuente o responsbale de la noticia</h5>
        </footer>
        </div>
    </div> -->

    <!--  <div class="col s12 m4 l4">
        <div class="w3-card-4">
            <header class="w3-container " style="background-color:  #00853b">
              <h1 class="white-text">Titulo noticia</h1>
            </header>

        <div class="w3-container" style="background-color:  #fff">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <footer class="w3-container " style="background-color:  #00853b">
          <h5 class="white-text">Fuente o responsbale de la noticia</h5>
        </footer>
        </div>
    </div> -->
  <!-- </span> -->
</div>    
</div>
</div>

<div class="divider"></div>

<div class="parallax-container">
  
<div id="info_mv" style="height: auto;min-height: 500px;" > 
  <div class="row"> 
    <div class="row" >
      <div class="col s12 animatedParent">
        <h4 style="text-align: center;margin-top: 50px;color: #00853b;font-weight: bold;" class="flow-text animated fadeInDown">
          Negocios Verdes<span><hr class="hr_title"></span></h4>

        <p style="text-align: center" class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis fuga molestias asperiores, laudantium pariatur magni doloremque, quos adipisci, saepe eius nam consequuntur minus. Suscipit ducimus eligendi architecto nulla labore atque!</p>
      </div>
    </div>
    <div class="row" >
      <div class="col s12 m6 l6" >
        <div id="div_mv_img" class="animatedParent">
          <img class="animated growIn responsive-img" src="img/logo_nv.png" height="493" width="302" style="margin-left: 170px;margin-top: 50px">
        </div>
      </div>
      <div class="col s12 m6 l6">
        <div class="row" >
          <div class="col s12 animatedParent">
            <h5 style="text-align: center;color: #00853b;font-weight: bold;"  class="flow-text animated fadeInDown">info 1<span><hr class="hr_title"></span></h5>
            <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi natus ea, repellat quo tenetur. Culpa laudantium eaque nulla ea quam dolorum modi qui dolorem dignissimos velit voluptates, illum dicta nobis.</p>
          </div>
        </div>
       <div class="row">
          <div class="col s12 animatedParent" >
            <h5 style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text animated fadeInDown" >info 2<span><hr class="hr_title"></span></h5>
            <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, nam ad natus minus, inventore illum minima quia commodi iste officiis eos autem voluptates architecto doloribus vero animi provident rerum quisquam?</p>
          </div>
        </div>
        <div class="row">
          <div class="col s12 animatedParent" >
            <h5 style="text-align: center;color: #00853b;font-weight: bold;" class="flow-text animated fadeInDown" >info 3<span><hr class="hr_title"></span></h5>
            <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia atque ipsum ut deleniti architecto assumenda minus molestias quibusdam possimus similique neque delectus praesentium, ipsam tenetur deserunt aperiam, corrupti ipsa!</p>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div> 
</div>


<div class="divider"></div>

<div class="section" style="background-color: #c7ebd47a;">
  <div class="row">      
    <h5 class="flow-text" style="text-align: center;color: #00853b;font-weight: bold;">Negocios Evaluados<span><hr class="hr_title"></span></h5>       
      <div class="row mercados" style="margin:20px">

       <div class="col s12 m3 l3">
            <div class="card sticky-action">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/p3.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, dolorem iusto asperiores laudantium? Dolores, accusantium soluta repellat delectus, blanditiis mollitia quis, doloremque rem neque tenetur aperiam minima facere nihil sequi.</p>
              </div>
            </div>
        </div>
    
        
        <div class="col s12 m3 l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/p2.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae cupiditate reiciendis ex vitae. Provident nostrum optio consectetur nulla, possimus quos eum repudiandae, totam aperiam aspernatur illum, nisi beatae eos nam.</p>
              </div>
            </div>
        </div>

        
        <div class="col s12 m3 l3">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/p1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
        </div>

         <div class="col s12 m4 l4">
            <div class="card sticky-action">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/p3.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, dolorem iusto asperiores laudantium? Dolores, accusantium soluta repellat delectus, blanditiis mollitia quis, doloremque rem neque tenetur aperiam minima facere nihil sequi.</p>
              </div>
            </div>
        </div>
    
        
        <div class="col s12 m4 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/p2.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae cupiditate reiciendis ex vitae. Provident nostrum optio consectetur nulla, possimus quos eum repudiandae, totam aperiam aspernatur illum, nisi beatae eos nam.</p>
              </div>
            </div>
        </div>

        
        <div class="col s12 m4 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/p1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>


<div class="divider"></div>

<div class="section">
  <div class="row-container">
    <div class="row">
       <h5 class="flow-text" style="text-align: center;color: #00853b;font-weight: bold;">Contáctenos<span><hr class="hr_title"></span></h5> 
      <div class="col s12 m6 l6">

        <div class="card-panel white">
          <span class="white-text">
              <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Nombre Completo *</label>
              </div>

              <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Asunto *</label>
              </div>

              <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Correo *</label>
              </div>

              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Descripción *</label>
              </div>

        <a class="waves-effect waves-light btn " style="margin-left: 250px;" >Enviar</a>
      </div>
          </span>
        </div>

       
        
        

      <div class="col s12 m6 l6">
        <div id="logo_container">
          <!-- <div id="logo_codechoco" > -->
            <img class="responsive-img" src="img/logo_code.png" alt="" width="163px" height="163px" >
          <!-- </div>
          <div id="logo_vetanilla"> -->
            <img class="responsive-img" src="img/logo1.png" alt="" width="163px" height="163px" style="">
          <!-- </div> -->
          <!-- <div id="logo_codechoco" > -->
            <img class="responsive-img" src="img/logo_code.png" alt="" width="163px" height="163px" >

            <img class="responsive-img" src="img/logo1.png" alt="" width="163px" height="163px" style="">
          </div>
       
        </div>     
      </div>
    </div>
  </div>
</div>

<div class="divider"></div>

<div class="section" style="background-color:#c7ebd4;">
  <div class="row container">
  <h5 class="flow-text center" style="margin-bottom: 5px;margin-top: 30px;color: #00853b;font-weight: bold;">Colaboradores<span><hr class="hr_title"></span></h5>



  <div class="row">
    <div class="responsive" id="slider">
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/logo_code.png" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p1.jpg" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p3.jpg" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p2.jpg" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p5.jpg" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p6.jpg" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p7.jpg" alt="" height="" ></div>
        <div style="margin-left: 5px;margin-right: 5px;"><img src="img/p8.jpg" alt="" height="" ></div>
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