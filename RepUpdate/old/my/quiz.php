<html>
<head>
	<title>Quiz</title>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Salb">
	<link rel="stylesheet" href="quiz.css">
</head>
<body>
	<?php
	$con = mysqli_connect("localhost","root","","e-portal");
	if (!$con) {
		echo mysqli_errror($con);
		exit;
	}
	if (isset($_POST['quiz'])) {
		$course_code=$_POST['course'];
		$week=$_POST['week1'];
		$part=$_POST['quizy'];
		$query=mysqli_query($con,"select * FROM quiz_question,course where course.course_code=quiz_question.course_code AND quiz_question.course_code='".$course_code."' AND quiz_question.week='".$week."' and quiz_question.part='".$part."'");
		$idd = array();
		$number=mysqli_num_rows($query);
		$i=0;
		while($data = mysqli_fetch_object($query)){
			$idd[$i] = $data->question_id;
			$i++;
		}
		if ($number>0) {
			shuffle($idd);
			$j=0;
			$fina=array();
			while ($j<$number-1) {
				$query1=mysqli_query($con,"select * FROM quiz_question,course where course.course_code=quiz_question.course_code AND quiz_question.course_code='".$course_code."' AND quiz_question.week='".$week."' and quiz_question.part='".$part."' order by question_id");
				while ($data1=mysqli_fetch_object($query1)) {
					if($idd[$j]==$data1->question_id){
						$fina[$j][0]=$data1->question_id;
						$fina[$j][1]=$data1->question;
						$fina[$j][2]=$data1->option1;
						$fina[$j][3]=$data1->option2;
						$fina[$j][4]=$data1->option3;
						$fina[$j][5]=$data1->option4;
					}
				}
				$j++;
			}
		}else{
			$message="Please select Course and Week";
			header("refresh: 1; url=view_content.php");
			echo "<script type='text/javascript'>alert('".$message."');</script>";
		}
	}
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			var array = <?php echo json_encode($fina); ?>;
			for (var i = 0; i < <?php echo $number ?>; i++) {
				$('#deployques').append('<div id="question'+(i+1)+'"><div id="question" class="question">'+(i+1)+'. '+array[i][1]+'</div><input type="number" name="quesid'+i+'" style="display: none;" value="'+array[i][0]+'"><label class="option"><input type="radio" name="option'+i+'" value="1">'+array[i][2]+'</label><label class="option"><input type="radio" name="option'+i+'" value="2">'+array[i][3]+'</label><label class="option"><input type="radio" name="option'+i+'" value="3">'+array[i][4]+'</label><label class="option"><input type="radio" name="option'+i+'" value="4">'+array[i][5]+'</label></div>');
			}
		});
	</script>
	<div id="quizContainer" class="container">
		<form action="evo.php" method="POST">
			<div class="title">Computer Quiz</div>
			<div id="deployques"></div>
			<input type="text" name="max" value="<?php echo $number-1; ?>" style="display: none;">
			<center><button name="submit" type="submit" class="submit">Submit</button></center>
		</form>
	</div>
	<div id="result" class="containerResult" style="display: none;"></div>
</body>
</html>
