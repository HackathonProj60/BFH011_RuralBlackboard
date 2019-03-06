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
                            <span class="toggle_menu">
                                <span></span>
                            </span>
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
                                        <a href="adminhome.html">Home</a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    
                                    <li>
                                        <a href="services.html">Services</a>
                                        <ul>
                                            <li>
                                                <a href="services.html">Add New Course</a>
                                            </li>
                                            <li>
                                                <a href="service-single.html">Add Teachers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="report.html">Report</a>
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
                                 mysqli_connect("localhost", "root", "","e-portal");

                                 $sql = "SELECT * FROM department";
                                 $result = mysqli_query($sql);

                                 echo "<select name='dept' class='country_to_state form-control'><option selected disabled>DEPARTMENT</option>";
                                 while ($row = mysqli_fetch_array($result)) {
                                     echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
                                 }
                                 echo "</select>";
                                 ?>
                                 
                             </div>
                             <div class="form-group col-sm-6">
                                <input type="text" class="form-control" value="" placeholder="Teacher's Name" name="tchrname" id="calc_shipping_state">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" value="" placeholder="Email" name="usrname" id="calc_shipping_postcode">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" value="" placeholder="password " name="temppwd" id="calc_shipping_state">
                            </div>
                            
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
    
    
    

    
    <section class="cs page_copyright section_padding_15 with_top_border_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p ><span style="font-size:medium; color:white; text-align:right;">&copy;&nbsp;2018 Kristu Jayanti College (Autonomous), K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>



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
    $to_id = $_POST['usrname'];
    $subject = $_POST['temppwd'];
    $message = "USERNAME:" .$to_id. "<br> Password:" . $subject;
    // $imagename = $_POST['imagename']; // for image name
    // $image = $_FILES['image']['tmp_name']; //choose ur image and check in form enctype="multipart/form-data"

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
        echo '<p id="para">'.$error.'</p>';
    }
    else 
    {
        echo '<p id="para">Message sent!</p>';
    }
}
else
{
    echo " <div class=display> Please enter valid data </div> ";
}
?>
