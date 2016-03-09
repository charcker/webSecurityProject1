<?php

session_start();

$servername = "localhost";
$username = "root";
$dbnm = "logindb";
$dbname = "professor";
$password = "";

$type = "S";
$banner = $_POST['banner'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];		
$mailAddress = $_POST['addre'];
$phoneNum = $_POST['phNum'];
$gpa = $_POST['gPa'];
$totalCred = $_POST['tCred'];
$charge = $_POST['charge'];

$email = $_POST['email'];
$pass = $_POST['password'];
$repassword = $_POST['repassword'];

//Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}
//Insert Values into studentInfo database
if($pass == $repassword){	
$sql = "INSERT INTO studentinfo (bannerID, firstName, lastName, mailAddress, phoneNum, gpa, totalCred, tuitionCharge) 
VALUES ('$banner','$firstName','$lastName', '$mailAddress','$phoneNum',
		'$gpa','$totalCred', '$charge')";

$result = mysqli_query($conn,$sql);		
		
} else{
	header("Location: studentRegistrationPage.php?password=noMatch");
}

$conn->close();


$conn = mysqli_connect($servername, $username, $password, $dbnm);
//Check connection
if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO credentials (email, password, universityType) 
            VALUES ('$email','$pass','$type')";
$result = mysqli_query($conn,$sql);	
/*if ($conn->query($sql) == TRUE)
{
	header("Location: https://www.google.com");
} else{
	echo "<p> not working </p>";
	echo "Error: " .$sql . "<br>" .$conn->error;
}*/
header("Location: professorProfile.php");
$conn->close();

	?>