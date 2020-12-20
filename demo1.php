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
		<input type="submit" value="Submit">
		</select>
		</form>
		<?php
		if (isset($_POST['college_name'])) {
	
		 echo $_POST['college_name'];
		}
		 ?>
		 <br><br>
		 <?php
		if (isset($_POST['college_name'])) {
			# code...

			$clg= $_POST['college_name'];
			$sql = "SELECT it,cm,entc FROM college_list WHERE college_name= '$clg'";
			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
  // output data of each row
  			$row = $result->fetch_assoc() ;
 			

 			if ($row["it"]==1) {
 				# code...
 			
			?>

			<form method="POST" >
		
	 select stream: <br>
		<form>
		<select name="stream"> 
			<option>---Select stream---</option>

			<option value="it" > IT</option>
			<?php

				}
		

			if ($row["cm"]==1) {
 				# code...
 			
			?>

			<option value="cm" > CSE</option>


			<?php
		}

		if ($row["entc"]==1) {
 				# code...
 			
			?>

				<option value="entc" > ENTC</option>


			<?php
		}


		
	}
	?>

	<input type="submit" value="Submit">
<?php
		}




		?>


	</select>
	
</form>
<?php
if (isset($_POST['stream'])) {

	?>
	<div>
		<?php echo "hie"; ?>
	</div>
<?php
	
}


?>






</body>
</html>