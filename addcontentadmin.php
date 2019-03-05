<?php
require 'adminSec.php';
if($sus == 1){
	require 'nav.php'; 
	require 'config.php';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/starford/timetable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:23:45 GMT -->
<head>
	<title>ADD content</title>
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
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	

	<!-- Unyson messages modal -->
	
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<header class="page_header header_white">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="#" target="_blank"" target="_blank" class="logo top_logo">
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
											<a href="#">Science</a>
											
											<ul>
												<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPhysics  </a></b></li>
												<li class = "text-body " style="font-size: 1.4em"><b><a href = "#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspChemistry  </a></b></li>
												<li class = "text-body " style="font-size: 1.4em"><b><a href = "#">&nbsp&nbsp&nbsp&nbspMathematics  </a></b></li>	
												<li class = "text-body " style="font-size: 1.4em"><b><a href = "#">   Computer Science </a></b></li>									
												
										</ul>
										
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->
									<li>
										<a href="#">Arts</a>
										
									
									<!-- eof features -->
									<ul>
										<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHistory  </a></b></li>
										<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGeography  </a></b></li>
										<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPolitical Science  </a></b></li>

									</ul>
								</li>

									<li>
										<a href="#">Commerce</a>
									<ul>
										<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEconomics  </a></b></li>
										<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAccounts  </a></b></li>
										<li class = "text-body " style="font-size: 1.4em"><b><a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBusiness Studies  </a></b></li>

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



			<section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight2">Add Content</h2>
							
						</div>
					</div>
				</div>
			</section>
			

			<section class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">

					
					<div class="row">
						<div class="col-sm-12">
							
							DEPARTMENT: <select id="departmentddl"></select>
							COURSE NAME: <select id="courseddl"></select>
							
							<a href="student.php" target="_blank">	<button >Review</button>	</a>
							
							<div class="table-responsive">
								<table class="table_template darklinks" id="timetable">
									<thead>
										<tr>
											<th>&nbsp;&nbsp;&nbsp;Week&nbsp;&nbsp;&nbsp;</th>
											<th>Lecture1</th>
											<th>Lecture2</th>

											<th>Lecture3</th>
											<th>Lecture4</th>
											
											<th>Main Quiz/Assignment</th>
											<th></th>
											<th>SUBMISSIONS<th>
											</tr>
										</thead>
										<tbody>
											
											
											
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th> WEEK 1</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe1" style="display: none;">
														<input type="text" name="cour" id="cour1" style="display: none;">
														<input type="text" name="week" value="1" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week2</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													
													<td>
														<input type="text" name="depe" id="depe2" style="display: none;">
														<input type="text" name="cour" id="cour2" style="display: none;">
														<input type="text" name="week" value="2" style="display: none;">
													</td>
													
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week3</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe3" style="display: none;">
														<input type="text" name="cour" id="cour3" style="display: none;">
														<input type="text" name="week" value="3" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week4</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe4" style="display: none;">
														<input type="text" name="cour" id="cour4" style="display: none;">
														<input type="text" name="week" value="4" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week5</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe5" style="display: none;">
														<input type="text" name="cour" id="cour5" style="display: none;">
														<input type="text" name="week" value="5" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week6</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe6" style="display: none;">
														<input type="text" name="cour" id="cour6" style="display: none;">
														<input type="text" name="week" value="6" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week7</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe7" style="display: none;">
														<input type="text" name="cour" id="cour7" style="display: none;">
														<input type="text" name="week" value="7" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											<form action="file_uploadingadmin.php" method="POST" enctype="multipart/form-data">
												<tr>
													<th>Week8</th>
													<td>
														<a class="management">
															<input type="file" name="lecture1" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="meetings">
															<input type="file" name="lecture2" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="consultations">
															<input type="file" name="lecture3" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													<td>
														<a class="presentations">
															<input type="file" name="lecture4" placeholder="NO FILE" accept=".pdf,video/*">
														</a>
													</td>
													
													<td>
														<a class="management" href="question.php">
															Add Questions
														</a>
													</td>
													<td>
														<input type="text" name="depe" id="depe8" style="display: none;">
														<input type="text" name="cour" id="cour8" style="display: none;">
														<input type="text" name="week" value="8" style="display: none;">
													</td>
													<td>
														<button type="submit" name="submit">SUBMIT</button>
													</td>
												</tr>
											</form>
											

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="cs page_copyright section_padding_15 with_top_border_container">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<p><span style="font-size:medium; text-align:right;">&copy;&nbsp;Team BFH011</span>
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


	<!-- Mirrored from webdesign-finder.com/html/starford/timetable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:23:45 GMT -->
	</html>

