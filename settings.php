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

    <title>E-Portal - Settings</title>

    <!-- Bootstrap core CSS-->
    <link href="StudStyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="StudStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="StudStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="StudStyle/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <
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
        <li class="nav-item">
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
        <li class="nav-item active">
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
            <li class="breadcrumb-item active">Settings</li>
          </ol>

          <!-- Page Content -->
          <div class="card mb-6">
            <div class="card-header">

              <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" method="POST">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" name="oldpassword" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" name="newpassword" required="">
                                    <span class="form-text small text-muted">
                                            The password must be 8-20 characters.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Verify</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" name="cp" required="">
                                    <span class="form-text small text-muted">
                                            To confirm, type the new password again.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="update" class="btn btn-success btn-lg float-right">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card change password -->

              
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

  </body>

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
          echo "<script type='text/javascript'>window.location.assign('settings.php')</script>";
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