<?php  
include ('../connection.php');
session_start();
$member_id=$_POST['member_id'];
$mark=$_POST['mark'];
$mark2=$_POST['mark2'];



$sql1 = "UPDATE `result` SET `exminer_mark`= '$mark', `examiner_2`= '$mark2' where `stu_id`='$member_id'";
$run1 = $con->query($sql1);

if($run1 ==true)
{

//header("Location:admin/index.php");
                                    // echo '<script language="javascript">';
                                    // echo 'alert("Account Updated Succefully")';
                                    // echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=activity.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>