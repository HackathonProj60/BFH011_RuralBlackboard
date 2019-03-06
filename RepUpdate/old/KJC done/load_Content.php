<?php
require ('config.php');
$sql=mysqli_query($con,"select * from lecture where course_code='".$_GET["cou"]."' and week='".$_GET["week"]."'");
if (mysqli_num_rows($sql)) {
	$data = array();
	while ($row=mysqli_fetch_array($sql)) {
		$data[]=array(
			'id'=>$row['course_code'],
			'name'=>$row['path']
		);
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>