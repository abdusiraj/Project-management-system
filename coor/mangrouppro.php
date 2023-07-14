<?php  
include ('../connection.php');
session_start();
$member_id=$_POST['member_id'];
$id=$_POST['id'];



$sql = "UPDATE `student` SET `level`='member',`group_no`='$id'  WHERE `stu_id`='$member_id'";
$run = $con->query($sql);
$sql2 = "INSERT INTO `result`(`group_no`,`stu_id`) VALUES ('".$id."','".$member_id."')";
$run1 = $con->query($sql2);

if($run && $run1 ==true)
{
  $_SESSION['group_id']=$id; 
// $_SESSION['group_id']=$id;
// $_SESSION['member_id']=$member_id;                         
                                    echo '<meta http-equiv="refresh" content="0;url=managegroupp.php" />';
                                   // echo '<meta http-equiv="refresh" content="0;url=managegroupp.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>