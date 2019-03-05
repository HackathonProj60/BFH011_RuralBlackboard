<?php 
require "studentSec.php";
if ($sus == 1) {
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
	<script src="jquery.js"></script>
	<script src="working.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>
<script>

	$(document).ready(function() {  

		$("#dept option").filter(function() {    
			return $(this).val() == $("#hiddenval").val(); 
		}).attr('selected', true);  



		$("#dept").on("change", function() {

			$("#hiddenval").val($(this).find("option:selected").attr("value"));


		});


		$("#dept2 option").filter(function() {    
			return $(this).val() == $("#hiddenval2").val(); 
		}).attr('selected', true);  



		$("#dept2").on("change", function() {

			$("#hiddenval2").val($(this).find("option:selected").attr("value"));


		});


	}); 



</script>
<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->



</script>
<div class="preloader">
	<div class="preloader_image"></div>
</div>


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
<?php
$regno = $_SESSION['regno'];

$sql = $con->prepare("Select stud_name from student where reg_no = ? ");
$sql->bind_param("s",$regno);

if($sql->execute()){
	$sql->bind_result($studname);

	while($sql->fetch()){
		$studname=$studname;
	}
}

?>
<section class="page_breadcrumbs cs texture_bg col-xs-12" style= "text-align:center;border:2px solid black;">
	
	<div class="container">
		<div class="row">
			<div>
				<p style="color:white;font-size:180%;margin:20px 0 0 0;"><b>Welcome <?php echo $studname; ?></b></p>
			</div>
		</div>
	</div>


	<br><br><br>
	<h2>SELECT COURSE </h2>
	<br><br><br>

	<?php



	$sql = "SELECT * FROM department";
	$result = mysqli_query($con,$sql);

	echo "<select name='dept2' style='color:orange;' id = 'dept2'><option selected disabled>DEPARTMENT</option>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
	}
	echo "</select>";
	?>

	<form method = "post">
		<input type = text id = "hiddenval2" name="myval2" style = "display:none;">
		<div class="topmargin_30">
			<input type="submit" id = "sbmt2" name = "sbmt2" class="theme_button color2" value = "Search course"></input>
		</div>
	</form>

	<?php 
	if(isset($_POST['sbmt2']))
	{
		if($_POST['myval2']!= "")
		{
			$deptname = $_POST['myval2'];
			$date = date('y-m-d');

			$query=$con->prepare("select courses.course_name from courses,department where department.dept_name= ? and courses.dept_id = department.dept_id and courses.end_date >= ? and courses.start_date <= ? ");
			$query->bind_param("sss",$deptname,$date,$date);
			
			if($query->execute()){
				$arr = array();

				$query->bind_result($course_name);
				$i=0;

				while ($query->fetch()) {
					$arr[$i]=$course_name;
					$i++;
				}
				$count2=$i;
			}
		}
	}
	?>

	<div class="container">
		<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">

			<?php
			if(isset($count2))
			{
				for($i=0;$i<$count2;$i++)
				{
					?>
					<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12" id = "<?php 'div'.$i ?>">

						<div class="mydiv teaser icon-background-teaser hoverable-banner before_cover text-center" style="border:2px solid white;" >
							<img src="images/download.png" style="width:180px;!important" alt="" class="icon-background">
							<h4 class="highlight2 topmargin_0" id = "myval">
								<?php if($arr[$i]!= "") {echo $arr[$i];} ?>
							</h4>
							<div class="media-links">
								<a href = "studCourse.php?cou=<?php echo $arr[$i];?>" class="abs-link"></a>
							</div>
						</div>

					</div>


					<?php
				}

			}
			?>

		</div>
	</div>
</section>

<section class="ls section_padding_100">
	<div class="container">

		<div class="row">
			<form method="GET" action="studentss.php">
				<?php
				$sql = "SELECT * from enroll,courses WHERE courses.course_code=enroll.course_code and enroll.reg_no='$regno'";
				$result = mysqli_query($con,$sql);

				echo "<select id = 'courseddl' class='country_to_state form-control' name='course'><option selected disabled>ENROLLED COURSES</option>";
				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='" . $row['course_code'] ."'>" . $row['course_name'] ."</option>";
				}
				echo "</select>";
				?>
				<input type="submit" name="submit" value="Study">
			</form>
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
<!-- fotter -->
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
<!-- Mirrored from webdesign-finder.com/html/starford/shortcodes_tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:23:15 GMT -->
</html>