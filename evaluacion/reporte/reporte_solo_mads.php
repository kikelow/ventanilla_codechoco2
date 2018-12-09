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
	$r = mysqli_query($conn,$s) or die(mysqli_error($conn));



	$fila = 10;
	
	

	$estilor2 = array(
    'font' => array(
	'name'  => 'Arial Arrow',
	'bold'  => false,
	'size' =>11,
	'color' => array(
	'rgb' => '000000'
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


	$estilor3 = array(
    'font' => array(
	'name'  => 'Arial Arrow',
	'bold'  => false,
	'size' =>11,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => 'EDEDED')
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
	'size' =>11,
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
	'name'  => 'Arial Arrow',
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

//Estilo de la informacion
	 $estiloInformacion2 = new PHPExcel_Style();
	$estiloInformacion2->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial Arrow',
	'bold'  => true,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => 'EDEDED')
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


	//$objPHPExcel->getActiveSheet()->getStyle('A10:HM10')->applyFromArray($estiloInformacion);
	$objPHPExcel->getActiveSheet()->getStyle('A6:C6')->applyFromArray($estilor);
	$objPHPExcel->getActiveSheet()->getStyle('A8:CE8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('T9:V9')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('CL8:CM8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('CN8:CP9')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('CQ8:CV8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('CW7:DC7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('DD7:DX7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('DY7:EJ7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('DY8:EP8')->applyFromArray($estilor3);
	$objPHPExcel->getActiveSheet()->getStyle('EK7:EP7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('EQ7:EW8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('EQ9:EW9')->applyFromArray($estilor3);
	$objPHPExcel->getActiveSheet()->getStyle('EX7:FO7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('EX8:FO8')->applyFromArray($estilor3);
	$objPHPExcel->getActiveSheet()->getStyle('FP7:FQ7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('FP8:FR9')->applyFromArray($estilor3);
	$objPHPExcel->getActiveSheet()->getStyle('FS9:FU9')->applyFromArray($estilor3);
	$objPHPExcel->getActiveSheet()->getStyle('FW9:HM9')->applyFromArray($estilor3);
	$objPHPExcel->getActiveSheet()->getStyle('FR7')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('EQ6:FR6')->applyFromArray($estilor2);
	$objPHPExcel->getActiveSheet()->getStyle('FS7:HF7')->applyFromArray($estilor2);	
	// $objPHPExcel->getActiveSheet()->getStyle('FS8:FU8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('FV8:FV9')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('FW8:GG8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('GH8:GS8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('GT8:HF8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('HG8:HM8')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->getStyle('DD8:DW8')->applyFromArray($estilor3);
	// $objPHPExcel->getActiveSheet()->getStyle('A9:S9')->applyFromArray($estiloInformacion);

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
	$objPHPExcel->getActiveSheet()->setCellValue('CL9', 'Si/No');
	$objPHPExcel->getActiveSheet()->mergeCells('CL9:CM9');
	// $objPHPExcel->getActiveSheet()->mergeCells('CF8:CK8');

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

	
	 while ($rw=mysqli_fetch_assoc($r)) {
	 	$rw['fecha_registro']= date("Y");
	 	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$fila,$rw['fecha_registro']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$fila,$rw['region']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$fila,$rw['autoridad_amb']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$fila,$rw['razon_social']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$fila,$rw['identificacion']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$fila,$rw['categoria']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$fila,$rw['sector']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$fila,$rw['subsector']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$fila,$rw['descripcion']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$fila,$rw['correo']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$fila,$rw['nombre']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$fila,$rw['celular']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$fila,$rw['direccion']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$fila,$rw['municipio']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$fila,$rw['departamento']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$fila,$rw['longitud']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$fila,$rw['latitud']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$fila,$rw['altitud']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('W'.$fila,$rw['fecha_registro']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('X'.$fila,'3');


	 	// sacar el nivel 1.1 de la hoja de verificacion 2
	 	$s1 = "SELECT empresa_id,hoja_verificacion_2.id,calificador.nombre AS calificador FROM empresa
            INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
            INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
            INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
            WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r1 = mysqli_query($conn,$s1);
		$nivel11 = 10;
		while ($rw1=mysqli_fetch_assoc($r1)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$nivel11,$rw1['calificador']);
			$nivel11++;
		}

		// sacar el nivel 1.2 de la hoja de verificacion 2
		$s2 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r2 = mysqli_query($conn,$s2);
		$nivel12 = 10;
		while ($rw2=mysqli_fetch_assoc($r2)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$nivel12,$rw2['calificador']);
			$nivel12++;
		}

		// sacar el nivel 1.3 de la hoja de verificacion 2
		$s3 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r3 = mysqli_query($conn,$s3);
		$nivel13 = 10;
		while ($rw3=mysqli_fetch_assoc($r3)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$nivel13,$rw3['calificador']);
			$nivel13++;
		}

		// sacar el nivel 1.4 de la hoja de verificacion 2
		$s4 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.4 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r4 = mysqli_query($conn,$s4);
		$nivel14 = 10;
		while ($rw4=mysqli_fetch_assoc($r4)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('Ab'.$nivel14,$rw4['calificador']);
			$nivel14++;
		}

		// sacar el nivel 1.5 de la hoja de verificacion 2
		$s5 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.5 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r5 = mysqli_query($conn,$s5);
		$nivel15 = 10;
		while ($rw5=mysqli_fetch_assoc($r5)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$nivel15,$rw5['calificador']);
			$nivel15++;
		}

		// sacar el nivel 1.6 de la hoja de verificacion 2
		$s6 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.6 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r6 = mysqli_query($conn,$s6);
		$nivel16 = 10;
		while ($rw6=mysqli_fetch_assoc($r6)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$nivel16,$rw6['calificador']);
			$nivel16++;
		}

		// sacar el nivel 1.7 de la hoja de verificacion 2
		$s7 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.7 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r7 = mysqli_query($conn,$s7);
		$nivel17 = 10;
		while ($rw7=mysqli_fetch_assoc($r7)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AE'.$nivel17,$rw7['calificador']);
			$nivel17++;
		}

		// sacar el nivel 1.8 de la hoja de verificacion 2
		$s8 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.8 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r8 = mysqli_query($conn,$s8);
		$nivel18 = 10;
		while ($rw8=mysqli_fetch_assoc($r8)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AF'.$nivel18,$rw8['calificador']);
			$nivel18++;
		}

		// sacar el nivel 1.9 de la hoja de verificacion 2
		$s9 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 8 AND pregunta_indicativa.No = 1.9 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r9 = mysqli_query($conn,$s9);
		$nivel19 = 10;
		while ($rw9=mysqli_fetch_assoc($r9)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AG'.$nivel19,$rw9['calificador']);
			$nivel19++;
		}

		// sacar el nivel 1.10 de la hoja de verificacion 2
		$s10 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 9 AND pregunta_indicativa.No = 2.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r10 = mysqli_query($conn,$s10);
		$nivel110 = 10;
		while ($rw10=mysqli_fetch_assoc($r10)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AH'.$nivel110,$rw10['calificador']);
			$nivel110++;
		}

		// sacar el nivel 1.11 de la hoja de verificacion 2
		$s11 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 9 AND pregunta_indicativa.No = 2.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r11 = mysqli_query($conn,$s11);
		$nivel111 = 10;
		while ($rw11=mysqli_fetch_assoc($r11)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AI'.$nivel111,$rw11['calificador']);
			$nivel111++;
		}

		// sacar el nivel 1.12 de la hoja de verificacion 2
		$s12 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 9 AND pregunta_indicativa.No = 2.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r12 = mysqli_query($conn,$s12);
		$nivel112 = 10;
		while ($rw12=mysqli_fetch_assoc($r12)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AJ'.$nivel112,$rw12['calificador']);
			$nivel112++;
		}

		// sacar el nivel 1.13 de la hoja de verificacion 2
		$s13 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 9 AND pregunta_indicativa.No = 2.4 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r13 = mysqli_query($conn,$s13);
		$nivel113 = 10;
		while ($rw13=mysqli_fetch_assoc($r13)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AK'.$nivel113,$rw13['calificador']);
			$nivel113++;
		}

		// sacar el nivel 1.14 de la hoja de verificacion 2
		$s14 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 10 AND pregunta_indicativa.No = 3.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r14 = mysqli_query($conn,$s14);
		$nivel114 = 10;
		while ($rw14=mysqli_fetch_assoc($r14)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AL'.$nivel114,$rw14['calificador']);
			$nivel114++;
		}

		// sacar el nivel 1.15 de la hoja de verificacion 2
		$s15 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 10 AND pregunta_indicativa.No = 3.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r15 = mysqli_query($conn,$s15);
		$nivel115 = 10;
		while ($rw15=mysqli_fetch_assoc($r15)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AM'.$nivel115,$rw15['calificador']);
			$nivel115++;
		}

		// sacar el nivel 1.16 de la hoja de verificacion 2
		$s16 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 10 AND pregunta_indicativa.No = 3.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r16 = mysqli_query($conn,$s16);
		$nivel116 = 10;
		while ($rw16=mysqli_fetch_assoc($r16)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AN'.$nivel116,$rw16['calificador']);
			$nivel116++;
		}

		// sacar el nivel 1.17 de la hoja de verificacion 2
		$s17 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 11 AND pregunta_indicativa.No = 4.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r17 = mysqli_query($conn,$s17);
		$nivel117 = 10;
		while ($rw17=mysqli_fetch_assoc($r17)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AO'.$nivel117,$rw17['calificador']);
			$nivel117++;
		}

		// sacar el nivel 1.18 de la hoja de verificacion 2
		$s18 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 11 AND pregunta_indicativa.No = 4.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r18 = mysqli_query($conn,$s18);
		$nivel118 = 10;
		while ($rw18=mysqli_fetch_assoc($r18)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AP'.$nivel118,$rw18['calificador']);
			$nivel118++;
		}

		// sacar el nivel 1.19 de la hoja de verificacion 2
		$s19 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 12 AND pregunta_indicativa.No = 5.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r19 = mysqli_query($conn,$s19);
		$nivel119 = 10;
		while ($rw19=mysqli_fetch_assoc($r19)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AQ'.$nivel119,$rw19['calificador']);
			$nivel119++;
		}

		// sacar el nivel 1.20 de la hoja de verificacion 2
		$s20 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 12 AND pregunta_indicativa.No = 5.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r20 = mysqli_query($conn,$s20);
		$nivel120 = 10;
		while ($rw20=mysqli_fetch_assoc($r20)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AR'.$nivel120,$rw20['calificador']);
			$nivel120++;
		}

		// sacar el nivel 1.21 de la hoja de verificacion 2
		$s21 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 13 AND pregunta_indicativa.No = 6.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r21 = mysqli_query($conn,$s21);
		$nivel121 = 10;
		while ($rw21=mysqli_fetch_assoc($r21)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AS'.$nivel121,$rw21['calificador']);
			$nivel121++;
		}

		// sacar el nivel 1.22 de la hoja de verificacion 2
		$s22 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 13 AND pregunta_indicativa.No = 6.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r22 = mysqli_query($conn,$s22);
		$nivel122 = 10;
		while ($rw22=mysqli_fetch_assoc($r22)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AT'.$nivel122,$rw22['calificador']);
			$nivel122++;
		}

		// sacar el nivel 1.23 de la hoja de verificacion 2
		$s23 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 13 AND pregunta_indicativa.No = 6.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r23 = mysqli_query($conn,$s23);
		$nivel123 = 10;
		while ($rw23=mysqli_fetch_assoc($r23)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AU'.$nivel123,$rw23['calificador']);
			$nivel123++;
		}

		// sacar el nivel 1.24 de la hoja de verificacion 2
		$s24 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 14 AND pregunta_indicativa.No = 7.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r24 = mysqli_query($conn,$s24);
		$nivel124 = 10;
		while ($rw24=mysqli_fetch_assoc($r24)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AV'.$nivel124,$rw24['calificador']);
			$nivel124++;
		}

		// sacar el nivel 1.25 de la hoja de verificacion 2
		$s25 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 14 AND pregunta_indicativa.No = 7.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r25 = mysqli_query($conn,$s25);
		$nivel125 = 10;
		while ($rw25=mysqli_fetch_assoc($r25)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AW'.$nivel125,$rw25['calificador']);
			$nivel125++;
		}

		// sacar el nivel 1.26 de la hoja de verificacion 2
		$s26 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 14 AND pregunta_indicativa.No = 7.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r26 = mysqli_query($conn,$s26);
		$nivel126 = 10;
		while ($rw26=mysqli_fetch_assoc($r26)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AX'.$nivel126,$rw26['calificador']);
			$nivel126++;
		}

		// sacar el nivel 1.27 de la hoja de verificacion 2
		$s27 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 15 AND pregunta_indicativa.No = 8.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r27 = mysqli_query($conn,$s27);
		$nivel127 = 10;
		while ($rw27=mysqli_fetch_assoc($r27)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AY'.$nivel127,$rw27['calificador']);
			$nivel127++;
		}

		// sacar el nivel 1.28 de la hoja de verificacion 2
		$s28 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 15 AND pregunta_indicativa.No = 8.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r28 = mysqli_query($conn,$s28);
		$nivel128 = 10;
		while ($rw28=mysqli_fetch_assoc($r28)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AZ'.$nivel128,$rw28['calificador']);
			$nivel128++;
		}

		// sacar el nivel 1.29 de la hoja de verificacion 2
		$s29 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 15 AND pregunta_indicativa.No = 8.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r29 = mysqli_query($conn,$s29);
		$nivel129 = 10;
		while ($rw29=mysqli_fetch_assoc($r29)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('bA'.$nivel129,$rw29['calificador']);
			$nivel129++;
		}

		// sacar el nivel 1.30 de la hoja de verificacion 2
		$s30 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 15 AND pregunta_indicativa.No = 8.4 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r30 = mysqli_query($conn,$s30);
		$nivel130 = 10;
		while ($rw30=mysqli_fetch_assoc($r30)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('bb'.$nivel130,$rw30['calificador']);
			$nivel130++;
		}

		// sacar el nivel 1.31 de la hoja de verificacion 2
		$s31 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 16 AND pregunta_indicativa.No = 9.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r31 = mysqli_query($conn,$s31);
		$nivel131 = 10;
		while ($rw31=mysqli_fetch_assoc($r31)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('bC'.$nivel131,$rw31['calificador']);
			$nivel131++;
		}

		// sacar el nivel 1.32 de la hoja de verificacion 2
		$s32 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 16 AND pregunta_indicativa.No = 9.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r32 = mysqli_query($conn,$s32);
		$nivel132 = 10;
		while ($rw32=mysqli_fetch_assoc($r32)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BD'.$nivel132,$rw32['calificador']);
			$nivel132++;
		}

		// sacar el nivel 1.33 de la hoja de verificacion 2
		$s33 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 16 AND pregunta_indicativa.No = 9.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r33 = mysqli_query($conn,$s33);
		$nivel133 = 10;
		while ($rw33=mysqli_fetch_assoc($r33)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BE'.$nivel133,$rw33['calificador']);
			$nivel133++;
		}

		// sacar el nivel 1.34 de la hoja de verificacion 2
		$s34 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 17 AND pregunta_indicativa.No = 10.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r34 = mysqli_query($conn,$s34);
		$nivel134 = 10;
		while ($rw34=mysqli_fetch_assoc($r34)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BF'.$nivel134,$rw34['calificador']);
			$nivel134++;
		}

		// sacar el nivel 1.35 de la hoja de verificacion 2
		$s35 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 17 AND pregunta_indicativa.No = 10.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r35 = mysqli_query($conn,$s35);
		$nivel135 = 10;
		while ($rw35=mysqli_fetch_assoc($r35)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BG'.$nivel135,$rw35['calificador']);
			$nivel135++;
		}

		// sacar el nivel 1.36 de la hoja de verificacion 2
		$s36 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 17 AND pregunta_indicativa.No = 10.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r36 = mysqli_query($conn,$s36);
		$nivel136 = 10;
		while ($rw36=mysqli_fetch_assoc($r36)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BH'.$nivel136,$rw36['calificador']);
			$nivel136++;
		}

		// sacar el nivel 1.37 de la hoja de verificacion 2
		$s37 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 17 AND pregunta_indicativa.No = 10.4 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r37 = mysqli_query($conn,$s37);
		$nivel137 = 10;
		while ($rw37=mysqli_fetch_assoc($r37)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BI'.$nivel137,$rw37['calificador']);
			$nivel137++;
		}

		// sacar el nivel 1.38 de la hoja de verificacion 2
		$s38 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 17 AND pregunta_indicativa.No = 10.5 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r38 = mysqli_query($conn,$s38);
		$nivel138 = 10;
		while ($rw38=mysqli_fetch_assoc($r38)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BJ'.$nivel138,$rw38['calificador']);
			$nivel138++;
		}

		// sacar el nivel 1.39 de la hoja de verificacion 2
		$s39 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 17 AND pregunta_indicativa.No = 10.6 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r39 = mysqli_query($conn,$s39);
		$nivel139 = 10;
		while ($rw39=mysqli_fetch_assoc($r39)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BK'.$nivel139,$rw39['calificador']);
			$nivel139++;
		}

		// sacar el nivel 1.40 de la hoja de verificacion 2
		$s40 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 18 AND pregunta_indicativa.No = 11.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r40 = mysqli_query($conn,$s40);
		$nivel140 = 10;
		while ($rw40=mysqli_fetch_assoc($r40)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BL'.$nivel140,$rw40['calificador']);
			$nivel140++;
		}

		// sacar el nivel 1.41 de la hoja de verificacion 2
		$s41 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 18 AND pregunta_indicativa.No = 11.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r41 = mysqli_query($conn,$s41);
		$nivel141 = 10;
		while ($rw41=mysqli_fetch_assoc($r41)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BM'.$nivel141,$rw41['calificador']);
			$nivel141++;
		}

		// sacar el nivel 1.42 de la hoja de verificacion 2
		$s42 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 18 AND pregunta_indicativa.No = 11.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r42 = mysqli_query($conn,$s42);
		$nivel142 = 10;
		while ($rw42=mysqli_fetch_assoc($r42)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BN'.$nivel142,$rw42['calificador']);
			$nivel142++;
		}

		// sacar el nivel 1.43 de la hoja de verificacion 2
		$s43 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 19 AND pregunta_indicativa.No = 8.5 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r43 = mysqli_query($conn,$s43);
		$nivel143 = 10;
		while ($rw43=mysqli_fetch_assoc($r43)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BO'.$nivel143,$rw43['calificador']);
			$nivel143++;
		}

		// sacar el nivel 1.44 de la hoja de verificacion 2
		$s44 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 19 AND pregunta_indicativa.No = 8.6 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r44 = mysqli_query($conn,$s44);
		$nivel144 = 10;
		while ($rw44=mysqli_fetch_assoc($r44)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BP'.$nivel144,$rw44['calificador']);
			$nivel144++;
		}

		// sacar el nivel 1.45 de la hoja de verificacion 2
		$s45 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 20 AND pregunta_indicativa.No = 12.1 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r45 = mysqli_query($conn,$s45);
		$nivel145 = 10;
		while ($rw45=mysqli_fetch_assoc($r45)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BQ'.$nivel145,$rw45['calificador']);
			$nivel145++;
		}

		// sacar el nivel 1.46 de la hoja de verificacion 2
		$s46 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 20 AND pregunta_indicativa.No = 12.2 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r46 = mysqli_query($conn,$s46);
		$nivel146 = 10;
		while ($rw46=mysqli_fetch_assoc($r46)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BR'.$nivel146,$rw46['calificador']);
			$nivel146++;
		}

		// sacar el nivel 21 de la hoja de verificacion 2
		$s47 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN hoja_verificacion_2 ON hoja_verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = hoja_verificacion_2.calificador_id
			INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id
			WHERE pregunta_indicativa.aspecto_id = 20 AND pregunta_indicativa.No = 12.3 AND empresa.verificacion2 = 'si' order by empresa_id";
		$r47 = mysqli_query($conn,$s47);
		$nivel147 = 10;
		while ($rw47=mysqli_fetch_assoc($r47)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BS'.$nivel147,$rw47['calificador']);
			$nivel147++;
		}




		$objPHPExcel->getActiveSheet()->SetCellValue('BT'.$fila, '=AVERAGE(Y'.$fila.':AG'.$fila.')');


		$objPHPExcel->getActiveSheet()->getStyle('BT10:CK10')->getNumberFormat()->applyFromArray( 
        array( 'code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE));

		$objPHPExcel->getActiveSheet()->SetCellValue('BU'.$fila, '=AVERAGE(AH'.$fila.':AK'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BV'.$fila, '=AVERAGE(AL'.$fila.':AN'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BW'.$fila, '=AVERAGE(AO'.$fila.':AP'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BX'.$fila, '=AVERAGE(AQ'.$fila.':AR'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BY'.$fila, '=AVERAGE(AS'.$fila.':AU'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BZ'.$fila, '=AVERAGE(AV'.$fila.':AX'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CA'.$fila, '=AVERAGE(AY'.$fila.':BB'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CB'.$fila, '=AVERAGE(BC'.$fila.':BE'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CC'.$fila, '=AVERAGE(BF'.$fila.':BK'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CD'.$fila, '=AVERAGE(BL'.$fila.':BN'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CE'.$fila, '=AVERAGE(BO'.$fila.':BS'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CF'.$fila, '=AVERAGE(BT'.$fila.':CD'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CG'.$fila, '=CE'.$fila);

		$objPHPExcel->getActiveSheet()->SetCellValue('CH'.$fila, '=IF(CF'.$fila.'<=10%,"Inicial",IF(AND(CF'.$fila.'>10%,CF'.$fila.'<=30%),"Básico",IF(AND(CF'.$fila.'>30%,CF'.$fila.'<=50%),"Intermedio",IF(AND(CF'.$fila.'>50%,CF'.$fila.'<=80%),"Satisfactorio",IF(AND(CF'.$fila.'>80%,CF'.$fila.'<=100%,CG'.$fila.'<30%),"Avanzado",IF(AND(CF'.$fila.'>80%,CF'.$fila.'<=100%,CG'.$fila.'>=50%),"Ideal"))))))');

		$objPHPExcel->getActiveSheet()->SetCellValue('CI'.$fila, '=AVERAGE(Y'.$fila.':AG'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CJ'.$fila, '=AVERAGE(AH'.$fila.':AX'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CK'.$fila, '=AVERAGE(AY'.$fila.':BN'.$fila.')');

		$objPHPExcel->getActiveSheet()->SetCellValue('CL'.$fila,$rw['plan_mejora']);
		$objPHPExcel->getActiveSheet()->mergeCells('CL'.$fila.':CM'.$fila);

		

		// sacar ventas totales
		$s48 = "SELECT total_ventas.total_ventas_realizadas_ant from total_ventas ";
		$r48 = mysqli_query($conn,$s48);
		$nivel148 = 10;
		while ($rw48=mysqli_fetch_assoc($r48)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CN'.$nivel148,$rw48['total_ventas_realizadas_ant']);
			$nivel148++;
		}


		// sacar costos totales
		$s49 = "SELECT total_ventas.total_ventas_realizadas_ant from total_ventas ";
		$r49 = mysqli_query($conn,$s49);
		$nivel149 = 10;
		while ($rw49=mysqli_fetch_assoc($r49)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CO'.$nivel149,$rw49['total_ventas_realizadas_ant']);
			$nivel149++;
		}


		// sacar familias beneficiadas
		$s50 = "SELECT informacion_complementaria.num_familias FROM informacion_complementaria";
		$r50 = mysqli_query($conn,$s50);
		$nivel150 = 10;
		while ($rw50=mysqli_fetch_assoc($r50)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CP'.$nivel150,$rw50['num_familias']);
			$nivel150++;
		}


			// sacar socias mujeres
		$s51 = "
		SELECT
condicion_vulnerabilidad_es.discapacidad,cabeza_familia,adulto_mayor,indigena,com_negras,campesino,reinsertado,victimas_armado,vulnerabilidad_econo,otro_condicion_vulneravibilidad.cantidad from condicion_vulnerabilidad_es
INNER JOIN informacion_complementaria on informacion_complementaria.id = condicion_vulnerabilidad_es.info_com_id
INNER JOIN otro_condicion_vulneravibilidad on otro_condicion_vulneravibilidad.info_com_id = condicion_vulnerabilidad_es.info_com_id 
where condicion_vulnerabilidad_es.total_rotulo_id = 5 and otro_condicion_vulneravibilidad.otro_rotulo_id = 5 and condicion_vulnerabilidad_es.sexo_id = 2 and otro_condicion_vulneravibilidad.sexo_id = 2";
		$r51 = mysqli_query($conn,$s51);
		$nivel151 = 10;
		while ($rw51=mysqli_fetch_assoc($r51)) {

	 $sumaM = $rw51['discapacidad']
			+ $rw51['cabeza_familia']
			+ $rw51['adulto_mayor']
			+ $rw51['indigena']
			+ $rw51['com_negras']
			+ $rw51['campesino']
			+ $rw51['reinsertado']
			+ $rw51['victimas_armado']
			+ $rw51['vulnerabilidad_econo']
			+ $rw51['cantidad']; 



			$objPHPExcel->getActiveSheet()->SetCellValue('CQ'.$nivel151,$sumaM);
			$nivel151++;
		}



			// sacar socias mujeres
		$s52 = "
		SELECT
condicion_vulnerabilidad_es.discapacidad,cabeza_familia,adulto_mayor,indigena,com_negras,campesino,reinsertado,victimas_armado,vulnerabilidad_econo,otro_condicion_vulneravibilidad.cantidad from condicion_vulnerabilidad_es
INNER JOIN informacion_complementaria on informacion_complementaria.id = condicion_vulnerabilidad_es.info_com_id
INNER JOIN otro_condicion_vulneravibilidad on otro_condicion_vulneravibilidad.info_com_id = condicion_vulnerabilidad_es.info_com_id 
where condicion_vulnerabilidad_es.total_rotulo_id = 5 and otro_condicion_vulneravibilidad.otro_rotulo_id = 5 and condicion_vulnerabilidad_es.sexo_id = 2 and otro_condicion_vulneravibilidad.sexo_id = 1";
		$r52 = mysqli_query($conn,$s52);
		$nivel152 = 10;
		while ($rw52=mysqli_fetch_assoc($r52)) {

	 $sumaM = $rw52['discapacidad']
			+ $rw52['cabeza_familia']
			+ $rw52['adulto_mayor']
			+ $rw52['indigena']
			+ $rw52['com_negras']
			+ $rw52['campesino']
			+ $rw52['reinsertado']
			+ $rw52['victimas_armado']
			+ $rw52['vulnerabilidad_econo']
			+ $rw52['cantidad']; 



			$objPHPExcel->getActiveSheet()->SetCellValue('CR'.$nivel152,$sumaM);
			$nivel152++;
		}

		$objPHPExcel->getActiveSheet()->SetCellValue('CS'.$fila, '=SUM(CQ'.$fila.':CR'.$fila.')');


		// sacar total empleados mujeres
		$s52 = "
		SELECT cantidad from total_empleados WHERE total_rotulo_id = 1 and sexo_id = 2";
		$r52 = mysqli_query($conn,$s52);
		$nivel152 = 10;
		while ($rw52=mysqli_fetch_assoc($r52)) {
	
			 $sumae = $rw52['cantidad']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('CT'.$nivel152,$sumae);
			$nivel152++;
		}

		// sacar total empleados mujeres
		$s52 = "
		SELECT cantidad from total_empleados WHERE total_rotulo_id = 1 and sexo_id = 1";
		$r52 = mysqli_query($conn,$s52);
		$nivel152 = 10;
		while ($rw52=mysqli_fetch_assoc($r52)) {
	
			 $sumae = $rw52['cantidad']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('CU'.$nivel152,$sumae);
			$nivel152++;
		}

		$objPHPExcel->getActiveSheet()->SetCellValue('CV'.$fila, '=SUM(CT'.$fila.':CU'.$fila.')');

		/////////////////// mujeres y hombre entre 18 y 30


		// sacar total empleados mujeres
		$s53 = "SELECT`18_30` from descripcion_etaria where sexo_id = 2";
		$r53 = mysqli_query($conn,$s53);
		$nivel153 = 10;
		while ($rw53=mysqli_fetch_assoc($r53)) {
	
			 $sumae = $rw53['18_30']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('CW'.$nivel153,$sumae);
			$nivel153++;
		}

		// sacar total empleados mujeres
		$s54 = "SELECT`18_30` from descripcion_etaria where sexo_id = 1";
		$r54 = mysqli_query($conn,$s54);
		$nivel154 = 10;
		while ($rw54=mysqli_fetch_assoc($r54)) {
	
			 $sumae = $rw54['18_30']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('CX'.$nivel154,$sumae);
			$nivel154++;
		}

		
			$s55 = "SELECT `30_50` from descripcion_etaria where sexo_id = 2";
		$r55 = mysqli_query($conn,$s55);
		$nivel155 = 10;
		while ($rw55=mysqli_fetch_assoc($r55)) {
	
			 $sumae = $rw55['30_50']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('CY'.$nivel155,$sumae);
			$nivel155++;
		}

		// sacar total empleados mujeres
		$s56 = "SELECT`30_50` from descripcion_etaria where sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			 $sumae = $rw56['30_50']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('CZ'.$nivel156,$sumae);
			$nivel156++;
		}

		////////////////////

			$s55 = "SELECT `mayor_50` from descripcion_etaria where sexo_id = 2";
		$r55 = mysqli_query($conn,$s55);
		$nivel155 = 10;
		while ($rw55=mysqli_fetch_assoc($r55)) {
	
			 $sumae = $rw55['mayor_50']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('DA'.$nivel155,$sumae);
			$nivel155++;
		}

		// sacar total empleados mujeres
		$s56 = "SELECT`mayor_50` from descripcion_etaria where sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			 $sumae = $rw56['mayor_50']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('DB'.$nivel156,$sumae);
			$nivel156++;
		}


		$objPHPExcel->getActiveSheet()->SetCellValue('DC'.$fila, '=SUM(CW'.$fila.':DB'.$fila.')');


// vulnerabilidad empleados

		$s56 = "SELECT condicion_vulnerabilidad_es.discapacidad,cabeza_familia,adulto_mayor,indigena,com_negras,campesino,reinsertado,victimas_armado,vulnerabilidad_econo from condicion_vulnerabilidad_es where condicion_vulnerabilidad_es.total_rotulo_id = 4 and condicion_vulnerabilidad_es.sexo_id = 2";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['discapacidad'];
			$discapacidad2 = $rw56['cabeza_familia'];
			$discapacidad3 = $rw56['adulto_mayor'];
			$discapacidad4 = $rw56['indigena'];
			$discapacidad5 = $rw56['com_negras'];
			$discapacidad6 = $rw56['campesino'];
			$discapacidad7 = $rw56['reinsertado'];
			$discapacidad8 = $rw56['victimas_armado'];
			$discapacidad9 = $rw56['vulnerabilidad_econo'];


			$objPHPExcel->getActiveSheet()->SetCellValue('DD'.$nivel156,$discapacidad1);
			$objPHPExcel->getActiveSheet()->SetCellValue('DF'.$nivel156,$discapacidad2);
			$objPHPExcel->getActiveSheet()->SetCellValue('DH'.$nivel156,$discapacidad3);
			$objPHPExcel->getActiveSheet()->SetCellValue('DJ'.$nivel156,$discapacidad4);
			$objPHPExcel->getActiveSheet()->SetCellValue('DL'.$nivel156,$discapacidad5);
			$objPHPExcel->getActiveSheet()->SetCellValue('DN'.$nivel156,$discapacidad6);
			$objPHPExcel->getActiveSheet()->SetCellValue('DP'.$nivel156,$discapacidad7);
			$objPHPExcel->getActiveSheet()->SetCellValue('DR'.$nivel156,$discapacidad8);
			$objPHPExcel->getActiveSheet()->SetCellValue('DT'.$nivel156,$discapacidad9);

			$nivel156++;
		}


// sacar total empleados mujeres
		$s56 = "SELECT cantidad from otro_condicion_vulneravibilidad where otro_rotulo_id = 4 and sexo_id = 2";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			 $sumae = $rw56['cantidad']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('DV'.$nivel156,$sumae);
			$nivel156++;
		}



		$s56 = "SELECT condicion_vulnerabilidad_es.discapacidad,cabeza_familia,adulto_mayor,indigena,com_negras,campesino,reinsertado,victimas_armado,vulnerabilidad_econo from condicion_vulnerabilidad_es where condicion_vulnerabilidad_es.total_rotulo_id = 4 and condicion_vulnerabilidad_es.sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['discapacidad'];
			$discapacidad2 = $rw56['cabeza_familia'];
			$discapacidad3 = $rw56['adulto_mayor'];
			$discapacidad4 = $rw56['indigena'];
			$discapacidad5 = $rw56['com_negras'];
			$discapacidad6 = $rw56['campesino'];
			$discapacidad7 = $rw56['reinsertado'];
			$discapacidad8 = $rw56['victimas_armado'];
			$discapacidad9 = $rw56['vulnerabilidad_econo'];


			$objPHPExcel->getActiveSheet()->SetCellValue('DE'.$nivel156,$discapacidad1);
			$objPHPExcel->getActiveSheet()->SetCellValue('DG'.$nivel156,$discapacidad2);
			$objPHPExcel->getActiveSheet()->SetCellValue('DI'.$nivel156,$discapacidad3);
			$objPHPExcel->getActiveSheet()->SetCellValue('DK'.$nivel156,$discapacidad4);
			$objPHPExcel->getActiveSheet()->SetCellValue('DM'.$nivel156,$discapacidad5);
			$objPHPExcel->getActiveSheet()->SetCellValue('DO'.$nivel156,$discapacidad6);
			$objPHPExcel->getActiveSheet()->SetCellValue('DQ'.$nivel156,$discapacidad7);
			$objPHPExcel->getActiveSheet()->SetCellValue('DS'.$nivel156,$discapacidad8);
			$objPHPExcel->getActiveSheet()->SetCellValue('DU'.$nivel156,$discapacidad9);

			$nivel156++;
		}


// sacar total empleados mujeres
		$s56 = "SELECT cantidad from otro_condicion_vulneravibilidad where otro_rotulo_id = 4 and sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			 $sumae = $rw56['cantidad']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('DW'.$nivel156,$sumae);
			$nivel156++;
		}

		$objPHPExcel->getActiveSheet()->SetCellValue('DX'.$fila, '=SUM(DD'.$fila.':DW'.$fila.')');



		$s56 = "SELECT primaria,bachillerato,tecnico,tecnologo,universitario from nivel_educativo WHERE sexo_id = 2";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['primaria'];
			$discapacidad2 = $rw56['bachillerato'];
			$discapacidad3 = $rw56['tecnico'];
			$discapacidad4 = $rw56['tecnologo'];
			$discapacidad5 = $rw56['universitario'];


			$objPHPExcel->getActiveSheet()->SetCellValue('DY'.$nivel156,$discapacidad1);
			$objPHPExcel->getActiveSheet()->SetCellValue('EA'.$nivel156,$discapacidad2);
			$objPHPExcel->getActiveSheet()->SetCellValue('EC'.$nivel156,$discapacidad3);
			$objPHPExcel->getActiveSheet()->SetCellValue('EE'.$nivel156,$discapacidad4);
			$objPHPExcel->getActiveSheet()->SetCellValue('EG'.$nivel156,$discapacidad5);

			$nivel156++;
		}


			$s56 = "SELECT cantidad from otro_nivel_educativo where sexo_id = 2";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			 $sumae = $rw56['cantidad']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('EI'.$nivel156,$sumae);
			$nivel156++;
		}

/////
		$s56 = "SELECT primaria,bachillerato,tecnico,tecnologo,universitario from nivel_educativo WHERE sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['primaria'];
			$discapacidad2 = $rw56['bachillerato'];
			$discapacidad3 = $rw56['tecnico'];
			$discapacidad4 = $rw56['tecnologo'];
			$discapacidad5 = $rw56['universitario'];


			$objPHPExcel->getActiveSheet()->SetCellValue('DZ'.$nivel156,$discapacidad1);
			$objPHPExcel->getActiveSheet()->SetCellValue('EB'.$nivel156,$discapacidad2);
			$objPHPExcel->getActiveSheet()->SetCellValue('ED'.$nivel156,$discapacidad3);
			$objPHPExcel->getActiveSheet()->SetCellValue('EF'.$nivel156,$discapacidad4);
			$objPHPExcel->getActiveSheet()->SetCellValue('EH'.$nivel156,$discapacidad5);

			$nivel156++;
		}


		$s56 = "SELECT cantidad from otro_nivel_educativo where sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			 $sumae = $rw56['cantidad']; 

			$objPHPExcel->getActiveSheet()->SetCellValue('EJ'.$nivel156,$sumae);
			$nivel156++;
		}

////////////

		$s56 = "SELECT directo,indirecto,temporal from tipo_contrato where sexo_id = 2";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['directo'];
			$discapacidad2 = $rw56['indirecto'];
			$discapacidad3 = $rw56['temporal'];


			$objPHPExcel->getActiveSheet()->SetCellValue('EK'.$nivel156,$discapacidad1);
			$objPHPExcel->getActiveSheet()->SetCellValue('EM'.$nivel156,$discapacidad2);
			$objPHPExcel->getActiveSheet()->SetCellValue('EO'.$nivel156,$discapacidad3);
			$nivel156++;
		}


		$s56 = "SELECT directo,indirecto,temporal from tipo_contrato where sexo_id = 1";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['directo'];
			$discapacidad2 = $rw56['indirecto'];
			$discapacidad3 = $rw56['temporal'];


			$objPHPExcel->getActiveSheet()->SetCellValue('EL'.$nivel156,$discapacidad1);
			$objPHPExcel->getActiveSheet()->SetCellValue('EN'.$nivel156,$discapacidad2);
			$objPHPExcel->getActiveSheet()->SetCellValue('EP'.$nivel156,$discapacidad3);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(6) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EQ'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(7) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('ER'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(8) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('ES'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(9) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('ET'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(10) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EU'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(11) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EV'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT si_no.nombre from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id
		where pregunta_indicativa.aspecto_id = 3 and pregunta_id IN(13) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['nombre'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EW'.$nivel156,$discapacidad1);
			$nivel156++;
		}


//////////////////////////


		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(16) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EX'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(16) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EY'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		//////////



		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(17) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('EZ'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(17) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FA'.$nivel156,$discapacidad1);
			$nivel156++;
		}

/////


		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(18) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FB'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(18) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FC'.$nivel156,$discapacidad1);
			$nivel156++;
		}

	///

		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(19) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FD'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(19) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FE'.$nivel156,$discapacidad1);
			$nivel156++;
		}

