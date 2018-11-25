<?php 
// ob_start();
// session_start();
if(!isset($_SESSION["vev_verificador"])){
  header("Location:../../index.php");
  exit();
}
?>
<?php 

if (is_file('conexion.php')){

  require_once('conexion.php');

}
else {

  require_once('../../conexion.php');


}
?>
<div  class="col s12" style="padding-right: 0px; padding-left: 0px">
  <center><h4 style="margin-top: 0px">Sección para Registrar</h4></center>
  <div  class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
              <!-- <div class="col s12 m12 l12"> -->
                <!-- <div class="card grey lighten-4 "  style=""> -->
                  <span class="card-title"><center><h5> Formato de inscripción</h5></center></span>
                  <form id="form_registro" >
                   <ul class="collapsible" data-collapsible="accordion">
                    <li id="s">
                      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>1. Información General</div>
                      <div class="collapsible-body">
                        <span>
                          <div class="row" style="text-align: center;background-color: #bdbdbd;">1. Información General</div>
                          <div class="row">

                            <div id="div_verificacion" class="input-field col s12 m3 l3" style="margin-top: 30px" >
                              <select id="cmb_verificacion" name="cmb_verificacion">
                                <option disabled selected>Seleccione...</option>
                                <?php 
                                $s="SELECT id,nombre from si_no where id != 4 order by id asc";
                                $r= mysqli_query($conn,$s) or die("Error");
                                if(mysqli_num_rows($r)>0){
                                  while($rw=mysqli_fetch_assoc($r)){
                                    echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                                  }         
                                }
                                ?>
                              </select>
                              <label> "¿El negocio ha sido verificado anteriormente?</label>
                            </div>

                            <div id="ano_view">
                              <div class="input-field col s12 m3 l3" style="margin-top: 30px" >
                                <select id="año_veri1" name="año_veri[]">
                                  
                                  <option > </option>
                                  <?php

                                  for ($i=1995; $i <= 2030; $i++) { 

                                    echo"<option value='$i'>$i</option>";   

                                  }       

                                  ?>
                                </select>
                                <label>Año</label>
                              </div>

                              <div class="input-field col s12 m3 l3" style="margin-top: 30px" >
                                <select id="año_veri2" name="año_veri[]">
                                  
                                  <option> </option>
                                  <?php

                                  for ($i=1995; $i <= 2030; $i++) { 

                                    echo"<option value='$i'>$i</option>";   

                                  }       

                                  ?>
                                </select>
                                <label>Año</label>
                              </div>

                              <div class="input-field col s12 m3 l3" style="margin-top: 30px" id="">
                                <select id="año_veri3" name="año_veri[]">
                                  
                                  <option> </option>
                                  <?php

                                  for ($i=1995; $i <= 2030; $i++) { 

                                    echo"<option value='$i'>$i</option>";   

                                  }       

                                  ?>
                                </select>
                                <label>Año</label>
                              </div> 
                            </div>
                          </div>
                          <div class='divider teal darken-4' style='margin-bottom:10px'></div>
                          <div class="row">

                            <div id="depto_valida" class="input-field col s12 m3 l3" id="depto_valida">
                              <select id="departamento" name="departamento" class="dep">
                                <option disabled selected>Seleccione...</option>
                               <?php 

                               $s="select id,nombre from departamento";
                               $r= mysqli_query($conn,$s) or die("Error");
                               if(mysqli_num_rows($r)>0){
                                while($rw=mysqli_fetch_assoc($r)){
                                  echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                                }         
                              }
                              ?>
                            </select>
                            <label>Departamento</label>
                          </div>

                          <div class="input-field col s12 m3 l3" id="municipio_valida">
                            <select id="municipio" name="municipio">
                            </select>
                            <label>Municipio</label>
                          </div>

                          <div class="input-field col s12 m3 l3" id="region_valida">
                            <select name="region" id="region" readonly>


                            </select>
                            <label>Region</label>
                          </div>

                          <div class="input-field col s12 m3 l3">
                            <input id="autoridad_ambiental" name="autoridad_ambiental" type="text" readonly>
                            <label for="autoridad-ambiental">Autoridad ambiental</label>
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

                        <div class="row">
                          <div class="input-field col s12 m4 l4" id="ti_person">

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

                        <div class="input-field col s12 m4 l4" id="t_identifica">
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


                      <div class="row">

                        <div class="input-field col s12 m4 l4">
                          <input id="representante" name="representante" type="text" class="validate">
                          <label for="representante">Nombre de representante Legal *</label>
                        </div>

                        <div class="input-field col s12 m4 l4">
                          <input id="documento" name="documento" type="number" class="validate">
                          <label for="documento">Identificación *</label>
                        </div>

                        <div class="input-field col s12 m4 l4">
                          <input id="correo" name="correo" type="email" class="validate">
                          <label for="correo">E-mail</label>
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
                        <div class="input-field col s12 m4 l4 disabled">
                          <input id="vereda" name="vereda" type="text" class="validate">
                          <label for="vereda">Vereda</label>
                        </div>

                        <div class="input-field col s12 m8 l8">
                          <input id="pw_rd" name="pw_rd" type="text" class="validate">
                          <label for="pw_rd">Pagina Web y/o Redes Sociales</label>
                        </div>


                      </div>

                      <div class="row">

                       <div class="input-field col s12 m4 l4">
                        <input id="longitud" name="longitud" type="text" class="validate">
                        <label for="longitud">Longitud</label>
                      </div>

                      <div class="input-field col s12 m4 l4">
                        <input id="latitud" name="latitud" type="text" class="validate">
                        <label for="Latitud">Latitud</label>
                      </div>

                      <div class="input-field col s12 m4 l4">
                        <input id="altitud" name="altitud" type="text" class="validate">
                        <label for="altitud">Altitud (m.s.n.m)</label>
                      </div>
                    </div>

                    <div class="divider teal darken-4" style="margin-bottom: 10px;height: 10px;"></div>

                    <div class="row">

                      <div class="input-field col s12 m3 l3">

                       <select id="organizacion" name="organizacion">
                        <?php 
                        $s="SELECT id,nombre from si_no where id != 4 order by id asc ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Organización</label>  

                    </div>

                    <div class="input-field col s12 m3 l3">
                      <input id="num_asociados" name="num_asociados" type="number" class="validate">
                      <label for="num_asociados">Número de socios</label>
                    </div>

                    <div class="input-field col s12 m3 l3">      
                      <select id="famiempresa" name="famiempresa">
                        <!-- <option disabled selected>Seleccione...</option> -->
                        <?php 
                        $s="SELECT id,nombre from si_no where id != 4 order by id asc ";
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

                    <div class="input-field col s12 m3 l3">      
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


                  <div class="row">
                    <div class="input-field col s12 m2 l2">
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


                    <div class="input-field col s12 m2 l2">
                      <input id="ano_func" name="ano_func" type="number" class="validate">
                      <label for="ano_func">Años de funcionamiento</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                      <select id="tipo_personeria" name="tipo_personeria">
                        <?php 
                        $s="select id,nombre from tipo_personeria order by id ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Tipo de personería jurídica</label>
                    </div>

                    <div class="input-field col s12 m5 l5 active">
                      <input id="ano_func_des_camara" name="ano_func_des_camara" type="number" class="validate">
                      <label for="ano_func_des_camara">Años de funcionamiento después de registro ante cámara</label>
                    </div>

                  </div>

                  <div class="divider teal darken-4" style="margin-bottom: 10px;height: 10px;"></div>

                  <div class="row">

                    <div class="input-field col s12 m3 l3">
                      <select id="consejo_com" name="consejo_com">
                        <option>Seleccione...</option>
                        <?php 
                        $s="SELECT id,nombre from si_no where id != 4 order by id asc  ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Consejo comunitario</label>
                    </div>

                    <div class="input-field col s12 m3 l3 ">
                      <input id="nombre_consejo" name="nombre_consejo" type="text" class="validate">
                      <label for="nombre_consejo">Nombre</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                      <select id="junta" name="junta">
                        <option>Seleccione...</option>
                        <?php 
                        $s="SELECT id,nombre from si_no where id != 4 order by id asc  ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Junta de Acción comunal</label>
                    </div>

                    <div class="input-field col s12 m3 l3 ">
                      <input id="nombre_junta" name="nombre_junta" type="text" class="validate">
                      <label for="nombre_junta">Nombre</label>
                    </div>

                  </div>

                  <div class="row">

                    <div class="input-field col s12 m5 l5">
                      <select id="grupo_etnico" name="grupo_etnico">
                        <option>Seleccione...</option>
                        <?php 
                        $s="select id,nombre from grupo_etnico_op order by id ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Grupo étnico</label>
                    </div>

                    <div class="input-field col s12 m7 l7 ">
                      <input id="nombre_etnico" name="nombre_etnico" type="text" class="validate">
                      <label for="nombre_etnico">Nombre del grupo étnico</label>
                    </div>

                  </div>

                  <div class="row">

                    <div class="input-field col s12 m3 l3">
                      <select id="cabildo" name="cabildo">
                        <option>Seleccione...</option>
                        <?php 
                        $s="SELECT id,nombre from si_no where id != 4 order by id asc ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Cabildo</label>
                    </div>

                    <div class="input-field col s12 m3 l3 ">
                      <input id="nombre_cabildo" name="nombre_cabildo" type="text" class="validate" >
                      <label for="nombre_cabildo">Nombre</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                      <select id="tcpi" name="tcpi">
                        <option>Seleccione...</option>
                        <?php 
                        $s="select id,nombre from tcip_op order by id ";
                        $r= mysqli_query($conn,$s) or die("Error");
                        if(mysqli_num_rows($r)>0){
                          while($rw=mysqli_fetch_assoc($r)){
                            echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                          }         
                        }
                        ?>
                      </select>
                      <label>Trritorios colectivos de pueblos indígenas</label>
                    </div>

                    <div class="input-field col s12 m3 l3 ">
                      <input id="nombre_territorio" name="nombre_territorio" type="text" class="validate">
                      <label for="nombre_territorio">Nombre</label>
                    </div>

                  </div>


                </span>
              </div>
            </li>
            <li>


              <div class="collapsible-header" style="font-weight: bold;"><i class="material-icons"></i>3. Descripción del Negocio Verde</div>
              <div class="collapsible-body"><span>

                <div class="row" style="text-align: center;background-color: #bdbdbd; margin-bottom: 0px">3. Descripción del Negocio Verde</div>
                <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">Descripción del negocio (Bien o servicio). Por favor incluir el impacto ambiental positivo (requisito mínimo y esencial para ser negocio verde, ver dettale en información complementaria) y el impacto socio-cultural positvo generado.</div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="desc_negocio" name="desc_negocio" class="materialize-textarea"></textarea>
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

                <div class="divider teal darken-4" style="height: 10px"></div>

                <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1. Bienes y servicios. Escoja alguna de las opciones o ambas. Describa el bien o servicio lider, y los otros servicios y bienes</div>

                <div class="row">
                  <div class="input-field col s12 m6 l6" id="tipo_b">
                    <select id="tipo_bien" name="tipo_bien">
                      <option disabled selected>Seleccione...</option>
                      <?php 
                      $s="select id,nombre from bien_serv_op order by id";
                      $r= mysqli_query($conn,$s) or die("Error");
                      if(mysqli_num_rows($r)>0){
                        while($rw=mysqli_fetch_assoc($r)){
                          echo"<option value='$rw[id]'>$rw[nombre]</option>";          
                        }         
                      }
                      ?>
                    </select>
                    <label>Seleccione las siguientes opciones</label>
                  </div>  

                  <div class="input-field col s12 m6 l6 ">
                    <input id="bien_lider" name="bien_lider" type="text" class="validate">
                    <label for="bien_lider">Bien o servicio lider</label>
                  </div>
                  <div class="col s12 m12 l12">
                     <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">Enliste otros bienes y/o servicios, tenga en cuenta que deberán ser diferentes al bien y/o servicio lider.</div>
                  </div>
                  <div class="input-field col s12 m12 l12" id="bien_servi"  >
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

                </div>

                <div class="divider teal darken-4" style="height: 10px"></div>

                <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">2. Actividades realizadas por la empresa</div>



                <?php 
                $i = "";
                $s="select id,nombre from actividad_item order by id ";
                $r= mysqli_query($conn,$s) or die("Error");
                if(mysqli_num_rows($r)>0){
                  while($rw=mysqli_fetch_assoc($r)){
                   $i= $i+1;
                   echo"
                   <div class='row'>
                   <input type='hidden' id='t".$i."'  name='actividad_emp_hidden[]' value='$rw[id]' />


                   <div class='input-field col s12 m3 l3'  >
                   <select id='actividad_empresa_si_no' name='actividad_empresa_si_no[]'>
                   <option disabled selected>Seleccione...</option>";

                   $s1="select id,nombre from si_no order by id";
                   $r1= mysqli_query($conn,$s1) or die("Error");
                   if(mysqli_num_rows($r1)>0){
                    while($rw1=mysqli_fetch_assoc($r1)){
                      echo"<option value='$rw1[id]'>$rw1[nombre]</option>";          
                    }         
                  }

                  echo "</select>
                  <label>$rw[nombre]</label>
                  </div> 

                  <div class='input-field col s12 m3 l3'>
                  <input id='direccion_actividad' name='direccion_actividad[]' type='text' class='validate' >
                  <label for='direccion_actividad'>Dirección</label>
                  </div> 

                  <div class='input-field col s12 m3 l3' >
                  <select id='actividad_empresa_depto".$i."' name='departamento_actividad[]'>
                  <option disabled selected>Seleccione...</option>";

                  $s2="select id,nombre from departamento order by id";
                  $r2= mysqli_query($conn,$s2) or die("Error");
                  if(mysqli_num_rows($r2)>0){
                    while($rw2=mysqli_fetch_assoc($r2)){
                      echo"<option value='$rw2[id]'>$rw2[nombre]</option>";          
                    }         
                  }

                  echo" </select>
                  <label>Departamento</label>
                  </div> 

                  <div class='input-field col s12 m3 l3'  >
                  <select id='actividad_empresa_municipio".$i."' name='municipio_actividad[]'>
                  <option disabled selected>Seleccione...</option>";

                  $s4="select id,nombre from municipio order by id";
                  $r4= mysqli_query($conn,$s4) or die("Error");
                  if(mysqli_num_rows($r4)>0){
                    while($rw4=mysqli_fetch_assoc($r4)){
                      echo"<option value='$rw4[id]'>$rw4[nombre]</option>";          
                    }         
                  }

                  echo "</select>
                  <label>Municipio</label>
                  </div> 
                  <div class='input-field col s12 m3 l3'  >
                  <select id='tipo_tenencia_actividad' name='tipo_tenencia_actividad[]'>
                  <option disabled selected>Seleccione...</option>";
                  $s5="select id,nombre from tipo_tenencia order by id";
                  $r5= mysqli_query($conn,$s5) or die("Error");
                  if(mysqli_num_rows($r5)>0){
                    while($rw5=mysqli_fetch_assoc($r5)){
                      echo"<option value='$rw5[id]'>$rw5[nombre]</option>";          
                    }         
                  }

                  echo "</select>
                  <label>Tipo de tenecia</label>
                  </div> 

                  <div class='input-field col s12 m3 l3'>
                  <input id='area_predio_actividad' name='area_predio_actividad[]' type='text' class='validate' >
                  <label for='area_predio_actividad'>Area del predio (m2)</label>
                  </div> 

                  <div class='input-field col s12 m3 l3'  >
                  <select id='cumple_pot_actividad' name='cumple_pot_actividad[]'>
                  <option disabled selected>Seleccione...</option>";

                  $s6="SELECT id,nombre from si_no where id != 4 order by id asc";
                  $r6= mysqli_query($conn,$s6) or die("Error");
                  if(mysqli_num_rows($r6)>0){
                    while($rw6=mysqli_fetch_assoc($r6)){
                      echo"<option value='$rw6[id]'>$rw6[nombre]</option>";          
                    }         
                  }

                  echo" </select>
                  <label>Cumple POT?</label>
                  </div> 

                  <div class='input-field col s12 m3 l3'>
                  <input id='observacion_actividad' name='observacion_actividad[]' type='text' class='validate' >
                  <label for='observacion_actividad'>Observación</label>
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
                  <textarea id="obs_generales" name="obs_generales" class="materialize-textarea"></textarea>
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
                <div class="row">
                  <div class="input-field col s12 m4 l3">
                    <input type="text" name="verificador" id="verificador">
                    <label for="verificador">Nombre del verificador</label>
                  </div>
                  <div class="input-field col s12 m4 l3">
                    <input type="text" name="entidad_verificador" id="entidad_verificador">
                    <label for="entidad_verificador">Entidad</label>
                  </div>
                  <div class="input-field col s12 m4 l3">
                    <input type="text" name="area_verificador" id="area_verificador">
                    <label for="area_verificador">Area</label>
                  </div>
                  <div class="input-field col s12 m4 l3">
                    <input type="text" name="cargo_verificador" id="cargo_verificador">
                    <label for="cargo_verificador">Cargo</label>
                  </div>
                </div>

                <div class="row" style="text-align: center;background-color: #e0e0e0;">Empresario</div>
                <div class="row">
                  <div class="input-field col s12 m3 l3">
                    <input type="text" name="entrevistado" id="entrevistado">
                    <label for="entrevistado">Nombre del entrevistado</label>
                  </div>
                  <div class="input-field col s12 m3 l3">
                    <input type="text" name="identificacion_entrevistado" id="identificacion_entrevistado">
                    <label for="identificacion_entrevistado">Identificación</label>
                  </div>
                  <div class="input-field col s12 m3 l3">
                    <input type="text" name="cargo_entrevistado" id="cargo_entrevistado">
                    <label for="cargo_entrevistado">Cargo</label>
                  </div>
                  <div class="input-field col s12 m3 l3" >
                    <select id="cmb_carta" name="cmb_carta">
                      
                      <?php 
                      $s="SELECT id,nombre from si_no where id != 4 order by id asc ";
                      $r= mysqli_query($conn,$s) or die("Error");
                      if(mysqli_num_rows($r)>0){
                        while($rw=mysqli_fetch_assoc($r)){
                          echo"<option value='$rw[id]'>$rw[nombre]</option>";          
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
        <div class="row">
          <div class='file-field input-field col s12 m12 l12' style=''>
           <div class='btn'>
            <span>Seleccionar imagen</span>
            <input type='file' name='img_emprendimiento' id='img_emprendimiento' accept="image/*">
          </div>
          <div class='file-path-wrapper'>
            <input class='file-path validate' type='text'  >
          </div>
        </div>
      </div>
      <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="registrar_emp"><i class="material-icons right">add</i>Registrar</button>
    </form>
  </div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>  
</div>
</div>
<script type="text/javascript" src="js/accion_registro.js"></script>