<?php
  if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../conexion.php');
    }

    $empresa = $_POST['empresa'];
echo " <ul class='collapsible' data-collapsible='accordion'>";
  
    $opciones_id = '';
    $s2="SELECT pregunta_id FROM hoja_verificacion_1 WHERE respuesta_id = '2' AND empresa_id = '$empresa'";
        $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
        if(mysqli_num_rows($r2)>0){
 
   echo "  <li>
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Nivel 0</div>
      <div class='collapsible-body'><span>
        <table class='responsive-table striped bordered'>
  <thead>
    <th style='width: 1%'><label for=''>Nº</label></th>
    <th style='width: 20%'><label for=''>Indicadores</label></th>
    <th style='width: 15%'><label for=''>Acciones correctivos por indicador</label></th>
    <th style='width: 15%'><label for=''>Actor que podría participar en la actividad</label></th>
    <th style='width: 15%'><label for=''>Resultado esperado</label></th>
    <th><label>1</label></th>
    <th><label>2</label></th>
    <th><label>3</label></th>
    <th><label>4</label></th>
    <th><label>5</label></th>
    <th><label>6</label></th>
    <th><label>7</label></th>
    <th><label>8</label></th>
    <th><label>9</label></th>
    <th><label>10</label></th>
    <th><label>11</label></th>
    <th><label>12</label></th>
    <th><label>Observaciones</label></th>
  </thead>
  <tbody>";
      
        while($result2=mysqli_fetch_assoc($r2)){
          $opciones_id = $result2['pregunta_id'];

          $s1="SELECT id,descripcion,No from pregunta_indicativa where id = '$opciones_id'";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                  
      
echo " <tr>
      <td>
     <p style='text-align:justify'>$result1[No]</p>
      </td>
      <td>
      <input type='hidden' name='mejora_opcion[]' value='$result1[id]' />
     <p style='text-align:justify'>$result1[descripcion]</p>
      </td>
      <td> <div class='input-field col '>
                   <textarea id='' name='accion[]' class='materialize-textarea'></textarea>
            </div></td>

      <td> <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='actor[]' class='materialize-textarea'></textarea>
            </div></td>
      <td > <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='resultado[]' class='materialize-textarea'></textarea>
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='uno[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='dos[]' class='materialize-textarea' maxlength='1' pattern='X|x'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='tres[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cuatro[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cinco[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='seis[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='siete[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='ocho[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='nueve[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='diez[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='once[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='doce[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field '>
                <textarea id='' name='observacion[]' class='materialize-textarea'></textarea>
                
              </div></td>
    </tr>";
    }
    }

    }
  }

  echo "  
  </tbody>
</table></li>";
//Segundo Li

 $opciones_id = '';
    $s2="SELECT hoja_verificacion_2.pregunta_id from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON hoja_verificacion_2.pregunta_id = pregunta_indicativa.id WHERE calificador_id != '3' and calificador_id != '4' AND pregunta_indicativa.aspecto_id != 19 AND pregunta_indicativa.aspecto_id != 20 AND hoja_verificacion_2.empresa_id = '$empresa'";
        $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
        if(mysqli_num_rows($r2)>0){
 
   echo "  <li >
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i> Nivel 1</div>
      <div class='collapsible-body'><span>
        <table class='responsive-table striped bordered'>
  <thead>
  <th style='width: 20%'><label for=''>Nº</label></th>
    <th style='width: 20%'><label for=''>Indicadores</label></th>
    <th style='width: 15%'><label for=''>Acciones correctivos por indicador</label></th>
    <th style='width: 15%'><label for=''>Actor que podría participar en la actividad</label></th>
    <th style='width: 15%'><label for=''>Resultado esperado</label></th>
    <th><label>1</label></th>
    <th><label>2</label></th>
    <th><label>3</label></th>
    <th><label>4</label></th>
    <th><label>5</label></th>
    <th><label>6</label></th>
    <th><label>7</label></th>
    <th><label>8</label></th>
    <th><label>9</label></th>
    <th><label>10</label></th>
    <th><label>11</label></th>
    <th><label>12</label></th>
    <th><label>Observaciones</label></th>
  </thead>
  <tbody>";
      
        while($result2=mysqli_fetch_assoc($r2)){
          $opciones_id = $result2['pregunta_id'];

          $s1="SELECT id,descripcion,No from pregunta_indicativa where id = '$opciones_id'";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                  
      
echo " <tr>
      <td>
     <p style='text-align:justify'>$result1[No]</p>
      </td>
      <td>
      <input type='hidden' name='mejora_opcion[]' value='$result1[id]' />
     <p style='text-align:justify'>$result1[descripcion]</p>
      </td>
      <td> <div class='input-field col '>
                   <textarea id='' name='accion[]' class='materialize-textarea'></textarea>
            </div></td>

      <td> <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='actor[]' class='materialize-textarea'></textarea>
            </div></td>
      <td > <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='resultado[]' class='materialize-textarea'></textarea>
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='uno[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='dos[]' class='materialize-textarea' maxlength='1' pattern='X|x'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='tres[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cuatro[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cinco[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='seis[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='siete[]' class='materialize-textarea' maxlength='1'></textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='ocho[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='nueve[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='diez[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='once[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='doce[]' class='materialize-textarea' maxlength='1'></textarea>
                 
            </div></td>
      <td><div class='input-field '>
                <textarea id='' name='observacion[]' class='materialize-textarea'></textarea>
                
              </div></td>
    </tr>";
    }
    }

    }
  }

  echo "  
  </tbody>
</table></li>
</ul> <button  class=' green darken-2 btn right' style='margin-bottom: 8px' id='insertar_plan_mejora'><i class='material-icons right'>add</i>Registrar</button>";

echo "
<script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 $('.activar').addClass('active')

 


  })

</script>";
  
      