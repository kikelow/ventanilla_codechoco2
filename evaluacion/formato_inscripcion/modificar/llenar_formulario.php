  <?php 
    include "../../../conexion.php";
    $tipo_persona ="";
    $tipo_identificacion ="";
    $identificacion ="";
    $razon_social = "";
    $persona_id ="";
    $empresario_id="";
    $municipio_id = "";
    $vereda = "";
    $direccion_predio = "";
    $aut_ambiental="";
    $altitud="";
    $coordenada_n="";
    $coordenada_w="";
    $asociacion="";
    $num_socios ="";
    $area ="";
    $pot ="";
    $famiempresa = "";
    $tamaño_empresa = "";
    $desc_negocio = "";
    $impacto_amb = "";
    $desc_imp_ambiental = "";
    $impacto_soc = "";
    $desc_imp_social = "";
    $subsector_id = "";
    $etapa_empresa = "";
    $cmb_legal="";
    $legal="";
    $cmb_personeria="";
    $personeria="";
    $cmb_ope_actualidad="";
    $año_desp_registro="";
    $observacion_general="";
    $s="SELECT * from empresa WHERE id = '$_POST[empresa_id]'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $tipo_persona = $rw['tipo_persona_id'];
                $tipo_identificacion = $rw['tipo_identificacion_id'];
                $identificacion=$rw['identificacion'];
                $razon_social= $rw['razon_social'];
                $persona_id = $rw['persona_id'];
                $empresario_id = $rw['empresario_id'];
                $municipio_id = $rw['municipio_id'];
                $vereda = $rw['vereda'];
                $direccion_predio = $rw['direccion'];
                $aut_ambiental= $rw['aut_ambiental'];
                $coordenada_n= $rw['coodenadas_n'];
                $coordenada_w= $rw['coordenadas_w'];
                $altitud= $rw['altitud'];
                $area= $rw['area'];
                $pot = $rw['si_no_pot_id'];
                $famiempresa = $rw['fami_empresa_si_no'];
                $tamaño_empresa =$rw['tamaño_empresa_id'];
                $desc_negocio = $rw['descripcion'];
                // $impacto_amb = $rw['desc_impacto_amb'];
                $desc_imp_ambiental = $rw['desc_impacto_amb'];
                // $impacto_soc = $rw[21];
                // $desc_imp_social = $rw[22];
                $num_socios= $rw['num_socios'];
                $asociacion= $rw['asociacion_si_no'];
                $subsector_id = $rw['subsector_id']; 
                $etapa_empresa = $rw['etapa_empresa_id'];

                $cmb_legal = $rw['const_legalmente_sino'];
                $legal = $rw['año_funcionamiento'];
                // $cmb_personeria= $rw[29];
                // $personeria= $rw[30];
                $cmb_ope_actualidad = $rw['opera_actualmente_sino']; 
                $año_desp_registro = $rw['año_func_desp_reg_camara'];
                $observacion_general = $rw['obs_general'];
              } 

            }
//seleccionar todos los datos de persona
        $documento ="";
        $nombre ="";
        $correo ="";
        $celular = "";
        $fijo ="";
        $direccion ="";
    $s="SELECT * from persona WHERE id = '$persona_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $documento = $rw['identificacion'];
                $nombre = $rw['nombre1'];
                $correo=$rw['correo'];
                $celular= $rw['celular'];
                $fijo= $rw['fijo'];
                $direccion= $rw['direccion'];
              } 

            }

    //seleccionar todos los datos del empresario
        $documento_empresario ="";
        $nombre_empresario ="";
        $cargo_empresario ="";
    $s="SELECT * from empresario WHERE id = '$empresario_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $documento_empresario = $rw['identificacion'];
                $nombre_empresario = $rw['nombre'];
                $cargo_empresario=$rw['cargo'];
              } 

            }

//seleccionar el departamento y la region
            $departamento_id = "";
            $s="SELECT * from municipio WHERE id = '$municipio_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $departamento_id = $rw[1];
              } 

            }
$region_id = "";
            $s="SELECT * from departamento WHERE id = '$departamento_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $region_id = $rw[1];
              } 

            }
  // seleccionar sector y categoria
  $sector_id = "";
            $s="SELECT * from subsector WHERE id = '$subsector_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $sector_id = $rw[1];
              } 

            }
  $categoria_id = "";
            $s="SELECT * from sector WHERE id = '$sector_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $categoria_id = $rw[1];
              } 

            }

