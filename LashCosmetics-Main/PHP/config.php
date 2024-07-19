<?php
	# Declare the database credentials
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lashcosmetics";

	# Establish a connection 
	$conn = new mysqli($host, $username, $password, $dbname);

	# Verify connection
	if($conn->connect_error){
		echo "Failed to connect to DB" .$conn->connect_error;
	}

?>


