<?php
require "adminSec.php";
if ($sus == 1) {
    require "config.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Portal - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="StudStyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="StudStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="StudStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="StudStyle/css/sb-admin.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
#displaythis
{
	display:none;
	margin-top:-40px;
}
</style>



</script>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function() {

$('#check1').on('change', function() {
	
   $('#check1').val(this.checked ? '1' : '0');
   
	
});

$('#check2').on('change', function() {
	
   $('#check2').val(this.checked ? '1' : '0');
   
	
});


$('#check3').on('change', function() {
	
   $('#check3').val(this.checked ? '1' : '0');
   
	
});

    $('#showthat').click(function() {
      $('#displaythis').toggle("slide");
    });

	
});
</script>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

   
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Profile</a>
       
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="adminN.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
     
     
<li class="nav-item">
 <a class="nav-link" id = "showthat">
  <i class="fas fa-fw fa-bars"></i>
  <span>Services</span>
  </li>
                                      
                                        <ul id = "displaythis">
                                            <li>
                                                <a href="addteacher.php"  style="color:white;">Add Teachers</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="addcourseadmin.php">Add New Course</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="delcourse.php">Manage Course</a>
                                            </li>
                                           
                                            <li>
                                                <a style="color:white;" href="adddept.php">Add Department</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="deldept.php">Remove Department</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="delete.php">Delete Users</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="updateadmin.php">Update Password</a>
                                            </li>
                                        </ul>
                                   
</a>
</li>

<li class="nav-item">
 <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
  <i class="fas fa-fw fa-angle-right"></i>
  <span>Logout</span>
</a>
</li>
<br>
<br>
<br>
<br>
<br>

<li>
  <div>
    
  </div>
</li>
</ul>
  <div id="content-wrapper">
	<center><h3>ADD TEACHER</h3></center><br><br><br><br>
  <div class="container-fluid">
   <div class="row">
        <div class="col-xl-6 col-sm-6 mb-6">
                                               <form method = "POST">
                                                           
                                                           <?php
								

									$sql = "SELECT * FROM department";
									$result = mysqli_query($con,$sql);

										echo "<select name='dept' class='country_to_state form-control'><option selected disabled>DEPARTMENT</option>";
										while ($row = mysqli_fetch_array($result)) {
											echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
										}
										echo "</select>";
									?>
									
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <input type="text" class="form-control" value="" placeholder="Teacher's Name" name="tchrname" >
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <input type="text" class="form-control" value="" placeholder="Email" name="usrname" >
                                            </div>
                                            <div class="form-group col-sm-6">
                                                    <input type="password" class="form-control" value="" placeholder="password " name="temppwd" >
                                            </div>
											<div class="form-group col-sm-12" style="color:black;">
                                                   <span style="text-decoration:bold;color:black;"> PRIVELEGES:</span><br>
													<input type="checkbox"  name="priv1" id="check1"> Add Course<br>
													<input type="checkbox"  name="priv2" id="check2"> Add Notes/Quiz<br>
													<input type="checkbox"  name="priv3" id="check3"> View reports<br>
													<p id = "show"></p>
													
                                            </div>
											<br>
                                                    
                                            
                                                <div >
                                                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="send" class="theme_button color2" value="1">Send Mail!</button>
														 &nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" name="calc_shipping" class="theme_button color2 ">clear</button>
            
											</div>
                                        </div>
                                    </div>
									</form>
                                </div>
    
                            </div>
                            </section>

                           

                        </div>
                        <!-- eof #box_wrapper -->
                    </div>
                    <!-- eof #canvas -->
                
                   
                </body>
                
                
                <!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
                </html>
				
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['send']))
{
	$priv1 = 0;
	$priv2 = 0;
	$priv3 = 0;
	if(isset($_POST['priv1']))
	{
	$priv1 = $_POST['priv1'];
	}
	if(isset($_POST['priv2']))
	{
	$priv2 = $_POST['priv2'];
	}
	if(isset($_POST['priv3']))
	{
	$priv3 = $_POST['priv3'];
	}
	$priv = $priv1.$priv2.$priv3;
	$dptname = $_POST['dept'];
	$name = $_POST['tchrname'];
    $to_id = $_POST['usrname'];
    $subject = $_POST['temppwd'];
    $message = "USERNAME:" .$to_id. "<br> Password:" . $subject;
	$query = mysqli_query($con,"Select dept_id from department where dept_name = '$dptname'");
	if($query)
	{
			while($row = mysqli_fetch_row($query))
			{
				$deptid = $row[0];
			}
			$query = mysqli_query($con,"Insert into staff (staff_id,staff_name,dept_id,privelege) values ('$to_id','$name','$deptid','$priv')");
			if($query)
			{
				$query = mysqli_query($con,"Insert into staff_sec (staff_id,pass) values ('$to_id','$subject')");
				if($query)
				{
							
							$mail = new PHPMailer(true);  

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = 'stephenplanet98@gmail.com';                 // SMTP username
							$mail->Password = 'idontbelonghere';                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;

							$mail->setFrom('xavier.capistrano.pearl@gmail.com', 'Xavier Pearl A'); 
							$mail->addAddress($to_id); 

							$mail->Subject = "LOGIN CREDENTIALS";
							$mail->Body    = $message;

							// $mail->addAttachment($image, $imagename);  // sending an Image
						   
							if (!$mail->send()) 
							{
								$error = "Mailer Error: " . $mail->ErrorInfo;
								echo "<script type='text/javascript'>alert('.$error.')</script>";
							}
							else 
							{
								
								echo "<script type='text/javascript'>alert('Teacher Added Successfully')</script>";
								echo "<script type='text/javascript'>alert('Mail Sent!')</script>";
							}
				}
				else
				{
					echo "<script type='text/javascript'>alert('Insertion Error')</script>";
				}
			}
			else
			{
				echo "<script type='text/javascript'>alert('Insertion Error')</script>";
			}
	}
	
else
{
    "<script type='text/javascript'>alert('Department Not Found! ')</script>";
}

}
else
{
    "<script type='text/javascript'>alert('Teacher not added! ')</script>";
}

?>
