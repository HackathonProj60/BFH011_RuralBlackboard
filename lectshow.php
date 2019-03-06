<?php
require 'adminSec.php';  
if ($sus == 1) {
 require 'config.php';
 require 'count.php';
 require 'studInfo.php';
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
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Portal - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="StudStyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="StudStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="StudStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="StudStyle/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="courses/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="courses/css/style.css"/>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
#displaythis
{
	display:none;
	margin-top:-40px;
}
</style>

<script>
$(document).ready(function(){
    $('#showthat').click(function() {
      $('#displaythis').toggle("slide");
    });
});
</script>

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
        
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="adminN.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
     
     
<li class="nav-item">
 <a class="nav-link" id = "showthat">
  <i class="fas fa-fw fa-bars"></i>
  <span>Services</span>
  </li>
                                      
                                        <ul id = "displaythis">
                                            <li>
                                                <a href="addteacher.php"  style="color:white;">Add Teachers</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="addcourseadmin.php">Add New Course</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="delcourse.php">Manage Course</a>
                                            </li>
                                           
                                            <li>
                                                <a style="color:white;" href="adddept.php">Add Department</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="deldept.php">Remove Department</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="delete.php">Delete Users</a>
                                            </li>
                                            <li>
                                                <a style="color:white;" href="updateadmin.php">Update Password</a>
                                            </li>
                                        </ul>
                                   
</a>
</li>

<li class="nav-item">
 <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
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

    <?php
    $date = date('y-m-d');
    $sql = $con->prepare("SELECT COUNT(id) AS tot FROM `courses` WHERE end_date >= ? AND start_date <= ?");
    $sql->bind_param("ss",$date,$date);
    if($sql->execute()){
      $sql->bind_result($Tcourse);

      while($sql->fetch()){
        $Tcor=$Tcourse;
      }
    }
    $sql->close();
    $sql = $con->prepare("SELECT COUNT(id) FROM enroll WHERE reg_no=? AND start_date<=? AND end_date>=?");
    $sql->bind_param("sss",$regno,$date,$date);
    if($sql->execute()){
      $sql->bind_result($Ecourse);

      while($sql->fetch()){
        $Ecor=$Ecourse;
      }
    }
    $sql->close();
    ?>
        <section class="course-section pb-0">
		
		<div class="course-warp">
			
			<ul class="course-filter controls">
			<p style="font-size:300%;text-align:center;"><b>LECTURE UPLOADS</b></p><br><br>
				
				
				
			</ul>                                       
			
				<?php 
				$coursename = array();
				$courseid = array();
				$startdate = array();
				$enddate = array();
				$description = array();
				$week = array();
				$author = array();
				$lect = array();
				$coursename[0] = 0;
				$courseid[0] = 0;
				$startdate[0] = 0;
				$enddate[0] = 0;
				$description[0] = 0;
				$week[0] = 0;
				$author[0] = 0;
				$lect[0] = 0;
				$i = 1;
				$query = mysqli_query($con,"select * from courses");
				$count = mysqli_num_rows($query);
				
				while($row = mysqli_fetch_row($query))
				{
					$courseid[$i] = $row[1];
					$tempcc = $courseid[$i];
					$startdate[$i] = $row[6];
					$enddate[$i] = $row[7];
					$description[$i] = $row[4];
					$coursename[$i] = $row[2];
					$week[$i] = $row[8];
					$author[$i] = $row[3];
					$query1 = mysqli_query($con,"select * from lecture where course_code = '$tempcc'");
					$query2 = mysqli_query($con,"select count(id) from enroll where course_code='$tempcc'");
					$counttt = mysqli_num_rows($query2);
					
					$count2 = mysqli_num_rows($query1);
					$lect[$i] = $count2;
					$i++;
				}
				
				
				?>
				
					
				<div class="row course-items-area">
			
				 <div class = "col-lg-12">
					
					<?php 
						for($i=1;$i<=$count;$i++)
						{
						?>
					<div class="mix col-lg-12">
					<div class="course-item">
						
						<div class="course-info">
							<div class="course-text">
							
								<h2><?php echo $coursename[$i]; ?></h2>
								<img src = "courses/img/courses/1.jpg" style="width:200px;height:200px;">
								<br>
					<div style="position:absolute;left:50%;">
								<div class="col-md-4 col-sm-6" style="float:right;">
									<div class="teaser text-center">
									<div class="teaser-icon size_big highlight2">
										
									</div>
									<h3 class="counter" data-from="0" data-to="<?= $courseNo ?>" data-speed="1100">0</h3>
									<p>Fail</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6" style="float:left;">
									<div class="teaser text-center">
									<div class="teaser-icon size_big highlight2">
										
									</div>
									<h3 class="counter" data-from="0" data-to="<?= $courseNo ?>" data-speed="1100">0</h3>
									<p>Pass</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6" style="float:right;">
									<div class="teaser text-center">
									<div class="teaser-icon size_big highlight2">
										
									</div>
									<h3 class="counter" data-from="0" data-to="<?= $courseNo ?>" data-speed="1100">0</h3>
									<p>Enrollment</p>
									</div>
								</div>
					</div>
								<p><b>Description:</b><?php echo $description[$i]; ?></p>
								<p><b>Start Date:</b><?php echo $startdate[$i]; ?></p>
								<p><b>End Date:</b><?php echo $enddate[$i];?></p>
								<p><b>Lectures:</b><?php echo $lect[$i]; ?></p>
								<p><b>Quiz:</b><?php echo $lect[$i]; ?></p>
								
							</div>
							
								<div class="course-author">
								<div class="ca-pic set-bg" style="background-image:url('courses/img/authors/1.jpg')"></div>
								
								<p> <span><?php echo $author[$i];?>
								</div>
						</div>
							
						</div>
					</div>
					<?php 
						}
						?>
					
					
					
				 
				</div>
			</div>
		</div>
				
			<br><br><br><br><br><br>
	</section>


	<section class ="spad">
	
	</section>

<!-- Fotter -->
</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>
