<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Airbus Sign-up</title>
    <link rel="stylesheet" type="text/css" href="air.css">
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

    <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="status.php">Status</a></li>
  <li><a href="enquiry.php">Enquiry</a></li>
  <li><a href="sugg.php">Suggestion</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="airbus.php">Log out</a></li>
</ul>

<?php
    session_start();

    $username = $_SESSION['username'];
    echo "welcome" . $username;
    ?>

    <div class="wrapper">

  <form class="login" method="POST" action="pass1.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">update your password here</p>
    <p class="credential">Name</p>
    <input type="text" value="<?php echo $username;?>" disabled> 
    <p class="credential">old password</p>
    <input type="password" name="opass" placeholder="enter your old password" required> 
    <p class="credential">new password</p>
    <input type="password" name="newpass" placeholder="enter new password" required> 
    <p class="credential">confirm new password</p>
    <input type="password" name="newpass1" placeholder="confirm new password" required>   
    <button>Update password</button>
  </form>
  
  
</div>
</div>
  </body>
</html>
