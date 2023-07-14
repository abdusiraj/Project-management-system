<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$message=$_POST['message'];

$sql1 = "INSERT INTO `c_message`(`group_id`,`message`) VALUES ('".$id."','".$message."')";
$run1 = $con->query($sql1);

if( $run1 ==true)
{                 
    $_SESSION['group_id']=$id;  
                                   echo '<meta http-equiv="refresh" content="0;url=managegroupp.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>