<?php
$conn=mysqli_connect("localhost","root","","e-portal");
if (!$conn) {
	echo mysqli_errror($conn);
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
	<title></title>
</head>
<body>
	<span>Departments</span>
	<select id="departmentddl"></select>
	<span>Courses</span>
	<select id="courseddl"></select>
	<div>
		<form id="weekSel">
			<li>
				<label>
					<input type="radio" name="week" value="1">week1
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="2">week2
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="3">week3
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="4">week4
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="5">week5
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="6">week6
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="7">week7
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="week" value="8">week8
				</label>
			</li>
		</form>
	</div>
	<br>
	<div>
		<form id="lecSel" action="quiz.php">
			<li class="active">
				<label>
					<input type="radio" name="lecture" value="1">Lecture 1
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="lecture" value="2">Lecture 2
				</label>
			</li>
			
			<li>
				<label>
					<input type="radio" name="lecture" value="3">Lecture 3
				</label>
			</li>
			
			
			<li>
				<label>
					<input type="radio" name="lecture" value="4">Lecture 4
				</label>
			</li>
			<button type= "submit" name="quiz">Quiz</button>
			<input type="text" name="course" id="course" >
			<input type="text" name="week1" id="text1" >
		</form>
	</div>
	<input type="text" name="lec1" id="text2" style="display: none;">
	<input type="text" name="path" id="path" style="display: none;">
	<center>
		<iframe id="fram" width="800" height="480">File not Found</iframe>
	</center>
</body>
</html>