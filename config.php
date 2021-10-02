<?php 


$host    = "localhost";
$uname   = "root";
$pass    = "";
$db      = "ocp_system";


$con = mysqli_connect($host,$uname,$pass) or die('database error');

mysqli_select_db($con,$db);


if (isset($_POST['login_submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT  * FROM  admin_login where username='$username' and password='$password' ";
	$result = mysqli_query($con,$query);

	if (mysqli_num_rows($result)==1) {

		header("location: admin-dashboard.php");
	}else{

		echo '<script>alert("error login")</script>';
		echo '<script>window.open("index.php", "_self")</script>';
	}
}



if (isset($_POST['car_submit'])) {
	
	$make   = $_POST['make'];
	$c_model = $_POST['c_model'];
	$reg_num = $_POST['reg_num'];
	$c_color = $_POST['c_color'];
	$contact = $_POST['contact'];

	$query = "INSERT INTO clients_info(make, car_model, reg_num, car_color,  contact) 
	         values('$make ', '$c_model', '$reg_num', '$c_color', '$contact')";

	 $result = mysqli_query($con, $query);

	 if ($result) {
	 	
	 	echo '<script>alert("Car Booking Successfully")</script>';
		echo '<script>window.open("admin-panel.php", "_self")</script>';
	 }
}



function get_client_details(){
	global $con;

	$query = "SELECT * FROM clients_info";
	$result = mysqli_query($con, $query);
	while ($row=mysqli_fetch_array($result)) {

	$make = $row['make'];
	$c_model =$row['car_model'];
	$reg_num = $row['reg_num'];
	$c_color = $row['car_color'];
	$contact = $row['contact'];

	echo "

	  <tr>
      <td>$make</td>
      <td>$c_model</td>
      <td>$reg_num</td>
      <td>$c_color</td>
      <td>$contact</td>
    </tr>

	";
		
	}

}






 ?>

