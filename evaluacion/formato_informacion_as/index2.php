<?php 
require_once('conexion.php');
 ?>

<div class="row">
 
    <div class="input-field col s12 m12 l12  ">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle el "formato de informacion AS"</option>
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

<form id="form_informacion">
 <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>1.1 Tenencia de la tierra</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">1.1 Tenencia de la tierra</div>

          <?php 
            $i = 11;
            $s="SELECT id,nombre from opciones where codigo LIKE '%TT%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox' class='ch' id='tt".$i."'  name='tierra[]' value='$rw[id]' />
                <label for='tt".$i."'>$rw[nombre]</label>
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input disabled type='text' name='desc_t[]' id='desc_t".$i."' />
                <label for='desc_t".$i."'>Descripcion</label>
              </div>
              </div>";

              }         
            }
        ?>
          
                  </span></div>
  </li>
  <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>1.2 Legislación Ambiental Colombiana</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">1.2 Legislación Ambiental Colombiana</div>
        <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Registro</p> 
            <div class="divider"></div>
      
              <div class="input-field col s12 m3 l2">
              <label for="disabled">Registro Invima</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="invima_a_na" name="invima_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="invima_c_nc" name="invima_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input  type="text" id="invima_vigencia" name="invima_vigencia" class="validate">
                <label for="invima_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="invima_obs" name="invima_obs" type="text" class="validate">
                <label for="invima_obs">Observacion</label>
              </div>

              <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Registro ICA</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="ica_a_na" name="ica_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="ica_c_nc" name="ica_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="ica_vigencia" name="ica_vigencia" type="text" class="validate">
                <label for="ica_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="ica_obs" name="ica_obs" type="text" class="validate">
                <label for="ica_obs">Observacion</label>
              </div>
          </div>

           <div class="row">
        <div class="input-field col s12 m3 l2">
               <label>Registro Nacional de Turismo</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="turismo_a_na" name="turismo_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="turismo_c_nc" name="turismo_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="turismo_vigencia" name="turismo_vigencia" type="text" class="validate">
                <label for="turismo_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="turismo_obs" name="turismo_obs" type="text" class="validate">
                <label for="turismo_obs">Observacion</label>
              </div>
          </div>
       
       <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Registro de Plantación Forestal</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="forestal_a_na" name="forestal_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="forestal_c_nc" name="forestal_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="forestal_vigencia" name="forestal_vigencia" type="text" class="validate">
                <label for="forestal_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="forestal_obs" name="forestal_obs" type="text" class="validate">
                <label for="forestal_obs">Observacion</label>
              </div>
          </div>
   
      </div>
    </div>
          




          <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Permiso</p> 
            <div class="divider"></div>
      
              <div class="input-field col s12 m3 l2">
               <label>Permiso de aprovechamiento</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="aprovechamiento_a_na" name="aprovechamiento_a_na">
               <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="aprovechamiento_c_nc" name="aprovechamiento_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="aprovechamiento_vigencia" name="aprovechamiento_vigencia" type="text" class="validate">
                <label for="aprovechamiento_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="aprovechamiento_obs" name="aprovechamiento_obs" type="text" class="validate">
                <label for="aprovechamiento_obs">Observacion</label>
              </div>

              <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Concesión de Aguas</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="aguas_a_na" name="aguas_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="aguas_c_nc" name="aguas_c_nc">
                 <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="aguas_vigencia" name="aguas_vigencia" type="text" class="validate">
                <label for="aguas_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="aguas_obs" name="aguas_obs" type="text" class="validate">
                <label for="aguas_obs">Observacion</label>
              </div>
          </div>

           <div class="row">
        <div class="input-field col s12 m3 l2">
               <label>Permiso de Vertimientos o Emisiones</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="emiciones_a_na" name="emiciones_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="emiciones_c_nc" name="emiciones_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="emiciones_vigencia" name="emiciones_vigencia" type="text" class="validate">
                <label for="emiciones_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="emiciones_obs" name="emiciones_obs" type="text" class="validate">
                <label for="emiciones_obs">Observacion</label>
              </div>
          </div>
       
       <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Permiso Tala de Árboles</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="arboles_a_na" name="arboles_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="arboles_c_nc" name="arboles_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="arboles_vigencia" name="arboles_vigencia" type="text" class="validate">
                <label for="arboles_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="arboles_obs" name="arboles_obs" type="text" class="validate">
                <label for="arboles_obs">Observacion</label>
              </div>
          </div>

          <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Permiso de Movilización</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="movilizacion_a_na" name="movilizacion_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="movilizacion_c_nc" name="movilizacion_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="movilizacion_vigencia" name="movilizacion_vigencia" type="text" class="validate">
                <label for="movilizacion_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="movilizacion_obs" name="movilizacion_obs" type="text" class="validate">
                <label for="movilizacion_obs">Observacion</label>
              </div>
          </div>
   
      </div>
    </div>




     <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Licencia</p> 
            <div class="divider"></div>
      
              <div class="input-field col s12 m3 l2">
               <label>Licencia Ambiental</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="ambiental_a_na" name="ambiental_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="ambiental_c_nc" name="ambiental_c_nc">
               <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="ambiental_vigencia" name="ambiental_vigencia" type="text" class="validate">
                <label for="ambiental_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="ambiental_obs" name="ambiental_obs" type="text" class="validate">
                <label for="ambiental_obs">Observacion</label>
              </div>
      </div>
    </div>


     <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Otros</p> 
            <div class="divider"></div>
      
              <div class="input-field col s12 m3 l2">
               <label>Plan de Manejo Ambiental</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="otros_a_na" name="otros_a_na">
                <?php 
                    $s="select id,nombre from aplica_noaplica order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select id="otros_c_nc" name="otros_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="otros_vigencia" name="otros_vigencia" type="text" class="validate">
                <label for="otros_vigencia">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="otros_obs" name="otros_obs" type="text" class="validate">
                <label for="otros_obs">Observacion</label>
              </div>



              <div class="input-field col s12 m5 l5">
               <input id="otro_legislacion" name="otro_legislacion" type="text" class="validate">
                <label for="otro_legislacion">Otro. ¿Cual?</label>
              </div>


              <div class="input-field col s12 m3 l3">
               <select id="otro_legislacion_c_nc" name="otro_legislacion_c_nc">
                <?php 
                    $s="select id,nombre from cumple_nocumple order by id desc ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
              </select>
              </div>

              <div class="input-field col s12 m4 l4">
                <input id="otros_legislacion_obs" name="otros_legislacion_obs" type="text" class="validate">
                <label for="otros_legislacion_obs">Observacion</label>
              </div>
      </div>
    </div>
        
          
                  </span></div>
  </li>
  <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>2. Información Sobre Certificaciones</div>
      <div class="collapsible-body"><span>
        
        <div class="row">
        <div class='input-field col s12 m8 l8'>
               <select id="valida_certificacion">
                 <option disabled selected>Seleccione una opcion</option>
                 <option value="1">No</option>
                 <option value="2">Si</option>
               </select>   
            <label>¿La iniciativa involucra a miembros de las comunidades locales?</label> 
          </div>
      </div>
      <div  id='div_certificacion'>
      <div class="row" style="text-align: center;background-color: #bdbdbd;">2. Información Sobre Certificaciones</div>
      
        <?php 
            $i = 0;
            $ver = "";
            $s1="SELECT id,nombre from opciones where codigo LIKE '%CE%'  order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
             echo"
             <div class='row' >
                  <div class='input-field col s12 m4 l3'>
                    <p>
                      <input type='checkbox' class='cer' id='ce".$i."' name='certificacion[]' value='$rw[id]' />
                      <label for='ce".$i."'>$rw[nombre]</label>
                    </p>
                  </div>
                  <div class='input-field col s12 m3 l2'>
                    <select disabled name='cert_etapa[]' id='cert_etapa".$i."'>";
                     $s="select id,nombre from etapa ";
                  $r= mysqli_query($conn,$s) or die('Error');
                  if(mysqli_num_rows($r)>0){
                    while($result=mysqli_fetch_assoc($r)){
                        echo"<option value=".$result['id'].">".$result['nombre' ]."</option>";
                    }
                  }
                 echo"</select>
                    <label>Etapa</label>
                  </div>
                  <div class='input-field col s12 m2 l2'>
                    <input disabled  type='text' name='cert_vigencia[]' id='cert_vigencia".$i."' />
                      <label for='cert_vigencia".$i."'>Vigencia</label>
                  </div>
                  <div class='input-field col s12 m3 l5'>
                   <input disabled  type='text' name='cert_obs[]' id='cert_obs".$i."' />
                      <label for='cert_obs".$i."'>Observación</label>
                  </div> </div>
              ";
              }  

            } 

        ?>
        <div class='row' id="otr_cert">
                  <div class='input-field col s12 m4 l3'>
                    <input type='text' name='otro_certificacion' id='otro_certificacion' />
                      <label for='otro_certificacion'>Otro. ¿Cual?</label>
                  </div>
                  <div class='input-field col s12 m3 l2'>
                    <select  name='otro_cert_etapa' id='otro_cert_etapa'>
                    <?php 
                    $s="select id,nombre from etapa ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                 </select >
                    <label>Etapa</label>
                  </div>
                  <div class='input-field col s12 m2 l2'>
                    <input  type='text' name='otro_cert_vigencia' id='otro_cert_vigencia' />
                      <label for='otro_cert_vigencia'>Vigencia</label>
                  </div>
                  <div class='input-field col s12 m3 l5'>
                   <input  type='text' name='otro_cert_obs' id='otro_cert_obs' />
                      <label for='otro_cert_obs'>Observación</label>
                  </div> </div>

        </div>
      
                  </span></div>
  </li>





  <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>3. información sostenibilidad Ambiental</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">3. información sostenibilidad Ambiental</div>
      <div class="row" style="border: 1px solid">
                  <p>Practicas de conservación</p> 
                  <div class="divider"></div>
                  <?php 
            $i = 0;
            $ver = "";
            $s1="SELECT id,nombre from opciones where codigo LIKE '%PC%'  order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
             echo"
                    <div class='row'>
                    <div class='input-field col s12 m4 l5'>
                         <input type='checkbox'  id='conser".$i."' name='conservacion[]' value='$rw[id]' />
                      <label for='conser".$i."'>$rw[nombre]</label>
                    </div>
                        
                    <div class='input-field col s12 m4 l2 '>
                       <input disabled  type='text' name='conser_area[]' id='conser_area".$i."' />
                      <label for='conser_area".$i."'>Area</label>
                    </div>

                     <div class='input-field col s12 m4 l5'>
                        <input disabled  type='text' name='conser_desc[]' id='conser_desc".$i."' />
                      <label for='conser_desc".$i."'>Descripción</label>
                    </div>
                    </div>
              ";
              }  

            } 

        ?>
            </div>
  <div class="row" style="border: 1px solid">
    <p>Área de los ecosistemas</p>
    <div class="divider"></div>
    <?php 
            $i = 0;
            $s="SELECT id,nombre from opciones where codigo LIKE '%AC%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox'  id='ecosistemas".$i."'  name='ecosistemas[]' value='$rw[id]' />
                <label for='ecosistemas".$i."'>$rw[nombre]</label>
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input disabled type='text' name='ecosistemas_area[]' id='ecosistemas_area".$i."' />
                <label for='ecosistemas_area".$i."'>Área</label>
              </div>
              </div>";

              }         
            }
        ?>
  </div>


            <div class="row" style="border: 1px solid">
                  <p>Plan de manejo o Plan de uso</p> 
                  <div class="divider"></div>
                   <?php 
            $i = 0;
            $ver = "";
            $s1="SELECT id,nombre from opciones where codigo LIKE '%PM%'  order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
             echo"
             <div class='input-field col s12 m5 l5'>
                        <input type='checkbox' id='plan".$i."' name='plan[]' value='$rw[id]' />
                      <label for='plan".$i."'>$rw[nombre]</label>
                    </div>
                    <div class='input-field col s12 m2 l2'>
                        <select disabled name='plan_a_na[]' id='plan_a_na".$i."'>";
                         $s2="select id,nombre from aplica_noaplica order by id desc ";
                  $r2= mysqli_query($conn,$s2) or die('Error');
                  if(mysqli_num_rows($r2)>0){
                    while($rw2=mysqli_fetch_assoc($r2)){
                        echo"<option value=".$rw2['id'].">".$rw2['nombre' ]."</option>";
                    }
                  }
                     echo"</select>
                    </div>
                    <div class='input-field col s12 m2 l2'>
                        <select disabled name='plan_c_nc[]' id='plan_c_nc".$i."'>";
                          $s3="select id,nombre from cumple_nocumple order by id desc ";
                  $r3= mysqli_query($conn,$s3) or die('Error');
                  if(mysqli_num_rows($r3)>0){
                    while($rw3=mysqli_fetch_assoc($r3)){
                        echo"<option value=".$rw3['id'].">".$rw3['nombre' ]."</option>";
                    }
                  }
                     echo"</select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                     <div class='input-field col s12 m1 l1 '>
                         <input disabled  type='text' name='plan_vigencia[]' id='plan_vigencia".$i."' />
                      <label for='plan_vigencia".$i."'>Vigencia</label>
                    </div>
                    <div class='input-field col s12 m2 l2 '>
                        <input disabled  type='text' name='plan_desc[]' id='plan_desc".$i."' />
                      <label for='plan_desc".$i."'>Observación</label>
                    </div>
              ";
              }  

            } 

        ?>

            </div>



      </span></div>
    </li>






    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>4. información sostenibilidad Social</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">4. información sostenibilidad Social</div>
        <div class="row">
          <div class='input-field col s12 m8 l8'>
               <select id="valida_involucra">
                 <option disabled selected>Seleccione una opcion</option>
                 <option value="1">No</option>
                 <option value="2">Si</option>
               </select>   
            <label>¿La iniciativa involucra a miembros de las comunidades locales?</label> 
          </div>
            <div class="col s12 m12 l12" id="div_involucra" style="border: 1px solid">
                  <p>¿Cómo involucra los miembros de las cominidades locales?</p> 
                  <div class="divider"></div>
              <?php 
            $i = 0;
            $s="SELECT id,nombre from opciones where codigo LIKE '%IV%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"
              <div class=' col s12 m4 l4'>
                         <input type='checkbox'  id='involucra".$i."'  name='involucra[]' value='$rw[id]' />
                <label for='involucra".$i."'>$rw[nombre]</label>
                    </div>

              ";

              }         
            }
        ?>
            </div>
        </div>
        

        <div class="row">
          <div class='input-field col s12 m8 l8'>
               <select id="valida_actividades">
                 <option disabled selected>Seleccione una opcion</option>
                 <option value="1">No</option>
                 <option value="2">Si</option>
               </select>   
            <label>¿La iniciativa realiza actividades con los mienbros de las comunidades locales?</label> 
          </div>
            <div class="col s12 m12 l12" id="div_activi" style="border: 1px solid">
            <p>Actividades con miembros de las comunidades locales</p> 
            <div class="divider"></div>
             <?php 
            $i = 0;
            $ver = "";
            $s1="SELECT id,nombre from opciones where codigo LIKE '%AM%'  order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
             echo"
             <div class='row'>
                <div class='input-field col s12 m4 l3'>
                  <input type='checkbox' id='actividad".$i."' name='actividad[]' value='$rw[id]' />
                      <label for='actividad".$i."'>$rw[nombre]</label>
                </div>

                <div class='input-field col s12 m4 l4'>
                 <input disabled  type='text' name='actividad_desc[]' id='actividad_desc".$i."' />
                      <label for='actividad_desc".$i."'>Descripción</label>
                </div>

                <div class='input-field col s12 m4 l5' id='act_select'>
                <select disabled name='actividad_recurso[]' id='actividad_recurso".$i."'>";
                     $s="select id,nombre from recurso ";
                  $r= mysqli_query($conn,$s) or die('Error');
                  if(mysqli_num_rows($r)>0){
                    while($result=mysqli_fetch_assoc($r)){
                        echo"<option value=".$result['id'].">".$result['nombre' ]."</option>";
                    }
                  }
                echo"</select>
                <label>Fuente de Recursos</label>
                </div>
            </div>";
              }  

            } 

        ?>
      </div>
    </div>


    <div class="row">
      <div class='input-field col s12 m8 l8'>
               <select id="valida_trabajadores">
                 <option disabled selected>Seleccione una opcion</option>
                 <option value="1">No</option>
                 <option value="2">Si</option>
               </select>   
            <label>¿Su iniciativa tiene programas para los trabajadores, empleados?</label> 
          </div>
            <div class="col s12 m12 l12" id="trabaja" style="border: 1px solid">
            <p>Programas para los trabajadores</p> 
            <div class="divider"></div>
             <?php 
            $i = 0;
            $ver = "";
            $s1="SELECT id,nombre from opciones where codigo LIKE '%AM%'  order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
             echo"
             <div class='row'>
                <div class='input-field col s12 m4 l4'>
                  <input type='checkbox' id='programa".$i."' name='programa[]' value='$rw[id]' />
                      <label for='programa".$i."'>$rw[nombre]</label>
                </div>

                <div class='input-field col s12 m4 l8'>
                 <input disabled  type='text' name='programa_desc[]' id='programa_desc".$i."' />
                      <label for='programa_desc".$i."'>Descripción</label>
                </div>
                </div>";
              }  

            } 

        ?>
        
      </div>
    </div>



        <div class="row">
          <div class='input-field col s12 m8 l8'>
               <select id="valida_institucion">
                 <option disabled selected>Seleccione una opcion</option>
                 <option value="1">No</option>
                 <option value="2">Si</option>
               </select>   
            <label>¿La iniciativa o el empresario han recibido algún apoyo por parte de una institución pública o privada?</label> 
          </div>
            <div class="col s12 m12 l12" id="insti" style="border: 1px solid">
            <p>Apoyo por parte de institución pública o privada</p> 
            <div class="divider"></div>
            <div id="ins_campos">
            <?php 
              for ($i=0; $i < 5 ; $i++){ 
             echo"
             <div class='row'>
                <div class='input-field col s12 m3 l3'>
                  <input type='text' name='apoyo[]'  />
                  <label>Tipo de apoyo</label> 
                </div>

                <div class='input-field col s12 m5 l5'>
                  <input type='text' name='apoyo_entidad[]' />
                  <label for=''>Entidad</label>
                </div>

                <div class='input-field col s12 m2 l2'>
                 <select name='apoyo_tipo_entidad[]'>";
                  $s="select id,nombre from orientacion ";
                  $r= mysqli_query($conn,$s) or die('Error');
                  if(mysqli_num_rows($r)>0){
                    while($result=mysqli_fetch_assoc($r)){
                        echo"<option value=".$result['id'].">".$result['nombre' ]."</option>";
                    }
                  }
               echo" </select>
                <label>Tipo de entidad</label>
                </div>

                <div class='input-field col s12 m2 l2'>
                  <input type='text' name='año[]' />
                  <label for=''>Año</label>
                </div>
            </div>";
            } 

        ?>
          </div>
      </div>
    </div>

      </span></div>
    </li>

    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>5. sostenibilidad Economica</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">5. sostenibilidad Economica</div>
      <div class="row">
            <div class="col s12 m12 l12" id="bien_servi" style="border: 1px solid">
            

      </div>
    </div>

    <div class="row" >
        <div class="col s12 m6 l4" style="border: 1px solid" >
          <p>Costo promedio de insumos totales</p>
          <div class="divider"></div>
           <div class="input-field col s12 m4 l4">
              <input type="text" />
              <label for="">Semanal</label>
            </div>
            <div class="input-field col s12 m4 l4">
              <input type="text" />
              <label for="">Mensual</label>
            </div>
            <div class="input-field col s12 m4 l4">
              <input type="text" />
              <label for="">Anual</label>
            </div>  
      </div>

      <div class="col s12 m6 l4" style="border: 1px solid" >
          <p>Costo promedio de mano de obra</p>
          <div class="divider"></div>
           <div class="input-field col s12 m4 l4">
              <input type="text" />
              <label for="">Semanal</label>
            </div>
            <div class="input-field col s12 m4 l4">
              <input type="text" />
              <label for="">Mensual</label>
            </div>
            <div class="input-field col s12 m4 l4">
              <input type="text" />
              <label for="">Anual</label>
            </div>  
      </div>
      <div class="col s12 m6 l4" style="border: 1px solid" >
          <p>Total de ventas realizadas</p>
          <div class="divider"></div>
           <div class="input-field col s12 m4 l6">
              <input type="text" />
              <label for="">Valor</label>
            </div>
            <div class="input-field col s12 m4 l6">
              <input type="text" />
              <label for="">Año</label>
            </div>
      </div>
    </div>
      </span></div>
    </li>
</ul>
<button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="registrar_informacion"><i class="material-icons right">add</i>Registrar informacion AS</button>
</form> 

<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_formato_informacion.js"></script>
