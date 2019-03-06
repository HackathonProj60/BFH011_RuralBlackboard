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
	</div>
<div id="main"></div>


<button id="nextbtn">next</button>
<button id="prevbtn">previous</button>


<?php require "config.php";
/*"<table border='1'><thead><tr><th>Register Number</th><th>Student Name</th><th>Course Title</th><th>Marks</th><th>Department Name</th></tr></thead>";*/
    $query= mysqli_query($con,"select DISTINCT(student.reg_no),student.stud_name,result.enroll_code,courses.course_name,department.dept_name FROM student,enroll,result,courses,department WHERE student.reg_no=enroll.reg_no and courses.course_code=enroll.course_code and department.dept_id=courses.dept_id and result.enroll_code=enroll.enroll_code ");
    $a=0;
    $stdrep= array();
    while($data = mysqli_fetch_object($query))
    {
		$enroll=$data->enroll_code;
        $query1= mysqli_query($con,"select sum(score) as total from result WHERE enroll_code='$data->enroll_code'");
        $data1=mysqli_fetch_object($query1);
		?>

<table id="example" class="table table_template darklinks"style="padding:20px";>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
	  <th scope="col">Marks</th>
	  <th scope="col">Dpt</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $stdrep[$a][0]=$data->reg_no; ?></th>
      <td>  <?php echo $stdrep[$a][1]=$data->stud_name; ?></td>
      <td> <?php echo $stdrep[$a][2]=$data->course_name;?></td>
	  <td> <?php echo $stdrep[$a][3]=$data1->total; ?></td>
	  <td> <?php echo  $stdrep[$a][4]=$data->dept_name; ?></td>
    </tr>

  </tbody>
</table>

		<?php
        $a++;
    }
?>
<script src="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        // "serverSide": true,
        // "ajax": "../server_side/scripts/server_processing.php"
    } );
});
</script>
</body>