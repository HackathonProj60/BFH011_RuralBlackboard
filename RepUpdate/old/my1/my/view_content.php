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
	<div class="row">
						<div class="col-md-12">
							<div class="row vertical-tabs">
								<div class="col-sm-4">
	<ul class="nav" role="tablist">
		<form id="weekSel">
			<li class="active">
				<a>
					<input type="radio" name="week" value="1">week1
				</a>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="2">week2
				</label>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="3">week3
				</label>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="4">week4
				</label>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="5">week5
				</label>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="6">week6
				</label>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="7">week7
				</label>
			</li>
			<li class="active">
				<label>
					<input type="radio" name="week" value="8">week8
				</label>
			</li>
		</form>
		</ul>
	</div>
	<br>
	<div>
		<form id="lecSel">
			<li class="active">
				<label>
					<input type="radio" name="lecture" value="1">Lecture1
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="lecture" value="2">Lecture2
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="lecture" value="3">Lecture3
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="lecture" value="4">Lecture4
				</label>
			</li>
		</form>
	</div>
	<input type="text" name="course" id="course" style="display: none;">
	<input type="text" name="week1" id="text1" style="display: none;">
	<input type="text" name="lec1" id="text2" style="display: none;">
	<input type="text" name="path" id="path" style="display: none;">
	<div id="frame"></div>
	<center>
		<iframe id="fram" width="800" height="480">File not Found</iframe>
	</center>
</body>
</html>