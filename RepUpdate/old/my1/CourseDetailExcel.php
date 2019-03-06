<?php
function updateExcel(){
	require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
//database connection 
	$con = mysqli_connect("localhost","root","","e-portal");
	if (!$con) {
		echo mysqli_errror($con);
		exit;
	}
//create PHPExcel object
	$excel= new PHPExcel();
//selecting active sheet
	$excel->setActiveSheetIndex(0);
//populate the data
	$query= mysqli_query($con,"select * from courses,department where courses.dept_id=department.dept_id");
	$row=4;
	while($data = mysqli_fetch_object($query)){
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data->course_code)
		->setCellValue('B'.$row,$data->course_name)
		->setCellValue('C'.$row,$data->start_date)
		->setCellValue('D'.$row,$data->end_date)
		->setCellValue('E'.$row,$data->week)
		->setCellValue('F'.$row,$data->dept_name);
	//increament
		$row++;
	}
//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','Courses Details')
	->setCellValue('A3','Course Code')
	->setCellValue('B3','Course Title')
	->setCellValue('C3','Starting date')
	->setCellValue('D3','Ending date')
	->setCellValue('E3','Number of week')
	->setCellValue('F3','Department Name')
//merging the title
	$excel->getActiveSheet()->mergeCells('A1:F1');
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
	$excel->getActiveSheet()->getStyle('A3:F3')->applyFromArray(
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
	$excel->getActiveSheet()->getStyle('A4:F'.($row-1))->applyFromArray(
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
	header('Content-Disposition: attachment; filename="Registered.xlsx"');
	header('Cache-Control: max-age=0');
//write the result to a file
	$file = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
	$file->save('php://output');
}
updateExcel();
?>