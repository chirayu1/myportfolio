<?php

	include('db_connection.php');

	$footer_title = $_POST['footer_title'];

	$sql = "UPDATE description SET title='$footer_title'";

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