//seleccionar los datos de numero de soscios
  $masculino1="";
  $femenino1="";
          $s="SELECT cantidad from empleado_sexo WHERE empresa_id = '$_POST[empresa_id]' AND socio_empleado_id = '1' AND sexo_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $masculino1 = $rw[0];
              } 

            }
            $s="SELECT cantidad from empleado_sexo WHERE empresa_id = '$_POST[empresa_id]' AND socio_empleado_id = '1' AND sexo_id = '2'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $femenino1 = $rw[0];
              } 

            }
    $total1 = $masculino1 + $femenino1;
//Seleccionar los datos de socios vinculados laboralmente
  $masculino2="";
  $femenino2="";
          $s="SELECT cantidad from empleado_sexo WHERE empresa_id = '$_POST[empresa_id]' AND socio_empleado_id = '2' AND sexo_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $masculino2 = $rw[0];
              } 

            }
            $s="SELECT cantidad from empleado_sexo WHERE empresa_id = '$_POST[empresa_id]' AND socio_empleado_id = '2' AND sexo_id = '2'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $femenino2 = $rw[0];
              } 

            }
    $total2 = $masculino2 + $femenino2;

    //Seleccionar los datos de numero de empleados
  $masculino3="";
  $femenino3="";
          $s="SELECT cantidad from empleado_sexo WHERE empresa_id = '$_POST[empresa_id]' AND socio_empleado_id = '3' AND sexo_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $masculino3 = $rw[0];
              } 

            }
            $s="SELECT cantidad from empleado_sexo WHERE empresa_id = '$_POST[empresa_id]' AND socio_empleado_id = '3' AND sexo_id = '2'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $femenino3 = $rw[0];
              } 

            }
    $total3 = $masculino3 + $femenino3;

    //Seleccionar los datos edad de empleados
  $entre_18_30="";
  $entre_30_50="";
  $mayor_50="";
          $s="SELECT cantidad from empleado_edad WHERE empresa_id = '$_POST[empresa_id]' AND edad_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $entre_18_30 = $rw[0];
              } 

            }
            $s="SELECT cantidad from empleado_edad WHERE empresa_id = '$_POST[empresa_id]' AND edad_id = '2'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $entre_30_50 = $rw[0];
              } 

            }
    $s="SELECT cantidad from empleado_edad WHERE empresa_id = '$_POST[empresa_id]' AND edad_id = '3'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $mayor_50 = $rw[0];
              } 

            }


//Seleccionar los datos de tipo de vinculacion
$indefinido="";
$definido="";
$por_dias="";

          $s="SELECT cantidad from tipo_vinculacion WHERE empresa_id = '$_POST[empresa_id]' AND vinculacion_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $indefinido = $rw[0];
              } 

            }
            $s="SELECT cantidad from tipo_vinculacion WHERE empresa_id = '$_POST[empresa_id]' AND vinculacion_id = '2'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $definido = $rw[0];
              } 

            }
    $s="SELECT cantidad from tipo_vinculacion WHERE empresa_id = '$_POST[empresa_id]' AND vinculacion_id = '3'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $por_dias = $rw[0];
              } 

            }
//seleccionar datos de la tabla nivel educativo
$primaria = "";
$bachillerato = "";
$tecnico = "";
$universitario = "";
$otro_m = "";
 $s="SELECT cantiad from nivel_educativo WHERE empresa_id = '$_POST[empresa_id]' AND nivel_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $primaria = $rw[0];
              } 

            }
    $s="SELECT cantiad from nivel_educativo WHERE empresa_id = '$_POST[empresa_id]' AND nivel_id = '2'";
    $r= mysqli_query($conn,$s) or die('Error');
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_array($r)){
        $bachillerato = $rw[0];
      } 

    }
    $s="SELECT cantiad from nivel_educativo WHERE empresa_id = '$_POST[empresa_id]' AND nivel_id = '3'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $tecnico = $rw[0];
              } 

            }
    $s="SELECT cantiad from nivel_educativo WHERE empresa_id = '$_POST[empresa_id]' AND nivel_id = '4'";
    $r= mysqli_query($conn,$s) or die('Error');
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_array($r)){
        $universitario = $rw[0];
      } 

    }
    $s="SELECT cantiad from nivel_educativo WHERE empresa_id = '$_POST[empresa_id]' AND nivel_id = '5'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $otro_m = $rw[0];
              } 

            }

