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
	
	<title>Animodules Images | MyPortfolio</title>

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
			<h3>Animodules App</h3>
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
				      <img class="img-fluid" src="img/animodules/home_screen_page.jpg" alt="Home Page App" style="max-width: 400px;">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/animodules/image2.jpg" alt="Menu Image 1" style="max-width: 400px;">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/animodules/image3.jpg" alt="Menu Image 2" style="max-width: 400px;">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/animodules/image4.jpg" alt="Menu Image 3" style="max-width: 400px;">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/animodules/image5.jpg" alt="Menu Image 4" style="max-width: 400px;">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/animodules/image6.jpg" alt="Drawing image" style="max-width: 400px;">
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
			<p>This project was focused on developing an Android app for the Barat Foundation.</p>
		</section>
		<section class="role">
			<h5>Role</h5>
			<p>Android Developer/Co-Project Manager</p>
		</section>
		<section class="skills">
			<h5>Skills</h5>
			<div class="badges">
			  <span class="badge badge-pill badge-success">Java</span>
			  <span class="badge badge-pill badge-success" style="background-color: #28A79E;">Android Studio</span>
			  <span class="badge badge-pill badge-warning">JSON</span>
			  <span class="badge badge-pill badge-light">XML</span>
			  <span class="badge badge-pill badge-info">PHP</span>
			  <span class="badge badge-pill badge-dark">MySQL</span>
			</div>
		</section>
		<br>
		<section class="responsibilities">
			<h5>Responsibilities</h5>
			<ul>
				<li>Designed layouts for the app using a Wireframe software.</li>
				<li>Implemented a database for user login and registration purposes.</li>
				<li>Assisted Project Manager with the required documentations.</li>
				<li>Helped other team members in the group developing the app.</li>
				<li>Troubleshooted Java/Android Studio code implementation.</li>
				<li>Tested the application’s features and functionalities.</li>
			</ul>
		</section>
    <br>
		<section class="project-links">
			<h5>Project Links</h5>
			<div class="buttons">
				<a href="#" class="btn btn-outline-primary disabled" target="_blank">Live Demo</a>
				<a href="https://github.com/chirayu1/Animodules" class="btn btn-outline-success" target="_blank">View on GitHub</a>
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