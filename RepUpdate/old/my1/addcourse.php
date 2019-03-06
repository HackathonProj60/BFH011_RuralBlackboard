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
                                
                
                <section class="ls section_padding_top_100 section_padding_bottom_100">
                        <div class="container ">
                                <div class="row">   
<form class="shop-register" role="form" id = "addcourse" method="post">								
                                        <div class="col-sm-12">
                                                <div class="shipping-calculator-form with_padding color_border">
                                                    <h3 class="text-center" style="margin-top:-100px;">Add New Course</h3>
                                                    <p>Fill the below details</p>
                                                    <div class="form-group col-sm-6">
                                                        
                                                           <?php
									mysql_connect("localhost", "root", "");
									mysql_select_db("e-portal");

									$sql = "SELECT * FROM department";
									$result = mysql_query($sql);

										echo "<select name='dept' class='country_to_state form-control' ><option selected disabled>DEPARTMENT</option>";
										while ($row = mysql_fetch_array($result)) {
											echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
										}
										echo "</select>";
									?>
                                                    </div>
                                                     <div class="form-group col-sm-6">
                                                        <input type="text" class="form-control" value="" placeholder="Course Id" name="cid" id="calc_shipping_postcode">
                                                    </div>
     													
                                                    <div class="form-group col-sm-6">
                                                           START DATE: <input type="date" class="form-control"  value="<?php date_default_timezone_set('Asia/Kolkata');echo date('Y-m-d'); ?>" name="strtdt" id="calc_shipping_state">
                                                        </div>
														 <div class="form-group col-sm-6">
                                                           END DATE: <input type="date" class="form-control" name="enddt" id="calc_shipping_state">
                                                        </div>
														<div class="form-group col-sm-6">
                                                        <input type="text" class="form-control" value="" placeholder=" Course Name" name="cn" id="calc_shipping_postcode">
                                                    </div>
													<div class="form-group col-sm-6">
                                                        <input type="text" class="form-control" value="" style="visibility:hidden;">
                                                    </div>
                                                    <div class="form-group col-sm-12">
													<textarea class = "form-control" placeholder="Course Description." form = "addcourse" rows = "5" name = "desc"></textarea>
                                                    </div>
                                                       
                                                      

                                            </div>
											  
                                                                <center><input type="submit" name="submit" class="theme_button color2"></button>
             &nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" name="calc_shipping" class="theme_button color2 ">clear</button></center>
            

                                                                                                    
												  </div>
                                            </div>	
											</div>
											</div>
            </form>
		<?php
	$connection = mysqli_connect("localhost","root","","e-portal");
	
	if($_POST)
	{
	if($_POST['submit'])
	{
		
		$department = $_POST['dept'];
		$courseid = $_POST['cid'];
		$coursename = $_POST['cn'];
		$date1 = $_POST['strtdt'];
		$date2= $_POST['enddt'];
		$week = abs((strtotime($date1)-strtotime($date2))/(60*60*24*7));
		$description = $_POST['desc'];
		
	
	$query = mysqli_query($connection,"Select dept_id from department where dept_name = '$department'");
		if($query)
		{
			while($row =$query->fetch_assoc())
			{
				$deptid = $row["dept_id"];
			}
			
		
		$query1 = mysqli_query($connection,"insert into course values('$courseid','$coursename','$date1','$date2','$week','$description','$department','$deptid')");
		if($query1)
		{
			echo "<script type = 'text/javascript'>alert('Course created sucsessfully')</script>";
		}
		else
		{
			echo "<script type = 'text/javascript'>alert('Course Creation failed')</script>";
		}
		}
		else
		{
			echo "<script type = 'text/javascript'>alert('Department not Found')</script>";
		}
	}
	}
	
	
?>
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
