<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="jumbotron"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
		   <div class="list-group">
			  <a href=""><li class="list-group-item active">Clients</li></a>
			  <a href="client_details.php" target="_blank"><li class="list-group-item">Clients Details</li></a>
			  
			  
			</div>
	
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #007bff; color:#fff;">
					<h3 class="text-center">Enter Your Vehicles Information</h3>
				</div>
				
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
	


	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html> -->


<!DOCTYPE html>

<?php include "config.php"; ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clients Details Page</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>




<form action="admin-dashboard.php" method="POST" align="right">
						
<input class="btn btn-info btn-lg mt-4"  type="submit" name="logout" id="button" value="Logout">
				
</form>


<?php


		if(isset($_POST['logout'])){

			echo "

			<script>
			alert('you are successfully logged out');
			window.location.href='admin-login.php';
			</script>
			
			
			";

		}else{
			
		}
		 
		 
		 ?>





<!-- client details -->
	
<div class="jumbotron"></div>

<div class="container">
	<div class="card">
		<div class="card-body" style="background-color: #007bff; color:#fff;">
			<div class="row">

				<div class="col-md-1">
					 <a href="admin-login.php" class="btn btn-light ">Go Back</a>
				</div>
				<div class="col-md-3"><h3>Clients Details</h3></div>			
		    
</div></div>
<div class="card-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Make</th>
      <th scope="col">Car Model</th>
      <th scope="col">Registration Number</th>
      <th scope="col">Car Color</th>
      <th scope="col">Contact Info</th>
    </tr>
  </thead>


  <tbody>

  	<?php get_client_details();?>
  
    
  </tbody>
</table>
</div>


</div>
</div>






	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>