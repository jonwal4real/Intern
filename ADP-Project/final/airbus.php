<!DOCTYPE html>
<html>
  <head>
    <title> Login to Airbus services</title>
     <meta http-equiv="refresh" content="500" />
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
  <li><a class="active" href="airbus.php">Log-in</a></li>
  <li><a href="sugg1.php">Suggestion</a></li>
  <li><a href="contact1.php">Contact</a></li>
  <li><a href="about1.php">About</a></li>
  <li><a class="sign" href="sign_up.php">Sign up</a></li>
</ul>



    <div class="wrapper">
  <form class="login" method="POST" action="airlogin.php">
  	<p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">Log in</p>
    <input type="text" name="uname" placeholder="Username" required autofocus/>
    <input type="password" name="pass" placeholder="Password" required/>
    <img src="https://www.premierguitar.com/ext/resources/images/marketing/Password/PasswordRetrieve.png" height="30" width="30">
    <a href="forgot.php">Forgot your password?</a>
      
    <button name="submit_pass">Log in</button>
      
  </form>
  
  
</div>
</div>
  </body>
</html>
