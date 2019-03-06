<?php
function updateExcel(){
	require_once '../PHPExcel.php';
//database connection 
	require "../../../config.php";
//create PHPExcel object
	$excel= new PHPExcel();
//selecting active sheet
	$excel->setActiveSheetIndex(0);
	$row=4;
//populate the data
	$query=mysqli_query($con,"select * from question order by course_code");
	while($data1 = mysqli_fetch_object($query)){
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data1->course_code)
		->setCellValue('B'.$row,$data1->ques)
		->setCellValue('C'.$row,$data1->opt1)
		->setCellValue('D'.$row,$data1->opt2)
		->setCellValue('E'.$row,$data1->opt3)
		->setCellValue('F'.$row,$data1->opt4)
		->setCellValue('G'.$row,$data1->ans);
		//increament
		$row++;
	}

//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','Registration for  ')
	->setCellValue('A3','Course Code')
	->setCellValue('B3','Question')
	->setCellValue('C3','Option 1')
	->setCellValue('D3','Option 2')
	->setCellValue('E3','Option 3')
	->setCellValue('F3','Option 4')
	->setCellValue('G3','Answer');
//merging the title
	$excel->getActiveSheet()->mergeCells('A1:G1');
//aligning
	$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
//styling
	$excel->getActiveSheet()->getStyle('A1')->applyFromArray(
		array(
			'font'=>array(
				'size'=>17,
			)
		)
	);
	$excel->getActiveSheet()->getStyle('A3:G3')->applyFromArray(
		array(
			'font'=>array(
				'bold'=>true
			),
			'borders'=>array(
				'allborders'=>array(
					'style'=>PHPExcel_Style_Border::BORDER_THIN
				)
			)
		)
	);
//give borders to data
	$excel->getActiveSheet()->getStyle('A4:G'.($row-1))->applyFromArray(
		array(
			'borders'=>array(
				'outline'=>array(
					'style'=>PHPExcel_Style_Border::BORDER_THIN
				),
				'vertical'=>array(
					'style'=>PHPExcel_Style_Border::BORDER_THIN
				)
			)
		)
	);
		//write the result to a file
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="Questions.xlsx"');
	header('Cache-Control: max-age=0');
//write the result to a file
	$file = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
	$file->save('php://output');
}
updateExcel();
?>