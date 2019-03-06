<?php

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
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<link href="dash/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="dash/css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="dash/css/export.css" rel="stylesheet" type="text/css" media="all" />
	<link href="dash/css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
	<link href="dash/css/circles.css" rel="stylesheet" type="text/css" media="all" />
	<link href="dash/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="dash/css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
	
	

</head>
<style>


.myslides
{
	display:none;
}
</style>


<body>

	<script>
	function msg()
	
	{
		alert("Kindly Login to Enroll");
		window.location.assign("index.php");
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
											<a href="index.php">Home</a>
										</li>


									


										<li>
											<a href="index.php">Login</a>
										</li>
										<li>
											<a href="register.php">Register</a>
										</li>

									</ul>
								</nav>
								<!-- eof main side nav -->
							</div>
							<div>
								
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
		
			<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-12">

							<div class="shop-sorting clearfix">

						
								

							</div>

							<?php 
							
							$cnamee = $_GET['cou'];
							
							$qry = mysqli_query($con,"Select dept_id from department where dept_name = '$cnamee'");
							$row = mysqli_fetch_row($qry);
							$did = $row[0]; 
							$coursename = array();
							$courseid = array();
							$startdate = array();
							$enddate = array();
							$description = array();
							$week = array();
							$author = array();
							$lect = array();
							$ques = array();
							$ques[0] = 0;
							$coursename[0] = 0;
							$courseid[0] = 0;
							$startdate[0] = 0;
							$enddate[0] = 0;
							$description[0] = 0;
							$week[0] = 0;
							$author[0] = 0;
							$lect[0] = 0;
							$i = 1;
							$query = mysqli_query($con,"select * from courses where dept_id = '$did'");
							$count = mysqli_num_rows($query);
							
							while($row = mysqli_fetch_row($query))
							{
								$courseid[$i] = $row[1];
								$tempcc = $courseid[$i];
								$startdate[$i] = $row[6];
								$enddate[$i] = $row[7];
								$description[$i] = $row[4];
								$coursename[$i] = $row[2];
								$week[$i] = $row[8];
								$author[$i] = $row[3];
								$query1 = mysqli_query($con,"select * from lecture where course_code = '$tempcc'");
								$count2 = mysqli_num_rows($query1);
								$lect[$i] = $count2;
								$query2 = mysqli_query($con,"select * from question where course_code = '$tempcc'");
								$count3 = mysqli_num_rows($query2);
								$ques[$i] = $count3;
								$i++;
							}
							
							
							?>
							
							<div class="columns-3">


								<ul id="products" class="products list-unstyled grid-view bottommargin_0" >
									<?php for($i=1;$i<=$count;$i++)
									{?>
										<li class="product type-course" style="max-height:900px;margin-bottom:30px;"">
										<div class="side-item content-padding with_border" style="border:2px solid black;">
											<div class="row">

												<div class="col-md-6">

													<div class="item-media">
														<a href="course-sample.html">
															<img src="images/courses/01_square.jpg" alt="">
														</a>

														<div class="gradient_bg_color cs post-relater-person">
																
																<span class="playfair fontsize_18 bold">
																	<a href="#0"><?php echo "AUTHOR:".$author[$i]; ?></a>
																</span>
															</div>
													</div>
															
													<div class="item-content gradient_bg_color">

														<header class="entry-header">

															<div class="content-justify vertical-center">

																<span class="small-text medium highlight2">
																	<b><?php echo $coursename[$i];?> </b>
																</span>

																<!-- <div class="star-rating" title="Rated 3.00 out of 5">
																	<span style="width:60%">
																		<strong class="rating">3.00</strong> out of 5
																	</span>
																</div> -->
															</div>

															<!---<h3 class="entry-title">
																<a href="course-sample.html">How Do I Know If I M</a>
															</h3> --->

														</header>
														<?php

														$temp = $courseid[$i];
														$myq = mysqli_query($con,"select * from enroll where course_code = '$temp'");
														$c = mysqli_num_rows($myq);
														?>
														<p><b>Description:</b><?php echo $description[$i]; ?></p>						
														<p><b>Enrollment Start Date:</b><?php echo $startdate[$i]; ?></p>
														<p><b>Enrollment End Date:</b><?php echo $enddate[$i];?></p>
														<p><b>Course Duration:</b><?php echo $week[$i]." weeks";?></p>
														<p><b>Lectures:</b><?php echo $lect[$i]; ?></p>
														<p><b>Quiz:</b><?php echo $ques[$i]; ?></p>
														<p style="color:white;"><b><?php echo $c." Students" ?></b></p>
														<br><br>
														
															<input type="text" value="<?php echo $temp ?>" style="display:none;" name = "course"></input>
															<a onclick = "msg()"><button style="background:white;color:black;padding:2px;">ENROLL</button></a>
														
														
													</div>

												</div>

												<div class="col-md-6">

													<div class="item-content">

														<header class="entry-header">

															<div class="content-justify vertical-center">

																<span class="small-text medium highlight2">
																	<?php echo $coursename[$i]; ?>
																</span>

																</div>

														</header>

														

													
								<?php } ?>


									


					</div>
				</div>
			</section>


			


			<!-- Fotter -->
			<?php
			require 'fotter.php';
			?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!-- <script src="js/switcher.js"></script> -->

	<!-- <script type="text/javascript" src="js/loader.js"></script> -->
</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>

