<?php  
include ('../connection.php');
session_start();
$exa_id=$_POST['exa_id'];
$group_id=$_POST['group_id'];
$date=$_POST['date'];
$time=$_POST['time'];



$sql = "UPDATE `project_group` SET `exminer_id`='$exa_id', `pre_date`='$date', `pre_time`='$time' WHERE `group_id`='$group_id'";
$run = $con->query($sql);

$sql1 = "UPDATE `examinor` SET `status`='assign' WHERE `exa_id`='$exa_id'";
$run1 = $con->query($sql1);


if($run && $run1==true)
{

//header("Location:admin/index.php");
                        
                                    echo '<meta http-equiv="refresh" content="0;url=exminer.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>