<!DOCTYPE html>
<html>
<head>
    <title>Checking for timing</title>
</head>

<link rel="stylesheet" type="text/css" href="air.css">

<body>
  <div class="page">
  <div class="top">
  <img src="aaa1.png" width="150" height="100" title="airbus logo">
  <p><i>The way travelling meant to be...</i></p>
</div>


<div class="iit">
  <center>
    <p class="text1">INDIAN INSTITUTE OF TECHNOLOGY</p>
  <p class="text2">Mandi-Kamand, Himachal Pradesh (175005)</p>
  <p class="text3">Portal For Bus Services In IIT Mandi</p>
  </center>
</div>

<ul>
<li><a class="sign" href="home.php">Home</a></li>
  <li><a href="enquiry.php">Enquiry</a></li>
  <li><a href="sugg.php">Suggestion</a></li>
  <li><a href="status.php">Status</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="airbus.php">Log out</a></li>
</ul>

<?php
    session_start();
   
        $source = $_POST['source'];
        
        $time = $_POST['time'];
        $bus = $_POST['bus'];       

    
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 
  if($time<='24:00:00')
   { 
   $row1 ="INSERT INTO schedule (vehicle,timing,source) VALUES ('$bus','$time','$source')";

        if ($conn->query($row1)) {
          ?>
            <div class="wrapper">
  <form class="login" method="POST" action="admin.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">added successfully</p>
    <button name="submit_pass"> goto admin page</button>
      
  </form>
  
  
</div>
       <?php }}
 else
 { ?>
            <div class="wrapper">
  <form class="login" method="POST" action="admin.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">wrong time</p>
    <button name="submit_pass"> goto admin page</button>
      
  </form>
  
  
</div>
       <?php }

   ?>
</div>
</body>
</html>
