<? 
require 'sec.php';
if ($sus == 1) {
	require "config.php" ;
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
			<section class="page_toplogo ls section_padding_top_5 section_padding_bottom_5 toggler_right">

				<div class="container">
					<div class="row">

						<div class="col-sm-12 text-md-center">
							

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
										<a href="teachermain.php">Home</a>
									</li>


									<li>
										<a href="#">Services</a>
										<ul>
											<li>
												<a href="addcourse.php">Add New Course</a>
											</li>
											<li>
												<a href="addcontent.php">Add Notes</a>
											</li>
											<li>
												<a href="#">Delete Notes</a>
											</li>
										</li>
									</ul>
								</li>


								<li>
									<a href="report.php">Report</a>
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


		<!-- icon-background-teaser -->

		<section class="ls section_padding_top_20 section_padding_bottom_10">
			<div class="container">
				<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">

							<h4 class="highlight2 topmargin_0">
								Total Registration
							</h4>
							<div class="media-links">
								<a href="totalreghtml.php" class="abs-link"></a>
							</div>
						</div>
					</div>
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center">

							<h4 class="highlight2 topmargin_0">
								Course Based Registration
							</h4>
							<div class="media-links">
								<a href="courseselect.php" class="abs-link"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						
						<div class="teaser gradient_bg_color hoverable-banner before_cover text-center">

							<h4 class="highlight2 topmargin_0">
								Student Report 
							</h4>

							<div class="media-links">
								<a href="StudentReporthtml.php" class="abs-link"></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="teaser gradient_bg_color hoverable-banner before_cover text-center">

							<h4 class="highlight2 topmargin_0">
								Course Details
							</h4>

							<div class="media-links">
								<a href="CourseDetailshtml.php" class="abs-link"></a>
							</div>
						</div>
					</div>




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
</html>