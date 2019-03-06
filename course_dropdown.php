<?php
include ('config.php');

$sql=mysqli_query($con,"select * from courses where dept_id='".$_GET["did"]."'");
if (mysqli_num_rows($sql)) {
	$data = array();
	while ($row=mysqli_fetch_array($sql)) {
		$data[]=array(
			'id'=>$row['course_code'],
			'did'=>$row['dept_id'],
			'name'=>$row['course_name']
		);
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>