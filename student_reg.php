<!DOCTYPE html>
<html>
<head>

	<link
      rel="stylesheet"
      href="sign.css"
      crossorigin="anonymous"
    />
	<title>Student Registration</title>
</head>
<body>



<div id="container">
        <div class="card">
            <div class="img_container">
                 <div id="heading">

<form method="POST">
	<i>
	<h2>Registration</h2> </i>
	<b>
		User Name: <br>
		<input type="text" name="username" required>
		<br>Password: <br>
		<input type="Password" name="pass" required>
		<br>
		Confirm Password: <br>
		<input type="Password" name="confirm_pass" required><br>

		<input type="submit" value="Submit" name="submit" required>

	</b>
</form>



</body>
</html>

<?php

if (isset($_POST['submit'])) {

	if ($_POST['pass']==$_POST['confirm_pass']) {

		$user=$_POST['username'];
		$pass=$_POST['pass'];

		//echo $user.$pass;
		include 'connect_db.php';

		$sql = "INSERT INTO student_user (username,pass)
				VALUES ('$user','$pass')";
		if (mysqli_query($conn, $sql)) {
			 
			} else {
			  ?>
			  (<b><font color="red"> Duplicate username ......<br>Try another...</font></b>)

			  </div>
	</div>
	</div>
	</div>
			  <?php
			  die();
			}
			

		include 'add_profile.php';


	}
	else{
		echo "Password missmatch";
		die();
		echo "hie";
	}


}


?>
