<?php
require 'adminSec.php';  
if ($sus == 1) {
 require 'config.php';
 require 'count.php';
 require 'studInfo.php';
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:300px;
  height:400px;
  margin: 50px;
  
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
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
      

        <div class="col-xl-6 col-sm-6 mb-6">
          
              
		  <h2 style="text-align:center">User Profile Card</h2>
            <?php
            for ($i=0; $i < $studCount; $i++) { 
                ?>
                

  <div style="display:block;">
<div class="card">

  <center><img src="<?php echo $img[$i];?>" alt="Image not uploaded" style="width:auto;"></center>
  <p style="letter-spacing:0.2px;"> <b>NAME:</b> <?php echo $name[$i];?></p>
  <p style="letter-spacing:0.2px;"> <b>DEPARTMENT:</b> <?php echo $Dname[$i];?></p>
  <p style="letter-spacing:0.2px;"> <b>PHONE NUMBER:</b> <?php echo $phone[$i];?></p>
  <p style="letter-spacing:0.2px;"> <b>REGISTER NUMBER:</b> <?php echo $reg[$i];?></p>
  <p style="letter-spacing:0.2px;"> <b>EMAIL:</b> <?php echo $mail[$i];?></p>
  <p style="letter-spacing:0.2px;"> <b>TOTAL ENROLLED COURSES:</b> <?php echo $total[$i];?></p>
  <form method="POST" action="adminviewstu.php">
  <input type="text" style="display:none;" name = "regno" value ="<?php echo $reg[$i]?>">
   <p><button>VIEW PERFORMANCE</button></p>
</form>
</div>
</div>




<?php
}
?>




<!-- Fotter -->

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



<!-- eof #canvas -->
<script src="js/compressed.js"></script>
<script src="js/main.js"></script>
<!-- <script src="js/switcher.js"></script> -->

<!-- <script type="text/javascript" src="js/loader.js"></script> -->
</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>
