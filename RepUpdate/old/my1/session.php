<?php
    
    session_start();
?>
<?php 
    if(isset($_POST["login"]))
    {	
		
		$con = mysqli_connect("localhost","root","","e-portal");
        $usrname = $_POST["usrname"];
		$_SESSION['regno1'] = $usrname;
        $password = $_POST["password"];
        $query = mysqli_query($con,"select * from login where Password='$password' and Username='$usrname'");
        if($query)
        {
			if(mysqli_num_rows($query)>0)
			{
				
			
			$query = mysqli_query($con,"select otp from student where regno='$usrname'");
            
            {
                
				while($row = mysqli_fetch_row($query))
				{
					$otp = $row[0];
				}
					if($otp != 0)
					{
						
						 echo "<script type='text/javascript'>window.location.assign('student.php')</script>";
					}
					else
					{
						  echo "<script type='text/javascript'>alert('login failed')</script>";
						  echo "<script type='text/javascript'>window.location.assign('homepage.php')</script>";
					}
				               
			}             
            }
            else
            {
				$query = mysqli_query($con,"select * from teacher where Password='$password' and Username='$usrname'");
				if(mysqli_num_rows($query)>0)
				{
                echo "<script type='text/javascript'>window.location.assign('teachermain.php')</script>";
				}
				else
				{
					
				echo "<script type='text/javascript'>alert('login failed')</script>";
				echo "<script type='text/javascript'>window.location.assign('homepage.php')</script>";
				}
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Unable to connect')</script>";
			echo "<script type='text/javascript'>window.location.assign('homepage.php')</script>";
		}
	}
	


?>