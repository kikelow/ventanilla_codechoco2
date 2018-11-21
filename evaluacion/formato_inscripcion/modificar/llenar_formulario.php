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
  $aut_ambiental="";
  $altitud="";
  $latitud="";
  $longitud="";
  $num_socios ="";
  $famiempresa = "";
  $tamaño_empresa = "";
  $desc_negocio = "";
  $impacto_amb = "";
  $subsector_id = "";
  $etapa_empresa = "";
  $cmb_personeria="";
  $personeria="";
  $año_funcionamiento = "";
  $año_desp_registro="";
  $observacion_general="";
  $pagina_web = "";
  $organizacion = "";
  $personeria = "";
  $bien_serv_op = "";
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
      $latitud= $rw['latitud'];
      $longitud= $rw['longitud'];
      $altitud= $rw['altitud'];
      $famiempresa = $rw['fami_empresa_si_no'];
      $tamaño_empresa =$rw['tamaño_empresa_id'];
      $desc_negocio = $rw['descripcion'];
      
      $num_socios= $rw['num_socios'];
     
      $subsector_id = $rw['subsector_id']; 
      $etapa_empresa = $rw['etapa_empresa_id'];
      $año_funcionamiento = $rw['años_funcionamiento'];
      $año_desp_registro = $rw['año_func_desp_reg_camara'];
      $observacion_general = $rw['obs_general'];
      $pagina_web = $rw['pagina_web'];
      $organizacion = $rw['organizacion'];
      $personeria = $rw['id_personeria'];
      $bien_serv_op = $rw['bien_serv_op'];

    } 

  }
            //seleccionar todos los datos de concejo comunitario
  $consejo_si_no ="";
  $consejo_nombre = "";
  $s="SELECT * from consejo_comunitario WHERE id_empresa = '$_POST[empresa_id]'";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $consejo_si_no = $rw['si_no_id'];
      $consejo_nombre = $rw['nombre'];
    } 

  }
            //seleccionar todos los datos de junta comunal
  $junta_si_no ="";
  $junta_nombre = "";
  $s="SELECT * from junta_comunal WHERE id_empresa = '$_POST[empresa_id]'";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $junta_si_no = $rw['si_no_id'];
      $junta_nombre = $rw['nombre'];
    } 

  }
            //seleccionar todos los datos de grupo etnico
  $etnico_op ="";
  $etnico_nombre = "";
  $s="SELECT * from grupo_etnico WHERE id_empresa = '$_POST[empresa_id]'";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $etnico_op = $rw['grupo_op_id'];
      $etnico_nombre = $rw['nombre'];
    } 

  }
            //seleccionar todos los datos de cabildo
  $cabildo_si_no ="";
  $cabildo_nombre = "";
  $s="SELECT * from cabildo WHERE id_empresa = '$_POST[empresa_id]'";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $cabildo_si_no = $rw['si_no_id'];
      $cabildo_nombre = $rw['nombre'];
    } 

  }

             //seleccionar todos los datos de territorio colectivo
  $tcpi_op ="";
  $tcpi_nombre = "";
  $s="SELECT * from tcip WHERE id_empresa = '$_POST[empresa_id]'";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $tcpi_op = $rw['tcip_op_od'];
      $tcpi_nombre = $rw['nombre'];
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
  $carta_empresario = "";
  $s="SELECT * from empresario WHERE id = '$empresario_id'";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $documento_empresario = $rw['identificacion'];
      $nombre_empresario = $rw['nombre'];
      $cargo_empresario=$rw['cargo'];
      $carta_empresario = $rw['carta_si_no'];
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
    while($rw=mysqli_fetch_assoc($r)){
      $region_id = $rw['region_id'];
      $aut_ambiental = $rw['autoridad_amb'];
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
  ?>
 
  <ul class="collapsible" data-collapsible="accordion">
    <li id="s">
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>1. Información General</div>
      <div class="collapsible-body">
        <span>
          <div class="row" style="text-align: center;background-color: #bdbdbd;">1. Información General</div>
          <div class="row">

            <div class="input-field col s12 m3 l3" style="margin-top: 30px" >
              <select id="cmb_verificacion" name="cmb_verificacion">
                <option disabled selected>Seleccione...</option>
                <?php 
                $s="SELECT id,nombre from si_no WHERE id != 4";
                $r= mysqli_query($conn,$s) or die("Error");
                if(mysqli_num_rows($r)>0){
                  while($rw=mysqli_fetch_assoc($r)){
                    echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                  }         
                }
                ?>
              </select>
              <label>"¿El negocio ha sido verificado anteriormente?</label>
            </div>


            <div id="ano_view">
             <?php 
                $s="SELECT * from veri_empresa WHERE id_empresa = '$_POST[empresa_id]'";
                $r= mysqli_query($conn,$s) or die("Error");
                if(mysqli_num_rows($r)>0){
                  while($rw=mysqli_fetch_assoc($r)){
                      echo "<div class='input-field col s12 m3 l3' style='margin-top: 30px' >
                <select id='' name='año_veri[]'>
                  <option ></option>";
                 
                  for ($i=1995; $i <= 2030; $i++) { 
                    if ($i == $rw['anio']) {
                     echo"<option value='$i' selected='selected'>$i</option>"; 
                    }else{

                      echo"<option value='$i'>$i</option>"; 
                  }       
                    }

        
               echo "</select>
                <label>Año</label>
              </div>";       
                  }         
                }
                ?>
            </div>
          </div>

          <div class="row">

            <div class="input-field col s12 m3 l3" id="depto_valida">
              <select id="departamento_m" name="departamento_m" class="dep">
               <?php 

               $s="select id,nombre from departamento";
               $r= mysqli_query($conn,$s) or die("Error");
               if(mysqli_num_rows($r)>0){
                while($rw=mysqli_fetch_assoc($r)){
                  if ($rw['id'] == $departamento_id) {
                  echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";    
                  }else{
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";    
                  }
                        
                }         
              }
              ?>
            </select>
            <label>Departamento</label>
          </div>

          <div class="input-field col s12 m3 l3" id="municipio_valida">
            <select id="municipio_m" name="municipio_m">
              <?php 

               $s="select id,nombre from municipio";
               $r= mysqli_query($conn,$s) or die("Error");
               if(mysqli_num_rows($r)>0){
                while($rw=mysqli_fetch_assoc($r)){
                  if ($rw['id'] == $municipio_id) {
                  echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";    
                  }else{
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";    
                  }
                        
                }         
              }
              ?>
            </select>
            <label>Municipio</label>
          </div>

          <div class="input-field col s12 m3 l3" id="region_valida">
            <select name="region_m" id="region_m" readonly>

            <?php 

               $s="select id,nombre from region";
               $r= mysqli_query($conn,$s) or die("Error");
               if(mysqli_num_rows($r)>0){
                while($rw=mysqli_fetch_assoc($r)){
                  if ($rw['id'] == $region_id) {
                  echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";    
                  }else{
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";    
                  }
                        
                }         
              }
              ?>
            </select>
            <label>Region</label>
          </div>

          <div class="input-field col s12 m3 l3">
            <input id="autoridad_ambiental_m" name="autoridad_ambiental_m" type="text" readonly value="<?php echo $aut_ambiental ?>">
            <label for="autoridad-ambiental_m" class="active">Autoridad ambiental</label>
          </div>

        </div>

      </span>
    </div>
  </li>


  <li>
    <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>2. Datos del negocio</div>
    <div class="collapsible-body">
      <span>
        <div class="row" style="text-align: center;background-color: #bdbdbd;">2. Datos del negocio</div>

        <div class="row">  <div class="input-field col s12 m4 l4" id="person">

          <select name="t_persona" id="t_persona" class="validate">
            <!-- <option disabled selected>Seleccione...</option> -->
            <?php 
            $s="select id,nombre from tipo_persona order by id";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                if ($rw['id'] == $tipo_persona) {
                 echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>"; 
               }else{
                 echo"<option value='$rw[id]'>$rw[nombre]</option>";
               }


             }         
           }
           ?>
         </select>
         <label >Tipo de persona</label>  

       </div>

       <div class="input-field col s12 m4 l4" id="identifica">
        <select name="t_identificacion" id="t_identificacion" class="validate">
          <!-- <option disabled selected>Seleccione...</option> -->
          <?php 
          $s="select id,nombre from tipo_identificacion order by id";
          $r= mysqli_query($conn,$s) or die("Error");
          if(mysqli_num_rows($r)>0){
            while($rw=mysqli_fetch_assoc($r)){
              if ($rw['id'] == $tipo_identificacion) {
                echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";    
              }else{
                echo"<option value='$rw[id]'>$rw[nombre]</option>";
              }
            }         
          }
          ?>
        </select>
        <label>Tipo de identificacion</label>
      </div>

      <div class="input-field col s12 m4 l4">
        <input id="identificacion" name="identificacion" type="text" class="validate" value="<?php echo $identificacion ?>"> 
        <label for="identificacion" class="active">Identificación *</label>

      </div>
    </div>

    <div class="row">

      <div class="input-field col s12 m12 l12">
        <input id="razon_social" name="razon_social" type="text" class="validate" value="<?php echo $razon_social; ?>">
        <label for="razon_social" class="active">Razón Social *  </label>
      </div>

    </div>


    <div class="row">

      <div class="input-field col s12 m4 l4">
        <input id="representante" name="representante" type="text" class="validate" value="<?php echo $nombre ?>">
        <label for="representante" class="active">Nombre de representante Legal *</label>
      </div>

      <div class="input-field col s12 m4 l4">
        <input id="documento" name="documento" type="number" class="validate" value="<?php echo $documento ?>" >
        <label for="documento" class="active">Identificación *</label>
      </div>

      <div class="input-field col s12 m4 l4">
        <input id="correo" name="correo" type="email" class="validate" value="<?php echo $correo ?>">
        <label for="correo" class="active">E-mail</label>
      </div>

    </div>

    <div class="row">

      <div class="input-field col s12 m4 l4">
        <input id="fijo" name="fijo" type="number" class="validate" value="<?php echo $fijo ?>">
        <label for="fijo" class="active">Teléfono fijo</label>
      </div>


      <div class="input-field col s12 m4 l4">
        <input id="celular" name="celular" type="number" class="validate" value="<?php echo $celular ?>">
        <label for="celular" class="active">Celular</label>
      </div>
      <div class="input-field col s12 m4 l4">
        <input id="direccion_c" name="direccion_c" type="text" class="validate" value="<?php echo $direccion ?>">
        <label for="direccion_c" class="active">Direccion de Correspondencia</label>
      </div>

    </div>

    <div class="row">
      <div class="input-field col s12 m4 l4 disabled">
        <input id="vereda" name="vereda" type="text" class="validate" value="<?php echo $vereda ?>">
        <label for="vereda" class="active">Vereda</label>
      </div>

      <div class="input-field col s12 m8 l8">
        <input id="pw_rd" name="pw_rd" type="text" class="validate" value="<?php echo $pagina_web ?>">
        <label for="pw_rd" class="active">Pagina Web y/o Redes Sociales</label>
      </div>


    </div>

    <div class="row">

     <div class="input-field col s12 m4 l4">
      <input id="longitud" name="longitud" type="text" class="validate" value="<?php echo $longitud ?>">
      <label for="longitud" class="active">Longitud</label>
    </div>

    <div class="input-field col s12 m4 l4">
      <input id="Latitud" name="Latitud" type="text" class="validate" value="<?php echo $latitud ?>">
      <label for="Latitud" class="active">Latitud</label>
    </div>

    <div class="input-field col s12 m4 l4">
      <input id="altitud" name="altitud" type="text" class="validate" value="<?php echo $altitud ?>">
      <label for="altitud" class="active">Altitud (m.s.n.m)</label>
    </div>
  </div>

  <div class="divider teal darken-4" style="margin-bottom: 10px;height: 10px;"></div>

  <div class="row">

    <div class="input-field col s12 m3 l3">

     <select id="organizacion" name="organizacion">
      <?php 
      $s="SELECT id,nombre from si_no WHERE id != 4 ";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $organizacion) {
            echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";          
          }else{
            echo"<option value='$rw[id]'>$rw[nombre]</option>";
          }
        }         
      }
      ?>
    </select>
    <label>Organización</label>  

  </div>

  <div class="input-field col s12 m3 l3">
    <input id="num_asociados" name="num_asociados" type="number" class="validate" value="<?php echo $num_socios ?>">
    <label for="num_asociados" class="active">Número de socios</label>
  </div>

  <div class="input-field col s12 m3 l3">      
    <select id="famiempresa" name="famiempresa">
      <!-- <option disabled selected>Seleccione...</option> -->
      <?php 
      $s="SELECT id,nombre from si_no WHERE id != 4";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $famiempresa) {
           echo"<option value='$rw[id]' selected=selected>$rw[nombre]</option>";
         }else{
           echo"<option value='$rw[id]'>$rw[nombre]</option>";
         }

       }         
     }
     ?>
   </select>
   <label>Famiempresa</label>                  
 </div>

 <div class="input-field col s12 m3 l3">      
  <select id="tamaño_empresa" name="tamaño_empresa">
    <!-- <option disabled selected>Seleccione...</option> -->
    <?php 
    $s="select id,nombre from tamaño_empresa order by id";
    $r= mysqli_query($conn,$s) or die("Error");
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_assoc($r)){
        if ($rw['id'] == $tamaño_empresa) {
          echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";          
        }else{
          echo"<option value='$rw[id]'>$rw[nombre]</option>"; 
        }
      }         
    }
    ?>
  </select>
  <label>Tamaño de la Empresa</label>                  
