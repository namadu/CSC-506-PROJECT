<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "happenings";

	//this create a connection to  the database
	
	$conn = mysqli_connect($dbhost , $dbuser, $dbpass , $db );
	
	//to check if the connection is working...
	
	if ($conn -> connect_error){
	die('connection Failed :'.$conn->connect_error);
	}
	

?>
