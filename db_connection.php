<?php
	
	$localhost = "sql2.njit.edu";
	$username = "cp262";
	$password = "pmq1HTaX";
	$dbname = "cp262";

	$conn = new mysqli($localhost, $username,$password, $dbname);
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}

?>