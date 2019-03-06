<?php
$result=0;
$lim=$_POST['max'];
$con = mysqli_connect("localhost","root","","e-portal");
if (!$con) {
	echo mysqli_errror($con);
	exit;
}
$res = array();
for ($i=0; $i <$lim; $i++) { 
	$que='quesid';
	$que.=$i;
	$ques=$_POST[$que];
	$res[$i][0]=$ques;
}
for ($i=0; $i <$lim ; $i++) { 
	$opt='option'.$i;
	$opti=$_POST[$opt];
	$res[$i][1]=$opti;
}
for($i=0; $i < $lim; $i++) { 
	$resi=$res[$i][0];
	$query= mysqli_query($con,"select quiz_question.answer FROM course,quiz_question WHERE course.course_code=quiz_question.course_code AND quiz_question.question_id='".$res[$i][0]."';");
	$data = mysqli_fetch_array($query);
	if ($data['answer']==$res[$i][1]) {
		$result+=1;
	}
}
echo $result;
header("refresh: 3; url=view_content.php");
?>
