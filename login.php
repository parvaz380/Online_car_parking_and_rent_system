<?php 

include 'config.php';


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login Page</title>
 	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
 	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
 	<link rel="stylesheet" href="assets/css/style.css">
 	<link rel="stylesheet" href="style.css">
 	<h2 class="h" align="center">Welcome To Login</h2>
 </head>
 <body id="b">

 	<div id="d">


 		<form class="img" action="login.php" method="POST" align="center">
 			<img src="images/login.jpg" alt="" class="img"><br>
 			
 			<label for="form">User-Email: </label>
 			<input class="mt-5" type="email" name="email" id="form" placeholder="Enter Your Email" required><br>

 			<label for="form">User-Pass: </label>
 			<input type="password" name="pass" id="form" placeholder="Enter Your Password" required><br>

 			<a href="userinterface.php">
 			<input class="btn btn-info mt-4"  type="button" name="login" id="button" value="SignIn"></a>

 			<a href="registration.php">
 			<input class="btn btn-success mt-4 ml-4" type="button" name="register" id="button" value="Registration"></a>
 			
 		</form>

		 <?php 
		 
		 if(isset($_POST['login'])){

			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$query = "select * from user where email= '$email' AND password = '$pass' ";

			$check = mysqli_query($con, $query);

			if($check){

				if(mysqli_num_rows($check)>0){

					echo "

					<script>
					alert('you are successfully logged in');
					window.location.href='admin-panel.php';
					</script>
					
					";

				}else{
					echo "

					<script>
					alert('Email or Password Not Correct');
					window.location.href='login.php';
					</script>
					
					";
					//email & password check
				}

			}else{

				echo "

				<script>
				alert('database error');
				window.location.href='login.php';
				</script>
				
				";

				//query else

			}

		 }else{
			 //login click check
		 }
		 
		 ?>

		 
 		
 	</div>

 	








 	<script src="assets/js/jquery-3.3.1.min.js"></script>
 	<script src="assets/js/bootstrap.min.js"></script>
 </body>
 </html>