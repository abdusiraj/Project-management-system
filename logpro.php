<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project Management</title>
</head>

<body>
<?php  
include ('connection.php');
session_start();
$UserName=$_POST['uname'];
$Password=$_POST['pass'];
//$pass=md5($Password);


$sql = "select * from user where username='".$UserName."' and pass='".$Password."'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$num_row = $result->num_rows;
$usertype = $row['type'];
$acivation = $row['status'];

if ($num_row==0)
{
echo '<script type="text/javascript" >alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
exit();
}
else if($usertype=="admin" && $acivation =="1")
{
    $sq= "select * from admin where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['admin_id']=$row['admin_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'admin/index.php\';</script>';
} 
else if($usertype=="coordinator" && $acivation =="1")
{
    $sq= "select * from coordinator where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['cor_id']=$row['cor_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'coor/index.php\';</script>';
} 
else if($usertype=="student" && $acivation =="1")
{
    $sq= "select * from student where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['level']=$row['level'];
$_SESSION['stu_id']=$row['stu_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'student/index.php\';</script>';
}
else if($usertype=="advisor" && $acivation =="1")
{
    $sq= "select * from advisor where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['adv_id']=$row['adv_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'advisor/index.php\';</script>';
}
else if($usertype=="examinor" && $acivation =="1")
{
    $sq= "select * from examinor where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['exa_id']=$row['exa_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'exminer/index.php\';</script>';
}
else{
                                    echo '<script language="javascript">';
                                    echo 'alert("Deactivated Account")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=index.php" />';
}
?>

</body>
</html>
