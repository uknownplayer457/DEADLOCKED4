<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$user_name = $_POST['user_name'];

		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$user_id = random_int(1, 10000000000,);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<center><p style='color: lime;'>Please enter valid sign up info.</p></center>";
		}

	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome!</title>
</head>
<body>
	<style>
body {
  background-image: url('green.jpg');
  background-repeat: repeat-y;

}
</style>
<center>
	<img src="deadlocked2.png" width="863" height="176">
<div id="box">
	<form method="post">
	<h1 style="color: lime;">Sign Up</h1>
		<h3 style="font-family: verdana; color: lime;">Desired Username: (Be creative!)</h3> 
		<input type="text" name="user_name">
		<br>
		<h3 style="font-family: verdana; color: lime;">Desired Password: (Dont tell ANYONE your password.)</h3>
		<input type="password" name="password">

		<input type="submit" value="Sign Up">
<br>
		<a style="font-family: verdana; color: lime;" href="login.php">Already part of the cool kids? Login!</a>
	</form>
</div>
</center>
</body>
</html>