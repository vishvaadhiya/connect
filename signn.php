<html>
<head>
<style>
#home
{
	height : 100%;
	width : 100%;
	background : url(1.jpg) center center;
	background-size : cover;
}
form{
	height : 93vh;
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
		<form method="post" action="#">
			<h1>Sign up</h1>
			<label>First name</label><br>
			<input type="text" name="fname"/><br><br>
			<label>Last name</label><br>
			<input type="text" name="lname"/><br><br>
			<label>Date of Birth</label><br>
			<input type="date" name="dob"/><br><br>
			<label>Address</label><br>
			<input style="padding : 30px;" type="text" name="address"/><br><br>
			<label>Gender</label><br>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label><br>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label><br><br>
			<label>Qualification</label><br>
			<input type="checkbox" id="B.E" name="qulifiction" value="B.E"/>
			<label for="B.E">B.E</label><br>
			<input type="checkbox"  id="M.E" name="qualifiction" value="M.E"/>
			<label for="M.E">M.E</label><br>
			<input type="checkbox" id="M.B.A" name="qualifiction" value="M.B.A"/>
			<label for="M.B.A">M.B.A</label>
			<input style="margin-left:150px;" type="submit" name="submit"/>
		</form>
	</div>
<?php
	$conn = mysqli_connect("localhost","root","","connect");
	if(isset($_POST['submit']))
	{
		$fnm = $_POST['fname'];
		$lnm = $_POST['lname'];
		$db = $_POST['dob'];
		$add = $_POST['address'];
		$gen = $_POST['gender'];
		$qul = $_POST['qulifiction'];
			
			$query = "insert into signup 
			values ('$fnm','$lnm','$db','$add','$gen','$qul')";
			
			$data = mysqli_query($conn,$query);
			
			if($data)
			{
				echo "data inserted successfully";
			}
			else{
				echo mysqli_error($conn);
			}
		
		
	}
?>
</body>
</html>