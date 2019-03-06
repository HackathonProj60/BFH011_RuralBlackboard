<?php
//$course_code=$_GET['course'];
$course_code="BCA202";
require "config.php";
$sql=mysqli_query($con,"SELECT week from courses WHERE course_code='$course_code'");
if (mysqli_num_rows($sql)) {
	if ($row=mysqli_fetch_object($sql)) {
		$number=$row->week;
	}else{
		$number=0;
	}
}
$numlect=array();
$i=1;
while ($i<=$number) {
	$sql1=mysqli_query($con,"SELECT count(id) as total from lecture where course_code='$course_code' and week='$i'");
	if (mysqli_num_rows($sql1)) {
		if($row=mysqli_fetch_object($sql1)){
			$numlect[$i]=$row->total;
		}
	}
	$i++;
}
$pathlect=array();
$i=1;
while ($i<=$number) {
	$sql1=mysqli_query($con,"SELECT path from lecture where course_code='$course_code' and week='$i'");
	if (mysqli_num_rows($sql1)) {
		$j=1;
		while($row=mysqli_fetch_object($sql1)){
			$pathlect[$i][$j]=$row->path;
			$j++;
		}
	}
	$i++;
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KJC</title>
	<link rel="icon" type="image/png" href="img/bg.jpg"/>
	<link rel="stylesheet" href="css/doc.css">
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/shCoreKreatura.css">
	<link rel="stylesheet" href="css/shThemeKreatura.css">
	<link href="http://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">

		<header>
			
			<h1>Kristu Jayanti College</h1>
			<h2>
				Online Tutorials.
				<p>
					Version: 1.0 | Released: 01 Feb 2019
				</p>
			</h2>
			<div class="clear"></div>
		</header>

		<div class="km-box">
			<div class="header">
				<h3>Table of Contents</h3>
				<h3>Current Chapter: <span id="curnav" class="light">Overview</span></h3>
			</div>
			<div class="inner">
				<ul id="sidebar">
				</ul>
				<div id="content">
				</div>
			</div>
		</div>
		<footer>
			<p>
				Copyright &copy; 2019,<b><a href="http://kristujayanti.edu.in"> Kristu Jayanti </a></b> All Rights Reserved!  Designed By: <a href="http://idiot.ga"><b>Khan</b></a> 
			</p>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/shCore.js" type="text/javascript"></script>
	<script src="js/shBrushJScript.js" type="text/javascript"></script>
	<script src="js/shBrushXml.js" type="text/javascript"></script>
	<script src="js/shBrushCss.js" type="text/javascript"></script>
	<script src="js/shBrushPhp.js" type="text/javascript"></script>
	<script type="text/javascript">
		//var ar=1;
		var course_code="<?php echo $course_code;?>";
		var l=<?php echo $number;?>;
		var numlect=<?php echo json_encode($numlect);?>;
		var pathlect=<?php echo json_encode($pathlect);?>;
		function sidebarload(){
			for(var i=1;i<=l;i++){
				if(i==1){
					$('#sidebar').append('<li class="active" data-deeplink="week_'+i+'"><span>Week '+i+'</span><ul id="inul'+i+'"></ul></li>');
					$('#content').append('<section class="active" id="secweek'+i+'"></section>');
				}else{
					$('#sidebar').append('<li data-deeplink="week_'+i+'"><span>Week '+i+'</span><ul id="inul'+i+'"></ul></li>');
					$('#content').append('<section id="secweek'+i+'"></section>');
				}
				$('#inul'+i).append('<li class="active" data-deeplink="Question '+i+'">Add Question</li>');
				$('#inul'+i).append('<li data-deeplink="Content '+i+'">Add Content</li>');
				$('#secweek'+i).append('<article><input type="button" id="add'+i+'" onclick="loadques('+i+',0)" value="ADD"><form method="POST" action="uploadQues.php"><div id="formques'+i+'"></div><input type="number" name="limit" id="limitno'+i+'" style="display: none;"><input type="number" name="week" value="'+i+'" style="display: none;"><input type="text" name="cour" value="'+course_code+'" style="display: none;"><button name="submit" value="submit">Submit</button></form></article>');
				$('#secweek'+i).append('<article><input type="button" id="addc'+i+'" onclick="loadcont('+i+',0)" value="ADD"><form method="POST" action="file_uploading.php" enctype="multipart/form-data"><div id="formcont'+i+'"></div><input type="number" name="limit" id="limitn'+i+'" style="display: none;"><input type="number" name="week" value="'+i+'" style="display: none;"><input type="text" name="cour" value="'+course_code+'" style="display: none;"><button name="submit" value="submit">Submit</button></form></article>');
				loadques(i,0);
				loadcont(i,0);
			}
		}
		function loadques(i,ar){
			ar++;
			$('#formques'+i).append('<div id="questy'+i+''+ar+'"><label>Question '+ar+'</label><textarea name="question'+ar+'"></textarea><br><input type="radio" name="option'+ar+'" value="1"><input type="text" name="option'+ar+'1"><input type="radio" name="option'+ar+'" value="2"><input type="text" name="option'+ar+'2"><br><input type="radio" name="option'+ar+'" value="3"><input type="text" name="option'+ar+'3"><input type="radio" name="option'+ar+'" value="4"><input type="text" name="option'+ar+'4"><input type="button" onclick="del(questy'+i+''+ar+');" value="Delete"></div>');
			$('#limitno'+i).val(ar);
			$('#add'+i).attr('onclick','loadques('+i+','+ar+')');
		}
		function loadcont(i,ar){
			ar++;
			$('#formcont'+i).append('<div id="contenty'+i+''+ar+'"><label>Lecture '+ar+'</label><input type="file" name="lecture'+ar+'" placeholder="NO FILE" accept=".pdf,video/*"><input type="button" onclick="del(contenty'+i+''+ar+');" value="Delete"></div>');
			$('#limitn'+i).val(ar);
			$('#addc'+i).attr('onclick','loadcont('+i+','+ar+')');
		}
		function del(a){
			$(a).remove();
		}
		$(document).ready(function(){
			sidebarload();
		});
	</script>
	<script src="js/doc.js"></script>
</body>
</html>