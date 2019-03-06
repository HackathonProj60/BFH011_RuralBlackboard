<?php 

session_start();
require "nav.php";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<script src="jquery.js"></script>
<script type="text/javascript" src="working.js"></script>

<!-- Mirrored from webdesign-finder.com/html/starford/shortcodes_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:56 GMT -->
<head>
	<title>Student Interface</title>
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



</script>
<div class="preloader">
	<div class="preloader_image"></div>
</div>

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
<section class="page_breadcrumbs cs section_padding_top_50 section_padding_bottom_50 texture_bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center text-md-left display_table_md">
				<h2 class="small display_table_cell_md" >Welcome Student</h2>

			</div>
		</div>
	</div>
</section>
<h1 style="background:white;color:black;margin:0;text-align:center;">FIND YOUR COURSE </h1>
<iframe src = "courseshow.php" style ="border:5px solid black;height:400px;width:1380px;">
</iframe>
<section class="ls section_padding_100">
	<div class="container">

		<div class="row">
			<?php
			$con = mysqli_connect("localhost", "root", "");
			mysqli_select_db($con,"e-portal");
			$regno = $_SESSION['regno1'];
			$sql = "SELECT * from enrollment,course WHERE course.course_code=enrollment.Cid and enrollment.Regno='$regno'";
			$result = mysqlI_query($con,$sql);

			echo "<select id = 'courseddl' class='country_to_state form-control' ><option selected disabled>ENROLLED COURSES</option>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<option value='" . $row['course_code'] ."'>" . $row['course_name'] ."</option>";
			}
			echo "</select>";
			?>
			<div class="row">

				<div class="col-md-8">

					<div class="row">
						<div class="col-md-12">
							<h3>LECTURE:</h3>
						</div>
					</div>
					<form id="weekSel">
						<div class = "weekdiv">
							<ul id = "weekul" style = "display:inline-block;">
								<li id="li1" style="list-style-type:none; display: none;"><input id="week1" type="radio" value="1" name = "week"><label for = "week1" ><b>Week1</b></label></li>
								<li id="li2" style="list-style-type:none; display: none;"><input id="week2" type="radio" value="2" name = "week"><label for = "week2" ><b>Week2</b></label></li>
								<li id="li3" style="list-style-type:none; display: none;"><input id="week3" type="radio" value="3" name = "week"><label for = "week3" ><b>Week3</b></label></li>
								<li id="li4" style="list-style-type:none; display: none;"><input id="week4" type="radio" value="4" name = "week"><label for = "week4" ><b>Week4</b></label></li>
								<li id="li5" style="list-style-type:none; display: none;"><input id="week5" type="radio" value="5" name = "week"><label for = "week5" ><b>Week5</b></label></li>
								<li id="li6" style="list-style-type:none; display: none;"><input id="week6" type="radio" value="6" name = "week"><label for = "week6" ><b>Week6</b></label></li>
								<li id="li7" style="list-style-type:none; display: none;"><input id="week7" type="radio" value="7" name = "week"><label for = "week7" ><b>Week7</b></label></li>
								<li id="li8" style="list-style-type:none; display: none;"><input id="week8" type="radio" value="8" name = "week"><label for = "week8" ><b>Week8</b></label></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			<!--.row-->
			<div class="row">
				<div class="col-md-12">
					<div class="row vertical-tabs">
						<div class="col-sm-4">
							<ul class="nav" role="tablist">
								<div class = "weekdiv" style="display: none;">
									<form id="lecSel" action = "quiz.php">
										<li class="active">
											<label for = "l1">
												<input id = "l1" type="radio" name="lecture" value="1"><i class="rt-icon2-book"></i>Lecture1
											</label>
										</li>
										<li>
											<label>
												<input type="radio" name="lecture" value="2"><i class="rt-icon2-book"></i>Lecture2
											</label>
										</li>
										
										<li>
											<label>
												<input type="radio" name="lecture" value="3"><i class="rt-icon2-book"></i>Lecture3
											</label>
										</li>
										<li>
											<label>
												<input type="radio" name="lecture" value="4"><i class="rt-icon2-book"></i>Lecture4
											</label>
										</li>
										
										<li>
											<button name="quiz" type="submit" id="submit" >Give Quiz</button>
										</li>
										<input type="text" name="course" id="course" style="display:none;">
										<input type="text" name="week1" id="text1" style="display:none;">
										
									</form>
									<input type="text" name="lec1" id="text2" style="display:none;">
									<input type="text" name="path" id="path" style="display:none;">
									<center>
										<iframe id="fram" width="500" height="480" border = "2px solid black;">File not Found</iframe>
									</center>
								</div>	
							</ul>	
						</div>
					</div>
				</div>
			</div>
			<!-- .panel-group -->
		</div>
	</div>
</section>
<footer class="ls section_padding_top_100 section_padding_bottom_100">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 text-center text-sm-left">
				<div class="widget widget_text">
					<a href="#" class="logo vertical_logo">
						<img src="images/logo2.png" alt="">
					</a>
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
<section class="cs page_copyright section_padding_15 with_top_border_container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p><span style="font-size:medium; color:white; text-align:right;">&copy;&nbsp;2018 <a href="adminlog.html">Kristu Jayanti College (Autonomous)</a>, K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span>
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
<!-- Mirrored from webdesign-finder.com/html/starford/shortcodes_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:23:15 GMT -->
</html>