<?php
    // $username = $_POST['user_name'];
     $pass = $_POST['pass'];
     $user = $_POST['user_email'];
     $flag=0;
include 'connect_db.php';



if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";



$sql = "SELECT  username, pass FROM student_user WHERE username='$user' ";
$result = $conn->query($sql);

//$data=$result->fetch_assoc();

  while($data=$result->fetch_assoc()){
    

if ($data["username"]== $user && $data["pass"] == $pass) {
  
  $flag=1;
 
//admin homepage after successfull login

 ?>




<!DOCTYPE html>
<html>
<head>
  <link
      rel="stylesheet"
      href="button.css"
      crossorigin="anonymous"
    />

  <title></title>
</head>
<body>

<form>
  <div class="btn-group" style="width:100%">
      <button style="width:50%">Well~come  </button>  
    <button type="submit" formtarget="target" formaction="show_clg.php" style="width:13%">view college</button>

  <button style="width:13%"  formtarget="target" formaction="add_feedback.php">Give Feedback</button>

  <button style="width:13%"  formaction="index.php">Logout</button>
  
</div>



</form>
<?php
$source="add_college.php";
?>
<p align="center">
<div class="container">

<iframe src="wellcome.php" class="responsive-iframe" name="target" ></iframe>

</div>
</p>
</body>
</html>

 <?php
  
}
}
if ($flag==0) {
  
   ?>
  log in fail <a href="student_login.php">Click here to try again..</a>




 <?php
  # code...
}





  






?>

 