/////seleccionar los datos de demografia
      $cmb_indigena="";
      $indigena="";
      $cmb_discapacitado="";
      $discapacitado="";
      $cmb_adulto="";
      $adulto="";
      $cmb_madre_familia="";
      $madre_familia="";
      $cmb_reinsertados="";
      $reinsertados="";
      $cmb_desplazado="";
      $desplazado="";
      $cmb_demografia_otro="";
      $demografia_otro="";
      $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '1'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_indigena=$rw[0];
                $indigena=$rw[1];
              } 

            }
      $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '2'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_discapacitado=$rw[0];
                $discapacitado=$rw[1];
              } 

            }
       $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '3'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_adulto=$rw[0];
                $adulto=$rw[1];
              } 

            }
        $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '4'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_madre_familia=$rw[0];
                $madre_familia=$rw[1];
              } 

            }
         $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '5'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_reinsertados=$rw[0];
                $reinsertados=$rw[1];
              } 

            }
          $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '6'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_desplazado=$rw[0];
                $desplazado=$rw[1];
              } 

            }
          $s="SELECT si_no_id,cantidad from demografia WHERE empresa_id = '$_POST[empresa_id]' AND desc_demografia_id = '7'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $cmb_demografia_otro=$rw[0];
                $demografia_otro=$rw[1];
              } 

            }
    //seleccionar datos de bienes y servicios
      $b_lider ="";

           
            $s="SELECT lider from bienes_servicios WHERE empresa_id = '$_POST[empresa_id]' and lider != ''";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
              
                $b_lider=$rw[0];
              } 

            }

    $datos ="";

   $datos.= "<ul class='collapsible' data-collapsible='accordion'><li>
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>1. Información General</div>
      <div class='collapsible-body'><span>
            <div class='row'>
          
            <div class='input-field col s12 m4 l4'>
    
                <select name='t_persona_m' id='t_persona_m' class='validate'>";
                  
                    $s="select id,nombre from tipo_persona ";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$tipo_persona) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label >Tipo de persona</label>      
            </div>
            <div class='input-field col s12 m4 l4' >
    
                <select name='t_identificacion_m' id='t_identificacion_m' class='validate'>";
                  
                    $s="select id,nombre from tipo_identificacion ";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$tipo_identificacion) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label >Tipo de persona</label>      
            </div>
            <div class='input-field col s12 m4 l4'>
                  <input id='identificacion_m' name='identificacion_m'   type='text' class='validate' value='$identificacion'  > 
                  <label for='identificacion_m' class='activar'>Identificación *</label>

            </div>
            </div>
            <div class='row'>

            <div class='input-field col s12 m12 l12'>
                  <input id='razon_social_m' name='razon_social_m'  type='text' class='validate' value='$razon_social'>
                  <label for='razon_social_m' class='activar'>Razón Social *</label>
            </div>

            </div>
            <div class='divider'></div>
            <div class='row'>
              
            <div class='input-field col s12 m4 l4'>
                  <input id='representante_m' name='representante_m' type='text' class='validate' value='$nombre'>
                  <label for='representante_m' class='activar'>Representante Legal *</label>
            </div>

            <div class='input-field col s12 m4 l4'>
                  <input id='documento_m' name='documento_m' type='number' class='validate' value='$documento'>
                  <label for='documento_m' class='activar'>Documento *</label>
            </div>

            <div class='input-field col s12 m4 l4'>
                  <input id='correo_m' name='correo_m' type='email' class='validate' value='$correo'>
                  <label for='correo_m' class='activar'>Correo</label>
            </div>

            </div>

            <div class='row'>
              
            <div class='input-field col s12 m4 l4'>
                  <input id='fijo_m' name='fijo_m' type='number' class='validate' value='$fijo'>
                  <label for='fijo_m' class='activar'>Teléfono fijo</label>
            </div>


            <div class='input-field col s12 m4 l4'>
                  <input id='celular_m' name='celular_m' type='number' class='validate' value='$celular'>
                  <label for='celular_m' class='activar'>Celular</label>
            </div>
            <div class='input-field col s12 m4 l4'>
                  <input id='direccion_c_m' name='direccion_c_m' type='text' class='validate' value='$direccion'>
                  <label for='direccion_c_m' class='activar'>Direccion de Correspondencia</label>
            </div>

            </div>


            <div class='row'>

            <div class='input-field col s12 m2 l2' id='region_valida2'>
                <select name='region_m' id='region_m' class='validate'>";
                    $s="select id,nombre from region ";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                if ($rw["id"]==$region_id) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 
                  

            }
                $datos.="  
                </select>
                <label >Region</label>      
            </div>
            <div class='input-field col s12 m2 l2' id='depto_valida2' >
              <select name='departamento_m' id='departamento_m' class='validate'>";
                $s="SELECT id,nombre from departamento where region_id ='$region_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$departamento_id) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label >Departamento</label>      
            </div>
            <div class='input-field col s12 m2 l3' id='municipio_valida2' >";
              $datos.="<select name='municipio_m' id='municipio_m' class='validate'>";   
            $s="SELECT id,nombre from municipio where departamento_id ='$departamento_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                if ($rw["id"]==$municipio_id) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label >Municipio</label>      
            </div>
            <div class='input-field col s12 m2 l2 disabled'>
                <input id='vereda_m' name='vereda_m' type='text' value='$vereda' class='validate'>
                  <label for='vereda_m' class='activar'>Vereda</label>
            </div>

            <div class='input-field col s12 m3 l3'>
                  <input id='direccion_p_m' name='direccion_p_m' type='text' value='$direccion_predio' class='validate'>
                  <label for='direccion_p_m' class='activar'>Direccion Predio</label>
            </div>
            </div>

             <div class='row'>

            <div class='input-field col s12 m3 l3'>
                  <input id='autoridad_ambiental_m' name='autoridad_ambiental_m' value='$aut_ambiental' type='text' class='validate' value='Codechocó'>
                  <label for='autoridad-ambiental_m' class='activar'>Autoridad ambiental</label>
            </div>

            <div class='input-field col s12 m3 l3'>
                  <input id='altitud_m' name='altitud_m' type='text' class='validate' value='$altitud'>
                  <label for='altitud_m' class='activar'>Altitud (m.s.n.m)</label>
            </div>

            <div class='input-field col s12 m3 l3'>
                  <input id='coordenada_n_m' name='coordenada_n_m' type='text' class='validate' value='$coordenada_n'>
                  <label for='coordenada_n_m' class='activar'>Coordenada N</label>
            </div>

            <div class='input-field col s12 m3 l3'>
                  <input id='coordenada_w_m' name='coordenada_w_m' type='text' class='validate' value='$coordenada_w'>
                  <label for='coordenada_w_m' class='activar'>Cordenada W</label>
            </div>

            </div>

             <div class='row'>
            
            <div class='input-field col s12 m3 l3'>

                 <select name='asociacion_m' id='asociacion_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$asociacion) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Asociación</label>  

            </div>
              
            <div class='input-field col s12 m3 l3'>
                  <input id='num_asociados_m' name='num_asociados_m' type='number' value='$num_socios' class='validate'>
                  <label for='num_asociados_m' class='activar'>Numero de asociados</label>
            </div>

            <div class='input-field col s12 m3 l3'>
                  <input id='area_m' name='area_m' type='text' class='validate' value='$area'>
                  <label for='area_m' class='activar'>Area total predio (Ha)</label>
            </div>
                
            <div class='input-field col s12 m3 l3'>

                  <select name='pot_m' id='pot_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$pot) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                  <label>Cumple con el POT municipal</label>  

            </div>

            </div>

            <div class='row'>
              
            <div class='input-field col s12 m6 l6'>      
                  <select name='famiempresa_m' id='famiempresa_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$famiempresa) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                  <label>Famiempresa</label>                  
            </div>

            <div class='input-field col s12 m6 l6'>      
                  <select name='tamaño_empresa_m' id='tamaño_empresa_m' class='validate'>";
                  
                    $s="SELECT id,nombre from tamaño_empresa";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$tamaño_empresa) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                  <label>Tamaño de la Empresa</label>                  
            </div>
              
            </div>
            </span></div></li>

            <li>
      <div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>2. Descripción del Negocio Verde</div>
      <div class='collapsible-body'><span>
        
      <div class='row' style='text-align: center;background-color: #bdbdbd;'>2. Descripción del Negocio Verde</div>
      <div class='row'>
      <div class='input-field col s12'>
                <textarea id='desc_negocio_m' name='desc_negocio_m' class='materialize-textarea'>$desc_negocio</textarea>
                <label for='desc_negocio_m' class='activar'>Descripción del negocio (Bien o servicio)</label>
              </div>
      </div>

      <div class='row'>
        <div class='input-field col s12 m12 l12'>
                <textarea id='desc_imp_ambiental_m' name='desc_imp_ambiental_m' class='materialize-textarea' >$desc_imp_ambiental</textarea>
                <label for='desc_imp_ambiental_m' class='activar'>¿Por qué?</label>
              </div>
      </div>

      </span></div>
    </li>

      <li>
      <div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>3. Categoria de Negocios Verdes</div>
      <div class='collapsible-body'><span>
        
        

        <div class='row' style='text-align: center;background-color: #bdbdbd;margin-bottom: 0px;'>3. Categoria de Negocios Verdes</div>
        <div class='row'>
        <div class='input-field col s12 m4 l4' style='margin-top: 30px' id='categoria_valida2'>
          <select name='categoria_m' id='categoria_m' class='validate'>";
                $s="SELECT id,nombre from categoria";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$categoria_id) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                  <label '>Categoria</label>
                </div>  

          <div class='input-field col s12 m4 l4' style='margin-top: 30px' id='sector_valida2'>
         <select name='sector_m' id='sector_m' class='validate' >";
                $s="SELECT id,nombre from sector where categoria_id ='$categoria_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$sector_id) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                  <label '>Sector</label>
                </div>

          <div class='input-field col s12 m4 l4' style='margin-top: 30px' id='subsector_valida2'>
          <select name='subsector_m' id='subsector_m' class='validate'>";
                $s="SELECT id,nombre from subsector where sector_id ='$sector_id'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$subsector_id) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                  <label '>Subsector</label>
        </div>
      </div>
      </span></div>
    </li>

    <li>
      <div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>4. Información Empresa</div>
      <div class='collapsible-body'><span>
      <div class='row' style='text-align: center;background-color: #bdbdbd;margin-bottom: 0px;'>4. Información Empresa</div>
      <div class='row'>
        <div class='col s12 m3 l3' style='border: 1px solid'>
            1.Número de socios
            <div class='divider'></div>
            
              
              <div class='input-field col s12 m4 l4'>
                <input id='masculino_1_m' name='masculino_1_m' value='$masculino1' type='number' class='validate'>
                <label for='masculino_1_m' class='activar'>Masculino</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input id='femenino_1_m' name='femenino_1_m' value='$femenino1' type='number' class='validate'>
                <label for='femenino_1_m' class='activar'>Femenino</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input  value='$total1' id='total_1_m' type='number' class='validate' readonly>
                <label for='total_1_m'  class='activar'>Total</label>
              </div>
            
          </div>

          <div class='col s12 m6 l6' style='border: 1px solid;'>
            2.Cuantos socios vinculados laboralmente como empleados
            <div class='divider'></div>
            
              
              <div class='input-field col s12 m4 l3'>
                <input id='masculino_2_m' name='masculino_2_m' type='number' value='$masculino2' class='validate'>
                <label for='masculino_2'_m class='activar'>Masculino</label>
              </div>
              <div class='input-field col s12 m4 l3'>
                <input id='femenino_2_m' name='femenino_2_m' type='number' value='$femenino2' class='validate'>
                <label for='femenino_2_m' class='activar'>Femenino</label>
              </div>
              <div class='input-field col s12 m4 l3'>
                <input disabled value='$total2' id='total_2_m' type='number' class='validate'>
                <label for='total_2_m' class='activar'>Total</label>
                
              </div>
              <div class='col s12 m2 l2'>
                <div id='mensaje1_m'></div>
              </div>
            
          </div>

          <div class='col s12 m3 l3' style='border: 1px solid'>
           3.Número de empleados
            <div class='divider'></div>
              <div class='input-field col s12 m4 l4'>
                <input id='masculino_3_m' name='masculino_3_m' value='$masculino3' type='number' class='validate'>
                <label for='masculino_3_m' class='activar'>Masculino</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input id='femenino_3_m' name='femenino_3_m' value='$femenino3' type='number' class='validate'>
                <label for='femenino_3_m' class='activar'>Femenino</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input disabled value='$total3' id='total_3_m' type='number' class='validate'>
                <label for='total_3_m' class='activar'>Total</label>
              </div>
          </div>
      </div>
        
        <div class='row'>
          
          <div class='col s12 m12 l12' style='border: 1px solid'>
            Edad (Indicar Nº de empleados)
            <div class='divider'></div>
              <div class='input-field col s12 m4 l4'>
                <input id='entre_18_30_m' name='entre_18_30_m' value='$entre_18_30' type='number' class='validate'>
                <label for='entre_18_30_m' class='activar'>Entre 18-30</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input id='entre_30_50_m' name='entre_30_50_m' value='$entre_30_50' type='number' class='validate'>
                <label for='entre_30_50_m' class='activar'>Entre 30-50</label>
              </div>
              <div class='input-field col s12 m4 l4'>
                <input id='mayor_50_m' name='mayor_50_m' value='$mayor_50' type='number' class='validate'>
                <label for='mayor_50_m' class='activar'>Entre Mayores 50</label>
              </div>

            <div id='mensaje_edad2'></div>
          </div>
        </div>

        <div class='row'>
          <div class='col s12 m6 l6' style='border: 1px solid'>
            Tipo de vinculacion laboral (Indicar Nº de empleos)
            <div class='divider'></div>
        
              <div class='input-field col s12 m2 l2'>
                <input id='indefinido_m' name='indefinido_m' value='$indefinido' type='number' class='validate'>
                <label for='indefinido_m' class='activar'>Indefinido</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='definido_m' name='definido_m' value='$definido' type='number' class='validate'>
                <label for='definido_m' class='activar'>Ter. definido</label>
              </div>
              <div class='input-field col s12 m7 l7'>
                <input id='por_dias_m' name='por_dias_m' value='$por_dias' type='number' class='validate'>
                <label for='por_dias_m' class='activar'>Por días (Jornales) promedio en el año</label>
              </div>

            <div id='mensaje_vinculacion2'></div>
          </div>
          <div class='col s12 m6 l6' style='border: 1px solid'>
            Nivel educativo (Indicar Nº de empleados)
            <div class='divider'></div>
        
              <div class='input-field col s12 m2 l2'>
                <input id='primaria_m' name='primaria_m' value='$primaria' type='number' class='validate'>
                <label for='primaria_m' class='activar'>Primaria</label>
              </div>
              <div class='input-field col s12 m2 l2'>
                <input id='bachillerato_m' name='bachillerato_m' value='$bachillerato' type='number' class='validate'>
                <label for='bachillerato_m' class='activar'>Bachillerato</label>
              </div>
              <div class='input-field col s12 m2 l2 '>
                <input id='tecnico_m' name='tecnico_m' value='$tecnico' type='number' class='validate'>
                <label for='tecnico_m' class='activar'>Técnicio</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='universitario_m' name='universitario_m' value='$universitario' type='number' class='validate'>
                <label for='universitario_m' class='activar'>Universitario</label>
              </div>
              <div class='input-field col s12 m3 l3'>
                <input id='otro_m' name='otro_m' value='$otro_m' type='number' class='validate'>
                <label for='otro_m' class='activar'>Otro</label>
              </div>

            <div id='mensaje_educativo2'></div>
          </div>
        </div>

        <div class='row' style='border: 1px solid'> 
             Condiciones especiales de los empleados
            <div class='divider'></div>
            <div class='input-field col s12 m6 l6'>
                <select name='cmb_indigena_m' id='cmb_indigena_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_indigena) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Personas de comunidades indigenas</label>
            </div>

            <div class='input-field col s12 m6 l6'>
                 <input id='indigena_m' name='indigena_m' value='$indigena' type='number' class='validate'>
                <label for='indigena_m' class='activar'>Nº de empleados</label>
            </div> 
          
        <div class='input-field col s12 m6 l6'>
                  <select name='cmb_discapacitado_m' id='cmb_discapacitado_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_discapacitado) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Personas en situacion de discapacidad</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='discapacitado_m' value='$discapacitado' name='discapacitado_m' type='number' class='validate'>
                <label for='discapacitado_m' class='activar'>Nº de empleados</label>
            </div>  

         
          <div class='input-field col s12 m6 l6'>
                  <select name='cmb_adulto_m' id='cmb_adulto_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_adulto) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Adultos mayores</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='adulto_m' value='$adulto' name='adulto_m' type='number' class='validate'>
                <label for='adulto_m' class='activar'>Nº de empleados</label>
            </div>      
        

          <div class='input-field col s12 m6 l6'>    
                  <select name='cmb_madre_familia_m' id='cmb_madre_familia_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_madre_familia) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Madres cabeza de familia</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='madre_familia_m' value='$madre_familia' name='madre_familia_m' type='number' class='validate'>
                <label for='madre_familia_m' class='activar'>Nº de empleados</label>
            </div>      
          

          <div class='input-field col s12 m6 l6'>          
                  <select name='cmb_reinsertados_m' id='cmb_reinsertados_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_reinsertados) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Reinsertados</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='reinsertados_m' value='$reinsertados' name='reinsertados_m' type='number' class='validate'>
                <label for='reinsertados_m' class='activar'>Nº de empleados</label>
            </div>             
          

            <div class='input-field col s12 m6 l6'>          
                  <select name='cmb_desplazado_m' id='cmb_desplazado_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_desplazado) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Desplazados</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='desplazado_m' value='$desplazado' name='desplazado_m' type='number' class='validate'>
                <label for='desplazado_m' class='activar'>Nº de empleados</label>
            </div>  

          <div class='input-field col s12 m6 l6'>
                  <select name='cmb_demografia_otro_m' id='cmb_demografia_otro_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_demografia_otro) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Otros</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='demografia_otro_m' value='$demografia_otro' name='demografia_otro_m' type='number' class='validate'>
                <label for='demografia_otro_m' class='activar'>Nº de empleados</label>
            </div>            
        </div>

         <div class='row' style='text-align: center;background-color: #e0e0e0;margin-bottom: 0px;'>Caracteristicas del negocio</div>
        <div class='row' style='border: 1px solid'>
        <div class='col s12 m6 l6'>
        <div class='col s12 m6 l3'>Actividades realizadas por la empresa</div>
        <div class='col s12 m6 l9'>
        <div class='row'>
        <div class='col s12'></div>";
        $actividad_item =array();
        $id_activi = array();
            $i = 0;
            $s1="SELECT * from actividad_empresa WHERE empresa_id = '$_POST[empresa_id]'";
            $r1= mysqli_query($conn,$s1) or die('Error');
            if(mysqli_num_rows($r1)>0){
              while($rw1=mysqli_fetch_assoc($r1)){
                  $s="SELECT id,nombre from actividad_item WHERE id = '".$rw1['actividad_item_id']."' order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                $i++;
                 if ($rw1['confirmacion'] == 'si' ) {
                 $datos.="
                  <p>
                    <input type='checkbox' id='t_m$i' checked='checked'  name='actividad_emp_m[]' value='$rw[id]' />
                    <label for='t_m$i'>$rw[nombre]</label>
                    <input type='hidden' id='t".$i."'  name='actividad_emp_hidden_m[]' value='$rw[id]' />
                  </p>";
                }else{
                  $datos.="
                  <p>
                    <input type='checkbox' id='t_m$i'   name='actividad_emp_m[]' value='$rw[id]' />
                    <label for='t_m$i'>$rw[nombre]</label>
                    <input type='hidden' id='t".$i."'  name='actividad_emp_hidden_m[]' value='$rw[id]' />
                  </p>";

                 }

              }
            }
                }
                      
            }
    $datos.="
        </div>
        </div>
        </div>
        <div class='col s12 m6 l6'>
        <div class='col s12 m6 l3'>Etapa empresarial</div>
        <div class='col s12 m6 l9'>
        <div class='row'>
        <div class='input-field col s12 m12 l12'>
                 <select name='etapa_empresa_m' id='etapa_empresa_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$etapa_empresa) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>Etapa empresarial</label>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class='row' style='border: 1px solid'>  
        <div class='col s12 m6 l3'>Enliste los bienes y/o servicios del negocio</div>
        <div class='col s12 m6 l9'>
        
        <div class='row'>
        
        <div class='col s12' ></div>";
        
        $i="";
            $s="SELECT nombre from bienes_servicios WHERE empresa_id = '$_POST[empresa_id]' and lider =''";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
                $i++;
                $datos.="<div class='input-field col s12 m12 l12'>
                  <input id='bien_m$i' name='bienes_m[]' type='text' value='$rw[0]' class='validate' >
                  <label for='bien_m$i' class='activar'>Bien y/o servicio $i</label>
                </div>";
              } 
            }
        $datos.="
        <div class='input-field col s12 m12 l12' id='bien_servi_m'>
          <input id='b_lider_m' value='$b_lider' name='b_lider_m' type='text' class='validate' >
          <label for='b_lider_m' class='activar'>Bien o servicio lider (No debe estar dentro de los bienes o servicios enlistados anteriormente )</label>
        </div>
        </div>
        </div>
        </div>

        <div class='row' style='border: 1px solid'> 
        <div class='col s12 m12 l12 center'>Sobre la organización</div>
        <div class='divider'></div>
            <div class='input-field col s12 m6 l6'>
                  <select name='cmb_legal_m' id='cmb_legal_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_legal) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>¿Su organización está constituida legalmente (camara de comercio, DIAN)?</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                 <input id='legal_m' name='legal_m' value='$legal' type='text' class='validate'>
                <label for='legal_m' class='activar'>Años de funcionamiento de la empresa</label>
            </div>    
             
        
        
        <div class='row' style='border-bottom: 1px solid'></div>
            <div class='input-field col s12 m5 l5'>              
                 <select name='cmb_ope_actualidad_m' id='cmb_ope_actualidad_m' class='validate'>";
                  
                    $s="SELECT id,nombre from si_no";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                
                if ($rw["id"]==$cmb_ope_actualidad) {
                  $datos.="ECHO '<option value='$rw[id]' selected='selected'> $rw[nombre]</option>'";
                }else{
                  $datos.="echo'<option value='$rw[id]'>$rw[nombre]</option>'";
                }

              } 

            }
                $datos.="  
                </select>
                <label>¿su organización se encuentra operando en la actualidad?</label>
            </div>
            <div class='input-field col s12 m7 l7'>
                 <input id='año_desp_registro_m' value='$año_desp_registro' name='año_desp_registro_m' type='text' class='validate'>
                <label for='año_desp_registro_m' class='activar'>¿Cuantos años de funcionamiento despues de registro ante camara y comercio? </label>
            </div>      
      
        </div>
      </span>
    </div>
    </li>
    <li>
