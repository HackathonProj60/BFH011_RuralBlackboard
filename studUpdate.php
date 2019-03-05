<?php
require "studentSec.php";
if ($sus = 1) {
	require "config.php";
	require "nav.php";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<script>


</script>
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
	<?php
	$regno = $_SESSION['regno'];
	?>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	

	<!-- Unyson messages modal -->
	
	<!-- eof .modal -->
	<div id="canvas">
		<div id="box_wrapper">


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
							<h2 class="highlight2">Password Update</h2>

						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container ">
					<div class="row">      
						<form class="shop-register" method="POST">
							<div class="col-sm-12">
								<div class="shipping-calculator-form with_padding with_border color_border">
									<h3 class="topmargin_0 text-center">Password Update</h3>
									<p>Fill the details below</p>

									<div class="form-group col-sm-6">
										<input type="text" class="form-control" value="" placeholder="Old Password" name="oldpassword" id="email">
									</div>

									<div class="form-group col-sm-6">
										<input type="text" class="form-control" value="" placeholder="New Password" name="newpassword" id="name">
									</div>


									<div class="form-group col-sm-6">
										<input type="text" class="form-control" value="" placeholder="Confirm Password" name="cp" id="name">
									</div>

									<div >
										&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" class="theme_button color2" value="Update"></input>
										&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" name="calc_shipping" class="theme_button color2 ">clear</button>


									</div>
								</div>
							</div>
						</form>
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
								<i class="fa fa-map-marker fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> ######
							</p>
							<p>
								<i class="fa fa-envelope fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> ****@###.com
							</p>
							<p>
								<i class="fa fa-phone fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> (080)20265##*,&nbsp;(080)2**657##,&nbsp;(080)***6##53
							</p>
							<p class="greylinks">
								<i class="fa fa-internet-explorer fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> <a href="#">########</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 text-center text-sm-left">
						<div class="widget widget_twitter">
							<h4 class="widget-title">Connect With Us</h4>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="https://www.facebook.com/#" target="_blank"><i style="font-size:20px;" class="fa fa-facebook highlight2 rightpadding_10" ></i></a>&nbsp;&nbsp;
							<a href="https://www.youtube.com/user/#" target="_blank"><i style="font-size:20px;" class="fa fa-youtube highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://twitter.com/#" target="_blank"><i style="font-size:20px;" class="fa fa-twitter highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
							<a href="https://in.linkedin.com/in/#" target="_blank"><i style="font-size:20px;" class="fa fa-linkedin highlight2 rightpadding_10"></i></a>

						</div>
					</div>
					
				</div>
			</div>
		</footer>




		<section class="cs page_copyright section_padding_15 with_top_border_container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" style="margin-bottom: 5px;">
						
					</div>
					<div class="col-sm-12 text-center" style="margin-top: 0px;margin-bottom: 5px;">
						<p><i>Developed By</i></p>
					</div>
					<div class="col-sm-12" style="margin-top: 0px;margin-bottom: 0px;">
						<a href="contributer.php"><p style="font-size: 3em;font-weight: bold;text-align: center">BFH011</p></a>
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
	<!-- checking of current password with ajax -->
	<!-- <script type="text/javascript">
		function current(old){

		}
		$(document).ready(function(){
			$('#email').change(function(){
				var x=$('#email').val();
				current(x);
			});
		});
	</script> -->

</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>
<?php
if(isset($_POST['update']))
{
	$oldpass = $_POST['oldpassword'];
	$newpass = $_POST['newpassword'];
	$cp = $_POST['cp'];
	if ($newpass == $cp) {
		$query = mysqli_query($con,"select pass from stud_sec where reg_no='$regno'");
		if($query && (mysqli_num_rows($query)>0))
		{
			$pass1 = mysqli_fetch_array($query);
			$pass = $pass1['pass'];
			if(password_verify($oldpass, $pass))
			{
				$new = password_hash( $newpass, PASSWORD_BCRYPT);
				$query = mysqli_query($con,"UPDATE `stud_sec` SET `pass`='$new' WHERE `reg_no`='$regno';");
				if($query){
					echo "<script type='text/javascript'>alert('Password Changed')</script>";
					echo "<script type='text/javascript'>window.location.assign('profile.php')</script>";
				}else{
					echo "<script type='text/javascript'>alert('Failed to update Password')</script>";
				}
			}else{
				echo "<script type='text/javascript'>alert('current Password did not match')</script>";
			}             
		}else{
			echo "<script type='text/javascript'>alert('Student Not Found')</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('New Password did not match')</script>";
	}
}
?>
