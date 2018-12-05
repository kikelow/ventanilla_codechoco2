<?php
	
	if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../../conexion.php');
    }

    $empresa = $_POST['empresa_m'];

    echo"<ul class='collapsible' data-collapsible='accordion'>
      <li>
       <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>I. Información de sostenibilidad ambiental </div>
      <div class='collapsible-body'><span>
        
      <div class='row' style='text-align: center;background-color: #bdbdbd; '>Impactos Ambientales Positivos y Buenas Prácticas que aportan a la Sostenibilidad Ambiental</div>
      

      <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>1. Impactos ambientales positivos identificados en el Plan Nacional de Negocios Verdes.</div>";
            $i = 0;
            $s="SELECT pregunta_indicativa.descripcion,impacto_practicas.respuesta_id,impacto_practicas.confirmacion,impacto_practicas.pregunta_id as id FROM `informacion_complementaria` INNER JOIN impacto_practicas ON impacto_practicas.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = impacto_practicas.pregunta_id WHERE pregunta_indicativa.aspecto_id = 21 AND informacion_complementaria.empresa_id = '$empresa' order by impacto_practicas.pregunta_id";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                 if ($rw['confirmacion'] == 'si' ) {
                 echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox' checked='checked'  id='impacto_amb".$i."'  name='impacto_amb[]' value='$rw[id]'/>
                <label for='impacto_amb".$i."'>$rw[descripcion]</label>
                <input type='hidden' id=''  name='impacto_amb_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m6 l6'>
                 <select name='impacto_amb_si_no[]' id='impacto_amb_si_no".$i."'>";

                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['respuesta_id'] == $result1['id']) {
                     echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
                echo"
                </select>
                <label for=''>Si/ No/ No Aplica</label>
              </div> 

              </div>";
                }else if($rw['confirmacion'] == 'no'){
                  echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox'  id='impacto_amb".$i."'  name='impacto_amb[]' value='$rw[id]'/>
                <label for='impacto_amb".$i."'>$rw[descripcion]</label>
                <input type='hidden' id=''  name='impacto_amb_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m6 l6'>
                 <select name='impacto_amb_si_no[]' id='impacto_amb_si_no".$i."' disabled>";

                 $s1="SELECT id,nombre from si_no order by id desc ";
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

              </div>";
                 }

              }
            }

            $s="SELECT pregunta_indicativa.descripcion,impacto_practicas.respuesta_id,impacto_practicas.otro_nombre,impacto_practicas.pregunta_id FROM `informacion_complementaria` INNER JOIN impacto_practicas ON impacto_practicas.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = impacto_practicas.pregunta_id WHERE pregunta_indicativa.aspecto_id = 21 AND informacion_complementaria.empresa_id = '$empresa' AND pregunta_id = 94";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
               echo "<div class='row'>
               <div class='input-field col s12 m6 l6'>
              
              <input type='text' id='otro_impacto_nom'  name='otro_impacto_nom[]' value='$rw[otro_nombre]'/>
              <label for='' class='activar'>Otro. ¿Cual?</label>
            </div>
              <div class='input-field col s12 m6 l6'>
                 <select name='otro_impacto_amb_si_no[]' id='otro_impacto_amb_si_no'>";
                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['respuesta_id'] == $result1['id']) {
                      echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
            echo " </select>
                <label for=''>Si/ No/ No Aplica</label>
              </div> 
        </div>";
              }
          } 
        echo"    
          <div class='divider teal darken-4' style='height: 10px'></div>
          <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>2.  Buenas Prácticas que se aplican en el negocio o en el área de influencia de la iniciativa.</div>";

            $i = 0;
            $s="SELECT pregunta_indicativa.descripcion,impacto_practicas.respuesta_id,impacto_practicas.confirmacion,impacto_practicas.pregunta_id as id FROM `informacion_complementaria` INNER JOIN impacto_practicas ON impacto_practicas.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = impacto_practicas.pregunta_id WHERE pregunta_indicativa.aspecto_id = 22 AND informacion_complementaria.empresa_id = '$empresa' order by impacto_practicas.pregunta_id";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                 if ($rw['confirmacion'] == 'si' ) {
                 echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox' checked='checked'  id='b_practicas".$i."'  name='b_practicas[]' value='$rw[id]'/>
                <label for='b_practicas".$i."'>$rw[descripcion]</label>
                <input type='hidden' id=''  name='b_practicas_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m6 l6'>
                 <select name='b_practicas_si_no[]' id='b_practicas_si_no".$i."'>";

                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['respuesta_id'] == $result1['id']) {
                      echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                       echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                   
                  }
                }
                echo"
                </select>
                <label for=''>Si/ No/ No Aplica</label>
              </div> 

              </div>";
                }else if($rw['confirmacion'] == 'no'){
                  echo"
               <div class='row'>
              <div class='input-field col s12 m6 l6'>
                <p>
                <input type='checkbox'  id='b_practicas".$i."'  name='b_practicas[]' value='$rw[id]'/>
                <label for='b_practicas".$i."'>$rw[descripcion]</label>
                <input type='hidden' id=''  name='b_practicas_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m6 l6'>
                 <select name='b_practicas_si_no[]' id='b_practicas_si_no".$i."' disabled>";

                 $s1="SELECT id,nombre from si_no order by id desc ";
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

              </div>";
                 }

              }
            }

             $s="SELECT pregunta_indicativa.descripcion,impacto_practicas.respuesta_id,impacto_practicas.otro_nombre,impacto_practicas.pregunta_id FROM `informacion_complementaria` INNER JOIN impacto_practicas ON impacto_practicas.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = impacto_practicas.pregunta_id WHERE pregunta_indicativa.aspecto_id = 22 AND informacion_complementaria.empresa_id = '$empresa' AND pregunta_id = 108";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
               echo "<div class='row'>
               <div class='input-field col s12 m6 l6'>
              
              <input type='text' id='otro_practicas_nom'  name='otro_practicas_nom[]' value='$rw[otro_nombre]'/>
                <label for='' class='activar'>Otro. ¿Cual?</label>
            </div>
              <div class='input-field col s12 m6 l6'>
                 <select name='otro_practicas_amb_si_no[]' id='otro_practicas_amb_si_no'>";
                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['respuesta_id'] == $result1['id']) {
                      echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
            echo " </select>
                <label for=''>Si/ No/ No Aplica</label>
              </div> 
        </div>";
              }
          } 





          echo "<div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>3. Área de conservación o de los ecosistemas presentes en el negocio o su área de influencia. </div>

      <div class='row'>";
     
      $i = 0;
            $s="SELECT pregunta_indicativa.descripcion,conservacion.area,conservacion.confirmacion,conservacion.pregunta_id as id FROM `informacion_complementaria` INNER JOIN conservacion ON conservacion.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = conservacion.pregunta_id WHERE pregunta_indicativa.aspecto_id = 23 AND informacion_complementaria.empresa_id = '$empresa' order by conservacion.pregunta_id";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                 if ($rw['confirmacion'] == 'si' ) {
                 echo"
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox' checked='checked'  id='conservacion".$i."'  name='conservacion[]' value='$rw[id]'/>
                <label for='conservacion".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='impacto".$i."'  name='conservacion_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='conservacion_area".$i."' name='conservacion_area[]' value='$rw[area]'/>
                <label for='conservacion_area".$i."' class='activar'>Área(ha)</label>
              </div>";

                }else if($rw['confirmacion'] == 'no'){
                  echo"
               <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox'  id='conservacion".$i."'  name='conservacion[]' value='$rw[id]'/>
                <label for='conservacion".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='impacto".$i."'  name='conservacion_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='conservacion_area".$i."' name='conservacion_area[]' disabled/>
                <label for='conservacion_area".$i."'>Área(ha)</label>
              </div> ";
                 }

              }
            }
            echo "</div>";

            $s="SELECT pregunta_indicativa.descripcion,conservacion.area,conservacion.otro_nombre,conservacion.confirmacion,conservacion.pregunta_id as id FROM `informacion_complementaria` INNER JOIN conservacion ON conservacion.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = conservacion.pregunta_id WHERE pregunta_indicativa.aspecto_id = 23 AND informacion_complementaria.empresa_id = '9' AND pregunta_id = 119";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
               echo "<div class='row'>
               <div class='input-field col s12 m6 l6'>
              <input type='text' id='otro_conservacion_nom'  name='otro_conservacion_nom[]' value='$rw[otro_nombre]'/>
                <label for='' class='activar'>Otro. ¿Cual?</label>
            </div>
              <div class='input-field col s12 m6 l6'>
                 <input type='text' name='otro_conservacion_area[]' value='$rw[area]'>
                <label for='' class='activar'>Área(ha)</label>
              </div> 
        </div>";
              }
          } 

    echo "<div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'><p>4. Certificaciones</p>
      <p>Describa las certificaciones a las cuales ha accedido, bien sea por que estuvo certificado o se encuentra en proceso, si tuvo auditorías pero no fue certificado, en las observaciones describe de manera detallada la situación que presenta su negocio.</p> </div>
  
    <div class='row'>
       <div class='input-field col s12 m6 l6'>
         <select  id='accedio_certificacion' >
          <option selected='' disabled=''>Seleccione....</option>
          <option value='1'>Si</option>
          <option value='2'>No</option>
          </select>
          <label for='' style='color: black'>¿Ha accedido a alguna certificación?</label>
       </div>

       <div class='input-field col s12 m6 l6'>
         <select  id='proceso_certificacion' >
          <option selected='' disabled=''>Seleccione....</option>
          <option value='1'>Si</option>
          <option value='2'>No</option>
          </select>
          <label for='' style='color: black'>¿Se encuentra en proceso de certificación? </label>
       </div>
    </div>

    <div id='contenido_certificacion'>";


      $i = 0;
            $s="SELECT certificacion.pregunta_id as id,pregunta_indicativa.descripcion,certificacion.etapa_id,certificacion.vigencia,certificacion.observacion,certificacion.confirmacion FROM `informacion_complementaria` INNER JOIN certificacion ON certificacion.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = certificacion.pregunta_id WHERE pregunta_indicativa.aspecto_id = 24 AND informacion_complementaria.empresa_id = '$empresa' order by certificacion.pregunta_id";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                 if ($rw['confirmacion'] == 'si' ) {
                 echo"
              <div class='row'>
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox' checked='checked'  id='certificacion".$i."'  name='certificacion[]' value='$rw[id]'/>
                <label for='certificacion".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='certificacion_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <select name='certificacion_etapa[]' id='certificacion_etapa".$i."'>";

                 $s1="SELECT id,nombre from etapa order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['etapa_id'] == $result1['id']) {
                     echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
                echo"
                </select>
                <label for=''>Etapa</label>
              </div> 

              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='certificacion_vigencia".$i."' name='certificacion_vigencia[]' value='$rw[vigencia]'/>
                <label for='certificacion_vigencia".$i."' class='activar'>Vigencia</label>
              </div> 
              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='certificacion_observacion".$i."' name='certificacion_observacion[]' value='$rw[observacion]'/>
                <label for='certificacion_observacion".$i."' class='activar'>Observación</label>
              </div> 

              </div>";

                }else if($rw['confirmacion'] == 'no'){
                  echo"
               <div class='row'>
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox'  id='certificacion".$i."'  name='certificacion[]' value='$rw[id]'/>
                <label for='certificacion".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='certificacion_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <select name='certificacion_etapa[]' id='certificacion_etapa".$i."' disabled>";

                 $s1="SELECT id,nombre from etapa order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                echo"
                </select>
                <label for=''>Etapa</label>
              </div> 

              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='certificacion_vigencia".$i."' name='certificacion_vigencia[]' disabled/>
                <label for='certificacion_vigencia".$i."'>Vigencia</label>
              </div> 
              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='certificacion_observacion".$i."' name='certificacion_observacion[]' disabled/>
                <label for='certificacion_observacion".$i."'>Observación</label>
              </div> 

              </div>";
                 }

              }
            }

            $s="SELECT certificacion.pregunta_id as id,pregunta_indicativa.descripcion,certificacion.etapa_id,certificacion.vigencia,certificacion.observacion,certificacion.otro_nombre FROM `informacion_complementaria` INNER JOIN certificacion ON certificacion.info_com_id = informacion_complementaria.id INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = certificacion.pregunta_id WHERE pregunta_indicativa.aspecto_id = 24 AND informacion_complementaria.empresa_id = '$empresa' AND pregunta_id = 127";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
               echo "<div class='row'>
               <div class='input-field col s12 m3 l3'>
                <input type='text' id='otro_certificacion_nom'  name='otro_certificacion_nom[]' value='$rw[otro_nombre]'/>
                <label for='' class='activar'>Otro. ¿Cual?</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                 <select name='otro_certificacion_etapa[]' id='otro_certificacion_etapa'>";
               
                 $s1="SELECT id,nombre from etapa order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['etapa_id'] == $result1['id']) {
                      echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
               
              echo "</select>
                <label for='certificacion_etapa'>Etapa</label>
              </div> 
              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='' name='otro_certificacion_vigencia[]' value='$rw[vigencia]' />
                <label for='' class='activar'>Vigencia</label>
              </div> 
              <div class='input-field col s12 m3 l3'>
                 <input type='text' id='' name='otro_observacion_vigencia[]' value='$rw[observacion]' />
                <label for='' class='activar'>Observación</label>
              </div>

        </div>";
              }
          } 

    echo "</div>";
    echo "</span></div></li>";
    
    echo "<li><div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>II. Información de Sostenibilidad Social</div>
      <div class='collapsible-body'><span>
        
      <div class='row' style='text-align: center;background-color: #bdbdbd; margin-bottom: 0px'>1. Información Laboral. Características de los socios, colaboradores y empleados</div>

      <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>1.1. Empleados</div>";
