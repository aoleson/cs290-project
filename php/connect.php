<?php 
    define('DBHOST', 'oniddb.cws.oregonstate.edu');
    define('DBUSER', 'olesona-db');
    define('DBPASS', 'B1eqQ5H7AmpqqjDj');
    define('DBNAME', 'olesona-db');
	
	$dbc = mysql_connect(DBHOST, DBUSER, DBPASS, DBNAME)
		or die("Error connecting to database server");

	mysql_select_db(DBNAME, $dbc)
		or die("Error selecting database: " . DBNAME);

	echo 'Successfully connected to database!';
	
?>