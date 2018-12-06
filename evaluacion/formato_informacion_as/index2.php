<?php 
// session_start();
  if(!isset($_SESSION["vev_verificador"])){
    header("Location:index.php");
    exit();
  }
 ?>
<?php 
require_once('conexion.php');

 ?>



<div id="test2" class="col s12" style="padding-right: 0px; padding-left: 0px">
          <center><h4 style="margin-top: 0px">Sección para Registrar</h4></center>
  <div id="test-swipe-2" class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
           <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%;margin-left: 20px; margin-top: 0px">
            <div class="card-content black-text">
    
<span class="card-title"><center><h5> Información complementaria</h5></center></span>
<div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle el "formato de informacion AS"</option>
          <?php 
                    $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM verificadorxempresa
                        INNER JOIN empresa ON empresa.id = verificadorxempresa.empresa_id
                        WHERE verificadorxempresa.persona_id = '$_SESSION[vev_verificador]'AND verificacion2 = 'si' AND informacion_as = 'no' ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social] - $rw[identificacion]</option>";          
                      }         
                    }
                  ?>
        </select>
      </div>        
</div>


<form id="form_informacion">
 <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>I. Información de sostenibilidad ambiental </div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd; ">Impactos Ambientales Positivos y Buenas Prácticas que aportan a la Sostenibilidad Ambiental</div>
      

      <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1. Impactos ambientales positivos identificados en el Plan Nacional de Negocios Verdes.</div>

          <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 21 order by id LIMIT 12";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
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
        ?>
         <div class='row'>
          <table  id="tabla_impacto">
            <tr>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id="otro_impacto_nom"  name="otro_impacto_nom[]"/>
                <label for="">Otro. ¿Cual?</label>
              </p>
              </div>
              </td>
              <td>
              <div class='input-field col s12 m12 l12'>
                 <select name='otro_impacto_amb_si_no[]' id='otro_impacto_amb_si_no'>
                <?php  
                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                ?>
                </select>
                <label for=''>Si/ No/ No Aplica</label>
              </div> 
              </td>
              <td>
                 <a class="btn-floating btn-large waves-effect waves-light green" id="añadir_input_impacto"><i class="material-icons">add</i></a>
              </td>
              </tr>
            </table>
          </div>

        <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">2.  Buenas Prácticas que se aplican en el negocio o en el área de influencia de la iniciativa.</div>

       <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 22 order by id LIMIT 13";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
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
        ?>
        <div class='row'>
          <table  id="tabla_practica">
            <tr>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id="otro_practicas_nom"  name="otro_practicas_nom[]"/>
                <label for="">Otro. ¿Cual?</label>
              </p>
              </div>
              </td>
              <td>
              <div class='input-field col s12 m12 l12'>
                 <select name='otro_practicas_amb_si_no[]' id='otro_practicas_amb_si_no'>
                <?php  
                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                ?>
                </select>
                <label for=''>Si/ No/ No Aplica</label>
              </div> 
              </td>
              <td>
                 <a class="btn-floating btn-large waves-effect waves-light green" id="añadir_input_practica"><i class="material-icons">add</i></a>
              </td>
              </tr>
            </table>
          </div>





          <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">3. Área de conservación o de los ecosistemas presentes en el negocio o su área de influencia. </div>

               <div class='row'>
      <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 23 order by id LIMIT 10";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
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
              </div> 

              ";

              }         
            }
        ?>
</div>
<div class='row'>
          <table  id="tabla_conservacion">
            <tr>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id="otro_conservacion_nom"  name="otro_conservacion_nom[]"/>
                <label for="">Otro. ¿Cual?</label>
              </p>
              </div>
              </td>
              <td>
              <div class='input-field col s12 m12 l12'>
                 <input type="text" name="otro_conservacion_area[]">
                <label for=''>Área(ha)</label>
              </div> 
              </td>
              <td>
                 <a class="btn-floating btn-large waves-effect waves-light green" id="añadir_input_conservacion"><i class="material-icons">add</i></a>
              </td>
              </tr>
            </table>
          </div>



