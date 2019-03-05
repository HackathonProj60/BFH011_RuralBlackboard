<?php
require 'adminSec.php';
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

	<!-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

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
										<a href="adminhome.php">Home</a>
									</li>
									<li>
										<a href="#">Services</a>
										<ul>
											<li>
												<a href="addcourseadmin.php">Add New Course</a>
											</li>
											<li>
												<a href="delcourse.php">Manage Course</a>
											</li>
											<li>
												<a href="courseselectaddad.php">Add Notes</a>
											</li>
											<li>
												<a href="adddept.php">Add Department</a>
											</li>
											<li>
												<a href="deldept.php">Remove Department</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="reportadmin.php">Report</a>
									</li>
									<li>
										<a href="logout.php">LOGOUT</a>
									</li>
								</ul>
							</nav>
							<!-- eof main side nav -->
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
			<section class="ls section_padding_top_100">
				<div class="container ">
					<div class="row">   
						<form class="shop-register" role="form" id = "addcourse" method="post">								
							<div class="col-sm-12">
								<div class="shipping-calculator-form with_padding color_border">
									<h3 class="text-center" style="margin-top:-100px;">Add New Course</h3>
									<p>Fill the below details</p>
									<div class="form-group col-sm-6">

										<?php
										$sql = "SELECT * FROM department";
										$result = mysqli_query($con,$sql);
										echo "<select name='dept' class='country_to_state form-control' ><option selected disabled>DEPARTMENT</option>";
										while ($row = mysqli_fetch_array($result)) {
											echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
										}
										echo "</select>";
										?>
									</div>
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" placeholder="Course Id" name="cid" id="calc_shipping_postcode" required>
									</div>

									<div class="form-group col-sm-6">
										<input type="text" class="form-control" placeholder=" Course Name" name="cn" id="calc_shipping_postcode" required>
									</div>
									<div class="form-group col-sm-6">
										<input type="number" class="form-control" placeholder=" Course Period" name="cl" id="calc_shipping_postcode" required>
									</div>
									<div class="form-group col-sm-12">
										<textarea class = "form-control" placeholder="Course Description." form = "addcourse" rows = "5" name = "desc" required></textarea>
									</div>
									<div class="form-group col-sm-12">
										<b>Enroll Period</b>
									</div>
									<div class="form-group col-sm-6">
										START DATE: <input type="date" class="form-control"  value="<?php date_default_timezone_set('Asia/Kolkata');echo date('Y-m-d'); ?>" name="strtdt" id="calc_shipping_state">
									</div>
									<div class="form-group col-sm-6">
										END DATE: <input type="date" class="form-control" name="enddt" id="calc_shipping_state" required>
									</div>
									<div class="form-group col-sm-12">
										<input type="date" class="form-control" id="calc_shipping_state" style="visibility: hidden;">
									</div>
									<center>
										<input type="submit" name="submit" class="theme_button color2" value = "ADD">
										&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="reset" name="calc_shipping" class="theme_button color2">CLEAR</button>
									</center>
									<br>
									<center>
										<a href="restorecourseselect.php">
											<button type="button" name='restore' class="theme_button color4"> Restore a Course </button>
										</a>
									</center>
								</div>
							</div>
						</form>
						<?php
						if(isset($_POST['submit']))
						{

							$department = $_POST['dept'];
							$courseid = $_POST['cid'];
							$coursename = $_POST['cn'];
							$date1 = $_POST['strtdt'];
							$date2= $_POST['enddt'];
							$courseLength=$_POST['cl'];
							$description = $_POST['desc'];

							$query = $con->prepare("Select dept_id from department where dept_name = ?");
							$query->bind_param("s",$department);
							if($query->execute())
							{
								$query->bind_result($dept);
								while($query->fetch())
								{
									$deptid = $dept;
								}

								$qry=$con->prepare('INSERT INTO `courses` (`course_code`,`course_name`,`course_desc`,`start_date`,`end_date`,`week`,`dept_id`)values(?,?,?,?,?,?,?)');
								$qry->bind_param("sssssis",$courseid,$coursename,$description,$date1,$date2,$courseLength,$deptid);


								if($qry->execute())
								{
									echo "<script type = 'text/javascript'>alert('Course created succsessfully')</script>";
								}
								else
								{
									echo "<script type = 'text/javascript'>alert('Course Creation failed')</script>";
								}
							}
							else
							{
								echo "<script type = 'text/javascript'>alert('Department not Found')</script>";
							}
						}
						?>
					</div>
				</div>
			</section>

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


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>