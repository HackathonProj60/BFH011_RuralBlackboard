<?php require 'nav.php'; ?>
<?php require 'config.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
<head>
	<title>OTP Verification</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

</style>
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
	<style type="text/css">
	.tblLogin {
		border: #95bee6 1px solid;
		background: #d1e8ff;
		border-radius: 4px;
		max-width: 300px;
		padding:20px 30px 30px;
		text-align:center;
	}
	.tableheader { font-size: 20px; }
	.tablerow { padding:20px; }
	.error_message {
		color: #b12d2d;
		background: #ffb5b5;
		border: #c76969 1px solid;
	}
	.login-input {
		border: #CCC 1px solid;
		padding: 10px 20px;
		border-radius:4px;
		background:white;
	}
	.tablerow { padding:20px; }
	.btnSubmit {
		padding: 10px 20px;
		background: #2c7ac5;
		border: #d1e8ff 1px solid;
		color: #FFF;
		border-radius:4px;
	}
</style>

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

												<form method = "post">

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
			<br>
			<center>
				<div>
					<form method = "post">
						<div class="tblLogin"> 
							<div class="tableheader">
							Mobile number</div>
							<div class="tablerow"><input type="text" class="login-input" style="text-align:center;background: white;" name="number" value = "<?= $_SESSION['phone'] ?>" disabled><br></div>
							<button class="btnSubmit" type="submit" name="submit">Send OTP</button><br>
							<div class="tableheader"><br>Enter otp:</div>
							<div class="tablerow"><input type="text" style="background: white;" name="uotp" class="login-input"><br></div>
							<div class="tableheader"><button class="btnSubmit" type="submit" name="verify">Verify OTP</button>
								<button class="btnSubmit" type="submit" name="incorrectph">Incorrect number</button></div>
							</div>
						</form>
					</div>
				</center>
				<br>
				<br>
				<section class="cs page_copyright section_padding_15 with_top_border_container">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<p><span style="font-size:medium; color:white; text-align:right;">&copy;&nbsp;2018 <a href="adminlog.html">Kristu Jayanti College (Autonomous)</a>, K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span>
								</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-top: 0px;margin-bottom: 5px;">
							<p><i>Developed By</i></p>
						</div>
						<div class="col-sm-12" style="margin-top: 0px;margin-bottom: 0px;">
							<a href="contributer.php"><img src="logo/logo1.png" class="img-fluid" style="display: block;width: 30%;margin-left: auto;margin-right: auto;"></a>
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


	<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
	</html>
	<?php
	$YourAPIKey='6dd951f8-004f-11e8-a328-0200cd936042';
	$SentTo=$_SESSION['phone'];
	if(isset($_POST["submit"]))
	{
		$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
		$url = "https://2factor.in/API/V1/$YourAPIKey/SMS/$SentTo/AUTOGEN";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		$json=curl_exec($ch);
		$obj=json_decode($json);
		curl_close($ch);
		if ($obj->{'Status'}=='Success') {
			$sesid=$obj->{'Details'};
			$_SESSION['otp']=$sesid;
			$susc=1;
			echo "<script type='text/javascript'>alert('OTP has been sent $SentTo !!!')</script>";
		}else{
			$susc=3;
			echo "<script type='text/javascript'>alert('Failed to send OTP!!!')</script>";
			session_unset();
			session_destroy();
			echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
		}
	}

	if(isset($_POST["verify"]))
	{
		$OTP=$_POST['uotp'];
		$sesid = $_SESSION['otp'];
		echo $OTP;
		### DO NOT Change anything below this line
		$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
		$url = "https://2factor.in/API/V1/$YourAPIKey/SMS/VERIFY/$sesid/$OTP";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		$json=curl_exec($ch);
		$obj=json_decode($json);
		curl_close($ch);
		if ($obj->{'Status'}=='Success') {
			echo "Success";
			$res=$obj->{'Details'};
			if ($res=='OTP Matched') {
				echo "Matched";
				$susc=2;
				echo "<script type='text/javascript'>alert('OTP Verified!!!')</script>";
				$reg = $_SESSION['regno'];
				$name = $_SESSION['name'];
				$dept = $_SESSION['dept'];
				$phone = $_SESSION['phone'];
				$email = $_SESSION['email'];
				//inserting into database
				$qry=$con->prepare("INSERT INTO `student`(`reg_no`, `stud_name`, `dept_id`, `phone`, `email`) VALUES (?, ?, ?, ?, ?);");
				$qry->bind_param("sssis",$reg,$name,$dept,$phone,$email);
				// $qry->execute();
				if($qry->execute())
				{
					echo "inserting data";
					$pass = password_hash( $_SESSION['pass'], PASSWORD_BCRYPT);
					$qry=$con->prepare("INSERT INTO `stud_sec`(`reg_no`, `pass`) VALUES (?, ?);");
					$qry->bind_param("ss",$reg,$pass);
					if ($qry->execute()) {
						echo "inserting pass";
						echo "<script type='text/javascript'>alert('Registeration Successful!!!')</script>";
						echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
					}else{
						echo "Failded to insert pass";
						$query =  mysqli_query($con,"Delete from student where regno = '$reg'");
						echo "<script type='text/javascript'>alert('SIGNUP FAILED!!!')</script>";
						echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
					}
				} else {
					echo "failed to insert data";
					echo "<script type='text/javascript'>alert('SIGNUP FAILED!!!')</script>";
					echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
				}

			}else{
				echo "mismatch";
				$susc=5;
				echo "<script type='text/javascript'>alert('OTP mismatch, Failded to Verify!!!')</script>";
				echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
			}
		}
	}

	if(isset($_POST['incorrectph'])){
		session_unset();
		session_destroy();
		echo "<script type='text/javascript'>window.location.assign('register.php')</script>";	
	}

	?>