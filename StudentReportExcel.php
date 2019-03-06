<?php
function updateExcel(){
	require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
//database connection 
	require "config.php";
//create PHPExcel object
	$excel= new PHPExcel();
//selecting active sheet
	$excel->setActiveSheetIndex(0);
//populate the data
	$query= mysqli_query($con,"select DISTINCT(student.reg_no),student.stud_name,result.enroll_code,courses.course_name,department.dept_name FROM student,enroll,result,courses,department WHERE student.reg_no=enroll.reg_no and courses.course_code=enroll.course_code and department.dept_id=courses.dept_id and result.enroll_code=enroll.enroll_code ");
	$row=4;
	while($data = mysqli_fetch_object($query)){
		$query1= mysqli_query($con,"select sum(score) as total from result WHERE enroll_code='$data->enroll_code'");
		$data1=mysqli_fetch_object($query1);
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data->reg_no)
		->setCellValue('B'.$row,$data->stud_name)
		->setCellValue('C'.$row,$data->course_name)
		->setCellValue('D'.$row,$data1->total)
		->setCellValue('E'.$row,$data->dept_name);
		//increament
		$row++;
	}
//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','Student Report')
	->setCellValue('A3','Register number')
	->setCellValue('B3','Student Name')
	->setCellValue('C3','Course Title')
	->setCellValue('D3','Marks')
	->setCellValue('E3','Department Name');
//merging the title
	$excel->getActiveSheet()->mergeCells('A1:E1');
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
	$excel->getActiveSheet()->getStyle('A3:E3')->applyFromArray(
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
	$excel->getActiveSheet()->getStyle('A4:E'.($row-1))->applyFromArray(
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

// write the result to a file
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="Student Report.xlsx"');
	header('Cache-Control: max-age=0');
//write the result to a file
	$file = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
	$file->save('php://output');
}
updateExcel();
?>