<div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px"><p>4. Certificaciones</p>
      <p>Describa las certificaciones a las cuales ha accedido, bien sea por que estuvo certificado o se encuentra en proceso, si tuvo auditorías pero no fue certificado, en las observaciones describe de manera detallada la situación que presenta su negocio.</p> </div>
  
    <div class="row">
       <div class='input-field col s12 m6 l6'>
         <select  id='accedio_certificacion' >
          <option selected="" disabled="">Seleccione....</option>
          <option value="1">Si</option>
          <option value="2">No</option>
          </select>
          <label for='' style="color: black">¿Ha accedido a alguna certificación?</label>
       </div>

       <div class='input-field col s12 m6 l6'>
         <select  id='proceso_certificacion' >
          <option selected="" disabled="">Seleccione....</option>
          <option value="1">Si</option>
          <option value="2">No</option>
          </select>
          <label for='' style="color: black">¿Se encuentra en proceso de certificación? </label>
       </div>
    </div>
    
    <div id="contenido_certificacion">
      <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 24 order by id LIMIT 7";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"<div class='row'>
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
        ?>
       

        <div class='row'>
          <table  id="tabla_certificacion">
            <tr>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id="otro_certificacion_nom"  name="otro_certificacion_nom[]"/>
                <label for="">Otro. ¿Cual?</label>
              </p>
              </div>
              </td>
              <td>
               <div class='input-field col s12 m12 l12'>
                 <select name='otro_certificacion_etapa[]' id='otro_certificacion_etapa'>";
                <?php  
                 $s1="SELECT id,nombre from etapa order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                ?>
                </select>
                <label for='certificacion_etapa'>Etapa</label>
              </div> 
              </td>
              <td>
               <div class='input-field col s12 m12 l12'>
                 <input type='text' id='' name='otro_certificacion_vigencia[]' />
                <label for='certificacion_vigencia'>Vigencia</label>
              </div> 
              </td>
              <td>
               <div class='input-field col s12 m12 l12'>
                 <input type='text' id='' name='otro_observacion_vigencia[]' />
                <label for=''>Observación</label>
              </div> 
              </td>
              <td>
                 <a class="btn-floating btn-large waves-effect waves-light green" id="añadir_input_certificacion"><i class="material-icons">add</i></a>
              </td>
              </tr>
            </table>
          </div>
 </div>
                  </span></div>

  </li>

  <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>II. Información de Sostenibilidad Social</div>
      <div class="collapsible-body"><span>
        
      <div class="row" style="text-align: center;background-color: #bdbdbd; margin-bottom: 0px">1. Información Laboral. Características de los socios, colaboradores y empleados</div>

      <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1.1. Empleados</div>
      <div class="row" >

        <div class="col s12 m3 l3" style="">
          <div>1.1.1. Total de Empleados</div>
          <div class="divider"></div>
          <div class="row" style="margin-bottom: 0px">
            <div class="input-field col s12 m5 l5">
              <label style="color:black">Maculino</label style="color:black">
              </div>
              <div class="input-field col s12 m7 l7">
                <input id="t_masculino" class="key_total_empleados" name="t_masculino" type="number" class="validate">
                <label for="t_masculino">Cantidad</label>
              </div>
            </div>
            <div class="row" style="margin-top: 0px; margin-bottom: 0px">
              <div class="input-field col s12 m5 l5">
                <label style="color:black">Femenino</label>
              </div>
              <div class="input-field col s12 m7 l7">
                <input id="t_femenino" class="key_total_empleados" name="t_femenino" type="number" class="validate">
                <label for="t_femenino">Cantidad</label>
              </div>
            </div>
            <div class="row" style="margin-top: 0px; margin-bottom: 0px">
              <div class="input-field col s12 m5 l5">
                <label style="color:black">Total</label>
              </div>
              <div class="input-field col s12 m7 l7">
                <input id="t_empleados" name="t_empleados" type="number" class="" value="0" readonly="">
                <label for="t_empleados" class="active">Total</label>
              </div>
            </div>
          </div>


          <div class="col s12 m9 l9" style="">
            <div>1.1.2. Tipo de contrato</div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m2 l2">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="directo_m" class="key_directo" name="directo_m" type="number" class="validate">
                  <label for="directo_m">Directos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="indirecto_m" class="key_indirecto" name="indirecto_m" type="number" class="validate">
                  <label for="indirecto_m">Indirectos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="temporal_m" class="key_temporal" name="temporal_m" type="number" class="validate">
                  <label for="temporal_m">Temporales</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m2 l2">
                  <label style="color:black">Femenino</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="directo_f" class="key_directo" name="directo_f" type="number" class="validate">
                  <label for="directo_f">Directos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="indirecto_f" class="key_indirecto" name="indirecto_f" type="number" class="validate">
                  <label for="indirecto_f">Indirectos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="temporal_f" class="key_temporal" name="temporal_f" type="number" class="validate">
                  <label for="temporal_f">Temporales</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m2 l2">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_directo" name="t_directo" type="number" class="validate" readonly="" value="0">
                  <label for="t_directo">Total directos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_indirecto" name="t_indirecto" type="number" class="validate" readonly="" value="0">
                  <label for="t_indirecto">Total indirectos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_temporal" name="t_temporal" type="number" class="validate" readonly="" value="0">
                  <label for="t_temporal">Total temporales</label>
                </div>
              </div>
            </div>

          </div>


          <div class="row">
            <div class="col s12 m12 l12" style="">
            <div>1.1.3. Descripción etaria</div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m2 l2">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="18-30_m" class="key_18-30" name="18-30_m" type="number" class="validate">
                  <label for="18-30_m">Entre 18-30</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="30-50_m" class="key_30-50" name="30-50_m" type="number" class="validate">
                  <label for="30-50_m">Entre 30-50</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="mayor50_m" class="key_mayor50" name="mayor50_m" type="number" class="validate">
                  <label for="mayor50_m">Mayores de 50</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m2 l2">
                  <label style="color:black">Femenino</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="18-30_f" class="key_18-30" name="18-30_f" type="number" class="validate">
                  <label for="18-30_f">Entre 18-30</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="30-50_f" class="key_30-50" name="30-50_f" type="number" class="validate">
                  <label for="30-50_f">Entre 30-50</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="mayor50_f" class="key_mayor50" name="mayor50_f" type="number" class="validate">
                  <label for="mayor50_f">Mayores de 50</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m2 l2">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_18-30" name="t_18-30" type="number" class="" readonly="" value="0">
                  <label for="t_18-30">Total Entre 18-30</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_30-50" name="t_30-50" type="number" class="" readonly="" value="0">
                  <label for="t_30-50">Total Entre 30-50</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_mayor50" name="t_mayor50" type="number" class="" readonly="" value="0">
                  <label for="t_mayor50">Total Mayores de 50</label>
                </div>
              </div>
            </div>

          </div>








          <div class="row" >

          <div class="col s12 m12 l12" style="">
            <div>1.1.4. Condición de vulnerabilidad </div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m1 l1">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="discapacitado_m" class="key_discapacitado" name="discapacitado_m" type="number" class="validate">
                  <label for="discapacitado_m" class="active">Discapacitados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="madre_m" class="key_madre" name="madre_m" type="number" class="validate">
                  <label for="madre_m" class="active">Madres cabeza de familia</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="adulto_m" class="key_adulto" name="adulto_m" type="number" class="validate">
                  <label for="adulto_m">Adultos mayores</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="indigena_m" class="key_indigena" name="indigena_m" type="number" class="validate">
                  <label for="indigena_m">Indígenas</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="negras_m" class="key_negra" name="negras_m" type="number" class="validate">
                  <label for="negras_m">Comunidades negras</label>
                </div>
              </div>

              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                <label style="color:black">Femenino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="discapacitado_f" class="key_discapacitado" name="discapacitado_f" type="number" class="validate">
                  <label for="discapacitado_f" class="active">Discapacitados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="madre_f" class="key_madre" name="madre_f" type="number" class="validate">
                  <label for="madre_f" class="active">Madres cabeza de familia</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="adulto_f" class="key_adulto" name="adulto_f" type="number" class="validate">
                  <label for="adulto_f">Adultos mayores</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="indigena_f" class="key_indigena" name="indigena_f" type="number" class="validate">
                  <label for="indigena_f">Indígenas</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="negras_f" class="key_negra" name="negras_f" type="number" class="validate">
                  <label for="negras_f">Comunidades negras</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_discapacitado" name="t_discapacitado" type="number" class="" readonly="" value="0">
                  <label for="t_discapacitado">Total discapacitados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_madre" name="t_madre" type="number" class="" readonly="" value="0">
                  <label for="t_madre">Total madres cabeza de familia</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_adulto" name="t_adulto" type="number" class="" readonly="" value="0">
                  <label for="t_adulto">Total adulto mayor</label>
                </div>
                 <div class="input-field col s12 m2 l2">
                  <input id="t_indigena" name="t_indigena" type="number" class="" readonly="" value="0">
                  <label for="t_indigena">Total indígena</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_negra" name="t_negra" type="number" class="" readonly="" value="0">
                  <label for="t_negra">Total comunidad negra</label>
                </div>
              </div>



            <div class="divider"></div>

               <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m1 l1">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="campesino_m" class="key_campesino" name="campesino_m" type="number" class="validate">
                  <label for="campesino_m" class="active">Campesinos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="reinsertado_m" class="key_reinsertado" name="reinsertado_m" type="number" class="validate">
                  <label for="reinsertado_m" class="active">Reinsertados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="victima_m" class="key_victima" name="victima_m" type="number" class="validate">
                  <label for="victima_m">Victimas del conflicto armado</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="vulnerable_m" class="key_vulnerable" name="vulnerable_m" type="number" class="validate">
                  <label for="vulnerable_m">Vulmerabilidad economica</label>
                </div>
              </div>
              
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                <label style="color:black">Femenino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="campesino_f" class="key_campesino" name="campesino_f" type="number" class="validate">
                  <label for="campesino_f" class="active">Campesinos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="reinsertado_f" class="key_reinsertado" name="reinsertado_f" type="number" class="validate">
                  <label for="reinsertado_f" class="active">Reinsertados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="victima_f" class="key_victima" name="victima_f" type="number" class="validate">
                  <label for="victima_f">Victimas del conflicto armado</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="vulnerable_f" class="key_vulnerable" name="vulnerable_f" type="number" class="validate">
                  <label for="vulnerable_f">Vulmerabilidad economica</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_campesino" name="t_campesino" type="number" class="validate" readonly="" value="0">
                  <label for="t_campesino">Total campesinos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_reinsertado" name="t_reinsertado" type="number" class="validate" readonly="" value="0">
                  <label for="t_reinsertado">Total reinsertados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_victima" name="t_victima" type="number" class="validate" readonly="" value="0">
                  <label for="t_victima">Total victimas del conflicto</label>
                </div>
                 <div class="input-field col s12 m3 l3">
                  <input id="t_vulnerable" name="t_vulnerable" type="number" class="validate" readonly="" value="0">
                  <label for="t_vulnerable">Total vulnerabilidad economica</label>
                </div>
              </div>

               <div class="divider"></div>
                
                <div class="col s12 m12 l12" >
              <div class="input-field col s12 m3 l3">
                <input id="otro_vulnerablidad_nom" name="otro_vulnerablidad_nom" type="text" class="">
                <label for="otro_vulnerablidad_nom">Otro ¿Cual?</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_vulnerablidad_m" class="key_otro_vulne" name="otro_vulnerablidad_m" type="number" class="">
                <label for="otro_vulnerablidad_m">Masculino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_vulnerablidad_f" class="key_otro_vulne" name="otro_vulnerablidad_f" type="number" class="">
                <label for="otro_vulnerablidad_f">Femenino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input value="0" id="otro_vulnerablidad_total" type="number" class="" readonly>
                <label for="otro_vulnerablidad_total">Total</label>
              </div>
          </div>

            </div>

          </div>







          <div class="row" >

          <div class="col s12 m12 l12" style="">
            <div>1.1.5. Nivel Educativo</div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m1 l1">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="primaria_m" class="key_primaria" name="primaria_m" type="number">
                  <label for="primaria_m" class="active">Primaria</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="bachillerato_m" class="key_bachillerato" name="bachillerato_m" type="number" >
                  <label for="bachillerato_m" class="active">Bachillerato</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="tecnico_m" class="key_tecnico" name="tecnico_m" type="number">
                  <label for="tecnico_m">Técnico</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="tecnologo_m" class="key_tecnologo" name="tecnologo_m" type="number">
                  <label for="tecnologo_m">Tecnológico</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="universitario_m" class="key_universitario" name="universitario_m" type="number">
                  <label for="universitario_m">Universitario </label>
                </div>
              </div>

              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                <label style="color:black">Femenino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="primaria_f" class="key_primaria" name="primaria_f" type="number" class="validate">
                  <label for="primaria_f" class="active">Primaria</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="bachillerato_f" class="key_bachillerato" name="bachillerato_f" type="number" class="validate">
                  <label for="bachillerato_f" class="active">Bachillerato</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="tecnico_f" class="key_tecnico" name="tecnico_f" type="number" class="validate">
                  <label for="tecnico_f">Técnico</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="tecnologo_f" class="key_tecnologo" name="tecnologo_f" type="number" class="validate">
                  <label for="tecnologo_f">Tecnológico</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="universitario_f" class="key_universitario" name="universitario_f" type="number" class="validate">
                  <label for="universitario_f">Universitario </label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_primaria" name="t_primaria" type="number" class="validate" readonly="" value="0">
                  <label for="t_primaria">Total Primaria</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_bachillerato" name="t_bachillerato" type="number" class="validate" readonly="" value="0">
                  <label for="t_bachillerato">Total bachillerato</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_tecnico" name="t_tecnico" type="number" class="validate" readonly="" value="0">
                  <label for="t_tecnico">Total Técnico</label>
                </div>
                 <div class="input-field col s12 m2 l2">
                  <input id="t_tecnologo" name="t_tecnologo" type="number" class="validate" readonly="" value="0">
                  <label for="t_tecnologo">Total Tecnológico</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_universitario" name="t_universitario" type="number" class="validate" readonly="" value="0">
                  <label for="t_universitario">Total Universitario</label>
                </div>
              </div>


               <div class="divider"></div>
                
                <div class="col s12 m12 l12" >
              <div class="input-field col s12 m3 l3">
                <input id="otro_nivel_nom"  name="otro_nivel_nom" type="text" >
                <label for="otro_nivel_nom">Otro ¿Cual?</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_nivel_m" class="key_otro_nivel" name="otro_nivel_m" type="number" class="">
                <label for="otro_nivel_m">Masculino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_nivel_f" class="key_otro_nivel" name="otro_nivel_f" type="number">
                <label for="otro_nivle_f">Femenino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input value="0" id="t_otro_nivel" type="number" class="" readonly>
                <label for="t_otro_nivel">Total</label>
              </div>
          </div>

            </div>

          </div>

          <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1.2. Si el negocio es de Turismo de Naturaleza responder:</div>

      <div class="row" >

        <div class="col s12 m6 l6" style="">
          <div>Temporada alta</div>
          <div class="divider"></div>
          <div class="row" style="margin-bottom: 0px">
            <div class="input-field col s12 m3 l3">
              <label style="color:black">Maculino</label style="color:black">
              </div>
              <div class="input-field col s12 m9 l9">
                <input id="alta_m" class="key_alta" name="alta_m" type="number" class="validate">
                <label for="alta_m">Cantidad</label>
              </div>
            </div>
            <div class="row" style="margin-top: 0px; margin-bottom: 0px">
              <div class="input-field col s12 m3 l3">
                <label style="color:black">Femenino</label>
              </div>
              <div class="input-field col s12 m9 l9">
                <input id="alta_f" class="key_alta" name="alta_f" type="number" class="validate">
                <label for="alta_f">Cantidad</label>
              </div>
            </div>
            <div class="row" style="margin-top: 0px; margin-bottom: 0px">
              <div class="input-field col s12 m3 l3">
                <label style="color:black">Total</label>
              </div>
              <div class="input-field col s12 m9 l9">
                <input id="t_alta" name="t_alta" type="number" class="" readonly="" value="0" >
                <label for="t_alta">Total</label>
              </div>
            </div>
          </div>


          <div class="col s12 m6 l6" style="">
            <div>Temporada baja</div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m3 l3">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m9 l9">
                  <input id="baja_m" class="key_baja" name="baja_m" type="number" class="validate">
                  <label for="baja_m">Cantidad</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m3 l3">
                  <label style="color:black">Femenino</label>
                </div>
                <div class="input-field col s12 m9 l9">
                  <input id="baja_f" class="key_baja" name="baja_f" type="number" class="validate">
                  <label for="baja_f">Cantidad</label>
                </div>
                
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m3 l3">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m9 l9">
                  <input id="t_baja" name="t_baja" type="number" readonly="" value="0">
                  <label for="t_baja">Total directos</label>
                </div>
              </div>
            </div>

          </div>



      



  <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1.3. Socios / Colaboradores</div>
      <div class="row" >

          <div class="col s12 m12 l12" >
            <div>1.3. Socios / Colaboradores</div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m1 l1">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_discapacitado_m" class="key_s_discapacitado total_socio" name="s_discapacitado_m" type="number">
                  <label for="s_discapacitado_m" class="active">Discapacitados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_madre_m" class="key_s_madre total_socio" name="s_madre_m" type="number">
                  <label for="s_madre_m" class="active">Madres cabeza de familia</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_adulto_m" class="key_s_adulto total_socio" name="s_adulto_m" type="number">
                  <label for="s_adulto_m">Adultos mayores</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_indigena_m" class="key_s_indigena total_socio" name="s_indigena_m" type="number">
                  <label for="s_indigena_m">Indígenas</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_negra_m" class="key_s_negra total_socio" name="s_negra_m" type="number">
                  <label for="s_negra_m">Comunidades negras</label>
                </div>
              </div>

              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                <label style="color:black">Femenino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_discapacitado_f" class="key_s_discapacitado total_socio_f" name="s_discapacitado_f" type="number">
                  <label for="s_discapacitado_f" class="active">Discapacitados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_madre_f" class="key_s_madre total_socio_f" name="s_madre_f" type="number">
                  <label for="s_madre_f" class="active">Madres cabeza de familia</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_adulto_f" class="key_s_adulto total_socio_f" name="s_adulto_f" type="number">
                  <label for="s_adulto_f">Adultos mayores</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_indigena_f" class="key_s_indigena total_socio_f" name="s_indigena_f" type="number">
                  <label for="s_indigena_f">Indígenas</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_negra_f" class="key_s_negra total_socio_f" name="s_negra_f" type="number">
                  <label for="s_negra_f">Comunidades negras</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_s_discapacitado" name="t_s_discapacitado" type="number" readonly value="0">
                  <label for="t_s_discapacitado">Total discapacitados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_s_madre" name="t_s_madre" type="number" readonly value="0">
                  <label for="t_s_madre">Total madres cabeza de familia</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_s_adulto" name="t_s_adulto" type="number" readonly value="0">
                  <label for="t_s_adulto">Total adulto mayor</label>
                </div>
                 <div class="input-field col s12 m2 l2">
                  <input id="t_s_indigena" name="t_s_indigena" type="number" readonly value="0">
                  <label for="t_s_indigena">Total indígena</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_s_negra" name="t_s_negra" type="number" readonly value="0">
                  <label for="t_s_negra">Total comunidad negra</label>
                </div>
              </div>



            <div class="divider"></div>

               <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m1 l1">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_campesino_m" class="key_s_campesino total_socio" name="s_campesino_m" type="number">
                  <label for="s_campesino_m" class="active">Campesinos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_reinsertado_m" class="key_s_reinsertado total_socio" name="s_reinsertado_m" type="number">
                  <label for="s_reinsertado_m" class="active">Reinsertados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_victima_m" class="key_s_victima total_socio" name="s_victima_m" type="number">
                  <label for="s_victima_m">Victimas del conflicto armado</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_vulnerable_m" class="key_s_vulnerable total_socio" name="s_vulnerable_m" type="number">
                  <label for="s_vulnerable_m">Vulnerabilidad economica</label>
                </div>
              </div>
              
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                <label style="color:black">Femenino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="s_campesino_f" class="key_s_campesino total_socio_f" name="s_campesino_f" type="number">
                  <label for="s_campesino_f" class="active">Campesinos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_reinsertado_f" class="key_s_reinsertado total_socio_f" name="s_reinsertado_f" type="number">
                  <label for="s_reinsertado_f" class="active">Reinsertados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_victima_f" class="key_s_victima total_socio_f" name="s_victima_f" type="number">
                  <label for="s_victima_f">Victimas del conflicto armado</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="s_vulnerable_f" class="key_s_vulnerable total_socio_f" name="s_vulnerable_f" type="number">
                  <label for="s_vulnerable_f">Vulnerabilidad economica</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_s_campesino" name="t_s_campesino" type="number" readonly value="0">
                  <label for="t_s_campesino">Total campesinos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_s_reinsertado" name="t_s_reinsertado" type="number" readonly value="0">
                  <label for="t_s_reinsertado">Total reinsertados</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_s_victima" name="t_s_victima" type="number" readonly value="0">
                  <label for="t_s_victima">Total victimas del conflicto</label>
                </div>
                 <div class="input-field col s12 m3 l3">
                  <input id="t_s_vulnerable" name="t_s_vulnerable" type="number" readonly value="0">
                  <label for="t_s_vulnerable">Total vulnerabilidad economica</label>
                </div>
              </div>

               <div class="divider"></div>
                
                <div class="col s12 m12 l12" >
              <div class="input-field col s12 m3 l3">
                <input id="otro_vulne_nom_s" name="otro_vulne_nom_s" type="text">
                <label for="otro_vulne_nom_s">Otro ¿Cual?</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_vulne_m_s" class="key_otro_vulne_s total_socio" name="otro_vulne_m_s" type="number">
                <label for="otro_vulne_m_s">Masculino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_vulne_f_s" class="key_otro_vulne_s total_socio_f" name="otro_vulne_f_s" type="number">
                <label for="otro_vulne_f_s">Femenino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input value="0" id="otro_vulne_total" type="number" readonly>
                <label for="otro_vulne_total">Total otro</label>
              </div>
          </div>

                
                <div class="col s12 m12 l12" >
          <div class="divider"></div>
              <div class="input-field col s12 m4 l4">
                <input id="total_m_s" name="total_m_s" type="number"  value="0" readonly>
                <label for="total_m_s">Total de hombres</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input value="0" id="total_f_s" type="number"  readonly>
                <label for="total_ms">Total de mujeres</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input value="0" id="total_s" type="number"  readonly>
                <label for="total_s">Total</label>
              </div>
          </div>

            </div>

          </div>

