<!DOCTYPE html>
<html>
  <head>
    <title> Reset your Password</title>
    
    <link rel="stylesheet" type="text/css" href="air.css">

  </head>
  <?php
    session_start();
   
        $pass = $_POST['submit_pass'];
    if (is_null($pass)==TRUE) {
        header('Location: airbus.php') ; 
      }
        ?>

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
  <li><a href="airbus.php">Log-in</a></li>
  <li><a href="#about">Status</a></li>
  <li><a href="enquiry.php">Enquiry</a></li>
  <li><a href="#contact">Suggestion</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="about1.php">About</a></li>
  <li><a class="sign" href="sign_up.php">Sign up</a></li>
</ul>



    <div class="wrapper">
  <form class="login" method="POST" action="airlogin.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">Provide following credentials</p>
    <p>Enter your yousername</p>
    <input type="text" name="uname" placeholder="Username" required autofocus/>
    <input type="text" name="mail1" placeholder="Registered E-mail id" required/>
      
    <button>Submit</button>
      
  </form>
  
  
</div>
</div>
  </body>
</html>
