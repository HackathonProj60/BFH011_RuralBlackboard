
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
                                     
    $(document).ready(function() {  

$("#dept option").filter(function() {    
       return $(this).val() == $("#hiddenval").val(); 
    }).attr('selected', true);  
 

    
$("#dept").on("change", function() {

$("#hiddenval").val($(this).find("option:selected").attr("value"));


});

$(".myclass a").on("click",function(){
	var a = $(".myclass h4").text;
	$("#hiddentext").value(a); 
});
}); 



</script>

			<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	

	<!-- Unyson messages modal -->
	
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<section class="page_topline ls ms table_section visible-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">

							<ul class="inline-list menu darklinks">
								
								<li>
									<a href="#" class="small-text">Logout</a>
								</li>
								
							</ul>

						</div>
					</div>
				</div>
			</section>


			<header class="page_header header_white toggler_xs_right">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="index.html" class="logo top_logo">
									<img src="images/logo.png" style = "width:300px;" alt="">
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="index-2.html">Home</a>
										</li>

										
										<li>
											<a href="#">Courses</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														 <a href = "#">COMPUTER SCIENCE</a>
														<ul>
															<li>
																 <a href = "#">PhP</a>
															</li>
															
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">COMMERCE</a>
														<ul>
															<li>
																<a href="header_side1.html">ic</a>
															</li>
															
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">MANAGEMENT</a>
														<ul>
															<li>
																<a href="breadcrumbs1.html">Business</a>
															</li>
															
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">ARTS</a>
														<ul>
															<li>
																<a href="footer5.html">arts</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
													<a href="#">LIFE SCIENCE</a>

														<ul>
															
															<li>
																<a href="copyright5.html">science</a>
															</li>
														</ul>
													</li>
													
													<li class="mega-menu-col">
													<a href="#">LAW</a>

														<ul>
															
															<li>
																<a href="copyright5.html">...</a>
															</li>
														</ul>
													</li>

												</ul>
											</div>
											<!-- eof mega menu -->
										</li>
										<!-- eof features -->


										
										<!-- contacts -->
										<li>
											<a href="contact.html">About</a>
											<ul>
												<li>
													<a href="contact.html">Contact 1</a>
												</li>
												<li>
													<a href="contact2.html">Contact 2</a>
												</li>
												<li>
													<a href="contact3.html">Contact 3</a>
												</li>
												<li>
													<a href="contact4.html">Contact 4</a>
												</li>
											</ul>
										</li>
										<!-- eof contacts -->
									</ul>
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
										<a href="#" class="small-text medium">Log Out</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div style="text-align:center;">
							
							    <div class=" with_padding gradient_bg_color cs" style="height:445px;width:1380px;">
								
								<h4 class="highlight2 bottommargin_30" style="margin-top:50px;">
									Find Your Course
								</h4>
								
									<p>Select the Department:</p>
									
									<?php
									mysql_connect("localhost", "root", "");
									mysql_select_db("e-portal");

									$sql = "SELECT * FROM department";
									$result = mysql_query($sql);

										echo "<select name='dept' style='color:orange;' id = 'dept'><option selected disabled>DEPARTMENT</option>";
										while ($row = mysql_fetch_array($result)) {
											echo "<option value='" . $row['dept_name'] ."'>" . $row['dept_name'] ."</option>";
										}
										echo "</select>";
									?>
									
									<form method = "post" id="form1">
								    <input type = text id = "hiddenval" name="myval" style = "display:none;">
									<div class="topmargin_30">
									<input type="submit" id = "sbmt" name = "sbmt" class="theme_button color2" value = "Search course"></input>
									</div>
								</form>
								
								
								<?php 
								if($_POST)
								{
										if($_POST['sbmt'])
										{
											if($_POST['myval']!= "")
											{
											$deptname = $_POST['myval'];
											}
											
											
											$connection=mysqli_connect("localhost","root","");
											$db=mysqli_select_db($connection,"e-portal");
											if($deptname != "")
										{
											$query=mysqli_query($connection,"select * from course  where Cdept = '$deptname'");
											
											if($query)
													{
														$count = mysqli_num_rows($query);
														$arr = array();
														while($row = mysqli_fetch_array($query))
															{
									  
														$arr[]  = $row['course_name'];
											
															}
													}	
										}
										 else
											   {
												   echo "<script type='text/javascript'>alert('Currently no Course available for this Dept')</script>";
											   }
										}	
								}
								
								
								?>
	
								 </div>
					</div>
								
						

			<!-- icon-background-teaser -->

			<section class="ls section_padding_top_20 section_padding_bottom_10">
				<div class="container">
					<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
					 
						<?php
						for($i=0;$i<$count;$i++)
					   {
	      				?>
						<div class="isotope-item col-lg-4 col-md-6 col-sm-6 col-xs-12" id = "<?php 'div'.$i ?>">
						<a>
							<div class="teaser gradient_bg_color icon-background-teaser hoverable-banner before_cover text-center" >
								<img src="images/download.png" style="width:180px;!important" alt="" class="icon-background">
								<h4 class="highlight2 topmargin_0" id = "myval">
									<?php if($arr[$i]!= "") {echo $arr[$i];} ?>
								</h4>
								<div class="media-links">
									<a href="#" class="abs-link"></a>
								</div>
							</div>
							</a>
						</div>
										
										
							<?php
					   }
					   
							
							?>
								<input type = "text" id = "hiddentext"></input>		
						</div>
					</div>
			</section>

								

			<section class="cs page_copyright section_padding_15 with_top_border_container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p><span style="font-size:medium; text-align:right;">&copy;&nbsp;2018 Kristu Jayanti College (Autonomous), K Narayanapura, Kothannur, Bangaluru-560077, Karnataka.</span>
</p>
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
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>