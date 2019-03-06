<?php
require 'config.php';
$i=0;
$qry="SELECT student.reg_no,student.phone,student.stud_name,student.email,student.img_path,department.dept_name,student.dept_id FROM student,department WHERE student.dept_id=department.dept_id";
$sql=mysqli_query($con,$qry);
while ($row=mysqli_fetch_object($sql)) {
	$reg[$i]= $row->reg_no;
	$phone[$i]=$row->phone;
	$name[$i]=$row->stud_name;
	$mail[$i]=$row->email;
	$img[$i]=$row->img_path;
	$Dname[$i]= $row->dept_name;
	$qry1=mysqli_query($con,"SELECT COUNT(id) as total from enroll WHERE reg_no='$reg[$i]' GROUP by reg_no");
	
		while($row1=mysqli_fetch_object($qry1)){
			$total[$i]=$row1->total;
			if($total[$i]==null)
			{
				$total[$i] = 0;
			}
		}
	$i++;
}
$studCount = $i;
?>