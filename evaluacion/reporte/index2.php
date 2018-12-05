<?php 
// session_start();
  if(!isset($_SESSION["vev_verificador"])){
    header("Location:index.php");
    exit();
  }
 ?>
<?php 
require_once('conexion.php');
$i = 0;  
?>
<div  class="col s12" style="padding-right: 0px; padding-left: 0px">
  <div  class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row" style="margin-bottom: 0px">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <!-- <center><h4 style="margin-top: 0px">Sección para Registrar</h4></center> -->
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
              <!-- <div class="col s12 m12 l12"> -->
                <!-- <div class="card grey lighten-4 "  style=""> -->
                  <span class="card-title"><h5><p> Resumen de cada emprendimiento</p></h5></span>
                  <hr>
                  <div class="row">
                    <div class="input-field col s12 m12 l9  " id="">
                      <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
                        <option disabled selected="">Seleccione un emprendimiento</option>
                        <?php 
                        $s="SELECT id,razon_social from empresa";
                        $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[razon_social]</option>";          
                          }         
                        }
                        ?>
                      </select>
                    </div>  
                    <div class="col s12 m12 l3">
                     <button class="waves-effect green darken-2 btn" style="margin-top: 8px" id="reporte1"><i class="material-icons right">picture_as_pdf</i>Generar PDF</button>
                   </div>      
                 </div>


               </div>
             </div>
           </div>
         </div>

         <div class="row"  style="margin-bottom: 0px">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <!-- <center><h4 style="margin-top: 0px">Sección para Registrar</h4></center> -->
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
              <!-- <div class="col s12 m12 l12"> -->
                <!-- <div class="card grey lighten-4 "  style=""> -->
                  <span class="card-title"><h5><p> Plan de mejora</p></h5></span>
                  <hr>
                  <div class="row">
                   
                    <div class="input-field col s12 m12 l9  " id="">
                      <select id="empresa_plan" style="width: 100%; left: -20px;" name="empresa_plan" required="required">
                        <option disabled selected="">Seleccione un emprendimiento</option>
                        <?php 
                        $s="SELECT id,razon_social from empresa WHERE plan_mejora = 'si'";
                        $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[razon_social]</option>";          
                          }         
                        }
                        ?>
                      </select>
                    </div>  
                    <div class="col s12 m12 l3">
                     <button class="waves-effect green darken-2 btn plan" style="margin-top: 8px" id=""><i class="material-icons right"></i>Generar Excel</button>
                   </div>      
                 </div>


               </div>
             </div>
           </div>
         </div>


       <div class="row"  style="margin-bottom: 0px">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <!-- <center><h4 style="margin-top: 0px">Sección para Registrar</h4></center> -->
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
              <!-- <div class="col s12 m12 l12"> -->
                <!-- <div class="card grey lighten-4 "  style=""> -->
                  <span class="card-title"><h5><p> Informe General (SÓLO MADS)</p></h5></span>
                  <hr>
                  <div class="row">
                   
                    <div class="input-field col s12 m12 l9 green lighten-5 " id="div_empresa" style="border: 1px solid green">
                      <h6>NOTA:  Este documento contiene el resumen de los emprendimientos a los cuales se le han aplicado todas las fases de evaluación</h6>
                    </div>  
                    <div class="col s12 m12 l3">
                     <a class="waves-effect green darken-2 btn"  href="evaluacion/reporte/reporte_general.php"  style="margin-top: 20px" id="" target="_blank"><i class="material-icons right"></i>Generar Excel</a>
                   </div>      
                 </div>


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
<script type="text/javascript" src="js/reporte.js"></script>
<script type='text/javascript' src='js/verificacion2_modificar.js'></script>
<script type='text/javascript' src='js/chart.js'></script>
