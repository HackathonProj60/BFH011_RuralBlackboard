<!DOCTYPE html>
<html>
<head>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="working.js"></script>
	<title></title>
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	
	<script src="js/compressed.js"></script>
		<script src="js/main.js"></script>
		<script src="js/switcher.js"></script>
		<style>
			#e1 {
    border: 2px solid black;
    padding: 10px;
    border-radius: 25px;
}

#e2 {
	border: 2px solid lightgrey;
    padding: 10px;
    border-radius: 50px 20px;
}
</style>
			

</head>
<body>
	
<!-- <section class="section_padding_15 with_top_border_container"> -->
<div class="container tab-content top-color-border" style="background: white !important;">
	<div class="row">
		<div class="col-md-12 ">
			
				<span>Departments</span>
					<select id="departmentddl"> </select>
				<span>Courses</span>
					<select id="courseddl"> </select>
				<span>Week</span>
				<select id="week" ></select> 
				<input type="button" id="add" style="width:100px; height: 40px;" class="btn-success nav" value="ADD">
				<div class="col-md-12">
					<form method="POST" action="uploadQues.php">
						<div id="formques"></div>
						<input type="number"  name="limit" id="limitno" style="display: none; border: 5px solid black !importaant;">
						<input type="number" name="week" id="weeke" style="display: none;">
						<input type="text" name="cour" id="cour1" style="display: none;">
						<button id="submit" name="submit" value="submit">Submit</button>
					</form>
				</div>

			
		</div>
	</div>
</div>
<!-- </section> -->


	<script type="text/javascript">
		var i=0;
		function loadques(){
			i++;
			$('#formques').append('<div id="questy'+i+'" class="col-md-12" ><label>Questio '+i+' </label> <br> <textarea name="question'+i+'" style="width:75%;!important"></textarea><br><input type="radio"  name="option'+i+'" value="1"><input type="text" id="e2"  name="option'+i+'1"><input type="radio" name="option'+i+'" value="2"><input type="text" id="e2" name="option'+i+'2"><br><input type="radio" name="option'+i+'" value="3"><input type="text" id="e2" name="option'+i+'3"><input type="radio" name="option'+i+'" value="4"><input type="text"id="e2" name="option'+i+'4"><input type="button" style="width:100px; height: 40px;" class="btn-danger" onclick="del(questy'+i+');" value="Delete"></div>');
			$('#limitno').val(i);
		}
		function del(a){
			//alert(a);
			$(a).remove();
		}
		$(document).ready(function(){
			loadques();
			$('#add').click(function(){
				loadques();
			});
		});
	</script>
</body>
</html>