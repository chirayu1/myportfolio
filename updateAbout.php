<?php

	include('db_connection.php');

	$about = $_POST['about'];

	$sql = "UPDATE description SET about='$about'";

	$response = array();

	if($conn->query($sql) === TRUE){
	 	$response = array(
	 		'status' => "success",
	 		'message' => "Record updated successfully"
	 	);
		
	} else {
	 	$response = array(
	 		'status' => "failed",
	 		'message' => "Error updating record: " . $conn->error
	 	);
	}

	echo json_encode($response);
	$conn->close();

?>