<div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">3. ¿El negocio involucra a miembros de las comunidades locales?</div>


    <div class="row" >

          <div class="col s12 m12 l12" >
            <div></div>
            <div class="divider"></div>
            <div class="row" style="margin-bottom: 0px">
              <div class="input-field col s12 m1 l1">
                <label style="color:black">Maculino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="socio_m" name="socio_m" type="number" class="key_socio">
                  <label for="socio_m" class="active">Socios</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="directo_m_s" name="directo_m_s" type="number" class="key_directo_s">
                  <label for="directo_m_s" class="active">Empleados directos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="indirecto_m_s" name="indirecto_m_s" type="number" class="key_indirecto_s">
                  <label for="indirecto_m_s">Empleados indirectos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="temporal_m_s" name="temporal_m_s" type="number" class="key_temporal_s">
                  <label for="temporal_m_s">Empleados temporales</label>
                </div>
                
              </div>

              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                <label style="color:black">Femenino</label style="color:black">
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="socio_f" name="socio_f" type="number" class="key_socio">
                  <label for="socio_f" class="active">Socios</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="directo_f_s" name="directo_f_s" type="number" class="key_directo_s">
                  <label for="directo_f_s" class="active">Empleados directos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="indirecto_f_s" name="indirecto_f_s" type="number" class="key_indirecto_s">
                  <label for="indirecto_f_s">Empleados indirectos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="temporal_f_s" name="temporal_f_s" type="number" class="key_temporal_s">
                  <label for="temporal_f_s">Empleados temporales</label>
                </div>
              </div>
              <div class="row" style="margin-top: 0px; margin-bottom: 0px">
                <div class="input-field col s12 m1 l1">
                  <label style="color:black">Total</label>
                </div>
                <div class="input-field col s12 m2 l2">
                  <input id="t_socio" name="t_socio" type="number" readonly value="0">
                  <label for="t_socio">Total socios</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_directo_s" name="t_directo_s" type="number" readonly value="0">
                  <label for="t_directo_s">Total directos</label>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="t_indirecto_f" name="t_indirecto_f" type="number" readonly value="0">
                  <label for="t_indirecto_f">Total indirectos</label>
                </div>
                 <div class="input-field col s12 m3 l3">
                  <input id="t_temporal_s" name="t_temporal_s" type="number" readonly value="0">
                  <label for="t_temporal_s">Total temporales</label>
                </div>
              </div>


               <div class="divider"></div>
                
                <div class="col s12 m12 l12" >
              <div class="input-field col s12 m3 l3">
                <input id="otro_involucra_nom" name="otro_involucra_nom" type="text" >
                <label for="otro_involucra_nom">Otro ¿Cual?</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_involucra_m" name="otro_involucra_m" type="number" class="key_otro_involucra">
                <label for="otro_involucra_m">Masculino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input id="otro_involucra_f" name="otro_involucra_f" type="number" class="key_otro_involucra">
                <label for="otro_involucra_f">Femenino</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input value="0" id="total_otro_involucra" type="number" class="" readonly>
                <label for="total_otro_involucra">Total</label>
              </div>
          </div>

            </div>

          </div>

  

  <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">4. ¿El negocio realiza actividades con los miembros de las comunidades locales?</div>

      <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 26 order by id ";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
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
        ?>




        <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">5. ¿El negocio tiene programas para los socios, colaboradores y empleados?</div>

      <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 26 order by id ";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
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
        ?>
        <div class='row'>
          <table  id="tabla_programa">
            <tr>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id="otro_programa_nom"  name="otro_programa_nom[]"/>
                <label for="">Otro. ¿Cual?</label>
              </p>
              </div>
              </td>
              <td>
              <div class='input-field col s12 m12 l12'>
                 <select name='otro_programa_recurso[]' id='otro_programa_recurso'>
                <?php  
                 $s1="SELECT id,nombre from recurso order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                ?>
                </select>
                <label for=''>Resursos</label>
              </div> 
              </td>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id="otro_programa_desc"  name="otro_programa_desc[]"/>
                <label for="">Descripción</label>
              </p>
              </div>
              </td>
              <td>
                 <a class="btn-floating btn-large waves-effect waves-light green" id="añadir_input_programa"><i class="material-icons">add</i></a>
              </td>
              </tr>
            </table>
          </div>




          <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">6. ¿El negocio o el empresario ha recibido algún apoyo por parte de una institución pública o privada? </div>

      <?php 
        for ($i=0; $i < 10; $i++) { 

        echo " <div class='row'>
        <div class='input-field col s12 m4 l4'>
          <input type='text' id=''  name='apoyo_descripcion[]'/>
          <label for=''>Descripción</label>
        </div>
         <div class='input-field col s12 m4 l4'>
          <input type='text' id=''  name='apoyo_entidad[]'/>
          <label for=''>Entidad</label>
        </div>
        <div class='input-field col s12 m2 l2'>
           <select name='apoyo_tipo[]' id=''>";
             
               $s1="SELECT id,nombre from tipo_entidad";
               $r1= mysqli_query($conn,$s1) or die('Error');
               if(mysqli_num_rows($r1)>0){
                while($result1=mysqli_fetch_assoc($r1)){
                  echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                }
              }
             
          echo "</select>
          <label for=''>Tipo de entidad</label>
        </div> 

        <div class='input-field col s12 m2 l2'>
          <input type='number' id=''  name='apoyo_anio[]' maxlength='4' />
          <label for=''>Año</label>
        </div>
      </div>";
        }

       ?>

