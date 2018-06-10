
<?php 
	 require_once ('../../mpdf60/mpdf.php');
if(isset($_GET["empresa"])){
   require_once('../../conexion.php');
   $empresa = $_GET["empresa"];
   $razon_social = '';
   $correo = '';
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
   
   $s="SELECT empresa.razon_social,empresa.aut_ambiental,persona.nombre1 AS representante,persona.identificacion,persona.celular,persona.correo,municipio.nombre AS municipio,persona.direccion,empresa.descripcion,empresa.desc_impacto_amb,subsector.nombre AS subsector,sector.nombre AS sector,categoria.nombre AS categoria,empresa.fecha_registro  FROM empresa INNER JOIN persona ON persona.id = empresa.persona_id INNER JOIN municipio ON municipio.id = empresa.municipio_id INNER JOIN subsector ON subsector.id = empresa.subsector_id INNER JOIN sector ON sector.id = subsector.sector_id INNER JOIN categoria ON categoria.id = sector.categoria_id WHERE empresa.id = '$empresa'";
   $r = mysqli_query($conn,$s);
   while ($rw=mysqli_fetch_assoc($r)) {
  $razon_social = $rw['razon_social'];
  $correo = $rw['correo'];
   $aut_ambiental = $rw['aut_ambiental'];
   $representante = $rw['representante'];
   $identificacion =$rw['identificacion'];
   $celular = $rw['celular'];
   $municipio = $rw['municipio'];
   $direccion = $rw['direccion'];
   $descripcion = $rw['descripcion'];
   $desc_impacto_amb = $rw['desc_impacto_amb'];
   $subsector = $rw['subsector'];
   $sector = $rw['sector'];
   $categoria = $rw['categoria'];
   $fecha_registro = $rw['fecha_registro'];
   }
   $fecha_registro = date("Y-m-d");
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

 $s="SELECT * from verificacion_2 WHERE empresa_id = '$empresa'";
            $r= mysqli_query($conn,$s) or die('Error');
            if(mysqli_num_rows($r)>0){
$division = 0;
$suma = 0;
$s="SELECT verificacion_2.empresa_id, calificador.nombre AS calificador,verificacion_2.opciones_id FROM verificacion_2
INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id
WHERE verificacion_2.empresa_id = '$empresa' AND verificacion_2.opciones_id IN(86,87,88,89,137) ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 90 AND verificacion_2.opciones_id <= 97 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom2 =  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 98 AND verificacion_2.opciones_id <= 102 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 103 AND verificacion_2.opciones_id <= 105 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id = 106 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 107 AND verificacion_2.opciones_id <= 110 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 111 AND verificacion_2.opciones_id <= 116 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 117 AND verificacion_2.opciones_id <= 119 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 120 AND verificacion_2.opciones_id <= 122 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 123 AND verificacion_2.opciones_id <= 128 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 129 AND verificacion_2.opciones_id <= 130 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 133 AND verificacion_2.opciones_id <= 134 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 135 AND verificacion_2.opciones_id <= 136 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
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


$html.='<table class="" style="margin-top:20px">
          <thead>
            <tr>
              <th style="width: 100%;background-color:#a5d6a7" class="" colspan="2">Resultado Nivel 1. Criterios de Cumplimiento de Negocios Verdes</th>
            </tr>
            <tr>
              <th style="width: 90%;" class="grey darken-1">Criterio</th>
              <th style="" class="grey darken-1">Promedio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Viabilidad económica del Negocio</td>
              <td id="prom1">'.$prom1.'%</td>
            </tr>
            <tr>
              <td>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</td>
              <td id="prom2">'.$prom2.'%</td>
            </tr>
            <tr>
              <td>Enfoque ciclo de vida del bien o servicio</td>
              <td id="prom3">'.$prom3.'%</td>
            </tr>
            <tr>
              <td>Vida útil</td>
              <td id="prom4">'.$prom4.'%</td>
            </tr>
            <tr>
              <td>Sustitución de sustancias o materiales peligrosos</td>
              <td id="prom5">'.$prom5.'%</td>
            </tr>
            <tr>
              <td>Reciclabilidad y/o uso de materiales reciclados</td>
              <td id="prom6">'.$prom6.'%</td>
            </tr>
            <tr>
              <td>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</td>
              <td id="prom7">'.$prom7.'%</td>
            </tr>
            <tr>
              <td>Responsabilidad social al interior de la empresa</td>
              <td id="prom8">'.$prom8.'%</td>
            </tr>
            <tr>
              <td>Responsabilidad social en la cadena de valor de la empresa</td>
              <td id="prom9">'.$prom9.'%</td>
            </tr>
            <tr>
              <td>Responsabilidad social al exterior de la empresa</td>
              <td id="prom10">'.$prom10.'%</td>
            </tr>
            <tr>
              <td>Comunicación de atributos del bien y servicio</td>
              <td id="prom11">'.$prom11.'%</td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="total">'.$prom_total1.'% </th>
            </tr>

          </tbody>

        </table>

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
              <td style="width: 90%">Puntaje Total. Criterios de Cumplimiento de Negocios Verdes</td>
              <td id="prom12" style="width: 10%">'.$prom_total1.'%</td>
            </tr>
            <tr>
              <td>Puntaje Total.  Criterios Adicionales (ideales) Negocios Verdes</td>
              <td id="prom13">'.$prom_total2.'%</td>
            </tr>
            <tr>';
              $suma_total3 = $prom_total1+$prom_total2;
              $resultado= round($suma_total3/2, 2);
            $html.='
              <th class=" grey lighten-1">Resultado</th>
              <th class="grey lighten-1" id="total2">'.$resultado.'% </th>
            </tr>
            
          </tbody>
        </table>
';
  }else{
    $html.='<div style="margin-top:20px; border:1px solid red; background-color:#ffcdd2">NOTA: No se han aplicado las hojas de verificación</div>';
  }
  $html.= '
     <div style="border: 1px solid green; background-color: #a5d6a7;margin-top: 20px">Recomendaciones Componente Económico</div>
      <div style="border: 1px solid;height: 130px"></div>
        
       <div style="border: 1px solid green; background-color: #a5d6a7;margin-top: 10px">Recomendaciones Componente Ambiental</div>
      <div style="border: 1px solid;height: 130px;"></div>

        <div style="border: 1px solid green; background-color: #a5d6a7;margin-top: 10px">Recomendaciones Componente Social</div>
      <div style="border: 1px solid;height: 130px;"></div>
      </div>
      ';
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
  $mpdf->defaultheaderline=0; 
  $mpdf->defaultfooterline=1; 
  $mpdf->SetHeader($cabezera);
  $mpdf->SetFooter($footer);
  $mpdf->writeHTML($html);
  $mpdf->SetTitle($razon_social);//nombre del pdf
  $mpdf->Output($razon_social."."."pdf","I");//nombre con el que se guarda el pdf
   }
?>