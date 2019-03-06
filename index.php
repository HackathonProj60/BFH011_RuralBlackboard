<?php
session_start();
session_unset();
// require 'nav.php';
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
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>
<style>
.forgot:hover
{
	cursor:pointer;
}
</style>
<body>
<script>
function a()
{
	alert("Contact the Admin");
}
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

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<header class="page_header header_white toggler_xs_right">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="https://www.kristujayanti.edu.in" target="_blank"" target="_blank" class="logo top_logo">
									<img src="images/logo.png" style = "width:400px;" alt="">
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="index.php">Home</a>
										</li>


										<li>
											<a href="#">Science</a>
											
											<ul>
												<!-- <?php 
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
											?> -->
											<li>
												<a href="deptcourses.php?cou=COMPUTER%20SCIENCE">Computer Science</a>
											</li>
											<li>
												<a href="#">Mathematics</a>
											</li>
											<li>
												<a href="#">Physics</a>
											</li>
											<li>
												<a href="#">Chemistry</a>
											</li>
										</ul>
										
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->
									<li>
										<a href="#">Commerce</a>
									<ul>
									<li>	
										<a href="#">Accounts</a>
									</li>
									<li>
										<a href="#">Business Studies</a>
									</li>
									<li>
										<a href="#">Economics</a>
									</li>
								</ul>
							</li>
									<li>

										<a href="#">Arts</a>
										<ul>
											<li>
												<a href="#">History</a>
											</li>
											<li>
												<a href="#">Geography</a>
											</li>
											<li>
												<a href="#">Political Science</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
							<!-- eof main nav -->
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>

						<div class="header_right_buttons display_table_cell text-right hidden-xs ls">
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
														<a onclick = "a()" class = "forgot" aria-expanded="false">
															Forgot password?
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


		<section class="intro_section page_mainslider ds">
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
												<p>
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
												<p>
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
												<p>
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

		<section class="ls section_padding_top_20 section_padding_bottom_10 top_offset_content">
			<div class="container">
				<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
					
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
							<img src="images/download.png" style="width:180px;!important" alt="" class="icon-background">
							<h4 class="highlight2 topmargin_0">
								Computer Science
							</h4>
							<p class="bottommargin_0">
								Principal areas of study within Computer Science include computer system networks, security, database systems, vision and graphics, numerical analysis, programming languages, software engineering and theory of computing.
							</p>
							<div class="media-links">
								<a href="deptcourses.php?cou=COMPUTER SCIENCE" class="abs-link"></a>
							</div>
						</div>
						
					</div>
					
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
							<img src="images/teaser_icon02.png" alt="" class="icon-background">
							<h4 class="highlight2 topmargin_0">
								Life Science
							</h4>
							<p class="bottommargin_0">
								Life Sciences deal with science that involve the scientific study of living organisms. This encompasses biology, anatomy and physiology, botany, environmental science and oceanography.
							</p>
							<div class="media-links">
								<a href="deptcourses.php?cou=LIFE SCIENCE" class="abs-link"></a>
							</div>
						</div>
					</div>
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
							<img src="images/new.png" alt="" class="icon-background" style="width:180px;!important">
							<h4 class="highlight2 topmargin_0">
								Commerce
							</h4>
							<p class="bottommargin_0">
								Commerce deals with "the exchange of goods and services, especially on a large scale." It includes legal, economic, political, social, cultural and technological systems that operate in a country or in international trade.
							</p>
							<div class="media-links">
								<a href="deptcourses.php?cou=COMMERCE" class="abs-link"></a>
							</div>
						</div>
					</div>
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
							<img src="images/bba.png" alt="" class="icon-background" style="width:180px;!important">
							<h4 class="highlight2 topmargin_0">
								Management
							</h4>
							<p class="bottommargin_0">
								The organization and coordination of the activities of a business in order to achieve defined objectives. Management consists of the interlocking functions of creating corporate policy.
							</p>
							<div class="media-links">
								<a href="deptcourses.php?cou=MANAGEMENT" class="abs-link"></a>
							</div>
						</div>
					</div>
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
							<img src="images/arts.png" alt="" class="icon-background" style="width:180px;!important">
							<h4 class="highlight2 topmargin_0">
								Humanities
							</h4>
							<p class="bottommargin_0">
								The humanities emphasize analysis and exchange of ideas rather than the creative expression of the arts or the quantitative explanation of the sciences. History, Anthropology and Archaeology. 
							</p>
							<div class="media-links">
								<a href="deptcourses.php?cou=HUMANITIES" class="abs-link"></a>
							</div>
						</div>
					</div>

					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">
							<img src="images/law.png" alt="" class="icon-background" style="width:180px;!important">
							<h4 class="highlight2 topmargin_0">
								Law
							</h4>
							<p class="bottommargin_0">
								Law is a system of rules that are created and enforced through social or governmental institutions to regulate behavior. It ensures that everyone adhere to the will of the state.
							</p>
							<div class="media-links">
								<a href="#" class="abs-link"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		

		<section class="ls section_padding_top_100 section_padding_bottom_100">
			<br><br><br>
			
		</section>

		<section class="cs parallax page_features section_padding_top_130 section_padding_bottom_100 columns_margin_bottom_30 container_padding_0 fluid_padding_0">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="teaser text-center">
							<div class="teaser-icon size_big highlight2">
								<i class="fa fa-trophy" aria-hidden="true"></i>
							</div>
							<h3 class="counter" data-from="0" data-to="<?= $courseNo ?>" data-speed="1100">0</h3>
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
								<i class="fa fa-map-marker fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i>  #####
							</p>
							<p>
								<i class="fa fa-envelope fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> #######@kristujayanti.com
							</p>
							<p>
								<i class="fa fa-phone fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> (080)2###611,&nbsp;(080)2###5770,&nbsp;(080)28####53
							</p>
							<p class="greylinks">
								<i class="fa fa-internet-explorer fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> <a href="#"></a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 text-center text-sm-left">
						<div class="widget widget_twitter">
							<h4 class="widget-title">Connect With Us</h4>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="https://www.facebook.com/KristuJayantiCollege" target="_blank"><i class="fa fa-facebook fontsize_18 highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://www.youtube.com/user/kristujayanticollege" target="_blank"><i class="fa fa-youtube fontsize_18 highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://twitter.com/kristujayanti99" target="_blank"><i class="fa fa-twitter fontsize_18 highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://in.linkedin.com/in/kristujayanti" target="_blank"><i class="fa fa-linkedin fontsize_18 highlight2 rightpadding_10"></i></a>

						</div>
					</div>
					<div class="col-md-3 col-sm-3 text-center text-sm-left">
						<div class="widget widget_mailchimp">

							<h4 class="widget-title">Subscribe Newsletter</h4>

							<form class="signup" action="http://webdesign-finder.com/html/starford/" method="get">
								<p class="fontsize_14">Enter Email here to be updated. We promise not to send you spam!</p>
								<div class="form-group">
									<label for="mailchimp" class="sr-only">Enter your email here</label>
									<i class="flaticon-envelope icon2-"></i>
									<input name="email" type="email" id="mailchimp" class="mailchimp_email form-control" placeholder="Emai Address">
									<button type="submit" class="theme_button color1">Subscribe</button>
								</div>

								<div class="response"></div>

							</form>

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
						<p style="font-weight: bold;text-align: center">Team BFH011</p>
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