</div>


</div>


<div class="row">
  <div class="input-field col s12 m2 l2">
    <select id="etapa_empresa" name="etapa_empresa">
      <?php 
      $s="select id,nombre from etapa_empresa order by id ";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $etapa_empresa) {
           echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";     
         }else{
          echo"<option value='$rw[id]'>$rw[nombre]</option>";     
        }


      }         
    }
    ?>
  </select>
  <label>Etapa empresarial</label>
</div>


<div class="input-field col s12 m2 l2">
  <input id="ano_func" name="ano_func" type="number" class="validate" value="<?php echo $año_funcionamiento ?>">
  <label for="ano_func" class="active">Años de funcionamiento</label>
</div>

<div class="input-field col s12 m3 l3">
  <select id="tipo_personeria" name="tipo_personeria">
    <?php 
    $s="select id,nombre from tipo_personeria order by id ";
    $r= mysqli_query($conn,$s) or die("Error");
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_assoc($r)){
        if ($rw['id'] == $personeria) {
         echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>"; 
       }else{
        echo"<option value='$rw[id]'>$rw[nombre]</option>"; 
      }

    }         
  }
  ?>
</select>
<label>Tipo de personería jurídica</label>
</div>

<div class="input-field col s12 m5 l5 active">
  <input id="ano_func_des_camara" name="ano_func_des_camara" type="number" class="validate" value="<?php echo $año_desp_registro ?>">
  <label for="ano_func_des_camara" class="active">Años de funcionamiento después de registro ante cámara</label>
