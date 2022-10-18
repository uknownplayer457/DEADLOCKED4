<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload your content!</title>
	
</head>
<body>
	<a href="view.php">See Content Rally Submissions</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">
<h1 style=" background-color: black; padding: 5px; width: 250px; border: 2px solid lime; color: lime; font-family: verdana; text-align: left;">Your Video:</h1>
	 	<input type="file"
	 	       name="my_video">

<h1 style=" background-color: black; padding: 5px; width: 250px; border: 2px solid lime; color: lime; font-family: verdana; text-align: left;">Your Title:</h1>
	 	<input type="text"
	 	       name="title">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 	       <h1 style=" background-color: black; padding: 5px; width: 400px; border: 2px solid lime; color: lime; font-family: verdana; text-align: left;">Allowed formats: MP4, AVI, and FLV.
	 	       	<h1 style="font-family: serif; font-style: oblique;">Please,</h1>
	 	       	<h1>READ THE <a href="videorules.php"> RULES</a> BEFORE <br>POSTING YOUR CONTENT.</h1>
	 </form>
</body>
</html>