//total empleado-----
$empleado_m = 0;
$empleado_f = 0;
$total_empleado = 0;
      $s = "SELECT total_empleados.cantidad FROM `total_empleados`
      INNER JOIN informacion_complementaria ON informacion_complementaria.id = total_empleados.info_com_id
      WHERE total_empleados.total_rotulo_id = 1 AND total_empleados.sexo_id=1 AND informacion_complementaria.empresa_id = '$empresa' ";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $empleado_m = $rw['cantidad'];
              }
            }
      $s = "SELECT total_empleados.cantidad FROM `total_empleados`
      INNER JOIN informacion_complementaria ON informacion_complementaria.id = total_empleados.info_com_id
      WHERE total_empleados.total_rotulo_id = 1 AND total_empleados.sexo_id=2 AND informacion_complementaria.empresa_id = '$empresa' ";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $empleado_f = $rw['cantidad'];
              }
            }
    $total_empleado = $empleado_m + $empleado_f;
//tipo de contrato
    $directo_m = 0;
    $indirecto_m = 0;
    $temporal_m = 0;
    $directo_f = 0;
    $indirecto_f = 0;
    $temporal_f = 0;
    $total_directo = 0;
    $total_indirecto = 0;
    $total_temporal = 0;

    $s = "SELECT tipo_contrato.directo, tipo_contrato.indirecto,tipo_contrato.temporal FROM `tipo_contrato` INNER JOIN informacion_complementaria ON informacion_complementaria.id = tipo_contrato.info_com_id WHERE tipo_contrato.sexo_id = 1 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $directo_m = $rw['directo'];
                $indirecto_m = $rw['indirecto'];
                $temporal_m = $rw['temporal'];
              }
            }
    $s = "SELECT tipo_contrato.directo, tipo_contrato.indirecto,tipo_contrato.temporal FROM `tipo_contrato` INNER JOIN informacion_complementaria ON informacion_complementaria.id = tipo_contrato.info_com_id WHERE tipo_contrato.sexo_id = 2 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $directo_f = $rw['directo'];
                $indirecto_f = $rw['indirecto'];
                $temporal_f = $rw['temporal'];
              }
            }
      $total_directo = $directo_m+$directo_f;
      $total_indirecto = $indirecto_m+$indirecto_f;
      $total_temporal = $temporal_m+$temporal_f;
// Descripcion Etaria
      $_18_30_m = 0;
      $_30_50_m = 0;
      $mayor50_m = 0;
      $__18_30_f = 0;
      $__30_50_f = 0;
      $mayor50_f = 0;
      $total_18_30 = 0;
      $total_30_50 = 0;
      $total_mayor50 = 0;

$s = "SELECT descripcion_etaria.18_30,descripcion_etaria.30_50,descripcion_etaria.mayor_50 FROM `descripcion_etaria` INNER JOIN informacion_complementaria ON informacion_complementaria.id = descripcion_etaria.info_com_id WHERE descripcion_etaria.sexo_id = 1 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $_18_30_m = $rw['18_30'];
                $_30_50_m = $rw['30_50'];
                $mayor50_m = $rw['mayor_50'];
              }
            }
