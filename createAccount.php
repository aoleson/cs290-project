<!DOCTYPE html>
<html>
	<!-- Create an account page for freeFoodAtOSU.com.
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: createAccount.html
	-->
	<head>
		<title>Create an Account</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
		<h1 id="name">Create an Account</h1>
		
        <br/><br/>
        <img class="login" src="./images/oregon_state.jpg" alt="logo goes here"/>
        
        <br/><br/>
        
        <section class="">
        
        	<form method="" action="" id="create_form"></form>
        	<h3 class="centered">Sign up for freeFoodAtOSU.com!</h3>
        	
        	<br/><br/>
        	
        	<table id="userInfo">
			<tr>
				<td>
					<label>First Name</label><br/>
					<input type="text" form="create_form" name="first"/>
				</td>
				<td>
					<label>Last Name</label><br/>
					<input type="text" form="create_form" name="last"/>
				</td>
			</tr>
			<tr>
				<td colspan=2>
					<label>Email</label><br/>
					<input size="50" type="email" form="create_form" placeholder="Format for email is xxx@yyy.zzz" name="email"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Username</label><br/>
					<input type="text" form="create_form" name="first" placeholder="Must be unique"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Password</label><br/>
					<input type="password" form="create_form" name="pass1"/>
				</td>
				<td>
					<label>Confirm Password</label><br/>
					<input type="password" form="create_form" name="pass2"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Are you...</label>
					<br/>
					<input type="radio" form="create_form" name="sex" value="male">Male
					<br/>
					<input type="radio" form="create_form" name="sex" value="female">Female
					<br/>
					<input type="radio" form="create_form" name="sex" value="no">Prefer not to answer
				</td>
				<td>
					<label>Choose your town</label><br/>
					<select form="create_form" name="country">
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
		<input type="checkbox" form="create_form" name="accept"> I agree to the <a href="#">Terms of the Site</a>
		<br/>
		<input type="checkbox" form="create_form" name="promos" checked> I would like to receive news and promotions email
		<br/><br/>
		
        <button type="submit" form="create_form"><img alt="Green checkmark" src="./images/button_ok.png"/>Sign me up!</button>
        
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>