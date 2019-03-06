<?php
header('refresh: question.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Quiz questions</title>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
</head>
<body>
	<span>Departments</span>
	<select id="departmentddl"></select>
	<span>Courses</span>
	<select id="courseddl"></select>
	<span>Week</span>
	<select id="week"></select>
	<span>Part</span>
	<select id="part"></select>
	<div>
		<button onclick="disQues()" id="disQues">Create question</button>
	</div>
	<div id="container" class="container" style="display: none;">
		<form method="POST" action="uploadQues.php">
			<div class="quest" id="questy0" style="display: block;">
				<label>Question 1</label><textarea name="question0"></textarea><br>
				<input type="radio" name="option0" value="1"><input type="text" name="option01">
				<input type="radio" name="option0" value="2"><input type="text" name="option02"><br>
				<input type="radio" name="option0" value="3"><input type="text" name="option03">
				<input type="radio" name="option0" value="4"><input type="text" name="option04"><br>
			</div>
			<div class="quest" id="questy1"style="display: none;">
				<label>Question 2</label><textarea name="question1"></textarea><br>
				<input type="radio" name="option1" value="1"><input type="text" name="option11">
				<input type="radio" name="option1" value="2"><input type="text" name="option12"><br>
				<input type="radio" name="option1" value="3"><input type="text" name="option13">
				<input type="radio" name="option1" value="4"><input type="text" name="option14"><br>
			</div>
			<div class="quest" id="questy2"style="display: none;">
				<label>Question 3</label><textarea name="question2"></textarea><br>
				<input type="radio" name="option2" value="1"><input type="text" name="option21">
				<input type="radio" name="option2" value="2"><input type="text" name="option22"><br>
				<input type="radio" name="option2" value="3"><input type="text" name="option23">
				<input type="radio" name="option2" value="4"><input type="text" name="option24"><br>
			</div>
			<div class="quest" id="questy3"style="display: none;">
				<label>Question 4</label><textarea name="question3"></textarea><br>
				<input type="radio" name="option3" value="1"><input type="text" name="option31">
				<input type="radio" name="option3" value="2"><input type="text" name="option32"><br>
				<input type="radio" name="option3" value="3"><input type="text" name="option33">
				<input type="radio" name="option3" value="4"><input type="text" name="option34"><br>
			</div>
			<div class="quest" id="questy4"style="display: none;">
				<label>Question 5</label><textarea name="question4"></textarea><br>
				<input type="radio" name="option4" value="1"><input type="text" name="option41">
				<input type="radio" name="option4" value="2"><input type="text" name="option42"><br>
				<input type="radio" name="option4" value="3"><input type="text" name="option43">
				<input type="radio" name="option4" value="4"><input type="text" name="option44"><br>
			</div>
			<div class="quest" id="questy5"style="display: none;">
				<label>Question 6</label><textarea name="question5"></textarea><br>
				<input type="radio" name="option5" value="1"><input type="text" name="option51">
				<input type="radio" name="option5" value="2"><input type="text" name="option52"><br>
				<input type="radio" name="option5" value="3"><input type="text" name="option53">
				<input type="radio" name="option5" value="4"><input type="text" name="option54"><br>
			</div>
			<div class="quest" id="questy6"style="display: none;">
				<label>Question 7</label><textarea name="question6"></textarea><br>
				<input type="radio" name="option6" value="1"><input type="text" name="option61">
				<input type="radio" name="option6" value="2"><input type="text" name="option62"><br>
				<input type="radio" name="option6" value="3"><input type="text" name="option63">
				<input type="radio" name="option6" value="4"><input type="text" name="option64"><br>
			</div>
			<div class="quest" id="questy7"style="display: none;">
				<label>Question 8</label><textarea name="question7"></textarea><br>
				<input type="radio" name="option7" value="1"><input type="text" name="option71">
				<input type="radio" name="option7" value="2"><input type="text" name="option72"><br>
				<input type="radio" name="option7" value="3"><input type="text" name="option73">
				<input type="radio" name="option7" value="4"><input type="text" name="option74"><br>
			</div>
			<div class="quest" id="questy8"style="display: none;">
				<label>Question 9</label><textarea name="question8"></textarea><br>
				<input type="radio" name="option8" value="1"><input type="text" name="option81">
				<input type="radio" name="option8" value="2"><input type="text" name="option82"><br>
				<input type="radio" name="option8" value="3"><input type="text" name="option83">
				<input type="radio" name="option8" value="4"><input type="text" name="option84"><br>
			</div>
			<div class="quest" id="questy9"style="display: none;">
				<label>Question 10</label><textarea name="question9"></textarea><br>
				<input type="radio" name="option9" value="1"><input type="text" name="option91">
				<input type="radio" name="option9" value="2"><input type="text" name="option92"><br>
				<input type="radio" name="option9" value="3"><input type="text" name="option93">
				<input type="radio" name="option9" value="4"><input type="text" name="option94"><br>
			</div>
			<input type="button" name="limit" id="limit" onclick="showQues()" value="ADD">
			<input type="button" name="dele" id="dele" onclick="hideQues()" value="Cancel">
			<input type="number" name="limit" id="limitno" style="display: none;">
			<input type="number" name="week" id="weeke" style="display: none;">
			<input type="number" name="part" id="parte" style="display: none;">
			<input type="text" name="cour" id="cour1" style="display: none;">
			<button id="submit" name="submit" value="submit">Submit</button>
		</form>
	</div>
	<script type="text/javascript">
		var x = document.getElementById("limitno");
		x.value = 0;
		function showQues(){
			if (x.value>=9) {
				return;
			}
			var y = "questy"+x.value;
			var div =document.getElementById(y);
			while(div.style.display!="none"){
				x.value++;
				if (x.value==10) {
					x.value--;
					return;
				}else{
					y = "questy"+x.value;
					div = document.getElementById(y);	
				}
			}
			div.style.display="block";
		}
		function hideQues(){
			if (x.value<=0) {
				return;
			}
			var z ="questy"+x.value;
			var divi = document.getElementById(z);
			while(divi.style.display!="block"){
				x.value--;
				if (x.value==-1) {
					x.value++;
					return;
				}else{
					var z ="questy"+x.value;
					divi = document.getElementById(z);
				}
			}
			x.value--;
			divi.style.display="none";
		}
		function disQues(){
			var x = document.getElementById("disQues");
			var y = document.getElementById("container");
			if (y.style.display=="none") {
				y.style.display="block";
				x.textContent="Cancel Question";
			}else{
				y.style.display="none";
				x.textContent="Create Question";
			}
		}
	</script>
</body>
</html>