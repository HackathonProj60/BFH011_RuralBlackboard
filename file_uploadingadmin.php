<?php
require "config.php";
if (isset($_POST['submit'])) {
	$limit=$_POST['limit'];
	$course=$_POST['cour'];
	$week=$_POST['week'];
	$i=1;
	$sus=1;
	$allowed = array('ppt','pdf','mp4','avi','flv','wmv','mov','mkv','webm','vob','ogv','ogg');
	$pdf=array('pdf');
	$video=array('mp4','avi','flv','wmv','mov','mkv','webm','vob','ogv','ogg');
	$sql=mysqli_query($con,"SELECT dept_id from courses WHERE course_code='$course'");
	if (mysqli_num_rows($sql)) {
		if ($row=mysqli_fetch_object($sql)) {
			$depart=$row->dept_id;
		}
	}
	$dir="Departments";
	$dir1=$dir.'/'.$depart;
	$dir2=$dir1.'/'.$course;
	$dir3=$dir2.'/'.$week;
	//if there is no dir by name deapartment make one
	if (is_dir($dir)===false) {
		mkdir($dir);
	}
	//if there is no dir by departid make one
	if (is_dir($dir1)===false) {
		mkdir($dir1);
	}
	//if there is no dir by course_code make one
	if (is_dir($dir2)===false) {
		mkdir($dir2);
	}
	//if there is no dir by week number make one
	if (is_dir($dir3)===false) {
		mkdir($dir3);
	}
	while ($i<=$limit) {
		$lec='lecture'.$i;
		//check the file is valid
		if (isset($_FILES[$lec]['tmp_name'])) {
			//take values from file
			$fileName =$_FILES[$lec]['name'];
			$fileTmpName=$_FILES[$lec]['tmp_name'];
			$fileSize = $_FILES[$lec]['size'];
			$fileError=$_FILES[$lec]['error'];
			$fileType=$_FILES[$lec]['type'];
			//take extension
			$fileExt=explode('.', $fileName);
			$fileActualExt=strtolower(end($fileExt));
			
			//check the allowed files
			if (in_array($fileActualExt,$allowed)) {
				//if there is error uploading file
				if ($fileError===0) {
					$query= mysqli_query($con,"SELECT max(lect_no) as max from lecture WHERE course_code='$course' and week='$week'");
					if (mysqli_num_rows($query)) {
						if($row=mysqli_fetch_object($query)){
							$nu=$row->max;
							$nu++;
							$dir4=$dir3.'/'.$nu;
						//if there is no dir by week lecture number make one
							if (is_dir($dir4)===false) {
								mkdir($dir4);
							}
							if (in_array($fileActualExt,$pdf)) {
						//re-name to portable.pdf
								$fileNameNew = "portable.pdf";
							}elseif (in_array($fileActualExt, $video)) {
						//re-name to video.mp4
								$fileNameNew = "video.mp4";
							}else{
								echo "Sorry can't upload!";
							}
							$fileDestination = $dir4.'/'.$fileNameNew;
							move_uploaded_file($fileTmpName, $fileDestination);
							$stmt = $con->prepare("insert into lecture (type,path,course_code,week,lect_no) values(?,?,?,?,?)");
							$stmt->bind_param("sssii",$fileType,$fileDestination,$course,$week,$nu);
							$stmt->execute();
							$sus+=1;
						}
					}else{
						echo "<script>alert('File already Exists.')</script>";
					}
				}else {
					echo "<script>alert('There was an error uploading your file!')</script>";
				}
			}else {
				echo "<script>alert('You cannot upload files of this type!')</script>";
			}
		}else{
			//echo "File not found!!";
		}
		$i++;
	}
	if($sus<5 and $sus>1){
		echo "<script>alert('Files are uploaded!') </script>";
	}elseif($sus==5){
		echo "<script>alert('Files uploaded Successfully!') </script>";
	}
	//echo $fileError;
	header("Refresh:1; url=adminhome.php");
}
?>