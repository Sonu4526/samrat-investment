<?php
	define('db_host', 'localhost');
	define('db_user', 'root');
	define('db_pass', '');
	define('db_name', 'db_angular');
	
	$conn = new mysqli(db_host, db_user, db_pass, db_name);
	if(!$conn){
		die("Fatal Error: Can't connect to database");
	}
?>