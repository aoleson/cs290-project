<?php session_start(); ?>
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
		<script src="./js/validate.js"></script>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
	<h1>Log In Page</h1>
        <br/><br/>
        <img class="login" alt="OSU" src="./images/OSU.jpg"/>
        <br/>
        
        <section style="text-align:center" class="">
       
        <?php 
        	if (isset($_SESSION['valid_user'])) {
				echo " <h3> You are logged in as </h3><p> User: ".$_SESSION['valid_user']; 
				echo " <p> First Name: ".$_SESSION['firstName']; 
				echo "<p> <a href='logout.php'>Log out</a><br />";
			}
			
			else {
			
					echo " <h2> Log In to freeFood@OSU</h2>";
					echo"<div id='results'></div>";
					
					// Log in form
						
			
				//	echo '<form method="POST" action="login.php" id="login_form"></form>';
					echo '<form>';
					echo '<label>Username</label><br/>';
					echo '<input type="text" name="userName" id="userName" />';
					//echo '<input type="text" form="login_form" name="userName" id="userName" />';
					echo '<br/><br/>';
					echo '<label>Password</label><br/>';
					//echo '<input type="password" form="login_form" name="password" id="password" />' ;
					echo '<input type="password" name="password" id="password" />' ;
					echo '<br/><br/>';
					echo '<button type="button" onclick="checkLogin()">Login</button>';
					//echo '<button type="submit" form="login_form" onclick="checkLogin()">Log In</button>';
					echo '</form>';
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