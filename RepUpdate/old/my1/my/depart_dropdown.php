<?php
include('config.php');

$sql=mysql_query("select * from department");
if (mysql_num_rows($sql)) {
	$data = array();
	while ($row=mysql_fetch_array($sql)) {
		$data[]=array(
			'id'=>$row['dept_id'],
			'name'=>$row['dept_name']
		);
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>