<?php
$con = mysql_connect("localhost","root","");
if (!$con) {
	die('Could not connect: '.mysql_errno());
}
mysql_select_db('e-portal',$con);
?>