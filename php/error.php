<?php

//Errors:
	/*

		badLogin -> Failed login
		accountCreationFailure -> Failed to create account

	*/

$error = $_GET['error'];

if($error == "badLogin"){
	echo "Failed to login";
} else if($error == "accountExists"){
	echo "An account with that name already exists";
} else if ($error == "organizationJoinFail"){
	echo "Failed to join the organization";
}

?>