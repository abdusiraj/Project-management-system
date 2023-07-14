<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$status=$_POST['status'];

$sql = "UPDATE `project_group` SET `status`='$status' WHERE `group_id`='$id'";
$run = $con->query($sql);

if($run ==true)
{

//header("Location:admin/index.php");
         $_SESSION['group_id']=$id;                      
                                    echo '<meta http-equiv="refresh" content="0;url=managegroupp.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>