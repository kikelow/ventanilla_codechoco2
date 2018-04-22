<?php include "conexion.php"; 
  $s = "SELECT n.titulo,n.descripcion,n.fecha_publicacion,n.fuente_autor,i.ruta as ubicacion from noticia n, img_page i where n.id_img_page = i.id order by fecha_publicacion desc" ;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));
?>

<div class="" style="margin: 0px;padding: 0px;width: 100%;height: auto;background-color: #00853b14">
<div class="row"  style="padding-top: 150px;width: 90%">
  <div class="col s12 m12 l12">
    <div class="row" ><h3 class="diagonal" style="text-align: center;">Ultimas noticias</h3> <div class="divider" style=" background-color:  #00853b;"></div></div> 
  </div>

   <?php 
            if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){
                
                $desc1 = substr($rw['descripcion'], 0,300);

                echo "<div class='row'>
                      <div class='col s12 m2 l2 '>
                        <img class='c_img' src='content_admin/content_save/$rw[ubicacion]' alt='' style='margin-top: 20px;'>
                      </div>
                      <div class='col s12 m10 l10'>
                        <p style='font-style: italic;' >Fecha y hora de publicación: $rw[fecha_publicacion]</p>
                        <h3 style='font-weight: bold;'><a href='/vista_completa.php'>$rw[titulo]</a></h3> 
                        <h6>$desc1</h6>
                        <h6 style='font-style: italic;'>Fuente/Autor: $rw[fuente_autor]</h6>
                      </div>
                  </div>
                  <div class='divider' style=' background-color:  #00853b;'></div>";
              }
            }
    ?>

</div>
</div>

