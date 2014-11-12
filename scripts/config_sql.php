<?php
	
	$sql_hostname = "localhost"; //Enter hostname
	$sql_user = "root"; // Enter Username
	$sql_password = "password"; // Enter password
	$sql_db = "janta_store"; // Enter db_name
	
	$mysqli = new mysqli( $sql_hostname, $sql_user, $sql_password, $sql_db );
	if (!$mysqli) {
		die("Connection Problem. Check credentials.");
	}
?>
