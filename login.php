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


			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

				       $user_data = mysqli_fetch_assoc($result);

				       if($user_data['password'] === $password)
				       {

				       	$_SESSION['user_id'] = $user_data['user_id'];
				       	header("Location: index.php");
				        die;
				       }
				   }
			   }
	
		}else
		{
			echo "<center><p style='color: lime;'>Invalid Login Information. Try again.</p></center>";
		}

	}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Back!</title>
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
	<h1 style="color: lime;">Login</h1>
		<h3 style="font-family: verdana; color: lime;">Username:</h3> 
		<input type="text" name="user_name">
		<h3 style="font-family: verdana; color: lime;">Password:</h3>
		<input type="password" name="password">

		<input type="submit" value="Login">
<br>
		<a style="font-family: verdana; color: lime;" href="register.php">Not a member? Sign up!</a>
	</form>
</div>
</center>
</body>
</html>