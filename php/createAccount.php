<?php

session_start();

//REQUIRES LICENSE
$licenseFile = "../../license.h2";
$array = explode(";", file_get_contents($licenseFile));

$db = $array[0];
$host = $array[1];
$user = $array[2];
$pass = $array[3];

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

	mysql_query("INSERT INTO Users(id, username, password, email, organization, status, uid) VALUES ('NULL', '$username', 'password', '$email', 'NULL', '0', 'NULL')") or die (mysql_error());

$_SESSION['username'] = $username;

header( 'Location:../joinOrganization.html');

?>