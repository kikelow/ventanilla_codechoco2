<?php 
	 require_once ('../../PHPExcel-1.8/Classes/PHPExcel.php');
	 require_once('../../conexion.php');

	 $s= "SELECT region.nombre as region,empresa.aut_ambiental,empresa.razon_social,empresa.identificacion,categoria.nombre as categoria ,sector.nombre as sector ,subsector.nombre as subsector,empresa.descripcion,concat(persona.nombre1,' ',ifnull(persona.nombre2,' '),' ',persona.apellido1,'',persona.paellido2) as nombre, persona.celular,persona.correo,empresa.direccion,municipio.nombre as municipio, departamento.nombre as departamento, empresa.fecha_registro, empresa.plan_mejora,etapa_empresa.nombre AS etapa_empresa,empresa.const_legalmente_sino,empresa.opera_actualmente_sino FROM empresa
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

	 $fila = 7;

	 // Estilos para los titulos de las columnas
	 $estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	// 'color' => array('rgb' => '538DD5')
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
	 $objPHPExcel->getActiveSheet()->getStyle('CX3:DO3')->applyFromArray($estiloTituloColumnas);
	 $objPHPExcel->getActiveSheet()->getStyle('CX4:DU4')->applyFromArray($estiloTituloColumnas);
	 $objPHPExcel->getActiveSheet()->getStyle('A5:DU5')->applyFromArray($estiloTituloColumnas);
	 $objPHPExcel->getActiveSheet()->getStyle('A6:DU6')->applyFromArray($estiloTituloColumnas); // aplicar estilos
	 // $objPHPExcel->getActiveSheet()->getStyle('A5:U5')->applyFromArray($estilocabeza);
	 
	$objPHPExcel->getActiveSheet()->setCellValue('A5', 'INFORMACION GENERAL');
	$objPHPExcel->getActiveSheet()->mergeCells('A5:U5');
	$objPHPExcel->getActiveSheet()->setCellValue('V5', 'CRITERIO No 1');
	$objPHPExcel->getActiveSheet()->mergeCells('V5:Z5');
	$objPHPExcel->getActiveSheet()->setCellValue('AA5', 'CRITERIO No 2');
	$objPHPExcel->getActiveSheet()->mergeCells('AA5:AH5');
	$objPHPExcel->getActiveSheet()->setCellValue('AI5', 'CRITERIO No 3');
	$objPHPExcel->getActiveSheet()->mergeCells('AI5:AM5');
	$objPHPExcel->getActiveSheet()->setCellValue('AN5', 'CRITERIO No 4');
	$objPHPExcel->getActiveSheet()->mergeCells('AN5:AP5');
	$objPHPExcel->getActiveSheet()->setCellValue('AQ5', 'CRITERIO No 5');
	// $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('AR5', 'CRITERIO No 6');
	$objPHPExcel->getActiveSheet()->mergeCells('AR5:AU5');
	$objPHPExcel->getActiveSheet()->setCellValue('AV5', 'CRITERIO No 7');
	$objPHPExcel->getActiveSheet()->mergeCells('AV5:BA5');
	$objPHPExcel->getActiveSheet()->setCellValue('BB5', 'CRITERIO No 8');
	$objPHPExcel->getActiveSheet()->mergeCells('BB5:BD5');
	$objPHPExcel->getActiveSheet()->setCellValue('BE5', 'CRITERIO No 9');
	$objPHPExcel->getActiveSheet()->mergeCells('BE5:BG5');
	$objPHPExcel->getActiveSheet()->setCellValue('BH5', 'CRITERIO No 10');
	$objPHPExcel->getActiveSheet()->mergeCells('BH5:BM5');
	// $objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('BN5', 'CRITERIO No 11');
	$objPHPExcel->getActiveSheet()->mergeCells('BN5:BO5');
	$objPHPExcel->getActiveSheet()->setCellValue('BP5', 'CRITERIO No 12');
	$objPHPExcel->getActiveSheet()->mergeCells('BP5:BS5');
	$objPHPExcel->getActiveSheet()->setCellValue('BT5', 'CALIFICACION No CRITERIO');
	$objPHPExcel->getActiveSheet()->mergeCells('BT5:CE5');
	$objPHPExcel->getActiveSheet()->mergeCells('CF5:CK5');
	$objPHPExcel->getActiveSheet()->setCellValue('CL5', 'Plan de Mejora');
	$objPHPExcel->getActiveSheet()->mergeCells('CL5:CL6');

	$objPHPExcel->getActiveSheet()->setCellValue('CM5', 'Ventas Totales');
	$objPHPExcel->getActiveSheet()->mergeCells('CM5:CM6');
	$objPHPExcel->getActiveSheet()->setCellValue('CN5', 'Costos Totales');
	$objPHPExcel->getActiveSheet()->mergeCells('CN5:CN6');

	$objPHPExcel->getActiveSheet()->setCellValue('CO5', 'Género empleados');
	$objPHPExcel->getActiveSheet()->mergeCells('CO5:CQ5');

	$objPHPExcel->getActiveSheet()->setCellValue('CR5', 'Componente Etário Empleados');
	$objPHPExcel->getActiveSheet()->mergeCells('CR5:CU5');

	$objPHPExcel->getActiveSheet()->setCellValue('CV5', 'Tipo de vinculación laboral');
	$objPHPExcel->getActiveSheet()->mergeCells('CV5:CW5');

	$objPHPExcel->getActiveSheet()->setCellValue('CX3', 'Legislación Ambiental Colombiana');
	$objPHPExcel->getActiveSheet()->mergeCells('CX3:DO3');

	$objPHPExcel->getActiveSheet()->setCellValue('CX4', 'Registros');
	$objPHPExcel->getActiveSheet()->mergeCells('CX4:DE4');

	$objPHPExcel->getActiveSheet()->setCellValue('CX5', 'Registro Invima');
	$objPHPExcel->getActiveSheet()->mergeCells('CX5:CY5');

	$objPHPExcel->getActiveSheet()->setCellValue('CZ5', 'Registro ICA');
	$objPHPExcel->getActiveSheet()->mergeCells('CZ5:DA5');

	$objPHPExcel->getActiveSheet()->setCellValue('DB5', 'Registro Nacional de turismo');
	$objPHPExcel->getActiveSheet()->mergeCells('DB5:DC5');

	$objPHPExcel->getActiveSheet()->setCellValue('DD5', 'Registro de Plantación Forestal');
	$objPHPExcel->getActiveSheet()->mergeCells('DD5:DE5');

	$objPHPExcel->getActiveSheet()->setCellValue('DF4', 'Permisos');
	$objPHPExcel->getActiveSheet()->mergeCells('DF4:DO4');

	$objPHPExcel->getActiveSheet()->setCellValue('DF5', 'Permiso de Aprovechamiento');
	$objPHPExcel->getActiveSheet()->mergeCells('DF5:DG5');

	$objPHPExcel->getActiveSheet()->setCellValue('DH5', 'Concesión de aguas (subterraneas o superficiales)');
	$objPHPExcel->getActiveSheet()->mergeCells('DH5:DI5');


	$objPHPExcel->getActiveSheet()->setCellValue('DJ5', 'Permiso de Vertimientos o Emisiones');
	$objPHPExcel->getActiveSheet()->mergeCells('DJ5:DK5');


	$objPHPExcel->getActiveSheet()->setCellValue('DL5', 'Permiso Tala de arboles');
	$objPHPExcel->getActiveSheet()->mergeCells('DL5:DM5');


	$objPHPExcel->getActiveSheet()->setCellValue('DN5', 'Permiso de Movilización');
	$objPHPExcel->getActiveSheet()->mergeCells('DN5:DO5');

	$objPHPExcel->getActiveSheet()->setCellValue('DP4', 'Caracteristicas del Negocio');
	$objPHPExcel->getActiveSheet()->mergeCells('DP4:DU4');

	$objPHPExcel->getActiveSheet()->setCellValue('DP5', 'Actividades Realizadas por la empresa');
	$objPHPExcel->getActiveSheet()->mergeCells('DP5:DR5');

	$objPHPExcel->getActiveSheet()->setCellValue('DS5', 'Etapa empresarial');
	$objPHPExcel->getActiveSheet()->mergeCells('DS5:DS6');

	$objPHPExcel->getActiveSheet()->setCellValue('DT5', 'Sobre la Organización');
	$objPHPExcel->getActiveSheet()->mergeCells('DT5:DU5');


	// Titulos de las columnas de la celda
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
	 $objPHPExcel->getActiveSheet()->SetCellValue('A6','Año');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('B6','Entidad de apoyo');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('C6','Numero NV');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('D6','Codigo completo');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('E6','Region');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
	 $objPHPExcel->getActiveSheet()->SetCellValue('F6','Autoridad ambiental');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
	 $objPHPExcel->getActiveSheet()->SetCellValue('G6','Razon social');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('H6','NIT/CC');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('I6','Categoria');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('J6','Sector');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('K6','Subsector');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
	 $objPHPExcel->getActiveSheet()->SetCellValue('L6','Descripcion');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('M6','Cadena productiva');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('N6','Correo');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('O6','Nombre');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(12);
	 $objPHPExcel->getActiveSheet()->SetCellValue('P6','Telefono');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Q6','Direccion');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('R6','Municipio');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('S6','Departamento');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('T6','Año de verificacion');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('U6','Version criterios de verificacion');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('V6','1.1');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('W6','1.2');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('X6','1.3');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Y6','1.4');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Z6','1.5');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AA6','1.6');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AB6','1.7');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AC6','1.8');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AD6','1.9');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AE6','1,10');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AF6','1.11');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AG6','1.12');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AH6','1.13');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AI6','1.14');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AJ6','1.15');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AK6','1.16');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AL6','1.17');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AM6','1.18');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AN6','1.19');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AO6','1,20');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AP6','1.21');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AQ6','1.22');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AR6','1.23');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AS6','1.24');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AT6','1.25');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AU6','1.26');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AV6','1.27');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AW')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AW6','1.28');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AX')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AX6','1.29');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AY')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AY6','1,30');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('AZ')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AZ6','1.31');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BA')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BA6','1.32');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BB')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BB6','1.33');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BC')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BC6','1.34');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BD')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BD6','1.35');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BE')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BE6','1.36');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BF')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BF6','1.37');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BG')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BG6','1.38');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BH')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BH6','1.39');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BI')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BI6','1,40');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BJ')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BJ6','1.41');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BK')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BK6','1.42');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BL')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BL6','1.43');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BM')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BM6','1.44');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BN6','1.45');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BO')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BO6','1.46');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BP')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BP6','2.1');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BQ')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BQ6','2.2');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BR')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BR6','2.3');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BS')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BS6','2.4');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BT')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BT6','1. Viabilidad');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BU')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BU6','2. Impacto');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BV')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BV6','3. Ciclo Vida');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BW')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BW6','4. Vida útil');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BX')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BX6','5. Sust. Peligrosas');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BY')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BY6','6. Recicla');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('BZ')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('BZ6','7. Uso RN');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CA')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CA6','8. RS int.');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('CB')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CB6','9. RS Cadena.');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('CC')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CC6','10. RS Ext.');

	 	  $objPHPExcel->getActiveSheet()->getColumnDimension('CD')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CD6','11. Comunicación');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CE')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CE6','12. Adiccionales');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CF')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CF6','Calificacion Nivel 1');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CG')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CG6','Calificacion Nivel 2');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CH')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CH6','Resultado');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CI')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CI6','Economicos');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('CJ')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CJ6','Ambientales');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('CK')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CK6','Sociales');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('CL')->setWidth(20);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('CM')->setWidth(20);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('CN')->setWidth(20);

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CO')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CO6','Mujeres');
	  $objPHPExcel->getActiveSheet()->getColumnDimension('CP')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CP6','Hombres');
	  $objPHPExcel->getActiveSheet()->getColumnDimension('CQ')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CQ6','Total');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CR')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CR6','Entre 18 y 30');
	  $objPHPExcel->getActiveSheet()->getColumnDimension('CS')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CS6','Entre 31 y 50');
	  $objPHPExcel->getActiveSheet()->getColumnDimension('CT')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CT6','Mayores de 50');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('CU')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CU6','Total');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CV')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CV6','No empleados a termino indefinido');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('CW')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CW6','No empleados a termino definido');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CX')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CX6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('CY')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CY6','Cumple/ No Cumple');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('CZ')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('CZ6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DA')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DA6','Cumple/ No Cumple');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('DB')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DB6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DC')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DC6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DD')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DD6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DE')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DE6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DF')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DF6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DG')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DG6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DH')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DH6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DI')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DI6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DJ')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DJ6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DK')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DK6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DL')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DL6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DM')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DM6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DN')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DN6','Aplica/ No Aplica');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DO')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DO6','Cumple/ No Cumple');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('DP')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DP6','Producción Materia Prima');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DQ')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DQ6','Transformación');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DR')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DR6','Comercialización');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('DS')->setWidth(20);

	 $objPHPExcel->getActiveSheet()->getColumnDimension('DT')->setWidth(40);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DT6','¿Su organización está cosntituida legalmente(Cámara de comercion, DIAN)?');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('DU')->setWidth(40);
	 $objPHPExcel->getActiveSheet()->SetCellValue('DU6','¿Su organización se encuentra operando en la actualidad?');











	 while ($rw=mysqli_fetch_assoc($r)) {
	 	$objPHPExcel->getActiveSheet()->SetCellValue('A'.'2018');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$fila,'');
	 	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$fila,$rw['region']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$fila,$rw['aut_ambiental']);
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
	 	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$fila,$rw['fecha_registro']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$fila,'11');

	 	// sacar el nivel 1.1 de la hoja de verificacion 2
	 	$s1 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIABILIDAD_ECONOMICA1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r1 = mysqli_query($conn,$s1);
		$nivel11 = 7;
		while ($rw1=mysqli_fetch_assoc($r1)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('V'.$nivel11,$rw1['calificador']);
			$nivel11++;
		}

		// sacar el nivel 1.2 de la hoja de verificacion 2
		$s2 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIABILIDAD_ECONOMICA2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r2 = mysqli_query($conn,$s2);
		$nivel12 = 7;
		while ($rw2=mysqli_fetch_assoc($r2)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('W'.$nivel12,$rw2['calificador']);
			$nivel12++;
		}

		// sacar el nivel 1.3 de la hoja de verificacion 2
		$s3 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIABILIDAD_ECONOMICA3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r3 = mysqli_query($conn,$s3);
		$nivel13 = 7;
		while ($rw3=mysqli_fetch_assoc($r3)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('X'.$nivel13,$rw3['calificador']);
			$nivel13++;
		}

		// sacar el nivel 1.4 de la hoja de verificacion 2
		$s4 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIABILIDAD_ECONOMICA4%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r4 = mysqli_query($conn,$s4);
		$nivel14 = 7;
		while ($rw4=mysqli_fetch_assoc($r4)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$nivel14,$rw4['calificador']);
			$nivel14++;
		}

		// sacar el nivel 1.5 de la hoja de verificacion 2
		$s5 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIABILIDAD_ECONOMICA5%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r5 = mysqli_query($conn,$s5);
		$nivel15 = 7;
		while ($rw5=mysqli_fetch_assoc($r5)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$nivel15,$rw5['calificador']);
			$nivel15++;
		}

		// sacar el nivel 1.6 de la hoja de verificacion 2
		$s6 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r6 = mysqli_query($conn,$s6);
		$nivel16 = 7;
		while ($rw6=mysqli_fetch_assoc($r6)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$nivel16,$rw6['calificador']);
			$nivel16++;
		}

		// sacar el nivel 1.7 de la hoja de verificacion 2
		$s7 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r7 = mysqli_query($conn,$s7);
		$nivel17 = 7;
		while ($rw7=mysqli_fetch_assoc($r7)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AB'.$nivel17,$rw7['calificador']);
			$nivel17++;
		}

		// sacar el nivel 1.8 de la hoja de verificacion 2
		$s8 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r8 = mysqli_query($conn,$s8);
		$nivel18 = 7;
		while ($rw8=mysqli_fetch_assoc($r8)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$nivel18,$rw8['calificador']);
			$nivel18++;
		}

		// sacar el nivel 1.9 de la hoja de verificacion 2
		$s9 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION4%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r9 = mysqli_query($conn,$s9);
		$nivel19 = 7;
		while ($rw9=mysqli_fetch_assoc($r9)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$nivel19,$rw9['calificador']);
			$nivel19++;
		}

		// sacar el nivel 1.10 de la hoja de verificacion 2
		$s10 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION5%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r10 = mysqli_query($conn,$s10);
		$nivel110 = 7;
		while ($rw10=mysqli_fetch_assoc($r10)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AE'.$nivel110,$rw10['calificador']);
			$nivel110++;
		}

		// sacar el nivel 1.11 de la hoja de verificacion 2
		$s11 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION6%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r11 = mysqli_query($conn,$s11);
		$nivel111 = 7;
		while ($rw11=mysqli_fetch_assoc($r11)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AF'.$nivel111,$rw11['calificador']);
			$nivel111++;
		}

		// sacar el nivel 1.12 de la hoja de verificacion 2
		$s12 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION7%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r12 = mysqli_query($conn,$s12);
		$nivel112 = 7;
		while ($rw12=mysqli_fetch_assoc($r12)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AG'.$nivel112,$rw12['calificador']);
			$nivel112++;
		}

		// sacar el nivel 1.13 de la hoja de verificacion 2
		$s13 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CONTRIBUCION_CONSERVACION8%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r13 = mysqli_query($conn,$s13);
		$nivel113 = 7;
		while ($rw13=mysqli_fetch_assoc($r13)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AH'.$nivel113,$rw13['calificador']);
			$nivel113++;
		}

		// sacar el nivel 1.14 de la hoja de verificacion 2
		$s14 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CICLO_VIDA1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r14 = mysqli_query($conn,$s14);
		$nivel114 = 7;
		while ($rw14=mysqli_fetch_assoc($r14)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AI'.$nivel114,$rw14['calificador']);
			$nivel114++;
		}

		// sacar el nivel 1.15 de la hoja de verificacion 2
		$s15 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CICLO_VIDA2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r15 = mysqli_query($conn,$s15);
		$nivel115 = 7;
		while ($rw15=mysqli_fetch_assoc($r15)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AJ'.$nivel115,$rw15['calificador']);
			$nivel115++;
		}

		// sacar el nivel 1.16 de la hoja de verificacion 2
		$s16 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CICLO_VIDA3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r16 = mysqli_query($conn,$s16);
		$nivel116 = 7;
		while ($rw16=mysqli_fetch_assoc($r16)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AK'.$nivel116,$rw16['calificador']);
			$nivel116++;
		}

		// sacar el nivel 1.17 de la hoja de verificacion 2
		$s17 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CICLO_VIDA4%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r17 = mysqli_query($conn,$s17);
		$nivel117 = 7;
		while ($rw17=mysqli_fetch_assoc($r17)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AL'.$nivel117,$rw17['calificador']);
			$nivel117++;
		}

		// sacar el nivel 1.18 de la hoja de verificacion 2
		$s18 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%CICLO_VIDA5%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r18 = mysqli_query($conn,$s18);
		$nivel118 = 7;
		while ($rw18=mysqli_fetch_assoc($r18)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AM'.$nivel118,$rw18['calificador']);
			$nivel118++;
		}

		// sacar el nivel 1.19 de la hoja de verificacion 2
		$s19 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIDA_UTIL1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r19 = mysqli_query($conn,$s19);
		$nivel119 = 7;
		while ($rw19=mysqli_fetch_assoc($r19)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AN'.$nivel119,$rw19['calificador']);
			$nivel119++;
		}

		// sacar el nivel 1.20 de la hoja de verificacion 2
		$s20 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIDA_UTIL2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r20 = mysqli_query($conn,$s20);
		$nivel120 = 7;
		while ($rw20=mysqli_fetch_assoc($r20)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AO'.$nivel120,$rw20['calificador']);
			$nivel120++;
		}

		// sacar el nivel 1.21 de la hoja de verificacion 2
		$s21 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%VIDA_UTIL3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r21 = mysqli_query($conn,$s21);
		$nivel121 = 7;
		while ($rw21=mysqli_fetch_assoc($r21)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AP'.$nivel121,$rw21['calificador']);
			$nivel121++;
		}

		// sacar el nivel 1.22 de la hoja de verificacion 2
		$s22 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SUSTITUCION_MATERIALES1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r22 = mysqli_query($conn,$s22);
		$nivel122 = 7;
		while ($rw22=mysqli_fetch_assoc($r22)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AQ'.$nivel122,$rw22['calificador']);
			$nivel122++;
		}

		// sacar el nivel 1.23 de la hoja de verificacion 2
		$s23 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%MATERIALES_RECICLADOS1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r23 = mysqli_query($conn,$s23);
		$nivel123 = 7;
		while ($rw23=mysqli_fetch_assoc($r23)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AR'.$nivel123,$rw23['calificador']);
			$nivel123++;
		}

		// sacar el nivel 1.24 de la hoja de verificacion 2
		$s24 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%MATERIALES_RECICLADOS2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r24 = mysqli_query($conn,$s24);
		$nivel124 = 7;
		while ($rw24=mysqli_fetch_assoc($r24)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AS'.$nivel124,$rw24['calificador']);
			$nivel124++;
		}

		// sacar el nivel 1.25 de la hoja de verificacion 2
		$s25 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%MATERIALES_RECICLADOS3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r25 = mysqli_query($conn,$s25);
		$nivel125 = 7;
		while ($rw25=mysqli_fetch_assoc($r25)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AT'.$nivel125,$rw25['calificador']);
			$nivel125++;
		}

		// sacar el nivel 1.26 de la hoja de verificacion 2
		$s26 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%MATERIALES_RECICLADOS4%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r26 = mysqli_query($conn,$s26);
		$nivel126 = 7;
		while ($rw26=mysqli_fetch_assoc($r26)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AU'.$nivel126,$rw26['calificador']);
			$nivel126++;
		}

		// sacar el nivel 1.27 de la hoja de verificacion 2
		$s27 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SOSTENIBLE_RECURSO1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r27 = mysqli_query($conn,$s27);
		$nivel127 = 7;
		while ($rw27=mysqli_fetch_assoc($r27)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AV'.$nivel127,$rw27['calificador']);
			$nivel127++;
		}

		// sacar el nivel 1.28 de la hoja de verificacion 2
		$s28 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SOSTENIBLE_RECURSO2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r28 = mysqli_query($conn,$s28);
		$nivel128 = 7;
		while ($rw28=mysqli_fetch_assoc($r28)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AW'.$nivel128,$rw28['calificador']);
			$nivel128++;
		}

		// sacar el nivel 1.29 de la hoja de verificacion 2
		$s29 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SOSTENIBLE_RECURSO3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r29 = mysqli_query($conn,$s29);
		$nivel129 = 7;
		while ($rw29=mysqli_fetch_assoc($r29)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AX'.$nivel129,$rw29['calificador']);
			$nivel129++;
		}

		// sacar el nivel 1.30 de la hoja de verificacion 2
		$s30 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SOSTENIBLE_RECURSO4%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r30 = mysqli_query($conn,$s30);
		$nivel130 = 7;
		while ($rw30=mysqli_fetch_assoc($r30)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AY'.$nivel130,$rw30['calificador']);
			$nivel130++;
		}

		// sacar el nivel 1.31 de la hoja de verificacion 2
		$s31 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SOSTENIBLE_RECURSO5%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r31 = mysqli_query($conn,$s31);
		$nivel131 = 7;
		while ($rw31=mysqli_fetch_assoc($r31)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('AZ'.$nivel131,$rw31['calificador']);
			$nivel131++;
		}

		// sacar el nivel 1.32 de la hoja de verificacion 2
		$s32 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%SOSTENIBLE_RECURSO6%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r32 = mysqli_query($conn,$s32);
		$nivel132 = 7;
		while ($rw32=mysqli_fetch_assoc($r32)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BA'.$nivel132,$rw32['calificador']);
			$nivel132++;
		}

		// sacar el nivel 1.33 de la hoja de verificacion 2
		$s33 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EMPRESA1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r33 = mysqli_query($conn,$s33);
		$nivel133 = 7;
		while ($rw33=mysqli_fetch_assoc($r33)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BB'.$nivel133,$rw33['calificador']);
			$nivel133++;
		}

		// sacar el nivel 1.34 de la hoja de verificacion 2
		$s34 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EMPRESA2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r34 = mysqli_query($conn,$s34);
		$nivel134 = 7;
		while ($rw34=mysqli_fetch_assoc($r34)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BC'.$nivel134,$rw34['calificador']);
			$nivel134++;
		}

		// sacar el nivel 1.35 de la hoja de verificacion 2
		$s35 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EMPRESA3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r35 = mysqli_query($conn,$s35);
		$nivel135 = 7;
		while ($rw35=mysqli_fetch_assoc($r35)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BD'.$nivel135,$rw35['calificador']);
			$nivel135++;
		}

		// sacar el nivel 1.36 de la hoja de verificacion 2
		$s36 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_VALOR1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r36 = mysqli_query($conn,$s36);
		$nivel136 = 7;
		while ($rw36=mysqli_fetch_assoc($r36)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BE'.$nivel136,$rw36['calificador']);
			$nivel136++;
		}

		// sacar el nivel 1.37 de la hoja de verificacion 2
		$s37 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_VALOR2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r37 = mysqli_query($conn,$s37);
		$nivel137 = 7;
		while ($rw37=mysqli_fetch_assoc($r37)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BF'.$nivel137,$rw37['calificador']);
			$nivel137++;
		}

		// sacar el nivel 1.38 de la hoja de verificacion 2
		$s38 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_VALOR3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r38 = mysqli_query($conn,$s38);
		$nivel138 = 7;
		while ($rw38=mysqli_fetch_assoc($r38)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BG'.$nivel138,$rw38['calificador']);
			$nivel138++;
		}

		// sacar el nivel 1.39 de la hoja de verificacion 2
		$s39 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EXTERIOR1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r39 = mysqli_query($conn,$s39);
		$nivel139 = 7;
		while ($rw39=mysqli_fetch_assoc($r39)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BH'.$nivel139,$rw39['calificador']);
			$nivel139++;
		}

		// sacar el nivel 1.40 de la hoja de verificacion 2
		$s40 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EXTERIOR2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r40 = mysqli_query($conn,$s40);
		$nivel140 = 7;
		while ($rw40=mysqli_fetch_assoc($r40)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BI'.$nivel140,$rw40['calificador']);
			$nivel140++;
		}

		// sacar el nivel 1.41 de la hoja de verificacion 2
		$s41 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EXTERIOR3%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r41 = mysqli_query($conn,$s41);
		$nivel141 = 7;
		while ($rw41=mysqli_fetch_assoc($r41)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BJ'.$nivel141,$rw41['calificador']);
			$nivel141++;
		}

		// sacar el nivel 1.42 de la hoja de verificacion 2
		$s42 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EXTERIOR4%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r42 = mysqli_query($conn,$s42);
		$nivel142 = 7;
		while ($rw42=mysqli_fetch_assoc($r42)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BK'.$nivel142,$rw42['calificador']);
			$nivel142++;
		}

		// sacar el nivel 1.43 de la hoja de verificacion 2
		$s43 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EXTERIOR5%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r43 = mysqli_query($conn,$s43);
		$nivel143 = 7;
		while ($rw43=mysqli_fetch_assoc($r43)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BL'.$nivel143,$rw43['calificador']);
			$nivel143++;
		}

		// sacar el nivel 1.44 de la hoja de verificacion 2
		$s44 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPO_SOCIAL_EXTERIOR6%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r44 = mysqli_query($conn,$s44);
		$nivel144 = 7;
		while ($rw44=mysqli_fetch_assoc($r44)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BM'.$nivel144,$rw44['calificador']);
			$nivel144++;
		}

		// sacar el nivel 1.45 de la hoja de verificacion 2
		$s45 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%COMUNICACION_ATRIBUTOS1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r45 = mysqli_query($conn,$s45);
		$nivel145 = 7;
		while ($rw45=mysqli_fetch_assoc($r45)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BN'.$nivel145,$rw45['calificador']);
			$nivel145++;
		}

		// sacar el nivel 1.46 de la hoja de verificacion 2
		$s46 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%COMUNICACION_ATRIBUTOS2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r46 = mysqli_query($conn,$s46);
		$nivel146 = 7;
		while ($rw46=mysqli_fetch_assoc($r46)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BO'.$nivel146,$rw46['calificador']);
			$nivel146++;
		}

		// sacar el nivel 21 de la hoja de verificacion 2
		$s21 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%ESQUEMAS_RECONOCIMIENTOS1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r21 = mysqli_query($conn,$s21);
		$nivel121 = 7;
		while ($rw21=mysqli_fetch_assoc($r21)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BP'.$nivel121,$rw21['calificador']);
			$nivel121++;
		}

		// sacar el nivel 22 de la hoja de verificacion 2
		$s22 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%ESQUEMAS_RECONOCIMIENTOS2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r22 = mysqli_query($conn,$s22);
		$nivel122 = 7;
		while ($rw22=mysqli_fetch_assoc($r22)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BQ'.$nivel122,$rw22['calificador']);
			$nivel122++;
		}

		// sacar el nivel 23 de la hoja de verificacion 2
		$s23 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPON_SOCIAL_ADICCIONAL1%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r23 = mysqli_query($conn,$s23);
		$nivel123 = 7;
		while ($rw23=mysqli_fetch_assoc($r23)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BR'.$nivel123,$rw23['calificador']);
			$nivel123++;
		}

		// sacar el nivel 24 de la hoja de verificacion 2
		$s24 = "SELECT calificador.nombre AS calificador FROM empresa
			INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
			INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE opciones.codigo LIKE '%RESPON_SOCIAL_ADICCIONAL2%' AND empresa.verificacion2 = 'si' order by empresa.id";
		$r24 = mysqli_query($conn,$s24);
		$nivel124 = 7;
		while ($rw24=mysqli_fetch_assoc($r24)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('BS'.$nivel124,$rw24['calificador']);
			$nivel124++;
		}

		$objPHPExcel->getActiveSheet()->SetCellValue('BT'.$fila, '=AVERAGE(V'.$fila.':Z'.$fila.')');
		$objPHPExcel->getActiveSheet()->getStyle('BT'.$fila.':CG'.$fila)
    ->getNumberFormat()->applyFromArray( 
        array( 
            'code' => PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE
        )
    );
		$objPHPExcel->getActiveSheet()->SetCellValue('BU'.$fila, '=AVERAGE(AA'.$fila.':AH'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BV'.$fila, '=AVERAGE(AI'.$fila.':AM'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BW'.$fila, '=AVERAGE(AN'.$fila.':AP'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BX'.$fila, '=AVERAGE(AQ'.$fila.':AQ'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BY'.$fila, '=AVERAGE(AR'.$fila.':AU'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('BZ'.$fila, '=AVERAGE(AV'.$fila.':BA'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CA'.$fila, '=AVERAGE(BB'.$fila.':BD'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CB'.$fila, '=AVERAGE(BE'.$fila.':BG'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CC'.$fila, '=AVERAGE(BH'.$fila.':BM'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CD'.$fila, '=AVERAGE(BN'.$fila.':BO'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CE'.$fila, '=AVERAGE(BP'.$fila.':BS'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CF'.$fila, '=AVERAGE(BT'.$fila.':CD'.$fila.')');
		$objPHPExcel->getActiveSheet()->SetCellValue('CG'.$fila, '=CE'.$fila);

		// $objPHPExcel->getActiveSheet()->SetCellValue('CH'.$fila, '=IF(AVERAGE(CF'.$fila.':CG'.$fila.')<=10%;"Inicial";IF(AND(AVERAGE(CF'.$fila.':CG'.$fila.')>10%;AVERAGE(CF'.$fila.':CG'.$fila.')<=30%);"Basico";IF(AND(AVERAGE(CF'.$fila.':CG'.$fila.')>30%;AVERAGE(CF'.$fila.':CG'.$fila.')<=50%);"Intermedio";IF(AND(AVERAGE(CF'.$fila.':CG'.$fila.')>50%;AVERAGE(CF'.$fila.':CG'.$fila.')<=80%);"Satisfactorio";IF(AND(AVERAGE(CF'.$fila.':CG'.$fila.')>80%;AVERAGE(CF'.$fila.':CG'.$fila.')<=100%);"Ideal")))))');
		//Falta de la CH a CK

		// ventas y costos 
		$s25 = "SELECT empresa.id, SUM(sost_economica.ventas_anual) as venta_total, SUM(sost_economica.costo_produccion) as costo_total FROM empresa
		    LEFT JOIN sost_economica  ON empresa.id = sost_economica.empresa_id 
		    WHERE empresa.verificacion2 = 'si'
		    GROUP BY sost_economica.empresa_id  ORDER BY empresa.id";
		$r25 = mysqli_query($conn,$s25);
		$nivel125 = 7;
		while ($rw25=mysqli_fetch_assoc($r25)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CM'.$nivel125,$rw25['venta_total']);
			$objPHPExcel->getActiveSheet()->SetCellValue('CN'.$nivel125,$rw25['costo_total']);
			$nivel125++;
		}

		// sexo masculino
		$s26 = "SELECT empresa.id, sexo.nombre as sexo, empleado_sexo.cantidad FROM empresa
		INNER JOIN empleado_sexo ON empleado_sexo.empresa_id = empresa.id
		INNER JOIN sexo ON sexo.id = empleado_sexo.sexo_id
		WHERE empleado_sexo.socio_empleado_id = 3 AND empleado_sexo.sexo_id = 1 AND empresa.verificacion2 ='si' ORDER by empresa.id";
		$r26 = mysqli_query($conn,$s26);
		$nivel126 = 7;
		while ($rw26=mysqli_fetch_assoc($r26)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CO'.$nivel126,$rw26['cantidad']);
			$nivel126++;
		}

		// sexo femenino
		$s27 = "SELECT empresa.id, sexo.nombre as sexo, empleado_sexo.cantidad FROM empresa
		INNER JOIN empleado_sexo ON empleado_sexo.empresa_id = empresa.id
		INNER JOIN sexo ON sexo.id = empleado_sexo.sexo_id
		WHERE empleado_sexo.socio_empleado_id = 3 AND empleado_sexo.sexo_id = 2 AND empresa.verificacion2 ='si' ORDER by empresa.id";
		$r27 = mysqli_query($conn,$s27);
		$nivel127 = 7;
		while ($rw27=mysqli_fetch_assoc($r27)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CP'.$nivel127,$rw27['cantidad']);
			$nivel127++;
		}
		$objPHPExcel->getActiveSheet()->SetCellValue('CQ'.$fila, '=SUM(CO'.$fila.':CP'.$fila.')');

		// entre 18 y 30
		$s28 = "SELECT empresa.id,edad.nombre,empleado_edad.cantidad FROM empresa
			INNER JOIN empleado_edad ON empleado_edad.empresa_id = empresa.id
			INNER JOIN edad ON edad.id = empleado_edad.edad_id
			WHERE empleado_edad.edad_id = 1 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r28 = mysqli_query($conn,$s28);
		$nivel128 = 7;
		while ($rw28=mysqli_fetch_assoc($r28)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CR'.$nivel128,$rw28['cantidad']);
			$nivel128++;
		}

		// entre 30 y 50
		$s29 = "SELECT empresa.id,edad.nombre,empleado_edad.cantidad FROM empresa
			INNER JOIN empleado_edad ON empleado_edad.empresa_id = empresa.id
			INNER JOIN edad ON edad.id = empleado_edad.edad_id
			WHERE empleado_edad.edad_id = 2 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r29 = mysqli_query($conn,$s29);
		$nivel129 = 7;
		while ($rw29=mysqli_fetch_assoc($r29)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CS'.$nivel129,$rw29['cantidad']);
			$nivel129++;
		}

		// entre 18 y 30
		$s30 = "SELECT empresa.id,edad.nombre,empleado_edad.cantidad FROM empresa
			INNER JOIN empleado_edad ON empleado_edad.empresa_id = empresa.id
			INNER JOIN edad ON edad.id = empleado_edad.edad_id
			WHERE empleado_edad.edad_id = 3 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r30 = mysqli_query($conn,$s30);
		$nivel130 = 7;
		while ($rw30=mysqli_fetch_assoc($r30)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CT'.$nivel130,$rw30['cantidad']);
			$nivel130++;
		}
		$objPHPExcel->getActiveSheet()->SetCellValue('CU'.$fila, '=SUM(CR'.$fila.':CT'.$fila.')');

		// vinculacion
		$s31 = "SELECT empresa.id,vinculacion.nombre,tipo_vinculacion.cantidad FROM empresa
			INNER JOIN tipo_vinculacion ON tipo_vinculacion.empresa_id = empresa.id
			INNER JOIN vinculacion ON vinculacion.id = tipo_vinculacion.vinculacion_id
			WHERE tipo_vinculacion.vinculacion_id = 1 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r31 = mysqli_query($conn,$s31);
		$nivel131 = 7;
		while ($rw31=mysqli_fetch_assoc($r31)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CV'.$nivel131,$rw31['cantidad']);
			$nivel131++;
		}

		// vinculacion
		$s32 = "SELECT empresa.id,vinculacion.nombre,tipo_vinculacion.cantidad FROM empresa
			INNER JOIN tipo_vinculacion ON tipo_vinculacion.empresa_id = empresa.id
			INNER JOIN vinculacion ON vinculacion.id = tipo_vinculacion.vinculacion_id
			WHERE tipo_vinculacion.vinculacion_id = 2 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r32 = mysqli_query($conn,$s32);
		$nivel132 = 7;
		while ($rw32=mysqli_fetch_assoc($r32)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CW'.$nivel132,$rw32['cantidad']);
			$nivel132++;
		}

		// registro invima
		$s33 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN registro ON registro.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = registro.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = registro.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = registro.cumple_nocumple_id
			WHERE registro.opciones_id = 18 AND empresa.verificacion2='si'  ORDER BY empresa.id";
		$r33 = mysqli_query($conn,$s33);
		$nivel133 = 7;
		while ($rw33=mysqli_fetch_assoc($r33)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CX'.$nivel133,$rw33['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('CY'.$nivel133,$rw33['cumple_no']);
			$nivel133++;
		}

		// registro ICA
		$s34 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN registro ON registro.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = registro.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = registro.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = registro.cumple_nocumple_id
			WHERE registro.opciones_id = 19 AND empresa.verificacion2='si'  ORDER BY empresa.id";
		$r34 = mysqli_query($conn,$s34);
		$nivel134 = 7;
		while ($rw34=mysqli_fetch_assoc($r34)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('CZ'.$nivel134,$rw34['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DA'.$nivel134,$rw34['cumple_no']);
			$nivel134++;
		}

		// registro nacional de turismo
		$s35 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN registro ON registro.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = registro.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = registro.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = registro.cumple_nocumple_id
			WHERE registro.opciones_id = 20 AND empresa.verificacion2='si'  ORDER BY empresa.id";
		$r35 = mysqli_query($conn,$s35);
		$nivel135 = 7;
		while ($rw35=mysqli_fetch_assoc($r35)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DB'.$nivel135,$rw35['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DC'.$nivel135,$rw35['cumple_no']);
			$nivel135++;
		}

		// registro PLANTACION FORESTAL
		$s36 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN registro ON registro.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = registro.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = registro.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = registro.cumple_nocumple_id
			WHERE registro.opciones_id = 21 AND empresa.verificacion2='si'  ORDER BY empresa.id";
		$r36 = mysqli_query($conn,$s36);
		$nivel136 = 7;
		while ($rw36=mysqli_fetch_assoc($r36)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DD'.$nivel136,$rw36['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DE'.$nivel136,$rw36['cumple_no']);
			$nivel136++;
		}

		// Permiso de aprovechamiento
		$s37 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN permiso ON permiso.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = permiso.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = permiso.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = permiso.cumple_nocumple_id
			WHERE permiso.opciones_id = 22 AND empresa.verificacion2='si' ORDER BY empresa.id";
		$r37 = mysqli_query($conn,$s37);
		$nivel137 = 7;
		while ($rw37=mysqli_fetch_assoc($r37)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DF'.$nivel137,$rw37['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DG'.$nivel137,$rw37['cumple_no']);
			$nivel137++;
		}

		// Permiso de CONCESION DE AGUAS
		$s38 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN permiso ON permiso.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = permiso.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = permiso.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = permiso.cumple_nocumple_id
			WHERE permiso.opciones_id = 23 AND empresa.verificacion2='si' ORDER BY empresa.id";
		$r38 = mysqli_query($conn,$s38);
		$nivel138 = 7;
		while ($rw38=mysqli_fetch_assoc($r38)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DH'.$nivel138,$rw38['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DI'.$nivel138,$rw38['cumple_no']);
			$nivel138++;
		}

		// Permiso de vertimientos o emisiones
		$s39 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN permiso ON permiso.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = permiso.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = permiso.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = permiso.cumple_nocumple_id
			WHERE permiso.opciones_id = 24 AND empresa.verificacion2='si' ORDER BY empresa.id";
		$r39 = mysqli_query($conn,$s39);
		$nivel139 = 7;
		while ($rw39=mysqli_fetch_assoc($r39)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DJ'.$nivel139,$rw39['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DK'.$nivel139,$rw39['cumple_no']);
			$nivel139++;
		}

		// Permiso de tala de arboles
		$s40 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN permiso ON permiso.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = permiso.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = permiso.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = permiso.cumple_nocumple_id
			WHERE permiso.opciones_id = 25 AND empresa.verificacion2='si' ORDER BY empresa.id";
		$r40 = mysqli_query($conn,$s40);
		$nivel140 = 7;
		while ($rw40=mysqli_fetch_assoc($r40)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DL'.$nivel140,$rw40['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DM'.$nivel140,$rw40['cumple_no']);
			$nivel140++;
		}

		// Permiso de Movilizacion
		$s41 = "SELECT empresa.id,opciones.nombre,aplica_noaplica.nombre AS aplica_no,cumple_nocumple.nombre AS cumple_no FROM empresa
			INNER JOIN permiso ON permiso.empresa_id = empresa.id
			INNER JOIN opciones ON opciones.id = permiso.opciones_id
			INNER JOIN aplica_noaplica ON aplica_noaplica.id = permiso.aplica_noaplica_id
			INNER JOIN cumple_nocumple ON cumple_nocumple.id = permiso.cumple_nocumple_id
			WHERE permiso.opciones_id = 26 AND empresa.verificacion2='si' ORDER BY empresa.id";
		$r41 = mysqli_query($conn,$s41);
		$nivel141 = 7;
		while ($rw41=mysqli_fetch_assoc($r41)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DN'.$nivel141,$rw41['aplica_no']);
			$objPHPExcel->getActiveSheet()->SetCellValue('DO'.$nivel141,$rw41['cumple_no']);
			$nivel141++;
		}

		// Produccion de materia prima
		$s42 = "SELECT empresa.id, actividad_item.nombre, actividad_empresa.confirmacion FROM empresa
			INNER JOIN actividad_empresa ON actividad_empresa.empresa_id = empresa.id
			INNER JOIN actividad_item ON actividad_item.id = actividad_empresa.actividad_item_id
			WHERE actividad_empresa.actividad_item_id = 1 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r42 = mysqli_query($conn,$s42);
		$nivel142 = 7;
		while ($rw42=mysqli_fetch_assoc($r42)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DP'.$nivel142,$rw42['confirmacion']);
			$nivel142++;
		}

		// transformacion
		$s43 = "SELECT empresa.id, actividad_item.nombre, actividad_empresa.confirmacion FROM empresa
			INNER JOIN actividad_empresa ON actividad_empresa.empresa_id = empresa.id
			INNER JOIN actividad_item ON actividad_item.id = actividad_empresa.actividad_item_id
			WHERE actividad_empresa.actividad_item_id = 2 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r43 = mysqli_query($conn,$s43);
		$nivel143 = 7;
		while ($rw43=mysqli_fetch_assoc($r43)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DQ'.$nivel143,$rw43['confirmacion']);
			$nivel143++;
		}

		// comercializacion
		$s43 = "SELECT empresa.id, actividad_item.nombre, actividad_empresa.confirmacion FROM empresa
			INNER JOIN actividad_empresa ON actividad_empresa.empresa_id = empresa.id
			INNER JOIN actividad_item ON actividad_item.id = actividad_empresa.actividad_item_id
			WHERE actividad_empresa.actividad_item_id = 3 AND empresa.verificacion2 = 'si' ORDER BY empresa.id";
		$r43 = mysqli_query($conn,$s43);
		$nivel143 = 7;
		while ($rw43=mysqli_fetch_assoc($r43)) {
			$objPHPExcel->getActiveSheet()->SetCellValue('DR'.$nivel143,$rw43['confirmacion']);
			$nivel143++;
		}
		$objPHPExcel->getActiveSheet()->SetCellValue('DS'.$fila,$rw['etapa_empresa']);
		if ($rw['const_legalmente_sino']=='1') {
			$objPHPExcel->getActiveSheet()->SetCellValue('DT'.$fila,'si');
		}elseif ($rw['const_legalmente_sino']=='2') {
			$objPHPExcel->getActiveSheet()->SetCellValue('DT'.$fila,'no');
		}

		if ($rw['opera_actualmente_sino']=='1') {
			$objPHPExcel->getActiveSheet()->SetCellValue('DU'.$fila,'si');
		}elseif ($rw['opera_actualmente_sino']=='2') {
			$objPHPExcel->getActiveSheet()->SetCellValue('DU'.$fila,'no');
		}
	 	$fila++;
	 }
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A7:BS".$fila);
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "CH7:DU".$fila);


header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="informe_general.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');


?>