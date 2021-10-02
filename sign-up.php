<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carpark";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email    = $_POST['email'];

	try {
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "INSERT INTO users (username,email,password)
	  VALUES ('$username',  '$email','$password')";
	  // use exec() because no results are returned
	  $conn->exec($sql);
		echo "registration successfull";
	} catch(PDOException $e) {
	  echo "Error" . $e->getMessage();
	}

}



 ?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USER REGISTRATION FORM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	
	<div class="signup-form bg-light">
		<h1>Register Now</h1>
		<form action="" method="POST">
		Username: <input type="text" name="username" /><br />
		Email: <input type="email" name="email" /><br />
		Password: <input type="password" name="password" /><br />
		
		<input class="btn btn-primary text-center" type="submit" name="submit"  value="Register"><a class="pl-3" href="login.php">Login Page</a>
	</form>


	</div>
	




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