<div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">7 ¿Cúantas familias se benefician de la actividad del negocio, bien sea por generación de ingresos o por incentivos recibidos?</div>
     <div class="row">
       <div class='input-field col s12 m12 l12'>
          <input type='number' id='num_familias'  name='num_familias' />
          <label for='num_familias'>¿Cúantas familias se benefician de la actividad del negocio, bien sea por generación de ingresos o por incentivos recibidos?</label>
        </div>
     </div>


</span></div>
</li>
  













<li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>III. Cadena de Valor</div>
      <div class="collapsible-body"><span>
        
     <div class="row">
       <div class="input-field col s12 m10 l10">
         <p>En caso de no producir la materia prima directamente (cultivo, extracción de productos de ecosistemas naturales, aprovechamiento de especies nativas, plantación, entre otros) o si venden un producto a nombre de una organización (Asociación, Cooperativa, entre otros), responda las siguientes preguntas:</p>
       </div>
       <div class="input-field col s12 m2 l2">
         <div class='input-field col s12 m12 l12'>
               <select  id='cadena_si_no'>
                <option value="" disabled selected>Seleccione...</option>
                <option value="1">Si</option>
                <option value="2">No</option>
                </select>
                <label for='cadena_si_no'></label>
              </div> 
       </div>
     </div>
     <div id="cadena_contenido">
      <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 25 order by id LIMIT 8 ";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"<div class='row' >
              <div class='input-field col s12 m6 l6'>
                <p>
                <label for='cadena".$i."' style='color:black'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='cadena_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m6 l6'>
                 <select name='cadena_si_no[]' id='cadena_si_no".$i."'>";

                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                echo"
                </select>
                
              </div> 
              </div>";

              }         
            }
        ?>
        <div class='row'>
          <table  id="tabla_cadena">
            <tr>
              <td>
              <div class="input-field col s12 m12 l12">
                <p>
                <input type="text" id=""  name="otro_cadena_nom[]"/>
                <label for="">Otra actividad</label>
              </p>
              </div>
              </td>
              <td>
                 <a class="btn-floating btn-large waves-effect waves-light green" id="añadir_input_cadena"><i class="material-icons">add</i></a>
              </td>
              </tr>
            </table>
          </div>

        </div>