////////


		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(20) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FF'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(20) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FG'.$nivel156,$discapacidad1);
			$nivel156++;
		}

////


		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(22) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FH'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(22) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FI'.$nivel156,$discapacidad1);
			$nivel156++;
		}


///////

		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(23) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FJ'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(23) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FK'.$nivel156,$discapacidad1);
			$nivel156++;
		}

///////

		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(24) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FL'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(24) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FM'.$nivel156,$discapacidad1);
			$nivel156++;
		}


////////



		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1
		INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
		INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id        
		where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(25) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FN'.$nivel156,$discapacidad1);
			$nivel156++;
		}


		$s56 = "SELECT pregunta_id,cumplimiento_id,si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.cumplimiento_id where pregunta_indicativa.aspecto_id = 4 and pregunta_id IN(25) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FO'.$nivel156,$discapacidad1);
			$nivel156++;
		}

/////////

		$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id where pregunta_indicativa.aspecto_id = 5 and pregunta_id IN(29) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FP'.$nivel156,$discapacidad1);
			$nivel156++;
		}


	$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id where pregunta_indicativa.aspecto_id = 5 and pregunta_id IN(30) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FQ'.$nivel156,$discapacidad1);
			$nivel156++;
		}

	//////


$s56 = "SELECT si_no.nombre as respuesta from hoja_verificacion_1 INNER JOIN pregunta_indicativa on pregunta_indicativa.id = hoja_verificacion_1.pregunta_id INNER JOIN si_no ON si_no.id = hoja_verificacion_1.respuesta_id where pregunta_indicativa.aspecto_id = 6 and pregunta_id IN(32) ORDER BY hoja_verificacion_1.id ASC";
		$r56 = mysqli_query($conn,$s56);
		$nivel156 = 10;
		while ($rw56=mysqli_fetch_assoc($r56)) {
	
			$discapacidad1 = $rw56['respuesta'];
			
			$objPHPExcel->getActiveSheet()->SetCellValue('FR'.$nivel156,$discapacidad1);
			$nivel156++;
		}

