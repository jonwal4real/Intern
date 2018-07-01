<!DOCTYPE html>
<html>
<head>
<title>Login to Airbus services</title>
</head>

<link rel="stylesheet" type="text/css" href="air.css">

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
   // echo "welcome" . $username;
    ?>

<?php
    session_start();
    $username = $_SESSION['username']; 
    $wait_no = $_POST['wait_no'];
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 
    


   
       


   $row1 ="delete from waiting_log where waiting_no='$wait_no' and user_name='$username'";

     if ($conn->query($row1)) {
        echo "Record deleted in waiting_log";
        echo  "<br>";
        } 
        else
        {
          echo "Enter correct waiting number " ;
        }


    

 ?>

</div>
</body>
</html>
