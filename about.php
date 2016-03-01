<!DOCTYPE html>
<html>
	<!-- About us page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: about.html
	-->
	<head>
		<title>About Us</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="./js/mapScript.js"></script>
	</head>
	
	<body>
	<?php include "./php/header.php"; ?>
	<?php include "./php/nav.php"; ?>
	<h1>About Us</h1>
        <br/><br/>
        <div id="googleMap"></div>
		<br/>
        <section class="centered">
            <h3>&nbsp; &nbsp;"If you really want to make a friend, go to someone's house and eat with him… the people who give you their food give you their heart." -Cesar Chavez &nbsp; &nbsp;</h3>
            <p>An idea started in a web development class at Oregon State University, freeFood@OSU is a student founded organization that strives to enrich the lives of students and the community through the universal love of food. Our site is based on the belief that college students have a single, unifying need; to survive. We hope that our site will enable students to better survive the hunger struggle that we all know too well. FreeFood@OSU is a site for the OSU community, made possible by the OSU community. Whether you're here to reap from its contributions, or make some contributions of your own, thank you for empowering the success of this site. Feel free to spread the word! Cause who doesn't love free food? </p>
        </section>
        
        <p class ="centered">
            <a href="./createAccount.php">Become a member today!</a>
        </p>
        <?php include "./php/footer.php"; ?>
	</body>
	

</html>