//////////


$s56 = "SELECT si_no.nombre from actividad_empresa
INNER JOIN si_no ON si_no.id = actividad_empresa.si_no_actividad_id
where actividad_item_id = 1";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('FS'.$nivel156,$discapacidad1);
$nivel156++;
}

/////

$s56 = "SELECT si_no.nombre from actividad_empresa
INNER JOIN si_no ON si_no.id = actividad_empresa.si_no_actividad_id
where actividad_item_id = 2";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('FT'.$nivel156,$discapacidad1);
$nivel156++;
}


/////

$s56 = "SELECT si_no.nombre from actividad_empresa
INNER JOIN si_no ON si_no.id = actividad_empresa.si_no_actividad_id
where actividad_item_id = 3";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('FU'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT etapa_empresa.nombre FROM `empresa`
INNER JOIN etapa_empresa ON etapa_empresa.id = empresa.etapa_empresa_id";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('FV'.$nivel156,$discapacidad1);
$nivel156++;
}


/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 109";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('FW'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 110";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('FX'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 111";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('FY'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 112";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('FZ'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 113";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GA'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 114";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GB'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 115";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GC'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 116";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GD'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 117";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GE'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT confirmacion FROM `conservacion` WHERE pregunta_id = 118";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GF'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT otro_nombre,confirmacion FROM `conservacion` WHERE pregunta_id = 119";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$nombre = $rw56['otro_nombre'];
$discapacidad1 = $rw56['confirmacion'];

$objPHPExcel->getActiveSheet()->SetCellValue('GG'.$nivel156,$nombre.' - '.$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 82";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GH'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 83";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GI'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 84";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GJ'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 85";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GK'.$nivel156,$discapacidad1);
$nivel156++;
}


/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 86";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GL'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 87";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GM'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 88";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('Gn'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 89";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GO'.$nivel156,$discapacidad1);
$nivel156++;
}