</div>

</div>

<div class="divider teal darken-4" style="margin-bottom: 10px;height: 10px;"></div>

<div class="row">

  <div class="input-field col s12 m3 l3">
    <select id="consejo_com" name="consejo_com">

      <?php 
      $s="SELECT id,nombre from si_no WHERE id != 4 ";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $consejo_si_no) {
           echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
         }else{
          echo"<option value='$rw[id]'>$rw[nombre]</option>";
        }

      }         
    }
    ?>
  </select>
  <label>Consejo comunitario</label>
</div>

<div class="input-field col s12 m3 l3 ">
  <input id="nombre_consejo" name="nombre_consejo" type="text" class="validate" value="<?php echo $consejo_nombre; ?>">
  <label for="nombre_consejo" class="active">Nombre</label>
</div>

<div class="input-field col s12 m3 l3">
  <select id="junta" name="junta">
    <?php 
    $s="SELECT id,nombre from si_no WHERE id != 4 ";
    $r= mysqli_query($conn,$s) or die("Error");
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_assoc($r)){
        if ($rw['id'] == $junta_si_no) {
          echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
        }else{
          echo"<option value='$rw[id]'>$rw[nombre]</option>";
        }

      }         
    }
    ?>
  </select>
  <label>Junta de acción comunal</label>
