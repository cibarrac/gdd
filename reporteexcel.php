
<?php

// Camino a los include

set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');
// PHPExcel
require_once 'assets/lib/PHPExcel/PHPExcel.php';
// PHPExcel_IOFactory
include 'assets/lib/PHPExcel/PHPExcel/IOFactory.php';
// Creamos un objeto PHPExcel
$objPHPExcel = new PHPExcel();
// Leemos un archivo Excel 2007
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load("report1.xls");
// Indicamos que se pare en la hoja uno del libro
$objPHPExcel->setActiveSheetIndex(0);
//Escribimos en la hoja en la celda B1
$objPHPExcel->getActiveSheet()->SetCellValue('B12', 'Pepe Navas Fierro');
// Color rojo al texto
$objPHPExcel->getActiveSheet()->getStyle('B2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);

//Guardamos el archivo en formato Excel 2007
//Si queremos trabajar con Excel 2003, basta cambiar el 'Excel2007' por 'Excel5' y el nombre del archivo de salida cambiar su formato por '.xls'
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save("report2.xls");

?> 
