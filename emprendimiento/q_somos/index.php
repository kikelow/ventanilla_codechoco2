<?php include "conexion.php"; 
  $s = "SELECT * from contenido where id =4" ;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));
?>
 <div class="row" style="background-color: #00853b14;padding-top: 150px;">
   <div class="row">
     <div class="col s12">
        <div style="width: 300px;height: 300px;margin:auto;">
          <img src="img/logo1.png" alt="" width="300" height="300">
        </div> 
     </div>
   </div>
   <div class="divider"></div>

   <?php 
            if(mysqli_num_rows($res)>0){
              while($rw=mysqli_fetch_array($res)){
    ?>
   <div class="row">
    <h3 class="diagonal" style="text-align: center;"><?php echo"$rw[titulo]"?></h3> <div class="divider" style=" background-color:  #00853b;"></div>
      <div class="col s12">
         <?php echo "$rw[descripcion]"; }} ?>
      </div>
    </div>
 </div>