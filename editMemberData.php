<?php
session_start();
require 'config.php';
//$id=$_POST['ID'];
$ID=$_SESSION['mid'];
$Name=trim($_POST['name']);
$Email=$_POST['email'];
$password=trim($_POST['password']);
$education=$_POST['education'];
$skills=$_POST['skills'];
$location=$_POST['location'];
echo $_POST['name'];
echo $_SESSION['mid'];


$statement="update member set Name='$Name', Email='$Email',Password='$password',Education='$education',skills='$skills',location='$location' where ID='$ID'";
if(mysqli_query($conn,$statement))
{
	$_SESSION['un']=$Name;
    header('location:userprofile.php');
}
else
    mysqli_error($conn);
mysqli_close($conn);
?>