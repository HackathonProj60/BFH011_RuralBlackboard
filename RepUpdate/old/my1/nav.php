<?php
//include your database connection
$conn=mysqli_connect("localhost","root","","e-portal");
if (!$conn) {
	echo mysqli_error($conn);
	exit;
}
$dep=array();
$sql=mysqli_query($conn,"select * from department");
if (mysqli_num_rows($sql)>0) {
	$a=0;
	while ($rowd=mysqli_fetch_object($sql)) {
		$dep[$a]=$rowd->dept_id;
		$a++;
	}
}
$i=0;
$data=array();

while ($i<6) {
	if (isset($dep[$i])) {
		$sql=mysqli_query($conn,"select * from course,department where course.dept_id=department.dept_id and course.dept_id='".$dep[$i]."'");
		if (mysqli_num_rows($sql)>0) {
			$j=0;
			
			while ($row=mysqli_fetch_object($sql)) {
				
				$arr[$i][$j]=$row->course_name;
				$j++;
				
			}
		}
	}
	$i++;
}
?>