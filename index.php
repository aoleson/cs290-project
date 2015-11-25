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
            <p></p><button type="button" onclick="prev()">Prev</button> &nbsp; &nbsp;
            <button type="button" onclick="next()">Next</button></p>
        </section>
        <br/>
        <section class="centered">
            <h3 class="">Words (description?)</h3>
            <p>Hello words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words </p>
        </section>
        <br/>
        <?php include "./php/footer.php"; ?>
	</body>

</html>