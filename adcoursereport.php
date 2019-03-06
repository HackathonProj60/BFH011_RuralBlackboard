	<?php
	require 'adminSec.php';
	if ($sus == 1) {
		require 'nav.php'; 
		require 'config.php';
		require 'count.php';
		
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
											<a href="AdminN.php">Home</a>
										</li>


										<li>
											<a href="#">Services</a>
											<ul>
												<li>
													<a href="addteacher.php">Add Teachers</a>
												</li>
												<li>
													<a href="addcourseadmin.php">Add New Course</a>
												</li>
												<li>
													<a href="delcourse.php">Manage Course</a>
												</li>
												
												<li>
													<a href="adddept.php">Add Department</a>
												</li>
												<li>
													<a href="deldept.php">Remove Department</a>
												</li>
												<li>
													<a href="delete.php">Delete Users</a>
												</li>
												<li>
													<a href="updateadmin.php">Update Password</a>
												</li>
											</ul>
										</li>


										<li>
											<a href="myreportpage.php">Report</a>
										</li>
										<li>
											<a href="logout.php">LOGOUT</a>
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
																	<a href="#0"><?php echo "AUTHOR: ".$author[$i]; ?></a>
																</span>
															</div>
														</div>

														<div class="item-content gradient_bg_color">

															<header class="entry-header">

																<div class="content-justify vertical-center">

																	<span class="small-text medium highlight2">
																		<?php echo $coursename[$i]; ?>
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
															<form method = "POST" action = "coursereport.php">
																<input type="text" value="<?php echo $temp ?>" style="display:none;" name = "course"></input>
																<button style="background:white;color:black;padding:2px;">VIEW REPORT</button>
															</form>
															<!---<div class="item-meta topmargin_20 inline-content greylinks">
																<div>
																	<a href="#0">
																		<i class="fa fa-users rightpadding_5" aria-hidden="true"></i>
																		<span>3269</span>
																	</a>
																</div>
																<div>
																	<a href="#0">
																		<i class="fa fa-comments rightpadding_5" aria-hidden="true"></i>
																		<span>126</span>
																	</a>
																</div>
																<div>
																	<a href="#0">
																		<i class="fa fa-money rightpadding_5" aria-hidden="true"></i>
																		<span>550$</span>
																	</a>
																</div>
															</div> --->
														</div>

													</div>

													<div class="col-md-6">

														<div class="item-content">

															<header class="entry-header">

																<div class="content-justify vertical-center">

																	<span class="small-text medium highlight2">
																		<?php echo $coursename[$i]; ?>
																	</span>

																	<!-- <div class="star-rating" title="Rated 3.00 out of 5">
																		<span style="width:60%">
																			<strong class="rating">3.00</strong> out of 5
																		</span>
																	</div> -->
																</div>

																<!---<h3 class="entry-title">
																	<a href="course-sample.html">How Do I Know If I M</a>
																</h3>--->

															</header>

															

														
									<?php } ?>


										
									</ul>

								</div>
								<!-- eof .columns-* -->

								

								

								


							</div>
							<!--eof .col-sm-8 (main content)-->


							<!-- sidebar
							<aside class="col-sm-5 col-md-4 col-lg-4">


								<div class="widget widget_search">
									<h3 class="widget-title">Search On Website</h3>
									<form method="get" class="searchform" action="http://webdesign-finder.com/html/starford/">

										<div class="form-group">
											<label class="sr-only" for="widget-search">Search for:</label>
											<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
										</div>
										<button type="submit" class="theme_button color1 no_bg_button">Search</button>

									</form>
								</div>

								<form class="courses-filter topmargin_60">
									<h3 class="widget-title">Course Categories</h3>

									<div class="row columns_padding_5">
										<div class="col-sm-6">
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_1">
												<label for="courseCheckbox_1">
													Painting
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_2">
												<label for="courseCheckbox_2">
													Medicine
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_3">
												<label for="courseCheckbox_3">
													Sports
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_4">
												<label for="courseCheckbox_4">
													Philosophy
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_5">
												<label for="courseCheckbox_5">
													Astronomy
												</label>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_6">
												<label for="courseCheckbox_6">
													Law
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_7">
												<label for="courseCheckbox_7">
													Technology
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="courseCheckbox_8">
												<label for="courseCheckbox_8">
													Psichology
												</label>
											</div>
										</div>
									</div>

									<h3 class="widget-title topmargin_60">Lecturer</h3>

									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_9">
										<label for="courseCheckbox_9">
											Chad Barton
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_10">
										<label for="courseCheckbox_10">
											Sylvia Gardner
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_10">
										<label for="courseCheckbox_10">
											Philip Greene
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_10">
										<label for="courseCheckbox_10">
											Ellen Fitzgerald
										</label>
									</div>

									<h3 class="widget-title topmargin_60">Start Date</h3>
									<div class="form-group">
										<label for="start-date" class=" margin_0">
											Start date
										</label>
										<input type="date" name="start-date" id="start-date" class="form-control">
									</div>
									<div class="form-group">
										<label for="end-date" class=" margin_0">
											End date
										</label>
										<input type="date" name="end-date" id="end-date" class="form-control">
									</div>

									<h3 class="widget-title topmargin_60">Price</h3>

									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_11">
										<label for="courseCheckbox_11">
											All
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_12">
										<label for="courseCheckbox_12">
											Free
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="courseCheckbox_13">
										<label for="courseCheckbox_13">
											Paid
										</label>
									</div>

									<p class="topmargin_30">
								<button type="submit" class="theme_button color2 wide_button">Filter now</button>
							</p>

								</form>


							</aside> -->
							<!-- eof aside sidebar -->


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

