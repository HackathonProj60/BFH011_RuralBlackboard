<?php require "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
	<title></title>
</head>
<body>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<h3>LECTURE:</h3>
				</div>
			</div>
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
	</div>
	<!--.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="row vertical-tabs">
				<div class="col-sm-4">
					<ul class="nav" role="tablist">
						<div class = "weekdiv">
							<form id="lecSel">
								<li class="active">
									<label for = "l1">
										<input id = "l1" type="radio" name="lecture" value="1"><i class="rt-icon2-book"></i>Lecture1
									</label>
								</li>
								<li>
									<label>
										<input type="radio" name="lecture" value="2"><i class="rt-icon2-book"></i>Lecture2
									</label>
								</li>
								<li>
									<label>
										<input type="radio" name="quizy" value="1" checked><i class="rt-icon2-light-bulb"></i>Quiz 1
									</label>
								</li>
								<li>
									<label>
										<input type="radio" name="lecture" value="3"><i class="rt-icon2-book"></i>Lecture3
									</label>
								</li>
								<li>
									<label>
										<input type="radio" name="lecture" value="4"><i class="rt-icon2-book"></i>Lecture4
									</label>
								</li>
								<li>
									<label>
										<input type="radio" name="quizy" value="2" checked><i class="rt-icon2-light-bulb"></i>Quiz 2
									</label>
								</li>
								<li>
									<label>
										<input type="radio" name="quizy" value="3" checked><i class="rt-icon2-light-bulb"></i>Weekly Quiz
									</label>
								</li>
								<input type="text" name="course" id="course">
								<input type="text" name="week1" id="text1">
								<button name="quiz" type="submit" id="submit">Give Quiz</button>
							</form>
							<input type="text" name="lec1" id="text2" >
							<input type="text" name="path" id="path" >
							<center>
								<iframe id="fram" width="500" height="480" border = "2px solid black;">File not Found</iframe>
							</center>
						</div>	
					</ul>	
				</div>
			</div>
		</div>
	</div>
	<!-- .panel-group -->
</body>
</html>