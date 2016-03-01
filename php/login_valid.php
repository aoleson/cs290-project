<?php
session_start();
include "../php/connect.php"; 
        $uName = $_GET['userName'];
		$pWord = $_GET['password'];
        $hashedPass = sha1($pWord);
		$query = "SELECT * FROM projectUsers WHERE userName='$uName' and password='$hashedPass'";
		$result = mysql_query($query);
	    $num_row = mysql_num_rows($result);
        $row = mysql_fetch_assoc($result);
		if ($num_row == 1) {
			  $_SESSION['firstName'] = $row['firstName'];
			  $_SESSION['valid_user'] = $row['userName'];
			  echo " <h3> <img src='./images/tick.gif' alt='tick' />Success! You are logged in as </h3><p> User: ".$_SESSION['valid_user']; 
			  echo " <p> First Name: ".$_SESSION['firstName']; 
			}
	//	mysql_free_result($result);
		//mysql_close($dbc);
		
		else  {
			echo "<p class='error'> Invalid username and/or password. Please try again.</p>";
		}
?>
