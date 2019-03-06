<?php
require "staffSec.php";
if ($sus == 1) {
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
	<script src="jquery.js"></script>
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
											<a href="student.php">Home</a>
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
										<a href="about.html">Law</a>

									</li>
									<!-- eof features -->

									<li>
										<a href="about.html">Management</a>
									</li>

									<li>
										<a href="#">My Profile</a>
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
									<a href="logout.php" class="small-text medium">Logout</a>
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





		<section class="cs page_copyright section_padding_15 with_top_border_container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p ><span style="font-size:medium; color:white; text-align:right;">&copy;&nbsp;2018 Kristu Jayanti College (Autonomous), K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span>
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


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>
<?php
if(isset($_POST['update']))
{
	$oldpass = $_POST['oldpassword'];
	$newpass = $_POST['newpassword'];
	$cp = $_POST['cp'];
	$staffId = 1101;
	if ($newpass == $cp) {
		$query = mysqli_query($con,"select pass from staff_sec where staff_id='$staffId'");
		if($query && (mysqli_num_rows($query)>0))
		{
			$pass1 = mysqli_fetch_array($query);
			$pass = $pass1['pass'];
			if(password_verify($oldpass, $pass))
			{
				$new = password_hash( $newpass, PASSWORD_BCRYPT);
				$query = mysqli_query($con,"UPDATE `staff_sec` SET `pass`='$new' WHERE `staff_id`='$staffId';");
				if($query){
					echo "<script type='text/javascript'>alert('Password Changed')</script>";
					echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
				}else{
					echo "<script type='text/javascript'>alert('Failed to update Password')</script>";
				}
			}else{
				echo "<script type='text/javascript'>alert('current Password did not match')</script>";
			}             
		}else{
			echo "<script type='text/javascript'>alert('Staff not found')</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('New Password did not match')</script>";
	}
}

?>
