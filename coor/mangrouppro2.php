<?php  
include ('../connection.php');
session_start();
$group_id = $_SESSION['group_id']; 
$member_id = $_SESSION['member_id']; 
$sql=$con->query("SELECT * from student where `group_no`='$group_id' and `stu_id`='$member_id'");
$row=$sql->fetch_assoc();
$group_no=$row['group_no'];
$stu_id=$row['stu_id'];

$sql2 = "INSERT INTO `result`(`group_no`,`stu_id`) VALUES ('".$group_no."','".$stu_id."')";
$run1 = $con->query($sql2);

if( $run1 ==true)
{                 
    $_SESSION['group_id']=$group_no;  
                                    echo '<meta http-equiv="refresh" content="0;url=managegroupp.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>