</span></div>
</li>

<li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> IV. Información de Sostenibilidad Económica</div>
      <div class="collapsible-body"><span>
         <div class="row" style="text-align: justify;background-color: #bdbdbd; ">Tenga en cuenta que la información reportada debe ser la del AÑO INMEDIATAMENTE ANTERIOR al año de diligenciamiento de la herramienta y las ventas son de valores REALES más no de proyecciones. Se debe diligenciar en PESOS.</div>

         <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">1. Enliste los bienes y/o servicios</div>

      <div class="row" id="bien_servi">
        
      </div>

      


      <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">5. Comercialización</div>
        <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 27 order by id ";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"<div class='row'>
              <div class='input-field col s12 m2 l2'>
                <p>
                <label for='comercializacion".$i."' style='color:black;'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='comercializacion_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m2 l1'>
                 <input type='number' id='comer_numero".$i."' name='comer_numero[]'/>
                <label for='comer_numero".$i."'>Número</label>
              </div> 
              <div class='input-field col s12 m2 l1'>
                 <input type='number' id='comer_local".$i."' name='comer_local[]'/>
                <label for='comer_local".$i."'>Local</label>
              </div> 
              <div class='input-field col s12 m2 l1'>
                 <input type='number' id='comer_regional".$i."' name='comer_regional[]'/>
                <label for='comer_regional".$i."'>Regional</label>
              </div> 
              <div class='input-field col s12 m2 l1'>
                 <input type='number' id='comer_nacional".$i."' name='comer_nacional[]'/>
                <label for='comer_nacional".$i."'>Nacional</label>
              </div> 
              <div class='input-field col s12 m2 l1'>
                 <input type='number' id='comer_global".$i."' name='comer_global[]'/>
                <label for='comer_global".$i."'>Global</label>
              </div> 
              <div class='input-field col s12 m12 l5'>
                 <input type='text' id='comer_observacion".$i."' name='comer_observacion[]'/>
                <label for='comer_observacion".$i."'>Observación</label>
              </div> 

              </div>
              <div class='divider'></div>";

              }         
            }
        ?>

    <div class="divider teal darken-4" style="height: 10px"></div>
      <div class="row" style="text-align: justify;background-color: #e0e0e0; padding: 5px">
      <div class="input-field col s12 m10 l10">
         6. Si el negocio es de Turismo de Naturaleza responder con una X que tipo de servicio turístico ofrece ( Si realiza más de una de éstas actividades cada uno debe tener su RNT)
      </div>
        <div class='input-field col s12 m2 l2'>
         <select  id='turismo_si_no'>
          <option value="" disabled selected>Seleccione...</option>
          <option value="1">X</option>
          <option value="2">No aplica</option>
          </select>
          <label for='turismo_si_no'></label>
        </div> 
     </div>

     <div id="turismo_contenido">
       <?php 
            $i = 0;
            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 28 order by id ";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){
                 $i++;
       echo"<div class='row'>
              <div class='input-field col s12 m7 l7'>
                <p>
                <label for='turismo".$i."' style='color:black'>$rw[descripcion]</label>
                <input type='hidden' id='".$i."'  name='turismo_hidden[]' value='$rw[id]' />
              </p>
              </div>

              <div class='input-field col s12 m5 l5'>
                 <select name='turismo_si_respuesta[]' id='turismo_si_respuesta".$i."'>";

                 $s1="SELECT id,nombre from si_no order by id desc ";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                echo"
                </select>
                <label for=''></label>
              </div> 
              </div>";

              }         
            }
        ?>
     </div>
      </div>

