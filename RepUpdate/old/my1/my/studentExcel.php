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
	$query= mysqli_query($con,"select * from student");
	$row=4;
	while($data = mysqli_fetch_object($query)){
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data->regno)
		->setCellValue('B'.$row,$data->name)
		->setCellValue('C'.$row,$data->dept)
		->setCellValue('D'.$row,$data->courses);
	//increament
		$row++;
	}
//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','List of Enrollment')
	->setCellValue('A3','Register number')
	->setCellValue('B3','Name')
	->setCellValue('C3','Deaprtment')
	->setCellValue('D3','Courses');
//merging the title
	$excel->getActiveSheet()->mergeCells('A1:D1');
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
	$excel->getActiveSheet()->getStyle('A3:D3')->applyFromArray(
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
	$excel->getActiveSheet()->getStyle('A4:D'.($row-1))->applyFromArray(
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
	$file = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
	$file->save('Registered.xlsx');
}
?>