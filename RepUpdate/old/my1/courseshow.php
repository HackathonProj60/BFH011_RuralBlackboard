
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
											$query=mysqli_query($connection,"select * from course,department  where department.dept_name= '$deptname' and course.dept_id = department.dept_id");
											
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
						if($count)
						{
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
					   
						}
							?>
									
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