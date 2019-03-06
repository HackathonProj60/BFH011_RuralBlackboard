<?php
require 'studentSec.php';
if ($sus == 1) {
  require "config.php";
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

  <title>E-Portal - Profile</title>

  <!-- Bootstrap core CSS-->
  <link href="StudStyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="StudStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="StudStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="StudStyle/css/sb-admin.css" rel="stylesheet">
  <link href="StudStyle/css/accordion.css" rel="stylesheet">


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
  <li class="nav-item active">
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
      <li class="breadcrumb-item active">Profile</li>
    </ol>

    <!-- Page Content -->
    <?php
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
    <div class="card">
      <div class="card-header">
        <div class="container bootstrap snippet">

          <div class="row">
            <div class="col-xl-3 col-sm-3 mb-3"><!--left col-->
              <div class="text-center">
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
                    echo "<label for ='filebtn'><img src='StudStyle/img/p1.png' class='avatar img-circle img-thumbnail' alt='avatar'></label>";
                  }
                  else
                  {
                    echo "<label for ='filebtn'><img src='$img' class='avatar img-circle img-thumbnail' alt='avatar'></label>";
                  }

                  ?>
                  <!-- <img src="StudStyle/img/p1.png" class="avatar img-circle img-thumbnail" alt="avatar"> -->
                  <h5><?= $studname ?></h5>
                  <p>Click on image to Choose Picture</p>
                  <input type="file" accept="image/*" name = "fileImg" id = "filebtn" style="display:none;">
                  <input type="submit" name="sbmt" value="Upload" class="btn btn-primary btn-sm">
                </form>
              </div>
            </div>
            <div class="col-xl-9 col-sm-9 mb-9">
              <div class="custom-tab">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">My Course Progress</a>
                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Send Feedback</a>

                  </div>
                </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                   <div class="container">  
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
                          $Pscore[$sco] = ($score[$sco]/20)*100;
                          $sco++;
                        } 
                      }
                      ?>
                      <?php
                      for($i = 0; $i <$a;$i++)
                      { 
                        ?>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                               <?php echo $coursename[$i]; ?><i class="fas fa-fw fa-angle-right"></i><br><br>
                               <div class="progress mb-2">
                                <div class="progress-bar db-primary " role="progressbar" style="width: <?php echo  ceil($progress[$i]);?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo  ceil($progress[$i]);?>%</div>
                              </div>
                            </a>
                          </h4>
                        </div>
                        <div id="collapse<?= $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <?php 
                            $counter = $totalweek[$i] + $j;
                            $k=1;

                            while($j<$counter)
                              { ?>
                                <?php {echo "WEEK"." ".$k ; $k++; }?>
                                <div class="progress mb-2">
                                 <div class="progress-bar bg-dark " role="progressbar" style="width: <?php echo  $Pscore[$j];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo  $score[$j];?>/20</div>
                               </div>
                               <?php $j++; } ?>
                             </div>
                           </div>
                         </div>
                         <?php
                       } 
                       ?>
                     </div><!-- panel-group -->

                   </div>
                 </div>
                 <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                  <form method="post">
                    <center><br><input type="text" class="text-center" name="name" value="<?= $studname ?>" disabled=""><br><br>
                      <textarea class="form-control" placeholder="Enter your message." rows="5" name="message"></textarea><br>
                      <input type="submit" name="submit" value="Send" class="btn btn-primary btn-sm" >
                    </center>
                  </form>
                </div>
                <?php

                if(isset($_POST['submit']))
                {
                  //PHP_Mailer Code here
                }

                ?>
              </div>
            </div>

          </div>

        </div><!--/row-->



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
</div>
<!-- /.content-wrapper -->

</div>

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
<script src="StudStyle/js/accordion.js"></script>

</body>

</html>