</span></div>
</li>

</ul>
<button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="registrar_informacion"><i class="material-icons right">add</i>Registrar </button>
</form> 
 </div>
          </div>
        </div>
      </div>
    </section>  
  </div>
</div>


<script type="text/javascript" src="js/accion_formato_informacion.js"></script>
<script type="text/javascript" src="js/select2.js"></script>

<script type="text/javascript">

  //otros de impacto ambiental
  $('#añadir_input_impacto').on('click', function(event) {
   $('#tabla_impacto').append('<tr><td><div class="input-field col s12 m12 l12"><input id="" name="otro_impacto_nom[]" type="text" class="validate"><label for="">Otro. ¿Cual?</label></div></td><td><div class="input-field col s12 m12 l12"><select id="otro_legislacion_c_nc" class="leg" name="otro_impacto_amb_si_no[]"> <?php $s="SELECT id,nombre from si_no order by id desc ";$r= mysqli_query($conn,$s)or die(mysqli_error($conn));if(mysqli_num_rows($r)>0){while($rw=mysqli_fetch_assoc($r)){echo"<option value=".$rw["id"].">$rw[nombre]</option>";}} ?> </select> </div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_impacto" id=""><i class="material-icons">remove</i></a></td> <tr>')        

      $('select').material_select(); 
        $('.remove_input_impacto').click(function(event) {
          $(this).closest('tr').remove();
        });             
   
});

