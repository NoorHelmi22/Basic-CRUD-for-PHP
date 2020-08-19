<?php // Connects to your Database 
	
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="dbname"; // Database name 

	// Connect to server and select databse.
	$conn = mysqli_connect($host, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}				
?>