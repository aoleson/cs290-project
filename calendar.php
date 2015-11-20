<!DOCTYPE html>
<html>
	<!-- Main public calendar for freeFoodAtOSU.com
		Name: Alannah Oleson, Corynna Park
		Date modified: 11/12/15
		Filename: calendar.html
	-->
	<head>
		<title>Calendar</title>
		<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./styles/styles.css"/>
		<script type="text/javascript" src="./calendar/script.js"></script>
        <link rel="stylesheet" href="./calendar/style.css" />
	</head>
	
	<body>
	<?php include "./php/header.php"; ?>
	<?php include "./php/nav.php"; ?>
	<h1 id="">Calendar of Events</h1>
	<br/>
        <div id="cal">
            <div class="container">
                <div class="controls">
                <p class="next label" onclick="nextMonth()"> Next </p>
                <p class="previous label" onclick="previousMonth()"> Prev </p>
                <p id="current-month" class="label bold">January</p>
            </div>

            <div class="calendar" id="calendar">
            </div>
       </div>
      
        <section class="centered">
            <h3 class="">Words (description?)</h3>
            <p>words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words words </p>
        </section>
        <br/>
        <?php include "./php/footer.php"; ?>
	</body>
	
	<!--Hey Amber-->

</html>