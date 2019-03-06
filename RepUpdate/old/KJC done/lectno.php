<?php
include ('config.php');
$sql=mysqli_query($con,"SELECT COUNT(id) as total FROM lecture where course_code='".$_GET['cou']."' and week='".$_GET['week']."'");
if (mysqli_num_rows($sql)) {
	$data = array();
	if($row=mysqli_fetch_array($sql)) {
		$data[0]=$row['total'];
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>