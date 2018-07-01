<!DOCTYPE html>
<html>
<head>
    <title>update password</title>
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
<li><a href="home.php">Home</a></li>
  <li><a href="#about">Status</a></li>
  <li><a href="#news">Enquiry</a></li>
  <li><a href="#contact">Suggestion</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="airbus.php">Log out</a></li>
</ul>
<?php
    session_start();

    $username = $_SESSION['username'];
    echo "welcome" . $username;
    

        $oldpass = $_POST['opass'];
        $newpass = $_POST['newpass'];
        $newpass1 = $_POST['newpass1'];

    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    }
    

    if($newpass==$newpass1){
    $pass = "SELECT password FROM Users WHERE user_name = '$username' AND password = '$oldpass'";
    $abc = $conn->query($pass);
    if (  !(  $sam = $abc->fetch_assoc() ) ) {
      echo "Please enter correct old password";
    }
    else{
      
      $row1 ="UPDATE Users set password='$newpass' where user_name='$username' and  password='$oldpass'";

        if ($conn->query($row1)==TRUE) {
          ?>
   <div class="wrapper">
  <form class="login" method="POST" action="airlogin.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">your password has been changed
      
     </p>
      
  </form>
  
  
</div>
</div>
          <?php

        }
}
    }   //braces for the first if()
 else {

  ?>
<div class="wrapper">
  <form class="login" method="POST" action="pass.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
   <center> <p class="title">password are not matching<br> Please try again</p>  </center>
    <button name="submit_pass">update password</button>
      
  </form>
  
  
</div>

  <?php
 }


    ?>
      
       

      
</div>
</body>
</html>
