<!DOCTYPE html>
<html>
	<!-- Login page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: login.html
	-->
	<head>
		<title>Log In</title>
			<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
	<h1 id="">Log In Page</h1>
        <br/><br/>
        <section class="">
            <img class="login" alt="image doesn't point to anything right now" src="./images/OSU.jpg"/>
        </section>
        <br/>
        <section class="">
            <form method="" action="" id="login_form"></form>
        	<h2 class="">Log In</h2>
        	
        	<label>Username</label><br/>
			<input type="text" form="login_form" name="username"/>
			<br/><br/>
			<label>Password</label><br/>
			<input type="password" form="login_form" name="password"/>
			
			<br/><br/>
			
			<p>
			    <a href="#">Forgot username?</a>
			    <br/>
			    <a href="#">Forgot password?</a>
			</p>
			
			<button type="submit" form="login_form">Log In</button>
        	
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>