</div>

<div class="input-field col s12 m3 l3 ">
  <input id="nombre_junta" name="nombre_junta" type="text" class="validate" value="<?php echo $junta_nombre; ?>">
  <label for="nombre_junta" class="active">Nombre</label>
</div>

</div>

<div class="row">

  <div class="input-field col s12 m5 l5">
    <select id="grupo_etnico" name="grupo_etnico">

      <?php 
      $s="select id,nombre from grupo_etnico_op order by id ";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $etnico_op) {
            echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
          }else{
            echo"<option value='$rw[id]'>$rw[nombre]</option>";
          }


        }         
      }
      ?>
    </select>
    <label>Grupo étnico</label>
  </div>

  <div class="input-field col s12 m7 l7 ">
    <input id="nombre_etnico" name="nombre_etnico" type="text" class="validate" value="<?php echo $etnico_nombre; ?>">
    <label for="nombre_etnico" class="active">Nombre del grupo étnico</label>
  </div>

</div>

<div class="row">

  <div class="input-field col s12 m3 l3">
    <select id="cabildo" name="cabildo">

      <?php 
      $s="SELECT id,nombre from si_no WHERE id != 4 ";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $cabildo_si_no) {
           echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
         }else{
          echo"<option value='$rw[id]'>$rw[nombre]</option>";
        }

      }         
    }
    ?>
  </select>
  <label>Cabildo</label>
