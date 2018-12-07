
<?php 

   require_once ('../../mpdf60/mpdf.php');
   require_once ('../../mpdf60/graph.php');
  
  define("_TTF_FONT_NORMAL", 'arial.ttf');
define("_TTF_FONT_BOLD", 'arialbd.ttf');

if(isset($_GET["empresa"])){
   require_once('../../conexion.php');
   $empresa = $_GET["empresa"];
   $razon_social = '';
   $correo = '';
   $nombre_depto = '';
   $aut_ambiental = '';
   $representante = '';
   $identificacion ='';
   $celular = '';
   $municipio = '';
   $direccion = '';
   $descripcion = '';
   $desc_impacto_amb = '';
   $subsector = '';
   $sector = '';
   $categoria = '';
   $fecha_registro ='';
   
   $s="SELECT empresa.razon_social, departamento.nombre as nombre_depto, departamento.autoridad_amb as aut, persona.nombre1 AS representante, persona.identificacion, persona.celular, persona.correo, municipio.nombre AS municipio, persona.direccion, empresa.descripcion, subsector.nombre AS subsector, sector.nombre AS sector, categoria.nombre AS categoria, empresa.fecha_registro FROM empresa INNER JOIN municipio ON municipio.id = empresa.municipio_id INNER JOIN departamento ON departamento.id = municipio.departamento_id INNER JOIN persona ON persona.id = empresa.persona_id INNER JOIN subsector ON subsector.id = empresa.subsector_id INNER JOIN sector ON sector.id = subsector.sector_id INNER JOIN categoria ON categoria.id = sector.categoria_id WHERE empresa.id = '$empresa'";

   $r = mysqli_query($conn,$s);
   while ($rw=mysqli_fetch_assoc($r)) {
  $razon_social = $rw['razon_social'];
  $correo = $rw['correo'];
  $nombre_depto = $rw['nombre_depto'];
   $aut_ambiental = $rw['aut'];
   $representante = $rw['representante'];
   $identificacion =$rw['identificacion'];
   $celular = $rw['celular'];
   $municipio = $rw['municipio'];
   $direccion = $rw['direccion'];
   $descripcion = $rw['descripcion'];
   $subsector = $rw['subsector'];
   $sector = $rw['sector'];
   $categoria = $rw['categoria'];
   $fecha_registro = $rw['fecha_registro'];
   }
  
   $lider = '';
   $s = "SELECT lider FROM bienes_servicios WHERE empresa_id = '$empresa' AND lider != '' ";
   $r = mysqli_query($conn,$s);
   while ($rw=mysqli_fetch_assoc($r)) {
    $lider = $rw['lider'];
   }

$verificador='';
   $s = "SELECT nombre FROM verificador
   WHERE empresa_id = '$empresa'";
   $r = mysqli_query($conn,$s);
   while ($rw=mysqli_fetch_assoc($r)) {
    $verificador = $rw['nombre'];
   }
// Cabezera del pdf
   $cabezera='
   <header><div style="text-align: center; font-weight: bold;">
   <table align="center">
    <thead>
      <tr>
        <td><img class="logo" id="logo" src="../../img/min_ambiente.png" style="padding-bottom: 5px;padding-left: 5px;border-right-width: 7px;border-top-width: 5px;padding-right: 7px;"></td>

        <td><img class="logo" id="logo" src="../../img/logo_nv.png" style="width:80px;height:80px;padding-bottom: 5px;padding-left: 7px;border-right-width: 5px;border-top-width: 5px;padding-right: 7px;"></td>

        <td><img class="logo" id="logo" src="../../img/logo_code.png" style="width:80px;height:80px;padding-bottom: 5px;padding-left: 7px;border-right-width: 5px;border-top-width: 5px;padding-right: 7px;"></td>

        <td><img class="logo" id="logo" src="../../img/logo1.png" style="width:80px;height:80px;padding-bottom: 5px;padding-left: 7px;border-right-width: 5px;border-top-width: 5px;padding-right: 7px;"></td>
      </tr>
    </thead>
    
  </table>
</div></header>
     ';
//Cuerpo del pdf
   $html.='
  <style>
          th{
            text-align: left;
            background-color: #e0e0e0
          }
        </style>


<div style="">
   <div style="border: 1px solid green; text-align: justify">Nota: Señor empresario, recuerde que esta es una HOJA RESUMEN de toda la información diligenciada, por tanto, si desea corroborar o saber información adicional, por favor remitirse a la hoja de verificación original y diligenciada</div>
  <div style="margin-top: 10px; padding-top:5px;padding-bottom: 5px;  background-color:  #a5d6a7">
    <table width="100%">
      <tr>
        <td width="50%">I. Información general</td>
        <td width="25%">Fecha de verificación:</td>
        <td width="25%">'.$fecha_registro.'</td>
      </tr>
    </table>
  </div>
  <table width="100%">
    <thead>
      <tr>
       <td width="50%"></td>
        <td width="30%"></td>
        <td width="15%"></td>
        <td width="25%"></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th >
          Nombre o razón social
        </th>
        <td  colspan="3">
          '.$razon_social.'
        </td>
      </tr>
      <tr>
        <th >
          E-mail
        </th>
        <td  colspan="3">
         '.$correo.'
        </td>
      </tr>
      <tr>
        <th >
          Departamento
        </th>
         </th>
        <td  colspan="3">
         '.$nombre_depto.'
        </td>
      </tr>
      <tr>
        <th >
          Autoridad ambiental
        </th>
        <td  colspan="3">
         '.$aut_ambiental.'
        </td>
      </tr>
      <tr>
        <th >
          Nombre Representante Legal
        </th>
        <td  colspan="3">
         '.$representante.'
        </td>
      </tr>
      <tr>
        <th>
         Número de indentificación
        </th>
        <td  colspan="3">
        '.$identificacion.'
        </td>
      </tr>
      <tr>
        <th>
          Celular
        </th>
        <td  colspan="3">
         '.$celular.'
        </td>
      </tr>
      <tr>
        <th >
          Municipio
        </th>
        <td  colspan="3">
         '.$municipio.'
        </td>
      </tr>
      <tr>
        <th >
          Dirección de correspondencia
        </th>
        <td  colspan="3">
        '.$direccion.'
        </td>
      </tr>
      <tr>
        <th >
         Nombre del verificador
        </th>
        <td >
         '.$verificador.'
        </td>
        <th align="center">
          Operador
        </th>
        <td align="right">
          UT Negocios verdes
        </td>
  

      </tr>
    </tbody>

  </table>


  <table style="margin-top: 20px" width="100%">
    <thead>
      <tr>
        <td width="30%"></td>
        <td width="70%"></td>
      </tr>
      
    </thead>
    <tbody>
      <tr>
        <th>Descripcion del negocio</th>
        <td>'.$descripcion.'
        </td>
      </tr>
      <tr>
        <th>Caracteristicas ambientales del negocio</th>
        <td>'.$desc_impacto_amb.'
        </td>
      </tr>
    </tbody>
  </table>


  <table style="margin-top: 20px" width="100%">
    <thead>
      <tr>
        <td style="border: 1px solid green; background-color: #a5d6a7" width="30%">Categoria</td>
        <td style="border: 1px solid green; background-color: #a5d6a7" width="35%">Sector</td>
        <td style="border: 1px solid green; background-color: #a5d6a7" width="35%">Subsector</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>'.$categoria.'</td>
        <td>'.$sector.'</td>
        <td>'.$subsector.'</td>
      </tr>
    </tbody>
  </table>

  <table style="margin-top: 20px" width="100%">
    <thead >
      <tr>
        <td></td>
        <td></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th width="30%">Bien o servicio Líder</th>
        <td width="60%">'.$lider.'</td>
      </tr>
    </tbody>
  </table>';

 $s="SELECT * from hoja_verificacion_2 WHERE empresa_id = '$empresa'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){

          $division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 35 AND hoja_verificacion_2.pregunta_id <= 43 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
$r = mysqli_query($conn,$s);
while ($rw = mysqli_fetch_assoc($r)) {
  if ($rw['calificador'] == 'N/A') {
    $division = $division;
  }else{
    $division++;
  }
$suma = $suma + $rw['calificador'];
}
$prom1 = round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 44 AND hoja_verificacion_2.pregunta_id <= 47 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom2 =  round($suma/$division*100, 0) ;

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 48 AND hoja_verificacion_2.pregunta_id <= 50 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom3=  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 51 AND hoja_verificacion_2.pregunta_id <= 52 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom4=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 53 AND hoja_verificacion_2.pregunta_id <= 54 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom5=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 55 AND hoja_verificacion_2.pregunta_id <= 57 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom6=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 58 AND hoja_verificacion_2.pregunta_id <= 60 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom7=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 61 AND hoja_verificacion_2.pregunta_id <= 64 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom8=  round($suma/$division*100, 2) ;

  $division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 65 AND hoja_verificacion_2.pregunta_id <= 67 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom9=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 68 AND hoja_verificacion_2.pregunta_id <= 73 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom10=  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 74 AND hoja_verificacion_2.pregunta_id <= 76 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom11=  round($suma/$division*100, 2) ;

  $suma_total = $prom1+$prom2+$prom3+$prom4+$prom5+$prom6+$prom7+$prom8+$prom9+$prom10+$prom11;
  $prom_total1= round($suma_total/11, 2);

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 77 AND hoja_verificacion_2.pregunta_id <= 78 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom12=  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 79 AND hoja_verificacion_2.pregunta_id <= 81 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom13=  round($suma/$division*100, 2) ;

  $suma_total2 = $prom12+$prom13;
  $prom_total2= round($suma_total2/2, 2);


$html.='<table id="t2" class="" style="margin-top:20px">
          <thead>
            <tr>
              <th style="width: 100%;background-color:#a5d6a7" class="" colspan="3">Resultado Nivel 1. Criterios de Cumplimiento de Negocios Verdes</th>
            </tr>
            <tr>
            <th style="width:5%" class="grey darken-1">Item</th>
              <th style="width:60%;" class="grey darken-1">Criterio</th>
              <th style="" class="grey darken-1">Promedio</th>
            </tr>
          </thead>
          <tbody>
            <tr >
              <td>1</td>
              <td>Viabilidad económica del Negocio</td>
              <td id="prom1">'.$prom1.'%</td>
            </tr>
            <tr style="background-color:#eeeeee;">
            <td>2</td>
              <td>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</td>
              <td id="prom2">'.$prom2.'%</td>
            </tr>
            <tr>
            <td>3</td>
              <td>Enfoque ciclo de vida del bien o servicio</td>
              <td id="prom3">'.$prom3.'%</td>
            </tr>
            <tr style="background-color:#eeeeee;">
            <td>4</td>
              <td>Vida útil</td>
              <td id="prom4">'.$prom4.'%</td>
            </tr>
            <tr>
            <td>5</td>
              <td>Sustitución de sustancias o materiales peligrosos</td>
              <td id="prom5">'.$prom5.'%</td>
            </tr>
            <tr style="background-color:#eeeeee;">
            <td >6</td>
              <td>Reciclabilidad y/o uso de materiales reciclados</td>
              <td id="prom6">'.$prom6.'%</td>
            </tr>
            <tr>
            <td>7</td>
              <td>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</td>
              <td id="prom7">'.$prom7.'%</td>
            </tr>
            <tr style="background-color:#eeeeee;">
            <td >8</td>
              <td>Responsabilidad social al interior de la empresa</td>
              <td id="prom8">'.$prom8.'%</td>
            </tr>
            <tr>
            <td>9</td>
              <td>Responsabilidad social en la cadena de valor de la empresa</td>
              <td id="prom9">'.$prom9.'%</td>
            </tr>
            <tr style="background-color:#eeeeee;">
            <td >10</td>
              <td>Responsabilidad social al exterior de la empresa</td>
              <td id="prom10">'.$prom10.'%</td>
            </tr>
            <tr>
              <td>11</td>
              <td>Comunicación de atributos del bien y servicio</td>
              <td id="prom11">'.$prom11.'%</td>
            </tr>
            <tr>
              <th class=" grey lighten-1"  colspan="2">Puntaje total </th>
              <th class="grey lighten-1" id="total">'.$prom_total1.'% </th>
            </tr>
          </tbody>
          </table>




          

<jpgraph table="t2" type="" stacked="1" dpi="400" title="Resultados de nivel 1" splines="1" bandw="0" antialias="1" label-y="% Puntaje" label-x="Item" axis-x="text" axis-y="lin" percent="0" series="cols" data-col-begin="2" data-row-begin="2" data-col-end="0" data-row-end="-1" show-values="1" width="100%" legend-overlap="1" hide-grid="1" hide-y-axis="1" />



        <table style="margin-top:20px">
          <thead>
            <tr>
              <th style="width: 100%; background-color:#a5d6a7" class="green center" colspan="2">Resultado Nivel 2. Criterios Adicionales (ideales) Negocios Verdes</th>
            </tr>
            <tr>
              <th style="width: 90%;" class="grey darken-1">Criterio</th>
              <th style="" class="grey darken-1">Promedio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Esquemas, programas o reconocimientos implementados o recibidos</td>
              <td id="prom12">'.$prom12.'%</td>
            </tr>
            <tr>
              <td>Responsabilidad social al interior de la empresa adicional</td>
              <td id="prom13">'.$prom13.'%</td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="total2">'.$prom_total2.'% </th>
            </tr>
            
          </tbody>
        </table>

        <table style="margin-top:20px;width:100%">
          <thead>
            <tr>
              <th style="width: 100%; background-color:#a5d6a7" class="green center" colspan="2">Resultado Nivel 1 + Nivel 2</th>
            </tr>
            <tr>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="width: 70%">Puntaje Total. Criterios de Cumplimiento de Negocios Verdes</td>
              <td id="prom12" style="width: 30%">'.$prom_total1.'%</td>
            </tr>
            <tr>
              <td>Puntaje Total.  Criterios Adicionales (ideales) Negocios Verdes</td>
              <td id="prom13">'.$prom_total2.'%</td>
            </tr>
            <tr>';
              $suma_total3 = $prom_total1+$prom_total2;
              $resultado= round($suma_total3/2, 2);

              $resultado_letra = '';
              if ($prom_total1 >= 0 && $prom_total1 <= 10) {
               $resultado_letra = 'Inicial';
              }else if ($prom_total1 > 10 && $prom_total1 <= 30) {
                $resultado_letra = 'Básico';
              }else if ($prom_total1 > 30 && $prom_total1 <= 50) {
                $resultado_letra = 'Intermedio';
              }else if ($prom_total1 > 50 && $prom_total1 <= 80) {
                $resultado_letra = 'Satisfactorio';
              }else if ($prom_total1 > 80 && $prom_total1 <= 100 && $prom_total2 < 50) {
               $resultado_letra = 'Avanzado';
              }else if ($prom_total1 > 80 && $prom_total1 <= 100 && $prom_total2 >= 50 ) {
               $resultado_letra = 'Ideal';
              }
            $html.='
              <th class=" grey lighten-1">Resultado</th>
              <th class="grey lighten-1" id="total2">'.$resultado_letra.' </th>
            </tr>
            
          </tbody>
        </table>
';

$html.='';
  }else{
    $html.='<div style="margin-top:20px; border:1px solid red; background-color:#ffcdd2">NOTA: No se han aplicado las hojas de verificación</div>';
  }





