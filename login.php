<?php
	session_start();
    include "./php/connect.php";
 
	if ((isset($_POST['userName'])) && (isset($_POST['password'])) ){
		$userName = $_POST['userName'];
		$password = $_POST['password'];
	
		/* $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (!$dbc) {
			die('Could not connect: ');
		} */
        $hashedPass = sha1($password);
		$query = "SELECT * FROM projectUsers WHERE userName='$userName' and password='$hashedPass'";
		$result = mysql_query($query);
	
		if (mysql_num_rows($result) == 1) {
	
			// The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
			  $row = mysql_fetch_array($result);
			  $_SESSION['firstName'] = $row['firstName'];
			  $_SESSION['valid_user'] = $row['userName'];
			}
		else {
          // The username/password are incorrect so set an error message
			echo "Sorry, you must enter a valid username and password to log in.";
		}
		mysql_free_result($result);
		mysql_close($dbc);
	}  

?>
<!DOCTYPE html>
<html>
	<!-- Login page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: login.html
	-->
	<head>
		<title>Log In</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
	<h1>Log In Page</h1>
        <br/><br/>
        <section class="">
            <img class="login" alt="OSU" src="./images/OSU.jpg"/>
        </section>
        <br/>
        
        <section style="text-align:center" class="">
        
        <?php 
        	if (isset($_SESSION['valid_user'])) {
				echo " <h3> You are logged in as </h3><p> User: ".$_SESSION['valid_user']; 
				echo " <p> First Name: ".$_SESSION['firstName']; 
				echo "<p> <a href='logout.php'>Log out </a><br />";
			}
			
			else {
				if (isset($userName)) {
					// user tried but can't log in
					echo "<h2> Could not log you in - Please try again!</h2>";
				} else {
					// user has not tried
					echo " <h2> Log In to freeFood@OSU ";
				}
				// Log in form
			        
        
	            echo '<form method="" action="login.php" id="login_form"></form>';
	        	
	        	echo '<label>Username</label><br/>';
				echo '<input type="text" form="login_form" name="username"/>';
				echo '<br/><br/>';
				echo '<label>Password</label><br/>';
				echo '<input type="password" form="login_form" name="password"/>' ;
				echo '<br/>';
				echo '<button type="submit" form="login_form">Log In</button>';
				echo '<br/><br/>';
				
				echo '<p>
				    <a href="./createAccount.php">Create an Account</a>
				</p>';
			}
		?>
        	
        </section>
        <br/><br/>
        <?php include "./php/footer.php"; ?>
	</body>

</html>