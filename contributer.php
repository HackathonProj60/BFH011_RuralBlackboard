<?php
require 'nav.php';
require 'config.php';
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
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
	<!-- <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/agency.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
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
						</div>
					</div>
				</div>
			</header>

			<section class="bg-light ls" id="team" style="padding-top: 10px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading text-uppercase" style="padding-top: 34px;">Our Amazing Team</h2>
							<h3 class="section-subheading text-muted"></h3>
						</div>
					</div>
					<div class="row animated zoomIn">
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto" src="contributor/01.jpg" alt="" style="border-radius: 50%;">
								<h4>Stephen Lal Abraham</h4>
								<p class="text-muted"></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto" src="contributor/02.jpg" alt="" style="border-radius: 50%;">
								<h4>Xavier Pearl A</h4>
								<p class="text-muted"></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto" src="contributor/03.jpg" alt="" style="border-radius: 50%;">
								<h4>Ashish Kumar</h4>
								<p class="text-muted"></p>
							</div>
						</div>
					</div>
					<div class="row animated zoomIn">
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto" src="contributor/04.jpeg" alt="" style="border-radius: 50%;">
								<h4>Mohammed Rahil Ovaiz</h4>
								<p class="text-muted"></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto" src="contributor/05.jpg" alt="" style="border-radius: 50%;">
								<h4>Maria Israel Sathyan</h4>
								<p class="text-muted"></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto" src="contributor/06.jpg" alt="" style="border-radius: 50%;">
								<h4>Ibrahim Khan</h4>
								<p class="text-muted"></p>
							</div>
						</div>
					</div>
					<div class="row animated zoomIn">
						<div class="col-sm-12">
							<div class="team-member">
								<img class="mx-auto" src="contributor/07.jpg" alt="" style="border-radius: 50%;">
								<h4>Sashi Kant Ojha H</h4>
								<p class="text-muted"></p>
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




			<!-- fotter -->
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
</html>