$s = "SELECT descripcion_etaria.18_30,descripcion_etaria.30_50,descripcion_etaria.mayor_50 FROM `descripcion_etaria` INNER JOIN informacion_complementaria ON informacion_complementaria.id = descripcion_etaria.info_com_id WHERE descripcion_etaria.sexo_id = 2 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $_18_30_f = $rw['18_30'];
                $_30_50_f = $rw['30_50'];
                $mayor50_f = $rw['mayor_50'];
              }
            }
      $total_18_30 = $_18_30_m + $_18_30_f;
      $total_30_50 = $_30_50_m + $_30_50_f;
      $total_mayor50 =  $mayor50_m +$mayor50_f;

      echo "   
      <div class='row' >

        <div class='col s12 m3 l3' style=''>
          <div>1.1.1. Total de Empleados</div>
          <div class='divider'></div>
          <div class='row' style='margin-bottom: 0px'>
            <div class='input-field col s12 m5 l5'>
              <label style='color:black'>Maculino</label style='color:black'>
              </div>
              <div class='input-field col s12 m7 l7'>
                <input id='t_masculino' class='key_total_empleados' name='t_masculino' type='number' class='' value='$empleado_m'>
                <label for='t_masculino' class='activar'>Cantidad</label>
              </div>
            </div>
            <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
              <div class='input-field col s12 m5 l5'>
                <label style='color:black'>Femenino</label>
              </div>
              <div class='input-field col s12 m7 l7'>
                <input id='t_femenino' class='key_total_empleados' name='t_femenino' type='number' class='' value='$empleado_f'>
                <label for='t_femenino' class='activar'>Cantidad</label>
              </div>
            </div>
            <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
              <div class='input-field col s12 m5 l5'>
                <label style='color:black'>Total</label>
              </div>
              <div class='input-field col s12 m7 l7'>
                <input id='t_empleados' name='t_empleados' type='number' class='' value='$total_empleado' readonly=''>
                <label for='t_empleados' class='active'>Total</label>
              </div>
            </div>
          </div>


          <div class='col s12 m9 l9' style=''>
            <div>1.1.2. Tipo de contrato</div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m2 l2'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='directo_m' class='key_directo' name='directo_m' type='number' value='$directo_m' >
                  <label for='directo_m'  class='activar'>Directos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='indirecto_m' class='key_indirecto' name='indirecto_m' type='number' value='$indirecto_m' >
                  <label for='indirecto_m' class='activar'>Indirectos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='temporal_m' class='key_temporal' name='temporal_m' type='number' value='$temporal_m' >
                  <label for='temporal_m' class='activar'>Temporales</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m2 l2'>
                  <label style='color:black'>Femenino</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='directo_f' class='key_directo' name='directo_f' type='number' value='$directo_f'>
                  <label for='directo_f' class='activar'>Directos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='indirecto_f' class='key_indirecto' name='indirecto_f' type='number' value='$indirecto_f'>
                  <label for='indirecto_f' class='activar'>Indirectos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='temporal_f' class='key_temporal' name='temporal_f' type='number' value='$temporal_f'>
                  <label for='temporal_f' class='activar'>Temporales</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m2 l2'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_directo' name='t_directo' type='number' readonly='' value='$total_directo'>
                  <label for='t_directo' class='activar'>Total directos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_indirecto' name='t_indirecto' type='number' readonly='' value='$total_indirecto'>
                  <label for='t_indirecto' class='activar'>Total indirectos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_temporal' name='t_temporal' type='number' readonly='' value='$total_temporal'>
                  <label for='t_temporal' class='activar'>Total temporales</label>
                </div>
              </div>
            </div>

          </div>


          <div class='row'>
            <div class='col s12 m12 l12' style=''>
            <div>1.1.3. Descripción etaria</div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m2 l2'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='18-30_m' class='key_18-30' name='18-30_m' type='number' value='$_18_30_m'>
                  <label for='18-30_m' class='activar'>Entre 18-30</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='30-50_m' class='key_30-50' name='30-50_m' type='number' value='$_30_50_m'>
                  <label for='30-50_m' class='activar'>Entre 30-50</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='mayor50_m' class='key_mayor50' name='mayor50_m' type='number' value='$mayor50_m'>
                  <label for='mayor50_m' class='activar'>Mayores de 50</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m2 l2'>
                  <label style='color:black'>Femenino</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='18-30_f' class='key_18-30' name='18-30_f' type='number' value='$_18_30_f'>
                  <label for='18-30_f' class='activar'>Entre 18-30</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='30-50_f' class='key_30-50' name='30-50_f' type='number' value='$_30_50_f'>
                  <label for='30-50_f' class='activar'>Entre 30-50</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='mayor50_f' class='key_mayor50' name='mayor50_f' type='number' value='$mayor50_f'>
                  <label for='mayor50_f' class='activar'>Mayores de 50</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m2 l2'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_18-30' name='t_18-30' type='number' class='' readonly='' value='$total_18_30'>
                  <label for='t_18-30' class='activar'>Total Entre 18-30</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_30-50' name='t_30-50' type='number' class='' readonly='' value='$total_30_50'>
                  <label for='t_30-50' class='activar'>Total Entre 30-50</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_mayor50' name='t_mayor50' type='number' class='' readonly='' value='$total_mayor50'>
                  <label for='t_mayor50' class='activar'>Total Mayores de 50</label>
                </div>
              </div>
            </div>

          </div>
           ";
      $discapacitado_m = 0;
      $madre_m = 0;
      $adulto_m = 0;
      $indigena_m = 0;
      $negra_m = 0;
      $campesino_m = 0;
      $reinsertado_m = 0;
      $victima_m = 0;
      $vulnerabilidad_m = 0;
      $discapacitado_f = 0;
      $madre_f = 0;
      $adulto_f = 0;
      $indigena_f = 0;
      $negra_f = 0;
      $campesino_f = 0;
      $reinsertado_f = 0;
      $victima_f = 0;
      $vulnerabilidad_f = 0;

$s = "SELECT condicion_vulnerabilidad_es.discapacidad,condicion_vulnerabilidad_es.cabeza_familia,condicion_vulnerabilidad_es.adulto_mayor,condicion_vulnerabilidad_es.indigena,condicion_vulnerabilidad_es.com_negras,condicion_vulnerabilidad_es.campesino,condicion_vulnerabilidad_es.reinsertado,condicion_vulnerabilidad_es.victimas_armado,condicion_vulnerabilidad_es.vulnerabilidad_econo  FROM `condicion_vulnerabilidad_es` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = condicion_vulnerabilidad_es.info_com_id 
WHERE condicion_vulnerabilidad_es.sexo_id = 1 AND condicion_vulnerabilidad_es.total_rotulo_id = 4 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $discapacitado_m = $rw['discapacidad'];
              $madre_m = $rw['cabeza_familia'];
              $adulto_m = $rw['adulto_mayor'];
              $indigena_m = $rw['indigena'];
              $negra_m = $rw['com_negras'];
              $campesino_m = $rw['campesino'];
              $reinsertado_m = $rw['reinsertado'];
              $victima_m = $rw['victimas_armado'];
              $vulnerabilidad_m = $rw['vulnerabilidad_econo'];
              }
            }

$s = "SELECT condicion_vulnerabilidad_es.discapacidad,condicion_vulnerabilidad_es.cabeza_familia,condicion_vulnerabilidad_es.adulto_mayor,condicion_vulnerabilidad_es.indigena,condicion_vulnerabilidad_es.com_negras,condicion_vulnerabilidad_es.campesino,condicion_vulnerabilidad_es.reinsertado,condicion_vulnerabilidad_es.victimas_armado,condicion_vulnerabilidad_es.vulnerabilidad_econo  FROM `condicion_vulnerabilidad_es` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = condicion_vulnerabilidad_es.info_com_id 
WHERE condicion_vulnerabilidad_es.sexo_id = 2 AND condicion_vulnerabilidad_es.total_rotulo_id = 4 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $discapacitado_f = $rw['discapacidad'];
              $madre_f = $rw['cabeza_familia'];
              $adulto_f = $rw['adulto_mayor'];
              $indigena_f = $rw['indigena'];
              $negra_f = $rw['com_negras'];
              $campesino_f = $rw['campesino'];
              $reinsertado_f = $rw['reinsertado'];
              $victima_f = $rw['victimas_armado'];
              $vulnerabilidad_f = $rw['vulnerabilidad_econo'];
              }
            }
  $total_discapacidad = $discapacitado_f + $discapacitado_m;
  $total_madre = $madre_f + $madre_m;
  $total_adulto = $adulto_f + $adulto_m;
  $total_indigena = $indigena_f + $indigena_m;
  $total_negra = $negra_f +$negra_m;
  $total_campesino = $campesino_f + $campesino_m;
  $total_reinsertado = $reinsertado_f + $reinsertado_m;
  $total_victima = $victima_f + $victima_m;
  $total_vulnerabilidad = $vulnerabilidad_f + $vulnerabilidad_m;
  //otro vulnerabilidad
  $otro_cual = '';
  $otro_m = '';
  $otro_f = '';
  $total_otro = '';
  $s = "SELECT otro_condicion_vulneravibilidad.nombre, otro_condicion_vulneravibilidad.cantidad FROM `otro_condicion_vulneravibilidad` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_condicion_vulneravibilidad.info_com_id 
