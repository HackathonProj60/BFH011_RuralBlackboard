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
	$query= mysqli_query($con,"select * from student,enrollment where student.regno=enrollment.regno order by enrollment.Coursename");
	$row=4;
	while($data = mysqli_fetch_object($query)){
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data->Cid)
		->setCellValue('B'.$row,$data->regno)
		->setCellValue('C'.$row,$data->name)
		->setCellValue('D'.$row,$data->Cdept_id);
	//increament
		$row++;
	}
//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','Total Registration')
	->setCellValue('A3','Course Code')
	->setCellValue('B3','Register number')
	->setCellValue('C3','Student Name')
	->setCellValue('D3','Department id');
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
//redirect to browser (download) insteand of saving the result as a file
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="Registered.xlsx"');
	header('Cache-Control: max-age=0');
//write the result to a file
	$file = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
	$file->save('php://output');
}
updateExcel();
?>