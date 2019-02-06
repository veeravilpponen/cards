<?php

function connect_db() {
	$ini = parse_ini_file('../../../credentials.ini');
	$servername = $ini['servername'];
	$username = $ini['username'];
	$password = $ini['password'];
	$dbname = $ini['dbname'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {
	}
	return $conn;
}

?> 