WHERE otro_condicion_vulneravibilidad.sexo_id = 1 AND otro_condicion_vulneravibilidad.otro_rotulo_id = 4 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                  $otro_cual = $rw['nombre'];
                  $otro_m = $rw['cantidad'];
              }
            }

$s = "SELECT otro_condicion_vulneravibilidad.nombre, otro_condicion_vulneravibilidad.cantidad FROM `otro_condicion_vulneravibilidad` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_condicion_vulneravibilidad.info_com_id 
WHERE otro_condicion_vulneravibilidad.sexo_id = 2 AND otro_condicion_vulneravibilidad.otro_rotulo_id = 4 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                  $otro_cual = $rw['nombre'];
                  $otro_f = $rw['cantidad'];
              }
            }
            $total_otro = $otro_m + $otro_f;
    echo "<div class='row' >

          <div class='col s12 m12 l12'>
            <div>1.1.4. Condición de vulnerabilidad </div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='discapacitado_m' class='key_discapacitado' name='discapacitado_m' type='number' value='$discapacitado_m'>
                  <label for='discapacitado_m' class='active'>Discapacitados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='madre_m' class='key_madre' name='madre_m' type='number' value='$madre_m'>
                  <label for='madre_m' class='active'>Madres cabeza de familia</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='adulto_m' class='key_adulto' name='adulto_m' type='number' value='$adulto_m'>
                  <label for='adulto_m' class='active'>Adultos mayores</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='indigena_m' class='key_indigena' name='indigena_m' type='number' value='$indigena_m'>
                  <label for='indigena_m' class='active'>Indígenas</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='negras_m' class='key_negra' name='negras_m' type='number' value='$negra_m'>
                  <label for='negras_m' class='active'>Comunidades negras</label>
                </div>
              </div>

              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Femenino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='discapacitado_f' class='key_discapacitado' name='discapacitado_f' type='number' value='$discapacitado_f'>
                  <label for='discapacitado_f' class='active'>Discapacitados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='madre_f' class='key_madre' name='madre_f' type='number' value='$madre_f'>
                  <label for='madre_f' class='active'>Madres cabeza de familia</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='adulto_f' class='key_adulto' name='adulto_f' type='number' value='$adulto_f'>
                  <label for='adulto_f' class='active'>Adultos mayores</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='indigena_f' class='key_indigena' name='indigena_f' type='number' value='$indigena_f'>
                  <label for='indigena_f' class='active'>Indígenas</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='negras_f' class='key_negra' name='negras_f' type='number' value='$negra_f'>
                  <label for='negras_f' class='active'>Comunidades negras</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_discapacitado' name='t_discapacitado' type='number' class='' readonly='' value='$total_discapacidad'>
                  <label for='t_discapacitado' class='active'>Total discapacitados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_madre' name='t_madre' type='number' class='' readonly='' value='$total_madre'>
                  <label for='t_madre' class='active'>Total madres cabeza de familia</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_adulto' name='t_adulto' type='number' class='' readonly='' value='$total_adulto'>
                  <label for='t_adulto' class='active'>Total adulto mayor</label>
                </div>
                 <div class='input-field col s12 m2 l2'>
                  <input id='t_indigena' name='t_indigena' type='number' class='' readonly='' value='$total_indigena'>
                  <label for='t_indigena' class='active'>Total indígena</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_negra' name='t_negra' type='number' class='' readonly='' value='$total_negra'>
                  <label for='t_negra' class='active'>Total comunidad negra</label>
                </div>
              </div>



            <div class='divider'></div>

               <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='campesino_m' class='key_campesino' name='campesino_m' type='number' value='$campesino_m'>
                  <label for='campesino_m' class='active'>Campesinos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='reinsertado_m' class='key_reinsertado' name='reinsertado_m' type='number' value='$reinsertado_m'>
                  <label for='reinsertado_m' class='active'>Reinsertados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='victima_m' class='key_victima' name='victima_m' type='number' value='$victima_m'>
                  <label for='victima_m' class='active'>Victimas del conflicto armado</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='vulnerable_m' class='key_vulnerable' name='vulnerable_m' type='number' value='$vulnerabilidad_m'>
                  <label for='vulnerable_m' class='active'>Vulmerabilidad economica</label>
                </div>
              </div>
              
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Femenino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='campesino_f' class='key_campesino' name='campesino_f' type='number' value='$campesino_f'>
                  <label for='campesino_f' class='active'>Campesinos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='reinsertado_f' class='key_reinsertado' name='reinsertado_f' type='number' value='$reinsertado_f'>
                  <label for='reinsertado_f' class='active'>Reinsertados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='victima_f' class='key_victima' name='victima_f' type='number' value='$victima_f'>
                  <label for='victima_f' class='active'>Victimas del conflicto armado</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='vulnerable_f' class='key_vulnerable' name='vulnerable_f' type='number' value='$vulnerabilidad_f'>
                  <label for='vulnerable_f' class='active'>Vulmerabilidad economica</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_campesino' name='t_campesino' type='number' readonly='' value='$total_campesino'>
                  <label for='t_campesino' class='active'>Total campesinos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_reinsertado' name='t_reinsertado' type='number' readonly='' value='$total_reinsertado'>
                  <label for='t_reinsertado' class='active'>Total reinsertados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_victima' name='t_victima' type='number' readonly='' value='$total_victima'>
                  <label for='t_victima' class='active'>Total victimas del conflicto</label>
                </div>
                 <div class='input-field col s12 m3 l3'>
                  <input id='t_vulnerable' name='t_vulnerable' type='number' readonly='' value='$total_vulnerabilidad'>
                  <label for='t_vulnerable' class='active'>Total vulnerabilidad economica</label>
                </div>
              </div>

               <div class='divider'></div>
                
                <div class='col s12 m12 l12' >
              <div class='input-field col s12 m3 l3'>
                <input id='otro_vulnerablidad_nom' name='otro_vulnerablidad_nom' type='text' value='$otro_cual'>
                <label for='otro_vulnerablidad_nom' class='active'>Otro ¿Cual?</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_vulnerablidad_m' class='key_otro_vulne' name='otro_vulnerablidad_m' type='number' value='$otro_m'>
                <label for='otro_vulnerablidad_m' class='active'>Masculino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_vulnerablidad_f' class='key_otro_vulne' name='otro_vulnerablidad_f' type='number' value='$otro_f'>
                <label for='otro_vulnerablidad_f' class='active'>Femenino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input value='$total_otro' id='otro_vulnerablidad_total' type='number' class='' readonly>
                <label for='otro_vulnerablidad_total' class='active'>Total</label>
              </div>
          </div>

            </div>

          </div>";

$primaria_m = 0;
$bachillerato_m = 0;
$tecnico_m = 0;
$tecnologo_m = 0;
$universitario_m = 0;
$primaria_f = 0;
$bachillerato_f = 0;
$tecnico_f = 0;
$tecnologo_f = 0;
$universitario_f = 0;
          $s = "SELECT nivel_educativo.primaria,nivel_educativo.bachillerato,nivel_educativo.tecnico,nivel_educativo.tecnologo,nivel_educativo.universitario  FROM `nivel_educativo` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = nivel_educativo.info_com_id 
WHERE nivel_educativo.sexo_id = 1 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $primaria_m = $rw['primaria'];
                 $bachillerato_m = $rw['bachillerato'];
                 $tecnico_m = $rw['tecnico'];
                 $tecnologo_m = $rw['tecnologo'];
                 $universitario_m = $rw['universitario'];
              }
            }
 $s = "SELECT nivel_educativo.primaria,nivel_educativo.bachillerato,nivel_educativo.tecnico,nivel_educativo.tecnologo,nivel_educativo.universitario  FROM `nivel_educativo` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = nivel_educativo.info_com_id 
