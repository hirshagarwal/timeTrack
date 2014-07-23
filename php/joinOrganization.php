<?php

//Allows for username transfer
session_start();

//Requires License File
$licenseFile = "../../license.h2";
$array = explode(";", file_get_contents($licenseFile));

$db = $array[0];
$host = $array[1];
$user = $array[2];
$pass = $array[3];

$name = $_POST['organization'];
$password = $_POST['password'];

$username = $_SESSION['username'];

$dbPass = "";

$con = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($con, "SELECT * FROM organizations WHERE name='$name'");

while($row = mysqli_fetch_array($result)){
	$dbPass = $row['password'];
}

if($password == $dbPass){
	echo "Joined Successfully!";
	mysqli_query($con, "UPDATE Users SET organization='$name' WHERE username='$username'");
	Header("Location: ../landingPage.html");

} else {
	echo "Authentication failed";
	//Warning: Need redirect to failure page
	Header("Location: error.php?error=organizationJoinFail")
}

?>