<div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>5. Información del verificador y empresario</div>
<div class='collapsible-body'>
<span>     
<div class='row' style='text-align: center;background-color: #bdbdbd;margin-bottom: 0px;'>5. Información del verificador y empresario</div>
<div class='row' style='text-align: center;background-color: #e0e0e0;'>Verificador</div>";
  $s="SELECT * FROM verificador WHERE empresa_id='$_POST[empresa_id]'";
  $r= mysqli_query($conn,$s);
$nombre ="";
$entidad ="";
$area ="";
$cargo ="";
while ($rw = mysqli_fetch_assoc($r)) {
  $nombre = $rw['nombre'];
  $entidad = $rw['entidad'];
  $area = $rw['area'];
  $cargo = $rw['cargo'];
}

$datos.="<div class='row'>
  <div class='input-field col s12 m4 l3'>
    <input type='text' name='verificador_m' id='verificador_m' value='$nombre'>
    <label for='verificador_m' class='activar'>Nombre del verificador</label>
  </div>
  <div class='input-field col s12 m4 l3'>
    <input type='text' name='entidad_verificador_m' id='entidad_verificador_m' value='$entidad'>
    <label for='entidad_verificador_m' class='activar'>Entidad</label>
  </div>
  <div class='input-field col s12 m4 l3'>
    <input type='text' name='area_verificador_m' id='area_verificador_m' value='$area'>
    <label for='area_verificador_m' class='activar'>Area</label>
  </div>
  <div class='input-field col s12 m4 l3'>
    <input type='text' name='cargo_verificador_m' id='cargo_verificador_m' value='$cargo'>
    <label for='cargo_verificador_m' class='activar'>Cargo</label>
  </div>
