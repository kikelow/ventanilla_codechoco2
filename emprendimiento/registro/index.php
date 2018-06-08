<?php 
 
 if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../conexion.php');
        
 
    }
 ?>
<div style="margin-top: 100px;"></div>
<div class="col s12 m12 l12">
  <div class="card grey lighten-4 "  style="height: auto;display:inline-block;width: 100%;">

    <div class="card-content black-text">
<h4>Formato de inscripción</h4>
<form id="form_registro" >
 <ul class="collapsible" data-collapsible="accordion">
    <li id="s">
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>1. Información General</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">1. Información General</div>
            <div class="row">

            <div class="input-field col s12 m4 l4" id="person">
    
                <select name="t_persona" id="t_persona" class="validate">
                  <option disabled selected>Seleccione...</option>
                  <?php 
                    $s="select id,nombre from tipo_persona order by id";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label >Tipo de persona</label>  
                        
            </div>

            <div class="input-field col s12 m4 l4" id="identifica">
                <select name="t_identificacion" id="t_identificacion" class="validate">
                  <option disabled selected>Seleccione...</option>
                  <?php 
                    $s="select id,nombre from tipo_identificacion order by id";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Tipo de identificacion</label>
            </div>

            <div class="input-field col s12 m4 l4">
                  <input id="identificacion" name="identificacion" type="text" class="validate" > 
                  <label for="identificacion">Identificación *</label>

            </div>
            </div>

            <div class="row">

            <div class="input-field col s12 m12 l12">
                  <input id="razon_social" name="razon_social" type="text" class="validate">
                  <label for="razon_social">Razón Social *</label>
            </div>

            </div>
            <div class="divider"></div>

            <div class="row">
              
            <div class="input-field col s12 m4 l4">
                  <input id="representante" name="representante" type="text" class="validate">
                  <label for="representante">Representante Legal *</label>
            </div>

            <div class="input-field col s12 m4 l4">
                  <input id="documento" name="documento" type="number" class="validate">
                  <label for="documento">Documento *</label>
            </div>

            <div class="input-field col s12 m4 l4">
                  <input id="correo" name="correo" type="email" class="validate">
                  <label for="correo">Correo</label>
            </div>

            </div>

            <div class="row">
              
            <div class="input-field col s12 m4 l4">
                  <input id="fijo" name="fijo" type="number" class="validate">
                  <label for="fijo">Teléfono fijo</label>
            </div>


            <div class="input-field col s12 m4 l4">
                  <input id="celular" name="celular" type="number" class="validate">
                  <label for="celular">Celular</label>
            </div>
            <div class="input-field col s12 m4 l4">
                  <input id="direccion_c" name="direccion_c" type="text" class="validate">
                  <label for="direccion_c">Direccion de Correspondencia</label>
            </div>

            </div>

            <div class="row">
             
            <div class="input-field col s12 m2 l2" id="region_valida">
                <select name="region" id="region">
                  <option disabled selected>Seleccione...</option>
                  <?php 
                    
                    $s="select id,nombre from region  ";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Region</label>
            </div>

            <div class="input-field col s12 m2 l2" id="depto_valida">
                <select id="departamento" name="departamento" class="dep">
                  
                </select>
                <label>Departamento</label>
            </div>

            <div class="input-field col s12 m3 l3" id="municipio_valida">
                <select id="municipio" name="municipio">
                </select>
                <label>Municipio</label>
            </div>

            <div class="input-field col s12 m2 l2 disabled">
                <input id="vereda" name="vereda" type="text" class="validate">
                  <label for="vereda">Vereda</label>
            </div>

            <div class="input-field col s12 m3 l3">
                  <input id="direccion_p" name="direccion_p" type="text" class="validate">
                  <label for="direccion_p">Direccion Predio</label>
            </div>

            </div>

            <div class="row">

            <div class="input-field col s12 m3 l3">
                  <input id="autoridad_ambiental" name="autoridad_ambiental" type="text" class="validate" value="Codechocó" readonly>
                  <label for="autoridad-ambiental">Autoridad ambiental</label>
            </div>

            <div class="input-field col s12 m3 l3">
                  <input id="altitud" name="altitud" type="text" class="validate">
                  <label for="altitud">Altitud (m.s.n.m)</label>
            </div>

            <div class="input-field col s12 m3 l3">
                  <input id="coordenada_n" name="coordenada_n" type="text" class="validate">
                  <label for="coordenada_n">Coordenada N</label>
            </div>

            <div class="input-field col s12 m3 l3">
                  <input id="coordenada_w" name="coordenada_w" type="text" class="validate">
                  <label for="coordenada_w">Cordenada W</label>
            </div>

            </div>

            <div class="row">
            
            <div class="input-field col s12 m3 l3">

                 <select id="asosiacion" name="asosiacion">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Asociación</label>  

            </div>
              
            <div class="input-field col s12 m3 l3">
                  <input id="num_asociados" name="num_asociados" type="number" class="validate">
                  <label for="num_asociados">Numero de asociados</label>
            </div>

            <div class="input-field col s12 m3 l3">
                  <input id="area" name="area" type="text" class="validate">
                  <label for="area">Area total predio (Ha)</label>
            </div>
                
            <div class="input-field col s12 m3 l3">

                  <select id="pot" name="pot">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                  </select>
                  <label>Cumple con el POT municipal</label>  

            </div>

            </div>

            <div class="row">
              
            <div class="input-field col s12 m6 l6">      
                  <select id="famiempresa" name="famiempresa">
                    <!-- <option disabled selected>Seleccione...</option> -->
                    <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                  </select>
                  <label>Famiempresa</label>                  
            </div>

            <div class="input-field col s12 m6 l6">      
                  <select id="tamaño_empresa" name="tamaño_empresa">
                    <!-- <option disabled selected>Seleccione...</option> -->
                    <?php 
                    $s="select id,nombre from tamaño_empresa order by id";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                  </select>
                  <label>Tamaño de la Empresa</label>                  
            </div>
              
            </div>


                  </span></div>
  </li>


  <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>2. Descripción del Negocio Verde</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">2. Descripción del Negocio Verde</div>
      <div class="row">
      <div class="input-field col s12">
                <textarea id="desc_negocio" name="desc_negocio" class="materialize-textarea"></textarea>
                <label for="desc_negocio">Descripción del negocio (Bien o servicio)</label>
              </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m12 l12">
                <textarea id="desc_imp_ambiental" name="desc_imp_ambiental" class="materialize-textarea"></textarea>
                <label for="desc_imp_ambiental">Caracteristicas generales de su negocio verde (incluir el impacto ambiental positivo generado)</label>
              </div>
      </div>

      </span></div>
    </li>

  
    
    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>3. Categoria de Negocios Verdes</div>
      <div class="collapsible-body"><span>
        
        

        <div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">3. Categoria de Negocios Verdes</div>
        <div class="row">
        <div class="input-field col s12 m4 l4" style="margin-top: 30px" id="categoria_valida">
          <select id="categoria" name="categoria">
            <option disabled selected>Seleccione...</option>
                  <?php 
                    $s="select id,nombre from categoria order by id";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                  </select>
                  <label ">Categoria</label>
                </div>  

          <div class="input-field col s12 m4 l4" style="margin-top: 30px" id="sector_valida">
          <select id="sector" name="sector">
                  
                  </select>
                  <label ">Sector</label>
                </div>

          <div class="input-field col s12 m4 l4" style="margin-top: 30px" id="subsector_valida">
          <select id="subsector" name="subsector" >
                  
                  </select>
                  <label ">Subsector</label>
        </div>
      </div>


      </span></div>
    </li>


    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>4. Información Empresa</div>
      <div class="collapsible-body"><span>
        

      <div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">4. Información Empresa</div>
      <div class="row">
        <div class="col s12 m3 l3" style="border: 1px solid">
            1.Número de socios
            <div class="divider"></div>
            <div style="">
              
              <div class="input-field col s12 m4 l4">
                <input id="masculino_1" name="masculino_1" type="number" class="validate">
                <label for="masculino_1">Masculino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="femenino_1" name="femenino_1" type="number" class="validate">
                <label for="femenino_1">Femenino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input value="0" id="total_1" type="number" class="validate" readonly>
                <label for="total_1">Total</label>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l6" style="border: 1px solid;">
            2.Cuantos socios vinculados laboralmente como empleados
            <div class="divider"></div>
            <div style="">
              
              <div class="input-field col s12 m4 l3">
                <input id="masculino_2" name="masculino_2" type="number" class="validate">
                <label for="masculino_2">Masculino</label>
              </div>
              <div class="input-field col s12 m4 l3">
                <input id="femenino_2" name="femenino_2" type="number" class="validate">
                <label for="femenino_2">Femenino</label>
              </div>
              <div class="input-field col s12 m4 l3">
                <input disabled value="0" id="total_2" type="number" class="validate">
                <label for="total_2">Total</label>
                
              </div>
              <div class="col s12 m2 l2">
                <div id="mensaje1"></div>
              </div>
            </div>
          </div>

          <div class="col s12 m3 l3" style="border: 1px solid">
           3.Número de empleados
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m4 l4">
                <input id="masculino_3" name="masculino_3" type="number" class="validate">
                <label for="masculino_3">Masculino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="femenino_3" name="femenino_3" type="number" class="validate">
                <label for="femenino_3">Femenino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input disabled value="0" id="total_3" type="number" class="validate">
                <label for="total_3">Total</label>
              </div>
            </div>
          </div>
      </div>
        <div class="row">
          
          <div class="col s12 m12 l12" style="border: 1px solid">
            Edad (Indicar Nº de empleados)
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m4 l4">
                <input id="entre_18_30" name="entre_18_30" type="number" class="validate">
                <label for="entre_18_30">Entre 18-30</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="entre_30_50" name="entre_30_50" type="number" class="validate">
                <label for="entre_30_50">Entre 30-50</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="mayor_50" name="mayor_50" type="number" class="validate">
                <label for="mayor_50">Entre Mayores 50</label>
              </div>
            </div>
            <div id="mensaje_edad"></div>
          </div>

        </div>
        <!-- Para la edad -->
        <!-- Vinculacion -->
        <div class="row">
          <div class="col s12 m6 l6" style="border: 1px solid">
            Tipo de vinculacion laboral (Indicar Nº de empleos)
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m2 l2">
                <input id="indefinido" name="indefinido" type="number" class="validate">
                <label for="indefinido">Indefinido</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="definido" name="definido" type="number" class="validate">
                <label for="definido">Ter. definido</label>
              </div>
              <div class="input-field col s12 m7 l7">
                <input id="por_dias" name="por_dias" type="number" class="validate">
                <label for="por_dias">Por días (Jornales) promedio en el año</label>
              </div>
            </div>
            <div id="mensaje_vinculacion"></div>
          </div>
          <div class="col s12 m6 l6" style="border: 1px solid">
            Nivel educativo (Indicar Nº de empleados)
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m2 l2">
                <input id="primaria" name="primaria" type="number" class="validate">
                <label for="primaria">Primaria</label>
              </div>
              <div class="input-field col s12 m2 l2">
                <input id="bachillerato" name="bachillerato" type="number" class="validate">
                <label for="bachillerato">Bachillerato</label>
              </div>
              <div class="input-field col s12 m2 l2 ">
                <input id="tecnico" name="tecnico" type="number" class="validate">
                <label for="tecnico">Técnicio</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="universitario" name="universitario" type="number" class="validate">
                <label for="universitario">Universitario</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro" name="otro" type="number" class="validate">
                <label for="otro">Otro</label>
              </div>
            </div>
            <div id="mensaje_educativo"></div>
          </div>
        </div>
        <!-- Nivel educativo -->


        <div class="row" style="border: 1px solid"> 
             Condiciones especiales de los empleados
            <div class="divider"></div>
            <div class="input-field col s12 m6 l6">
                <select id="cmb_indigena" name="cmb_indigena">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Personas de comunidades indigenas</label>
            </div>

            <div class="input-field col s12 m6 l6">
                 <input id="indigena" name="indigena" type="number" class="validate">
                <label for="indigena">Nº de empleados</label>
            </div> 
          
        <div class="input-field col s12 m6 l6">
                  <select id="cmb_discapacitado" name="cmb_discapacitado">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Personas en situacion de discapacidad</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="discapacitado" name="discapacitado" type="number" class="validate">
                <label for="discapacitado">Nº de empleados</label>
            </div>  

         
          <div class="input-field col s12 m6 l6">
                  <select id="cmb_adulto" name="cmb_adulto">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Adultos mayores</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="adulto" name="adulto" type="number" class="validate">
                <label for="adulto">Nº de empleados</label>
            </div>      
        

          <div class="input-field col s12 m6 l6">    
                  <select id="cmb_madre_familia" name="cmb_madre_familia">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Madres cabeza de familia</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="madre_familia" name="madre_familia" type="number" class="validate">
                <label for="madre_familia">Nº de empleados</label>
            </div>      
          

          <div class="input-field col s12 m6 l6">          
                  <select id="cmb_reinsertados" name="cmb_reinsertados">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Reinsertados</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="reinsertados" name="reinsertados" type="number" class="validate">
                <label for="reinsertados">Nº de empleados</label>
            </div>             
          

            <div class="input-field col s12 m6 l6">          
                  <select id="cmb_desplazado" name="cmb_desplazado">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Desplazados</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="desplazado" name="desplazado" type="number" class="validate">
                <label for="desplazado">Nº de empleados</label>
            </div>  

          <div class="input-field col s12 m6 l6">
                  <select id="cmb_demografia_otro" name="cmb_demografia_otro">
                  <?php 
                    $s="select id,nombre from si_no order by id desc";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Otros</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="demografia_otro" name="demografia_otro" type="number" class="validate">
                <label for="demografia_otro">Nº de empleados</label>
            </div>            
        </div>
        <div class="row" style="text-align: center;background-color: #e0e0e0;margin-bottom: 0px;">Caracteristicas del negocio</div>
        <div class="row" style="border: 1px solid">
        <div class="col s12 m6 l6">
        <div class="col s12 m6 l3">Actividades realizadas por la empresa</div>
        <div class="col s12 m6 l9">
        <div class="row">
        <div class="col s12"></div>
        <?php 
            $i = "";
            $s="select id,nombre from actividad_item order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i= $i+1;
              echo"
              <p>
                <input type='checkbox' id='t".$i."'  name='actividad_emp[]' value='$rw[id]' />
                <label for='t".$i."'>$rw[nombre]</label>
                 <input type='hidden' id='t".$i."'  name='actividad_emp_hidden[]' value='$rw[id]' />
              </p>";

              }         
            }
        ?>
        </div>
        </div>
        </div>
        <div class="col s12 m6 l6">
        <div class="col s12 m6 l3">Etapa empresarial</div>
        <div class="col s12 m6 l9">
        <div class="row">
        <div class="input-field col s12 m12 l12">
                  <select id="etapa_empresa" name="etapa_empresa">
                  <?php 
                    $s="select id,nombre from etapa_empresa order by id ";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>Etapa empresarial</label>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="row" style="border: 1px solid">  
        <div class="col s12 m6 l3">Enliste los bienes y/o servicios del negocio</div>
        <div class="col s12 m6 l9">
        
        <div class="row">
        
        <div class="col s12"></div>
        
        <div class="input-field col s12 m12 l12" id="bien_servi">

          <input id="b1" name="b1" type="text" class="validate" >
          <label for="b1">Bien y/o servicio 1</label>
        </div>

        <div class="input-field col s12 m12 l12">
          <input id="b2" name="b2" type="text" class="validate" >
          <label for="b2">Bien y/o servicio 2</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <input id="b3" name="b3" type="text" class="validate" >
          <label for="b3">Bien y/o servicio 3</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <input id="b4" name="b4" type="text" class="validate" >
          <label for="b4">Bien y/o servicio 4</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <input id="b5" name="b5" type="text" class="validate" >
          <label for="b5">Bien y/o servicio 5</label>
        </div>

        <div class="input-field col s12 m12 l12">
          <input id="b_lider" name="b_lider" type="text" class="validate" >
          <label for="b_lider">Bien o servicio lider (No debe estar dentro de los bienes o servicios enlistados anteriormente )</label>
        </div>
        </div>
        </div>
        </div>


        <div class="row" style="border: 1px solid"> 
        <div class="col s12 m12 l12 center">Sobre la organización</div>
        <div class="divider"></div>
            <div class="input-field col s12 m6 l6">
                   <select id="cmb_legal" name="cmb_legal">
                  <?php 
                    $s="select id,nombre from si_no order by id desc ";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>¿Su organización está constituida legalmente (camara de comercio, DIAN)?</label>
            </div>
            <div class="input-field col s12 m6 l6">
                 <input id="legal" name="legal" type="text" class="validate">
                <label for="legal">Años de funcionamiento de la empresa</label>
            </div>    

        
        
        <div class="row" style="border-bottom: 1px solid"></div>
            <div class="input-field col s12 m5 l5">              
                 <select id="cmb_ope_actualidad" name="cmb_ope_actualidad">
                  <?php 
                    $s="select id,nombre from si_no order by id desc ";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                      }         
                    }
                  ?>
                </select>
                <label>¿su organización se encuentra operando en la actualidad?</label>
            </div>
            <div class="input-field col s12 m7 l7">
                 <input id="año_desp_registro" name="año_desp_registro" type="text" class="validate">
                <label for="año_desp_registro">¿Cuantos años de funcionamiento despues de registro ante camara y comercio? </label>
            </div>      
      
        </div>
      </span>
    </div>
    </li>


