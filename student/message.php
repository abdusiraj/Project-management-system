<?php  
include ('../connection.php');
session_start();
$message=$_POST['message'];
$from=$_POST['from'];
$to=$_POST['to'];
$mof="student";
$date=date("Y-m-d H:i:s");
$sql1 = "INSERT INTO `message`(`from`, `to`, `message`, `message_of`, `date`) VALUES ('".$from."','".$to."','".$message."', '".$mof."', '".$date."')";
$run1 = $con->query($sql1);



if($run1 ==true)
{
//header("Location:admin/index.php");

                                    echo '<meta http-equiv="refresh" content="0;url=notification.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>