WHERE nivel_educativo.sexo_id = 2 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $primaria_f = $rw['primaria'];
                 $bachillerato_f = $rw['bachillerato'];
                 $tecnico_f = $rw['tecnico'];
                 $tecnologo_f = $rw['tecnologo'];
                 $universitario_f = $rw['universitario'];
              }
            }
  $total_primaria =  $primaria_f +  $primaria_m;
  $total_bachillerato = $bachillerato_f + $bachillerato_m;
  $total_tecnico = $tecnico_f + $tecnico_m;
  $total_tecnologo = $tecnologo_f + $tecnologo_m;
  $total_universitario =  $universitario_f +  $universitario_m;
//otro nivel educativo
  $otro_nivel_nom = '';
  $otro_nivel_m = 0;
  $otro_nivel_f = 0;
  $otro_nivel_total = 0;

  $s = "SELECT otro_nivel_educativo.nombre,otro_nivel_educativo.cantidad  FROM `otro_nivel_educativo` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_nivel_educativo.info_com_id 
WHERE otro_nivel_educativo.sexo_id = 1 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $otro_nivel_nom = $rw['nombre'];
                 $otro_nivel_m = $rw['cantidad'];
              }
            }
$s = "SELECT otro_nivel_educativo.nombre,otro_nivel_educativo.cantidad  FROM `otro_nivel_educativo` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_nivel_educativo.info_com_id 
WHERE otro_nivel_educativo.sexo_id = 2 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $otro_nivel_f = $rw['cantidad'];
              }
            }
$otro_nivel_total = $otro_nivel_m + $otro_nivel_f;
          echo "<div class='row' >
          <div class='col s12 m12 l12' >
            <div>1.1.5. Nivel Educativo</div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='primaria_m' class='key_primaria' name='primaria_m' type='number' value='$primaria_m'>
                  <label for='primaria_m' class='active'>Primaria</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='bachillerato_m' class='key_bachillerato' name='bachillerato_m' type='number' value='$bachillerato_m' >
                  <label for='bachillerato_m' class='active'>Bachillerato</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='tecnico_m' class='key_tecnico' name='tecnico_m' type='number' value='$tecnico_m'>
                  <label for='tecnico_m' class='active'>Técnico</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='tecnologo_m' class='key_tecnologo' name='tecnologo_m' type='number' value='$tecnologo_m'>
                  <label for='tecnologo_m' class='active'>Tecnológico</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='universitario_m' class='key_universitario' name='universitario_m' type='number' value='$universitario_m'>
                  <label for='universitario_m' class='active'>Universitario </label>
                </div>
              </div>

              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Femenino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='primaria_f' class='key_primaria' name='primaria_f' type='number' value='$primaria_f'>
                  <label for='primaria_f' class='active'>Primaria</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='bachillerato_f' class='key_bachillerato' name='bachillerato_f' type='number' value='$bachillerato_f'>
                  <label for='bachillerato_f' class='active'>Bachillerato</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='tecnico_f' class='key_tecnico' name='tecnico_f' type='number' value='$tecnico_f'>
                  <label for='tecnico_f' class='active'>Técnico</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='tecnologo_f' class='key_tecnologo' name='tecnologo_f' type='number' value='$tecnologo_f'>
                  <label for='tecnologo_f' class='active'>Tecnológico</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='universitario_f' class='key_universitario' name='universitario_f' type='number' value='$universitario_f'>
                  <label for='universitario_f' class='active'>Universitario </label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_primaria' name='t_primaria' type='number' readonly='' value='$total_primaria'>
                  <label for='t_primaria' class='active'>Total Primaria</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_bachillerato' name='t_bachillerato' type='number' readonly='' value='$total_bachillerato'>
                  <label for='t_bachillerato' class='active'>Total bachillerato</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_tecnico' name='t_tecnico' type='number' readonly='' value='$total_tecnico'>
                  <label for='t_tecnico' class='active'>Total Técnico</label>
                </div>
                 <div class='input-field col s12 m2 l2'>
                  <input id='t_tecnologo' name='t_tecnologo' type='number' readonly='' value='$total_tecnologo'>
                  <label for='t_tecnologo' class='active'>Total Tecnológico</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_universitario' name='t_universitario' type='number' readonly='' value='$total_universitario'>
                  <label for='t_universitario' class='active'>Total Universitario</label>
                </div>
              </div>


               <div class='divider'></div>
                
                <div class='col s12 m12 l12' >
              <div class='input-field col s12 m3 l3'>
                <input id='otro_nivel_nom'  name='otro_nivel_nom' type='text'value='$otro_nivel_nom' >
                <label for='otro_nivel_nom' class='active'>Otro ¿Cual?</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_nivel_m' class='key_otro_nivel' name='otro_nivel_m' type='number' value='$otro_nivel_m' >
                <label for='otro_nivel_m' class='active'>Masculino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_nivel_f' class='key_otro_nivel' name='otro_nivel_f' type='number' value='$otro_nivel_f'>
                <label for='otro_nivle_f' class='active'>Femenino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input value='$otro_nivel_total' id='t_otro_nivel' type='number'  readonly>
                <label for='t_otro_nivel' class='active'>Total</label>
              </div>
          </div>

            </div>

          </div>
           <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>1.2. Si el negocio es de Turismo de Naturaleza responder:</div>";
// Temporada alta
$alta_m = 0;
$alta_f = 0;
$total_alta = 0;
      $s = "SELECT total_empleados.cantidad FROM `total_empleados`
      INNER JOIN informacion_complementaria ON informacion_complementaria.id = total_empleados.info_com_id
      WHERE total_empleados.total_rotulo_id = 2 AND total_empleados.sexo_id=1 AND informacion_complementaria.empresa_id = '$empresa' ";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $alta_m = $rw['cantidad'];
              }
            }
      $s = "SELECT total_empleados.cantidad FROM `total_empleados`
      INNER JOIN informacion_complementaria ON informacion_complementaria.id = total_empleados.info_com_id
      WHERE total_empleados.total_rotulo_id = 2 AND total_empleados.sexo_id=2 AND informacion_complementaria.empresa_id = '$empresa' ";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $alta_f = $rw['cantidad'];
              }
            }
    $total_alta = $alta_m + $alta_f;

// Temporada baja
$baja_m = 0;
$baja_f = 0;
$total_baja = 0;
      $s = "SELECT total_empleados.cantidad FROM `total_empleados`
      INNER JOIN informacion_complementaria ON informacion_complementaria.id = total_empleados.info_com_id
      WHERE total_empleados.total_rotulo_id = 3 AND total_empleados.sexo_id=1 AND informacion_complementaria.empresa_id = '$empresa' ";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $baja_m = $rw['cantidad'];
              }
            }
      $s = "SELECT total_empleados.cantidad FROM `total_empleados`
      INNER JOIN informacion_complementaria ON informacion_complementaria.id = total_empleados.info_com_id
      WHERE total_empleados.total_rotulo_id = 3 AND total_empleados.sexo_id=2 AND informacion_complementaria.empresa_id = '$empresa' ";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $baja_f = $rw['cantidad'];
              }
            }
    $total_baja = $baja_m + $baja_f;

      echo "<div class='row' >

        <div class='col s12 m6 l6' >
          <div>Temporada alta</div>
          <div class='divider'></div>
          <div class='row' style='margin-bottom: 0px'>
            <div class='input-field col s12 m3 l3'>
              <label style='color:black'>Maculino</label style='color:black'>
              </div>
              <div class='input-field col s12 m9 l9'>
                <input id='alta_m' class='key_alta' name='alta_m' type='number' value='$alta_m'>
                <label for='alta_m' class='active'>Cantidad</label>
              </div>
            </div>
            <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
              <div class='input-field col s12 m3 l3'>
                <label style='color:black'>Femenino</label>
              </div>
              <div class='input-field col s12 m9 l9'>
                <input id='alta_f' class='key_alta' name='alta_f' type='number' value='$alta_f'>
                <label for='alta_f' class='active'>Cantidad</label>
              </div>
            </div>
            <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
              <div class='input-field col s12 m3 l3'>
                <label style='color:black'>Total</label>
              </div>
              <div class='input-field col s12 m9 l9'>
                <input id='t_alta' name='t_alta' type='number' class='' readonly='' value='$total_alta' >
                <label for='t_alta' class='active'>Total</label>
              </div>
            </div>
          </div>


          <div class='col s12 m6 l6' >
            <div>Temporada baja</div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m3 l3'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m9 l9'>
                  <input id='baja_m' class='key_baja' name='baja_m' type='number' value='$baja_m'>
                  <label for='baja_m' class='active'>Cantidad</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m3 l3'>
                  <label style='color:black'>Femenino</label>
                </div>
                <div class='input-field col s12 m9 l9'>
                  <input id='baja_f' class='key_baja' name='baja_f' type='number' value='$baja_f'>
                  <label for='baja_f' class='active'>Cantidad</label>
                </div>
                
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m3 l3'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m9 l9'>
                  <input id='t_baja' name='t_baja' type='number' readonly='' value='$total_baja'>
                  <label for='t_baja' class='active'>Total directos</label>
                </div>
              </div>
            </div>

          </div>
          <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>1.3. Socios / Colaboradores</div>";

      $discapacitado_m_s = 0;
      $madre_m_s = 0;
      $adulto_m_s = 0;
      $indigena_m_s = 0;
      $negra_m_s = 0;
      $campesino_m_s = 0;
      $reinsertado_m_s = 0;
      $victima_m_s = 0;
      $vulnerabilidad_m_s = 0;
      $discapacitado_f_s = 0;
      $madre_f_s = 0;
      $adulto_f_s = 0;
      $indigena_f_s = 0;
      $negra_f_s = 0;
      $campesino_f_s = 0;
      $reinsertado_f_s = 0;
      $victima_f_s = 0;
      $vulnerabilidad_f_s = 0;

