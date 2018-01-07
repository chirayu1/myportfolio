<?php

	//error_reporting code
  	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
  	ini_set('display_errors' , 1);

  	include('functions.php');
	include('db_connection.php');


	if((!(isset($_POST['name']))) || ($_POST['name'] == "") || (!(isset($_POST['subject']))) || ($_POST['subject'] == "") || (!(isset($_POST['email']))) || ($_POST['email'] == "") || (!(isset($_POST['feedback']))) || ($_POST['feedback'] == ""))
	{
		echo "Something is not right! Please submit the form again.";
		return;	
	} else {
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];

		$myemail = "chirayu9515@gmail.com";
		$to = $myemail;
		$subject = $subject;
		$message = $feedback;
		$headers  = "From: ".$email."\r\n";

		$mailed = mail($to,$subject,$message,$headers);

		if($mailed)
		{
			echo "<h2>Mail is successful! :)</h2>";
			redirect("<h2>Redirecting you back to home page...</h2>", 'index.php', 5);
		}
		else{
			echo "<h2>Mail failed! :(</h2>";
			redirect("<h2>Redirecting you back to home page...</h2>", 'index.php', 5);
		}
	}
?>