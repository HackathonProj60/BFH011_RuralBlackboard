<?php 
require "adminSec.php";
if ($sus == 1) {
  require 'config.php';
  require 'count.php';
 require 'adminDash.php';
 
  $admin_id = $_SESSION['adminid'];

  $sql = $con->prepare("Select admin_name from admin where admin_id = ? ");
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

  <title>E-Portal - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="StudStyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="StudStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="StudStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="StudStyle/css/sb-admin.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
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
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow" style="align-content: right;">
        
        
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
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <center><i class="fas fa-user-circle"></i>
          Welcome <?= $studname ?></center>
        </div>
      </div>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><br><center><?php echo $lect ?> Lecture Uploads</center><br></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="lectshow.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div></div>
        <div class="col-xl-6 col-sm-6 mb-6">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><br><center><?= $student ?> Students</center><br></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="stuprofile.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		
		<div class="col-xl-6 col-sm-6 mb-6">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><br><center><?= $staff ?> Teachers</center><br></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="myreportpage.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
			  <br>
            </a>
          </div>
        </div>
		<div><br></div>
		 <div class="col-xl-6 col-sm-6 mb-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><br><center> Reports</center><br></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="myreportpage.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
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
</div>


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



</body>

</html>