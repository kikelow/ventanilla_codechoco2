<?php
	require_once ('../../PHPExcel-1.8/Classes/PHPExcel.php');
	 require_once('../../conexion.php');

	 $empresa = $_GET['empresa'] ;
	 $razon_social = "NO APLICA";

	  
	 		$fila = 4;
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
	 $objPHPExcel = new PHPExcel();
	 $objPHPExcel->getActiveSheet()->setTitle('Plan de mejora');
	 $objPHPExcel->getProperties()
	 ->setCreator('Ventanilla de emprendimientos verdes')
	 ->setDescription('pla de mejora');
	 $objPHPExcel->setActiveSheetIndex(0);

	 $s = "SELECT empresa.razon_social,verificacion_1.opciones_id,plan_mejora.acciones,plan_mejora.actor,plan_mejora.resultado,plan_mejora.observacion,plan_mejora.1,plan_mejora.2,plan_mejora.3,plan_mejora.4,plan_mejora.5,plan_mejora.6,plan_mejora.7,plan_mejora.8,plan_mejora.9,plan_mejora.10,plan_mejora.11,plan_mejora.12,opciones.nombre,opciones.No FROM verificacion_1	
			INNER JOIN plan_mejora ON plan_mejora.opciones_id = verificacion_1.opciones_id
            INNER JOIN empresa ON empresa.id = plan_mejora.empresa_id
			INNER JOIN opciones ON opciones.id = verificacion_1.opciones_id
			WHERE verificacion_1.si_no_noaplica_id = '1' AND verificacion_1.empresa_id = '$empresa' AND plan_mejora.empresa_id = '$empresa'";
		$r = mysqli_query($conn,$s);
		if (mysqli_num_rows($r)>0) {
				 $objPHPExcel->getActiveSheet()->getStyle('A1:AC3')->getAlignment()->setWrapText(true);
	 $objPHPExcel->getActiveSheet()->getStyle('A1:AC3')->applyFromArray($estiloTituloColumnas);

	 // $objPHPExcel->getActiveSheet()->getStyle('A1','AC1')->getAlignment()->setWrapText(true);
	 date_default_timezone_set('America/Bogota');
		$fecha_descarga = date("Y-m-d H:i:s");

	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Fecha: '.$fecha_descarga);
	 $objPHPExcel->getActiveSheet()->mergeCells('A1:B1');
	 	
	 $objPHPExcel->getActiveSheet()->setCellValue('C1', 'NIVEL 0');
	 $objPHPExcel->getActiveSheet()->mergeCells('C1:AC1');
	 $objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(30);

	 $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Nº');
	$objPHPExcel->getActiveSheet()->mergeCells('A2:A3');

	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Aspectos');
	$objPHPExcel->getActiveSheet()->mergeCells('B2:B3');

	$objPHPExcel->getActiveSheet()->setCellValue('C2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('C2:J3');
	$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(50);

	$objPHPExcel->getActiveSheet()->setCellValue('K2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('K2:L3');

	$objPHPExcel->getActiveSheet()->setCellValue('M2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('M2:N3');

	$objPHPExcel->getActiveSheet()->setCellValue('O2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('O2:Z2');

	$objPHPExcel->getActiveSheet()->setCellValue('AA2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('AA2:AC3');


	// Titulos de las columnas de la celda
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('A2','Nº');

	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
	 $objPHPExcel->getActiveSheet()->SetCellValue('B2','Aspectos');

	 	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('C2','Acciones correctivas por indicador (Son todas aquellas actividades para alcanzar un mejoramiento continuo con el fin de lograr el cumplimiento de los criterios de los negocios verdes). Estas acciones deben estar de acurdo a los medios de verificación de cada uno de los criterios');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('K2','Actor que podría participar en la actividad');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('M2','Resultado esperado');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('O2','Cronograma(Meses). Maracar con x');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('O3','1');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('P3','2');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Q3','3');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('R3','4');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('S3','5');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('T3','6');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('U3','7');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('V3','8');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('W3','9');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('X3','10');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Y3','11');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Z3','12');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('AA2','Observaciones');

	 while ($rw = mysqli_fetch_assoc($r)) {
	 	$razon_social = $rw['razon_social'];
	 	$objPHPExcel->getActiveSheet()->getStyle('A'.$fila.':AC'.$fila)->getAlignment()->setWrapText(true);
	 	$objPHPExcel->getActiveSheet()->getRowDimension($fila)->setRowHeight(70);
	 	$objPHPExcel->getActiveSheet()->mergeCells('C'.$fila.':J'.$fila);
	 	$objPHPExcel->getActiveSheet()->mergeCells('K'.$fila.':L'.$fila);
	 	$objPHPExcel->getActiveSheet()->mergeCells('M'.$fila.':N'.$fila);
	 	$objPHPExcel->getActiveSheet()->mergeCells('AA'.$fila.':AC'.$fila);

	 	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$fila,$rw['No']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$fila,$rw['nombre']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$fila,$rw['acciones']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$fila,$rw['actor']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$fila,$rw['resultado']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$fila,$rw['1']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$fila,$rw['2']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$fila,$rw['3']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$fila,$rw['4']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$fila,$rw['5']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$fila,$rw['6']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$fila,$rw['7']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$fila,$rw['8']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('W'.$fila,$rw['9']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('X'.$fila,$rw['10']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$fila,$rw['11']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$fila,$rw['12']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$fila,$rw['observacion']);

	 	$fila++;
	 }
}

//---------------------------------------- Nivel 1 ------------------------------------------------
$s = "SELECT empresa.razon_social,verificacion_2.opciones_id,plan_mejora.acciones,plan_mejora.actor,plan_mejora.resultado,plan_mejora.observacion,plan_mejora.1,plan_mejora.2,plan_mejora.3,plan_mejora.4,plan_mejora.5,plan_mejora.6,plan_mejora.7,plan_mejora.8,plan_mejora.9,plan_mejora.10,plan_mejora.11,plan_mejora.12,opciones.nombre,opciones.No FROM verificacion_2	
			INNER JOIN plan_mejora ON plan_mejora.opciones_id = verificacion_2.opciones_id
            INNER JOIN empresa ON empresa.id = plan_mejora.empresa_id
			INNER JOIN opciones ON opciones.id = verificacion_2.opciones_id
			WHERE verificacion_2.calificador_id != '3' AND verificacion_2.calificador_id != '4' AND verificacion_2.empresa_id = '$empresa' AND plan_mejora.empresa_id = '$empresa'";
		$r = mysqli_query($conn,$s);
		if (mysqli_num_rows($r)>0) {
			$fila_cabeza = $fila+2;
$fila_titulo = $fila+1;
$fila_item = $fila+3;
$objPHPExcel->getActiveSheet()->getStyle('A'.$fila.':AC'.$fila_cabeza)->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->getStyle('A'.$fila.':AC'.$fila_cabeza)->applyFromArray($estiloTituloColumnas);
date_default_timezone_set('America/Bogota');
		$fecha_descarga = date("Y-m-d H:i:s");

	$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, 'Fecha: '.$fecha_descarga);
	 $objPHPExcel->getActiveSheet()->mergeCells('A'.$fila.':B'.$fila);

$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, 'NIVEL 1');
$objPHPExcel->getActiveSheet()->mergeCells('C'.$fila.':AC'.$fila);
$objPHPExcel->getActiveSheet()->getRowDimension($fila)->setRowHeight(30);
$objPHPExcel->getActiveSheet()->getRowDimension($fila_titulo)->setRowHeight(50);

 $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila_titulo, 'Nº');
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$fila_titulo.':A'.$fila_cabeza);

	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
	$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila_titulo, 'Aspectos');
	$objPHPExcel->getActiveSheet()->mergeCells('B'.$fila_titulo.':B'.$fila_cabeza);

	$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila_titulo, 'Acciones correctivas por indicador (Son todas aquellas actividades para alcanzar un mejoramiento continuo con el fin de lograr el cumplimiento de los criterios de los negocios verdes). Estas acciones deben estar de acurdo a los medios de verificación de cada uno de los criterios');
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$fila_titulo.':J'.$fila_cabeza);
	$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(50);

	$objPHPExcel->getActiveSheet()->setCellValue('K'.$fila_titulo, 'Actor que podría participar en la actividad');
	$objPHPExcel->getActiveSheet()->mergeCells('K'.$fila_titulo.':L'.$fila_cabeza);

	$objPHPExcel->getActiveSheet()->setCellValue('M'.$fila_titulo, 'Resultado esperado');
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$fila_titulo.':N'.$fila_cabeza);

	$objPHPExcel->getActiveSheet()->setCellValue('O'.$fila_titulo, 'Cronograma(Meses). Maracar con x');
	$objPHPExcel->getActiveSheet()->mergeCells('O'.$fila_titulo.':Z'.$fila_titulo);

	// $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('O'.$fila_cabeza,'1');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('P'.$fila_cabeza,'2');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$fila_cabeza,'3');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('R'.$fila_cabeza,'4');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('S'.$fila_cabeza,'5');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('T'.$fila_cabeza,'6');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('U'.$fila_cabeza,'7');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('V'.$fila_cabeza,'8');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('W'.$fila_cabeza,'9');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('X'.$fila_cabeza,'10');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Y'.$fila_cabeza,'11');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Z'.$fila_cabeza,'12');

	$objPHPExcel->getActiveSheet()->setCellValue('AA'.$fila_titulo, 'Observaciones');
	$objPHPExcel->getActiveSheet()->mergeCells('AA'.$fila_titulo.':AC'.$fila_cabeza);

	 while ($rw = mysqli_fetch_assoc($r)) {
	 	$razon_social = $rw['razon_social'];
	 	$objPHPExcel->getActiveSheet()->getStyle('A'.$fila_item.':AC'.$fila_item)->getAlignment()->setWrapText(true);
	 	$objPHPExcel->getActiveSheet()->getRowDimension($fila_item)->setRowHeight(70);
	 	$objPHPExcel->getActiveSheet()->mergeCells('C'.$fila_item.':J'.$fila_item);
	 	$objPHPExcel->getActiveSheet()->mergeCells('K'.$fila_item.':L'.$fila_item);
	 	$objPHPExcel->getActiveSheet()->mergeCells('M'.$fila_item.':N'.$fila_item);
	 	$objPHPExcel->getActiveSheet()->mergeCells('AA'.$fila_item.':AC'.$fila_item);

	 	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$fila_item,$rw['No']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$fila_item,$rw['nombre']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$fila_item,$rw['acciones']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$fila_item,$rw['actor']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$fila_item,$rw['resultado']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$fila_item,$rw['1']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$fila_item,$rw['2']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$fila_item,$rw['3']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$fila_item,$rw['4']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$fila_item,$rw['5']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$fila_item,$rw['6']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$fila_item,$rw['7']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$fila_item,$rw['8']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('W'.$fila_item,$rw['9']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('X'.$fila_item,$rw['10']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$fila_item,$rw['11']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$fila_item,$rw['12']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$fila_item,$rw['observacion']);

	 	$fila_item++;
	 }

		}

	 header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="'.$razon_social.'.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');



 ?>