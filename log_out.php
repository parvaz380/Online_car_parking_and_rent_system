
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
			window.location.href='login.php';
			</script>
			
			
			";

		}else{
			
		}
		 
		 
		 ?>
		</body>
		</html>