</div>

<div class="input-field col s12 m3 l3 ">
  <input id="nombre_cabildo" name="nombre_cabildo" type="text" class="validate" value="<?php echo $cabildo_nombre; ?>" >
  <label for="nombre_cabildo" class="active">Nombre</label>
</div>

<div class="input-field col s12 m3 l3">
  <select id="tcpi" name="tcpi">
    <option>Seleccione...</option>
    <?php 
    $s="select id,nombre from tcip_op order by id ";
    $r= mysqli_query($conn,$s) or die("Error");
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_assoc($r)){
        if ($rw['id'] == $tcpi_op) {
         echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";  
       }else{
        echo"<option value='$rw[id]'>$rw[nombre]</option>";  
      }

    }         
  }
  ?>
</select>
<label>Trritorios colectivos de pueblos indígenas</label>
</div>

<div class="input-field col s12 m3 l3 ">
  <input id="nombre_territorio" name="nombre_territorio" type="text" class="validate" value="<?php echo $tcpi_nombre; ?>">
  <label for="nombre_territorio" class="active">Nombre</label>
</div>

</div>


</span>
</div>
</li>
<li>










  <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>2. Descripción del Negocio Verde</div>
  <div class="collapsible-body"><span>

    <div class="row" style="text-align: center;background-color: #bdbdbd; margin-bottom: 0px">3. Descripción del Negocio Verde</div>
    <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">Descripción del negocio (Bien o servicio). Por favor incluir el impacto ambiental positivo (requisito mínimo y esencial para ser negocio verde, ver dettale en información complementaria) y el impacto socio-cultural positvo generado.</div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="desc_negocio" name="desc_negocio" class="materialize-textarea"><?php echo $desc_negocio; ?></textarea>
        <label for="desc_negocio"></label>
      </div>
    </div>

  </span></div>
</li>


<li>
  <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>4. Categoria de Negocios Verdes</div>
  <div class="collapsible-body"><span>



    <div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">4. Categoria de Negocios Verdes</div>
    <div class="row">
      <div class="input-field col s12 m4 l4" style="margin-top: 30px" id="categoria_valida">
        <select id="categoria" name="categoria">
          <option disabled selected>Seleccione...</option>
          <?php 
          $s="select id,nombre from categoria order by id";
          $r= mysqli_query($conn,$s) or die("Error");
          if(mysqli_num_rows($r)>0){
            while($rw=mysqli_fetch_assoc($r)){
              if ($rw['id'] == $categoria_id) {
                echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
              }else{
               echo"<option value='$rw[id]'>$rw[nombre]</option>";
             }

           }         
         }
         ?>
       </select>
       <label ">Categoria</label>
     </div>  

     <div class="input-field col s12 m4 l4" style="margin-top: 30px" id="sector_valida">
      <select id="sector" name="sector">
        <?php 
        $s="select id,nombre from sector order by id";
        $r= mysqli_query($conn,$s) or die("Error");
        if(mysqli_num_rows($r)>0){
          while($rw=mysqli_fetch_assoc($r)){
            if ($rw['id'] == $sector_id) {
              echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
            }else{
             echo"<option value='$rw[id]'>$rw[nombre]</option>";
           }

         }         
       }
       ?>
     </select>
     <label ">Sector</label>
   </div>

   <div class="input-field col s12 m4 l4" style="margin-top: 30px" id="subsector_valida">
    <select id="subsector" name="subsector" >
      <?php 
      $s="select id,nombre from subsector order by id";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $subsector_id) {
            echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
          }else{
           echo"<option value='$rw[id]'>$rw[nombre]</option>";
         }

       }         
     }
     ?>
   </select>
   <label ">Subsector</label>
 </div>