//otros de buenas practicas
  $('#añadir_input_practica').on('click', function(event) {
   $('#tabla_practica').append('<tr><td><div class="input-field col s12 m12 l12"><input id="" name="otro_practicas_nom[]" type="text" class="validate"><label for="">Otro. ¿Cual?</label></div></td><td><div class="input-field col s12 m12 l12"><select id="" class="leg" name="otro_practicas_amb_si_no[]"> <?php $s="SELECT id,nombre from si_no order by id desc ";$r= mysqli_query($conn,$s)or die(mysqli_error($conn));if(mysqli_num_rows($r)>0){while($rw=mysqli_fetch_assoc($r)){echo"<option value=".$rw["id"].">$rw[nombre]</option>";}} ?> </select> </div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_practica" id=""><i class="material-icons">remove</i></a></td> <tr>')        

      $('select').material_select(); 
        $('.remove_input_practica').click(function(event) {
          $(this).closest('tr').remove();
        });             
   
});

//otros de area de conservacion
  $('#añadir_input_conservacion').on('click', function(event) {
   $('#tabla_conservacion').append('<tr><td><div class="input-field col s12 m12 l12"><input id="" name="otro_conservacion_nom[]" type="text" class="validate"><label for="">Otro. ¿Cual?</label></div></td><td><div class="input-field col s12 m12 l12 "><input type="text" name="otro_conservacion_area[]" id="" /><label for="">Area</label></div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_conservacion" id=""><i class="material-icons">remove</i></a></td> <tr>')        

      $('select').material_select(); 
        $('.remove_input_conservacion').click(function(event) {
          $(this).closest('tr').remove();
        });             
   
});

