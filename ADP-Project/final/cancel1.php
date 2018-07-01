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



<div class="iit">
  <center>
  <p class="text1">INDIAN INSTITUTE OF TECHNOLOGY</p>
  <p class="text2">Mandi-Kamand, Himachal Pradesh (175005)</p>
  <p class="text3">Portal For Bus Services In IIT Mandi</p>
  </center>
</div>


<link rel="stylesheet" type="text/css" href="air.css">
<ul>
<li><a class="active" href="home.php">Home</a></li>
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
   
    ?>

<div class="cancel">
<?php
    session_start();

     $username = $_SESSION['username'];   

     $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 

   
 $count=0; 
$sql = "SELECT * FROM Reservation_log where user_name = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "****Your reservations which are confirmed are listed below****";
    echo "<table border=5px><tr><th> user_name </th><th> passenger </th><th> vehicle </th><th> reservation no </th><th> seat no. </th><th> date </th><th> time </th><th> source </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["passanger_name"]."</td><td>".$row["vehicle"]."</td><td>".$row["res_no"]."</td><td>".$row["seat_no"]."</td><td>".$row["DateofJourney"]."</td><td>".$row["time"]."</td><td>".$row["source"]."</td></tr>";
    }
    echo "</table>";
}

echo "<br>"; echo "<br>";


$sql = "SELECT * FROM waiting_log where user_name = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "*****Your waiting lists are listed below****";
    echo "<table border=5px><tr><th> user_name </th><th> passenger </th><th> vehicle </th><th> waiting no </th><th> date </th><th> time </th><th> source </th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["passenger_name"]."</td><td>".$row["vehicle"]."</td><td>".$row["waiting_no"]."</td><td>".$row["DateofJourney"]."</td><td>".$row["time"]."</td><td>".$row["source"]."</td></tr>";
    }
    echo "</table>";
}

if($count==0)
{ echo "You haven't booked any seats"; }





 ?>

  <br><br>
  <div class="wrapper1">
  <form class="login" method="POST" action="cancel2.php">
  <p class="title">Enter the reservation number to be cancelled</p>
  <input type="number" name="res_no" placeholder="reservation no." required autofocus/>
  <button name="submit_pass">submit</button>
  </form>
  </div>

 
  <div class="wrapper1">
  <form class="login" method="POST" action="cancel3.php">
  <p class="title">Enter the waiting number to be cancelled</p>
  <input type="number" name="wait_no" placeholder="waiting no." required autofocus/>
  <button name="submit_pass">submit</button>
  </form>
  </div>





</div>


</div>
</body>
</html>
