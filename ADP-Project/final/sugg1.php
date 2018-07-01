<!DOCTYPE html>
<html>
  <head>
    <title>About the site</title>
    
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
  <li><a class="sign" href="airbus.php">Log in</a></li>
  <li><a class="active" href="sugg1.php">Suggestion</a></li>
  <li><a href="contact1.php">Contact</a></li>
  <li><a href="about1.php">About</a></li>
  <li><a class="sign" href="sign_up.php">Sign up</a></li>
</ul>
</div>

<div class="content">
  <p>SUGGESTION ZONE</p>
  
</div>

<div class="sugg">
<form method='post'>


  

  Click to write:<br />
  <textarea rows ="25" columns="1000" name='comment' id='comment'></textarea><br />

  <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />

  <input type='submit' value='Submit' />  
</form>


      

 </table>
</div>
<?php
$to = "jontypurbia.udr@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: avnishchaudhary922@gmail.com" . "\r\n" .
"CC: jonwalpramod1122@gmail.com";

mail($to,$subject,$txt,$headers);
?>

<div class="contactc2">
  <p><b></b>Your suggestion is important to us.Any idea for the improvement of our site is welcomed. We will further take it to our best. You can also leave a comment on how you enjoy the service of airbus. </p>

</div>
  </body>
</html>
