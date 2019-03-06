<?php
include ('config.php');
$cou=$_GET['cou'];
$sql=mysql_query("select WEEK from course where course_code='".$cou."'");
if (mysql_num_rows($sql)) {
	$data = array();
	while ($row=mysql_fetch_array($sql)) {
		$data[0]=$row['WEEK'];
	}
	header('Content-type: application/json');
	echo json_encode($data);
}
?>