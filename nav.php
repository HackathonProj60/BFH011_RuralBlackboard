<?php
//include your database connection
require "config.php";
$deptname = array();
$deaname=array();
$deanid = array();
$dept = array();
$sql=mysqli_query($con,"select * from deanery");
if (mysqli_num_rows($sql)>0) {
	$count = mysqli_num_rows($sql);
	$a=0;
	
	while ($rowd=mysqli_fetch_object($sql)) {	
		$deaname[$a]=$rowd->dean_name;
		$deanid[$a] = $rowd->dean_id;
		$sql1 = mysqli_query($con, "select * from department where dean_id='$deanid[$a]'");
		if (mysqli_num_rows($sql1)>0)
		{
			
			$count1 = mysqli_num_rows($sql1);
			$b=0;
			while($rowd1=mysqli_fetch_object($sql1))
			{
				$deptname[$a][$b]=$rowd1->dept_name;
				$b++;
			}
		}
		$a++;
	}
}
?>