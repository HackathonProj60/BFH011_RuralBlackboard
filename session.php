<?php 
if(isset($_POST["login"]))
{	

	require "config.php";
	$usrname = $_POST["usrname"];
	$password = $_POST["password"];
	$query = mysqli_query($con,"select pass from stud_sec where reg_no='$usrname'");
	if($query && (mysqli_num_rows($query)>0))
	{
		$pass1 = mysqli_fetch_array($query);
		$pass = $pass1['pass'];
		if(password_verify($password, $pass))
		{
			session_start();
			$_SESSION['regno'] = $usrname;
			echo "<script type='text/javascript'>window.location.assign('student.php')</script>";
		}else{
			echo "<script type='text/javascript'>alert('login failed')</script>";
			echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
		}             
	}
	else
	{
		$query = mysqli_query($con,"select pass from staff_sec where staff_id='$usrname'");
		if($query && (mysqli_num_rows($query)>0)){
			$pass1 = mysqli_fetch_array($query);
			$pass = $pass1['pass'];
			if(password_verify($password, $pass))
			{ 
				session_start();
				$_SESSION['staffid'] = $usrname;
				echo "<script type='text/javascript'>window.location.assign('teachermain.php')</script>";
			}else{
				echo "<script type='text/javascript'>alert('login failed')</script>";
				echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
			} 
		}
		else
		{
			$query = mysqli_query($con,"select pass from admin_sec where admin_id='$usrname'");
			if($query && (mysqli_num_rows($query)>0)){
				$pass1 = mysqli_fetch_array($query);
				$pass = $pass1['pass'];
				if(password_verify($password, $pass))
				{
					session_start();
					$_SESSION['adminid'] = $usrname;
					echo "<script type='text/javascript'>window.location.assign('adminhome.php')</script>";
				}else{
					echo "<script type='text/javascript'>alert('login failed')</script>";
					echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
				} 
			}else{
				echo "<script type='text/javascript'>alert('Username Not Found')</script>";
				echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
			}
		}
	}
}
exit();
?>