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
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
	if(@$_SESSION['user_id']) {
		$check = mysqli_query($con, $query = "select * from users where user_id='".$_SESSION['user_id']."'");
$rows = mysqli_num_rows($check);
while($row = mysqli_fetch_assoc($check)) {
	$username = $row['user_name'];
	$user_id = $row['user_id'];
	$prof_pic = $row['profile_pic'];
	$datejoin = $row['date'];
	echo "<img src='$prof_pic' width='50%' height='50%'>"; 
	echo "<br>";
	echo "You're logged in as:";
	echo "<br>";
	echo $username;
		echo "<br>";
		echo "Your User ID: "; 
			echo $user_id;
			echo "<br>";
			echo "You joined Deadlocked, on: $datejoin";

	}

}
?> 
<br>
<a href="myaccount.php?action=changepic">Change Your Profile Picture</a>
		</h1>
<?php

if(@$_GET['action'] == "changepic"){

	echo '<form action="myaccount.php?action=changepic" method="POST" enctype="multipart/form-data"> <br> 
Available file extensions: <b>.PNG .JPG .JPEG .GIF</b><br>
<input type="file" name="image">
<input type="submit" name="change_pic" value="Submit">
	';
	if (isset($_POST['change_pic'])) {
		$errors = array();
		$allowed_e = array('png', 'jpg', 'jpeg', 'gif');

		$file_name = $_FILES['image']['name'];
		$file_e = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
		$file_s = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];

		if (in_array($file_e, $allowed_e) === false) {
		   $errors[] = 'This file extension is not allowed.';
		}

if ($file_s > 9074391) {
	$errors[] = 'File must be under 10mb.';
}
if (empty($errors)) {

	move_uploaded_file($file_tmp, 'images/'.$file_name);
	$images_up = 'images/'.$file_name;
	if($query = mysqli_query($con, $query = "update users set profile_pic='".$images_up."' where user_id='".$_SESSION['user_id']."'")) {
		echo "Your profile image has succesfully been changed!";
		// code...
	}
}else{
	foreach ($errors as $error) {
		echo $error, '<br>';
		// code...
	}
	}

		echo '</form>';
}
}



 ?>
	