/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 90";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GP'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 91";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GQ'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 92";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GR'.$nivel156,$discapacidad1);
$nivel156++;
}


/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 93";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GS'.$nivel156,$discapacidad1);
$nivel156++;
}

/////////

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 95";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GT'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 96";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GU'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 97";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GV'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 98";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GW'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 99";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GX'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 100";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GY'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 101";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('GZ'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 102";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HA'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 103";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('Hb'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 104";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HC'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 105";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HD'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 106";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HE'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from impacto_practicas
		INNER JOIN si_no ON si_no.id = impacto_practicas.respuesta_id
		where pregunta_id = 107";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HF'.$nivel156,$discapacidad1);
$nivel156++;
}



$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 145";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HG'.$nivel156,$discapacidad1);
$nivel156++;
}


$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 146";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HH'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 147";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HI'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 148";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HJ'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 149";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HK'.$nivel156,$discapacidad1);
$nivel156++;
}


$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 150";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HL'.$nivel156,$discapacidad1);
$nivel156++;
}

$s56 = "SELECT si_no.nombre from turismo
		INNER JOIN si_no ON si_no.id = turismo.respuesta_id
		where pregunta_id = 151";

$r56 = mysqli_query($conn,$s56);
$nivel156 = 10;
while ($rw56=mysqli_fetch_assoc($r56)) {

$discapacidad1 = $rw56['nombre'];

$objPHPExcel->getActiveSheet()->SetCellValue('HM'.$nivel156,$discapacidad1);
$nivel156++;
}










		$fila++;
	 }


