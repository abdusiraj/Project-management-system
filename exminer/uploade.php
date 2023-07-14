<?php
	include('../connection.php');
    session_start();
    $id=$_POST['id'];
	//$ins_id=$_SESSION['ins_id'];
	if(ISSET($_POST['upload'])){
		$file_name = $_FILES['video']['name'];
		$file_temp = $_FILES['video']['tmp_name'];
		$file_size = $_FILES['video']['size'];
 
		if($file_size < 50000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('docx', 'ppt', 'pdf', 'txt','edx', 'pub');
			if(in_array($end, $allowed_ext)){
				$name = date("Ymd").time();
				$location = 'doc/'.$name.".".$end;
				if(move_uploaded_file($file_temp, $location)){
					mysqli_query($con, "UPDATE `project_group` SET `location`='$location' WHERE led_id='$id' ");
                    echo "<script>alert('File Uploaded successefully')</script>";
                   // $success="Video Uploaded successefully";
					echo "<script>window.location = 'activity.php'</script>";
				}
			}else{
				echo "<script>alert('Wrong document format')</script>";
                //$wrong="Wrong video format";
				echo "<script>window.location = 'activity.php'</script>";
			}
		}else{
			echo "<script>alert('File too large to upload')</script>";
            //$large="File too large to upload";
			echo "<script>window.location = 'activity.php'</script>";
		}
	}
?>