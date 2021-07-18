<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="happenings";
	$con=mysql_connect($server,$user,$password,$database);
	mysql_select_db($database) or die (mysql_error());
?>
