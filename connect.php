<?php 
$carBrand = $_POST['carBrand'];
$carModel = $_POST['carModel'];
$registrationNumber = $_POST['registrationNumber'];
$carColor = $_POST['carColor'];
$phoneNumber = $_POST['phoneNumber'];

//database conection

$conn = new mysqli('localhost', 'root','','carpark','reservation');
if($conn->connect_error){
	die('Connection Failed  :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into reservation(carBrand, carModel, registrationNumber, carColor, phoneNumber) values(?,?, ?, ?, ?) ");

	$stmt->bind_param("ssssi",$carBrand, $carModel, $registrationNumber, $carColor, $phoneNumber);
	$stmt->execute();
	echo"Registration Successfull.....";
	$stmt->close();
	$conn->close();
}

?>