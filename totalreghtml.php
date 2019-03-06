<?php require "config.php"; 
$query= mysqli_query($con,"select courses.course_name,courses.course_code,student.reg_no,student.stud_name,student.dept_id from courses,student,enroll WHERE enroll.course_code=courses.course_code and student.reg_no=enroll.reg_no ");
$a=0;
while($data = mysqli_fetch_object($query))
{
	$totreg[$a][0]=$data->course_code;
	$totreg[$a][1]=$data->course_name;
	$totreg[$a][2]=$data->reg_no;
	$totreg[$a][3]=$data->stud_name;
	$totreg[$a][4]=$data->dept_id;
	$a++;
}
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="jquery.js"></script>
</head>
<body>
	<div class="text-center">
		<a href="TotalRegisterExcel.php" class="abs-link"><button class="btnSubmit btn btn-success" type="submit" name="Excel" style="margin:0 50px 0 0;">Download as Excel</button></a><br>
	</div>  <br>
	<button id="prevbtn">previous</button>
	<button id="nextbtn" style="float: right;">next</button>
	<div id="main"></div><br>
</body>
<script type="text/javascript">
	var maxi=2;//change to maximum records to display
	function totaldiv(){
		var j=1;
		var i=0;
		while(data[i]){
			var a=0;
		$('#main').append('<table class="table_template darklinks" id="tablet'+j+'" border="1"><thead><tr><th align=center>Course Code</th><th>Course Title</th><th>Register Number</th><th>Student Name</th><th>Department ID</th></tr></thead><tbody id="tabot'+j+'"></tbody></table>');//table start and table head
		while(a<maxi && i<l){
			$('#tabot'+j).append('<tr><td>'+data[i][0]+'</td><td>'+data[i][1]+'</td><td>'+data[i][2]+'</td><td>'+data[i][3]+'</td><td>'+data[i][4]+'</td></tr>');//table row start and data[i][0],data[i][1],data[i][2].....
			i++;
			a++;
		}
		$('#tablet'+j).hide();
		j++;
	}
	$('#tablet1').show();
	$('#prevbtn').prop('disbaled',true);
	if (l>maxi) {
		$('#nextbtn').prop('disbaled',true);
	}else{
		$('#nextbtn').prop('disbaled',false);
	}
}
var data=<?php echo json_encode($totreg);?>;
$(document).ready(function(){
	totaldiv();
	$('#nextbtn').click(function(){
		var j=1;
		var n=(l/maxi);
		while(j<n){
			if ($('#tablet'+j).is(':visible')) {
				$('#tablet'+j).hide();
				j++;
				$('#tablet'+j).show();
				if (j==n) {
					$('#nextbtn').prop('disbaled',true);
				}else{
					$('#nextbtn').prop('disbaled',false);
				}
				return;
			}
			j++;
		} 
	});
	$('#prevbtn').click(function(){
		var a=l/maxi;
		var j=Math.ceil(a);
		while(j>1){
			if ($('#tablet'+j).is(':visible')) {
				$('#tablet'+j).hide();
				j--;
				$('#tablet'+j).show();
				if (j==1) {
					$('#prevbtn').prop('disbaled',true);
				}else{
					$('#prevbtn').prop('disbaled',false);
				}
				return;
			}
			j--;
		} 
	});
});
var l=data.length;
</script>
</html>