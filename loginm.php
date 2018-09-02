<?php
require 'config.php';
session_start();
$un=$_POST['un'];
$pw=$_POST['pw'];

$statement="select ID,Name, Password from member where Name='$un' and Password='$pw';";

$result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result)==1)
            {
                while($row =mysqli_fetch_assoc($result)){
				$_SESSION['id']= $row['ID'];
                $_SESSION['type']= "member";
                $_SESSION['un']="name";
                //echo $row['id'];
                 $_SESSION['un']= $un;
                }

               
               
                header("location:memberdashboard.php");
               
               
    		}
            else
            {
                echo "User Name or Password is wrong";
            }
            mysqli_close($conn);

            ?>