</div>

<div class='row' style='text-align: center;background-color: #e0e0e0;'>Empresario</div>
<div class='row'>
  <div class='input-field col s12 m4 l4'>
    <input type='text' name='entrevistado_m' id='entrevistado_m' value='$nombre_empresario'>
    <label for='entrevistado_m' class='activar'>Nombre del entrevistado</label>
  </div>
  <div class='input-field col s12 m4 l4'>
    <input type='text' name='identificacion_entrevistado_m' id='identificacion_entrevistado_m' value='$documento_empresario'>
    <label for='identificacion_entrevistado_m' class='activar'>Identificación</label>
  </div>
  <div class='input-field col s12 m4 l4'>
    <input type='text' name='cargo_entrevistado_m' id='cargo_entrevistado_m' value='$cargo_empresario'>
    <label for='cargo_entrevistado_m' class='activar'>Cargo</label>
  </div>
</div>
</span>
</div>
</li>

<li>
<div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>6. Observaciones generales</div>
<div class='collapsible-body'>
<span>     
<div class='row' style='text-align: center;background-color: #bdbdbd;margin-bottom: 0px;'>6. Observaciones generales</div>
<div class='row'>
  <div class='input-field col s12 m12 l12'>
    <textarea id='observacion_general_m' name='observacion_general_m' class='materialize-textarea'>$observacion_general</textarea>
    <label for='observacion_general_m' class='activar'>Observaciones Generales</label>
  </div>
