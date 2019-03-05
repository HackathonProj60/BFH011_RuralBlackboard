<?php require "config.php"; 
$query= mysqli_query($con,"select * from courses,department where courses.dept_id=department.dept_id");    
$coursedet=array();
$a=0;
while($data = mysqli_fetch_object($query))
{
	$coursedet[$a][0]=$data->course_code;
	$coursedet[$a][1]=$data->course_name;
	$coursedet[$a][2]=$data->start_date;
	$coursedet[$a][3]=$data->end_date;
	$coursedet[$a][4]=$data->week;
	$coursedet[$a][5]=$data->dept_name;
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
		<a href="CourseDetailExcel.php" class="abs-link"><button class="btnSubmit btn btn-success" type="submit" name="Excel" style="margin:0 50px 0 0;">Download as Excel</button></a><br>
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
		$('#main').append('<table class="table_template darklinks" id="tablet'+j+'" border="1"><thead><tr><th align=center>Course code</th><th>Course Title</th><th>Starting date</th><th>Ending date</th><th>Number of week</th><th>Department Name</th></tr></thead><tbody id="tabot'+j+'"></tbody></table>');//table start and table head
		while(a<maxi && i<l){
			$('#tabot'+j).append('<tr><td>'+data[i][0]+'</td><td>'+data[i][1]+'</td><td>'+data[i][2]+'</td><td>'+data[i][3]+'</td><td>'+data[i][4]+'</td><td>'+data[i][5]+'</td></tr>');//table row start and data[i][0],data[i][1],data[i][2].....
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
var data=<?php echo json_encode($coursedet);?>;
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