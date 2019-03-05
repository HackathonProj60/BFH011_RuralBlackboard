<?php
session_start();
session_unset();
require 'nav.php';
require 'config.php';
require 'count.php';
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
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/shop.css">
	
	<link rel="stylesheet" href="courses/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="courses/css/style.css"/>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="working.js"> </script>

		


	
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->


	<!-- Unyson messages modal -->

	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<header class="page_header header_white">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="https://www.kristujayanti.edu.in" target="_blank"" target="_blank" class="logo top_logo">
									<img src="images/logo.png" alt="">
								</a>
							</div>

							<div class="header_mainmenu display_table_cell">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
										<a href="index.php">Home</a>
										</li>


										<li>
											<a href="#">Autonomous</a>
											
											<ul>
												<?php 
												for($i=0;$i<$count;$i++)
												{
													?>
													<li> <?php echo "<b>",$deaname[$i],"</b>"; ?>
												</li>											
												<ul>
													<?php
													for ($j=0; $j < $count1 ; $j++) {
														?>
														<li><a href="deptcourses.php?cou=<?php echo $deptname[$i][$j];?>"><?php if(isset($deptname[$i][$j])){echo "<b style='text-decoration:none'>".$deptname[$i][$j]."</b>";}?></a></li>
													<?php } ?>
												</ul>
												<?php
											}
											?>
										</ul>
										
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->
									<li>
										<a href="#">Law</a>
										
									</li>
									<!-- eof features -->

									<li>
										<a href="#">Management</a>
									</li>
								</ul>
							</nav>
							<!-- eof main nav -->
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>

						<div class="header_right_buttons display_table_cell text-right ls">
							<ul class="inline-list menu darklinks">
								<li>
									<div class="dropdown login-dropdown">
										<a href="#" id="login" data-target="#" data-toggle="dropdown" class="small-text medium">Login</a>
										<div class="dropdown-menu" aria-labelledby="login">

											<form method="post" action="session.php">

												<div class="form-group has-placeholder">
													<label for="login-email">Username</label>
													<input type="text" class="form-control"  placeholder="Regno" name="usrname">
												</div>


												<div class="form-group has-placeholder">
													<label for="login-password">Password</label>
													<input type="password" class="form-control" placeholder="Password" name="password">
												</div>

												<div class="content-justify divider_20">
													<div class="checkbox margin_0">
														<a onclick = "a(){alert('Contact the Admin');}" aria-expanded="false">
															Lost password?
														</a>
													</div>

													
												</div>


												<button type="submit" class="theme_button block_button color1" name="login">Log In</button>
											</form>

											<p class="topmargin_10 text-center grey highlightlinks">
												Not a member yet? <a href="register.php">Register now</a>
											</p>

										</div>
									</div>
								</li>
								<li>
									<a href="register.php" class="small-text medium">Sign up</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>


		<section class="intro_section page_mainslider ds" style="position:relative;">
			<div class="flexslider vertical-nav" data-dots="true" data-nav="false">
				<ul class="slides">
					<li>
						<img src="images/slide01.jpg" alt="">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-left">
									<div class="slide_description_wrapper">
										<div class="slide_description">
											<div class="intro-layer" data-animation="fadeInUp">
												<h2>
													<span class="highlight2">Education</span> can be
													<br> started at
													<span class="highlight2">Any Age</span>!
												</h2>
											</div>
											<div class="intro-layer" data-animation="fadeInUp">
												<p style="color:white;">
													Make education your dream and it will help you to fulfill your dream.<br> Education takes us to the heights of success.
												</p>
											</div>
											<div class="intro-layer" data-animation="fadeInUp">
												<a href="register.php" class="theme_button color2 two_lines_button">
													Choose E-Portal<br> today
												</a>
											</div>
										</div>
										<!-- eof .slide_description -->
									</div>
									<!-- eof .slide_description_wrapper -->
								</div>
								<!-- eof .col-* -->
							</div>
							<!-- eof .row -->
						</div>
						<!-- eof .container -->
					</li>

					<li>
						<img src="images/slide02.jpg" alt="">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center">
									<div class="slide_description_wrapper">
										<div class="slide_description">
											<div class="intro-layer" data-animation="fadeInUp">
												<h2>
													<span class="highlight2">Education</span> is a tool that
													<br> helps us get
													<span class="highlight2">Success</span>!
												</h2>
											</div>
											<div class="intro-layer" data-animation="fadeInUp">
												<p style="color:white;">
													Make education your dream and it will help you to fulfill your dream.<br> Education takes us to the heights of success.
												</p>
											</div>
											<div class="intro-layer" data-animation="fadeInUp">
												<a href="register.php" class="theme_button color2 two_lines_button">
													Choose E-PORTAL<br> today
												</a>
											</div>
										</div>
										<!-- eof .slide_description -->
									</div>
									<!-- eof .slide_description_wrapper -->
								</div>
								<!-- eof .col-* -->
							</div>
							<!-- eof .row -->
						</div>
						<!-- eof .container -->
					</li>

					<li>
						<img src="images/slide03.jpg" alt="">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center">
									<div class="slide_description_wrapper">
										<div class="slide_description">
											<div class="intro-layer" data-animation="fadeInUp">
												<h2>
													<span class="highlight2">Education</span> is like passport to
													<br> the
													<span class="highlight2">Better Future</span>!
												</h2>
											</div>
											<div class="intro-layer" data-animation="fadeInUp">
												<p style="color:white;">
													Make education your dream and it will help you to fulfill your dream.<br> Education takes us to the heights of success.
												</p>
											</div>
											<div class="intro-layer" data-animation="fadeInUp">
												<a href="register.php" class="theme_button color2 two_lines_button">
													Choose E-PORTAL<br> today
												</a>
											</div>
										</div>
										<!-- eof .slide_description -->
									</div>
									<!-- eof .slide_description_wrapper -->
								</div>
								<!-- eof .col-* -->
							</div>
							<!-- eof .row -->
						</div>
						<!-- eof .container -->
					</li>

				</ul>
				
			</div>
			<!-- eof flexslider -->
		
		</section>

		<!-- icon-background-teaser -->
		
		