</div>
</span>
</div>
</li>
</ul>
<div class='input-field col s12 m12 l12 green lighten-5 ' id='div_empresa' style='border: 1px solid green'>
      <h6>NOTA: Esta imagen será utilizada en caso de que el emprendimiento cumpla con mas del 50% luego de haber aplicado todos los criterios de evaliación para ser visualizada en la pagina principal</h6>
    </div>";
$s = "SELECT * FROM img_empresa WHERE empresa_id='$_POST[empresa_id]'";
$r= mysqli_query($conn,$s);
$imagen ="";
while ($rw = mysqli_fetch_assoc($r)) {
  $imagen = $rw['imagen'];
}
if ($imagen == "") {
  $datos.= "<div class='row'>
  <div class='file-field input-field col s12 m12 l12' style=''>
         <div class='btn'>
        <span>Seleccionar imagen</span>
        <input type='file' name='img_emprendimiento_m' id='img_emprendimiento_m' accept='image/*'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text'  >
  </div>
</div>
</div>";
}else{
  $datos.= "<div class='row'>
  <div class='file-field input-field col s12 m11 l11' style=''>
         <div class='btn'>
        <span>Seleccionar imagen</span>
        <input type='file' name='img_emprendimiento_m' id='img_emprendimiento_m' accept='image/*'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$imagen' id='nombre_imagen' >
  </div>
</div>
<div class='file-field input-field col s12 m1 l1 ' style='margin-top:40px'>
      <a href='evaluacion/formato_inscripcion/modificar/descargar_archivo.php?imagen=$imagen' target='_blank' class='right'>Descargar</a>
</div>
</div>";
}


$datos.= "<button type='submit'  class='waves-effect yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar_emp'><i class='material-icons right'>create</i>Modificar</button>
<script type='text/javascript' src='js/accion_registro.js'></script>


<script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 
 $('.activar').addClass('active')

  })

</script>
";
echo($datos);
   ?>


















