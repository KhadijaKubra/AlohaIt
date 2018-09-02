<?php
require 'config.php';
session_start();
$un=$_POST['un'];
$pw=$_POST['pw'];

$statement="select Name, Password from admin_1 where Name='$un' and Password='$pw'";

$result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result)==1)
            {
            	$_SESSION['un']= $un;
            	header("location:adminhome.php");
               
    		}
            else
            {
                echo "User Name or Password is wrong";
            }
            mysqli_close($conn);

            ?>