//otros de certificaciones
$('#añadir_input_certificacion').click(function(event) {
  $('#tabla_certificacion').append('<tr><td><div class="input-field col s12 m12 l12"><input type="text" name="otro_certificacion_nom[]" id=""/><label for="">Otro. ¿Cual?</label></div></td> <td><div class="input-field col s12 m12 l12"><select  name="otro_certificacion_etapa[]" id="otro_cert_etapa"> <?php $s="SELECT id,nombre from etapa";$r= mysqli_query($conn,$s)or die(mysqli_error($conn));if(mysqli_num_rows($r)>0){while($rw=mysqli_fetch_assoc($r)){echo"<option value=".$rw["id"].">$rw[nombre]</option>";}} ?> </select ><label>Etapa</label></div></td><td><div class="input-field col s12 m12 l12"><input  type="text" name="otro_certificacion_vigencia[]" id="otro_cert_vigencia" /><label for="">Vigencia</label></div></td><td><div class="input-field col s12 m12 l12"><input  type="text" name="otro_observacion_vigencia[]" id="otro_cert_obs" /><label for="">Observación</label></div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_certificacion" id=""><i class="material-icons">remove</i></a></td></tr>')
$('select').material_select(); 
$('.remove_input_certificacion').click(function(event) {
  $(this).closest('tr').remove();
});
});



// // añadir input de ecosistemas
// $('#añadir_input_ecosistema').click(function(event) {
//   $('#tabla_ecosistema').append('<tr><td><div class="input-field col s12 m12 l12"><input type="text" name="otro_ecosistema_nom[]" id="otro_ecosistema_nom" /><label for="">Otro. ¿Cual?</label></div></td><td><div class="input-field col s12 m12 l12"><input type="text" name="otro_ecosistema_area[]" id="otro_ecosistema_area" /><label for="">Área</label></div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_ecosistema" id=""><i class="material-icons">remove</i></a></td></tr>')

// $('.remove_input_ecosistema').click(function(event) {
// $(this).closest('tr').remove()
//   });

// });


// añadir input de programa
$('#añadir_input_programa').click(function(event) {
  $('#tabla_programa').append('<tr><td><div class="input-field col s12 m12 l12"><input type="text" name="otro_programa_nom[]" id=""/><label for="">Otro. ¿Cual?</label></div></td> <td><div class="input-field col s12 m12 l12"><select  name="otro_programa_recurso[]" id=""> <?php $s="SELECT id,nombre from recurso";$r= mysqli_query($conn,$s)or die(mysqli_error($conn));if(mysqli_num_rows($r)>0){while($rw=mysqli_fetch_assoc($r)){echo"<option value=".$rw["id"].">$rw[nombre]</option>";}} ?> </select ><label>Recursos</label></div></td><td><div class="input-field col s12 m12 l12"><input  type="text" name="otro_programa_desc[]" id="" /><label for="">Descripción</label></div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_programa" id=""><i class="material-icons">remove</i></a></td></tr>')
$('select').material_select(); 
$('.remove_input_programa').click(function(event) {
  $(this).closest('tr').remove();
});
});


// añadir input de cadena
$('#añadir_input_cadena').click(function(event) {
  $('#tabla_cadena').append('<tr><td><div class="input-field col s12 m12 l12"><input type="text" id="" name="otro_cadena_nom[]" /><label for="">Otra actividad</label></div></td><td><a class="btn-floating btn-large waves-effect waves-light red remove_input_cadena" id=""><i class="material-icons">remove</i></a></td></tr>')

$('.remove_input_cadena').click(function(event) {
$(this).closest('tr').remove()
  });

});

</script>
