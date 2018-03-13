<?php
	
	if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../conexion.php');
    }

    echo"<ul class='collapsible' data-collapsible='accordion'>
      <li>
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>1.1 Tenencia de la tierra</div>
      <div class='collapsible-body'><span>
        
      <div class='row' style='text-align: center;background-color: #bdbdbd;'>1.1 Tenencia de la tierra</div>";
            $i = 11;
            $s1="SELECT * from tenencia_tierra WHERE empresa_id = '$_POST[empresa_m]' order by opciones_id  ";
            $r1= mysqli_query($conn,$s1) or die('Error');
            if(mysqli_num_rows($r1)>0){
              while($rw1=mysqli_fetch_assoc($r1)){
                  $s="SELECT id,nombre from opciones WHERE id = '".$rw1['opciones_id']."' ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                 if ($rw1['confirmacion'] == 'si' ) {
                 echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox' checked='checked' class='ch' id='tt_m".$i."'  name='tierra_m[]' value='$rw[id]' />
                <label for='tt_m".$i."'>$rw[nombre]</label>
                <input type='hidden' id='tt_m".$i."'  name='tierra_hidden_m[]' value='$rw[id]' />
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input  type='text' name='desc_t_m[]' id='desc_t_m".$i."' value='$rw1[descripcion]' />
                <label for='desc_t".$i."'  class='activar'>Descripcion</label>
              </div>
              </div>";
                }else{
                  echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox' class='ch' id='tt_m".$i."'  name='tierra_m[]' value='$rw[id]' />
                <label for='tt_m".$i."'>$rw[nombre]</label>
                <input type='hidden' id='tt_m".$i."'  name='tierra_hidden_m[]' value='$rw[id]' />
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input disabled type='text' name='desc_t_m[]' id='desc_t_m".$i."' />
                <label for='desc_t".$i."'>Descripcion</label>
              </div>
              </div>";
                 }

              }
            }
                }
                      
            }

            $otro ="";
            $descripcion = "";
            $s="SELECT * from otro_tenencia_tierra WHERE empresa_id = '$_POST[empresa_m]' ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              	$otro = $rw['nombre'];
              	$descripcion = $rw['descripcion'];

              }
          }

    echo "<div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='text' id='otro_tierra_nom_m'  name='otro_tierra_nom_m' value='$otro'/>
                <label for='otro_tierra_nom_m' class='activar'>Otro. ¿Cual?</label>
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input type='text' name='otro_tierra_desc_m' id='otro_tierra_desc_m' value='$descripcion'/>
                <label for='otro_tierra_desc_m' class='activar'>Descripcion</label>
              </div>
          </div>
          
                  </span></div>
  </li>

   <li>
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>1.2 Legislación Ambiental Colombiana</div>
      <div class='collapsible-body'><span>
        
      <div class='row' style='text-align: center;background-color: #bdbdbd;'>1.2 Legislación Ambiental Colombiana</div>
        <div class='row'>
            <div class='col s12 m12 l12' style='border: 1px solid'>
            <p>Registro</p> 
            <div class='divider'></div>
            ";
            $opciones_id = "";
            $aplica_noaplica_id = "";
            $cumple_nocumple_id = "";
            $vigencia = "";
            $observacion = "";
            $i='';

            $s="SELECT * from registro WHERE empresa_id = '$_POST[empresa_m]' ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                $opciones_id = $rw['opciones_id'];
                $aplica_noaplica_id = $rw['aplica_noaplica_id'];
                $cumple_nocumple_id = $rw['cumple_nocumple_id'];
                $vigencia = $rw['vigencia'];
                $observacion = $rw['observacion'];
                echo "
                <div class='input-field col s12 m3 l2'>";
                    $s3="SELECT id,nombre from opciones WHERE id = '$opciones_id'";
                    $r3= mysqli_query($conn,$s3) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r3)>0){
                      while($rw3=mysqli_fetch_assoc($r3)){
                         echo"<label for=''>$rw3[nombre]</label>
                          <input type='hidden' name='registro_hidden_m[]' value='$rw3[id]'/>";
                        }             
                    }
                echo "
              </div>
              <div class='input-field col s12 m2 l2'>
               <select id='registro_a_na_m".$i."' name='registro_a_na_m[]'>";
                    $s1="select id,nombre from aplica_noaplica order by id desc ";
                    $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r1)>0){
                      while($rw1=mysqli_fetch_assoc($r1)){
                        if ($rw1['id']==$aplica_noaplica_id) {
                         echo"<option selected='selected' value='$rw1[id]'>$rw1[nombre]</option>";
                        }else{
                          echo"<option value='$rw1[id]'>$rw1[nombre]</option>";
                        }        
                      }         
                    }
                    echo "</select>
              </div>
              <div class='input-field col s12 m2 l2'>
               <select id='registro_c_nc_m".$i."' name='registro_c_nc_m[]'>";
               $s2="select id,nombre from cumple_nocumple order by id desc ";
                    $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r2)>0){
                      while($rw2=mysqli_fetch_assoc($r2)){
                        if ($rw2['id']==$cumple_nocumple_id) {
                         echo"<option selected='selected' value='$rw2[id]'>$rw2[nombre]</option>";
                        }else{
                           echo"<option value='$rw2[id]'>$rw2[nombre]</option>";   
                        }   
                      }         
                    }
              echo "</select>
              </div>

              <div class='input-field col s12 m2 l2'>
                <input  type='text' id='registro_vigencia_m".$i."' name='registro_vigencia_m[]' class='validate' value='$vigencia'>
                <label for='invima_vigencia".$i."' class='activar'>Vigencia</label>
              </div>

              <div class='input-field col s12 m3 l4'>
                <input id='registro_obs_m".$i."' name='registro_obs_m[]' type='text' class='validate' value='$observacion'>
                <label for='registro_obs".$i."' class='activar'>Observacion</label>
              </div>

             
              ";

              }
          }

          echo "</div>
          <div class='row'>
            <div class='col s12 m12 l12' style='border: 1px solid; margin-top: 20px'>
            <p>Permiso</p> 
            <div class='divider'></div>
             <div class='row'>";
            $opciones_id = "";
            $aplica_noaplica_id = "";
            $cumple_nocumple_id = "";
            $vigencia = "";
            $observacion = "";
            $i='';

            $s="SELECT * from permiso WHERE empresa_id = '$_POST[empresa_m]' ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                $opciones_id = $rw['opciones_id'];
                $aplica_noaplica_id = $rw['aplica_noaplica_id'];
                $cumple_nocumple_id = $rw['cumple_nocumple_id'];
                $vigencia = $rw['vigencia'];
                $observacion = $rw['observacion'];
                echo "
                <div class='input-field col s12 m3 l2'>";
                    $s3="SELECT id,nombre from opciones WHERE id = '$opciones_id'";
                    $r3= mysqli_query($conn,$s3) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r3)>0){
                      while($rw3=mysqli_fetch_assoc($r3)){
                         echo"<label for=''>$rw3[nombre]</label>
                          <input type='hidden' name='permiso_hidden_m[]' value='$rw3[id]'/>";
                        }             
                    }
                echo "
              </div>
              <div class='input-field col s12 m2 l2'>
               <select id='permiso_a_na_m".$i."' name='permiso_a_na_m[]'>";
                    $s1="select id,nombre from aplica_noaplica order by id desc ";
                    $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r1)>0){
                      while($rw1=mysqli_fetch_assoc($r1)){
                        if ($rw1['id']==$aplica_noaplica_id) {
                         echo"<option selected='selected' value='$rw1[id]'>$rw1[nombre]</option>";
                        }else{
                          echo"<option value='$rw1[id]'>$rw1[nombre]</option>";
                        }        
                      }         
                    }
                    echo "</select>
              </div>
              <div class='input-field col s12 m2 l2'>
               <select id='permiso_c_nc_m".$i."' name='permiso_c_nc_m[]'>";
               $s2="select id,nombre from cumple_nocumple order by id desc ";
                    $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r2)>0){
                      while($rw2=mysqli_fetch_assoc($r2)){
                        if ($rw2['id']==$cumple_nocumple_id) {
                         echo"<option selected='selected' value='$rw2[id]'>$rw2[nombre]</option>";
                        }else{
                           echo"<option value='$rw2[id]'>$rw2[nombre]</option>";   
                        }   
                      }         
                    }
              echo "</select>
              </div>

              <div class='input-field col s12 m2 l2'>
                <input  type='text' id='permiso_vigencia_m".$i."' name='permiso_vigencia_m[]' class='validate' value='$vigencia'>
                <label for='permiso_vigencia".$i."' class='activar'>Vigencia</label>
              </div>

              <div class='input-field col s12 m3 l4'>
                <input id='permiso_obs_m".$i."' name='permiso_obs_m[]' type='text' class='validate' value='$observacion'>
                <label for='permiso_obs".$i."' class='activar'>Observacion</label>
              </div>
              ";

              }
          }
           echo " </div></div>";

           echo "</div>
          <div class='row'>
            <div class='col s12 m12 l12' style='border: 1px solid; margin-top: 20px'>
            <p>Licencia</p> 
            <div class='divider'></div>
             <div class='row'>";
            $opciones_id = "";
            $aplica_noaplica_id = "";
            $cumple_nocumple_id = "";
            $vigencia = "";
            $observacion = "";
            $i='';

            $s="SELECT * from licencia WHERE empresa_id = '$_POST[empresa_m]' ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                $opciones_id = $rw['opciones_id'];
                $aplica_noaplica_id = $rw['aplica_noaplica_id'];
                $cumple_nocumple_id = $rw['cumple_nocumple_id'];
                $vigencia = $rw['vigencia'];
                $observacion = $rw['observacion'];
                echo "
                <div class='input-field col s12 m3 l2'>";
                    $s3="SELECT id,nombre from opciones WHERE id = '$opciones_id'";
                    $r3= mysqli_query($conn,$s3) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r3)>0){
                      while($rw3=mysqli_fetch_assoc($r3)){
                         echo"<label for=''>$rw3[nombre]</label>
                          <input type='hidden' name='licencia_hidden_m[]' value='$rw3[id]'/>";
                        }             
                    }
                echo "
              </div>
              <div class='input-field col s12 m2 l2'>
               <select id='licencia_a_na_m".$i."' name='licencia_a_na_m[]'>";
                    $s1="select id,nombre from aplica_noaplica order by id desc ";
                    $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r1)>0){
                      while($rw1=mysqli_fetch_assoc($r1)){
                        if ($rw1['id']==$aplica_noaplica_id) {
                         echo"<option selected='selected' value='$rw1[id]'>$rw1[nombre]</option>";
                        }else{
                          echo"<option value='$rw1[id]'>$rw1[nombre]</option>";
                        }        
                      }         
                    }
                    echo "</select>
              </div>
              <div class='input-field col s12 m2 l2'>
               <select id='licencia_c_nc_m".$i."' name='licencia_c_nc_m[]'>";
               $s2="select id,nombre from cumple_nocumple order by id desc ";
                    $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r2)>0){
                      while($rw2=mysqli_fetch_assoc($r2)){
                        if ($rw2['id']==$cumple_nocumple_id) {
                         echo"<option selected='selected' value='$rw2[id]'>$rw2[nombre]</option>";
                        }else{
                           echo"<option value='$rw2[id]'>$rw2[nombre]</option>";   
                        }   
                      }         
                    }
              echo "</select>
              </div>

              <div class='input-field col s12 m2 l2'>
                <input  type='text' id='licencia_vigencia_m".$i."' name='licencia_vigencia_m[]' class='validate' value='$vigencia'>
                <label for='licencia_vigencia".$i."' class='activar'>Vigencia</label>
              </div>

              <div class='input-field col s12 m3 l4'>
                <input id='licencia_obs_m".$i."' name='licencia_obs_m[]' type='text' class='validate' value='$observacion'>
                <label for='licencia_obs".$i."' class='activar'>Observacion</label>
              </div>
              ";

              }
          }
           echo " </div></div>";

           echo "</div>
          <div class='row'>
            <div class='col s12 m12 l12' style='border: 1px solid; margin-top: 20px'>
            <p>Otros</p> 
            <div class='divider'></div>
             <div class='row'>";
            $nombre = "";
            $cumple_nocumple_id = "";
            $observacion = "";
            $s="SELECT * from otros_legislacion WHERE empresa_id = '$_POST[empresa_m]' ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $nombre = $rw['nombre'];
                $cumple_nocumple_id = $rw['cumple_nocumple_id'];
                $observacion = $rw['observacion'];
                echo "
                <div class='input-field col s12 m5 l5'>
               <input id='otro_legislacion_m' name='otro_legislacion_m' type='text' class='validate' value='$nombre'>
                <label for='otro_legislacion_m' class='activar'>Otro. ¿Cual?</label>
              </div>";

                          echo "
                    <div class='input-field col s12 m2 l2'>
                     <select id='otro_legislacion_c_nc_m' name='otro_legislacion_c_nc_m'>";
                     $s2="select id,nombre from cumple_nocumple order by id desc ";
                          $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                          if(mysqli_num_rows($r2)>0){
                            while($rw2=mysqli_fetch_assoc($r2)){
                              if ($rw2['id']==$cumple_nocumple_id) {
                               echo"<option selected='selected' value='$rw2[id]'>$rw2[nombre]</option>";
                              }else{
                                 echo"<option value='$rw2[id]'>$rw2[nombre]</option>";   
                              }   
                            }         
                          }
                          echo "</select> </div>
                <div class='input-field col s12 m4 l4'>
                <input id='otros_legislacion_obs_m' name='otros_legislacion_obs_m' type='text' class='validate' value='$observacion'>
                <label for='otros_legislacion_obs_m' class='activar'>Observacion</label>
              </div>
              ";

                              }             
                          }

           echo " </div></div>
            </span></div></li>";

            echo "
            <li>
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>2. Información Sobre Certificaciones</div>
      <div class='collapsible-body'><span>
        
        <div class='row'>
        <div class='input-field col s12 m8 l8'>
               <select id='valida_certificacion_m'>
                 <option disabled selected>Seleccione una opcion</option>
                 <option value='1'>No</option>
                 <option value='2'>Si</option>
               </select>   
            <label>¿La iniciativa involucra a miembros de las comunidades locales?</label> 
          </div>
      </div>
      <div  id='div_certificacion_m'>
      <div class='row' style='text-align: center;background-color: #bdbdbd;'>2. Información Sobre Certificaciones</div>";
      $opciones_id='';
      $etapa_id='';
      $vigencia='';
      $observacion='';
           $i = 0;
      $s2="SELECT * from certificacion WHERE empresa_id = '$_POST[empresa_m]' order by opciones_id ";
            $r2= mysqli_query($conn,$s2) or die("Error");
            if(mysqli_num_rows($r2)>0){
              while($rw2=mysqli_fetch_assoc($r2)){
                $opciones_id = $rw2['opciones_id'];
                $etapa_id = $rw2['etapa_id'];
                $vigencia = $rw2['vigencia'];
                $observacion = $rw2['observacion'];
            $ver = "";
            $s1="SELECT id,nombre from opciones where id = '$opciones_id'  ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
                       if ($rw2['confirmacion'] == 'si') {
                        echo"
             <div class='row' >
                  <div class='input-field col s12 m4 l3'>
                    <p>
                      <input type='checkbox' checked='checked' class='cer' id='ce_m".$i."' name='certificacion_m[]' value='$rw[id]' />
                      <label for='ce_m".$i."'>$rw[nombre]</label>
                      <input type='hidden'  name='certificacion_m_hidden[]' value='$rw[id]' />
                    </p>
                  </div>
                  <div class='input-field col s12 m3 l2'>
                    <select  name='cert_etapa_m[]' id='cert_etapa_m".$i."'>";
                     $s="select id,nombre from etapa ";
                  $r= mysqli_query($conn,$s) or die('Error');
                  if(mysqli_num_rows($r)>0){
                    while($result=mysqli_fetch_assoc($r)){
                      if ($result['id'] == $etapa_id) {
                        echo"<option selected='selected' value=".$result['id'].">".$result['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$result['id'].">".$result['nombre' ]."</option>";
                        }
                      }
                    }
                  
                 echo"</select>
                    <label>Etapa</label>
                  </div>
                  <div class='input-field col s12 m2 l2'>
                    <input   type='text' name='cert_vigencia_m[]' id='cert_vigencia_m".$i."' value='$vigencia' />
                      <label for='cert_vigencia_m".$i."' class='activar'>Vigencia</label>
                  </div>
                  <div class='input-field col s12 m3 l5'>
                   <input   type='text' name='cert_obs_m[]' id='cert_obs_m".$i."' value='$observacion' />
                      <label for='cert_obs_m".$i."' class='activar'>Observación</label>
                  </div> </div>
              ";
                       }else{
                        echo"
             <div class='row' >
                  <div class='input-field col s12 m4 l3'>
                    <p>
                      <input type='checkbox' class='cer' id='ce_m".$i."' name='certificacion_m[]' value='$rw[id]' />
                      <label for='ce_m".$i."'>$rw[nombre]</label>
                      <input type='hidden'  name='certificacion_m_hidden[]' value='$rw[id]' />
                    </p>
                  </div>
                  <div class='input-field col s12 m3 l2'>
                    <select disabled name='cert_etapa_m[]' id='cert_etapa_m".$i."'>";
                     $s="select id,nombre from etapa ";
                  $r= mysqli_query($conn,$s) or die('Error');
                  if(mysqli_num_rows($r)>0){
                    while($result=mysqli_fetch_assoc($r)){
                      if ($result['id'] == $etapa_id) {
                        echo"<option selected='selected' value=".$result['id'].">".$result['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$result['id'].">".$result['nombre' ]."</option>";
                        }
                      }
                    }
                  
                 echo"</select>
                    <label>Etapa</label>
                  </div>
                  <div class='input-field col s12 m2 l2'>
                    <input disabled  type='text' name='cert_vigencia_m[]' id='cert_vigencia_m".$i."' value='$vigencia' />
                      <label for='cert_vigencia_m".$i."' class='activar'>Vigencia</label>
                  </div>
                  <div class='input-field col s12 m3 l5'>
                   <input disabled  type='text' name='cert_obs_m[]' id='cert_obs_m".$i."' value='$observacion' />
                      <label for='cert_obs_m".$i."' class='activar'>Observación</label>
                  </div> </div>
              ";
                       }
             
              }  

            } 

            }  

            } 
            $nombre = "";
            $etapa_id = "";
            $vigencia = "";
            $observacion = "";

            $s1="SELECT * FROM otros_certificacion WHERE empresa_id = '$_POST[empresa_m]' ";
                    $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r1)>0){
                      while($rw1=mysqli_fetch_assoc($r1)){
                             $nombre =$rw1['nombre'];
                              $etapa_id=$rw1['etapa_id'];
                               $vigencia=$rw1['vigencia'];
                              $observacion=$rw1['observacion'];
                      }         
                    }

            echo "<div class='row' id=''>
                  <div class='input-field col s12 m4 l3'>
                    <input type='text' name='otro_certificacion_m' id='otro_certificacion_m' value='$nombre'/>
                      <label for='otro_certificacion_m' class='activar'>Otro. ¿Cual?</label>
                  </div>
                  <div class='input-field col s12 m3 l2'>
                    <select  name='otro_cert_etapa_m' id='otro_cert_etapa_m'>";
                  
                    $s="SELECT id,nombre from etapa ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                        if ($rw['id'] == $etapa_id) {
                           echo"<option selected='selected' value='$rw[id]'>$rw[nombre]</option>";
                        }else{
                           echo"<option value='$rw[id]'>$rw[nombre]</option>"; 
                        }         
                      }         
                    }
            
              echo "  </select >
                    <label>Etapa</label>
                  </div>
                  <div class='input-field col s12 m2 l2'>
                    <input  type='text' name='otro_cert_vigencia_m' id='otro_cert_vigencia_m' value='$vigencia' />
                      <label for='otro_cert_vigencia_m' class='activar'>Vigencia</label>
                  </div>
                  <div class='input-field col s12 m3 l5'>
                   <input  type='text' name='otro_cert_obs_m' id='otro_cert_obs_m' value='$observacion' />
                      <label for='otro_cert_obs_m' class='activar'>Observación</label>
                  </div> </div> 
                  </span></div></li> ";
              echo "<li>
      <div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>3. información sostenibilidad Ambiental</div>
      <div class='collapsible-body'><span>
        
      <div class='row' style='text-align: center;background-color: #bdbdbd;'>3. información sostenibilidad Ambiental</div>
      <div class='row' style='border: 1px solid'>
                  <p>Practicas de conservación</p> 
                  <div class='divider'></div>";

                
            $opciones_id='';
            $area='';
            $descripcion='';
           $i = 0;
      $s2="SELECT * from conservacion WHERE empresa_id = '$_POST[empresa_m]' order by opciones_id ";
            $r2= mysqli_query($conn,$s2) or die("Error");
            if(mysqli_num_rows($r2)>0){
              while($rw2=mysqli_fetch_assoc($r2)){
                $opciones_id = $rw2['opciones_id'];
                $area = $rw2['area'];
                $descripcion = $rw2['descripcion'];
               

            $s1="SELECT id,nombre from opciones where id = '$opciones_id'";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
                       if ($rw2['confirmacion'] == 'si') {
                         echo"
                    <div class='row'>
                    <div class='input-field col s12 m4 l5'>
                         <input type='checkbox' checked='checked'  id='conser_m".$i."' name='conservacion_m[]' value='$rw[id]' />
                      <label for='conser_m".$i."'>$rw[nombre]</label>
                       <input type='hidden'  name='conservacion_m_hidden[]' value='$rw[id]' />
                    </div>
                        
                    <div class='input-field col s12 m4 l2 '>
                       <input   type='text' name='conser_area_m[]' id='conser_area_m".$i."'  value='$area'/>
                      <label for='conser_area_m".$i."' class='activar'>Area</label>
                    </div>

                     <div class='input-field col s12 m4 l5'>
                        <input   type='text' name='conser_desc_m[]' id='conser_desc_m".$i."' value='$descripcion' />
                      <label for='conser_desc_m".$i."' class='activar'>Descripción</label>
                    </div>
                    </div>
              ";

                       }else{
                        echo"
                    <div class='row'>
                    <div class='input-field col s12 m4 l5'>
                         <input type='checkbox'  id='conser_m".$i."' name='conservacion_m[]' value='$rw[id]' />
                      <label for='conser_m".$i."'>$rw[nombre]</label>
                       <input type='hidden'  name='conservacion_m_hidden[]' value='$rw[id]' />
                    </div>
                        
                    <div class='input-field col s12 m4 l2 '>
                       <input disabled  type='text' name='conser_area_m[]' id='conser_area_m".$i."' value='$area' />
                      <label for='conser_area_m".$i."' class='activar'>Area</label>
                    </div>

                     <div class='input-field col s12 m4 l5'>
                        <input disabled  type='text' name='conser_desc_m[]' id='conser_desc_m".$i."' value='$descripcion'  />
                      <label for='conser_desc_m".$i."' class='activar'>Descripción</label>
                    </div>
                    </div>
              ";

                       }

             
              }  

            } 
             }  

            } 
            $nombre='';
            $area='';
            $descripcion='';
           $i = 0;
      $s2="SELECT * from otros_conservacion WHERE empresa_id = '$_POST[empresa_m]' ";
            $r2= mysqli_query($conn,$s2) or die("Error");
            if(mysqli_num_rows($r2)>0){
              while($rw2=mysqli_fetch_assoc($r2)){
                $nombre = $rw2['nombre'];
                $area = $rw2['area'];
                $descripcion = $rw2['descripcion'];
              }
            }

            echo "<div class='row'>
            <div class='input-field col s12 m4 l5'>
                      <input type='text' name='otro_conservacion_nom_m' id='otro_conservacion_nom_m'  value='$nombre' />
                      <label for='otro_conservacion_nom_m'  class='activar'>Otro. ¿Cual?</label>
                    </div>
                        
                    <div class='input-field col s12 m4 l2 '>
                       <input type='text' name='otro_conservacion_area_m' id='otro_conservacion_area_m'  value='$area'/>
                      <label for='otro_conservacion_area_m'  class='activar'>Area</label>
                    </div>

                     <div class='input-field col s12 m4 l5'>
                        <input type='text' name='otro_conservacion_desc_m' id='otro_conservacion_desc_m' value='$descripcion' />
                      <label for='otro_conservacion_desc_m'  class='activar'>Descripción</label>
                    </div>
          </div>
            </div>";

            echo "<div class='row' style='border: 1px solid'>
    <p>Área de los ecosistemas</p>
    <div class='divider'></div>";
      
           $opciones_id='';
            $area='';
          
           $i = 0;
      $s2="SELECT * from ecosistema WHERE empresa_id = '$_POST[empresa_m]' order by opciones_id ";
            $r2= mysqli_query($conn,$s2) or die("Error");
            if(mysqli_num_rows($r2)>0){
              while($rw2=mysqli_fetch_assoc($r2)){
                $opciones_id = $rw2['opciones_id'];
                $area = $rw2['area'];
                

            $s="SELECT id,nombre from opciones where id = '$opciones_id'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
                 if ($rw2['confirmacion']=='si') {
                    echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox' checked='checked'  id='ecosistemas_m".$i."'  name='ecosistemas_m[]' value='$rw[id]' />
                <label for='ecosistemas_m".$i."'>$rw[nombre]</label>
                <input type='hidden' id='ce".$i."'  name='ecosistemas_m_hidden[]' value='$rw[id]' />
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input  type='text' name='ecosistemas_area_m[]' id='ecosistemas_area_m".$i."' value='$area' />
                <label for='ecosistemas_area_m".$i."' class='activar'>Área</label>
              </div>
              </div>";
                 }else{
                   echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox'  id='ecosistemas_m".$i."'  name='ecosistemas_m[]' value='$rw[id]' />
                <label for='ecosistemas_m".$i."'>$rw[nombre]</label>
                <input type='hidden' id='ce".$i."'  name='ecosistemas_m_hidden[]' value='$rw[id]' />
              </p>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input disabled type='text' name='ecosistemas_area_m[]' id='ecosistemas_area_m".$i."' value='$area' />
                <label for='ecosistemas_area_m".$i."' class='activar'>Área</label>
              </div>
              </div>";
                 }
      

              }         
            }
            }         
          }
          $nombre='';
            $area='';
            
           $i = 0;
      $s2="SELECT * from otros_ecosistema WHERE empresa_id = '$_POST[empresa_m]' ";
            $r2= mysqli_query($conn,$s2) or die("Error");
            if(mysqli_num_rows($r2)>0){
              while($rw2=mysqli_fetch_assoc($r2)){
                $nombre = $rw2['nombre'];
                $area = $rw2['area'];
                
              }
            }
          echo "<div class='row'>
          <div class='input-field col s12 m6 l6'>
                <input type='text' name='otro_ecosistema_nom_m' id='otro_ecosistema_nom_m' value='$nombre'/>
                <label for='otro_ecosistema_nom_m' class='activar'>Otro. ¿Cual?</label>
              </div>
              <div class='input-field col s12 m6 l6'>
                <input type='text' name='otro_ecosistema_area_m' id='otro_ecosistema_area_m' value='$area'/>
                <label for='otro_ecosistema_area_m' class='activar'>Área</label>
              </div>
        </div>
  </div>";

  echo "<div class='row' style='border: 1px solid'>
                  <p>Plan de manejo o Plan de uso</p> 
                  <div class='divider'></div>";


                  $i = 0;
                  $opciones_id='';
                  $aplica_noaplica_id='';
                  $cumple_nocumple_id = "";
                  $vigencia = "";
                  $observacion = "";
      $s4="SELECT * from plan_manejo WHERE empresa_id = '$_POST[empresa_m]' order by opciones_id ";
            $r4= mysqli_query($conn,$s4) or die("Error");
            if(mysqli_num_rows($r4)>0){
              while($rw4=mysqli_fetch_assoc($r4)){
                $opciones_id = $rw4['opciones_id'];
                $aplica_noaplica_id = $rw4['aplica_noaplica_id'];
                $cumple_nocumple_id = $rw4['cumple_nocumple_id'];
                $vigencia = $rw4['vigencia'];
                $observacion = $rw4['observacion'];

            $s1="SELECT id,nombre from opciones where id = '$opciones_id'  order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
                       $i++;
                       if ($rw4['confirmacion']=='si') {
                        echo"
             <div class='input-field col s12 m5 l5'>
                        <input type='checkbox' checked='checked' id='plan_m".$i."' name='plan_m[]' value='$rw[id]' />
                      <label for='plan_m".$i."'>$rw[nombre]</label>
                      <input type='hidden'   name='plan_m_hidden[]' value='$rw[id]' />
                    </div>
                    <div class='input-field col s12 m2 l2'>
                        <select  name='plan_a_na_m[]' id='plan_a_na_m".$i."'>";
                         $s2="SELECT id,nombre from aplica_noaplica order by id desc ";
                  $r2= mysqli_query($conn,$s2) or die('Error');
                  if(mysqli_num_rows($r2)>0){
                    while($rw2=mysqli_fetch_assoc($r2)){
                      if ($rw2['id'] == $aplica_noaplica_id) {
                        echo"<option selected='selected' value=".$rw2['id'].">".$rw2['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$rw2['id'].">".$rw2['nombre' ]."</option>";
                    }
                      }
                  }
                     echo"</select>
                    </div>
                    <div class='input-field col s12 m2 l2'>
                        <select  name='plan_c_nc_m[]' id='plan_c_nc_m".$i."'>";
                          $s3="SELECT id,nombre from cumple_nocumple order by id desc ";
                  $r3= mysqli_query($conn,$s3) or die('Error');
                  if(mysqli_num_rows($r3)>0){
                    while($rw3=mysqli_fetch_assoc($r3)){
                      if ($rw3['id']==$cumple_nocumple_id) {
                       echo"<option selected=selected value=".$rw3['id'].">".$rw3['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$rw3['id'].">".$rw3['nombre' ]."</option>";
                      }
                    }
                  }
                     echo"</select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                     <div class='input-field col s12 m1 l1 '>
                         <input   type='text' name='plan_vigencia_m[]' id='plan_vigencia_m".$i."' value='$vigencia' />
                      <label for='plan_vigencia_m".$i."' class='activar'>Vigencia</label>
                    </div>
                    <div class='input-field col s12 m2 l2 '>
                        <input   type='text' name='plan_desc_m[]' id='plan_desc_m".$i."'  value='$observacion'/>
                      <label for='plan_desc_m".$i."' class='activar'>Observación</label>
                    </div>
              ";
                       }else{
                        echo"
             <div class='input-field col s12 m5 l5'>
                        <input type='checkbox' id='plan_m".$i."' name='plan_m[]' value='$rw[id]' />
                      <label for='plan_m".$i."'>$rw[nombre]</label>
                      <input type='hidden'   name='plan_m_hidden[]' value='$rw[id]' />
                    </div>
                    <div class='input-field col s12 m2 l2'>
                        <select disabled name='plan_a_na_m[]' id='plan_a_na_m".$i."'>";
                         $s2="SELECT id,nombre from aplica_noaplica order by id desc ";
                  $r2= mysqli_query($conn,$s2) or die('Error');
                  if(mysqli_num_rows($r2)>0){
                    while($rw2=mysqli_fetch_assoc($r2)){
                      if ($rw2['id'] == $aplica_noaplica_id) {
                        echo"<option selected='selected' value=".$rw2['id'].">".$rw2['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$rw2['id'].">".$rw2['nombre' ]."</option>";
                    }
                      }
                  }
                     echo"</select>
                    </div>
                    <div class='input-field col s12 m2 l2'>
                        <select disabled name='plan_c_nc_m[]' id='plan_c_nc_m".$i."'>";
                          $s3="SELECT id,nombre from cumple_nocumple order by id desc ";
                  $r3= mysqli_query($conn,$s3) or die('Error');
                  if(mysqli_num_rows($r3)>0){
                    while($rw3=mysqli_fetch_assoc($r3)){
                      if ($rw3['id']==$cumple_nocumple_id) {
                       echo"<option selected=selected value=".$rw3['id'].">".$rw3['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$rw3['id'].">".$rw3['nombre' ]."</option>";
                      }
                    }
                  }
                     echo"</select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                     <div class='input-field col s12 m1 l1 '>
                         <input disabled  type='text' name='plan_vigencia_m[]' id='plan_vigencia_m".$i."' value='$vigencia' />
                      <label for='plan_vigencia_m".$i."' class='activar'>Vigencia</label>
                    </div>
                    <div class='input-field col s12 m2 l2 '>
                        <input disabled  type='text' name='plan_desc_m[]' id='plan_desc_m".$i."'  value='$observacion'/>
                      <label for='plan_desc_m".$i."' class='activar'>Observación</label>
                    </div>
              ";
                       }
             
              }  

            } 
            }  

            } 
echo "</div>
      </span></div></li>";



 echo "
<script type='text/javascript' src='js/accion_formato_informacion.js'></script>
 <script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 
 $('.activar').addClass('active')

  })

</script>
";

?>