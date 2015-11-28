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
			<?php
				  if (isset($_POST['submit'])) {
					// Grab the profile data from the POST
					$userName = $_POST['userName'];
					$password1 = $_POST['password'];
					$password2 = $_POST['password2'];
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];
					$email = $_POST['email'];
					$sex = $_POST['sex'];
					$town = $_POST['town'];
					$accept = $_POST['accept'];
					$promos = $_POST['promos'];
					
					if (!isset($_POST['accept']) || $accept == 'off') {
						echo '<h4 class = "centered">You must accept the Terms of the Site to create an account.</h4>';
					}
					

					if (!empty($userName) && !empty($password1) && !empty($password2) && !empty($firstName) && !empty($lastName) && !empty($email) && $accept != 'off') {
					  // Make sure someone isn't already registered using this username
					  $query = "SELECT * FROM projectUsers WHERE userName = '$userName'";
					  $data = mysql_query($query);
					  if (mysql_num_rows($data) == 0) {
						// The username is unique, so check that the passwords are valid and match
							if ($password1 != $password2) {
								echo "<h4 class = 'centered'> Passwords did not match. Please try again! </h4>";
							}
							else if (!preg_match("/[A-Z][a-zA-Z0-9]*\d{2}/", $password1)) {
								echo "<h4 class = 'centered'> Passwords are not in the correct format (begins with capital letter, ends with two digits). Please try again! </h4>";
							}
							else {
								$hashedPass = sha1($password1);
								if (empty($promos)) {
									$promos = "off";
								}
								$query = "INSERT INTO projectUsers (userName, password, firstName, lastName, email, sex, town, accept, promos) VALUES ('$userName', '$hashedPass', '$firstName', '$lastName', '$email', '$sex', '$town', '$accept', '$promos')";
								mysql_query($query)
									or die ("<h4>Query failed</h4>");

								// Confirm success with the user
								echo '<h4 class = "centered">Your new account has been successfully created. You\'re now ready to log in!!</h4>';

								mysql_close($dbc);
								exit();
							}
					  }
					  else {
						// An account already exists for this username, so display an error message
						echo '<h4 class="centered">An account already exists for this username. Please choose a different username.</h4>';
						$username = "";
					  }
					}
					else {
					  echo '<h4 class="centered">Make sure you fill in all fields! Please try again.</h4>';
					}
				  }
				  

				  mysql_close($dbc);
				?>
        	<p class = "centered">All fields are required. Passwords should begin with a capital letter and end with two digits (0-9).</p><br/><br/>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        	<table id="userInfo">
			<tr>
				<td>
					<label>First Name</label><br/>
					<input type="text" name="firstName" value/>
				</td>
				<td>
					<label>Last Name</label><br/>
					<input type="text" name="lastName"/>
				</td>
			</tr>
			<tr>
				<td colspan=2>
					<label>Email</label><br/>
					<input size="50" type="email" placeholder="Format for email is xxx@yyy.zzz" name="email"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Username</label><br/>
					<input type="text" name="userName" placeholder="Must be unique"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Password</label><br/>
					<input type="password" name="password"/>
				</td>
				<td>
					<label>Confirm Password</label><br/>
					<input type="password" name="password2"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Are you...</label>
					<br/>
					<input type="radio" name="sex" value="male">Male
					<br/>
					<input type="radio" name="sex" value="female">Female
					<br/>
					<input type="radio" name="sex" value="no">Prefer not to answer
				</td>
				<td>
					<label>Choose your town</label><br/>
					<select name="town">
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
		<input type="checkbox" name="accept"> I agree to the <a href="#">Terms of the Site</a>
		<br/>
		<input type="checkbox" name="promos" checked> I would like to receive news and promotions email
		<br/><br/>
		
        <input type="submit" value="Sign Me Up!!" name="submit" />
		
		</form>
        
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>