<?php
	session_start();

	include('functions.php');
	include('db_connection.php');

	isLoggedIn();
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

	<link rel="stylesheet" href="css/style.css">
	
	<title>Admin Page | Users</title>

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
			<div class="container-fluid">
				<!-- Brand -->
				<a class="navbar-brand" href="dashboard.php">MyPortfolio | Admin</a>
				<ul class="navbar-nav">
				  <li class="nav-item active">
				    <a class="nav-link" href="logout.php">Logout</a>
				  </li>
				</ul>
			</div>
		</nav>
	</header>

	<br>
	<!-- Dashboard -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
				    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
				    <a href="#" class="list-group-item list-group-item-action">Header</a>
				    <a href="about-admin.php" class="list-group-item list-group-item-action">About</a>
				    <a href="portfolio-admin.php" class="list-group-item list-group-item-action">Portfolio</a>
				    <a href="personal-admin.php" class="list-group-item list-group-item-action">Personal</a>
				    <a href="users-admin.php" class="list-group-item list-group-item-action active">Users</a>
				    <a href="footer-admin.php" class="list-group-item list-group-item-action">Footer</a>
				</div>
			</div>
			<div class="col-md-9">
				<h2>Create, Edit, Update and Delete Users </h2>
				<hr>
				<!-- <div class="row">
					<div class="col-lg-10">
						<h2>Create, Edit, Update and Delete Users </h2>
					</div>
					<div class="col-lg-2">
						<button class="btn btn-primary active" data-toggle="modal" data-target="#myModal" type="submit">Create User</button>
					</div>
				</div>

				<hr> 

				<!-- The Modal -->
				<!-- <div class="modal fade" id="myModal">
				   <div class="modal-dialog">
				      <div class="modal-content">
				   -->
				        <!-- Modal Header -->
				        <!-- <div class="modal-header">
				          <h4 class="modal-title">Create User</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div> -->
				        
				        <!-- Modal body -->
				        <!-- <div class="modal-body">
				          <form>
						    <div class="form-group">
						      <label for="firstName">First Name:</label>
						      <input type="text" class="form-control" id="firstName">
						    </div>
						    <div class="form-group">
						      <label for="lastName">Last Name:</label>
						      <input type="text" class="form-control" id="lastName">
						    </div>
						    <div class="form-group">
						      <label for="password">Password:</label>
						      <input type="password" class="form-control" id="password">
						    </div>
						  </form>
				        </div> -->
				        
				        <!-- Modal footer -->
				        <!-- <div class="modal-footer">
				          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				          <button type="button" class="btn btn-primary" data-dismiss="modal">Create User</button>
				        </div>
				        
				      </div>
				   </div>
				</div>  -->

				<br>
				<table class="table">
				  <thead class="thead-inverse">
				    <tr>
				      <th>#</th>
				      <th>Last, First Name</th>
				      <th>Username</th>
				      <th>Password</th>
				     <!--  <th>Edit</th>
				      <th>Delete</th> -->
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Otto, Mark</td>
				      <td>markotto1</td>
				      <td>motto123</td>
				     <!--  <td><button type="button" class="btn btn-success">Edit</button></td>
				      <td><button type="button" class="btn btn-danger">Delete</button></td> -->
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Thornton, Jacob</td>
				      <td>jacobthornton2</td>
				      <td>jthornton123</td>
				     <!--  <td><button type="button" class="btn btn-success">Edit</button></td>
				      <td><button type="button" class="btn btn-danger">Delete</button></td> -->
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Bird, Larry</td>
				      <td>birdlarry3</td>
				      <td>lbird123</td>
				      <!-- <td><button type="button" class="btn btn-success">Edit</button></td>
				      <td><button type="button" class="btn btn-danger">Delete</button></td> -->
				    </tr>
				  </tbody>
				</table>

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