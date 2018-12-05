<?php 

require_once ('../../PHPExcel-1.8/Classes/PHPExcel.php');
require_once('../../conexion.php');

$s= "SELECT region.nombre as region,departamento.autoridad_amb,empresa.razon_social,empresa.identificacion,categoria.nombre as categoria ,sector.nombre as sector ,subsector.nombre as subsector,empresa.descripcion,concat(persona.nombre1,' ',ifnull(persona.nombre2,' '),' ',persona.apellido1,'',persona.paellido2) as nombre, persona.celular,persona.correo,persona.direccion,municipio.nombre as municipio, departamento.nombre as departamento,empresa.latitud,empresa.longitud,empresa.altitud, empresa.fecha_registro, empresa.plan_mejora,etapa_empresa.nombre AS etapa_empresa FROM empresa
		INNER JOIN subsector ON subsector.id = empresa.subsector_id
		INNER JOIN sector ON sector.id = subsector.sector_id
		INNER JOIN categoria on categoria.id = sector.categoria_id
		INNER JOIN persona ON persona.id = empresa.persona_id
		INNER JOIN municipio ON municipio.id = empresa.municipio_id
		INNER JOIN departamento ON departamento.id = municipio.departamento_id
		INNER JOIN region ON region.id = departamento.region_id
        INNER JOIN etapa_empresa ON etapa_empresa.id = empresa.etapa_empresa_id
		WHERE empresa.verificacion2 = 'si' order by empresa.id";
	$r = mysqli_query($conn,$s);

	$fila = 10;
	

	$estilor = array(
    'font' => array(
	'name'  => 'Arial Arrow',
	'bold'  => true,
	'size' =>11,
	'color' => array(
	'rgb' => 'ffffff'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '70AC47')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);



	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial Arrow',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => 'A5D6A7')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);


//Estilo de la informacion
	 $estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));



	$objPHPExcel = new PHPExcel();
	$objPHPExcel->getProperties()
	->setCreator('Ventanilla de emprendimientos verdes')
	->setDescription('Solo Para Los MADS'); //algunas propiedades para el archivo excel

	$objPHPExcel->setActiveSheetIndex(0);//Desdde que hoja vamos a inicair a trabajar
	$objPHPExcel->getActiveSheet()->setTitle('SOLO MADS'); // el nombre de la hoja
	$objPHPExcel->getActiveSheet()->getStyle('A6:C6')->applyFromArray($estilor);
	$objPHPExcel->getActiveSheet()->getStyle('A8:CE8')->applyFromArray($estiloTituloColumnas);
	// $objPHPExcel->getActiveSheet()->getStyle('CX4:DU4')->applyFromArray($estiloTituloColumnas);
	// $objPHPExcel->getActiveSheet()->getStyle('A5:DU5')->applyFromArray($estiloTituloColumnas);
	// $objPHPExcel->getActiveSheet()->getStyle('A6:DU6')->applyFromArray($estiloTituloColumnas); // aplicar estilos

	$objPHPExcel->getActiveSheet()->setCellValue('A6', 'INFORMACIÓN RELEVANTE');
	$objPHPExcel->getActiveSheet()->mergeCells('A6:C6');
	$objPHPExcel->getActiveSheet()->setCellValue('A8', 'INFORMACION GENERAL');
	$objPHPExcel->getActiveSheet()->mergeCells('A8:X8');

	$objPHPExcel->getActiveSheet()->setCellValue('A9', 'AÑO');
	$objPHPExcel->getActiveSheet()->setCellValue('b9', 'Entidad de apoyo');
	$objPHPExcel->getActiveSheet()->setCellValue('C9', 'Numero NV');
	$objPHPExcel->getActiveSheet()->setCellValue('D9', 'Codigo Completo');
	$objPHPExcel->getActiveSheet()->setCellValue('E9', 'Region');
	$objPHPExcel->getActiveSheet()->setCellValue('F9', 'Autoridad Ambiental ');
	$objPHPExcel->getActiveSheet()->setCellValue('G9', 'RAZON SOCIAL');
	$objPHPExcel->getActiveSheet()->setCellValue('H9', 'NIT/CC');
	$objPHPExcel->getActiveSheet()->setCellValue('I9', 'CATEGORIA');
	$objPHPExcel->getActiveSheet()->setCellValue('J9', 'SECTOR');
	$objPHPExcel->getActiveSheet()->setCellValue('K9', 'SUBSECTOR');
	$objPHPExcel->getActiveSheet()->setCellValue('L9', 'DESCRIPCIÓN');
	$objPHPExcel->getActiveSheet()->setCellValue('M9', 'Cadena Productiva');
	$objPHPExcel->getActiveSheet()->setCellValue('N9', 'CORREO');
	$objPHPExcel->getActiveSheet()->setCellValue('O9', 'NOMBRE');
	$objPHPExcel->getActiveSheet()->setCellValue('P9', 'TELÉFONO');
	$objPHPExcel->getActiveSheet()->setCellValue('Q9', 'DIRECCIÓN');
	$objPHPExcel->getActiveSheet()->setCellValue('R9', 'MUNICIPIO');
	$objPHPExcel->getActiveSheet()->setCellValue('S9', 'DEPARTAMENTO (MAYUS)');
	$objPHPExcel->getActiveSheet()->setCellValue('T9', 'Longitud');
	$objPHPExcel->getActiveSheet()->setCellValue('U9', 'Latitud');
	$objPHPExcel->getActiveSheet()->setCellValue('V9', 'Altitud');
	$objPHPExcel->getActiveSheet()->setCellValue('W9', 'Año de verificación');
	$objPHPExcel->getActiveSheet()->setCellValue('X9', 'Versión Criterios de Verificación ');


	$objPHPExcel->getActiveSheet()->setCellValue('Y8', 'Criterio No 1');
	$objPHPExcel->getActiveSheet()->mergeCells('Y8:AG8');

	$objPHPExcel->getActiveSheet()->setCellValue('Y9', '1.1');
	$objPHPExcel->getActiveSheet()->setCellValue('Z9', '1.2');
	$objPHPExcel->getActiveSheet()->setCellValue('AA9', '1.3');
	$objPHPExcel->getActiveSheet()->setCellValue('Ab9', '1.4');
	$objPHPExcel->getActiveSheet()->setCellValue('AC9', '1.5');
	$objPHPExcel->getActiveSheet()->setCellValue('AD9', '1.6');
	$objPHPExcel->getActiveSheet()->setCellValue('AE9', '1.7');
	$objPHPExcel->getActiveSheet()->setCellValue('AF9', '1.8');
	$objPHPExcel->getActiveSheet()->setCellValue('AG9', '1.9');


	$objPHPExcel->getActiveSheet()->setCellValue('AH8', 'CRITERIO No 2');
	$objPHPExcel->getActiveSheet()->mergeCells('AH8:AK8');

	$objPHPExcel->getActiveSheet()->setCellValue('AH9', '2.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AI9', '2.2');
	$objPHPExcel->getActiveSheet()->setCellValue('AJ9', '2.3');
	$objPHPExcel->getActiveSheet()->setCellValue('AK9', '2.4');

	$objPHPExcel->getActiveSheet()->setCellValue('AL8', 'CRITERIO No 3');
	$objPHPExcel->getActiveSheet()->mergeCells('AL8:AN8');

	$objPHPExcel->getActiveSheet()->setCellValue('AL9', '3.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AM9', '3.2');
	$objPHPExcel->getActiveSheet()->setCellValue('AN9', '3.3');

	$objPHPExcel->getActiveSheet()->setCellValue('AO8', 'CRITERIO No 4');
	$objPHPExcel->getActiveSheet()->mergeCells('AO8:AP8');

	$objPHPExcel->getActiveSheet()->setCellValue('AO9', '4.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AP9', '4.2');

	$objPHPExcel->getActiveSheet()->setCellValue('AQ8', 'CRITERIO No 5');
	$objPHPExcel->getActiveSheet()->mergeCells('AQ8:AR8');

	$objPHPExcel->getActiveSheet()->setCellValue('AQ9', '5.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AR9', '5.2');

	$objPHPExcel->getActiveSheet()->setCellValue('AS8', 'CRITERIO No 6');
	$objPHPExcel->getActiveSheet()->mergeCells('AS8:AU8');

	$objPHPExcel->getActiveSheet()->setCellValue('AS9', '6.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AT9', '6.2');
	$objPHPExcel->getActiveSheet()->setCellValue('AU9', '6.3');

	$objPHPExcel->getActiveSheet()->setCellValue('AV8', 'CRITERIO No 7');
	$objPHPExcel->getActiveSheet()->mergeCells('AV8:AX8');

	$objPHPExcel->getActiveSheet()->setCellValue('AV9', '7.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AW9', '7.2');
	$objPHPExcel->getActiveSheet()->setCellValue('AX9', '7.3');

	$objPHPExcel->getActiveSheet()->setCellValue('AY8', 'CRITERIO No 8');
	$objPHPExcel->getActiveSheet()->mergeCells('AY8:bb8');

	$objPHPExcel->getActiveSheet()->setCellValue('AY9', '8.1');
	$objPHPExcel->getActiveSheet()->setCellValue('AZ9', '8.2');
	$objPHPExcel->getActiveSheet()->setCellValue('bA9', '8.3');
	$objPHPExcel->getActiveSheet()->setCellValue('bb9', '8.4');

	$objPHPExcel->getActiveSheet()->setCellValue('bC8', 'CRITERIO No 9');
	$objPHPExcel->getActiveSheet()->mergeCells('bC8:bE8');

	$objPHPExcel->getActiveSheet()->setCellValue('bC9', '9.1');
	$objPHPExcel->getActiveSheet()->setCellValue('bD9', '9.2');
	$objPHPExcel->getActiveSheet()->setCellValue('bE9', '9.3');

	$objPHPExcel->getActiveSheet()->setCellValue('bF8', 'CRITERIO No 10');
	$objPHPExcel->getActiveSheet()->mergeCells('bF8:bK8');

	$objPHPExcel->getActiveSheet()->setCellValue('bF9', '10.1');
	$objPHPExcel->getActiveSheet()->setCellValue('bG9', '10.2');
	$objPHPExcel->getActiveSheet()->setCellValue('bH9', '10.3');
	$objPHPExcel->getActiveSheet()->setCellValue('bI9', '10.4');
	$objPHPExcel->getActiveSheet()->setCellValue('bJ9', '10.5');
	$objPHPExcel->getActiveSheet()->setCellValue('bK9', '10.6');

	$objPHPExcel->getActiveSheet()->setCellValue('bL8', 'CRITERIO No 11');
	$objPHPExcel->getActiveSheet()->mergeCells('bL8:bN8');

	$objPHPExcel->getActiveSheet()->setCellValue('bL9', '11.1');
	$objPHPExcel->getActiveSheet()->setCellValue('bM9', '11.2');
	$objPHPExcel->getActiveSheet()->setCellValue('bN9', '11.3');

	$objPHPExcel->getActiveSheet()->setCellValue('bO8', 'CRITERIO No 12');
	$objPHPExcel->getActiveSheet()->mergeCells('bO8:bS8');

	$objPHPExcel->getActiveSheet()->setCellValue('bO9', '8.5');
	$objPHPExcel->getActiveSheet()->setCellValue('bP9', '8.6');
	$objPHPExcel->getActiveSheet()->setCellValue('bQ9', '12.1');
	$objPHPExcel->getActiveSheet()->setCellValue('bR9', '12.2');
	$objPHPExcel->getActiveSheet()->setCellValue('bS9', '12.3');

	$objPHPExcel->getActiveSheet()->setCellValue('bT8', 'Calificación N° Criterio');
	$objPHPExcel->getActiveSheet()->mergeCells('bT8:CE8');

	$objPHPExcel->getActiveSheet()->setCellValue('bT9', '1. Viabilidad');
	$objPHPExcel->getActiveSheet()->setCellValue('bU9', '2. Impacto');
	$objPHPExcel->getActiveSheet()->setCellValue('bV9', '3. Ciclo vida');
	$objPHPExcel->getActiveSheet()->setCellValue('bW9', '4. Vida Util');
	$objPHPExcel->getActiveSheet()->setCellValue('bX9', '5. Sust.Peligrosas');
	$objPHPExcel->getActiveSheet()->setCellValue('bY9', '6. Recicla');
	$objPHPExcel->getActiveSheet()->setCellValue('bZ9', '7. Uso RN');
	$objPHPExcel->getActiveSheet()->setCellValue('CA9', '8. RS Int.');
	$objPHPExcel->getActiveSheet()->setCellValue('Cb9', '9. RS Cadena');
	$objPHPExcel->getActiveSheet()->setCellValue('CC9', '10. RS Ext.');
	$objPHPExcel->getActiveSheet()->setCellValue('CD9', '11. Comunicación');
	$objPHPExcel->getActiveSheet()->setCellValue('CE9', '12. Adicionales');

	$objPHPExcel->getActiveSheet()->setCellValue('CF8','');
	$objPHPExcel->getActiveSheet()->mergeCells('CF8:CK8');

	$objPHPExcel->getActiveSheet()->setCellValue('CF9','CALIFICACIÓN Nivel 1');
	$objPHPExcel->getActiveSheet()->setCellValue('CG9','CALIFICACIÓN Nivel 2');
	$objPHPExcel->getActiveSheet()->setCellValue('CH9','Resultado');
	$objPHPExcel->getActiveSheet()->setCellValue('CI9','Económicos');
	$objPHPExcel->getActiveSheet()->setCellValue('CJ9','Ambientales');
	$objPHPExcel->getActiveSheet()->setCellValue('CK9','Sociales');


	$objPHPExcel->getActiveSheet()->setCellValue('CL8', 'Plan de Mejora');
	$objPHPExcel->getActiveSheet()->mergeCells('CL8:CM8');
	$objPHPExcel->getActiveSheet()->setCellValue('CN8', 'Ventas Totales (pesos)');
	$objPHPExcel->getActiveSheet()->mergeCells('CN8:CN9');
	$objPHPExcel->getActiveSheet()->setCellValue('CO8', 'Costos Totales (pesos)');
	$objPHPExcel->getActiveSheet()->mergeCells('CO8:CO9');
	$objPHPExcel->getActiveSheet()->setCellValue('CP8', 'Familias beneficiadas');
	$objPHPExcel->getActiveSheet()->mergeCells('CP8:CP9');
	$objPHPExcel->getActiveSheet()->setCellValue('CQ8', 'Socios');
	$objPHPExcel->getActiveSheet()->mergeCells('CQ8:CS8');
	$objPHPExcel->getActiveSheet()->setCellValue('CQ9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('CR9', 'Hombres');
	$objPHPExcel->getActiveSheet()->setCellValue('CS9', 'Total');
	$objPHPExcel->getActiveSheet()->setCellValue('CT8', 'Género empleados');
	$objPHPExcel->getActiveSheet()->mergeCells('CT8:CV8');
	$objPHPExcel->getActiveSheet()->setCellValue('CT9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('CU9', 'Hombres');
	$objPHPExcel->getActiveSheet()->setCellValue('CV9', 'Total');
	$objPHPExcel->getActiveSheet()->setCellValue('CW7', 'Componente etáreo empleados');
	$objPHPExcel->getActiveSheet()->mergeCells('CW7:DC7');
	$objPHPExcel->getActiveSheet()->setCellValue('CW8', 'Entre 18 y 30');
	$objPHPExcel->getActiveSheet()->mergeCells('CW8:CX8');
	$objPHPExcel->getActiveSheet()->setCellValue('CW9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('CX9', 'Hombres');
	$objPHPExcel->getActiveSheet()->setCellValue('CY8', 'Entre 31 y 50');
	$objPHPExcel->getActiveSheet()->mergeCells('CY8:CZ8');
	$objPHPExcel->getActiveSheet()->setCellValue('CY9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('CZ9', 'Hombres');
	$objPHPExcel->getActiveSheet()->setCellValue('DA8', 'Mayores de 50');
	$objPHPExcel->getActiveSheet()->mergeCells('DA8:Db8');
	$objPHPExcel->getActiveSheet()->setCellValue('DA9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('Db9', 'Hombres');
	$objPHPExcel->getActiveSheet()->setCellValue('DC8', 'Total');
	$objPHPExcel->getActiveSheet()->mergeCells('DC8:DC9');
	$objPHPExcel->getActiveSheet()->setCellValue('DD7', 'Condición de vulnerabilidad empleados');
	$objPHPExcel->getActiveSheet()->mergeCells('DD7:DX7');

	$objPHPExcel->getActiveSheet()->setCellValue('DD8', 'Personas en condición de discapacidad');
	$objPHPExcel->getActiveSheet()->mergeCells('DD8:DE8');
	$objPHPExcel->getActiveSheet()->setCellValue('DD9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DE9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DF8', 'Madres cabeza de familia');
	$objPHPExcel->getActiveSheet()->mergeCells('DF8:DG8');
	$objPHPExcel->getActiveSheet()->setCellValue('DF9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DG9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DH8', 'Adultos mayores');
	$objPHPExcel->getActiveSheet()->mergeCells('DH8:DI8');
	$objPHPExcel->getActiveSheet()->setCellValue('DH9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DI9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('Dj8', 'Indígenas');
	$objPHPExcel->getActiveSheet()->mergeCells('DJ8:DK8');
	$objPHPExcel->getActiveSheet()->setCellValue('DJ9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DK9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DL8', 'Comunidades negras (afrodescendientes, raizales, palenqueros)');
	$objPHPExcel->getActiveSheet()->mergeCells('DL8:DM8');
	$objPHPExcel->getActiveSheet()->setCellValue('DL9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DM9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DN8', 'Campesinos');
	$objPHPExcel->getActiveSheet()->mergeCells('DN8:DO8');
	$objPHPExcel->getActiveSheet()->setCellValue('DN9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DO9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DP8', 'Reinsertados');
	$objPHPExcel->getActiveSheet()->mergeCells('DP8:DQ8');
	$objPHPExcel->getActiveSheet()->setCellValue('DP9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DQ9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DR8', 'Víctimas del conflicto armado (desplazados y otros)');
	$objPHPExcel->getActiveSheet()->mergeCells('DR8:DS8');
	$objPHPExcel->getActiveSheet()->setCellValue('DR9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DS9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DT8', 'Vulnerabilidad económica');
	$objPHPExcel->getActiveSheet()->mergeCells('DT8:DU8');
	$objPHPExcel->getActiveSheet()->setCellValue('DT9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DU9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DV8', 'Otra. ¿Cúal?');
	$objPHPExcel->getActiveSheet()->mergeCells('DV8:DW8');
	$objPHPExcel->getActiveSheet()->setCellValue('DV9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DW9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('DX8', 'Total');
	$objPHPExcel->getActiveSheet()->mergeCells('DX8:DX9');

	$objPHPExcel->getActiveSheet()->setCellValue('DY7', 'Nivel educativo');
	$objPHPExcel->getActiveSheet()->mergeCells('DY7:EJ7');

	$objPHPExcel->getActiveSheet()->setCellValue('DY8', 'Primaria');
	$objPHPExcel->getActiveSheet()->mergeCells('DY8:DZ8');
	$objPHPExcel->getActiveSheet()->setCellValue('DY9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('DZ9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EA8', 'Bachillerato');
	$objPHPExcel->getActiveSheet()->mergeCells('EA8:EB8');
	$objPHPExcel->getActiveSheet()->setCellValue('EA9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EB9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EC8', 'Técnico');
	$objPHPExcel->getActiveSheet()->mergeCells('EC8:ED8');
	$objPHPExcel->getActiveSheet()->setCellValue('EC9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('ED9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EE8', 'Tecnológico');
	$objPHPExcel->getActiveSheet()->mergeCells('EE8:EF8');
	$objPHPExcel->getActiveSheet()->setCellValue('EE9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EF9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EG8', 'Universitario');
	$objPHPExcel->getActiveSheet()->mergeCells('EG8:EH8');
	$objPHPExcel->getActiveSheet()->setCellValue('EG9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EH9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EI8', 'Otros');
	$objPHPExcel->getActiveSheet()->mergeCells('EI8:EJ8');
	$objPHPExcel->getActiveSheet()->setCellValue('EI9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EJ9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EK7', 'Tipo de vinculación laboral');
	$objPHPExcel->getActiveSheet()->mergeCells('EK7:EP7');

	$objPHPExcel->getActiveSheet()->setCellValue('EK8', 'No de Empleos directos');
	$objPHPExcel->getActiveSheet()->mergeCells('EK8:EL8');
	$objPHPExcel->getActiveSheet()->setCellValue('EK9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EL9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EM8', 'No de empleos indirectos');
	$objPHPExcel->getActiveSheet()->mergeCells('EM8:EN8');
	$objPHPExcel->getActiveSheet()->setCellValue('EM9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EN9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EO8', 'No. De empleos temporales');
	$objPHPExcel->getActiveSheet()->mergeCells('EO8:EP8');
	$objPHPExcel->getActiveSheet()->setCellValue('EO9', 'Mujeres');
	$objPHPExcel->getActiveSheet()->setCellValue('EP9', 'Hombres');

	$objPHPExcel->getActiveSheet()->setCellValue('EQ6', 'Nivel 0');
	$objPHPExcel->getActiveSheet()->mergeCells('EQ6:FR6');

	$objPHPExcel->getActiveSheet()->setCellValue('EQ7', 'Administrativo');
	$objPHPExcel->getActiveSheet()->mergeCells('EQ7:EW8');

	$objPHPExcel->getActiveSheet()->setCellValue('EQ9', 'RUT');
	$objPHPExcel->getActiveSheet()->setCellValue('ER9', 'NIT');
	$objPHPExcel->getActiveSheet()->setCellValue('ES9', 'Cámara de comercio');
	$objPHPExcel->getActiveSheet()->setCellValue('ET9', 'INVIMA');
	$objPHPExcel->getActiveSheet()->setCellValue('EU9', 'ICA');
	$objPHPExcel->getActiveSheet()->setCellValue('EV9', 'RNT');
	$objPHPExcel->getActiveSheet()->setCellValue('EW9', 'Uso legal del suelo');



	$objPHPExcel->getActiveSheet()->setCellValue('EX7', 'Ambiental');
	$objPHPExcel->getActiveSheet()->mergeCells('EX7:FO7');

	$objPHPExcel->getActiveSheet()->setCellValue('EX8', 'Contrato de acceso a recursos genéticos');
	$objPHPExcel->getActiveSheet()->mergeCells('EX8:EY8');
	$objPHPExcel->getActiveSheet()->setCellValue('EX9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('EY9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('EZ8', 'Registro de Plantación Forestal');
	$objPHPExcel->getActiveSheet()->mergeCells('EZ8:FA8');
	$objPHPExcel->getActiveSheet()->setCellValue('EZ9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FA9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FB8', 'Registro de sistema agroforestal');
	$objPHPExcel->getActiveSheet()->mergeCells('FB8:FC8');
	$objPHPExcel->getActiveSheet()->setCellValue('FB9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FC9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FD8', 'Permiso de movilización y salvoconductos');
	$objPHPExcel->getActiveSheet()->mergeCells('FD8:FE8');
	$objPHPExcel->getActiveSheet()->setCellValue('FD9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FE9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FF8', 'Licencia ambiental para el uso de especies nativas');
	$objPHPExcel->getActiveSheet()->mergeCells('FF8:FG8');
	$objPHPExcel->getActiveSheet()->setCellValue('FF9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FG9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FH8', 'Concesión de Aguas (subterráneas o superficiales)');
	$objPHPExcel->getActiveSheet()->mergeCells('FH8:FI8');
	$objPHPExcel->getActiveSheet()->setCellValue('FH9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FI9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FJ8', 'Permiso de aguas residuales y vertimentos');
	$objPHPExcel->getActiveSheet()->mergeCells('FJ8:FK8');
	$objPHPExcel->getActiveSheet()->setCellValue('FJ9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FK9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FL8', 'Permiso de emisiones');
	$objPHPExcel->getActiveSheet()->mergeCells('FL8:FM8');
	$objPHPExcel->getActiveSheet()->setCellValue('FL9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FM9', 'Cumple/No cumple');

	$objPHPExcel->getActiveSheet()->setCellValue('FN8', 'Registro como generador de residuos');
	$objPHPExcel->getActiveSheet()->mergeCells('FN8:FO8');
	$objPHPExcel->getActiveSheet()->setCellValue('FN9', 'Aplica/No aplica');
	$objPHPExcel->getActiveSheet()->setCellValue('FO9', 'Cumple/No cumple');


	$objPHPExcel->getActiveSheet()->setCellValue('FP7', 'Social');
	$objPHPExcel->getActiveSheet()->mergeCells('FP7:FQ7');

	$objPHPExcel->getActiveSheet()->setCellValue('FP8', 'Respeto intereses colectivos');
	$objPHPExcel->getActiveSheet()->mergeCells('FP8:FP9');

	$objPHPExcel->getActiveSheet()->setCellValue('FQ8', 'Pago de SLMMV');
	$objPHPExcel->getActiveSheet()->mergeCells('FQ8:FQ9');



	$objPHPExcel->getActiveSheet()->setCellValue('FR7', 'Proveedores');
	
	$objPHPExcel->getActiveSheet()->setCellValue('FR8', 'Compra de insumos');
	$objPHPExcel->getActiveSheet()->mergeCells('FR8:FR9');

	$objPHPExcel->getActiveSheet()->setCellValue('FS7', 'Características del Negocio');
	$objPHPExcel->getActiveSheet()->mergeCells('FS7:HF7');

	$objPHPExcel->getActiveSheet()->setCellValue('FS8', 'Actividades realizadas por la empresa');
	$objPHPExcel->getActiveSheet()->mergeCells('FS8:FU8');

	$objPHPExcel->getActiveSheet()->setCellValue('FS9', 'Producción Materia Prima');
	$objPHPExcel->getActiveSheet()->setCellValue('FT9', 'Transformación');
	$objPHPExcel->getActiveSheet()->setCellValue('FU9', 'Comercialización');

	$objPHPExcel->getActiveSheet()->setCellValue('FV8', 'Etapa empresarial');
	$objPHPExcel->getActiveSheet()->mergeCells('FV8:FV9');

	$objPHPExcel->getActiveSheet()->setCellValue('FW8', 'Áreas de conservación o ecosistemas');
	$objPHPExcel->getActiveSheet()->mergeCells('FW8:GG8');

	$objPHPExcel->getActiveSheet()->setCellValue('FW9', 'Bosque Andino o de niebla');
	$objPHPExcel->getActiveSheet()->setCellValue('FX9', 'Bosque húmedo o selva');
	$objPHPExcel->getActiveSheet()->setCellValue('FY9', 'Bosque montañoso');
	$objPHPExcel->getActiveSheet()->setCellValue('FZ9', 'Bosque seco');
	$objPHPExcel->getActiveSheet()->setCellValue('GA9', 'Páramo');
	$objPHPExcel->getActiveSheet()->setCellValue('GB9', 'Humedal');
	$objPHPExcel->getActiveSheet()->setCellValue('GC9', 'Sabana');
	$objPHPExcel->getActiveSheet()->setCellValue('GD9', 'Manglar');
	$objPHPExcel->getActiveSheet()->setCellValue('GE9', 'Marinos');
	$objPHPExcel->getActiveSheet()->setCellValue('GF9', 'Ecosistema léntico/lótico');
	$objPHPExcel->getActiveSheet()->setCellValue('GG9', 'Otro, cuál?');
	
	$objPHPExcel->getActiveSheet()->setCellValue('GH8', 'Impactos ambientales positivos en el Plan de Negocios Verdes');
	$objPHPExcel->getActiveSheet()->mergeCells('GH8:GS8');

	$objPHPExcel->getActiveSheet()->setCellValue('GH9', ' Conservación');
	$objPHPExcel->getActiveSheet()->setCellValue('GI9', 'Cambio de materiales no renovables por renovables');
	$objPHPExcel->getActiveSheet()->setCellValue('GJ9', 'Mantenimiento de la biodiversidad nativa');
	$objPHPExcel->getActiveSheet()->setCellValue('GK9', 'Cambios de fuentes de energía no renovables por renovables');
	$objPHPExcel->getActiveSheet()->setCellValue('GL9', 'Disminución de la presión sobre el recurso');
	$objPHPExcel->getActiveSheet()->setCellValue('GM9', 'Disminución de la contaminación');
	$objPHPExcel->getActiveSheet()->setCellValue('GN9', 'Mantenimiento servicios ecosistémicos');
	$objPHPExcel->getActiveSheet()->setCellValue('GO9', 'Educación y cultura ambiental');
	$objPHPExcel->getActiveSheet()->setCellValue('GP9', 'Repoblación y mantenimiento de la base natural');
	$objPHPExcel->getActiveSheet()->setCellValue('GQ9', 'Mejoramiento de las condiciones de los recursos naturales');
	$objPHPExcel->getActiveSheet()->setCellValue('GR9', 'Reducción de las emisiones de gases efecto invernadero');
	$objPHPExcel->getActiveSheet()->setCellValue('GS9', 'Respeto al conocimiento y las prácticas culturales tradicionales amigables');


	$objPHPExcel->getActiveSheet()->setCellValue('GT8', 'Buenas prácticas');
	$objPHPExcel->getActiveSheet()->mergeCells('GT8:HF8');

	$objPHPExcel->getActiveSheet()->setCellValue('GT9', '2.1.Sistemas silvopastoriles ');
	$objPHPExcel->getActiveSheet()->setCellValue('GU9', '2.2. Sistemas silvicultura');
	$objPHPExcel->getActiveSheet()->setCellValue('GV9', '2.3. Agroforestería ');
	$objPHPExcel->getActiveSheet()->setCellValue('GW9', '2.4.Cultivos mixtos');
	$objPHPExcel->getActiveSheet()->setCellValue('GX9', '2.5. Cercas vivas/ barreras rompevientos/ corredores de conectividad de bosques');
	$objPHPExcel->getActiveSheet()->setCellValue('GY9', '2.6. Bosques para protección de nacimientos de agua, quebradas, ríos y lagunas');
	$objPHPExcel->getActiveSheet()->setCellValue('GZ9', '2.7. Cercas o aislamiento para protección de nacimientos de agua, quebradas, ríos y lagunas');
	$objPHPExcel->getActiveSheet()->setCellValue('HA9', '2.8. Buen uso de los recursos hídricos');
	$objPHPExcel->getActiveSheet()->setCellValue('HB9', '2.9. Control biológico de plagas');
	$objPHPExcel->getActiveSheet()->setCellValue('HC9', '2.10. Fertilización orgánica');
	$objPHPExcel->getActiveSheet()->setCellValue('HD9', '2.11. Labranza mínima');
	$objPHPExcel->getActiveSheet()->setCellValue('HE9', '2.12. Uso de fuentes alternativas de energía');
	$objPHPExcel->getActiveSheet()->setCellValue('HF9', '2.13. Uso de prácticas y/o tecnologías bajas en carbono ');


	$objPHPExcel->getActiveSheet()->setCellValue('HG8', 'Para las empresas de turismo');
	$objPHPExcel->getActiveSheet()->mergeCells('HG8:HM8');

	$objPHPExcel->getActiveSheet()->setCellValue('HG9', '6.1. Agencias de viajes y turismo, agencias mayoristas y operadores de turismo. ');
	$objPHPExcel->getActiveSheet()->setCellValue('HH9', '6.2. Establecimientos de alojamientos y hospedaje');
	$objPHPExcel->getActiveSheet()->setCellValue('HI9', '6.3. Operadores profesionales de congresos, ferias y convenciones. ');
	$objPHPExcel->getActiveSheet()->setCellValue('HJ9', '6.4. Oficinas de representaciones turísticas.');
	$objPHPExcel->getActiveSheet()->setCellValue('HK9', '6.5. Guías de turismo');
	$objPHPExcel->getActiveSheet()->setCellValue('HL9', '6.6. Establecimientos que presten servicios de turismo de interés social. ');
	$objPHPExcel->getActiveSheet()->setCellValue('HM9', '6.7. Si presta servicio de ecoturismo, etnoturismo, agroturismo y acuaturismo ');

	// $objPHPExcel->getActiveSheet()->setCellValue('AQ5', 'CRITERIO No 5');
	// // $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(30);
	// $objPHPExcel->getActiveSheet()->setCellValue('AR5', 'CRITERIO No 6');
	// $objPHPExcel->getActiveSheet()->mergeCells('AR5:AU5');
	// $objPHPExcel->getActiveSheet()->setCellValue('AV5', 'CRITERIO No 7');
	// $objPHPExcel->getActiveSheet()->mergeCells('AV5:BA5');
	// $objPHPExcel->getActiveSheet()->setCellValue('BB5', 'CRITERIO No 8');
	// $objPHPExcel->getActiveSheet()->mergeCells('BB5:BD5');
	// $objPHPExcel->getActiveSheet()->setCellValue('BE5', 'CRITERIO No 9');
	// $objPHPExcel->getActiveSheet()->mergeCells('BE5:BG5');
	// $objPHPExcel->getActiveSheet()->setCellValue('BH5', 'CRITERIO No 10');
	// $objPHPExcel->getActiveSheet()->mergeCells('BH5:BM5');
	// // $objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setWidth(30);
	// $objPHPExcel->getActiveSheet()->setCellValue('BN5', 'CRITERIO No 11');
	// $objPHPExcel->getActiveSheet()->mergeCells('BN5:BO5');
	// $objPHPExcel->getActiveSheet()->setCellValue('BP5', 'CRITERIO No 12');
	// $objPHPExcel->getActiveSheet()->mergeCells('BP5:BS5');
	// $objPHPExcel->getActiveSheet()->setCellValue('BT5', 'CALIFICACION No CRITERIO');
	// $objPHPExcel->getActiveSheet()->mergeCells('BT5:CE5');
	// $objPHPExcel->getActiveSheet()->mergeCells('CF5:CK5');
	// $objPHPExcel->getActiveSheet()->setCellValue('CL5', 'Plan de Mejora');
	// $objPHPExcel->getActiveSheet()->mergeCells('CL5:CL6');

	// $objPHPExcel->getActiveSheet()->setCellValue('CM5', 'Ventas Totales');
	// $objPHPExcel->getActiveSheet()->mergeCells('CM5:CM6');
	// $objPHPExcel->getActiveSheet()->setCellValue('CN5', 'Costos Totales');
	// $objPHPExcel->getActiveSheet()->mergeCells('CN5:CN6');

	// $objPHPExcel->getActiveSheet()->setCellValue('CO5', 'Género empleados');
	// $objPHPExcel->getActiveSheet()->mergeCells('CO5:CQ5');

	// $objPHPExcel->getActiveSheet()->setCellValue('CR5', 'Componente Etário Empleados');
	// $objPHPExcel->getActiveSheet()->mergeCells('CR5:CU5');

	// $objPHPExcel->getActiveSheet()->setCellValue('CV5', 'Tipo de vinculación laboral');
	// $objPHPExcel->getActiveSheet()->mergeCells('CV5:CW5');

	// $objPHPExcel->getActiveSheet()->setCellValue('CX3', 'Legislación Ambiental Colombiana');
	// $objPHPExcel->getActiveSheet()->mergeCells('CX3:DO3');

	// $objPHPExcel->getActiveSheet()->setCellValue('CX4', 'Registros');
	// $objPHPExcel->getActiveSheet()->mergeCells('CX4:DE4');

	// $objPHPExcel->getActiveSheet()->setCellValue('CX5', 'Registro Invima');
	// $objPHPExcel->getActiveSheet()->mergeCells('CX5:CY5');

	// $objPHPExcel->getActiveSheet()->setCellValue('CZ5', 'Registro ICA');
	// $objPHPExcel->getActiveSheet()->mergeCells('CZ5:DA5');

	// $objPHPExcel->getActiveSheet()->setCellValue('DB5', 'Registro Nacional de turismo');
	// $objPHPExcel->getActiveSheet()->mergeCells('DB5:DC5');

	// $objPHPExcel->getActiveSheet()->setCellValue('DD5', 'Registro de Plantación Forestal');
	// $objPHPExcel->getActiveSheet()->mergeCells('DD5:DE5');

	// $objPHPExcel->getActiveSheet()->setCellValue('DF4', 'Permisos');
	// $objPHPExcel->getActiveSheet()->mergeCells('DF4:DO4');

	// $objPHPExcel->getActiveSheet()->setCellValue('DF5', 'Permiso de Aprovechamiento');
	// $objPHPExcel->getActiveSheet()->mergeCells('DF5:DG5');

	// $objPHPExcel->getActiveSheet()->setCellValue('DH5', 'Concesión de aguas (subterraneas o superficiales)');
	// $objPHPExcel->getActiveSheet()->mergeCells('DH5:DI5');


	// $objPHPExcel->getActiveSheet()->setCellValue('DJ5', 'Permiso de Vertimientos o Emisiones');
	// $objPHPExcel->getActiveSheet()->mergeCells('DJ5:DK5');


	// $objPHPExcel->getActiveSheet()->setCellValue('DL5', 'Permiso Tala de arboles');
	// $objPHPExcel->getActiveSheet()->mergeCells('DL5:DM5');


	// $objPHPExcel->getActiveSheet()->setCellValue('DN5', 'Permiso de Movilización');
	// $objPHPExcel->getActiveSheet()->mergeCells('DN5:DO5');

	// $objPHPExcel->getActiveSheet()->setCellValue('DP4', 'Caracteristicas del Negocio');
	// $objPHPExcel->getActiveSheet()->mergeCells('DP4:DU4');

	// $objPHPExcel->getActiveSheet()->setCellValue('DP5', 'Actividades Realizadas por la empresa');
	// $objPHPExcel->getActiveSheet()->mergeCells('DP5:DR5');

	// $objPHPExcel->getActiveSheet()->setCellValue('DS5', 'Etapa empresarial');
	// $objPHPExcel->getActiveSheet()->mergeCells('DS5:DS6');

	// $objPHPExcel->getActiveSheet()->setCellValue('DT5', 'Sobre la Organización');
	// $objPHPExcel->getActiveSheet()->mergeCells('DT5:DU5');


	// // Titulos de las columnas de la celda
	// $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('A6','Año');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('B6','Entidad de apoyo');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('C6','Numero NV');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('D6','Codigo completo');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('E6','Region');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('F6','Autoridad ambiental');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('G6','Razon social');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('H6','NIT/CC');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('I6','Categoria');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('J6','Sector');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('K6','Subsector');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('L6','Descripcion');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('M6','Cadena productiva');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('N6','Correo');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('O6','Nombre');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(12);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('P6','Telefono');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('Q6','Direccion');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('R6','Municipio');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('S6','Departamento');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('T6','Año de verificacion');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('U6','Version criterios de verificacion');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('V6','1.1');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('W6','1.2');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('X6','1.3');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('Y6','1.4');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('Z6','1.5');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AA6','1.6');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AB6','1.7');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AC6','1.8');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AD6','1.9');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AE6','1,10');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AF6','1.11');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AG6','1.12');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AH6','1.13');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AI6','1.14');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AJ6','1.15');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AK6','1.16');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AL6','1.17');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AM6','1.18');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AN6','1.19');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AO6','1,20');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AP6','1.21');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AQ6','1.22');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AR6','1.23');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AS6','1.24');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AT6','1.25');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AU6','1.26');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AV6','1.27');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AW')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AW6','1.28');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AX')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AX6','1.29');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('AY')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AY6','1,30');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('AZ')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('AZ6','1.31');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BA')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BA6','1.32');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BB')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BB6','1.33');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BC')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BC6','1.34');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BD')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BD6','1.35');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BE')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BE6','1.36');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BF')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BF6','1.37');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BG')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BG6','1.38');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BH')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BH6','1.39');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BI')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BI6','1,40');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BJ')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BJ6','1.41');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BK')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BK6','1.42');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BL')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BL6','1.43');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BM')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BM6','1.44');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BN6','1.45');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BO')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BO6','1.46');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BP')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BP6','2.1');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BQ')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BQ6','2.2');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BR')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BR6','2.3');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BS')->setWidth(5);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BS6','2.4');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BT')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BT6','1. Viabilidad');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BU')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BU6','2. Impacto');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BV')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BV6','3. Ciclo Vida');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BW')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BW6','4. Vida útil');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BX')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BX6','5. Sust. Peligrosas');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BY')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BY6','6. Recicla');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('BZ')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('BZ6','7. Uso RN');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CA')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CA6','8. RS int.');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CB')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CB6','9. RS Cadena.');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CC')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CC6','10. RS Ext.');

	//  	  $objPHPExcel->getActiveSheet()->getColumnDimension('CD')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CD6','11. Comunicación');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CE')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CE6','12. Adiccionales');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CF')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CF6','Calificacion Nivel 1');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CG')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CG6','Calificacion Nivel 2');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CH')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CH6','Resultado');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CI')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CI6','Economicos');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CJ')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CJ6','Ambientales');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CK')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CK6','Sociales');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CL')->setWidth(20);
	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CM')->setWidth(20);
	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CN')->setWidth(20);

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CO')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CO6','Mujeres');
	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CP')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CP6','Hombres');
	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CQ')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CQ6','Total');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CR')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CR6','Entre 18 y 30');
	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CS')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CS6','Entre 31 y 50');
	//   $objPHPExcel->getActiveSheet()->getColumnDimension('CT')->setWidth(15);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CT6','Mayores de 50');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CU')->setWidth(10);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CU6','Total');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CV')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CV6','No empleados a termino indefinido');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CW')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CW6','No empleados a termino definido');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CX')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CX6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CY')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CY6','Cumple/ No Cumple');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('CZ')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('CZ6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DA')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DA6','Cumple/ No Cumple');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DB')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DB6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DC')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DC6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DD')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DD6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DE')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DE6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DF')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DF6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DG')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DG6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DH')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DH6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DI')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DI6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DJ')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DJ6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DK')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DK6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DL')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DL6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DM')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DM6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DN')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DN6','Aplica/ No Aplica');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DO')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DO6','Cumple/ No Cumple');

	//   $objPHPExcel->getActiveSheet()->getColumnDimension('DP')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DP6','Producción Materia Prima');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DQ')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DQ6','Transformación');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DR')->setWidth(20);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DR6','Comercialización');

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DS')->setWidth(20);

	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DT')->setWidth(40);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DT6','¿Su organización está cosntituida legalmente(Cámara de comercion, DIAN)?');
	//  $objPHPExcel->getActiveSheet()->getColumnDimension('DU')->setWidth(40);
	//  $objPHPExcel->getActiveSheet()->SetCellValue('DU6','¿Su organización se encuentra operando en la actualidad?');







header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="informe_general.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>