<?php

	
	define('DBHOST', 'localhost');
	define('DBUSER', 'php');
	define('DBPASS', 'toor');
	define('DBNAME', 'project');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
?>
