<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
	if(@$_SESSION['user_name']) 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.1">
  <title>Deadlocked</title>
  <link rel = "icon" href = "deadlockecceeceec.png" type = "image/x-icon">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2546452165812752"
     crossorigin="anonymous"></script>
</head>
<body>
	<center>
	<h1 style=" background-color: black; padding: 5px; width: 600px; border: 2px solid lime; color: lime; font-family: verdana; text-align: center;">
<?php 
if(@$_GET['id']) {
	$check = mysqli_query($con, $query = "select * from users where id='".$_GET['id']."'");
	$rows = mysqli_num_rows($check);

	if(mysqli_num_rows($check) != 0) {
		while($row = mysqli_fetch_assoc($check)) {
			echo "<img src='".$row['profile_pic']."' width='50%' height='50%'>";
			 echo "<br>"; 
			 echo $row['user_name'];
			 echo "<br>";
			 echo "Bio: i like cheese";
			  echo "<br>";
			   echo "Date Joined:";
			    echo "<br>";
			     echo  $row['date'];
		}
	}else{
		echo "ID was not found by the database.";
	}
}

 ?>
</h1>
</center>
</body>
</html>
