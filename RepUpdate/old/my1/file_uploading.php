<?php
$conn=mysqli_connect("localhost","root","","e-portal");
if (!$conn) {
	echo mysqli_errror($conn);
	exit;
}
if (isset($_POST['submit'])) {
	$depart = $_POST['depe'];
	$course=$_POST['cour'];
	$week=$_POST['week'];
	$i=1;
	$sus=1;
	$allowed = array('ppt','pdf','mp4','avi','flv','wmv','mov','mkv','webm','vob','ogv','ogg');
	$pdf=array('pdf');
	$video=array('mp4','avi','flv','wmv','mov','mkv','webm','vob','ogv','ogg');
	$dir="Departments";
	$dir1=$dir.'/'.$depart;
	$dir2=$dir1.'/'.$course;
	$dir3=$dir2.'/'.$_POST['week'];
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
	while ($i<=4) {
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
			$dir4=$dir3.'/'.$i;
			//if there is no dir by week lecture number make one
			if (is_dir($dir4)===false) {
				mkdir($dir4);
			}
			//check the allowed files
			if (in_array($fileActualExt,$allowed)) {
				//if there is error uploading file
				if ($fileError===0) {
					$query= mysqli_query($conn,"select * from lectures where course_code='".$course."' and week='".$week."' and lecture_number='".$i."'");
					if (mysqli_num_rows($query)==0) {
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
						$stmt = $conn->prepare("insert into lectures (type,path_lecture,course_code,week,lecture_number) values(?,?,?,?,?)");
						$stmt->bind_param("sssii",$fileType,$fileDestination,$course,$week,$i);
						$stmt->execute();
						$sus+=1;
					}else{
						echo "File already Exists. ";
					}
				}else {
					echo "There was an error uploading your file!";
				}
			}else {
				echo "You cannot upload files of this type!";
			}
		}else{
			echo "Erorr";
		}
		$i++;
	}
	header("Location: insert_content.php");
}
?>