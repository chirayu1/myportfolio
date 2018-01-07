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
	
	<title>Portal Images | MyPortfolio</title>

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
			<h3>Teacher | Student Exam Portal</h3>
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
				      <img class="img-fluid" src="img/portal/home_page.jpg" alt="Home Page Portal">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/portal/student_portal1.jpg" alt="Student Portal">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/portal/teacher_portal1.jpg" alt="Teacher Portal">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/portal/teacher_portal2.jpg" alt="Student Portal">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/portal/teacher_portal3.jpg" alt="Student Portal">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="img/portal/teacher_portal4.jpg" alt="Student Portal">
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
			<p>This project focused on creating an MVC style student to teacher exam portal. </p>
		</section>
		<section class="role">
			<h5>Role</h5>
			<p>Front-End Developer</p>
		</section>
		<section class="skills">
			<h5>Skills</h5>
			<div class="badges">
			  <span class="badge badge-pill badge-primary">HTML</span>
			  <span class="badge badge-pill badge-danger">CSS</span>
			  <span class="badge badge-pill badge-success">JavaScript</span>
			  <span class="badge badge-pill badge-light">DOM</span>
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
				<li>Designed the home page, student portal, and teacher portal using HTML and CSS.</li>
				<li>Created a login system and allowed user to input valid credentials to access their portal.</li>
				<li>Implemented AJAX and JavaScript for creating questions and exams functionalities. </li>
				<li>Enforced CURL PHP to send data to the Back-End and receive data back using JSON.</li>
				<li>Performed a MVC architecture for a friendly user interface and web applications.</li>
			</ul>
		</section>
    <br>
		<section class="project-links">
			<h5>Project Links</h5>
			<div class="buttons">
				<a href="https://web.njit.edu/~cp262/rc" target="_blank" class="btn btn-outline-primary">Live Demo</a>
				<a href="https://github.com/chirayu1/Senior-Project---Teacher-Student-Exam-Portal" class="btn btn-outline-success" target="_blank">View on GitHub</a>
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