<section class="search-section ss-other-page myc">
		<div class="container">
			<div class="search-warp">
			
				<div class="section-title text-white">
					<h2><span>Search your course</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<!-- search form -->
						<form class="course-search-form" method="GET" action="deptcourses.php">
						<?php
						$sql = "SELECT * FROM department";
							$result = mysqli_query($con,$sql);

							echo "<select name='cou' id = 'dept2'><option selected disabled>DEPARTMENT</option>";
							while ($row = mysqli_fetch_array($result)) {
								echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
							}
							echo "</select>";
	?>
						<button class="site-btn btn-dark" name = "cs">Search Couse</button>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
		
		
		<section class="course-section pb-0">
		
		<div class="course-warp">
			
			<ul class="course-filter controls">
			<p style="font-size:300%;text-align:center;"><b>NEW COURSES</b></p>
				<li class="control active">All</li>
				<li class="control">Science</li>
				<li class="control">Arts</li>
				<li class="control">Commerce & Management</li>
				<li class="control">Humanities</li>
			</ul>                                       
			
				<?php 
				$coursename = array();
				$courseid = array();
				$startdate = array();
				$enddate = array();
				$description = array();
				$week = array();
				$author = array();
				$lect = array();
				$coursename[0] = 0;
				$courseid[0] = 0;
				$startdate[0] = 0;
				$enddate[0] = 0;
				$description[0] = 0;
				$week[0] = 0;
				$author[0] = 0;
				$lect[0] = 0;
				$i = 1;
				$query = mysqli_query($con,"select * from courses ORDER BY start_date desc");
				$count = mysqli_num_rows($query);
				
				while($row = mysqli_fetch_row($query))
				{
					$courseid[$i] = $row[1];
					$tempcc = $courseid[$i];
					$startdate[$i] = $row[5];
					$enddate[$i] = $row[6];
					$description[$i] = $row[4];
					$coursename[$i] = $row[2];
					$week[$i] = $row[7];
					$author[$i] = $row[3];
					$query1 = mysqli_query($con,"select * from lecture where course_code = '$tempcc'");
					$count2 = mysqli_num_rows($query1);
					$lect[$i] = $count2;
					$i++;
				}
				
				
				?>
				
					
				<div class="row course-items-area">
				<!-- course -->
				 <div class = "col-lg-12">
					
					<?php 
						for($i=1;$i<=$count;$i++)
						{
						?>
					<div class="mix col-md-6">
					<div class="course-item">
						
						<div class="course-info">
							<div class="course-text">
								<center><h4><?php echo $coursename[$i]; ?></h4>
								<img src = "courses/img/courses/1.jpg" style="width:200px;height:200px;"></center>
								<br>
							
								
								<p><b>Description:</b><?php echo $description[$i]; ?></p>
								<p><b>Enrollment Start Date:</b><?php echo $startdate[$i]; ?></p>
								<p><b>Enrollment End Date:</b><?php echo $enddate[$i];?></p>
								<p><b>Course Duration:</b><?php echo $week[$i]." weeks";?></p>
								<p><b>Lectures:</b><?php echo $lect[$i]; ?></p>
								<p><b>Quiz:</b><?php echo $lect[$i]; ?></p>
								<div class="students">120 Students</div>
							</div>
								<div class="course-author">
								<div class="ca-pic set-bg" style="background-image:url('courses/img/authors/1.jpg')"></div>
								<p> <span></span></p>
								</div>
						</div>
							
						</div>
					</div>
					<?php 
						}
						?>
					
					
					
				 
				</div>
			</div>
		</div>
				
			<br><br><br><br><br><br>
	</section>


