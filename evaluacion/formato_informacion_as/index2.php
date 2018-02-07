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
              <input disabled="" type="text"  name="">
              <label for="disabled">Registro Invima</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input  type="text" name="v" id="last_name" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>

              <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Registro ICA</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>
          </div>

           <div class="row">
        <div class="input-field col s12 m3 l2">
               <label>Registro Nacional de Turismo</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>
          </div>
       
       <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Registro de Plantación Forestal</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
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
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>

              <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Concesión de Aguas</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>
          </div>

           <div class="row">
        <div class="input-field col s12 m3 l2">
               <label>Permiso de Vencimiento o Emiciones</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>
          </div>
       
       <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Permiso Tala de Árboles</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>
          </div>

          <div class="row">
          <div class="input-field col s12 m3 l2">
               <label>Permiso de Movilización</label>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
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
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
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
               <select>
                <option value="1">Aplica</option>
                <option value="2">No Aplica</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
               <select>
                <option value="1">Cumple</option>
                <option value="2">No Cumple</option>
              </select>
              </div>

              <div class="input-field col s12 m2 l2">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Vigencia</label>
              </div>

              <div class="input-field col s12 m3 l4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Observacion</label>
              </div>
      </div>
    </div>
        
          
                  </span></div>
  </li>
  <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>2. Información Sobre Certificaciones</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">2. Información Sobre Certificaciones</div>
        <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert1" />
                <label for="cert1">Certificación Orgánica</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert2" />
                <label for="cert2">Comercio Justo</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert3" />
                <label for="cert3">Análisis de Peligros y Puntos Críticos de Control (APPCC</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert4" />
                <label for="cert4">Buenas Practicas de Manufactura (BPM)</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
        </div>

         <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert5" />
                <label for="cert5">Buenas Practicas Agrícolas (BPA)</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert6" />
                <label for="cert6">Buenas Practicas Pecuarias</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m4 l3">
              <p>
                <input type="checkbox" id="cert7" />
                <label for="cert7">Rainforest Alliance</label>
              </p>
            </div>
            <div class="input-field col s12 m3 l2">
              <select>
                <option value="1">Propuesta</option>
                <option value="2">En Proceso</option>
                <option value="3">Emitida</option>
              </select>
              <label>Etapa</label>
            </div>
            <div class="input-field col s12 m2 l2">
              <label for="desc">Vigencia</label>
              <input name="Vigencia" type="text" id="Vigencia" />
            </div>
            <div class="input-field col s12 m3 l5">
              <label for="desc">Descripcion</label>
              <input name="desc1" type="text" id="desc1" />
            </div>
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
            
                    <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="rr" />
                          <label for="rr">Sistemas silvopastoriles</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div>    

        
                    <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s1" />
                          <label for="s1">Sistemas silvicultura</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                    <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s2" />
                          <label for="s2">Agroforestería</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s3" />
                          <label for="s3">Cultivos mixtos</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 


                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s4" />
                          <label for="s4">Cercas vivas /Barreras rompevientos /Corredores de conectividad de bosques</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s5" />
                          <label for="s5">Bosques para protección de nacimientos de agua, quebradas, ríos y lagunas</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div>




                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s6" />
                          <label for="s6">Cercas o aislamiento para protección de nacimientos de agua, quebradas, ríos y lagunas</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s7" />
                          <label for="s7">Buen uso de los recursos hídricos</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s8" />
                          <label for="s8">Control biologico de plagas</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                    <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s9" />
                          <label for="s9">Fertilización orgánica</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 


                    <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s10" />
                          <label for="s10">Labranza mínima</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div>



                    <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s11" />
                          <label for="s11">Uso de fuentes alternativas de energia</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 



                     <div class="input-field col s12 m4 l5">
                          <input type="checkbox" id="s12" />
                          <label for="s12">Uso de practicas y/o tecnologias bajas en carbono</label>
                    </div>
                        
                    <div class="input-field col s12 m4 l2 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>

                     <div class="input-field col s12 m4 l5">
                        <input  id="descrip" type="text" class="validate">
                        <label for="descrip">Descripción</label>
                    </div> 
            </div>






            <div class="row" style="border: 1px solid">
                  <p>Área de los ecosistemas</p> 
                  <div class="divider"></div>
            
                    <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e1" />
                          <label for="e1">Bosque ándino o niebla</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>  


                     <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e2" />
                          <label for="e2">Bosque húmedo</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div> 


                     <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e3" />
                          <label for="e3">Bosque seco</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div> 


                     <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e4" />
                          <label for="e4">Páramo</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div> 


                     <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e5" />
                          <label for="e5">Marinos</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>  


                     <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e7" />
                          <label for="e7">Sabana</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div>  


                     <div class="input-field col s12 m6 l6">
                          <input type="checkbox" id="e8" />
                          <label for="e8">Manglas</label>
                    </div>
                        
                    <div class="input-field col s12 m6 l6 ">
                        <input  id="area" type="text" class="validate">
                        <label for="area">Área(ha)</label>
                    </div> 
            </div>



            <div class="row" style="border: 1px solid">
                  <p>Área de los ecosistemas</p> 
                  <div class="divider"></div>
            
                    <div class="input-field col s12 m5 l5">
                          <input type="checkbox" id="p1" />
                          <label for="p1">Protocolo o plan de aprovechamiento para productos silvestres maderables y no maderables</label>
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <select>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="1">Aplica</option>
                          <option value="2">No Aplica</option>
                        </select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <select>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="1">Cumple</option>
                          <option value="2">No Cumple</option>
                        </select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                     <div class="input-field col s12 m1 l1 ">
                        <input  id="vigencia" type="text" class="validate">
                        <label for="vigencia">Vigencia</label>
                    </div>
                    <div class="input-field col s12 m2 l2 ">
                        <input  id="observacion" type="text" class="validate">
                        <label for="observacion">Observación</label>
                    </div>



                    <div class="input-field col s12 m5 l5">
                          <input type="checkbox" id="p2" />
                          <label for="p2">Estudio de capacidad de carga para ecoturismo</label>
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <select>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="1">Aplica</option>
                          <option value="2">No Aplica</option>
                        </select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <select>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="1">Cumple</option>
                          <option value="2">No Cumple</option>
                        </select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                     <div class="input-field col s12 m1 l1 ">
                        <input  id="vigencia" type="text" class="validate">
                        <label for="vigencia">Vigencia</label>
                    </div>
                    <div class="input-field col s12 m2 l2 ">
                        <input  id="observacion" type="text" class="validate">
                        <label for="observacion">Observación</label>
                    </div>


                    <div class="input-field col s12 m5 l5">
                          <input type="checkbox" id="p3" />
                          <label for="p3">Plan de manejo ambiental</label>
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <select>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="1">Aplica</option>
                          <option value="2">No Aplica</option>
                        </select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <select>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="1">Cumple</option>
                          <option value="2">No Cumple</option>
                        </select>
                        <!-- <label>Materialize Select</label> -->
                    </div>
                     <div class="input-field col s12 m1 l1 ">
                        <input  id="vigencia" type="text" class="validate">
                        <label for="vigencia">Vigencia</label>
                    </div>
                    <div class="input-field col s12 m2 l2 ">
                        <input  id="observacion" type="text" class="validate">
                        <label for="observacion">Observación</label>
                    </div>




            </div>



      </span></div>
    </li>






    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>4. información sostenibilidad Social</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd;">4. información sostenibilidad Social</div>
        <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
                  <p>¿Cómo involucra los miembros de las cominidades locales?</p> 
                  <div class="divider"></div>
            
                    <div class=" col s12 m4 l4">
                          <input type="checkbox" id="rr" />
                          <label for="rr">Como Socios</label>
                    </div>
                        
                    <div class=" col s12 m4 l4">
                          <input type="checkbox" id="r1" />
                          <label for="r1">Como Empleados Directos</label>
                    </div> 

                    <div class=" col s12 m4 l4">
                          <input type="checkbox" id="r2" />
                          <label for="r2">Como Empleados Indirectos</label> 
                    </div>          
            </div>
        </div>
        

        <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Actividades con miembros de las comunidades locales</p> 
            <div class="divider"></div>
            
            <div class="row">
                <div class="input-field col s12 m4 l3">
                  <input type="checkbox" id="r3" />
                  <label for="r3">Capacitación</label> 
                </div>

                <div class="input-field col s12 m4 l4">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>

                <div class="input-field col s12 m4 l5">
                 <select>
                  <option value="1">Propios</option>
                  <option value="2">Gestionados con otra entidad</option>
                </select>
                <label>Fuente de Recursos</label>
                </div>
            </div>

             <div class="row">
                <div class="input-field col s12 m4 l3">
                  <input type="checkbox" id="r4" />
                  <label for="r4">Asistencia Técnica</label> 
                </div>

                <div class="input-field col s12 m4 l4">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>

                <div class="input-field col s12 m4 l5">
                 <select>
                  <option value="1">Propios</option>
                  <option value="2">Gestionados con otra entidad</option>
                </select>
                <label>Fuente de Recursos</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m4 l3">
                  <input type="checkbox" id="r5" />
                  <label for="r5">Recreación</label> 
                </div>

                <div class="input-field col s12 m4 l4">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>

                <div class="input-field col s12 m4 l5">
                 <select>
                  <option value="1">Propios</option>
                  <option value="2">Gestionados con otra entidad</option>
                </select>
                <label>Fuente de Recursos</label>
                </div>
            </div>

             <div class="row">
                <div class="input-field col s12 m4 l3">
                  <input type="checkbox" id="r6" />
                  <label for="r6">Salud</label> 
                </div>

                <div class="input-field col s12 m4 l4">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>

                <div class="input-field col s12 m4 l5">
                 <select>
                  <option value="1">Propios</option>
                  <option value="2">Gestionados con otra entidad</option>
                </select>
                <label>Fuente de Recursos</label>
                </div>
            </div>
        
      </div>
    </div>


    <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Programas para los trabajadores</p> 
            <div class="divider"></div>
            
            <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input type="checkbox" id="l3" />
                  <label for="l3">Capacitación</label> 
                </div>

                <div class="input-field col s12 m6 l6">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>


             <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input type="checkbox" id="l4" />
                  <label for="l4">Asistencia Técnica</label> 
                </div>

                <div class="input-field col s12 m6 l6">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input type="checkbox" id="l5" />
                  <label for="l5">Recreación</label> 
                </div>

                <div class="input-field col s12 m6 l6">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>
            </div>

             <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input type="checkbox" id="l6" />
                  <label for="l6">Salud</label> 
                </div>

                <div class="input-field col s12 m6 l6">
                  <input type="text" />
                  <label for="">Descripción</label>
                </div>
            </div>
        
      </div>
    </div>



        <div class="row">
            <div class="col s12 m12 l12" style="border: 1px solid">
            <p>Apoyo por parte de institución pública o privada</p> 
            <div class="divider"></div>
            
            <div class="row">
                <div class="input-field col s12 m3 l3">
                  <input type="text"  />
                  <label>Tipo de apoyo</label> 
                </div>

                <div class="input-field col s12 m3 l3">
                  <input type="text" />
                  <label for="">Entidad</label>
                </div>

                <div class="input-field col s12 m3 l3">
                 <select>
                  <option value="1">Privada</option>
                  <option value="2">Pública</option>
                  <option value="2">ONG</option>
                </select>
                <label>Tipo de entidad</label>
                </div>

                <div class="input-field col s12 m3 l3">
                  <input type="text" />
                  <label for="">Año</label>
                </div>
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
            <div class="col s12 m12 l12" style="border: 1px solid">
            
            <div class="row">
                <div class="input-field col s12 m3 l3">
                  <input type="text"  />
                  <label>Bien y/o servicio</label> 
                </div>

                <div class="input-field col s12 m3 l3">
                  <input type="text" />
                  <label for="">unidades vendidas anual</label>
                </div>

                <div class="input-field col s12 m3 l3">
                 <select>
                      <option value="" disabled selected>Seleccione...</option>
                      <option value="1">Kg</option>
                      <option value="2">Lb</option>
                  </select>
                  <label>Unidad de medida</label>
                </div>

                <div class="input-field col s12 m3 l3">
                  <input type="text" />
                  <label for="">Especifique unidades</label>
                </div>

                <div class="input-field col s12 m2 l2">
                  <input type="text" />
                  <label for="">Costo producción unidad</label>
                </div>

                <div class="input-field col s12 m2 l2">
                  <input type="text" />
                  <label for="">Precio venta unitario</label>
                </div>

                <div class="input-field col s12 m2 l2">
                  <input type="text" />
                  <label for="">Ganacias por unidad</label>
                </div>

                <div class="input-field col s12 m2 l2">
                  <input type="text" />
                  <label for="">Ventas anuales</label>
                </div>

                <div class="input-field col s12 m4 l4">
                  <select>
                      <option value="" disabled selected>Seleccione...</option>
                      <option value="1">Si</option>
                      <option value="2">No</option>
                  </select>
                  <label>Los ingresos son superiores a los costos</label>
                </div>
            </div>
            <div class="divider grey"></div>
            sdgsdfgsdf

      </div>
    </div>
      </span></div>
    </li>
</ul>
<button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="registrar_informacion"><i class="material-icons right">add</i>Registrar informacion AS</button>
</form> 

<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_formato_informacion.js"></script>
