<?php
require 'studentSec.php';
if ($sus == 1) {
	require "nav.php";
require "config.php";
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
<style>

.img__wrap {
	position: relative;
	height: 200px;
	width: 257px;
}

.img__description {
	position: absolute;
	top: 0px;
	bottom: 0;
	left: 0px;
	right: 0;
	text-align:center;
	vertical-align:middle;
	background: rgba(29, 106, 154, 0.72);
	color: #fff;
	visibility: hidden;
	opacity: 0;

}

.img__wrap:hover .img__description {
	visibility: visible;
	opacity: 1;
}

.img__img
{
	width:257px;
	height:200px;
}
</style>
<script>

function showfunc(x)
{
	var subjid = x;
	var text = "prog";
	var show = text + subjid;
	
	document.getElementById(show).style.display = "block";
	
}

function hidefunc(y)
{
	var hideid = y;
	var text = "prog";
	var hide =  text + hideid;
	
	document.getElementById(hide).style.display = "none";
	
}
</script>
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
										<a href="#">Law</a>

									</li>
									<!-- eof features -->

									<li>
										<a href="#">Management</a>
									</li>

									<li>
										<a href="#">My Profile</a>
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
										<a href="logout.php" class="small-text medium">Logout</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>
			<?php
			$regno = $_SESSION['regno'];
			$sql = mysqli_query($con,"Select stud_name from student where reg_no = '$regno'");
			if($sql && (mysqli_num_rows($sql)>0))
			{
				$row = mysqli_fetch_array($sql);
				$studname = $row['stud_name'];	
			}





			if(isset($_POST['sbmt']))
			{

							//define file
				$fileImg=$_FILES['fileImg'];
				$fname = $regno;

							//values for Image 
				$fileImgName =$_FILES['fileImg']['name'];
				$fileImgTmpName=$_FILES['fileImg']['tmp_name'];
				$fileImgSize = $_FILES['fileImg']['size'];
				$fileImgError=$_FILES['fileImg']['error'];
				$fileImgType=$_FILES['fileImg']['type'];

							//getting extension of Image
				$fileExt=explode('.', $fileImgName);
				$fileActualExt=strtolower(end($fileExt));

							//Allowed extension
				$allowed = array('jpg','jpeg','png');
							//uploading Image
				if (in_array($fileActualExt,$allowed)) {
					if ($fileImgError===0) {
						if ($fileImgSize<51200) {
							$fielImgNameNew = $fname.".".$fileActualExt;
							$fileDestination = 'ProfilePic/'.$fielImgNameNew;
							move_uploaded_file($fileImgTmpName, $fileDestination);
							$q = mysqli_query($con,"Update student set img_path = '$fileDestination' where reg_no = '$regno'");
							if($q)
							{
								echo "<script type='text/javascript'>alert('Profile Pic Added Successfully')</script>";
								echo "<script type='text/javascript'>windows.href.assign('profile.php')</script>";
							}
							else
							{
								echo "<script type='text/javascript'>alert('Couldn't Update Profile Pic, please try again')</script>";
							}
						}else {
							echo "your file is too big!";
							$error=66;
						}
					}else {
						echo "There was an error uploading your file!";
						$error=66;
					}
				}else {
					echo "You cannot upload files of this type!";
					$error=66;
				}


			}
			?>
			<section class="cs parallax page_testimonials section_padding_top_100">
				<div class="container" >
					<div class="row">
						<div class="col-md-3">

							<div class="vertical-item content-absolute">
								<div class="item-media">
									<form method = "post" enctype = "multipart/form-data">
										<?php 
										$q = mysqli_query($con,"Select img_path from student where reg_no = '$regno'");
										if($q)
										{
											while($row = mysqli_fetch_assoc($q))
											{
												$img = $row['img_path'];

											}
										}
										if($img == "")
										{
											echo "<div><label for ='filebtn'><img src= 'images/team/01.png' alt='No image' ></img></label><p>Click on image to Choose Picture</p></div>";
										}
										else
										{
											echo "<div><label for ='filebtn'><img src= '$img' alt='No image'></img></label><p>Click on Image to choose Picture</p></div>";
										}

										?>
										<input type="file" accept="image/*" name = "fileImg" id = "filebtn" style="display:none;">
										<input type = "submit" name = "sbmt" value = "UPLOAD">
									</form>
								</div>
								<header class="gradient_bg_color cs">
									<div class="content-justify vertical-center">
										<h4 class="margin_0"><?= $studname ?></h4>
										
									</div>
								</header>
							</div>

						</div>
						

						<div class="col-md-7" >




							<!-- Nav tabs -->
							<ul class="nav nav-tabs topmargin_60" role="tablist">

								<li><a href="#tab2" role="tab" data-toggle="tab">My Course Progress</a></li>
								<li><a href="#tab3" role="tab" data-toggle="tab">Send Feedback</a></li>
								
								<li><a href = "studUpdate.php">Update Password</a></li>
							</ul>
							<?php 

							$query = mysqli_query($con,"select `enroll_code`,`course_code`,`week` from enroll where reg_no='$regno';");
							$progress = array();
							$coursename = array();
							$week = array();
							$totalweek =array();
							$cowee = array();
							$score = array();
							$sco=0;
							$i = 0;
							$a = 0;
							$j = 0;
							while ($row = mysqli_fetch_object($query)) 
							{
								$coursecode = $row->course_code;
								$week[$i] = $row->week;
								$enrollcode = $row->enroll_code;
								
								$sql = mysqli_query($con,"select week,course_name from courses where course_code = '$coursecode'");
								if($rowb = mysqli_fetch_object($sql))
								{
									$coursename[$i] = $rowb->course_name;
									$totalweek[$i] = $rowb->week;
								}
							
								$progress[$i] = ($week[$i]/$totalweek[$i])*100;
								$i++;
								$a++;
							
								
								$sqll = mysqli_query($con,"select week,score from result where enroll_code ='$enrollcode'");
										
											while($rowc = mysqli_fetch_object($sqll))
											{
										    $cowee[$sco] = $rowc->week;
											$score[$sco] = $rowc->score;
											$sco++;
											}
										
								
								
								
							}	
									
							
							
							?>
							<!-- Tab panes -->
							<div class="tab-content big-padding top-color-border bottommargin_60" style="color: white;">

								
								<div class="tab-pane fade" id="tab2">
									<?php

									for($i = 0; $i <$a;$i++)
									{ 
										?>
										<p class="progress-bar-title">
											<?php echo $coursename[$i]; ?>
										</p>
										<div class="progress">
											<div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo ceil($progress[$i]);?>">
												<span><?php echo  ceil($progress[$i]);?></span>
											</div>
											
										</div>
										<div style="display:none;" id = "<?php echo 'prog'.$i; ?>">
										<?php 
										$counter = $totalweek[$i] + $j;
										$k=1;
										
										while($j<$counter)
												{ ?>
									
										<p class="progress-bar-title">
										
											<?php {echo "WEEK"." ".$k ; $k++; }?>
										</p>
										<div class="progress">
											<div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $score[$j];?>">
												<span><?php echo  $score[$j];?></span>
											</div>
											
										</div>
									
										<?php $j++; } ?>
										</div>
									<center><img id = "<?php echo $i; ?>" src="images/dropdown.png" style="width:20px;height:30px;" onclick = "showfunc(this.id)" ondblclick = "hidefunc(this.id)"></img></center>
									
									
								<?php } ?>
								
								</div>

								<?php
								$q = mysqli_query($con,"select * from student where reg_no = '$regno'");
								if($q)
								{
									while($row = mysqli_fetch_object($q))
									{
										$name = $row -> stud_name;

									}
								}
								?>

								<div class="tab-pane fade" id="tab3">
									<form  method="post">
										
										
										<input type="text" size="30" name="name"  value = "<?php echo $name; ?>" disabled><br>
										<textarea class = "form-control" placeholder="Enter your message." rows = "5" name = "message"></textarea><br>
										<input type="submit" name="submit" value = "Send">
										
									</form>
								</div>



								
							</div>
						</div>
						<!-- eof .tab-content -->


					</div>
				</div>
			</section>
			<?php
			if(isset($_POST['submit']))
			{

				$msg = $_POST['message'];
				if($msg=="")
				{
					echo "<script type='text/javascript'>alert('No Message Found')</script>";
				}
				else
				{
					$q = mysqli_query($con,"Insert into feedback(name,message) values ('$name','$msg')");
					if($q)
					{
						echo "<script type='text/javasciprt'>alert('Thank you for your Feedback')</script>";
					}
					else
					{
						echo "<script type='text/javasciprt'>alert('Failure to Submit Feedback')</script>";
					}
				}
			}

			?>
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

								<form class="signup" action="http://www.kristujayanti.edu.in/" method="get">
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
