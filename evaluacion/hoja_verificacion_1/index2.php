 <?php 
require_once('conexion.php');
        $i = 0;  
 ?>
 <span class="card-title"><center>Hoja de verificación 1</center></span>
 <div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 1"</option>
          <?php 
                    $s="SELECT id,razon_social from empresa where informacion_as = 'si'";
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
    <form id="form_verificacion1">
       <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Cumplimiento legal</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Cumplimiento legal</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%CUMPLIMIENTO_LEGAL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri".$i."'' name='verificacion1_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>  Condiciones laborales</div>
      <div class="collapsible-body">
     <div class="row" style="text-align: center;background-color: #bdbdbd;"> Condiciones laborales</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
       
        <div class="divider"></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%CONDICION_LABORAL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
            $s1="select id,nombre from si_no_noaplica";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri".$i."'' name='verificacion1_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

       <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>  Impacto ambiental positivo y contribución a la conservación y preservación de los recursos ecosistemicos </div>
      <div class="collapsible-body">
     <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto ambiental positivo y contribución a la conservación y preservación de los recursos ecosistemicos </div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        
        <div class="divider"></div>
        <?php 
            $s="SELECT id,nombre from opciones where codigo LIKE '%IMPACTO_AMBIENTAL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri".$i."'' name='verificacion1_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

       <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Impacto social positivo </div>
      <div class="collapsible-body">
     <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto social positivo</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        
        <div class="divider"></div>
        <?php 
            $s="SELECT id,nombre from opciones where codigo LIKE '%IMPACTO_SOCIAL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri".$i."'' name='verificacion1_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Sustancias o materiales peligrosos</div>
      <div class="collapsible-body">
     <div class="row" style="text-align: center;background-color: #bdbdbd;">Sustancias o materiales peligrosos</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        
        <div class="divider"></div>
        <?php 
            $s="SELECT id,nombre from opciones where codigo LIKE '%MATERIAL_PELIGROSO%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri".$i."'' name='verificacion1_veri[]' class='materialize-textarea'></textarea>
          <label for='r'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
    </ul>
          
      <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="btn_verificacion1"><i class="material-icons right">add</i>Registrar Hoja de Verificación 1</button>
    </form>
  </div>
  <script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_verificacion1.js"></script>