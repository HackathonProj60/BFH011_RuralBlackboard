<?php
require 'adminSec.php';  
if ($sus == 1) {
 require 'config.php';
 require 'count.php';
 require 'adminDash.php';
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
    <link href="dash/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dash/css/component.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dash/css/export.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dash/css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dash/css/circles.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dash/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dash/css/style1.css" rel="stylesheet" type="text/css" media="all" />

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
                                        <a href="#">Home</a>
                                    </li>


                                    <li>
                                        <a href="#">Services</a>
                                        <ul>
                                            <li>
                                                <a href="addteacher.php">Add Teachers</a>
                                            </li>
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
                                                <a href="reportadmin.php"> View Report</a>
                                            </li>
                                            <li>
                                                <a href="adddept.php">Add Department</a>
                                            </li>
                                            <li>
                                                <a href="deldept.php">Remove Department</a>
                                            </li>
                                            <li>
                                                <a href="delete.php">Delete Users</a>
                                            </li>
                                            <li>
                                                <a href="updateadmin.php">Update Password</a>
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
                        <div>

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
            <section class="cs parallax page_features section_padding_top_130 section_padding_bottom_100 columns_margin_bottom_30 container_padding_0 fluid_padding_0"
            <!-- /innercontent -->
            <div class="inner_content" style="margin-left: 180px;">
                <!-- /inner_content_w3_agile_info-->
                <div class="inner_content_w3_agile_info">
                   <!-- /agile_top_w3_grids-->
                   <div class="agile_top_w3_grids ">
                     <ul class="ca-menu">
                       <li style="width:27%;">
                          <a href="adcoursereport.php">

                             <i class="fa fa-file" aria-hidden="true"></i>
                             <div class="ca-content">

                                <h4 class="ca-main one"style="color: black;" ><?= $courseNo ?></h4>
                                <h3 class="ca-sub ">Total No of Courses</h3>
                            </div>
                        </a>
                    </li>

                    <li style="width:27%;">
                      <a href="stuprofile.php">
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                        <i class="fa fa-user"></i>
                        <div class="ca-content">
                            <h4 class="ca-main one"style="color: black;"><?= $student ?></h4>
                            <h3 class="ca-sub one">Total No of Students Enrolled</h3>
                        </div>
                    </a>
                </li>  
                <li style="width:27%;">
                  <a href="#">
                     <i class="fa fa-group" aria-hidden="true"></i>   
                     <div class="ca-content">
                         <h4 class="ca-main two"style="color: black;"><?= $staff ?></h4>
                         <h3 class="ca-sub two">No of Teachers</h3>
                     </div>
                 </a>
             </li>  


             <div class="clearfix"></div>
         </ul>
     </div>
 </div>
</div>
</section>
<section class="ls section_padding_100">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="divider_40">Popular Courses</h2>
            </div>

            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="chart" data-size="250" data-percent="<?= $per[0] ?>" data-line="10" data-bgcolor="#e7e7e7" data-trackcolor="#f4a115" data-speed="3200">
                        <div class="chart-meta">
                            <strong class="percent grey"><?= $per[0] ?></strong>
                            <h4 class="text-uppercase thin"><?= $Cname[0] ?></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="chart" data-size="250" data-percent="<?= $per[1] ?>" data-line="10" data-bgcolor="#e7e7e7" data-trackcolor="#f08521" data-speed="4800">
                        <div class="chart-meta">
                            <strong class="percent grey"><?= $per[1] ?></strong>
                            <h4 class="text-uppercase thin"><?= $Cname[1] ?></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="chart" data-size="250" data-percent="<?= $per[2] ?>" data-line="10" data-bgcolor="#e7e7e7" data-trackcolor="#e84b3a" data-speed="4100">
                        <div class="chart-meta">
                            <strong class="percent grey"><?= $per[2] ?></strong>
                            <h4 class="text-uppercase thin"><?= $Cname[2] ?></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_100">
    <div class="container" style="display: show;">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="divider_40">Student Performance</h2>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="chart" data-size="250" data-percent="<?= $perpass ?>" data-line="10" data-bgcolor="#e7e7e7" data-trackcolor="#f4a115" data-speed="3200">
                        <div class="chart-meta">
                            <strong class="percent grey"><?= $perpass ?></strong>
                            <h4 class="text-uppercase thin">Pass</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="chart" data-size="250" data-percent="<?= $perfail ?>" data-line="10" data-bgcolor="#e7e7e7" data-trackcolor="#f08521" data-speed="4800">
                        <div class="chart-meta">
                            <strong class="percent grey"><?= $perfail ?></strong>
                            <h4 class="text-uppercase thin">Fail</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer class="ls section_padding_top_100 section_padding_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center text-sm-left">
                        <div class="widget widget_text">
                            
                            <img src="images/logo2.png" alt="">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-center text-sm-left">
                        <div class="widget widget_text">
                            <h4 class="widget-title">Contact Us</h4>
                            <p >
                                <i class="fa fa-map-marker fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> ######
                            </p>
                            <p>
                                <i class="fa fa-envelope fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> ****@###.com
                            </p>
                            <p>
                                <i class="fa fa-phone fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> (080)20265##*,&nbsp;(080)2**657##,&nbsp;(080)***6##53
                            </p>
                            <p class="greylinks">
                                <i class="fa fa-internet-explorer fontsize_18 highlight2 rightpadding_10" aria-hidden="true"></i> <a href="#">########</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 text-center text-sm-left">
                        <div class="widget widget_twitter">
                            <h4 class="widget-title">Connect With Us</h4>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://www.facebook.com/#" target="_blank"><i style="font-size:20px;" class="fa fa-facebook highlight2 rightpadding_10" ></i></a>&nbsp;&nbsp;
                            <a href="https://www.youtube.com/user/#" target="_blank"><i style="font-size:20px;" class="fa fa-youtube highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
                            <a href="https://twitter.com/#" target="_blank"><i style="font-size:20px;" class="fa fa-twitter highlight2 rightpadding_10"></i></a>&nbsp;&nbsp;
                            <a href="https://in.linkedin.com/in/#" target="_blank"><i style="font-size:20px;" class="fa fa-linkedin highlight2 rightpadding_10"></i></a>

                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>




        <section class="cs page_copyright section_padding_15 with_top_border_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center" style="margin-bottom: 5px;">
                        
                    </div>
                    <div class="col-sm-12 text-center" style="margin-top: 0px;margin-bottom: 5px;">
                        <p><i>Developed By</i></p>
                    </div>
                    <div class="col-sm-12" style="margin-top: 0px;margin-bottom: 0px;">
                        <a href="contributer.php"><p style="font-size: 3em;font-weight: bold;text-align: center">BFH011</p></a>
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
<!-- <script src="js/switcher.js"></script> -->

<!-- <script type="text/javascript" src="js/loader.js"></script> -->
</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>
