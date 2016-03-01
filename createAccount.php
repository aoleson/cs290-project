<!DOCTYPE html>
<html>
	<!-- Create an account page for freeFoodAtOSU.com.
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/28/15
		Filename: createAccount.php
	-->
	<head>
		<title>Create an Account</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
		<script src="./js/validate_acct.js"></script>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
		<?php include "./php/connect.php"; ?>
		<h1>Create an Account</h1>
		
        <br/><br/>
        <img class="login" src="./images/oregon_state.jpg" alt="logo goes here"/>
        
        <br/><br/>
        
        <section class="">
        
        	
        	<h3 class="centered">Sign up for freeFoodAtOSU.com!</h3>
        	
        	<br/><br/>
					
        	<p class = "centered">All fields are required. Passwords should begin with a capital letter and end with two digits (0-9).</p><br/>
			<div id="message"></div>
			<form>
			<!--<form method="post" id="userForm" name="userForm" action="#">-->
        	<table id="userInfo">
			<tr>
				<td>
					<label>First Name</label><br/>
					<input id="firstName1" type="text" name="firstName" />
				</td>
				<td>
					<label>Last Name</label><br/>
					<input id="lastName1" type="text" name="lastName" />
				</td>
			</tr>
			<tr>
				<td colspan=2>
					<label>Email</label><br/>
					<input id="email1" size="50" type="email" name="email"  placeholder="Format for email is xxx@yyy.zzz"/>
				</td>
			
			</tr>
			<tr>
				<td>
					<label>Username</label><br/>
					<input id="userName1" type="text" name="userName" placeholder="Must be unique"/>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<label>Password</label><br/>
					<input id ="firstpass" type="password" name="password" />
				</td>
				<td>
					<label>Confirm Password</label><br/>
					<input id="secondpass" type="password" name="password2" />
				</td>
			</tr>
			<tr>
				<td>
					<label>Are you...</label>
					<br/>
					<input type="radio" id="sex" name="sex" value="male">Male
					<br/>
					<input type="radio" id="sex1" name="sex" value="female">Female
					<br/>
					<input type="radio" id="sex2" name="sex" value="no" checked>Prefer not to answer
				</td>
				<td>
					<label>Choose your town</label><br/>
					<select id="town" name="town">
						<option value="Corvallis">Corvallis</option>
						<option value="Albany">Albany</option>
						<option value="Philomath">Philomath</option>
						<option value="Newport">Newport</option>
						<option value="Eugene">Eugene</option>
						<option value="Other">Other</option>
					</select>
				</td>
			</tr>			
		</table>
		
		
		<br/><br/>
		<input type="checkbox" id="accept" name="accept"> I agree to the <a href="#">Terms of the Site</a>
		<br/>
		<input type="checkbox" id="promos" name="promos" checked> I would like to receive news and promotions email
		<br/><br/>
		<button type="button" onclick="checkAccount()">Create</button>
		<!--<input onclick="checkAccount()" type='button' value='Submit' id='Submit'>-->
		</form>
        
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>