<!--	<section class ="spad">
	
	</section>
	-->
		
		
		<section class="cs parallax page_features section_padding_top_130 section_padding_bottom_100 columns_margin_bottom_30 container_padding_0 fluid_padding_0">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="teaser text-center">
							<div class="teaser-icon size_big highlight2">
								<i class="fa fa-trophy" aria-hidden="true"></i>
							</div>
							<h3 class="counter" data-from="0" data-to="<?= $course ?>" data-speed="1100">0</h3>
							<p>Courses</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="teaser text-center">
							<div class="teaser-icon size_big highlight2">
								<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							</div>
							<h3 class="counter" data-from="0" data-to="<?= $student ?>" data-speed="1100">0</h3>
							<p>Happy Graduates Per Year</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="teaser text-center">
							<div class="teaser-icon size_big highlight2">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>
							<h3 class="counter" data-from="0" data-to="<?= $staff ?>" data-speed="1100">0</h3>
							<p>Professional Teachers</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		
		<footer class="ls section_padding_top_100 section_padding_bottom_100">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center text-sm-left">
						<div class="widget widget_text">
							
							<img src="images/logo2.png" alt="">
							
						</div>
					</div>
					<div class="col-md-6 col-sm-6 text-center text-sm-left">
						<div class="widget widget_text">
							<h4 class="widget-title">Contact Us</h4>
							<p >
								<i class="fa fa-map-marker fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> Kristu Jayanti College (Autonomous),K Narayanapura, Bangaluru-560077.
							</p>
							<p>
								<i class="fa fa-envelope fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> info@kristujayanti.com
							</p>
							<p>
								<i class="fa fa-phone fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> (080)28465611,&nbsp;(080)28465770,&nbsp;(080)28465353
							</p>
							<p class="greylinks">
								<i class="fa fa-internet-explorer fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> <a href="https://kristujayanti.edu.in">www.kristujayanti.edu.in</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 text-center text-sm-left">
						<div class="widget widget_twitter">
							<h4 class="widget-title">Connect With Us</h4>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="https://www.facebook.com/KristuJayantiCollege" target="_blank"><i style="font-size:20px;" class="fa fa-facebook highlight2 rightpadding_10" ></i></a>&nbsp;&nbsp;
							<a href="https://www.youtube.com/user/kristujayanticollege" target="_blank"><i style="font-size:20px;" class="fa fa-youtube highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://twitter.com/kristujayanti99" target="_blank"><i style="font-size:20px;" class="fa fa-twitter highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://in.linkedin.com/in/kristujayanti" target="_blank"><i style="font-size:20px;" class="fa fa-linkedin highlight2 rightpadding_10"></i></a>

						</div>
					</div>
					
				</div>
			</div>
		</footer>




		<section class="cs page_copyright section_padding_15 with_top_border_container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" style="margin-bottom: 5px;">
						<p><span style="font-size:medium; color:white; text-align:right;">&copy;&nbsp;2018 <a href="adminlog.html">Kristu Jayanti College (Autonomous)</a>, K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span></p>
					</div>
					<div class="col-sm-12 text-center" style="margin-top: 0px;margin-bottom: 5px;">
						<p><i>Developed By</i></p>
					</div>
					<div class="col-sm-12" style="margin-top: 0px;margin-bottom: 0px;">
						<a href="contributer.php"><img src="logo/logo1.png" class="img-fluid" style="display: block;width: 25%;margin-left: auto;margin-right: auto;"></a>
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


</body>
</html>
