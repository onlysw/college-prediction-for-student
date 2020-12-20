<?php

if (isset($_POST['reg'])) {
	include 'connect_db.php';
	$username=$_POST['username'];
	$name=$_POST['Student_name'];
	$mob=$_POST['Contact'];
	$mail=$_POST['std_email'];
	$add=$_POST['Address'];
	$mark=$_POST['mark'];

	//echo $name.$mob.$mail.$add.$mark;
	$sql = "INSERT INTO student_profile (username,student_name,mobile_num,email,address,mark)
				VALUES ('$username','$name','$mob','$mail','$add','$mark')";
		if (mysqli_query($conn, $sql)) {

			?>

			<center>
			(<b><font color="red"> Registration complete succesfully.....</font></b>)
			<a href="student_login.php"> Clicl here to Login</a>
				</center>



			<?php
			 
			} else {
			  
				?>
					(<b><font color="red"> Unknown Error occured  ......<br>Please try agin...</font></b>)


				<?php


			  //echo "Error: " . $sql . "<br>" . $conn->error;
			  die();
			}
	# code...
}

?>