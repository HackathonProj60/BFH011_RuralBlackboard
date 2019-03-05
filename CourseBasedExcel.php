<?php
function updateExcel(){
	require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
	require 'config.php';
	$course_code=$_GET['course'];
//create PHPExcel object
	$excel= new PHPExcel();
//selecting active sheet
	$excel->setActiveSheetIndex(0);
//populate the data
	$query1=mysqli_query($con,"select * from courses,student,enroll where enroll.course_code=courses.course_code and courses.course_code='$course_code' and enroll.course_code='$course_code' and enroll.reg_no=student.reg_no order by enroll.reg_no");
	$row=4;
	while($data1 = mysqli_fetch_object($query1)){
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data1->reg_no)
		->setCellValue('B'.$row,$data1->stud_name)
		->setCellValue('C'.$row,$data1->dept_id);
		$course_name=$data1->course_name;
		//increament
		$row++;
	}
//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','Registration for '.$course_name)
	->setCellValue('A3','Register number')
	->setCellValue('B3','Student Name')
	->setCellValue('C3','Department');
//merging the title
	$excel->getActiveSheet()->mergeCells('A1:C1');
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
	$excel->getActiveSheet()->getStyle('A3:C3')->applyFromArray(
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
	$excel->getActiveSheet()->getStyle('A4:C'.($row-1))->applyFromArray(
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