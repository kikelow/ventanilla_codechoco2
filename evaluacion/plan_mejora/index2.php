<?php 
require_once('conexion.php');
        $i = 0;  
 ?>
<div  class="col s12" style="padding-right: 0px; padding-left: 0px">
  <div  class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <center><h4 style="margin-top: 0px">Sección para Registrar</h4></center>
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
                <!-- <div class="col s12 m12 l12"> -->
  <!-- <div class="card grey lighten-4 "  style=""> -->
<span class="card-title"><center><h5>Plan de mejora</h5></center></span>
<div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle el "Plan de mejora"</option>
          <?php 
                    $s="SELECT id,razon_social from empresa WHERE verificacion2 = 'si' AND plan_mejora = 'no' ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social]</option>";          
                      }         
                    }
                  ?>
        </select>
      </div>        
</div>
<form id="form_plan_mejora">
    <div id="cargar_infos"></div>
</form>
</div>
</div>
</div>

            </div>
          </div>
        </div>
      </div>
    </section>  
  </div>
</div>

<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/plan_mejora.js"></script>