foreach (range('A','Z') as $col) { 
     $objPHPExcel->getActiveSheet() 
       ->getColumnDimension($col) 
       ->setAutoSize(true);
    } 



$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AW')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AX')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AY')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AZ')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('BB')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('BC')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('BD')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('BE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BH')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BI')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BJ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BK')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BL')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BM')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BO')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BP')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BQ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BR')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BS')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BT')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BU')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BV')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BW')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BX')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BY')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('BZ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CA')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CB')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CC')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CD')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CH')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CI')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CJ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('CK')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CL')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CM')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('Cn')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CO')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CP')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CQ')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CR')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CS')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CT')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CU')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CV')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CW')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CX')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CY')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('CZ')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('DA')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('DB')->setAutoSize(true);
// $objPHPExcel->getActiveSheet()->getColumnDimension('DC')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DD')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DL')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DM')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DR')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DS')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DT')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('DU')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EK')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EL')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EM')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('En')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EO')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EP')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('ES')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EW')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EX')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EY')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('EZ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FA')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FB')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FC')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FD')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FH')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FI')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FJ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FK')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FL')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FM')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FN')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FO')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FP')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FQ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FR')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FS')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FT')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FU')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FV')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FW')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FX')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FY')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('FZ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GA')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GB')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GC')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GD')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GH')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GI')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GJ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GK')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GL')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GM')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GN')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GO')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GP')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GQ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GR')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GS')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GT')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GU')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GV')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GW')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GX')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GY')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('GZ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HA')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HB')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HC')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HD')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HE')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HF')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HG')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HH')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HI')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HJ')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HK')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HL')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('HM')->setAutoSize(true);


$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A10:HM".$fila);
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "A9:S9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "W9:CM9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "CW8:Db9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "CQ9:CV9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "DC8:DC9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "DD8:DW8");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "DD9:DW9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "DX8:DX9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "DY8:EP8");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "DY9:EP9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "EX8:FO8");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "EQ9:FO9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "FP8:FR9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "FS9:FU9");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "FS8:FU8");
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion2, "FW9:HM9");

//$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "CL7:DU".$fila);

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="informe_general.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>