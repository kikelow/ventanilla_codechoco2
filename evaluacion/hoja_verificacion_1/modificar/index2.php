<?php 
// session_start();
  if(!isset($_SESSION["vev_verificador"])){
    header("Location:index.php");
    exit();
  }
 ?>
<?php  
if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../../conexion.php');
        
 
    }
?>

<!--___________________________________ Seccion para modificar_______________________ -->
<div id="test2" class="col s12" style="padding-right: 0px; padding-left: 0px">
          <center><h4 style="margin-top: 0px">Sección para Modificar</h4></center>
  <div id="test-swipe-2" class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
                <!-- <div class="col s12 m12 l12"> -->
  <!-- <div class="card grey lighten-4 "  style="height: auto;display:inline-block;width: 100%;"> -->
<span class="card-title"><center><h5> Hoja de verificación 1</h5></center></span>
  <div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa_m" style="width: 100%; left: -20px;" name="empresa_m" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual desea realizarle MODIFICACIONES</option>
          <?php 
                  $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM verificadorxempresa
                        INNER JOIN empresa ON empresa.id = verificadorxempresa.empresa_id
                        WHERE verificadorxempresa.persona_id = '$_SESSION[vev_verificador]' AND verificacion1 ='si'";
                  $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r)>0){
                    while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social] - $rw[identificacion]</option>";          
                    }         
                  }
                  ?>
        </select>
      </div>        
</div>

<div id="preload" class="">
      <div class="indeterminate"></div>
  </div>

<form id="form_modificar_verificacion1">
    <div id="cargar_info"></div>
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
<script type="text/javascript" src="js/accion_verificacion1.js"></script>