</div>

<div class="divider teal darken-4" style="height: 10px"></div>

<div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1. Bienes y servicios. Escoja alguna de las opciones o ambas. Describa el bien o servicio lider, y los otros servicios y bienes</div>

<div class="row">
  <div class="input-field col s12 m6 l6">
    <select id="tipo_bien" name="tipo_bien">
      <!-- <option disabled selected>Seleccione...</option> -->
      <?php 
      $s="select id,nombre from bien_serv_op order by id";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
          if ($rw['id'] == $bien_serv_op) {
            echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";
          }else{
            echo"<option value='$rw[id]'>$rw[nombre]</option>";
          }

        }         
      }
      ?>
    </select>
    <label>Seleccione las siguientes opciones</label>
  </div>  

  <div class="input-field col s12 m6 l6 ">
    <input id="bien_lider" name="bien_lider" type="text" class="validate" value="<?php echo $b_lider ?>">
    <label for="bien_lider" class="active">Bien o servicio lider</label>
  </div>
  <?php 
  $i = 0;
  $s="SELECT nombre from bienes_servicios WHERE empresa_id = '$_POST[empresa_id]' and lider =''";
  $r= mysqli_query($conn,$s) or die('Error');
  if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
      $i++;
      echo " <div class='input-field col s12 m12 l12' id='bien_servi'  >
        <input id='bien_m$i' name='bienes_m[]' type='text' class='validate' value='$rw[nombre]' >
        <label for='bien_m$i' class='active'>Bien y/o servicio $i</label>
      </div>";
    }
  }
      ?>

    </div>

    <div class="divider teal darken-4" style="height: 10px"></div>

    <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">2. Actividades realizadas por la empresa</div>



    <?php 
    $i = "";
    $s="SELECT actividad_empresa.id, actividad_item.id as act_item, actividad_item.nombre,actividad_empresa.si_no_actividad_id, actividad_empresa.direccion, actividad_empresa.municipio_id,actividad_empresa.tipo_tenencia_id, actividad_empresa.area, actividad_empresa.pot_si_no_id,actividad_empresa.observacion from actividad_empresa 
    INNER JOIN actividad_item ON actividad_item.id = actividad_empresa.actividad_item_id
    WHERE actividad_empresa.empresa_id = '$_POST[empresa_id]'";
    $r= mysqli_query($conn,$s) or die("Error");
    if(mysqli_num_rows($r)>0){
      while($rw=mysqli_fetch_assoc($r)){
       $i= $i+1;
       echo"
       <div class='row'>
       <input type='hidden' id='t".$i."'  name='actividad_emp_hidden[]' value='$rw[act_item]' />


       <div class='input-field col s12 m3 l3'  >
       <select id='actividad_empresa_si_no' name='actividad_empresa_si_no[]'>
       <option disabled selected>Seleccione...</option>";

       $s1="select id,nombre from si_no order by id";
       $r1= mysqli_query($conn,$s1) or die("Error");
       if(mysqli_num_rows($r1)>0){
        while($rw1=mysqli_fetch_assoc($r1)){
          if ($rw1[id] == $rw['si_no_actividad_id']) {
            echo"<option value='$rw1[id]' selected='selected'>$rw1[nombre]</option>"; 
          }else{
            echo"<option value='$rw1[id]'>$rw1[nombre]</option>"; 
          }
                   
        }         
      }

      echo "</select>
      <label>$rw[nombre]</label>
      </div> 

      <div class='input-field col s12 m3 l3'>
      <input id='direccion_actividad' name='direccion_actividad[]' type='text' class='validate' value='$rw[direccion]' >
      <label for='direccion_actividad' class='active'>Dirección</label>
      </div>";
      
      $departamento_id = "";
      $s9="SELECT departamento_id from municipio WHERE id = '$rw[municipio_id]'  order by id";
      $r9= mysqli_query($conn,$s9) or die("Error");
      if(mysqli_num_rows($r9)>0){
        while($rw9=mysqli_fetch_assoc($r9)){
           $departamento_id = $rw9['departamento_id'];       
        }         
      }


     echo "<div class='input-field col s12 m3 l3' >
      <select id='actividad_empresa_depto".$i."' name='actividad_empresa_depto[]'>
      <option disabled selected>Seleccione...</option>";

      $s2="SELECT id,nombre from departamento order by id";
      $r2= mysqli_query($conn,$s2) or die("Error");
      if(mysqli_num_rows($r2)>0){
        while($rw2=mysqli_fetch_assoc($r2)){
          if ($rw2['id'] == $departamento_id) {
            echo"<option value='$rw2[id]' selected='selected'>$rw2[nombre]</option>"; 
          }else{
            echo"<option value='$rw2[id]'>$rw2[nombre]</option>"; 
          }
                   
        }         
      }

      echo" </select>
      <label>Departamento</label>
      </div> 

      <div class='input-field col s12 m3 l3'  >
      <select id='actividad_empresa_municipio".$i."' name='actividad_empresa_municipio[]'>";

       $s10="SELECT id,nombre from municipio order by id";
      $r10= mysqli_query($conn,$s10) or die("Error");
      if(mysqli_num_rows($r10)>0){
        while($rw10=mysqli_fetch_assoc($r10)){
          if ($rw10['id'] == $rw['municipio_id']) {
            echo"<option value='$rw10[id]' selected='selected'>$rw10[nombre]</option>"; 
          }else{
            echo"<option value='$rw10[id]'>$rw10[nombre]</option>"; 
          }
                   
        }         
      }
     echo "</select>
      <label>Municipio</label>
      </div> 
      <div class='input-field col s12 m3 l3'  >
      <select id='' name='actividad_empresa_tenencia[]'>";

      $s5="select id,nombre from tipo_tenencia order by id";
      $r5= mysqli_query($conn,$s5) or die("Error");
      if(mysqli_num_rows($r5)>0){
        while($rw5=mysqli_fetch_assoc($r5)){
          if ($rw5['id'] == $rw['tipo_tenencia_id']) {
             echo"<option value='$rw5[id]' selected='selected'>$rw5[nombre]</option>"; 
          }else{
             echo"<option value='$rw5[id]'>$rw5[nombre]</option>"; 
          }
                  
        }         
      }

      echo "</select>
      <label>Tipo de tenecia</label>
      </div> 

      <div class='input-field col s12 m3 l3'>
      <input id='actividad_empresa_area' name='actividad_empresa_area[]' type='text' class='validate' value='$rw[area]'>
      <label for='actividad_empresa_area' class='active'>Area del predio (m2)</label>
      </div> 

      <div class='input-field col s12 m3 l3'  >
      <select id='' name='actividad_empresa_pot[]'>";

      $s6="SELECT id,nombre from si_no WHERE id != 4";
      $r6= mysqli_query($conn,$s6) or die("Error");
      if(mysqli_num_rows($r6)>0){
        while($rw6=mysqli_fetch_assoc($r6)){
          if ($rw6['id'] == $rw['pot_si_no_id']) {
           echo"<option value='$rw6[id]' selected='selected'>$rw6[nombre]</option>";  
          }else{
            echo"<option value='$rw6[id]'>$rw6[nombre]</option>";  
          }
                  
        }         
      }

      echo" </select>
      <label>Cumple POT?</label>
      </div> 

      <div class='input-field col s12 m3 l3'>
      <input id='actividad_empresa_obs' name='actividad_empresa_obs[]' type='text' class='validate' value='$rw[observacion]' >
      <label for='actividad_empresa_obs' class='active'>Observación</label>
      </div>

      </div>
      <div class='divider teal darken-4' style='margin-bottom:10px'></div>

      ";

    }         
  }
  ?>




  <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">Tener en cuenta que de acuerdo a las indicaciones de la guia de verificacion un negocio verde no es aquel que se enfoca unicamente en la comercializacion</div>

  <div class="divider teal darken-4" style="height: 10px"></div>

  <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">3. Observaciones generales</div>

  <div class="row">
    <div class="input-field col s12">
      <textarea id="obs_generales" name="obs_generales" class="materialize-textarea">
        <?php echo $observacion_general ?>
      </textarea>
      <label for="obs_generales"></label>
    </div>
  </div>

