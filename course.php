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


<!-- Mirrored from webdesign-finder.com/html/starford/course-sample.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:25:22 GMT -->
<head>
	<title>Course</title>
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

	
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<section class="page_topline ls ms table_section visible-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">

							<ul class="inline-list menu darklinks">
								
								<li>
									<a href="index-2.html" class="small-text">Logout</a>
								</li>
								
							</ul>

						</div>
					</div>
				</div>
			</section>


			<header class="page_header header_white toggler_xs_right">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="index.html" class="logo top_logo">
									<img src="images/logo.png" style = "width:400px;" alt="">
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="homepage.php">Home</a>
										</li>


										<li>
											<a href="#">Courses</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<a href = "#">COMMERCE</a>
														<ul>
															<?php $i=0;
															for ($j=0; $j < sizeof($arr[$i]) ; $j++) {?>
																<li><a href="course.php?cou=<?php echo $arr[$i][$j];?>"><?php {echo $arr[$i][$j];} ?></a><br></li>
															<?php } ?>
														</ul>
													</li>

													<li class="mega-menu-col">
														<a href="#">COMPUTER SCIENCE</a>
														<ul>
															<?php $i++;
															for($j = 0;$j<sizeof($arr[$i]);$j++) {
																
																?>
																<li><a href="course.php?cou=<?php echo $arr[$i][$j];?>"><?php echo $arr[$i][$j]; ?></a><br></li>
															<?php } ?>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">HUMANITIES</a>
														<ul>
															<?php $i++;
															for($j = 0;$j<sizeof($arr[$i]);$j++) { ?>
																<li><a href="course.php?cou=<?php echo $arr[$i][$j];?>"><?php echo $arr[$i][$j]; ?></a><br></li>
															<?php } ?>

														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">LAW</a>
														<ul>
															<li>
																<?php $i++;
																
																for($j = 0;$j<sizeof($arr[$i]);$j++) 
																{ 
																	?>
																	<li><a href="course.php?cou=<?php echo $arr[$i][$j];?>"><?php echo $arr[$i][$j];  ?></a><br></li>
																<?php }?>
															</li>
														</ul>
													</li>

													<li class="mega-menu-col">
														<a href="#">LIFE SCIENCE</a>

														<ul>

															<li>
																<?php $i++;
																for($j = 0;$j<sizeof($arr[$i]);$j++) { ?>
																	<li><a href="course.php?cou=<?php echo $arr[$i][$j];?>"><?php echo $arr[$i][$j]; ?></a><br></li>
																<?php } ?>
															</li>
														</ul>
													</li>
													
													<li class="mega-menu-col">
														<a href="#">MANAGEMENT</a>

														<ul>

															<li>
																<?php $i++;
																for($j = 0;$j<sizeof($arr[$i]);$j++) { ?>
																	<li><a href="course.php?cou=<?php echo $arr[$i][$j];?>"><?php echo $arr[$i][$j]; ?></a><br></li>
																<?php } ?>
															</li>
														</ul>
													</li>

												</ul>
											</div>
											<!-- eof mega menu -->
										</li>
										<!-- eof features -->



										<!-- contacts -->
										<li>
											<a href="contact.html">About</a>
											<ul>
												<li>
													<a href="contact.html">Contact 1</a>
												</li>
												<li>
													<a href="contact2.html">Contact 2</a>
												</li>
												<li>
													<a href="contact3.html">Contact 3</a>
												</li>
												<li>
													<a href="contact4.html">Contact 4</a>
												</li>
											</ul>
										</li>
										<!-- eof contacts -->
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
										<a href="index-2.html" class="small-text medium">Logout</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>


			<section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight2">Course</h2>
							
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">

					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">

							<article>
								<div class="entry-thumbnail item-media bottommargin_40">
									<img src="images/gallery/11.jpg" alt="">

									<div class="gradient_bg_color cs post-relater-person content-justify vertical-center">
										
									</div>
								</div>

								<div class="item-content">

									<header class="entry-header">

										<h2 class="section_header">
											<?php echo $_GET['cou'];?>
										</h2>

									</header>
									<!-- .entry-header -->
									<?php 
									$sql=$con->prepare("select course_desc,start_date,end_date from courses where course_name= ? ");
									$sql->bind_param("s",$_GET['cou']);
									$sql->execute();
									$sql->bind_result($cd,$sd,$ed);
									while($sql->fetch()){
										$cd = $cd;
										$sd = $sd;
										$ed = $ed;
									}
									?>
									<div class="entry-content">

										<p class="fontsize_18">
											
											<?php
											echo $cd . "<br><br>" . "<b>START DATE:&nbsp;&nbsp;&nbsp;</b>" . $sd . "<br>" . "<b>END DATE:&nbsp;&nbsp;&nbsp;</b>" . $ed;
											?>
											
											
										</p>
										
										
									</div>
									<!-- .entry-content -->

									<div class="learndash_join_button topmargin_50 bottommargin_50">
										<form method="post">
											<input type="hidden" value="" name="course_id">
											<input type="hidden" name="course_join" value="">
											<input type="submit" name="takethiscourse" value="Take this Course" class="theme_button color2" id="btn-join">
										</form>
									</div>

								</div>
								<!-- .item-content -->

							</article>

						</div>
						<!--eof .col-sm-8 (main content)-->

						
					</div>
				</div>
			</section>
			<?php
			include "fotter.php";
			?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/starford/course-sample.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:25:29 GMT -->
</html>

<?php
if(isset($_POST["takethiscourse"]))
{
	if(!(isset($_SESSION['regno'])))
	{
		echo "<script type = 'text/javascript'>alert('Kindly Log In as Student to Enroll')</script>";
		echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
	}
	else
	{
		$regno = $_SESSION['regno'];
		
		$name = $_GET['cou'];
		$arr = array();

		$sql = $con->prepare("Select courses.course_code from courses where courses.course_name = ?");
		$sql->bind_param("s",$name);
		$sql->execute();
		$sql->bind_result($coursecode);
		while($sql->fetch()){
			$coursecode=$coursecode;
		}
		$enrollcode = $regno.$coursecode;
		$sql1 = $con->prepare("Insert into enroll(enroll_code,reg_no,course_code) values(?,?,?)");
		$sql1->bind_param("sss",$enrollcode,$regno,$coursecode);
		if($sql1->execute())
		{
			echo "<script type='text/javascript'>alert('Course Enrollment successful')</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Couldn't Enroll! Please Try Again.')";
		}
		
	}
}
?>