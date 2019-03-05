<?php
$result=0;
$lim=$_POST['max'];
$enroll_code = $_POST['enroll'];
$week=$_POST['week'];
$att = $_POST['att'];
require "config.php";
$res = array();
for ($i=0; $i <$lim; $i++) { 
	$que='quesid';
	$que.=$i;
	$ques=$_POST[$que];
	$res[$i][0]=$ques;
	$opt='option'.$i;
	$opti=$_POST[$opt];
	$res[$i][1]=$opti;
}
echo "<br>";
for($i=0; $i < $lim; $i++) { 
	$resi=$res[$i][0];
	$query= mysqli_query($con,"select ans FROM question WHERE id='$resi';");
	$data=mysqli_fetch_array($query);
	if ($data['ans']==$res[$i][1]) {
		$result+=1;
	}
}
$att = $att+1;
$query = mysqli_query($con,"UPDATE `result` SET `attempt`='$att',`score`='$result' WHERE `enroll_code`='$enroll_code' AND `week`='$week';");
if ($query){
	$query= mysqli_query($con,"UPDATE `enroll` SET `week`='$week' WHERE `enroll_code`='$enroll_code';");
	echo "<script>alert('you have scored $result for this week of your course'); </script>";
	echo "<script type='text/javascript'>window.location.assign('student.php')</script>";
}else{
	echo "<script>alert('Failed to load'); </script>";
}
?>