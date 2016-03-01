<?php 
	session_start();
	include "./php/connect.php";
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
				
				  if (isset($_POST['submit'])) {
					// Grab the profile data from the POST and handle it
					$eventName = $_POST['eventName'];
					$userCreated = $_POST['userCreated'];
					$eventGroup = $_POST['eventGroup'];
					$member = $_POST['member'];
					if (empty($member)) {
						$member = "off";
					}
					$private = $_POST['private'];
					if (empty($private)) {
						$private = "off";
					}
					$coffee = $_POST['coffee'];
					if (empty($coffee)) {
						$coffee = "off";
					}
					$drinks = $_POST['drinks'];
					if (empty($drinks)) {
						$drinks = "off";
					}
					$doughnuts = $_POST['doughnuts'];
					if (empty($doughnuts)) {
						$doughnuts = "off";
					}
					$breakfast = $_POST['breakfast'];
					if (empty($breakfast)) {
						$breakfast = "off";
					}
					$pizza = $_POST['pizza'];
					if (empty($pizza)) {
						$pizza = "off";
					}
					$bbq = $_POST['bbq'];
					if (empty($bbq)) {
						$bbq = "off";
					}
					$dinner = $_POST['dinner'];
					if (empty($dinner)) {
						$dinner = "off";
					}
					$popcorn = $_POST['popcorn'];
					if (empty($popcorn)) {
						$popcorn = "off";
					}
					$snacks = $_POST['snacks'];
					if (empty($snacks)) {
						$snacks = "off";
					}
					$candy = $_POST['candy'];
					if (empty($candy)) {
						$candy = "off";
					}
					$eventDate = $_POST['eventDate'];
					$eventTime = $_POST['eventTime'];
					$eventLocation = $_POST['eventLocation'];
					
					//For testing only
					//echo $eventName."<br/>".$userCreated."<br/>".$eventGroup."<br/>".$member."<br/>".$private."<br/>"."<br/>".$coffee."<br/>".$drinks."<br/>".$doughnuts."<br/>".$breakfast."<br/>".$pizza."<br/>".$bbq."<br/>".$dinner."<br/>".$popcorn."<br/>".$snacks."<br/>".$candy."<br/>"."<br/>".$eventDate."<br/>".$eventTime."<br/>".$eventLocation;
					

					if (!empty($eventName) && !empty($userCreated) && !empty($eventGroup) && !empty($eventDate) && !empty($eventTime) && !empty($eventLocation)) {
					  
						$query = "INSERT INTO projectEvents (eventName, userCreated, eventGroup, member, private, coffee, drinks, doughnuts, breakfast, pizza, bbq, dinner, popcorn, snacks, candy, eventDate, eventTime, eventLocation) VALUES ('$eventName', '$userCreated', '$eventGroup', '$member', '$private', '$coffee', '$drinks', '$doughnuts', '$breakfast', '$pizza', '$bbq', '$dinner', '$popcorn', '$snacks', '$candy', '$eventDate', '$eventTime', '$eventLocation')";
						
						mysql_query($query)
							or die ("<h4>Query failed".mysql_error()."</h4>");

						// Confirm success with the user
						echo '<h4 class = "centered">Your event "' . $eventName . '" has been added! See it in the <a href="./search.php">Public Events Search</a> or, if you made it private, in <a href="./calendar.php">My Events</a>.</h4>';

						mysql_close($dbc);
						exit();
					}
							
					else {
					  echo '<h4 class="centered">Make sure you fill in all required fields! Please try again.</h4>';
					  include "./php/eventForm.php";
					}
					
				  }

				  
				else {
					include "./php/eventForm.php";
				}
			
			}
		?>
		
		
		
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>