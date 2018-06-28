<?php 
	 require_once('../../../conexion.php');
	  $empresa = $_POST['empresa'];
	 $opciones = array();
	 $opciones_v = array();
	 $nombre = array();
	 $nombre_v = array();
   $No = array();
   $No_v = array();

	  echo " <ul class='collapsible' data-collapsible='accordion'>";

	   $s2="SELECT verificacion_1.opciones_id as id,opciones.nombre,opciones.No FROM verificacion_1
			INNER JOIN opciones ON opciones.id = verificacion_1.opciones_id
			WHERE verificacion_1.si_no_noaplica_id = '1' AND verificacion_1.empresa_id = '$empresa'";
        $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
        if(mysqli_num_rows($r2)>0){

        echo "  <li >
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

  while($result1=mysqli_fetch_assoc($r2)){
  	array_push($opciones_v, $result1['id']);
  	array_push($nombre_v, $result1['nombre']);
    array_push($No_v, $result1['No']);


  	$s= "SELECT verificacion_1.opciones_id,plan_mejora.acciones,plan_mejora.actor,plan_mejora.resultado,plan_mejora.observacion,plan_mejora.1,plan_mejora.2,plan_mejora.3,plan_mejora.4,plan_mejora.5,plan_mejora.6,plan_mejora.7,plan_mejora.8,plan_mejora.9,plan_mejora.10,plan_mejora.11,plan_mejora.12,opciones.nombre,opciones.No FROM verificacion_1
			INNER JOIN plan_mejora ON plan_mejora.opciones_id = verificacion_1.opciones_id
			INNER JOIN opciones ON opciones.id = verificacion_1.opciones_id
			WHERE verificacion_1.si_no_noaplica_id = '1' AND verificacion_1.empresa_id = '$empresa' AND plan_mejora.empresa_id = '$empresa'";
	$r= mysqli_query($conn,$s) or die(mysqli_error($conn));
	while ($rw=mysqli_fetch_assoc($r)) {
		array_push($opciones, $rw['opciones_id']);
		array_push($nombre, $rw['nombre']);
    array_push($No, $rw['No']);
		if ($result1['id']==$rw['opciones_id']) {

			echo " <tr>
      <td>
     <label for=''>$rw[No]</label>
      </td>
      <td>
      <input type='hidden' name='mejora_opcion[]' value='$rw[opciones_id]' />
     <label for=''>$rw[nombre]</label>
      </td>
      <td> <div class='input-field col '>
                   <textarea id='' name='accion[]' class='materialize-textarea'>$rw[acciones]</textarea>
            </div></td>

      <td> <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='actor[]' class='materialize-textarea'>$rw[actor]</textarea>
            </div></td>
      <td > <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='resultado[]' class='materialize-textarea'>$rw[resultado]</textarea>
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='uno[]' class='materialize-textarea' maxlength='1'>$rw[1]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='dos[]' class='materialize-textarea' maxlength='1' pattern='X|x'>$rw[2]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='tres[]' class='materialize-textarea' maxlength='1'>$rw[3]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cuatro[]' class='materialize-textarea' maxlength='1'>$rw[4]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cinco[]' class='materialize-textarea' maxlength='1'>$rw[5]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='seis[]' class='materialize-textarea' maxlength='1'>$rw[6]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='siete[]' class='materialize-textarea' maxlength='1'>$rw[7]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='ocho[]' class='materialize-textarea' maxlength='1'>$rw[8]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='nueve[]' class='materialize-textarea' maxlength='1'>$rw[9]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='diez[]' class='materialize-textarea' maxlength='1'>$rw[10]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='once[]' class='materialize-textarea' maxlength='1'>$rw[11]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='doce[]' class='materialize-textarea' maxlength='1'>$rw[12]</textarea>
                 
            </div></td>
      <td><div class='input-field '>
                <textarea id='' name='observacion[]' class='materialize-textarea'>$rw[observacion]</textarea>
                
              </div></td>
    </tr>";
			
		}
	}
    }
 $opcion_dif = array_values(array_diff($opciones_v, $opciones)) ;
 $nombre_dif = array_values(array_diff($nombre_v, $nombre)) ;
 $No_dif = array_values(array_diff($No_v, $No)) ;
for ($i=0; $i < count($opcion_dif) ; $i++) { 
	echo " <tr>
  <td>
     <label for=''>$No_dif[$i]</label>
      </td>
      <td>
      <input type='hidden' name='mejora_opcion[]' value='$opcion_dif[$i]' />
     <label for=''>$nombre_dif[$i]</label>
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
echo "  
  </tbody>
</table></li>";
// Segundo li
	$opciones = array();
	$opciones_v = array();
	$nombre = array();
	$nombre_v = array();
  $No = array();
   $No_v = array();
$s2="SELECT verificacion_2.opciones_id as id,opciones.nombre,opciones.No FROM verificacion_2
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE verificacion_2.calificador_id != '3' AND  verificacion_2.calificador_id != '4' AND verificacion_2.empresa_id = '$empresa'";
        $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
        if(mysqli_num_rows($r2)>0){
        	 echo "  <li >
      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i> Nivel 1</div>
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
  while($result1=mysqli_fetch_assoc($r2)){
  	array_push($opciones_v, $result1['id']);
  	array_push($nombre_v, $result1['nombre']);
    array_push($No_v, $result1['No']);

  	$s= "SELECT verificacion_2.opciones_id,plan_mejora.acciones,plan_mejora.actor,plan_mejora.resultado,plan_mejora.observacion,plan_mejora.1,plan_mejora.2,plan_mejora.3,plan_mejora.4,plan_mejora.5,plan_mejora.6,plan_mejora.7,plan_mejora.8,plan_mejora.9,plan_mejora.10,plan_mejora.11,plan_mejora.12,opciones.nombre,opciones.No FROM verificacion_2
			INNER JOIN plan_mejora ON plan_mejora.opciones_id = verificacion_2.opciones_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE verificacion_2.calificador_id != '3' AND calificador_id != '4' AND verificacion_2.empresa_id = '$empresa' AND plan_mejora.empresa_id = '$empresa'";
	$r= mysqli_query($conn,$s) or die(mysqli_error($conn));
	while ($rw=mysqli_fetch_assoc($r)) {
		array_push($opciones, $rw['opciones_id']);
		array_push($nombre, $rw['nombre']);
    array_push($No, $rw['No']);
		if ($result1['id']==$rw['opciones_id']) {
			echo " <tr>
      <td>
     <label for=''>$rw[No]</label>
      </td>
      <td>
      <input type='hidden' name='mejora_opcion[]' value='$rw[opciones_id]' />
     <label for=''>$rw[nombre]</label>
      </td>
      <td> <div class='input-field col '>
                   <textarea id='' name='accion[]' class='materialize-textarea'>$rw[acciones]</textarea>
            </div></td>

      <td> <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='actor[]' class='materialize-textarea'>$rw[actor]</textarea>
            </div></td>
      <td > <div class='input-field col s12 m12 l12'>
                   <textarea id='' name='resultado[]' class='materialize-textarea'>$rw[resultado]</textarea>
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='uno[]' class='materialize-textarea' maxlength='1'>$rw[1]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='dos[]' class='materialize-textarea' maxlength='1' pattern='X|x'>$rw[2]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='tres[]' class='materialize-textarea' maxlength='1'>$rw[3]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cuatro[]' class='materialize-textarea' maxlength='1'>$rw[4]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='cinco[]' class='materialize-textarea' maxlength='1'>$rw[5]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='seis[]' class='materialize-textarea' maxlength='1'>$rw[6]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='siete[]' class='materialize-textarea' maxlength='1'>$rw[7]</textarea>
                  
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='ocho[]' class='materialize-textarea' maxlength='1'>$rw[8]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='nueve[]' class='materialize-textarea' maxlength='1'>$rw[9]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='diez[]' class='materialize-textarea' maxlength='1'>$rw[10]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='once[]' class='materialize-textarea' maxlength='1'>$rw[11]</textarea>
                 
            </div></td>
      <td><div class='input-field col s12 m12 l12' style='padding-left: 0px; padding-right: 0px'>
                  <textarea id='' name='doce[]' class='materialize-textarea' maxlength='1'>$rw[12]</textarea>
                 
            </div></td>
      <td><div class='input-field '>
                <textarea id='' name='observacion[]' class='materialize-textarea'>$rw[observacion]</textarea>
                
              </div></td>
    </tr>";

		}
	}
        	}
        $opcion_dif = array_values(array_diff($opciones_v, $opciones)) ;
 $nombre_dif = array_values(array_diff($nombre_v, $nombre)) ;
 $No_dif = array_values(array_diff($No_v, $No)) ;
for ($i=0; $i < count($opcion_dif) ; $i++) { 
	echo " <tr>
  <td>
     <label for=''>$No_dif[$i]</label>
      </td>
      <td>
      <input type='hidden' name='mejora_opcion[]' value='$opcion_dif[$i]' />
     <label for=''>$nombre_dif[$i]</label>
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

echo "  
  </tbody>
</table></li>
</ul> <button  class='yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar_plan_mejora'><i class='material-icons right'>edit</i>Modifcar</button>";




echo "<script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 $('.activar').addClass('active')
  })

</script>";
 ?>
