<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$status="pending";



$sql = "UPDATE `student` SET `level`='leader' WHERE `stu_id`='$id'";
$run = $con->query($sql);

$sql1 = "INSERT INTO `project_group`(`status`,`led_id`) VALUES ('".$status."','".$id."')";
$run1 = $con->query($sql1);

if($run && $run1 ==true)
{

//$_SESSION['led_id']=$id;  
$_SESSION['led_id']=$id;                   
                                    echo '<meta http-equiv="refresh" content="0;url=makegrouppro2.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>