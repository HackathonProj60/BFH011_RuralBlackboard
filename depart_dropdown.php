<?php
include('config.php');

$sql=mysqli_query($con,"select * from department");
if (mysqli_num_rows($sql)) {
	$data = array();
	while ($row=mysqli_fetch_array($sql)) {
		$data[]=array(
			'id'=>$row['dept_id'],
			'name'=>$row['dept_name']
		);
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>