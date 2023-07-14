<?php  
include ('../connection.php');
session_start();
$adv_id=$_POST['adv_id'];
$group_id=$_POST['group_id'];



$sql = "UPDATE `project_group` SET `advisor_id`='$adv_id' WHERE `group_id`='$group_id'";
$run = $con->query($sql);
$sql1 = "UPDATE `advisor` SET `status`='assign' WHERE `adv_id`='$adv_id'";
$run1 = $con->query($sql1);


if($run && $run1==true)
{

//header("Location:admin/index.php");
                        
                                    echo '<meta http-equiv="refresh" content="0;url=advisor.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>