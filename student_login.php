<?php
    if(!isset($username)){
        $username = '';
    }
?>
<html>
<head>
    <link
      rel="stylesheet"
      href="sign.css"
      crossorigin="anonymous"
    />
    <title> Log in</title>
</head>   
    <body>
       
        <div id="container">
        <div class="card">
            <div class="img_container">
                 <div id="heading"><h1 style="color:white;font-family:sans-serif;">Sign IN</h1></div>
                <img src="https://d2w9rnfcy7mm78.cloudfront.net/1616404/display_ce645ebfe2895f7717f066ab3f8dc496.png?1516357045" alt=""/><br/>
            <br/>
             <form  method="post">
                  <input placeholder="Username" type="text" name="user_email"><br/>


                 <?php if(isset($email_err)) { ?>

                <p><?php echo $email_err ?></p>
                <?php } ?>
                 
                 <input placeholder="Password" type="password" name="pass"><br/>
                 <?php if(isset($password_err)) { ?>
                <p><?php echo $password_err ?></p>
                <?php } ?>
                 
                
                 
                
                   
                   <input class="register_button" type="submit" value="LOGIN" formaction="student_homepage.php">

                   <input class="register_button" type="submit" value="Register" formaction="student_reg.php">
                </form>                
            </div>
        </div>
        </div>
    </body>   
</html>

 