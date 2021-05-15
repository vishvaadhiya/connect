<html>
<style>
body{
	marign : 0;
	padding : 0;
}
#home{
	height : 100vh;
	width: 100%;
	background : url(bg.jpg)center center;
	background-size : cover;
}
form
{
	height : 70vh;
	width : 30%;
	background-color : black;
	border-radius : 7%;
	border : 2px solid white;
	box-shadow : 19px 19px 0px 0px gray;
	margin-left : 450px;
	padding-left : 30px;`	
}
h1
{
		border-radius : 20%;
		border : 2px solid red;
		color : white;
		text-align : center;
		font-family : Arail;
		margin-right : 7%;
}
label
{
	color : white;
	padding: 30px;
}
input
{
	color : white;
	background-color : black;
	font-size : 26px;
	height : 35px;
	border-radius : 10%;
	padding-left : 10px;
	margin-left : 30px;
	border : 0px;
	box-shadow : 0px 3px 0px 0px #04c582;
}
button
{
	color : white;
	background-color : black;
	font-size : 26px;
	height : 45px;
	width:250px;
	font-family : arail;
	border-radius : 7;
	margin-left : 65px;
}
button:hover
{
	background-color : #04c582;
	color : white;
}
</style>
<body>
<div id="home">
<form action="" method="POST">
<img  style="height : 100px; width:100px; margin-left:150px;" src="un.jpg">
<h1>log in</h1>
<label>Username :</label> <input type="text" name="username" value=""/><br><br>
<label>password :</label> <input type="password" name="password" value=""/><br><br>
<input type="submit" name="submit"/>
</form>
</div>
<?php
	$conn = mysqli_connect("localhost","root","","connect");
	error_reporting(0);
	if($_POST['submit'])
	{
		$unm = $_POST['username'];
		$pass = $_POST['password'];
		if($unm!= "" &&  $pass!="")
		{			
			$query = "insert login values ('$unm','$pass')";
			
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