<?php
require 'config.php';
$qry = "SELECT COUNT(id) FROM courses;" ;
$sql=mysqli_query($con,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($con) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$courseNo = $pcount['COUNT(id)'];
	}
$qry = "SELECT COUNT(id) FROM student;" ;
$sql=mysqli_query($con,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($con) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$student = $pcount['COUNT(id)'];
	}
$qry = "SELECT COUNT(id) FROM staff;" ;
$sql=mysqli_query($con,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($con) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$staff = $pcount['COUNT(id)'];
	}
	
	$qry = "SELECT COUNT(id) FROM lecture;" ;
	$sql=mysqli_query($con,$qry);
if (!$sql){
		echo "ERROR: " . mysqli_error($con) ;
	} else {
		$pcount = mysqli_fetch_array($sql) ;
		$lect = $pcount['COUNT(id)'];
	}
?>