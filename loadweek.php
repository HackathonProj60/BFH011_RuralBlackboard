<?php
include ('config.php');
$cou=$_GET['cou'];
$sql=mysqli_query($con,"select week from courses where course_code='".$cou."'");
if (mysqli_num_rows($sql)) {
	$data = array();
	while ($row=mysqli_fetch_array($sql)) {
		$data[0]=$row['week'];
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>