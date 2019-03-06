<?php
include ('config.php');
$sql=mysql_query("select * from lectures where course_code='".$_GET["code"]."' and week='".$_GET["week"]."' and lecture_number='".$_GET["lecture"]."'");
if (mysql_num_rows($sql)) {
	$data = array();
	while ($row=mysql_fetch_array($sql)) {
		$data[]=array(
			'id'=>$row['course_code'],
			'name'=>$row['path_lecture']
		);
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>