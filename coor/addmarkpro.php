<?php  
include ('../connection.php');
session_start();
$member_id=$_POST['member_id'];
$mark=$_POST['mark'];
$id=$_POST['id'];



$sql1 = "UPDATE `result` SET `cor_mark`= '$mark' where `stu_id`='$member_id'";
$run1 = $con->query($sql1);

if($run1 ==true)
{
  $_SESSION['group_id']=$id;
//header("Location:admin/index.php");
                                    // echo '<script language="javascript">';
                                    // echo 'alert("Account Updated Succefully")';
                                    // echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=managegroupp.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>