<?php 
	session_start();
//	include 'connectvars.php';
?>
<!DOCTYPE html>
<html>
	<!-- Create event page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/13/15
		Filename: createEvent.php
	-->
	<head>
		<title>Add an Event</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./googleMaps/searchStyles.css"/>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
	<?php include "./php/header.php"; ?>
	<?php include "./php/nav.php"; ?>
	<h1>Add an Event</h1>
        <section>
        <?php 
			$old_user = $_SESSION['valid_user'];
			if (empty($old_user)) {
				echo '<h2 class="centered">You need to <a href="./createAccount.php">Create an Account</a> and <a href="./login.php">Log In</a> before you can add an event.</h2><br/><br/><br/>';
			}
			else {
				include "./php/eventForm.php";
			}
		?>
		
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>