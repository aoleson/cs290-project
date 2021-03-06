<!DOCTYPE html>
<html>
<head>
    <title>Log Out</title>
    <link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./styles/styles.css" />
</head>
<body>

<?php 
	session_start();
//	include 'connectvars.php';
?>
    <?php include './php/header.php'; ?>
    <?php include './php/nav.php'; ?>
	<h1> Log Out Page </h1>
	<br/><br/>
	<?php
	    $old_user = $_SESSION['valid_user'];
	    unset($_SESSION['valid_user']);
	    session_destroy();
		if (!empty($old_user)) {
		    echo '<h1 class="centered">Thanks <span style="color:orange">'.$old_user.'</span> for stopping by!</h1><br/><br/><br/>';
		} 
		else {
			echo '<h2 class="centered">You were not logged in!<br/><br/><br/></h2>';
		}
	//	mysql_close($dbc);
	?>
	<br/><br/>
	<?php include './php/footer.php'; ?>
</body>
</html>

