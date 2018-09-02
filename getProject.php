<?php
		require "config.php";
		    session_start();
		
		$MemberID=$_SESSION['mId'];
		$sql= "select MemberID from task";
	
 
?>