$s = "SELECT condicion_vulnerabilidad_es.discapacidad,condicion_vulnerabilidad_es.cabeza_familia,condicion_vulnerabilidad_es.adulto_mayor,condicion_vulnerabilidad_es.indigena,condicion_vulnerabilidad_es.com_negras,condicion_vulnerabilidad_es.campesino,condicion_vulnerabilidad_es.reinsertado,condicion_vulnerabilidad_es.victimas_armado,condicion_vulnerabilidad_es.vulnerabilidad_econo  FROM `condicion_vulnerabilidad_es` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = condicion_vulnerabilidad_es.info_com_id 
WHERE condicion_vulnerabilidad_es.sexo_id = 1 AND condicion_vulnerabilidad_es.total_rotulo_id = 5 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $discapacitado_m_s = $rw['discapacidad'];
              $madre_m_s = $rw['cabeza_familia'];
              $adulto_m_s = $rw['adulto_mayor'];
              $indigena_m_s = $rw['indigena'];
              $negra_m_s = $rw['com_negras'];
              $campesino_m_s = $rw['campesino'];
              $reinsertado_m_s = $rw['reinsertado'];
              $victima_m_s = $rw['victimas_armado'];
              $vulnerabilidad_m_s = $rw['vulnerabilidad_econo'];
              }
            }

$s = "SELECT condicion_vulnerabilidad_es.discapacidad,condicion_vulnerabilidad_es.cabeza_familia,condicion_vulnerabilidad_es.adulto_mayor,condicion_vulnerabilidad_es.indigena,condicion_vulnerabilidad_es.com_negras,condicion_vulnerabilidad_es.campesino,condicion_vulnerabilidad_es.reinsertado,condicion_vulnerabilidad_es.victimas_armado,condicion_vulnerabilidad_es.vulnerabilidad_econo  FROM `condicion_vulnerabilidad_es` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = condicion_vulnerabilidad_es.info_com_id 
WHERE condicion_vulnerabilidad_es.sexo_id = 2 AND condicion_vulnerabilidad_es.total_rotulo_id = 5 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $discapacitado_f_s = $rw['discapacidad'];
              $madre_f_s = $rw['cabeza_familia'];
              $adulto_f_s = $rw['adulto_mayor'];
              $indigena_f_s = $rw['indigena'];
              $negra_f_s = $rw['com_negras'];
              $campesino_f_s = $rw['campesino'];
              $reinsertado_f_s = $rw['reinsertado'];
              $victima_f_s = $rw['victimas_armado'];
              $vulnerabilidad_f_s = $rw['vulnerabilidad_econo'];
              }
            }
  $total_discapacidad_s = $discapacitado_f_s + $discapacitado_m_s;
  $total_madre_s = $madre_f_s + $madre_m_s;
  $total_adulto_s = $adulto_f_s + $adulto_m_s;
  $total_indigena_s = $indigena_f_s + $indigena_m_s;
  $total_negra_s = $negra_f_s +$negra_m_s;
  $total_campesino_s = $campesino_f_s + $campesino_m_s;
  $total_reinsertado_s = $reinsertado_f_s + $reinsertado_m_s;
  $total_victima_s = $victima_f_s + $victima_m_s;
  $total_vulnerabilidad_s = $vulnerabilidad_f_s + $vulnerabilidad_m_s;
  //otro vulnerabilidad
  $otro_cual_s = '';
  $otro_m_s = '';
  $otro_f_s = '';
  $total_otro_s = '';
  $s = "SELECT otro_condicion_vulneravibilidad.nombre, otro_condicion_vulneravibilidad.cantidad FROM `otro_condicion_vulneravibilidad` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_condicion_vulneravibilidad.info_com_id 
WHERE otro_condicion_vulneravibilidad.sexo_id = 1 AND otro_condicion_vulneravibilidad.otro_rotulo_id = 5 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                  $otro_cual_s = $rw['nombre'];
                  $otro_m_s = $rw['cantidad'];
              }
            }

$s = "SELECT otro_condicion_vulneravibilidad.nombre, otro_condicion_vulneravibilidad.cantidad FROM `otro_condicion_vulneravibilidad` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_condicion_vulneravibilidad.info_com_id 
WHERE otro_condicion_vulneravibilidad.sexo_id = 2 AND otro_condicion_vulneravibilidad.otro_rotulo_id = 5 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                  $otro_cual_s = $rw['nombre'];
                  $otro_f_s = $rw['cantidad'];
              }
            }
            $total_otro_s = $otro_m_s + $otro_f_s;
// Total de socios o colaboradores

$total_masculino_s = $discapacitado_m_s+$madre_m_s+$adulto_m_s+$indigena_m_s+$negra_m_s+$campesino_m_s+$reinsertado_m_s+$victima_m_s+$vulnerabilidad_m_s+$otro_m_s;

$total_femenino_s = $discapacitado_f_s+$madre_f_s+$adulto_f_s+$indigena_f_s+$negra_f_s+$campesino_f_s+$reinsertado_f_s+$victima_f_s+$vulnerabilidad_f_s+$otro_f_s;

