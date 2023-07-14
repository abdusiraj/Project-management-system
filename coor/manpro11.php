<?php  
include ('../connection.php');
session_start();
$exminer_id=$_POST['exminer_id'];
$advisor_id=$_POST['advisor'];
$id=$_POST['id'];


$sql1 = "UPDATE `advisor` SET `status`= 'free' where `adv_id`='$advisor_id'";
$run1 = $con->query($sql1);
$sql2 = "UPDATE `examinor` SET `status`= 'free' where `exa_id`='$exminer_id'";
$run2 = $con->query($sql2);
$sql3 = "UPDATE `project_group` SET `status`= 'finshed' where `group_id`='$id'";
$run3 = $con->query($sql3);


if($run1 && $run2 && $run3 ==true)
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