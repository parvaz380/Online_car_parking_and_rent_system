<!DOCTYPE html>

<?php include "config.php"; ?>
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


<form action="parking.php" method="POST" align="right">
						
<input class="btn btn-info btn-lg mt-4"  type="submit" name="user_logout" id="button" value="Logout">
				
</form>

<?php


		if(isset($_POST['user_logout'])){

			echo "

			<script>
			alert('you are successfully logged out');
			window.location.href='login.php';
			</script>
			
			
			";

		}else{
			
		}
		 
		 
		 ?>










<div class="jumbotron"></div>


<div class="container-fluid">

	<div class="row">
		<div class="col-md-3">
		
	
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #007bff; color:#fff;">
					<h3 class="text-center">Enter Your Vehicles Information</h3>
				</div>
				<div class="card-body">
					<form action="config.php" class="form-group" method="POST">

						<label>Make :</label>
						<input type="text" name="make" class="form-control" placeholder="car/Hundai/etc" required><br>

						<label>Car Model :</label>
						<select name="c_model" class="form-control">
							<option value="Toy">Toy</option>
							<option value="Ferrari">Ferrari</option>
							<option value="Mustang">Mustang</option>
							<option value="Scale">Scale</option>
							<option value="Jaguar">Jaguar</option>
							<option value="Classic">Classic</option>
							<option value="Mercedes">Mercedes</option>
							<option value="BMW">BMW</option>
							<option value="Tesla">Tesla</option>
							<option value="CardBoard">CardBoard</option>
							<option value="Diecast">Diecast</option>
							<option value="Custom">Custom</option>
						</select><br>

						<label>Registration Number :</label>
						<input type="text" name="reg_num" class="form-control" placeholder="Enter Registration Number" required><br>

						<label>Car Color :</label>
						<select name="c_color" class="form-control">
							<option value="Red">Red</option>
							<option value="Blue">Blue</option>
							<option value="Green">Green</option>
							<option value="Purple">Purple</option>
							<option value="Dark">Dark</option>
							<option value="Rainbow">Rainbow</option>
							<option value="Pink">Pink</option>
							<option value="Solid">Solid</option>
							<option value="Cool">Cool</option>
							<option value="Orange">Orange</option>
							<option value="Grey">Grey</option>
							<option value="Yellow">Yellow</option>
						</select><br>
						
						<label>Mobile/Phone Number :</label>
						<input type="text" name="contact" class="form-control" placeholder="Enter contact number" required><br>

					

					
						<input type="submit" class="btn btn-info btn-lg" name="car_submit" value="Booking Vehicles">
						
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
	








	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>