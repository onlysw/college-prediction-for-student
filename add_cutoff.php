<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<b><h1>Add cutoff of college</h1></b>
	<form method="POST" >
		
		select college: <br>
		<select name="college_name"> 
			<option>---Select college---</option>
			<?php

			include 'connect_db.php';


			$sql = "SELECT college_name FROM college_list";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
  // show all college list
  			while($row = $result->fetch_assoc()) {
 
			?>

			<option value= <?php echo $row["college_name"]; ?> > <?php echo $row["college_name"]; ?></option>

			<?php
		}



	}
	?>



		</select>
		<br>
		<br>
		<br>

		<b>
		<select name="stream" required>

			<option>---Select stream---</option>
			<option value="it">IT</option>
			<option value="cm">CSE</option>
			<option value="entc">ENTC</option>
			
		</select>

		</b>
		<br>
		<br>

		<b>Year:</b><br>
		<input type="text" name="year" required>
		<br>
		<b>cutoff:</b>
		<br>
		<input type="text" name="cutoff" required>
		<input type="submit" value="Submit">



		</form>
		<?php
		if (isset($_POST['college_name'])) {
	
		 
		}
		 ?>
		 <br><br>
		 <?php
		if (isset($_POST['college_name'])) {
			# code...

			$clg= $_POST['college_name'];
			$stream=$_POST['stream'];
			$year=$_POST['year'];
			$cutoff=$_POST['cutoff'];
			$sql = "SELECT it,cm,entc FROM college_list WHERE college_name= '$clg'";
			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			if ($row[$stream]==1) {

				

				$sql = "INSERT INTO cutoff (college_name,stream,year,cutoff)
					VALUES ('$clg','$stream','$year','$cutoff')";

				if (mysqli_query($conn, $sql)) {

					?>



				<center><font color="green"> Cutoff added sucessfully......</font></center>


					<?php

			  //echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}


		
			}

			else{
				?>
			

			<h3>selected stream not available in <?php echo $clg; ?></h3>

			<?php

}



			
}

$conn->close();


?>






</body>
</html>