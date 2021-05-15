<html>
<body>
<form action="" method="get">
number : <input type="text" name="number" value="<?php echo $_GET['num'];  ?>"/><br><br>
fname : <input type="text" name="fname" value="<?php echo $_GET['fn']; ?>"/><br><br>
name : <input type="text" name="name" value="<?php echo $_GET['ln']; ?>"/><br><br>
<input type="submit" name="submit" value="update"/>
</form>
<?php
	include("connectionn.php");
	error_reporting(0);
	if($_GET['submit'])
	{
		$number = $_GET['number'];
		$fname = $_GET['fname'];
		$lname = $_GET['name'];
		$query = "update stud set fname='$fname' , name='$lname' where num='$number' ";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			echo "<font color='green'> record updated.<a href='displayy.php'> check updated list here </a>";
		}
		else
		{
			echo "record not updated";
		}
	}
	else
	{
		echo "<font color='blue'>click on update button and saved this";
	}




?>
</body>
</html>