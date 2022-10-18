<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	</head>
	<body>
<?php 
if(@$_GET['id']) {
	$check = mysqli_query($con, $query = "select * from videos where id='".$_GET['id']."'");
	$rows = mysqli_num_rows($check);

	if(mysqli_num_rows($check) != 0) {
		while($video = mysqli_fetch_assoc($check)) {
			?>
			<center>
<video height="50%" width="50%" src="uploads/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>
	        		<h1 style=" background-color: black; padding: 5px; width: 600px; border: 2px solid lime; color: lime; font-family: verdana; text-align: center;"> Title: 
				<?php echo $video['title'] ?><br>Author: <?php echo $video['author'] ?><br>Date Uploaded:<br><?php echo $video['date_up'] ?>
			</h1>
	        </center>
			<?php
	}
	}else{
		echo "Video was not found by the database.";
	}
}

 ?>
 </body>
 </html>
