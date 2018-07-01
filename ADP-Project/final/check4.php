<!DOCTYPE html>
<html>
<head>
    <title>Login to Airbus services</title>
</head>

<link rel="stylesheet" type="text/css" href="air.css">

>

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
    $username = $_SESSION['username']; 

    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    } 
    $flag=1;
    
    $row1 = $conn->query("select user_name from admin ");    
    while($row = $row1->fetch_assoc())
    {   
        if($row['user_name'] == $username)
        {    $flag=0;
            header('Location: admin.php');
        }
    }
    if($flag==1)
    { ?> <h2> you are not the administrator.
        <h2/>
       <div class="wrapper1">
  <form class="login" method="POST" action="book.php">
    <p><img src="book.jpg" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>Book a seat</button>
  </form>
</div>
<div class="wrapper1">
  <form class="login" method="POST" action="editpf.php">
    <p><img src="profile.jpeg" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>Edit profile</button>
  </form>
  </div>
<div class="wrapper1">
  <form class="login" method="POST" action="status.php">
    <p><img src="status.jpeg" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>Status</button>
  </form>
  </div>
<div class="wrapper1">
  <form class="login" method="POST" action="cancel1.php">
    <p><img src="cancel.jpeg" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>Cancel ticket</button>
  </form>
 </div>
 <div class="wrapper1">
  <form class="login" method="POST" action="check4.php">
    <p><img src="profile.jpeg" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <button>administrator</button>
  </form>
  </div> 
  <?php } ?>
</div>
</body>
</html>
