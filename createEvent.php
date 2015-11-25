<!DOCTYPE html>
<html>
	<!-- Create event page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/13/15
		Filename: index.html
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
        
        	<form method="" action="" id="event_form"></form>
        	<h3 class="centered">Add an event to our database!</h3>
        	
        	<br/><br/>
        	<fieldset>
        		<legend>General Info</legend>
				<label>Name of Event</label><br/>
				<input type="text" form="event_form" name="eventName"/><br/><br/>
				<label>Username of Event Creator (You!)</label><br/>
				<input type="text" form="event_form" name="user"/><br/><br/>
				<label>Group/Organization</label><br/>
				<input type="text" form="event_form" name="group"/>
			    &nbsp; &nbsp;<input type="checkbox" form="event_form" name="mustBeMember"> You must be a member of this group to attend.<br/><br/>
				<label>Should this event be private or public?</label><br/>
				<input type="checkbox" form="event_form" name="private"> I want this to be a private event.<br/>
			</fieldset>
			<br/><br/>
			<fieldset>
					<legend>What kind of food?</legend>
					<input type="checkbox" form="event_form" name="coffee"> Coffee<br/>
					<input type="checkbox" form="event_form" name="drinks"> Other drinks (soda, mocktails, etc.)<br/>
					<input type="checkbox" form="event_form" name="doughnuts"> Doughnuts<br/>
					<input type="checkbox" form="event_form" name="breakfast"> Breakfast foods (pastries, etc)<br/>
					<input type="checkbox" form="event_form" name="pizza"> Pizza<br/>
					<input type="checkbox" form="event_form" name="bbq"> BBQ<br/>
					<input type="checkbox" form="event_form" name="dinner"> Other dinner foods (spaghetti, etc.)<br/>
					<input type="checkbox" form="event_form" name="popcorn"> Popcorn<br/>
					<input type="checkbox" form="event_form" name="snacks"> Other snacks (chips, etc.)<br/>
					<input type="checkbox" form="event_form" name="candy"> Candy<br/>
			</fieldset>
			<br/><br/>
			<fieldset>
					<legend>Logistics</legend>
					<label>Date</label></br>
					<input type="date" form="event_form" name="eventDate"> <br/><br/>
					<label>Time</label><br/>
					<input type="time" form="event_form" name="eventTime"> <br/><br/>
					<label>Enter your location into the map search below...</label></br>
					Copy and paste the Place ID you get here: <input type="text" form="event_form" name="eventLocation"/></br>
					<br/>
					<div>
						<iframe id="iframe_map" src="./googleMaps/mapTest.html"></iframe>
					</div>
			</fieldset>
			<br/><br/>
			
        <br/>
        <button type="submit" form="event_form"><img alt="Green checkmark" src="./images/button_ok.png"/>Create my Event!</button>
        </br>
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>