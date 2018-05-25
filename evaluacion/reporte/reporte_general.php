<?php 
	 require_once ('../../PHPExcel-1.8/Classes/PHPExcel.php');
	 require_once('../../conexion.php');

	 $s= "SELECT region.nombre as region,empresa.aut_ambiental,empresa.razon_social,empresa.identificacion,categoria.nombre as categoria ,sector.nombre as sector ,subsector.nombre as subsector,empresa.descripcion,concat(persona.nombre1,' ',ifnull(persona.nombre2,' '),' ',persona.apellido1,'',persona.paellido2) as nombre, persona.celular,persona.correo,empresa.direccion,municipio.nombre as municipio, departamento.nombre as departamento, empresa.fecha_registro FROM empresa
		INNER JOIN subsector ON subsector.id = empresa.subsector_id
		INNER JOIN sector ON sector.id = subsector.sector_id
		INNER JOIN categoria on categoria.id = sector.categoria_id
		INNER JOIN persona ON persona.id = empresa.persona_id
		INNER JOIN municipio ON municipio.id = empresa.municipio_id
		INNER JOIN departamento ON departamento.id = municipio.departamento_id
		INNER JOIN region ON region.id = departamento.region_id";
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

	 $objPHPExcel->getActiveSheet()->getStyle('A6:U6')->applyFromArray($estiloTituloColumnas); // aplicar estilos
	 // $objPHPExcel->getActiveSheet()->getStyle('A5:U5')->applyFromArray($estilocabeza);

	 $objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');

	$objPHPExcel->getActiveSheet()->setCellValue('A5', 'INFORMACION GENERAL');
	$objPHPExcel->getActiveSheet()->mergeCells('A5:U5');

	$objPHPExcel->getActiveSheet()->setCellValue('V5', 'NIVEL 1');
	$objPHPExcel->getActiveSheet()->mergeCells('V5:Z5');

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

	 // 	$s1 = "SELECT empresa.id, calificador.nombre AS calificador,opciones.id as opcion_id,opciones.nombre FROM empresa
		// 	INNER JOIN verificacion_2 ON verificacion_2.empresa_id = empresa.id
		// 	INNER JOIN calificador ON  calificador.id = verificacion_2.calificador_id
		// 	INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
		// 	WHERE opciones.codigo LIKE '%VIABILIDAD_ECONOMICA1%'";
		// $r1 = mysqli_query($conn,$s1);
		// while ($rw1=mysqli_fetch_assoc($r1)) {
		// 	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$fila,$rw1['calificador']);
		// }

	 	$fila++;
	 }
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A7:Z".$fila);

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="informe_general.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');



?>