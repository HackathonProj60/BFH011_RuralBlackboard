<?php
require 'studentSec.php';
if ($sus == 1) {
	require "config.php";
}
$enroll_code = $_SESSION['regno'].$_GET['course'];
$week=$_GET['week'];
// echo $enroll_code;
// echo $week;
$query = mysqli_query($con,"select attempt from result where enroll_code = '$enroll_code' and week = '$week';");
if ($query && (mysqli_num_rows($query)>0)) {
	$att = mysqli_fetch_array($query);
	if ($att['attempt'] < 3) {
		$attempts = $att['attempt'];
	}else{
		echo "<script type='text/javascript'>alert('Sorry, you can not attempt for quiz of this week anymore!!!')</script>";
		echo "<script type='text/javascript'>window.location.assign('student.php')</script>";
	}
}
?>
<html>
<head>
	<title>Quiz</title>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Salb">
	<link rel="stylesheet" href="quiz.css">
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
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
	<?php
	
		$course_code=$_GET['course'];
		$week=$_GET['week'];
		$query = mysqli_query($con,"select");
		$query=mysqli_query($con,"select question.id FROM question,courses where courses.course_code=question.course_code AND question.course_code='".$course_code."' AND question.week='".$week."'");
		$idd = array();
		$number=mysqli_num_rows($query);
		$i=0;
		while($data = mysqli_fetch_object($query)){
			$idd[$i] = $data->id;
			$i++;
		}
		if ($number>0) {
			shuffle($idd);
			$j=0;
			$fina=array();
			while ($j<$number) {
				$query1=mysqli_query($con,"select question.id,question.ques,question.opt1,question.opt2,question.opt3,question.opt4 FROM question,courses where courses.course_code=question.course_code AND question.course_code='".$course_code."' AND question.week='".$week."' order by question.id");
				while ($data1=mysqli_fetch_object($query1)) {
					if($idd[$j]==$data1->id){
						$fina[$j][0]=$data1->id;
						$fina[$j][1]=$data1->ques;
						$fina[$j][2]=$data1->opt1;
						$fina[$j][3]=$data1->opt2;
						$fina[$j][4]=$data1->opt3;
						$fina[$j][5]=$data1->opt4;
					}
				}
				$j++;
			}
		}else{
			$message="No Question available or Count error";
			header("refresh: 1; url=student.php");
			echo "<script type='text/javascript'>alert('".$message."');</script>";
		}
	
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			var array = <?php echo json_encode($fina); ?>;
			for (var i = 0; i < <?php echo $number ?>; i++) {
				$('#deployques').append('<div id="question'+(i+1)+'"><div id="question" class="question">'+(i+1)+'. '+array[i][1]+'</div><input type="number" name="quesid'+i+'" style="display: none;" value="'+array[i][0]+'"><label class="option"><input type="radio" name="option'+i+'" value="1" >'+array[i][2]+'</label><label class="option"><input type="radio" name="option'+i+'" value="2">'+array[i][3]+'</label><label class="option"><input type="radio" name="option'+i+'" value="3">'+array[i][4]+'</label><label class="option"><input type="radio" name="option'+i+'" value="4">'+array[i][5]+'</label></div>');
			}
		});
	</script>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<section class="page_breadcrumbs ds parallax section_padding_top_100 section_padding_bottom_100">
		<div >
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="highlight2">Quiz</h2>
					<ol class="breadcrumb darklinks">
						<li>
							<a href="student.php">
								Home
							</a>
						</li>
						<li class="active">Quiz</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="ls ms section_padding_top_100 section_padding_bottom_100">
		<div id="quizContainer" class="container">
			<form action="evo.php" class="shop-register" method="POST">

				<div id="deployques" class="form-group"></div>
				<input type="text" name="max" value="<?= $number ?>" style="display: none;">
				<input type="text" name="enroll" value="<?= $enroll_code ?>" style="display: none;">
				<input type="text" name="week" value="<?= $week ?>" style="display: none;">
				<input type="number" name="att" value="<?= $attempts ?>" style="display: none;">
				<center><button name="submit" type="submit" class="theme_button wide_button color1 topmargin_40">Submit</button></center>
			</form>
		</div>

		<div id="result" class="containerResult" style="display: none;"></div>
	</section>
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
</body>
</html>
