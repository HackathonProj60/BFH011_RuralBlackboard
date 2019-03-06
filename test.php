<?php
require 'config.php';
$coursesD = array();
$c = 0;
$date = date('y-m-d');
$qry="SELECT department.dept_name,courses.course_name FROM department,courses WHERE department.dept_id=courses.dept_id AND courses.start_date<='$date' AND courses.end_date>='$date' ORDER BY department.dept_name";
$sql=mysqli_query($con,$qry);
if ($sql) {
	while ($res = mysqli_fetch_object($sql)) {
		$coursesD[$c][0] = $res->dept_name;
		$coursesD[$c][1] = $res->course_name;
		switch ($coursesD[$c][0]) {
			case 'COMMERCE':
				$coursesD[$c][2]='com';
				break;
			case 'COMPUTER SCIENCE':
				$coursesD[$c][2]='cs';
				break;
			case 'PSYCHOLOGY':
				$coursesD[$c][2]='psy';
				break;
			case 'LIFE SCIENCE':
				$coursesD[$c][2]='ls';
				break;
			case 'MANAGEMENT':
				$coursesD[$c][2]='man';
				break;
			default:
				$coursesD[$c][2]='';
				break;
		}
		$c++;
	}
}
for ($i=0; $i < $c; $i++) { 
	
}
?>