</span></div>
</li>





<li>
  <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>5. Información del verificador y empresario</div>
  <div class="collapsible-body">
    <span>     
      <div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">5. Información del verificador y empresario</div>
      <div class="row" style="text-align: center;background-color: #e0e0e0;">Verificador</div>

      <?php 
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
       ?>
      <div class="row">
        <div class="input-field col s12 m4 l3">
          <input type="text" name="verificador" id="verificador" value="<?php echo $nombre ?>">
          <label for="verificador" class="active">Nombre del verificador</label>
        </div>
        <div class="input-field col s12 m4 l3">
          <input type="text" name="entidad_verificador" id="entidad_verificador" value="<?php echo $entidad ?>">
          <label for="entidad_verificador" class="active">Entidad</label>
        </div>
        <div class="input-field col s12 m4 l3">
          <input type="text" name="area_verificador" id="area_verificador" value="<?php echo $area ?>">
          <label for="area_verificador" class="active">Area</label>
        </div>
        <div class="input-field col s12 m4 l3">
          <input type="text" name="cargo_verificador" id="cargo_verificador" value="<?php echo $cargo ?>">
          <label for="cargo_verificador" class="active">Cargo</label>
        </div>
      </div>

      <div class="row" style="text-align: center;background-color: #e0e0e0;">Empresario</div>
      <div class="row">
        <div class="input-field col s12 m3 l3">
          <input type="text" name="entrevistado" id="entrevistado" value="<?php echo $nombre_empresario ?>">
          <label for="entrevistado" class="active">Nombre del entrevistado</label>
        </div>
        <div class="input-field col s12 m3 l3">
          <input type="text" name="identificacion_entrevistado" id="identificacion_entrevistado" value="<?php echo $documento_empresario ?>">
          <label for="identificacion_entrevistado" class="active">Identificación</label>
        </div>
        <div class="input-field col s12 m3 l3">
          <input type="text" name="cargo_entrevistado" id="cargo_entrevistado" value="<?php echo $cargo_empresario ?>">
          <label for="cargo_entrevistado" class="active">Cargo</label>
        </div>
        <div class="input-field col s12 m3 l3" >
          <select id="" name="">

            <?php 
            $s="SELECT id,nombre from si_no WHERE id != 4";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                if ($rw['id'] == $carta_empresario) {
                 echo"<option value='$rw[id]' selected='selected'>$rw[nombre]</option>";  
                }else{
                  echo"<option value='$rw[id]'>$rw[nombre]</option>";  
                }
                        
              }         
            }
            ?>
          </select>
          <label ">Cuneta con carta de consentimiento?</label>
        </div>  
      </div>
    </span>
  </div>
</li>

</ul>

<div class='input-field col s12 m12 l12 green lighten-5 ' id='div_empresa' style='border: 1px solid green'>
  <h6>NOTA: Esta imagen será utilizada en caso de que el emprendimiento cumpla con mas del 50% luego de haber aplicado todos los criterios de evaliación para ser visualizada en la pagina principal</h6>
</div>
<?php 
  $s = "SELECT * FROM img_empresa WHERE empresa_id='$_POST[empresa_id]'";
$r= mysqli_query($conn,$s);
$imagen ="";
while ($rw = mysqli_fetch_assoc($r)) {
  $imagen = $rw['imagen'];
}
if ($imagen == "") { 
echo "<div class='row'>
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
  echo "<div class='row'>
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
 ?>

 <button type='submit'  class='waves-effect yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar_emp'><i class='material-icons right'>create</i>Modificar</button>

<script type='text/javascript' src='js/accion_registro.js'></script>

<script type='text/javascript'>
  $(document).ready(function(){
    $('select').material_select();
    $('.collapsible').collapsible();

    $('.activar').addClass('active')

  })

</script>


















