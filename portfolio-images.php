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
	
	<title>MyPortfolio Images | MyPortfolio</title>

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
			<h3>MyPortfolio</h3>
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
			    	<li data-target="#slideshow-images" data-slide-to="6"></li>
			    	<li data-target="#slideshow-images" data-slide-to="7"></li>
			    	<li data-target="#slideshow-images" data-slide-to="8"></li>
			    	<li data-target="#slideshow-images" data-slide-to="9"></li>
			    	<li data-target="#slideshow-images" data-slide-to="10"></li>
			    	<li data-target="#slideshow-images" data-slide-to="11"></li>
			    	<li data-target="#slideshow-images" data-slide-to="12"></li>
			    	<li data-target="#slideshow-images" data-slide-to="13"></li>
			  	</ul>

			  	<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
				      <img class="img-fluid" src="img/MyPortfolio/home_page.png" alt="Home Page ">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image2.png" alt="Image 2">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image3.png" alt="Image 3">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image4.png" alt="Image 4">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image5.png" alt="Image 5">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image6.png" alt="Image 6">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image7.png" alt="Image 7">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image8.png" alt="Image 8">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image9.png" alt="Image 9">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image10.png" alt="Image 10">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image11.png" alt="Image 11">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image12.png" alt="Image 12">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image13.png" alt="Image 13">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/MyPortfolio/image14.png" alt="Image 14">
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
			<p>This project focuses on my portfolio work.</p>
		</section>
		<section class="role">
			<h5>Role</h5>
			<p>Full-Stack Developer</p>
		</section>
		<section class="skills">
			<h5>Skills</h5>
			<div class="badges">
			  <span class="badge badge-pill badge-primary">HTML5</span>
			  <span class="badge badge-pill badge-danger">CSS3</span>
			  <span class="badge badge-pill badge-success">JavaScript</span>
	   	  <span class="badge badge-pill badge-success">jQuery</span>
	      <span class="badge badge-pill badge-danger">AngularJS</span>
	      <span class="badge badge-pill badge-primary">Bootstrap 4</span>
			  <span class="badge badge-pill badge-success" style="background-color: #28A79E;">AJAX</span>
			  <span class="badge badge-pill badge-warning">JSON</span>
			  <span class="badge badge-pill badge-info">PHP</span>
			  <span class="badge badge-pill badge-dark">MySQL</span>
			</div>
		</section>
		<br>
		<section class="responsibilities">
			<h5>Responsibilities</h5>
			<ul>
				<li>Designed the entire project using HTML5, CSS3, and Bootstrap 4.</li>
        <li>Built a partial admin CMS to edit and update content.</li>
        <li>Implemented AngularJS for login validation.</li>
        <li>Used AJAX, jQuery, and JSON to encode and authenticate data instantly.</li>
        <li>Constructed PHP and MySQL for mostly Front-End and Database implementation.</li>
        <li>Created an online resume template using W3.CSS Framework</li>   
			</ul>
		</section>
    <br>
		<section class="project-links">
			<h5>Project Links</h5>
			<div class="buttons">
				<a href="index.php" class="btn btn-outline-primary" target="_blank">Live Demo</a>
				<a href="https://github.com/chirayu1/myportfolio" class="btn btn-outline-success" target="_blank">View on GitHub</a>
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