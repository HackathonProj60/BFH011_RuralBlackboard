<?php

session_start();
?>

<!DOCTYPE html>
    <head>
        <title>OTP Verification</title>
		<style>
			body{
				font-family: calibri;
			}
			.tblLogin {
				border: #95bee6 1px solid;
				background: #d1e8ff;
				border-radius: 4px;
				max-width: 300px;
				padding:20px 30px 30px;
				text-align:center;
				margin: 0;
    			position: absolute;
    			top: 50%;
				left: 50%;
				margin-right: -50%;
				transform: translate(-50%, -50%)
			}
			.tableheader { font-size: 20px; }
			.tablerow { padding:20px; }
			.error_message {
				color: #b12d2d;
				background: #ffb5b5;
				border: #c76969 1px solid;
			}
			.message {
				width: 100%;
				max-width: 300px;
				padding: 10px 30px;
				border-radius: 4px;
				margin-bottom: 5px;    
			}
			.login-input {
				border: #CCC 1px solid;
				padding: 10px 20px;
				border-radius:4px;
			}
			.btnSubmit {
				padding: 10px 20px;
				background: #2c7ac5;
				border: #d1e8ff 1px solid;
				color: #FFF;
				border-radius:4px;
			}
		</style>
    </head>
    <body>
	<?php $phone = $_SESSION['phone'];
		  $regno = $_SESSION['regno'];
	?>
        <form method = "post"><center>
		<div class="tblLogin"> 
            <div class="tableheader">
			Mobile number</div>
			<div class="tablerow"><input type="text" class="login-input" style="text-align:center" name="number" value = "<?php echo $phone ?>" disabled><br></div>
            <button class="btnSubmit" type="submit" name="submit">Send OTP</button><br>
            <div class="tableheader"><br>Enter otp:</div>
			<div class="tablerow"><input type="text" name="uotp" class="login-input"><br></div>
            <div class="tableheader"><button class="btnSubmit" type="submit" name="verify">Verify OTP</button>
			<button class="btnSubmit" type="submit" name="incorrectph">Incorrect number</button></div>
		</div></center>
        </form>
    </body>
</html>

<?php
	if(isset($_POST['incorrectph']))
	{
		$phone = $_SESSION['phone'];
		  $regno = $_SESSION['regno'];
		$connection = mysqli_connect("localhost","root","");
		 $db = mysqli_select_db($connection,'e-portal');
			$query =  mysqli_query($connection,"Delete from student where regno = '$regno'");
			 $query1 = mysqli_query($connection,"Delete from login where regno = '$regno'");
			 session_unset();
			 echo "<script> window.location.assign('register.php')</script>";
			 
	}
    if(isset($_POST["submit"]))
    {
        $number = $_POST["number"];
        
	// Authorisation details.
	$username = "skojha32@gmail.com";
	$hash = "ecc818002b525e8ccf7f5daa0c0fb5197e201a71811b64f2d198ec06bb238759";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = "$number"; // A single number or a comma-seperated list of numbers
    $otp = rand(10000, 99999);
    $message = "Your otp is ". $otp;
    setcookie("otp1", $otp);
    
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    }

     //to verify the otp
     if(isset($_POST["verify"]))
		
     {
			$phone = $_SESSION['phone'];
			$regno = $_SESSION['regno'];
			$connection = mysqli_connect("localhost","root","");
		 $db = mysqli_select_db($connection,'e-portal');
		 
         $uotp = $_POST["uotp"];
         if($_COOKIE["otp1"] == $uotp)
         {
            
			$query = mysqli_query($connection,"Update student set otp = '1' where regno = '$regno'");
			if($query)
			{	
				echo "<script type='text/javascript'>alert('Registration Successful')</script>";
				session_unset();
				echo "<script> window.location.assign('register.php')</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Oops, Error Occured. Couldn't verify otp')</script>";
				echo "<script> window.location.assign('otp.php')</script>";
			}
		}
         else
         {
             echo "incorrect otp";
			 $query =  mysqli_query($connection,"Delete from student where regno = '$regno'");
			 $query1 = mysqli_query($connection,"Delete from login where regno = '$regno'");
			 session_unset();
			 echo "<script> window.location.assign('register.php')</script>";
         }
     }
?>
