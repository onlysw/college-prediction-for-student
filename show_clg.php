<!DOCTYPE html>
<html>
<head>
	<link
      rel="stylesheet"
      href="sign.css"
      crossorigin="anonymous"
    />
	<title> show college</title>
	<style type="text/css">
		table, th, td {
  border: 2px solid black;
}
	</style>
</head>
<body>
<center><b><h1>View College</h1></b></center>


<div id="container">
        <div class="card">
            <div class="img_container">
                 <div id="heading">


	<form method="POST">
	<b>mark:
		<br>
		<br>
		
		<input type="text" name="mark" size="50" placeholder="mark" required>
		<br>
		<br>
		<b>Select stream</b>
		<br><br>
		<select name="stream">

			<option>---Select stream---</option>
			<option value="it">IT</option>
			<option value="cm">CSE</option>
			<option value="entc">ENTC</option>
			
		</select>

		<br>
</b>
<br>
		<input type="submit" value="Submit" name="submit" required>

	
</form>



<?php

if (isset($_POST['submit'])) {

	$mark=$_POST['mark'];
	$stream=$_POST['stream'];
	
	include 'connect_db.php';

	$sql = "SELECT college_name FROM cutoff WHERE stream='$stream' and cutoff <= '$mark' ";
	$result = $conn->query($sql);


	?>

	<table style="width:100%">
	
	<tr>
		<th>College Name</th>
		<th>Address</th>
		<th>city</th>
		<th>contact number</th>
	<tr>

	<?php

	while($data=$result->fetch_assoc()){
    
		//echo $data['college_name'];
		$abc=$data['college_name'];		
		$sql = "SELECT college_name,address,city,contact_no FROM college_list WHERE college_name='$abc'";
		$res = $conn->query($sql);

		$data1=$res->fetch_assoc();

?>
		<tr>
    	<td><?php echo $data1["college_name"] 	?></td>
    	<td><?php echo $data1["address"]  ?></td>
    	<td><?php echo $data1["city"] ?></td>
    	<td><?php echo $data1["contact_no"] ?></td>
    	<tr>
<?php
		//echo $data1['city'];



	
	}



?>
		  </div>
	</div>
	</div>
	</div>
</body>
</html>

<?php





	}


?>