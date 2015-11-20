<!DOCTYPE html>
<html>
	<!-- Create event page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/13/15
		Filename: index.html
	-->
	<head>
		<title>freeFoodAtOSU.com</title>
			<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
	<?php include "./php/header.php"; ?>
	<?php include "./php/nav.php"; ?>
	<h1 id="">Create an Event</h1>
        <br/>
        <section class="">
        
        	<form method="" action="" id="event_form"></form>
        	<h3 class="centered">Add an event to the calendar!</h3>
        	
        	<br/><br/>
        	
        	<table id="">
			<tr>
				<td colspan="2">
					<label>Name of Event</label><br/>
					<input type="text" form="event_form" name="event_name"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Group/Organization</label><br/>
					<input type="text" form="event_form" name="group"/>
				</td>
				<td>
				    <br/><input type="checkbox" form="event_form" name="member"> Do you have to be a member of this group to attend?
				</td>				    
			</tr>
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
			
			</table>
			<br/>
        
        <button type="submit" form="event_form"><img alt="Green checkmark" src="./images/button_ok.png"/>Create my Event!</button>
        </br>
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>