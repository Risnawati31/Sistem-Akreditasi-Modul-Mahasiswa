<?php 
	$host		= "localhost";
	$username	= "root";
	$pass 		= "";
	$database 	= "rpl_mhs";
	$connection	= mysqli_connect($host, $username, $pass);
	mysqli_select_db($connection, $database);
?>