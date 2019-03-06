<?php
include ('config.php');

$sql=mysql_query("select * from course where dept_id='".$_GET["did"]."'");
if (mysql_num_rows($sql)) {
	$data = array();
	while ($row=mysql_fetch_array($sql)) {
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