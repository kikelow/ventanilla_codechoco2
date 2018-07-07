<?php include "conexion.php"; 
  $s = "SELECT c.titulo,c.descripcion, i.ruta as ubicacion from contenido c, img_page i where c.id_img_page = i.id and c.alias_id = 1 order by c.id" ;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));
?>
 <div class="row" style="padding-top: 150px;margin-bottom: 0px;;">
   <div class="row">
     <div class="col s12">
        
          
  <?php 
            if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){
    

if ($rw['ubicacion'] == 'NO APLICA') {

echo "

<div class='row'>
<div class='col s12'>
<p class='diagonal' style='text-align: center;'>$rw[titulo]</p> <div class='divider' style=' background-color:  #00853b;'>
</div>
</div>
<div class='col s12'>$rw[descripcion]</div></div> ";

}else{

echo "
<div style='width: 300px;height: 300px;margin:auto;'>
<img src='content_admin/content_save/img_content/$rw[ubicacion]' alt='' width='300' height='300'>
</div> 



<div class='divider'></div>

<div class='row'>
<div class='col s12'>
<p class='diagonal' style='text-align: center;'>$rw[titulo]</p><div class='divider' style=' background-color:  #00853b;'>
</div>
 </div>
<div class='col s12'>$rw[descripcion]</div>
</div> ";

    }
  }
}else{
  echo "<div class='row' style='margin-top: 50px;'>
    <div class=' col s12  green lighten-5 ' id='' style='border: 1px solid green;margin-left:10%;margin-right: 10%;width: 80%;'>
      <h3>No hay información para mostrar</h3>
    </div>
 </div>";
}
?>


</div>
</div>
</div>


 
