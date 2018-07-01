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
$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=$count+1;
    echo "*****Student account*****";
    echo "<table border=5px><tr><th> username </th><th> password </th><th> name </th><th> email </th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["password"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
}


echo "<br>"; echo "<br>";


$sql = "SELECT * FROM Stuff";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=$count+1;
    echo "*****Faculties account****";
   echo "<table border=5px><tr><th> username </th><th> password </th><th> name </th><th> email </th></tr>";
    
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["user_name"]."</td><td>".$row["password"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>"; 
    }
    echo "</table>";
}
echo "<br>"; echo "<br>";


$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=$count+1;
    echo "*****Administrator account****";
   echo "<table border=5px><tr><th> username </th><th> password </th><th> name </th><th> email </th></tr>";
    
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["user_name"]."</td><td>".$row["password"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>"; 
    }
    echo "</table>";
}
if($count==0)
{ echo "NO ACCOUNT "; }

 ?>
  


</div>

</div>
</body>
</html>
