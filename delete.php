<?php

	include("connectionn.php");
	error_reporting(0);
	$number = $_GET['num'];
	$query = "delete from stud where num='$number'";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('record deleted')</script>";
		?>
		<meta HTTP-EQUIV="refresh" content="0;url=http://localhost/connect/displayy.php">
		<?php
		
		
	}
	else
	{
		echo "<font color='red'>sorryyy";
	}
?>