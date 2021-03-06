<?php 
require "studentSec.php";
if ($sus == 1) {
	require 'config.php';
	$regno = $_SESSION['regno'];

	$sql = $con->prepare("Select stud_name from student where reg_no = ? ");
	$sql->bind_param("s",$regno);

	if($sql->execute()){
		$sql->bind_result($studname);

		while($sql->fetch()){
			$studname=$studname;
		}
	}
	$sql->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>E-Portal - Courses</title>

	<!-- Bootstrap core CSS-->
	<link href="StudStyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="StudStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="StudStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="StudStyle/css/sb-admin.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="StudStyle/css/course.css">

		</head>

		<body id="page-top">

			<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

				

				<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
					<i class="fas fa-bars"></i>
				</button>

				<!-- Navbar Search -->
				<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>

				<!-- Navbar -->
				<ul class="navbar-nav ml-auto ml-md-0">
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user-circle fa-fw"></i> <?= $studname ?>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="studNprofile.php">Profile</a>
							<a class="dropdown-item" href="settings.php">Settings</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
						</div>
					</li>
				</ul>

			</nav>

			<div id="wrapper">

				<!-- Sidebar -->
				<ul class="sidebar navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="studentN.php">
							<i class="fas fa-fw fa-tachometer-alt"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="studNcourse.php">
							<i class="fas fa-fw fa-list"></i>
							<span>Courses</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="enroll.php">
							<i class="fas fa-fw fa-bell"></i>
							<span>Enrolled Courses</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="studNprofile.php">
							<i class="fas fa-fw fa-user-circle"></i>
							<span>Profile</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="settings.php">
							<i class="fas fa-fw fa-bars"></i>
							<span>Settings</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
							<i class="fas fa-fw fa-angle-right"></i>
							<span>Logout</span>
						</a>
					</li>
					<br>
					<br>
					<br>
					<br>
					<br>

					<li>
						<div>
							
						</div>
					</li>
				</ul>



				<div id="content-wrapper">

					<div class="container-fluid">
						<!-- Breadcrumbs-->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="studentN.php">Dashboard</a>
							</li>
							<li class="breadcrumb-item active">Courses</li>
						</ol>

						<?php
						require 'config.php';
						$coursesD = array();
						$c = 0;
						$date = date('y-m-d');
						$qry="SELECT department.dept_name,courses.course_name FROM department,courses WHERE department.dept_id=courses.dept_id AND courses.start_date<='$date' AND courses.end_date>='$date' ORDER BY department.dept_name";
						$sql=mysqli_query($con,$qry);
						if ($sql) {
							while ($res = mysqli_fetch_object($sql)) {
								$coursesD[$c][0] = $res->dept_name;
								$coursesD[$c][1] = $res->course_name;
								switch ($coursesD[$c][0]) {
									case 'COMMERCE':
									$coursesD[$c][2]='com';
									break;
									case 'COMPUTER SCIENCE':
									$coursesD[$c][2]='cs';
									break;
									case 'PSYCHOLOGY':
									$coursesD[$c][2]='psy';
									break;
									case 'LIFE SCIENCE':
									$coursesD[$c][2]='ls';
									break;
									case 'MANAGEMENT':
									$coursesD[$c][2]='man';
									break;
									default:
									$coursesD[$c][2]='';
									break;
								}
								$c++;
							}
						}
						?>


						<div class="card mb-6">
							<div class="card-header">
								<section class="portfolio-area" id="portfolio">
									<div class="container">
										<div class="filters">
											<nav id="nav-menu-container">
												<ul class="nav-menu">
													<li class="active" data-filter="*">All</li>
													<li data-filter=".com">Commerce</li>
													<li data-filter=".cs">Computer Science</li>
													<li data-filter=".psy">Psychology</li>
													<li data-filter=".ls">Life Science</li>
													<li data-filter=".man">Management</li>
												</ul>
											</nav>
										</div>

										<div class="filters-content">
											<div class="row grid">

												<?php
												for ($i=0; $i < $c; $i++) { 
													?>

													<div class="single-portfolio col-sm-4 all <?= $coursesD[$i][2] ?>">
														<div class="relative">
															<div class="thumb">
																<div class="overlay overlay-bg"></div>
																<center><img class="image img-fluid" src="StudStyle/img/p1.png" alt=""></center>
															</div>
															<a href="studCourse.php?cou=<?= $coursesD[$i][1] ?>">	
																<div class="middle">
																	<div class="text align-self-center d-flex"><img src="StudStyle/img/preview.png" alt=""></div>
																</div>
															</a>                              		
														</div>
														<div class="p-inner">
															<h5><?= $coursesD[$i][1] ?></h5>
															<div class="cat"><?= $coursesD[$i][0] ?></div>
														</div>					                               
													</div>

													<?php
												}
												?>

											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Sticky Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright © <a href="https://Kristujayanti.edu.in">Kristu jayanti</a> 2019</span>
					</div>
				</div>
			</footer>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabstudentN="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="StudStyle/vendor/jquery/jquery.min.js"></script>
	<script src="StudStyle/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="StudStyle/vendor/jquery-easing/jquery.easing.min.js"></script>



	<!-- Custom scripts for all pages-->
	<script src="StudStyle/js/sb-admin.min.js"></script>
	
	<!-- scripts for Course selection-->
	<script src="StudStyle/js/jquery-2.2.4.min.js"></script>
	<script src="StudStyle/js/jquery.magnific-popup.min.js"></script>	
	<script src="StudStyle/js/isotope.pkgd.min.js"></script>			
	<script src="StudStyle/js/simple-skillbar.js"></script>							
	<script src="StudStyle/js/main.js"></script>	


</body>
</html>
