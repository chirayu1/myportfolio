<?php

	//error_reporting code
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
  	ini_set('display_errors' , 1);

	session_start();
	session_destroy();
	header('Location: login.php');
?>