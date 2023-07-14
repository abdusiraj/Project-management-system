<?php  
include ('../connection.php');
session_start();
$id1 = $_SESSION['led_id']; 
//$id = $_SESSION['led_id']; 

$sql1 =$con->query("SELECT * from project_group where led_id='$id1'");
$row1=$sql1->fetch_assoc();
$idd=$row1['group_id'];

$sql2 = "INSERT INTO `result`(`group_no`, `stu_id`) VALUES ('".$idd."','".$id1."')";
$run1 = $con->query($sql2);
$sql = "UPDATE `student` SET `group_no`='$idd' WHERE `stu_id`='$id1'";
$run = $con->query($sql);
if( $run1 && $run ==true)
{                   
                                    echo '<meta http-equiv="refresh" content="0;url=progroup.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>