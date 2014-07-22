<?php

if (!session_status() == PHP_SESSION_NONE) {
    
}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//Requires License File
$licenseFile = "../../license.h2";
$array = explode(";", file_get_contents($licenseFile));

$db = $array[0];
$host = $array[1];
$user = $array[2];
$pass = $array[3];

$con = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($con, "SELECT * FROM Users WHERE username='$username'");

while($row = mysqli_fetch_array($result)){
	$dbPass = $row['password'];
}

if($password = $dbPass){
	echo "Logged in";
	Header("Location: ../landingPage.html");
} else {
	Header ("Location: error.php?error=badLogin");
}

?>