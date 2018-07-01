<!DOCTYPE html>
<html>
<head>
    <title>Sign up for airbus</title>
</head>

<body>
  <div class="page">
 <div class="top">
  <img src="aaa1.png" width="150" height="100" title="airbus logo">
  <p><i>The way travelling meant to be...</i></p>
</div>
<!--div class="iit_image ">
  <img src="iit.jpg" width="150" height="116" title="iitmandi logo" alt="iitmandi">
</div-->

<div class="iit">
  <center>
    <p class="text1">INDIAN INSTITUTE OF TECHNOLOGY</p>
  <p class="text2">Mandi-Kamand, Himachal Pradesh (175005)</p>
  <p class="text3">Portal For Bus Services In IIT Mandi</p>
  </center>
</div>

<link rel="stylesheet" type="text/css" href="air.css">
<ul>
<li><a href="airbus.php">Log-in</a></li>
    
  <li><a href="sugg1.php">Suggestion</a></li>
  <li><a href="contact1.php">Contact</a></li>
  <li><a href="about1.php">About</a></li>
  <li><a href="sign_up.php">Sign up</a></li>
</ul>

<?php
	session_start();
   //if(isset($_POST['submit'])){
        $name = $_SESSION['name'];
        $username = $_SESSION['uname'];
        $password = $_SESSION['psw'];
        $email = $_SESSION['mail'];
    //}
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 

    
    
    $row1 ="INSERT INTO account VALUES ('$username','$password','$name','$email')";
        if ($conn->query($row1)) {
        ?>
            <div class="wrapper">
  <form class="login" method="POST" action="airlogin.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">Signed up successfully</p>
    <button name="submit_pass"> click here to Log in</button>
      
  </form>
  
  
</div>
            
        <?php 
        }else {
          ?>
          <div class="wrapper">
  <form class="login" method="POST" action="sign_up.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title"><?php
        echo "Error processing request: " . "<br>" . $result . "<br>" . $conn->error;
        ?>
        </p>
    <button name="submit_pass"> click here to try again</button>
      
  </form>
  <?php
        }
   $row1 ="INSERT INTO Stuff VALUES ('$username','$password','$name','$email')";
        if ($conn->query($row1)) {
        
        }else {
          
        }
    
    
?>
  
 
  
</div>
</div>
</body>
</html>
