<?php
	session_start();
    include "./php/connect.php";
?>
<!DOCTYPE html>
<html>
	<!-- Search page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/20/15
		Filename: search.php
	-->
	<head>
		<title>Search Public Events</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
	    <link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
        <section class="centered">
            <h1>Search Our Public Events!</h1>
            <p>Using this page, anyone can access the events that users have uploaded and designated as public. If you're looking to access your private events, check out <a href="./calendar.php">My Calendar</a>.</p>
			<p>Below, select a food that you're looking forward to eating. Then choose whether you want to see ONLY events that require membership. We'll show you the events that fit your criteria.</p>
			<p>Leave the "Select a Food" dropdown on its default to search without regard to a specific food. Leave both fields default to see all public events. </p>
        </section>
        <br/>
        <div class="centered">
			
		
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<label><b>Search by Food</b></label><br/>
					<select name="food">
						<option value="">Select a food...</option>
						<option value="coffee">Coffee</option>
						<option value="drinks">Drinks (mocktails, etc.)</option>
						<option value="doughnuts">Doughnuts</option>
						<option value="breakfast">Breakfast (pastries, etc.)</option>
						<option value="pizza">Pizza</option>
						<option value="bbq">BBQ</option>
						<option value="dinner">Dinner (spaghetti, etc.)</option>
						<option value="popcorn">Popcorn</option>
						<option value="snacks">Other snacks</option>
						<option value="candy">Candy</option>
					</select><br/><br/>
				<label><b>Filter by Membership Status</b></label><br/>
					<input type="checkbox" name="membership"> Members-only events<br/><br/><br/>
				<input type="submit" value="Search FreeFood@OSU" name="submit" />
			</form>
		
		<?php 
				
				if (isset($_POST['submit'])) {
					$food = $_POST['food'];
					if ($food != "") {
						$membership = $_POST['membership'];
						if (empty($membership)) {
							$membership = "off";
							$sql = "SELECT * FROM projectEvents WHERE $food='on' AND private='off' ORDER BY eventDate";
							$result = mysql_query($sql)
								or die ("<h4>1st Query failed ".mysql_error()."</h4>");
							echo "<p class='centered'>Showing all events that have <b>".$food."</b> with members-only filter <b>".$membership."</b>...</p><br/><br/>";
						}
						else {
							$sql = "SELECT * FROM projectEvents WHERE $food='on' AND member='$membership' AND private='off' ORDER BY eventDate";
							$result = mysql_query($sql)
								or die ("<h4>1st Query failed ".mysql_error()."</h4>");
							echo "<p class='centered'>Showing events that have <b>".$food."</b> and with members-only filter <b>".$membership."</b>...</p><br/><br/>";
						}
					}
					else {
						$membership = $_POST['membership'];
						if (empty($membership)) {
							$sql = "SELECT * FROM projectEvents WHERE private='off' ORDER BY eventDate";
							$result = mysql_query($sql)
								or die ("<h4>2nd Query failed ".mysql_error()."</h4>");
							echo "<p class='centered'>Showing <b>all</b> events...</p><br/><br/>";
						}
						else {
							$sql = "SELECT * FROM projectEvents WHERE member='$membership' AND private='off' ORDER BY eventDate";
							$result = mysql_query($sql)
								or die ("<h4>2nd Query failed ".mysql_error()."</h4>");
							echo "<p class='centered'>Showing events with members-only filter <b>".$membership."</b>...</p><br/><br/>";
						}
					}
					
					if (mysql_num_rows($result) > 0) {				
						// output data of each row
						echo "<table id = 'events_table'>";
						echo "<tr><th>Event Name</th><th>Group</th><th>Must be member?</th><th>Created by User</th><th>Kinds of Food</th><th>Date</th><th>Time</th><th>Location</th>";
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
							echo "<td>" . $row["userCreated"] . "</td>";
							
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
					}
					
					else {
						echo 'Sorry, we don\'t have any events that fit that criteria! Try searching again with different parameters.';
					}
					
				}
				
			?>
		
		<br/><br/>
		
			
			
        </div>
        <br/>
        <?php include "./php/footer.php"; ?>
	</body>

</html>