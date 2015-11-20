<!DOCTYPE html>
<html>
	<!-- Home page for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: index.html
	-->
	<head>
		<title>freeFoodAtOSU.com</title>
	    <link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
		<script src="./js/SSproject.js"></script>
	</head>
	
	<body>
		<?php include "./php/header.php"; ?>
		<?php include "./php/nav.php"; ?>
        <section class="centered">
            <h1 id="">Welcome to Free Food @ OSU!</h1>
            <br/><br/>
            <img class="ss" onload="slideShow()" id="image" alt="image doesn't point to anything right now" src="./images/Weatherford.jpg"/>
        </section>
        <br/>
        <section class="centered">
            <h3 class="">Words (description?)</h3>
            <p>Hello words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words </p>
        </section>
        <br/>
        <section class ="centered">
            <button type="button">Campus Map</button>
            <button type="button">Calendar Preview</button>
            <button type="button">Become a member today!</button>
        </section>
        <?php include "./php/footer.php"; ?>
	</body>

</html>