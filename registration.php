<?php 
include 'config.php';
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Complete Registration Source</title>
 	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
 	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
 	<link rel="stylesheet" href="assets/css/style.css">
 	<link rel="stylesheet" href="style.css">
 	<h2 class="h" align="center">Welcome To Our Website</h2>
 </head>
 <body id="b">

 	<div id="d">
 		<form action="registration.php" method="POST" align="center">

 			<img src="images/register.jpg" alt="" class="img">

 			<label for="form">User-Name: </label>
 			<input type="text" name="name" id="form" placeholder="Enter Your Name" required><br>

 			<label for="form">User-Email: </label>
 			<input type="email" name="email" id="form" placeholder="Enter Your Email" required><br>

 			<label for="form">User-Pass: </label>
 			<input type="password" name="pass" id="form" placeholder="Enter Your Password" required><br>


 			<label for="form">Con-Pass : </label>
 			<input  type="password" name="cpass" id="form" placeholder="Confirm Your Password" required><br>

 			<input class="btn btn-info mt-4"  type="submit" name="reg" id="button" value="SignUp">
 			
 			<a href="login.php"><input class="btn btn-success mt-4 ml-4" type="button" name="back" id="button" value="Go to Login"></a>
 			
 		</form>


 		<?php 


 		if (isset($_POST['reg'])) {

 			$name   = $_POST['name'];
 			$email  = $_POST['email'];
 			$pass   = $_POST['pass'];
 			$cpass  = $_POST['cpass'];


 			if ($pass == $cpass ) {

 				$query = "SELECT * FROM user WHERE email = '$email' ";
 				$query_check = mysqli_query($con, $query);

 				if ($query_check) {
 					
 					if (mysqli_num_rows($query_check) > 0) {

 						echo "

 						<script>alert('Email already in use')</script>
 						window.location.href='login.php';

 						";
 						
 					}else{

 						$insertion = "INSERT INTO user VALUES('$name', '$email', '$pass')";

 						$run = mysqli_query($con, $insertion);

		 						if ($run) {
		 							echo "

				 						<script>alert('you are successfully registered')</script>
				 						window.location.href='index.php';

				 						";
		 						}else{

		 							  	echo "

				 						<script>alert('connection failed')</script>
				 						window.location.href='registration.php';

				 						";
		 							//run else
		 						}

 						//email check else

 					}



 				}else{

			  	             echo "

	 						<script>alert('database error')</script>
	 						window.location.href='registration.php';

	 						";
 					//query_check else
 				}



 				
 			}else{

 				    	echo "

		 						<script>alert('password & confirm password does not match')</script>
		 						window.location.href='registration.php';

		 						";

 				//password else

 			}
 			
 		}else{


 			//isset er else
 		}




 		 ?>


 		
 	</div>
 	<script src="assets/js/jquery-3.3.1.min.js"></script>
 	<script src="assets/js/bootstrap.min.js"></script>
 </body>
 </html>