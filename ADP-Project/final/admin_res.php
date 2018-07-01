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
<li><a  href="home.php">Home</a></li>
  <li><a class="active" href="status.php">Status</a></li>
  <li><a href="enquiry.php">Enquiry</a></li>
  <li><a href="sugg.php">Suggestion</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="airbus.php">Log out</a></li>
</ul>

<div class="cancel1">
<?php
    session_start();

        
        

    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    } 

 $count=0; 
$sql = "SELECT * FROM Reservation_log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=$count+1;
    echo "*****Reservations which are confirmed*****";
    echo "<table border=5px><tr><th> user_name </th><th> passenger </th><th> reservation no </th><th> vehicle </th><th> seat no. </th><th> date </th><th> time </th><th> source </th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["passanger_name"]."</td><td>".$row["res_no"]."</td><td>".$row["vehicle"]."</td><td>".$row["seat_no"]."</td><td>".$row["DateofJourney"]."</td><td>".$row["time"]."</td><td>".$row["source"]."</td></tr>";
    }
    echo "</table>";
}


echo "<br>"; echo "<br>";


$sql = "SELECT * FROM waiting_log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=$count+1;
    echo "*****Reservation on the waiting lists****";
    echo "<table border=5px><tr><th> user_name </th><th> passenger </th><th> waiting no </th><th> vehicle </th><th> date </th><th> time </th><th> source </th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["passenger_name"]."</td><td>".$row["waiting_no"]."</td><td>".$row["vehicle"]."</td><td>".$row["DateofJourney"]."</td><td>".$row["time"]."</td><td>".$row["source"]."</td></tr>";
    }
    echo "</table>";
}
if($count==0)
{ echo "NO RESERVATIONS YET"; }

 ?>
  


</div>

</div>
</body>
</html>