<li>
<div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>5. Información del verificador y empresario</div>
<div class="collapsible-body">
<span>     
<div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">5. Información del verificador y empresario</div>
<div class="row" style="text-align: center;background-color: #e0e0e0;">Empresario</div>
<div class="row">
  <div class="input-field col s12 m4 l4">
    <input type="text" name="entrevistado" id="entrevistado">
    <label for="entrevistado">Nombre de quien suministra la información</label>
  </div>
  <div class="input-field col s12 m4 l4">
    <input type="text" name="identificacion_entrevistado" id="identificacion_entrevistado">
    <label for="identificacion_entrevistado">Identificación</label>
  </div>
  <div class="input-field col s12 m4 l4">
    <input type="text" name="cargo_entrevistado" id="cargo_entrevistado">
    <label for="cargo_entrevistado">Cargo</label>
  </div>
</div>
</span>
</div>
</li>

<li>
<div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>6. Observaciones generales</div>
<div class="collapsible-body">
<span>     
<div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">6. Observaciones generales</div>
<div class="row">
  <div class="input-field col s12 m12 l12">
    <textarea id="observacion_general" name="observacion_general" class="materialize-textarea"></textarea>
    <label for="observacion_general">Observaciones Generales</label>
  </div>
</div>
</span>
</div>
</li>
</ul>
 <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="registrar_emp"><i class="material-icons right">add</i>Registrar emprendimiento</button>
</form>
</div>
</div>
</div>

 <script type="text/javascript" src="js/sweetalert.js"></script>
<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_registro.js"></script>

