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
	
	<title>New York's Finest Pizza & Subs Images | MyPortfolio</title>

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

	<!-- Main Content -->
	<div class="container">	
		<section class="project-title">
			<h3>New York's Finest Pizza & Subs</h3>
		</section>
		<hr>
		<section class="images">
			<h5>Images</h5>
			<div id="slideshow-images" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ul class="carousel-indicators">
			    	<li data-target="#slideshow-images" data-slide-to="0" class="active"></li>
			    	<li data-target="#slideshow-images" data-slide-to="1"></li>
			    	<li data-target="#slideshow-images" data-slide-to="2"></li>
			    	<li data-target="#slideshow-images" data-slide-to="3"></li>
			    	<li data-target="#slideshow-images" data-slide-to="4"></li>
			    	<li data-target="#slideshow-images" data-slide-to="5"></li>
			  	</ul>

			  	<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
				      <img class="img-fluid" src="img/pizza/home_page.png" alt="Home Page ">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/pizza/image2.png" alt="Image 2">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/pizza/image3.png" alt="Image 3">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/pizza/image4.png" alt="Image 4">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/pizza/image5.png" alt="Image 5">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/pizza/image6.png" alt="Image 6">
				    </div>
				</div>

				<!-- Left and right controls -->
			  	<a class="carousel-control-prev" href="#slideshow-images" data-slide="prev">
			    	<span class="carousel-control-prev-icon"></span>
			  	</a>
			  	<a class="carousel-control-next" href="#slideshow-images" data-slide="next">
			    	<span class="carousel-control-next-icon"></span>
			 	</a>
			</div>
		</section>
		<br>
		<section class="description">
			<h5>Description</h5>
			<p>This project focused on developing a pizza restaurant website using Bootstrap 4 and AngularJS.</p>
		</section>
		<section class="role">
			<h5>Role</h5>
			<p>Front-End Developer</p>
		</section>
		<section class="skills">
			<h5>Skills</h5>
			<div class="badges">
			  <span class="badge badge-pill badge-primary">HTML5</span>
			  <span class="badge badge-pill badge-danger">CSS3</span>
			  <span class="badge badge-pill badge-primary">Bootstrap 4</span>
			  <span class="badge badge-pill badge-danger">AngularJS</span>
        <span class="badge badge-pill badge-warning">JSON</span>
        <span class="badge badge-pill badge-success">Google Maps</span>
			</div>
		</section>
   	<br>
		<section class="responsibilities">
			<h5>Responsibilities</h5>
			<ul>
	      <li>Implemented HTML5, CSS3, and Bootstrap 4 for Front-End User Interface.</li>
        <li>Constructed a Single Page Application with AngularJS.</li>
        <li>Created JSON data for menu items that can easily be retrieved using AngularJS.</li>
        <li>Added Google Maps for approximate location of the restaurant.</li>
        <li>Designed relative desktop to mobile layout using Bootstrap 4.</li>   
			</ul>
		</section>
    <br>
		<section class="project-links">
			<h5>Project Links</h5>
			<div class="buttons">
				<a href="https://web.njit.edu/~cp262/pizza/" class="btn btn-outline-primary" target="_blank">Live Demo</a>
				<a href="https://github.com/chirayu1/pizza" class="btn btn-outline-success" target="_blank">View on GitHub</a>
			</div>
		</section>
	</div>

	<hr>
	<!-- Footer -->
	<footer>
		<div class="container text-center">
        	<p>Copyright &copy; <?php echo $row['title']; } } ?> <script>var d = new Date(); document.write(d.getFullYear());</script></p>
      	</div>
	</footer>
</body>
</html>