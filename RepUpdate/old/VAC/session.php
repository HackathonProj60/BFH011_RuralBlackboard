<?php 
if(isset($_POST["login"]))
{	

	require "config.php";
	$usrname = $_POST["usrname"];
	$_SESSION['regno1'] = $usrname;
	$password = $_POST["password"];
	$query = mysqli_query($con,"select Pass from stud_sec where Username='$usrname'");
	if($query && (mysqli_num_rows($query)>0))
	{
		$pass1 = mysqli_fetch_array($query);
		$pass = $pass1['pass'];
		if(password_verify($password, $pass))
		{
			session_name('student');
			session_start(['cookie_lifetime' => 14400]);
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
				session_name('staff');
				session_start(['cookie_lifetime' => 3600]);
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
					session_name('admin');
					session_start(['cookie_lifetime' => 1800]);
					echo "<script type='text/javascript'>window.location.assign('adminhome.php')</script>";
				}else{
					echo "<script type='text/javascript'>alert('login failed')</script>";
					echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
				} 
			}
		}
	}
}

?>