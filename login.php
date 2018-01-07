<?php

	include('functions.php');
	include('db_connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- BOOTSTRAP -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>  

	<link rel="stylesheet" href="css/style.css">
	
	<title>MyPortfolio | Login Page</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

</head>
<body>


	<?php
		$sql = "SELECT * FROM description";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
	
	?>

	<!-- Header -->
	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-md bg-info navbar-dark">
			<div class="container">
				<!-- Brand -->
				<a class="navbar-brand" href="index.php">MyPortfolio</a>
			</div>
		</nav>
	</header>

	<br>
	<!-- Display Message Box -->
	<div class="container">
	  <div class="jumbotron">
	  	<div class="text-center">
	    	<h1>Welcome to the Login page!</h1>      
	    	<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
	    </div>
	  </div>    
	</div>



	<!-- Login Form -->
	<form class="container" style="width: 60%;" ng-app="myApp" ng-controller="validateCtrl" name="myForm">
	  <div class="alert alert-danger" id="failed" style="display:none;"></div>
	  <h3 class="text-center">Login Form</h3>
	  <div class="form-group">
	    <label for="InputUsername">Username</label>
	    <input type="text" class="form-control" id="InputUsername" name="username" placeholder="Enter Username" ng-model="username" required="required">
	    <span style="color:red" ng-show="myForm.username.$dirty && myForm.username.$invalid">
	    <span ng-show="myForm.username.$error.required">Username is required.</span>
		</span>
	  </div>
	  <div class="form-group">
	    <label for="InputPassword">Password</label>
	    <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password" ng-model="password" required="required">
	    <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
	    <span ng-show="myForm.password.$error.required">Password is required.</span>
		</span>
	  </div>
	  <div class="form-group text-center">
	  	<button type="button" id="login" class="btn btn-primary" ng-disabled="myForm.username.$dirty && myForm.username.$invalid || myForm.password.$dirty && myForm.password.$invalid" style="background-color:#17a2b8!important; border-color:#17a2b8!important;">Login</button>
	  </div>
	</form>


	<hr>
	<!-- Footer -->
	<footer>
		<div class="container text-center">
        	<p>Copyright &copy; <?php echo $row['title']; } } ?> <script>var d = new Date(); document.write(d.getFullYear());</script></p>
      </div>
	</footer>

	<!-- AngularJS code -->
	<script>
		var app = angular.module('myApp', []);
		app.controller('validateCtrl', function($scope){

		});
	</script>
	
	<!-- AJAX jQuery code for login -->
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>