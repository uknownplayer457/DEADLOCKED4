<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
</head>
<body>
	<style>
body {
  background-image: url('galaxy.gif');
  background-repeat: repeat;
  background-size: cover;

}
</style>
	<center>
<h1 style=" background-color: black; padding: 5px; width: 600px; border: 2px solid lime; color: lime; font-family: verdana; text-align: center;">
	The Content Rally!
		<br>
    Featured Content:

	<div class="alb">
		<?php 
		 include "connection.php";
		 	 include "functions.php";
$check = mysqli_query($con, $query = "select * from videos");
$videos = mysqli_num_rows($check);
		 if (mysqli_num_rows($check) > 0) {
		 	while ($video = mysqli_fetch_assoc($check)) { 
            $vidid = $video['id'];
            echo "<br>";
            echo "<a href='videos.php?id=$vidid'>".$video['title']
		 ?>

	    <?php 
	     }
		 }else {
		 	echo "<br>";
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
		</h1>
	</div>
	</center>
		 <iframe width="0.1" height="0.1" src="https://www.youtube.com/embed/GH_keFd4RWI?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>