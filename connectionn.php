<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "connect";
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn)
	{
		echo "";
	}
	else
	{
		echo "connection not ok";
	}
?>