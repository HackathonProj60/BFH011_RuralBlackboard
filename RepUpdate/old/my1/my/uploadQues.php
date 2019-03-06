<?php
$lim=$_POST['limit'];
$sus=0;
$conn = mysqli_connect("localhost","root","","e-portal");
if (!$conn) {
	echo mysqli_errror($con);
	exit;
}
$course_code=$_POST['cour'];
$week=$_POST['week'];
$part=$_POST['part'];
$whole = array();
$stmt = $conn->prepare("INSERT INTO quiz_question (course_code,question,option1,option2,option3,option4,answer,week,part)VALUES(?,?,?,?,?,?,?,?,?)");
for ($i=0; $i <= $lim; $i++) {
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
			$stmt->bind_param("ssssssiii",$course_code,$whole[$i][0],$whole[$i][1],$whole[$i][2],$whole[$i][3],$whole[$i][4],$whole[$i][5],$week,$part);
			$stmt->execute();
			$sus++;
		}
	}
}
if ($sus==$lim+1) {
	$message="Record created successfully";
}
elseif ($sus>0&&$sus<$lim+1) {
	$message="Few Records created";
}else{
	$message="Values Are Missing!!";
}
header("refresh: 1; url=question.php");
echo "<script type='text/javascript'>alert('".$message."');</script>";
$stmt->close();
$conn->close();
?>