 <?php 
require_once('conexion.php');
        $i = 0;  
 ?>
 <span class="card-title"><center>Hoja de verificación 2</center></span>
 <div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 2"</option>
          <?php 
                    $s="select id,razon_social from empresa ";
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
 <div class="row">
    <form id="form_verificacion2">
       <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Viabilidad económica del Negocio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Viabilidad económica del Negocio</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%VIABILIDAD_ECONOMICA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          <option disabled selected>Seleccione...</option>";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_veri".$i."'' name='verificacion2_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div>
         <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
            <input  type='text' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            <label for='verificacion2_evidencia".$i."'>Evidencia</label>
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%CONTRIBUCION_CONSERVACION%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          <option disabled selected>Seleccione...</option>";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_veri".$i."'' name='verificacion2_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div>
         <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
            <input  type='text' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            <label for='verificacion2_evidencia".$i."'>Evidencia</label>
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

    
    </ul>
          
      <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="btn_verificacion2"><i class="material-icons right">add</i>Registrar Hoja de Verificación 2</button>
    </form>
  </div>
  <script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_verificacion2.js"></script>