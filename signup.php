<html>
<head>
<style>
#home
{
	height : 100vh;
	width : 100%;
	background : url(1.jpg) center center;
	background-size : cover;
}
form{
	height : 96vh;
	width : 30%;
	background-color : pink;
	border : 2px solid red;
	border-radius : 8%;
	box-shadow : 20px 20px 0px 0px ;
	margin-left : 30%;
}
h1
{
	text-align : center;
	color : red;
}
label
{
	padding : 30px;
}
input
{
	margin-left : 30px;
}
</style>
</head>
<body>
	<div id="home">
		<form>
			<h1>Sign up</h1>
			<label>First name</label><br>
			<input type="text" name="fname"/><br><br>
			<label>Last name</label><br>
			<input type="text" name="lname"/><br><br>
			<label>Date of Birth</label><br>
			<input type="date" name="dob"/><br><br>
			<label>Address</label><br>
			<input style="padding : 30px;" type="text" name="address"/><br><br>
			<label>Mobile no.</label><br>
			<input type="number" name="mobileno."/><br><br>
			<label>Gender</label><br>
			<input type="radio" name="gender">male</input>
			<input type="radio" name="gender">female</input><br><br>
			<label>Qualification</label><br>
			<input type="checkbox" name="qulifiction">B.E</input>
			<input type="checkbox" name="qualifiction">M.E</input>
			<input type="checkbox" name="qualifiction">M.B.A</input><br><br>
			<input style="margin-left:150px;"type="submit" name="submit"/>
		</form>
	</div>
	<?php
	$conn = mysqli_connect("localhost","root","","connect");
	error_reporting(0);
	if($_POST['submit'])
	{
		$fnm = $_POST['fname'];
		$lnm = $_POST['lname'];
		$db = $_POST['dob'];
		$add = $_POST['address'];
		$mob = $_POST['mobileno.'];
		$gen = $_POST['gender'];
		$qul = $_POST['qulifiction'];
		if($fnm!= "" &&  $lnm!="" && $db!= "" &&  $add!="" && $mob!= "" &&  $gen!="" && $qul!="")
		{			
			$query = "insert signup values ('$fnm','$lnm','$db','$add','$mob','$gen','$qul')";
			
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