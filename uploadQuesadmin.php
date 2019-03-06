<?php
$lim=$_POST['limit'];
$sus=0;
$fail=0;
require "config.php";
$course_code=$_POST['cour'];
$week=$_POST['week'];
$whole = array();
$stmt = $con->prepare("INSERT INTO question (course_code,ques,opt1,opt2,opt3,opt4,ans,week)VALUES(?,?,?,?,?,?,?,?)");
for ($i=1; $i <= $lim; $i++) {
	$ans='option'.$i;
	$que='question'.$i;
	if (isset($_POST[$ans])&&isset($_POST[$que])){
		$answer=$_POST[$ans];
		$question=$_POST[$que];
		$whole[$i][0]=$question;
		$whole[$i][5]=$answer;
		$ott=0;
		for ($j=1; $j <= 4 ; $j++) { 
			$opt='option'.$i.$j;
			if (isset($_POST[$opt])) {
				$option=$_POST[$opt];
				$whole[$i][$j]=$option;
				$ott++;
			}
		}
		if ($ott==4) {
			$stmt->bind_param("ssssssii",$course_code,$whole[$i][0],$whole[$i][1],$whole[$i][2],$whole[$i][3],$whole[$i][4],$whole[$i][5],$week);
			$stmt->execute();
			$sus++;
		}else{
			$fail++;
		}
	}else{
		$fail++;
	}
}
if ($sus>0) {
	$message="$sus Record created successfully!";
	echo "<script>alert('".$message."');</script>";
}
if ($fail>0) {
	$failmessage="$fail question failed to upload!";
	//echo "<script>alert('".$failmessage."');</script>";
}
header("refresh: 0; url=question.php");
$stmt->close();
$con->close();
?>