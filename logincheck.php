<?php

	//echo "You are in logincheck.php";
	
	session_start();

	//error_reporting code
  	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
  	ini_set('display_errors' , 1);

	$username = $_POST['username'];
	$password = $_POST['password'];


	//$username = mysqli_escape_string($username);
	//$password = mysqli_escape_string($password);

	$response = array();

	if($username == "admin" && $password == "pass")
	{
		$response = array(
			'status' => true
		);

		$_SESSION['logged'] = true;
		$_SESSION['user'] = $username;
		$_SESSION['pass'] = $password;

	} else {
		$response = array(
			'status' => false,
			'message' => "Failed to authenticate!"
		);

		$_SESSION['logged'] = false;
	}

	echo json_encode($response);

?>