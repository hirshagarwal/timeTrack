<?php

//Allows for username transfer
session_start();

//REQUIRES LICENSE

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

} else {
	echo "Authentication failed";
	//Warning: Need redirect to failure page
}

?>