<?php

	//error_reporting code
  	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
  	ini_set('display_errors' , 1);

  	function redirect ($message, $url, $delay)
  	{
  
  		echo $message;
  		header("refresh: $delay, url = $url"); 

  		exit();
  	}

	function isLoggedIn()
	{
		if(!isset($_SESSION['logged']))
		{
			redirect ("Please Login! Redirecting to login.php", "login.php", 3);
		}
	}

?>