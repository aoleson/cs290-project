<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<h3 class="centered">Add an event to our database!</h3>
	
	<br/><br/>
	<fieldset>
		<legend>General Info</legend>
		<label>Name of Event *</label><br/>
		<input type="text"  name="eventName"/><br/><br/>
		<label>Username of Event Creator (You!) *</label><br/>
		<input type="text"  name="userCreated"/><br/><br/>
		<label>Group/Organization *</label><br/>
		<input type="text"  name="eventGroup"/>
		&nbsp; &nbsp;<input type="checkbox"  name="member"> You must be a member of this group to attend.<br/><br/>
		<label>Should this event be private or public?</label><br/>
		<input type="checkbox"  name="private"> I want this to be a private event.<br/>
	</fieldset>
	<br/><br/>
	<fieldset>
			<legend>What kind of food?</legend>
			<input type="checkbox"  name="coffee"> Coffee<br/>
			<input type="checkbox"  name="drinks"> Other drinks (soda, mocktails, etc.)<br/>
			<input type="checkbox"  name="doughnuts"> Doughnuts<br/>
			<input type="checkbox"  name="breakfast"> Breakfast foods (pastries, etc)<br/>
			<input type="checkbox"  name="pizza"> Pizza<br/>
			<input type="checkbox"  name="bbq"> BBQ<br/>
			<input type="checkbox"  name="dinner"> Other dinner foods (spaghetti, etc.)<br/>
			<input type="checkbox"  name="popcorn"> Popcorn<br/>
			<input type="checkbox"  name="snacks"> Other snacks (chips, etc.)<br/>
			<input type="checkbox"  name="candy"> Candy<br/>
	</fieldset>
	<br/><br/>
	<fieldset>
			<legend>Logistics</legend>
			<label>Date *</label></br>
			<input type="date"  name="eventDate"> <br/><br/>
			<label>Time *</label><br/>
			<input type="time"  name="eventTime"> <br/><br/>
			<label>Enter your location into the map search below...</label></br>
			Copy and paste the coordinates you get here <span style="color:red">[NO PARENTHESES]</span>: * <input type="text"  name="eventLocation"/></br>
			<br/>
			<div>
				<iframe id="iframe_map" src="./googleMaps/mapTest.html"></iframe>
			</div>
	</fieldset>
	<br/><br/>
	
<br/>
<input type="submit" value="Create My Event!" name="submit" />
</br>