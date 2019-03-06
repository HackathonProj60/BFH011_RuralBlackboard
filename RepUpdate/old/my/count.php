<?php
$conn=mysqli_connect("localhost","root","","e-portal");
if (!$conn) {
	echo mysqli_error($conn);
	exit;
}
$qry = "SELECT COUNT(id) FROM courses;" ;
$sql=mysqli_query($conn,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($conn) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$course = $pcount['COUNT(id)'];
	}
$qry = "SELECT COUNT(id) FROM student;" ;
$sql=mysqli_query($conn,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($conn) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$student = $pcount['COUNT(id)'];
	}
$qry = "SELECT COUNT(id) FROM staff;" ;
$sql=mysqli_query($conn,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($conn) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$staff = $pcount['COUNT(id)'];
	}
?>