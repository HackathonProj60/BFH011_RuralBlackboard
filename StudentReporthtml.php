<?php require "config.php";

$query= mysqli_query($con,"select DISTINCT(student.reg_no),student.stud_name,result.enroll_code,courses.course_name,department.dept_name FROM student,enroll,result,courses,department WHERE student.reg_no=enroll.reg_no and courses.course_code=enroll.course_code and department.dept_id=courses.dept_id and result.enroll_code=enroll.enroll_code order by student.reg_no");
$a=0;
while($data = mysqli_fetch_object($query)){
	$query1= mysqli_query($con,"select sum(score) as total from result WHERE enroll_code='$data->enroll_code'");
	$data1=mysqli_fetch_object($query1);
	if (mysqli_num_rows($query1)>0) {
		$stdrep[$a][0]=$data->reg_no;
		$stdrep[$a][1]=$data->stud_name;
		$stdrep[$a][2]=$data->course_name;
		$stdrep[$a][3]=$data1->total;
		$stdrep[$a][4]=$data->dept_name;
		//increament
		$a++;
	}
}
	//print_r($stdrep);
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
		<a href="StudentReportExcel.php" class="abs-link"><button class="btnSubmit btn btn-success" type="submit" name="Excel" style="margin:0 50px 0 0;">Download as Excel</button></a><br>
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
		$('#main').append('<table class="table_template darklinks" id="tablet'+j+'" border="1"><thead><tr><th>Register Number</th><th>Student Name</th><th>Course Title</th><th>Marks</th><th>Department Name</th></tr></thead><tbody id="tabot'+j+'"></tbody></table>');//table start and table head
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
var data=<?php echo json_encode($stdrep);?>;
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