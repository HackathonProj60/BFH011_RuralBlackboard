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
	$query= mysqli_query($con,"select * from course");
	$row=3;
	while($data = mysqli_fetch_object($query)){
		$excel->getActiveSheet()
		->setCellValue('A'.$row,'Course Title')
		->setCellValue('C'.$row,'Course Code');
		$row++;
		$excel->getActiveSheet()
		->setCellValue('A'.$row,$data->course_name)
		->setCellValue('C'.$row,$data->course_code)
		->mergeCells('A'.$row.':B'.$row)
		->getStyle('A'.$row.':C'.$row)->applyFromArray(
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
		$row++;
		$st=$row;
		$query1=mysqli_query($con,"select * from student,enrollment where enrollment.course_code='".$data->course_code."' and enrollment.reg_no=student.reg_no order by reg_no");
		$excel->getActiveSheet()
		->setCellValue('A'.$row,'Register number')
		->setCellValue('B'.$row,'Student Name')
		->setCellValue('C'.$row,'Department');
		$row++;
		while($data1 = mysqli_fetch_object($query1)){
			$excel->getActiveSheet()
			->setCellValue('A'.$row,$data1->reg_no)
			->setCellValue('B'.$row,$data1->stud_name)
			->setCellValue('C'.$row,$data1->dept_id);	
			//increament
			$row++;
		}
		//give borders to data
		$excel->getActiveSheet()->getStyle('A'.$st.':C'.($row-1))->applyFromArray(
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
	}
//set column width
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
//make table header
	$excel->getActiveSheet()
	->setCellValue('A1','Total Registration')
	->mergeCells('A1:C1');
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