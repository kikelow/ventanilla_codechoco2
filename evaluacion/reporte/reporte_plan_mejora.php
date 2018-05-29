<?php
	require_once ('../../PHPExcel-1.8/Classes/PHPExcel.php');
	 require_once('../../conexion.php');

	 $empresa = $_GET['empresa'] ;
	 $razon_social = "";
	 $s = "SELECT  empresa.razon_social,plan_mejora.acciones,plan_mejora.actor,plan_mejora.resultado,plan_mejora.1,plan_mejora.2,plan_mejora.3,plan_mejora.4,plan_mejora.5,plan_mejora.6,plan_mejora.7,plan_mejora.8,plan_mejora.9,plan_mejora.10,plan_mejora.11,plan_mejora.12,plan_mejora.observacion,opciones.nombre FROM `plan_mejora`
		INNER JOIN opciones ON opciones.id = plan_mejora.opciones_id
		INNER JOIN empresa ON empresa.id = plan_mejora.empresa_id
		WHERE plan_mejora.empresa_id = '$empresa'";
		$r = mysqli_query($conn,$s);

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
	 $objPHPExcel->getActiveSheet()->getStyle('A2:AB3')->getAlignment()->setWrapText(true);
	 $objPHPExcel->getActiveSheet()->getStyle('A2:AB3')->applyFromArray($estiloTituloColumnas);
	

	 $objPHPExcel->getProperties()
	 ->setCreator('Ventanilla de emprendimientos verdes')
	 ->setDescription('pla de mejora');

	 $objPHPExcel->setActiveSheetIndex(0);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'Aspectos');
	$objPHPExcel->getActiveSheet()->mergeCells('A2:A3');

	$objPHPExcel->getActiveSheet()->setCellValue('B2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('B2:I3');
	$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(50);

	$objPHPExcel->getActiveSheet()->setCellValue('J2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('J2:K3');

	$objPHPExcel->getActiveSheet()->setCellValue('L2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('L2:M3');

	$objPHPExcel->getActiveSheet()->setCellValue('N2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('N2:Y2');

	$objPHPExcel->getActiveSheet()->setCellValue('Z2', '');
	$objPHPExcel->getActiveSheet()->mergeCells('Z2:AB3');


	// Titulos de las columnas de la celda
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(40);
	 $objPHPExcel->getActiveSheet()->SetCellValue('A2','Aspectos');

	 	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
	 $objPHPExcel->getActiveSheet()->SetCellValue('B2','Acciones correctivas por indicador (Son todas aquellas actividades para alcanzar un mejoramiento continuo con el fin de lograr el cumplimiento de los criterios de los negocios verdes). Estas acciones deben estar de acurdo a los medios de verificación de cada uno de los criterios');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('J2','Actor que podría participar en la actividad');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('L2','Resultado esperado');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('N2','Cronograma(Meses). Maracar con x');

	 $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('N3','1');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('O3','2');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('P3','3');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Q3','4');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('R3','5');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('S3','6');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('T3','7');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('U3','8');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('V3','9');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('W3','10');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('X3','11');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Y3','12');

	  $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(10);
	 $objPHPExcel->getActiveSheet()->SetCellValue('Z2','Observaciones');

	 while ($rw = mysqli_fetch_assoc($r)) {
	 	$razon_social = $rw['razon_social'];
	 	$objPHPExcel->getActiveSheet()->getStyle('A'.$fila.':AB'.$fila)->getAlignment()->setWrapText(true);
	 	$objPHPExcel->getActiveSheet()->getRowDimension($fila)->setRowHeight(70);
	 	$objPHPExcel->getActiveSheet()->mergeCells('B'.$fila.':I'.$fila);
	 	$objPHPExcel->getActiveSheet()->mergeCells('J'.$fila.':K'.$fila);
	 	$objPHPExcel->getActiveSheet()->mergeCells('L'.$fila.':M'.$fila);
	 	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$fila.':AB'.$fila);

	 	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$fila,$rw['nombre']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$fila,$rw['acciones']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$fila,$rw['actor']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$fila,$rw['resultado']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$fila,$rw['1']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$fila,$rw['2']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$fila,$rw['3']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$fila,$rw['4']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$fila,$rw['5']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$fila,$rw['6']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$fila,$rw['7']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$fila,$rw['8']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$fila,$rw['9']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('W'.$fila,$rw['10']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('X'.$fila,$rw['11']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$fila,$rw['12']);
	 	$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$fila,$rw['observacion']);

	 	$fila++;
	 }



	 header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="'.$razon_social.'.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');



 ?>