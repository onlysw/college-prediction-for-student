<!DOCTYPE html>
<html>
<head>
	<link
      rel="stylesheet"
      href="sign.css"
      crossorigin="anonymous"
    />
	<title>Add feedback</title>
</head>
<body>
<div id="container">
        <div class="card">
            <div class="img_container">
                 <div id="heading">

	<b><h2> Give feedback...</h2></b>

	<form method="POST" id="feed">
		<b>User name:</b><br>
		<input type="text" name="username" required>
		<br>
		<b>Feedback:</b><br>

		<textarea rows="4" cols="50" name="feedback" form="feed" required></textarea>
		
			<br>
			<br>

		<input type="submit" value="Submit" name="submit" required>

	</form>

</div>
</div>
</div>
</div>

</body>
</html>

<?php
if (isset($_POST['submit'])) {

	include 'connect_db.php';

	$user=$_POST['username'];
	$feedback=$_POST['feedback'];

	

$sql = "INSERT INTO feedback (username,feedback)
					VALUES ('$user','$feedback')";

				if (mysqli_query($conn, $sql)) {
			  //echo "New record created successfully";

					?>


					<center><font color="green"><h3>Your feedback recorded succesfully......</h3></font></center>

			<?php

			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

	# code...
}



?>
