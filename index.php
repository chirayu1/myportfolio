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

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Personal CSS Style Sheet -->
	<link rel="stylesheet" href="css/style.css">
	
	<title>MyPortfolio | Chirayu Patel</title>

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
				<!-- Toggler/collapsible Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
				  <ul class="navbar-nav ml-auto">
				    <li class="nav-item">
				      <a class="nav-link" href="#about">About</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#portfolio">Projects</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#personal">Personal</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" target="_blank" href="resume.php">Resume</a>
				    </li>
				    <!-- <li class="nav-item">
				      <a class="nav-link" href="#">Cover Letter</a>
				    </li> -->
				    <li class="nav-item">
				      <a class="nav-link" href="#contact">Contact Me</a>
				    </li>
				    <li class="nav-item active">
				      <a class="nav-link" href="login.php">Login</a>
				    </li>
				  </ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Main Image-->
	<div class="container">
		<br>
		<div class="alert alert-warning">This site is currently going under site maintenance.</div>
		<img class="img-fluid main" src="img/main_image.jpg" alt="image" max-width="1300px"> 
		<h1 class="text-center" id="head-title">Welcome to MyPortfolio!</h1>
	</div>

	<hr>

	<!-- About page -->
	<div class="container about" id="about">
		<h3>About</h3>
		<div class="row">
			<div class="about-content col-md-6">
				<blockquote class="blockquote">
					<div class="about-me"><?php echo $row['about'];?></div>
					<!-- Add linkedin button and github button-->
				</blockquote>
				<div class="social-media-buttons">
					<span><a href="https://www.linkedin.com/in/chirayu-patel-2a391a85" target="_blank" class="btn btn-outline-primary">View my LinkedIn</a></span>
					<span><a href="https://github.com/chirayu1" class="btn btn-outline-success" target="_blank">View my GitHub</a></span>
					<span><a href="resume.php" class="btn btn-outline-danger" target="_blank">View my Resume</a></span>
				</div>
			</div>
			<div class="col-md-6">
				<img class="img-thumbnail grad" src="img/grad.jpg" alt="grad image" width="300px">
				<img class="img-thumbnail" src="img/me.jpg" alt="my image" max-width="300px">
			</div>
		</div>
	</div>
	<hr>

	<!-- Portfolio page -->
	<div class="container portfolio" id="portfolio">
		<h3>Projects</h3>
		<br>
		<div class="row">
			<div class="portfolio-content col-md-4">
				<div class="card">
					<img class="card-img-top img-thumbnail" src="img/portal/home_page.jpg" alt="Home Page" max-width="400px">
					<div class="card-body">
						<h5 class="card-title">Teacher|Student Exam Portal</h5>
						<div class="progress">
						    <div class="progress-bar" style="width:100%">100%</div>
						</div>
						<br>
						<p class="card-text">This project focused on creating an MVC architecture style student to teacher exam portal. </p>
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
						<br>
						<div class="buttons text-center">
							<a href="https://web.njit.edu/~cp262/rc" target="_blank" class="btn btn-outline-primary">Live Demo</a>
							<a href="https://github.com/chirayu1/Senior-Project---Teacher-Student-Exam-Portal" class="btn btn-outline-success" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center" target="_blank">
							<a href="portal-images.php" target="_blank" class="btn btn-outline-info">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top img-thumbnail img-fluid app-image" src="img/animodules/home_screen_page.jpg" alt="Home Page App">
					<div class="card-body">
						<h4 class="card-title">Animodules App</h4>
						<div class="progress">
						    <div class="progress-bar" style="width:100%">100%</div>
						</div>
						<br>
						<p class="card-text">This project was focused on developing an Android app for the Barat Foundation.</p>
						<div class="badges">
						  <span class="badge badge-pill badge-success">Java</span>
						  <span class="badge badge-pill badge-success" style="background-color: #28A79E;">Android Studio</span>
						  <span class="badge badge-pill badge-warning">JSON</span>
						  <span class="badge badge-pill badge-light">XML</span>
						  <span class="badge badge-pill badge-info">PHP</span>
						  <span class="badge badge-pill badge-dark">MySQL</span>
						</div>
						<br>
						<div class="buttons text-center">
							<a href="#" class="btn btn-outline-primary disabled" target="_blank">Live Demo</a>
							<a href="https://github.com/chirayu1/Animodules" class="btn btn-outline-success" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center">
							<a href="animodules-images.php" class="btn btn-outline-info" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top img-thumbnail" src="img/MyPortfolio/home_page.png" alt="Home Page" max-width="400px">
					<div class="card-body">
						<h4 class="card-title">MyPortfolio</h4>
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">50%</div>
						</div>
						<br>
						<p class="card-text">This project focuses on my portfolio work.</p>
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
						<br>
						<div class="buttons text-center">
							<a href="index.php" class="btn btn-outline-primary" target="_blank">Live Demo</a>
							<a href="https://github.com/chirayu1/myportfolio" class="btn btn-outline-success" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center">
							<a href="portfolio-images.php" class="btn btn-outline-info" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top img-thumbnail" src="img/pizza/home_page.png" alt="Home Page" max-width="400px">
					<div class="card-body">
						<h4 class="card-title">New York's Finest Pizza & Subs</h4>
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">90%</div>
						</div>
						<br>
						<p class="card-text">This project focused on developing a pizza restaurant website using Bootstrap 4 and AngularJS. </p>
						<div class="badges">
						  <span class="badge badge-pill badge-primary">HTML5</span>
						  <span class="badge badge-pill badge-danger">CSS3</span>
						  <span class="badge badge-pill badge-primary">Bootstrap 4</span>
						  <span class="badge badge-pill badge-danger">AngularJS</span>
		          <span class="badge badge-pill badge-warning">JSON</span>
		          <span class="badge badge-pill badge-success">Google Maps</span>
						</div>
						<br>
						<div class="buttons text-center">
							<a href="https://web.njit.edu/~cp262/pizza/" class="btn btn-outline-primary" target="_blank">Live Demo</a>
							<a href="https://github.com/chirayu1/pizza" class="btn btn-outline-success" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center">
							<a href="pizza-images.php" class="btn btn-outline-info" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="http://via.placeholder.com/400x400" alt="Card image" style="width: 100%">
					<div class="card-body">
						<h4 class="card-title">Coming Soon</h4>
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%">0%</div>
						</div>
						<br>
						<p class="card-text">Blog </p>
						<div class="buttons text-center">
							<a href="#" class="btn btn-outline-primary disabled" target="_blank">Live Demo</a>
							<a href="#" class="btn btn-outline-success disabled" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center">
							<a href="#" class="btn btn-outline-info disabled" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="http://via.placeholder.com/400x400" alt="Card image" style="width: 100%">
					<div class="card-body">
						<h4 class="card-title">Coming Soon</h4>
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%">0%</div>
						</div>
						<br>
						<p class="card-text">iOS Weather App using Swift </p>
						<div class="buttons text-center">
							<a href="#" class="btn btn-outline-primary disabled" target="_blank">Live Demo</a>
							<a href="#" class="btn btn-outline-success disabled" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center">
							<a href="#" class="btn btn-outline-info disabled" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="http://via.placeholder.com/400x400" alt="Card image" style="width: 100%">
					<div class="card-body">
						<h4 class="card-title">Coming Soon</h4>
						<div class="progress">
					    	<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%">0%</div>
						</div>
						<br>
						<p class="card-text">Fetching Stocks Web using AngularJS API</p>
						<div class="buttons text-center">
							<a href="#" class="btn btn-outline-primary disabled" target="_blank">Live Demo</a>
							<a href="#" class="btn btn-outline-success disabled" target="_blank">View on GitHub</a>
						</div>
						<div class="image-button text-center">
						<a href="#" class="btn btn-outline-info disabled" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<!-- Personal page -->
	<div class="container personal" id="personal">
		<h3>Personal Interests/Hobbies</h3>
		<div class="personal-content">
			<div class="row">
				<div class="col-md-6">
					<p class="personal-me"><?php echo $row['personal'];?></p>
				</div>
				<div class="col-md-6">
					<img class="img-fluid" src="img/collage-image.png" alt="Collage Image">
				</div>
			</div>
		</div>
	</div>

	<hr>

	<!-- Contact Me page -->
	<div class="container contact" id="contact">
		<h3>Contact Me</h3>
		<div class="contact-me">
			<div class="row">
				<div class="col-md-12">
					<p>Please feel free to contact me if you have any questions or just want to get in touch!</p>
		      <div class="alert alert-warning">NOTE: Please use ONLY gmail OR hotmail OR manually contact me.</div>
          <br>
					<form action="send-form.php" method="POST">
						<div class="form-group">
						   <label for="name">Name:</label>
						   <input type="name" class="form-control" id="name" name="name" placeholder="Your Name" required>
						</div>
						<div class="form-group">
						   <label for="subject">Subject:</label>
						   <input type="name" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						</div>
						<div class="form-group">
						   <label for="email">Email:</label>
						   <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
						</div>
						<div class="form-group">
						   <label for="question">Questions or Comments:</label>
						   <textarea class="form-control" id="textarea" rows="7" name="feedback" placeholder="Questions or Comments" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary text-center" style="width:100%;">Submit</button>
					</form>
				</div>
			</div>
		</div>
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