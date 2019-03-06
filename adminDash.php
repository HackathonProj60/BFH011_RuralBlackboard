<?php
require 'config.php';

$date=date('Y-m-d');
$course = '1';
$total = 1;
$pass=1;
$fail=1;
$nototal=1;
$corN=array();
$stdC=array();


$qry=mysqli_query($con,"SELECT enroll.enroll_code as enroll_code,sum(result.score) as score,enroll.course_code as course_code from enroll,result,courses where enroll.enroll_code=result.enroll_code and courses.course_code=enroll.course_code and enroll.end_date < '$date' group by enroll.enroll_code");
while($row =mysqli_fetch_object($qry)){
	$enroll_code = $row->enroll_code;
	$score=$row->score;
	//Need to change
	$total=1;
	$course_code=$row->course_code;
	if($course!=$course_code){
		$course=$course_code;
		$qry1=mysqli_query($con,"SELECT COUNT(id) as total from question WHERE course_code='$course_code' GROUP by course_code");
		while($row1=mysqli_fetch_object($qry1)){
			$total=$row1->total;
		}
	}
	//need to change
	// if($total!=0){
	$percent=($score/$total)*100;
	// }else {
	// 	echo "Database Error";
	// }
	
	if ($percent>=40 and $percent<=100) {
		$pass++;
	}elseif ($percent<40 ) {
		$fail++;
	}
	$nototal++;
}
if ($nototal!=0 and ($pass!=0 or $fail!=0) ) {
	$perpass=($pass/$nototal)*100;
	$perfail=($fail/$nototal)*100;
	
}

$per=array();
$Cname=array();
$i=0;
$qry="SELECT enroll.course_code,COUNT(enroll.enroll_code) AS top,courses.course_name FROM enroll,courses,student WHERE enroll.course_code=courses.course_code AND student.reg_no=enroll.reg_no GROUP BY enroll.course_code ORDER BY top DESC LIMIT 3";
$sql=mysqli_query($con,$qry);
while ($row=mysqli_fetch_object($sql)) {
	$per[$i]= $row->top;
	$Cname[$i]= $row->course_name;
	$i++;
}

$qry="SELECT COUNT(id) AS tot FROM enroll";
$sql=mysqli_query($con,$qry);
while ($row=mysqli_fetch_object($sql)) {
	$total = $row->tot;
}
for ($i=0; $i < 3; $i++) { 
	$per[$i]=($per[$i]/$total)*100;
}

?>