$total_socio_colaborador = $total_masculino_s + $total_femenino_s;

      echo "<div class='row' >

          <div class='col s12 m12 l12' >
            <div>1.3. Socios / Colaboradores</div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_discapacitado_m' class='key_s_discapacitado total_socio' name='s_discapacitado_m' type='number' value='$discapacitado_m_s'>
                  <label for='s_discapacitado_m' class='active'>Discapacitados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_madre_m' class='key_s_madre total_socio' name='s_madre_m' type='number' value='$madre_m_s'>
                  <label for='s_madre_m' class='active'>Madres cabeza de familia</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_adulto_m' class='key_s_adulto total_socio' name='s_adulto_m' type='number' value='$adulto_m_s'>
                  <label for='s_adulto_m' class='active'>Adultos mayores</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_indigena_m' class='key_s_indigena total_socio' name='s_indigena_m' type='number' value='$indigena_m_s'>
                  <label for='s_indigena_m' class='active'>Indígenas</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_negra_m' class='key_s_negra total_socio' name='s_negra_m' type='number' value='$negra_m_s'>
                  <label for='s_negra_m' class='active'>Comunidades negras</label>
                </div>
              </div>

              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Femenino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_discapacitado_f' class='key_s_discapacitado total_socio_f' name='s_discapacitado_f' type='number' value='$discapacitado_f_s'>
                  <label for='s_discapacitado_f' class='active'>Discapacitados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_madre_f' class='key_s_madre total_socio_f' name='s_madre_f' type='number' value='$madre_f_s'>
                  <label for='s_madre_f' class='active'>Madres cabeza de familia</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_adulto_f' class='key_s_adulto total_socio_f' name='s_adulto_f' type='number' value='$adulto_f_s'>
                  <label for='s_adulto_f' class='active'>Adultos mayores</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_indigena_f' class='key_s_indigena total_socio_f' name='s_indigena_f' type='number' value='$indigena_f_s'>
                  <label for='s_indigena_f' class='active'>Indígenas</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_negra_f' class='key_s_negra total_socio_f' name='s_negra_f' type='number' value='$negra_f_s'>
                  <label for='s_negra_f' class='active'>Comunidades negras</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_s_discapacitado' name='t_s_discapacitado' type='number' readonly value='$total_discapacidad_s'>
                  <label for='t_s_discapacitado' class='active'>Total discapacitados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_s_madre' name='t_s_madre' type='number' readonly value='$total_madre_s'>
                  <label for='t_s_madre' class='active'>Total madres cabeza de familia</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_s_adulto' name='t_s_adulto' type='number' readonly value='$total_adulto_s'>
                  <label for='t_s_adulto' class='active'>Total adulto mayor</label>
                </div>
                 <div class='input-field col s12 m2 l2'>
                  <input id='t_s_indigena' name='t_s_indigena' type='number' readonly value='$total_indigena_s'>
                  <label for='t_s_indigena' class='active'>Total indígena</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_s_negra' name='t_s_negra' type='number' readonly value='$total_negra_s'>
                  <label for='t_s_negra' class='active'>Total comunidad negra</label>
                </div>
              </div>



            <div class='divider'></div>

               <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_campesino_m' class='key_s_campesino total_socio' name='s_campesino_m' type='number' value='$campesino_m_s'>
                  <label for='s_campesino_m' class='active'>Campesinos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_reinsertado_m' class='key_s_reinsertado total_socio' name='s_reinsertado_m' type='number' value='$reinsertado_m_s'>
                  <label for='s_reinsertado_m' class='active'>Reinsertados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_victima_m' class='key_s_victima total_socio' name='s_victima_m' type='number' value='$victima_m_s'>
                  <label for='s_victima_m' class='active'>Victimas del conflicto armado</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_vulnerable_m' class='key_s_vulnerable total_socio' name='s_vulnerable_m' type='number' value='$vulnerabilidad_m_s'>
                  <label for='s_vulnerable_m' class='active'>Vulnerabilidad economica</label>
                </div>
              </div>
              
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Femenino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='s_campesino_f' class='key_s_campesino total_socio_f' name='s_campesino_f' type='number' value='$campesino_f_s'>
                  <label for='s_campesino_f' class='active'>Campesinos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_reinsertado_f' class='key_s_reinsertado total_socio_f' name='s_reinsertado_f' type='number' value='$reinsertado_f_s'>
                  <label for='s_reinsertado_f' class='active'>Reinsertados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_victima_f' class='key_s_victima total_socio_f' name='s_victima_f' type='number' value='$victima_f_s'>
                  <label for='s_victima_f' class='active'>Victimas del conflicto armado</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='s_vulnerable_f' class='key_s_vulnerable total_socio_f' name='s_vulnerable_f' type='number' value='$vulnerabilidad_f_s'>
                  <label for='s_vulnerable_f' class='active'>Vulnerabilidad economica</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_s_campesino' name='t_s_campesino' type='number' readonly value='$total_campesino_s'>
                  <label for='t_s_campesino' class='active'>Total campesinos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_s_reinsertado' name='t_s_reinsertado' type='number' readonly value='$total_reinsertado_s'>
                  <label for='t_s_reinsertado' class='active'>Total reinsertados</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_s_victima' name='t_s_victima' type='number' readonly value='$total_victima_s'>
                  <label for='t_s_victima' class='active'>Total victimas del conflicto</label>
                </div>
                 <div class='input-field col s12 m3 l3'>
                  <input id='t_s_vulnerable' name='t_s_vulnerable' type='number' readonly value='$total_vulnerabilidad_s'>
                  <label for='t_s_vulnerable' class='active'>Total vulnerabilidad economica</label>
                </div>
              </div>

               <div class='divider'></div>
                
                <div class='col s12 m12 l12' >
              <div class='input-field col s12 m3 l3'>
                <input id='otro_vulne_nom_s' name='otro_vulne_nom_s' type='text' value='$otro_cual_s'>
                <label for='otro_vulne_nom_s' class='active'>Otro ¿Cual?</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_vulne_m_s' class='key_otro_vulne_s total_socio' name='otro_vulne_m_s' type='number' value='$otro_m_s'>
                <label for='otro_vulne_m_s' class='active'>Masculino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_vulne_f_s' class='key_otro_vulne_s total_socio_f' name='otro_vulne_f_s' type='number' value='$otro_f_s'>
                <label for='otro_vulne_f_s' class='active'>Femenino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input value='$total_otro_s' id='otro_vulne_total' type='number' readonly>
                <label for='otro_vulne_total' class='active'>Total otro</label>
              </div>
          </div>



                
                <div class='col s12 m12 l12' >
          <div class='divider'></div>
              <div class='input-field col s12 m4 l4'>
                <input id='total_m_s' name='total_m_s' type='number'  value='$total_masculino_s' readonly>
                <label for='total_m_s' class='active'>Total de hombres</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input value='$total_femenino_s' id='total_f_s' type='number'  readonly>
                <label for='total_ms' class='active'>Total de mujeres</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input value='$total_socio_colaborador' id='total_s' type='number'  readonly>
                <label for='total_s' class='active'>Total</label>
              </div>
          </div>

            </div>

          </div>
          <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>3. ¿El negocio involucra a miembros de las comunidades locales?</div>";

      $socio_m = 0;
      $e_directo_m = 0;
      $e_indirecto_m = 0;
      $e_temporal_m = 0;
      $socio_f = 0;
      $e_directo_f = 0;
      $e_indirecto_f = 0;
      $e_temporal_f = 0;
      

$s = "SELECT negocio_comunidad.socios,negocio_comunidad.empleados_directos,negocio_comunidad.empleados_indirectos,negocio_comunidad.empleados_temporales  FROM `negocio_comunidad` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = negocio_comunidad.info_com_id 
WHERE negocio_comunidad.sexo_id = 1 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $socio_m = $rw['socios'];
              $e_directo_m = $rw['empleados_directos'];
              $e_indirecto_m = $rw['empleados_indirectos'];
              $e_temporal_m = $rw['empleados_temporales'];
              }
            }
$s = "SELECT negocio_comunidad.socios,negocio_comunidad.empleados_directos,negocio_comunidad.empleados_indirectos,negocio_comunidad.empleados_temporales  FROM `negocio_comunidad` 
INNER JOIN informacion_complementaria ON informacion_complementaria.id = negocio_comunidad.info_com_id 
WHERE negocio_comunidad.sexo_id = 2 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $socio_f = $rw['socios'];
              $e_directo_f = $rw['empleados_directos'];
              $e_indirecto_f = $rw['empleados_indirectos'];
              $e_temporal_f = $rw['empleados_temporales'];
              }
            }
$total_socios = $socio_f + $socio_m;
$total_e_directo = $e_directo_f + $e_directo_m;
$total_e_indirecto = $e_indirecto_f + $e_indirecto_m;
$total_e_temporal = $e_temporal_f + $e_temporal_m;

//otro negocio comunidad
$otro_nombre_negocio = 0;
$otro_m_negocio = 0;
$otro_f_negocio = 0;
$otro_total_negocio = 0;
$s = "SELECT otro_negocio_comunidad.nombre,otro_negocio_comunidad.cantidad FROM `otro_negocio_comunidad` INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_negocio_comunidad.info_com_id WHERE otro_negocio_comunidad.sexo_id = 1 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $otro_nombre_negocio = $rw['nombre'];
              $otro_m_negocio = $rw['cantidad'];
              }
            }
