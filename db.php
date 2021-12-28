<?php
	$servername = "localhost";
	$username = "root";
	$password = "9111";
	$dbname = "DB_1";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	?>