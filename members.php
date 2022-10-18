<?php
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);

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
<h1 style=" background-color: black; padding: 5px; width: 600px; border: 2px solid lime; color: lime; font-family: verdana; text-align: center;">NEW MEMBERS!!!<br>WTF!!!<br>(Order: Oldest First) <br>
<?php $check = mysqli_query($con, $query = "select * from users");
$rows = mysqli_num_rows($check);

while ($row = mysqli_fetch_assoc($check)) {
  $profid = $row['id'];
   echo "<a href='profiles.php?id=$profid'>".$row['user_name']."</a><br>"; echo "Date Joined:"; echo "<br>"; echo $row['date']."<br>";
 } ?></h1>
</center>
</body>
</html>