<?php 
 
 if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../conexion.php');
        
 
    }
 ?>

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

            <div class="input-field col s12 m4 l4">
    
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
                <label>Tipo de persona</label>  
                        
            </div>

            <div class="input-field col s12 m4 l4">
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
                  <label for="correo">Correo *</label>
            </div>

            </div>

            <div class="row">
              
            <div class="input-field col s12 m4 l4">
                  <input id="fijo" name="fijo" type="text" class="validate">
                  <label for="fijo">Teléfono fijo</label>
            </div>


            <div class="input-field col s12 m4 l4">
                  <input id="celular" name="celular" type="text" class="validate">
                  <label for="celular">Celular</label>
            </div>
            <div class="input-field col s12 m4 l4">
                  <input id="direccion_c" name="direccion_c" type="text" class="validate">
                  <label for="direccion_c">Direccion de Correspondencia</label>
            </div>

            </div>

            <div class="row">
             
            <div class="input-field col s12 m2 l2" >
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

            <div class="input-field col s12 m2 l2" id="s">
                <select id="departamento" name="departamento">
                  
                </select>
                <label>Departamento</label>
            </div>

            <div class="input-field col s12 m3 l3">
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
                  <input id="autoridad_ambiental" name="autoridad_ambiental" type="text" class="validate" value="Codechocó">
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
                  <option disabled selected>Seleccione...</option>
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
                  <input id="num_asociados" name="num_asociados" type="text" class="validate">
                  <label for="num_asociados">Numero de asociados</label>
            </div>

            <div class="input-field col s12 m3 l3">
                  <input id="area" name="area" type="text" class="validate">
                  <label for="area">Area total predio (Ha)</label>
            </div>
                
            <div class="input-field col s12 m3 l3">

                  <select id="pot" name="pot">
                    <option disabled selected>Seleccione...</option>
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
                    <option disabled selected>Seleccione...</option>
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
                    <option disabled selected>Seleccione...</option>
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
        <div class="input-field col s12 m6 l6" style="margin-top: 51px">
          <select id="impacto_amb" name="impacto_amb" >
            <option disabled selected>Seleccione...</option>
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
                  <label ">¿Su actuvidad o producto tiene impacto ambiental positivo?</label>
        </div>
        <div class="input-field col s12 m6 l6">
                <textarea id="desc_imp_ambiental" name="desc_imp_ambiental" class="materialize-textarea"></textarea>
                <label for="desc_imp_ambiental">¿Por qué?</label>
              </div>
      </div>
      

      <div class="row">
        <div class="input-field col s12 m6 l6" style="margin-top: 51px">
          <select id="impacto_soc" name="impacto_soc">
            <option disabled selected>Seleccione...</option>
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
                  <label ">¿Su actuvidad o producto tiene impacto social positivo?</label>
        </div>
        <div class="input-field col s12 m6 l6">
                <textarea id="desc_imp_social" name="desc_imp_social" class="materialize-textarea"></textarea>
                <label for="desc_imp_social">¿Por qué?</label>
              </div>
      </div>

      </span></div>
    </li>

  
    
    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>3. Categoria de Negocios Verdes</div>
      <div class="collapsible-body"><span>
        
        

        <div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">3. Categoria de Negocios Verdes</div>
        <div class="row">
        <div class="input-field col s12 m4 l4" style="margin-top: 30px">
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

          <div class="input-field col s12 m4 l4" style="margin-top: 30px">
          <select id="sector" name="sector">
                  
                  </select>
                  <label ">Sector</label>
                </div>

          <div class="input-field col s12 m4 l4" style="margin-top: 30px">
          <select id="subsector" name="subsector" >
                  
                  </select>
                  <label ">Subsector</label>
        </div>
      </div>

        <!-- <div class="row" style="background-color: #e0e0e0;">Selecciona la categoría a la que pertenece el Negocio Verde</div>
        <div class="row" style="background-color: #e0e0e0;">


        <div class="col s12 m6 l3">Bienes y servicios sostenibles provenientes de recursos naturales</div>
        <div class="col s12 m6 l9">
        <div class="row">Biocomercio

        <div class="col s12"></div>
          
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test1" />
              <label for="test1">Maderables</label>
        </p>
         
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test2" />
              <label for="test2">No Maderables</label>
        </p>

        <p>
              <input class="with-gap" name="categorias" type="radio" id="test3" />
              <label for="test3">Productos derivados de la Fauna Silvestre</label>
        </p>

        <p>
              <input class="with-gap" name="categorias" type="radio" id="test4" />
              <label for="test4">Turismo de naturaleza / Ecoturismo</label>
        </p>

        <p>
              <input class="with-gap" name="categorias" type="radio" id="test5" />
              <label for="test5">Recursos geneticos y productos derivados</label>
        </p>

        </div>
       
        

        <div class="row">Agrosistemas Sostenibles             
        <div class="divider" style="background-color: black;"></div>   
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test6" />
              <label for="test6">Sistemas de producción ecológico, biológico, orgánico </label>
        </p>
         

        </div>



        </div>
        </div>
        <div class="divider" style="background-color: black;"></div>



        <div class="row" style="background-color: #e0e0e0;margin-top: 20px;">
        <div class="col s12 m6 l3">Ecoproductos Industriales</div>
        <div class="col s12 m6 l9">
        <div class="row">         
        <div class="col s12"></div>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test7" />
              <label for="test7">Aprovechamiento y valoración de residuos</label>
        </p>
        </div>
        <div class="row">Fuentes no convencionales de energía renovable
        <div class="divider" style="background-color: black;"></div>
        <div class="col s12"></div>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="tes1" />
              <label for="tes1">Energía Solar</label>
        </p>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="tes2" />
              <label for="tes2">Energía Eólica</label>
        </p>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="tes3" />
              <label for="tes3">Energía Geotérmica</label>
        </p>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="tes4" />
              <label for="tes4">Biomasa</label>
        </p>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="tes5" />
              <label for="tes5">Energía de los mares</label>
        </p>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="tes6" />
              <label for="tes6">Pequeños aprovechamientos hidroeléctricos</label>
        </p>
        </div>
        <div class="divider" style="background-color: black;"></div>
        <div class="row">         
        <div class="col s12"></div>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test7" />
              <label for="test7">Construcción Sostenible</label>
        </p>
        <p>                                              
              <input class="with-gap" name="categorias" type="radio" id="test8" />
              <label for="test8">Otros bienes y Productos Verdes Sostenibles  </label>
        </p>
        </div>
        </div>
        </div>


        <div class="row" style="background-color: #e0e0e0;margin-top: 20px;">
        <div class="col s12 m6 l3">Mercados de Carbono</div>
        <div class="col s12 m6 l9">
        <div class="row">         
        <div class="col s12"></div>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test9" />
              <label for="test9">Mercado Regulado</label>
        </p>
        </div>
        <div class="divider" style="background-color: black;"></div>
        <div class="row">         
        <div class="col s12"></div>
        <p>
              <input class="with-gap" name="categorias" type="radio" id="test10" />
              <label for="test10">Mercado Voluntario</label>
        </p>
        </div>
        </div> -->
        <!-- </div> -->
      

      </span></div>
    </li>


    <li>
      <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>4. Información Empresa</div>
      <div class="collapsible-body"><span>
        

      <div class="row" style="text-align: center;background-color: #bdbdbd;margin-bottom: 0px;">4. Información Empresa</div>
      <div class="row">
        <div class="col s12 m4 l4" style="border: 1px solid">
            Número de socios
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m4 l4">
                <input disabled id="total_1" type="text" class="validate">
                <label for="total_1">Total</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="masculino_1" name="masculino_1" type="text" class="validate">
                <label for="masculino_1">Masculino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="femenino_1" name="femenino_1" type="text" class="validate">
                <label for="femenino_1">Femenino</label>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l4" style="border: 1px solid">
            Cuantos socios vinculados laboralmente con la empresa
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m4 l4">
                <input disabled id="total_2" type="text" class="validate">
                <label for="total_2">Total</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="masculino_2" name="masculino_2" type="text" class="validate">
                <label for="masculino_2">Masculino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="femenino_2" name="femenino_2" type="text" class="validate">
                <label for="femenino_2">Femenino</label>
              </div>
            </div>
          </div>

          <div class="col s12 m4 l4" style="border: 1px solid">
           Número de empleados
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m4 l4">
                <input id="masculino_3" name="masculino_3" type="text" class="validate">
                <label for="masculino_3">Masculino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="femenino_3" name="femenino_3" type="text" class="validate">
                <label for="femenino_3">Femenino</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input disabled id="total_3" type="text" class="validate">
                <label for="total_3"></label>
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
                <input id="entre_18_30" name="entre_18_30" type="text" class="validate">
                <label for="entre_18_30">Entre 18-30</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="entre_30_50" name="entre_30_50" type="text" class="validate">
                <label for="entre_30_50">Entre 30-50</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input id="mayor_50" name="mayor_50" type="text" class="validate">
                <label for="mayor_50">Entre Mayores 50</label>
              </div>
            </div>
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
                <input id="indefinido" name="indefinido" type="text" class="validate">
                <label for="indefinido">Indefinido</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="definido" name="definido" type="text" class="validate">
                <label for="definido">Ter. definido</label>
              </div>
              <div class="input-field col s12 m7 l7">
                <input id="por_dias" name="por_dias" type="text" class="validate">
                <label for="por_dias">Por días (Jornales) promedio en el año</label>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l6" style="border: 1px solid">
            Nivel educativo (Indicar Nº de empleados)
            <div class="divider"></div>
            <div style="">
              <div class="input-field col s12 m2 l2">
                <input id="primaria" name="primaria" type="text" class="validate">
                <label for="primaria">Primaria</label>
              </div>
              <div class="input-field col s12 m2 l2">
                <input id="bachillerato" name="bachillerato" type="text" class="validate">
                <label for="bachillerato">Bachillerato</label>
              </div>
              <div class="input-field col s12 m2 l2 ">
                <input id="tecnico" name="tecnico" type="text" class="validate">
                <label for="tecnico">Técnicio</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="universitario" name="universitario" type="text" class="validate">
                <label for="universitario">Universitario</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro" name="otro" type="text" class="validate">
                <label for="otro">Otro</label>
              </div>
            </div>
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
                 <input id="indigena" name="indigena" type="text" class="validate">
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
                 <input id="discapacitado" name="discapacitado" type="text" class="validate">
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
                 <input id="adulto" name="adulto" type="text" class="validate">
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
                 <input id="madre_familia" name="madre_familia" type="text" class="validate">
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
                 <input id="reinsertados" name="reinsertados" type="text" class="validate">
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
                 <input id="desplazado" name="desplazado" type="text" class="validate">
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
                 <input id="demografia_otro" name="demografia_otro" type="text" class="validate">
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
        
        <div class="input-field col s12 m12 l12">

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
          <label for="b_lider">Bien o servicio lider</label>
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
                 <select id="cmb_personeria" name="cmb_personeria">
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
                <label>¿Cuenta con personeria juridica?</label>
            </div>
            <div class="input-field col s12 m7 l7">
                 <input id="personeria" name="personeria" type="text" class="validate">
                <label for="personeria">Tipo de personeria juridica (Unipersonal, SAS, coorporación, asociación, entre otros) </label>
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
<div class="row" style="text-align: center;background-color: #e0e0e0;">Verificador</div>
<div class="row">
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="1">
    <label for="1">Nombre del verificador</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="2">
    <label for="2">Entidad</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="3">
    <label for="3">Area</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="4">
    <label for="4">Cargo</label>
  </div>
</div>
<div class="row" style="text-align: center;background-color: #e0e0e0;">Empresario</div>
<div class="row">
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="11">
    <label for="11">Nombre del entrevistado</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="22">
    <label for="22">Identificación</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="33">
    <label for="33">Empresa</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <input type="text" name="" id="44">
    <label for="44">Cargo</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s12 m12 l12">
    <textarea id="observacion" class="materialize-textarea"></textarea>
    <label for="observacion">Observaciones Generales</label>
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

<script type="text/javascript" src="js/accion_registro.js"></script>

