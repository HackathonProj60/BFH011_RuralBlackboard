<?PhP
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


<!-- Mirrored from webdesign-finder.com/html/starford/shop-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:24 GMT -->
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="jquery.js"></script>
	<script src="working.js"></script>

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


			<section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight2">Registration</h2>

						</div>
					</div>
				</div>
			</section>


			<section class="ls ms section_padding_top_100 section_padding_bottom_100">
				<div class="container">

					<div class="row">

						<form class="shop-register" role="form" method = "post" >

							<div class="col-sm-6">
								<div class="form-group validate-required" id="billing_first_name_field">
									<label for="billing_first_name" class="control-label">
										<span class="grey">Name:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="name" id="billing_first_name" placeholder="" required>
								</div>

								<div class="form-group" id="billing_company_field">
									<label for="billing_company" class="control-label">
										<span class="grey">Department:</span>
									</label>

									<select class="form-control " name="dept" id="departmentddl" required>

									</select>

								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group validate-required" id="billing_last_name_field">
									<label for="billing_last_name" class="control-label">
										<span class="grey">Register No:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="regno" id="billing_last_name" placeholder="" required>

								</div>

								<div class="form-group validate-required validate-email" id="billing_email_field">
									<label for="billing_email" class="control-label">
										<span class="grey">Email Address:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " name="email" id="billing_email" placeholder="regno@kristujayanti.com" pattern="^[1-9]{2}[a-zA-z]{2}[1,2]{1}[a,h,k,A,H,K]{1}[0-9]{3,4}[@]{1}[k]{1}[r]{1}[i]{1}[s]{1}[t]{1}[u]{1}[j]{1}[a]{1}[y]{1}[a]{1}[n]{1}[t]{1}[i]{1}[.]{1}[c]{1}[o]{1}[m]{1}" required>

								</div>

							</div>

							<div class="form-group validate-required validate-phone col-sm-6" id="phone_field">
								<label for="billing_phone" class="control-label">
									<span class="grey">Phone:</span>
									<span class="required">*</span>
								</label>

								<input type="text" class="form-control " name="phone" id="billing_phone" placeholder="" required>

							</div>


							<div class="form-group col-sm-6" id="password_field">
								<label for="billing_password" class="control-label">
									<span class="grey">Password:</span>
									<span class="required">*</span>
								</label>

								<input type="password" class="form-control " name="password" id="billing_password" placeholder="Greater than 8 characters" required>

							</div>



							<div class="form-group col-sm-6" id="billing_password2_field">
								<label for="billing_password2" class="control-label">
									<span class="grey">Confirm Password:</span>
									<span class="required">*</span>
								</label>

								<input type="password" class="form-control " name="password2" id="billing_password2" placeholder="Greater than 8 characters" required>

							</div>

							<div class="g-recaptcha form-group col-sm-6" data-sitekey="6LcIW38UAAAAAIhlbKJQoIdAUNLEYunxGLU9drEa"></div>


						</div>

						<div class="col-sm-12">

							<button type="submit" class="theme_button wide_button color1 topmargin_40" name="register">Register Now</button>
							<button type="reset" class="theme_button wide_button">Clear Form</button>

						</div>
					</form>
					<?php
					require "config.php";
					if(isset($_POST['register']))
					{

										if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))//changed
										{
											$captcha=$_POST['g-recaptcha-response'];

											if(!$captcha){
												echo "<script type='text/javascript'>alert('Click on Captcha')</script>";
												exit;
											}
											$secretKey = "6LcIW38UAAAAAN1gEa7OitHqIG9TZ_s7n_zM9us3";
											$ip = $_SERVER['REMOTE_ADDR'];
											$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
											$responseKeys = json_decode($response,true);
											if(intval($responseKeys["success"]) !== 1) {
												echo "<script type='text/javascript'>alert('Click on Captcha')</script>";
											}
											$password=$_POST['password'];
											$confirmpassword=$_POST['password2'];
											$name=$_POST['name'];
											$dept=$_POST['dept'];
											$regno=$_POST['regno'];
											$phone=$_POST['phone'];
											$email=$_POST['email'];
											if(($password==$confirmpassword) and (strlen($password)>8)){
												//echo "Matched";
												$query = mysqli_query($con,"select * from record where reg_no='$regno' ;");
												if($query && (mysqli_num_rows($query)>0)){
													//echo "Record Found";
													$query = mysqli_query($con,"select * from student where reg_no='$regno' ;");
													if($query && (mysqli_num_rows($query)>0)){
														//echo "exist";
														echo "<script type = 'text/javascript'>alert('User already exists')</script>";
													}
													else
													{
														//echo "Registering";
														$_SESSION['name'] = $name;
														$_SESSION['dept'] = $dept;
														$_SESSION['regno'] = $regno;
														$_SESSION['phone'] = $phone;
														$_SESSION['email'] = $email;
														$_SESSION['pass'] = $password;
														echo "<script type='text/javascript'>window.location.assign('otp.php')</script>";
													}
												}else{
													echo "<script type = 'text/javascript'>alert('User record does not exist with college')</script>";
												}

											}else{
												echo "<script type = 'text/javascript'>alert('Password did not match or less than ')</script>";
											} 
										}else{
											echo "<script type='text/javascript'>alert('Click on Captcha')</script>";
										}

									}
									?>

								</div>
							</div>
						</section>

						<footer class="ls section_padding_top_100 section_padding_bottom_100">
							<div class="container">
								<div class="row">
									<div class="col-md-3 col-sm-6 text-center text-sm-left">
										<div class="widget widget_text">
											<a href="index.html" class="logo vertical_logo">
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
												<i class="fa fa-envelope fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> ##@kristujayanti.com
											</p>
											<p>
												<i class="fa fa-phone fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> (080)2###5611,&nbsp;(080)2###5770,&nbsp;(080)284###53
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
													<input name="email" type="email" id="mailchimp" class="mailchimp_email form-control" placeholder="Emai Address" pattern="^[1-9]{2}[a-zA-z]{2}[1,2]{1}[a,h,k,A,H,K]{1}[0-9]{3,4}[@]{1}[k]{1}[r]{1}[i]{1}[s]{1}[t]{1}[u]{1}[j]{1}[a]{1}[y]{1}[a]{1}[n]{1}[t]{1}[i]{1}[.]{1}[c]{1}[o]{1}[m]{1}">
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
										<p>
											<span style="font-size:medium; text-align:right;">&copy;&nbsp;2018 Kristu Jayanti College (Autonomous), K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span>
										</p>
									</div>
									<div class="col-sm-12 text-center" style="margin-top: 0px;margin-bottom: 5px;">
							<p><i>Developed By BFH011</p>
						</div>
						<
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


			<!-- Mirrored from webdesign-finder.com/html/starford/shop-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:24 GMT -->
			</html>