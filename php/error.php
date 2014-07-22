<?php

//Errors:
	/*

		badLogin -> Failed login
		accountCreationFailure -> Failed to create account

	*/

$error = $_GET['error'];

if($error == "badLogin"){
	echo "Failed to login";
} else if($error == ""){

}

?>