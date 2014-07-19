<?php



$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

	mysql_query("INSERT INTO Users(id, username, password, email, organization, status, uid) VALUES ('NULL', '$username', 'password', '$email', 'NULL', '1', 'NULL')") or die (mysql_error());

 header( 'Location:../');

?>