<!DOCTYPE html>
<html>
  <head>
    <title> Book a Ticket</title>
    
     <link rel="stylesheet" type="text/css" href="air.css">

  </head>

  <body>
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
  <li><a class="sign" href="airbus.php">Log out</a></li>
</ul>
<?php
    session_start();

    $username = $_SESSION['username'];
   // echo "welcome" . $username;
    ?>


    <div class="wrapper1">
      <p>
  <form class="login" method="POST" action="check.php">
    <p class="title">Enter the following details</p>
    <p class="credential">Passanger name</p>
    <input type="text" name="name2" placeholder="Passanger name" required autofocus/>
    <p class="credential">Username</p>
    <input type="text" value="<?php echo $username;?>" disabled>
   
    <p class="credential">Source</p>
    <select name="source">
    <option value="kamand">Kamand</option>
    <option value="mandi">Mandi</option>
    </select>
    
    <p class="credential">Date</p>
    <input type="date" name="date" placeholder="Date of journey" required>
    <p class="credential">Time of departure(24Hrs.)</p>
    <input type="time" name="time" placeholder="Time" required>
       
    <p class="credential">vehicle name</p>
    <select name="bus">
    <option value="A">Bus A</option>
    <option value="B">Bus B</option>
    <option value="C">Bus C</option>
    <option value="D">Bus D</option>
    <option value="V1">Van V1</option>
    <option value="V2">Van V2</option>
    </select>
    <button>Book now</button>
  </form>
</div>
</p>

<div class="pdf">
  <center><p class="note">Please  have a look at the time table and reserve your seat accordingly</p></center>
   <?php 
   session_start();

     $username = $_SESSION['username'];    
        

    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    } 
$sql = "SELECT * FROM schedule";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=$count+1;
   
    echo "<h2><table border=5px><tr><th> vehicle </th><th> timing </th><th> source </th></tr></h2>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["vehicle"]."</td><td>".$row["timing"]."</td><td>".$row["source"]."</td></tr>";
    }
    echo "</table>";
}
?>
</div>

  </body>
</html>
