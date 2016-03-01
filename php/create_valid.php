<?php
     include "../php/connect.php"; 
	
					$userName = $_GET['userName']; 
					$password1 = $_GET['password1'];
					$password2 = $_GET['password2'];
					$firstName = $_GET['firstName'];
					$lastName = $_GET['lastName'];
					$email = $_GET['email'];
					$sex = $_GET['sex'];
					$town = $_GET['town'];
					$accept = $_GET['accept'];
					$promos = $_GET['promos'];
					
				/*	print $userName; 
					print $password1;
					print $password2;
					print $firstName;
					print $lastName;
					print $email;
					print $sex;
					print $town;
					print $accept;
					print $promos;
					*/
				
					if ($accept == 'false') {
						echo '<p class = "error">You must accept the Terms of the Site to create an account.</p>';
					}
					

					if (!empty($userName) && !empty($password1) && !empty($password2) && !empty($firstName) && !empty($lastName) && !empty($email) && $accept != 'false' && !empty($sex)) {
					  // Make sure someone isn't already registered using this username
					  $query = "SELECT * FROM projectUsers WHERE userName = '$userName'";
					  $data = mysql_query($query);
					  if (mysql_num_rows($data) == 0) {
						// The username is unique, so check that the passwords are valid and match
							if (!preg_match("/[A-Z][a-zA-Z0-9]*\d{2}/", $password1)) {
								echo "<p class = 'error'> Password not in correct format </p";
							}
							
							else if($password1 != $password2) {
								echo "<p class = 'error'> Passwords did not match. </p>";
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
								echo '<h4><img src="./images/tick.gif" alt="tick" />Your new account has been successfully created. You can now log in!!</h4><br/>';

								mysql_close($dbc);
								exit();
							}
					  }
					  else {
						// An account already exists for this username, so display an error message
						echo '<p class="error">An account already exists for this username. Please choose a different username.</p>';
						$userName = "";
					  }
					}
					else {
					  echo '<p class="error">Make sure you fill in all fields! Please try again.</p>';
					}
			  

				//  mysql_close($dbc);
				?>