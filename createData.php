<?php
		require "config.php";
		    session_start();
		$Name=$_GET['t_name'];
		$MemberID=$_SESSION['mId'];
		$ProjectID=$_GET['project'];
		$sql= "INSERT INTO task (Name,MemberID,ProjectID) VALUES ('$Name','$MemberID','$ProjectID')";
		if (mysqli_query($conn, $sql)) {
             echo 1;
          } else {
            echo 0;
          }
		
	 ?>