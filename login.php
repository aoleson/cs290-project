<!DOCTYPE html>
<html>
	<!-- Login page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: login.html
	-->
	<head>
		<title>Log In</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
	<h1>Log In Page</h1>
        <br/><br/>
        <section class="">
            <img class="login" alt="OSU" src="./images/OSU.jpg"/>
        </section>
        <br/>
        <section style="text-align:center" class="">
            <form method="" action="" id="login_form"></form>
        	<h2 class="">Log In</h2>
        	
        	<label>Username</label><br/>
			<input type="text" form="login_form" name="username"/>
			<br/><br/>
			<label>Password</label><br/>
			<input type="password" form="login_form" name="password"/>
			<br/>
			<button type="submit" form="login_form">Log In</button>
			<br/><br/>
			
			<p>
			    <a href="./createAccount.php">Create an Account</a>
			</p>
        	
        </section>
        <br/><br/>
        <?php include "./php/footer.php"; ?>
	</body>

</html>