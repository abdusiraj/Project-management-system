<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$stu_id=$_SESSION['stu_id'];
?>
<?php  
include ('../connection.php');
session_start();
$tittle=$_POST['tittle'];
//$mname=$_POST['mname'];


$sql = "UPDATE `project_group` SET `tittle`='$tittle' WHERE `led_id`='$stu_id'";
$run = $con->query($sql);




if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                   
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=activity.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

?>