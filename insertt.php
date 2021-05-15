<html>
<body>
<form action="" method="POST">
number : <input type="number" name="number" value=""/><br><br>
fname : <input type="text" name="fname" value=""/><br><br>
name : <input type="text" name="name" value=""/><br><br>
<input type="submit" name="submit"/>
</form>
<?php
	include("connectionn.php");
	error_reporting(0);
	if($_GET['submit'])
	{
		$num = $_POST['number'];
		$fn = $_POST['fname'];
		$ln = $_POST['name'];
		if($num!= "" &&  $fn!="" && $ln!="")
		{			
			$query = "insert stud values ('$num','$fn','$ln')";
			
			$data = mysqli_query($conn,$query);
			
			if($data)
			{
				echo "data inserted successfully";
			}
		}
		else
		{
			echo "empty";
		}
	}
?>
</body>
</html>