// This must be defined before including mpdf.php file define("_JPGRAPH_PATH", '../../jpgraph_5/src/');

// Change these if necessary to the name of font files you can access from JPGraph define("_TTF_FONT_NORMAL", 'arial.ttf');


// This must be set to allow mPDF to parse table data



// // Display the graph

  
    date_default_timezone_set('America/Bogota');
    $fecha_impresion = date("Y-m-d H:i:s");

      $footer = '<table width="100%">
          <tr>
            <td align="left">'.$fecha_impresion.'</td>
            <td align="right">Página: {PAGENO}</td>
          </tr>
        </table>';

    $mode=''; // (Blanco para establecer el valor por defecto)<br> 
    $format=array(216,279); // Ancho y altura de la hoja en mm
    // Establecemos el tamaño de la fuente por defecto para el documento (pt)<br>
    $font_s=''; // (Blanco para establecer el valor por defecto)<br>
    // Establecemos el tipo de letra familia a aplicar en el documento<br>
    $font_f=''; // (Blanco para establecer el valor por defecto)<br>

    // Establecemos los márgenes de las páginas en milímetros para el documento<br>
    $marg_l=25;  // Margen izquierdo
    $marg_r=25;  // Margen derecho
    $marg_t=30; // Margen superior
    $marg_b=10; // Margen inferior
    $marg_h=5;  // Margen de la cabecera de la página
    $marg_f=5;  // Margen del pie de pagina
 
  $mpdf=new mPDF($mode,$format,$font_s,$font_f,$marg_l,$marg_r,$marg_t,$marg_b,$marg_h,$marg_f);

  $mpdf->useGraphs = true;

  $mpdf->defaultheaderline=0; 
  $mpdf->defaultfooterline=1; 
  $mpdf->SetHeader($cabezera);
  $mpdf->SetFooter($footer);
  $mpdf->writeHTML($html);

  $mpdf->SetTitle($razon_social);//nombre del pdf
  $mpdf->Output($razon_social."."."pdf","I");//nombre con el que se guarda el pdf
   }

?>