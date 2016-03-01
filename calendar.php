<?php
	session_start();
    include "./php/connect.php";
?>
<!DOCTYPE html>
<html>
	<!-- See the events that this user has created, for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/28/15
		Filename: calendar.php
	-->
	<head>
		<title>My Events</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
		<script type="text/javascript" src="./calendar/script.js"></script>
        <link rel="stylesheet" href="./calendar/style.css" />
	</head>
	
	<body>
	    
	
	
	
	<?php include "./php/header.php"; ?>
	<?php include "./php/nav.php"; ?>
	<h1>My Events</h1>
	
	<?php
	 
		if (!isset($_SESSION['valid_user'])) {
			echo " <h3 class = 'centered'>You aren't logged in, so we can't display your events! Please <a href='./login.php'>Log In</a>.</h3>"; 
		}
			
		else {
			
			$userName = $_SESSION['valid_user'];
			
			echo "<p class = 'centered'>Hello, ".$userName."! Here are all the events you have created. We search our database for all the events that have your username as the user who created it. Don't worry if you see both your public and private events on here -- You can only see your private events while you're logged in and on this page!<br/><br/>";
			
			$sql = "SELECT * FROM projectEvents WHERE userCreated='$userName' ORDER BY eventDate";
			$result = mysql_query($sql)
				or die ("<h4>Query failed ".mysql_error()."</h4>"); 

			if (mysql_num_rows($result) > 0) {				
				
				// output data of each row
				echo "<table id = 'events_table'>";
				echo "<tr><th>Event Name</th><th>Group</th><th>Must be member?</th><th>Private?</th><th>Kinds of Food</th><th>Date</th><th>Time</th><th>Location</th>";
				while($row = mysql_fetch_assoc($result)) {
					//set the member and private values to nicer things
					if ($row["member"] == "on") {
						$mem_res = "Yes";
					}
					else {
						$mem_res = "No";
					}
					if ($row["private"] == "on") {
						$priv_res = "Yes";
					}
					else {
						$priv_res = "No";
					}
										
					
					//Read in the kinds of food there
					$food_array = array();
					if ($row["coffee"] == "on") {
						array_push($food_array, "Coffee");
					}
					if ($row["drinks"] == "on") {
						array_push($food_array, "Other Drinks");
					}
					if ($row["doughnuts"] == "on") {
						array_push($food_array, "Doughnuts");
					}
					if ($row["breakfast"] == "on") {
						array_push($food_array, "Breakfast Foods");
					}
					if ($row["pizza"] == "on") {
						array_push($food_array, "Pizza");
					}
					if ($row["bbq"] == "on") {
						array_push($food_array, "BBQ");
					}
					if ($row["dinner"] == "on") {
						array_push($food_array, "Other Dinner Foods");
					}
					if ($row["popcorn"] == "on") {
						array_push($food_array, "Popcorn");
					}
					if ($row["snacks"] == "on") {
						array_push($food_array, "Other Snacks");
					}
					if ($row["candy"] == "on") {
						array_push($food_array, "Candy");
					}
					
					//set the search query for the google maps link
					$coordinates = $row["eventLocation"];
					$searchLink = "<a target='_blank' href='http://maps.google.com/?q=" . $coordinates . "'>Click to see in Google Maps</a>";
					
					echo "<tr>";
					echo "<td>" . $row["eventName"] . "</td>";
					echo "<td>" . $row["eventGroup"] . "</td>";
					echo "<td>" . $mem_res . "</td>";
					echo "<td>" . $priv_res . "</td>";
					
					echo "<td>";
					foreach ($food_array as $food) {
						echo $food."<br/>";
					}
					echo "</td>";
					
					echo "<td>" . $row["eventDate"] . "</td>";
					echo "<td>" . $row["eventTime"] . "</td>";
					echo "<td>" . $searchLink . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			} else {
				echo "It looks like you haven't added any events! Why don't you give it a shot? <a href='./createEvent'>Add an Event</a>";
			}
			
		}

	?>
      
        <br/>
        <?php include "./php/footer.php"; ?>
	</body>
	

</html>