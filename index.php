<!DOCTYPE html>
<html>
	<!-- Home page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: index.php
	-->
	<head>
		<title>freeFoodAtOSU.com</title>
		<link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
	    <link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
		<script src="./js/SSproject.js"></script>
	</head>
	
	<body onload="set_pic(0)">
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
        <section class="centered">
            <h1>Welcome to Free Food @ OSU!</h1>
            <p class="ss" id="which">0</p>
            <img class="ss" id="image" alt="image doesn't point to anything right now" src="./images/Weatherford.jpg"/>
            <p><button type="button" onclick="prev()">Prev</button> &nbsp; &nbsp;
            <button type="button" onclick="next()">Next</button></p>
        <br/>
            <p>FreeFood@OSU is an online resource for hungry students. Through the participation of the student community, we provide the date, time, and location of various events throughout campus that provide free food. To the public, we offer information for all public events that are created on this site. Members have the ability to add events to the calendar as well as have the option to make events private. Along with memership comes a private events calendar generated specially for you! Create an account to access all the features that freeFood@OSU has to offer! </p>
        </section>
        <br/>
        <?php include "./php/footer.php"; ?>
	</body>

</html>