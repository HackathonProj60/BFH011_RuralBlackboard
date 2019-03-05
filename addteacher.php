<?php
require "adminSec.php";
if ($sus == 1) {
    require "config.php";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
<head>
	<title>E-PORTAL</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

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


});
</script>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	

	<!-- Unyson messages modal -->
	
	<!-- eof .modal -->
	<div id="canvas">
            <div id="box_wrapper">
                    <section class="page_toplogo ls section_padding_top_5 section_padding_bottom_5 toggler_right">

                            <div class="container">
                                <div class="row">
            
                                    <div class="col-sm-12 text-md-center">
                                        <a href="#" class="logo top_logo">
                                            <img src="images/logo.png" style="width:400px" alt="">
                                        </a>
            
                                        <!-- header toggler -->
                                       
                                    </div>
            
                                </div>
                            </div>
            
                        </section>
                      
                           <header class="page_header_side ls">
                <span class="toggle_menu_side">
                    <span></span>
                </span>
                <div class="scrollbar-macosx">
                    <div class="side_header_inner">
                        <div class="text-center">
                            <a href="#" class="logo vertical_logo">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="header-side-menu darklinks">
                            <!-- main side nav start -->
                            <nav class="mainmenu_side_wrapper">
                                <ul class="nav menu-click">
                                    <li class="active">
                                        <a href="adminhome.php">Home</a>
                                    </li>


                                    <li>
                                        <a href="#">Services</a>
                                        <ul>
                                            <li>
                                                <a href="addcourseadmin.php">Add New Course</a>
                                            </li>
                                            <li>
                                                <a href="delcourse.php">Manage Course</a>
                                            </li>
                                            <li>
                                                <a href="courseselectaddad.php">Add Notes</a>
                                            </li>


                                            <li>
                                                <a href="adddept.php">Add Department</a>
                                            </li>
                                            <li>
                                                <a href="deldept.php">Remove Department</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="reportadmin.php">Report</a>
                                    </li>
                                    <li>
                                        <a href="logout.php">LOGOUT</a>
                                    </li>

                                </ul>
                            </nav>
                            <!-- eof main side nav -->
                        </div>


                        <div class="side_header_social">
                            <span>
                                <a href="#" class="social-icon color-bg-icon -icon soc-facebook"></a>
                                <a href="#" class="social-icon color-bg-icon -icon soc-twitter"></a>
                                <a href="#" class="social-icon color-bg-icon -icon soc-google"></a>
                            </span>
                        </div>

                    </div>
                </div>
            </header>
                               
			<section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="highlight2">Add Teachers</h2>
                              
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container ">
                        <div class="row">      
									<form class="shop-register" method="post">
                                <div class="col-sm-12">
                                        <div class="shipping-calculator-form with_padding with_border color_border">
                                            <h3 class="topmargin_0 text-center">Add Teachers</h3>
                                            <p>Fill the details below</p>
                                            <div class="form-group col-sm-6">
                                               
                                                           
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
                                                    <input type="text" class="form-control" value="" placeholder="password " name="temppwd" >
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

                            <?php
                                require 'fotter.php';
                            ?>

                        </div>
                        <!-- eof #box_wrapper -->
                    </div>
                    <!-- eof #canvas -->
                
                    <script src="js/compressed.js"></script>
                    <script src="js/main.js"></script>
                    <script src="js/switcher.js"></script>
                
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