$s = "SELECT otro_negocio_comunidad.nombre,otro_negocio_comunidad.cantidad FROM `otro_negocio_comunidad` INNER JOIN informacion_complementaria ON informacion_complementaria.id = otro_negocio_comunidad.info_com_id WHERE otro_negocio_comunidad.sexo_id = 2 AND informacion_complementaria.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
              $otro_f_negocio = $rw['cantidad'];
              }
            }
      $otro_total_negocio = $otro_m_negocio +$otro_f_negocio;
      echo " <div class='row' >

          <div class='col s12 m12 l12' >
            <div></div>
            <div class='divider'></div>
            <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Maculino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='socio_m' name='socio_m' type='number' class='key_socio' value='$socio_m'>
                  <label for='socio_m' class='active'>Socios</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='directo_m_s' name='directo_m_s' type='number' class='key_directo_s' value='$e_directo_m'>
                  <label for='directo_m_s' class='active'>Empleados directos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='indirecto_m_s' name='indirecto_m_s' type='number' class='key_indirecto_s' value='$e_indirecto_m'>
                  <label for='indirecto_m_s' class='active'>Empleados indirectos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='temporal_m_s' name='temporal_m_s' type='number' class='key_temporal_s' value='$e_temporal_m'>
                  <label for='temporal_m_s' class='active'>Empleados temporales</label>
                </div>
                
              </div>

              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                <label style='color:black'>Femenino</label style='color:black'>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='socio_f' name='socio_f' type='number' class='key_socio' value='$socio_f'>
                  <label for='socio_f' class='active'>Socios</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='directo_f_s' name='directo_f_s' type='number' class='key_directo_s' value='$e_directo_f'>
                  <label for='directo_f_s' class='active'>Empleados directos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='indirecto_f_s' name='indirecto_f_s' type='number' class='key_indirecto_s' value='$e_indirecto_f'>
                  <label for='indirecto_f_s' class='active'>Empleados indirectos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='temporal_f_s' name='temporal_f_s' type='number' class='key_temporal_s' value='$e_temporal_f'>
                  <label for='temporal_f_s' class='active'>Empleados temporales</label>
                </div>
              </div>
              <div class='row' style='margin-top: 0px; margin-bottom: 0px'>
                <div class='input-field col s12 m1 l1'>
                  <label style='color:black'>Total</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                  <input id='t_socio' name='t_socio' type='number' readonly value='$total_socios'>
                  <label for='t_socio' class='active'>Total socios</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_directo_s' name='t_directo_s' type='number' readonly value='$total_e_directo'>
                  <label for='t_directo_s' class='active'>Total directos</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                  <input id='t_indirecto_f' name='t_indirecto_f' type='number' readonly value='$total_e_indirecto'>
                  <label for='t_indirecto_f' class='active'>Total indirectos</label>
                </div>
                 <div class='input-field col s12 m3 l3'>
                  <input id='t_temporal_s' name='t_temporal_s' type='number' readonly value='$total_e_temporal'>
                  <label for='t_temporal_s' class='active'>Total temporales</label>
                </div>
              </div>





               <div class='divider'></div>
                
                <div class='col s12 m12 l12' >
              <div class='input-field col s12 m3 l3'>
                <input id='otro_involucra_nom' name='otro_involucra_nom' type='text' value='$otro_nombre_negocio' >
                <label for='otro_involucra_nom' class='active'>Otro ¿Cual?</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_involucra_m' name='otro_involucra_m' type='number' class='key_otro_involucra' value='$otro_m_negocio'>
                <label for='otro_involucra_m' class='active'>Masculino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_involucra_f' name='otro_involucra_f' type='number' class='key_otro_involucra' value='$otro_f_negocio' >
                <label for='otro_involucra_f' class='active'>Femenino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input value='$otro_total_negocio' id='total_otro_involucra' type='number' readonly>
                <label for='total_otro_involucra' class='active'>Total</label>
              </div>
          </div>

            </div>

          </div>
          <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>4. ¿El negocio realiza actividades con los miembros de las comunidades locales?</div>";


            $i = 0;
            $s="SELECT pregunta_indicativa.descripcion,actividades.recurso_id,actividades.descripcion as actividad_desc,actividades.confirmacion,actividades.pregunta_id as id FROM `actividades` 
INNER JOIN informacion_complementaria ON actividades.info_com_id = informacion_complementaria.id 
INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = actividades.pregunta_id 
WHERE pregunta_indicativa.aspecto_id = 26 AND informacion_complementaria.empresa_id = '$empresa' order by actividades.pregunta_id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
                 if ($rw['confirmacion'] == 'si') {
                   echo"<div class='row'>
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox' checked='checked'  id='actividades".$i."'  name='actividades[]' value='$rw[id]'/>
                <label for='actividades".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='actividades_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <select name='actividades_recurso[]' id='actividades_recurso".$i."' >";

                 $s1="SELECT id,nombre from recurso order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['recurso_id'] == $result1['id']) {
                      echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
                echo"
                </select>
                <label for=''>Recursos</label>
              </div> 

              <div class='input-field col s12 m6 l6'>
                 <input type='text' id='actividades_desc".$i."' name='actividades_desc[]' value='$rw[actividad_desc]'/>
                <label for='actividades_desc".$i."' class='active'>Descripción (nombre del proyecto)</label>
              </div> 

              </div>";
                 }else if ($rw['confirmacion'] == 'no') {
                   echo"<div class='row'>
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox'  id='actividades".$i."'  name='actividades[]' value='$rw[id]'/>
                <label for='actividades".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='actividades_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <select name='actividades_recurso[]' id='actividades_recurso".$i."' disabled>";

                 $s1="SELECT id,nombre from recurso order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                echo"
                </select>
                <label for=''>Recursos</label>
              </div> 

              <div class='input-field col s12 m6 l6'>
                 <input type='text' id='actividades_desc".$i."' name='actividades_desc[]' disabled/>
                <label for='actividades_desc".$i."'>Descripción (nombre del proyecto)</label>
              </div> 

              </div>";
                 }
       

              }         
            }

      echo "
        <div class='divider teal darken-4' style='height: 10px'></div>
      <div class='row' style='text-align: justify;background-color: #e0e0e0; padding: 5px'>5. ¿El negocio tiene programas para los socios, colaboradores y empleados?</div>";


            $i = 0;
            $s="SELECT pregunta_indicativa.descripcion,programa.recurso_id,programa.descripcion as programa_desc,programa.confirmacion,programa.pregunta_id as id FROM `programa` 
INNER JOIN informacion_complementaria ON programa.info_com_id = informacion_complementaria.id 
INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = programa.pregunta_id 
WHERE pregunta_indicativa.aspecto_id = 26 AND informacion_complementaria.empresa_id = '$empresa' order by programa.pregunta_id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
                 if ($rw['confirmacion'] == 'si') {
                   echo"<div class='row'>
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox' checked='checked'  id='programa".$i."'  name='programa[]' value='$rw[id]'/>
                <label for='programa".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='programa_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <select name='programa_recurso[]' id='programa_recurso".$i."'>";

                 $s1="SELECT id,nombre from recurso order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['recurso_id'] == $result1['id']) {
                       echo"<option value=".$result1['id']." selected='selected'> ".$result1['nombre' ]."</option>";
                    }else{
                       echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                   
                  }
                }
                echo"
                </select>
                <label for=''>Recursos</label>
              </div> 

              <div class='input-field col s12 m6 l6'>
                 <input type='text' id='programa_desc".$i."' name='programa_desc[]' value='$rw[programa_desc]'/>
                <label for='programa_desc".$i."' class='active'>Descripción (nombre del proyecto)</label>
              </div> 

              </div>";
                 }else if ($rw['confirmacion'] == 'no') {
                   echo"<div class='row'>
              <div class='input-field col s12 m3 l3'>
                <p>
                <input type='checkbox'  id='programa".$i."'  name='programa[]' value='$rw[id]'/>
                <label for='programa".$i."'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='programa_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m3 l3'>
                 <select name='programa_recurso[]' id='programa_recurso".$i."' disabled>";

                 $s1="SELECT id,nombre from recurso order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                echo"
                </select>
                <label for=''>Recursos</label>
              </div> 

              <div class='input-field col s12 m6 l6'>
                 <input type='text' id='programa_desc".$i."' name='programa_desc[]' disabled/>
                <label for='programa_desc".$i."'>Descripción (nombre del proyecto)</label>
              </div> 

              </div>";
                 }
       

              }         
            }

  $s="SELECT otro_programa.recurso_id,otro_programa.descripcion as programa_desc,otro_programa.nombre,otro_programa.recurso_id FROM `otro_programa` 
INNER JOIN informacion_complementaria ON otro_programa.info_com_id = informacion_complementaria.id 
WHERE informacion_complementaria.empresa_id = '$empresa' order by otro_programa.id";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
               echo "<div class='row'>
               <div class='input-field col s12 m4 l4'>
                <input type='text' id='otro_programa_nom'  name='otro_programa_nom[]' value='$rw[nombre]'/>
                <label for='' class='active'>Otro. ¿Cual?</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                 <select name='otro_programa_recurso[]' id='otro_programa_recurso'> "; 
                 $s1="SELECT id,nombre from recurso order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    if ($rw['recurso_id'] == $result1['id']) {
                     echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    }else{
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                    
                  }
                }
              echo "</select>
                <label for=''>Resursos</label>
              </div> 
              <div class='input-field col s12 m4 l4'>
                <p>
                <input type='text' id='otro_programa_desc'  name='otro_programa_desc[]' value='$rw[programa_desc]'/>
                <label for='' class='active'>Descripción</label>
              </p>
              </div>
        </div>";
              }
          } 

    echo "</span></div></li>";

  

  
echo"</ul>
<button type='submit' class='waves-effect yellow darken-4  btn right' style='margin-bottom: 8px' id='modificar_informacion'><i class='material-icons right'>create</i>Modificar </button>
</form> 
 </div>";



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