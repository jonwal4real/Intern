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
</ul>

<?php
    session_start();
   
        $source = $_POST['source'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $bus = $_POST['bus'];
         
         $_SESSION['source1'] = $source;
        $_SESSION['date1'] = $date;
          $_SESSION['time1'] = $time;
          $_SESSION['bus1'] = $bus;
         

    
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 
    $flag=1;
    
    $row1 = $conn->query("select * from schedule ");
    //if (is_null($username)!=TRUE) {
        
    while($row = $row1->fetch_assoc()){
        $diff = $time - $row['timing'];
        
            if($diff == '00:00:00' &&  $row['source'] == $source && $row['vehicle'] == $bus){
            $flag = 0;
            header('Location: check_avail_seats.php');
            
        }
    }
  //}
    if($flag==1)
    {?>

       <div class="wrapper1">
  <form class="login" method="POST" action="check1.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">Invalid timing or invalid vehicle</p>
    
    <p class="title">Enter the following details</p>
    
    <p class="credential">Source</p>
    <select name="source">
  <option value="kamand">Kamand</option>
  <option value="mandi">Mandi</option>
</select>
    <p class="credential">Date</p>
    <input type="date" name="date" placeholder="Date of journey" required>
    <p class="credential">Time of departure(24Hrs.)</p>
    <input type="time" name="time" placeholder="Time" required>
     <p class="credential">Source</p>
    <select name="bus">
    <option value="A">Bus A</option>
    <option value="B">Bus B</option>
    <option value="C">Bus C</option>
    <option value="D">Bus D</option>
    <option value="V1">Van V1</option>
    <option value="V2">Van V2</option>
    </select>
    <button>Show Availability</button>
      
  </form>
  
  
</div>
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
   
    echo "<h2><table border=5px><tr><th> vehicle </th><th> timing </th><th> source </th></tr><h2>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["vehicle"]."</td><td>".$row["timing"]."</td><td>".$row["source"]."</td></tr>";
    }
    echo "</table>";
}
?>
</div>

<?php
          }
?>
</div>
</body>
</html>
