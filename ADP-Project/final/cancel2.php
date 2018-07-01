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
   // echo "welcome" . $username;
    // session_start();
   // $username = $_SESSION['username']; 
    $res_no = $_POST['res_no'];
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 
    
   $book_no = "SELECT user_name FROM Reservation_log WHERE res_no=$res_no ";
    $abc = $conn->query($book_no);
   
    $user_j;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$user_j = $sam1["user_name"];
    }
 if($user_j==$username)
{
   $book_no = "SELECT DateofJourney FROM Reservation_log WHERE res_no=$res_no and user_name='$username'";
    $abc = $conn->query($book_no);
    $date_j;
    
    while($sam = $abc->fetch_assoc()) 
    {
    	$date_j = $sam["DateofJourney"];
    }
    
   

    $book_no = "SELECT time FROM Reservation_log WHERE res_no=$res_no and user_name='$username'";
    $abc = $conn->query($book_no);
   
    $time_j;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$time_j = $sam1["time"];
    }

     

   $book_no = "SELECT seat_no FROM Reservation_log WHERE res_no=$res_no and user_name='$username'";
    $abc = $conn->query($book_no);
   
    $seat_j;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$seat_j = $sam1["seat_no"];
    }
    


    $book_no = "SELECT vehicle FROM Reservation_log WHERE res_no=$res_no and user_name='$username'";
    $abc = $conn->query($book_no);
   
    $bus_j;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$bus_j = $sam1["vehicle"];
    }

    
    
   

   $book_no = "SELECT source FROM Reservation_log WHERE res_no=$res_no and user_name='$username'";
    $abc = $conn->query($book_no);
   
    $source_j;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$source_j = $sam1["source"];
    }
    

  


 $book_no = "SELECT min(book_time) as min_book_time FROM waiting_log WHERE DateofJourney = '$date_j' AND time = '$time_j' and source='$source_j' and vehicle='$bus_j'";
    $abc = $conn->query($book_no);
    $book_no_1;
    while($sam = $abc->fetch_assoc()) 
    {
    	$book_no_1 = $sam["min_book_time"];
    }
    
  
   $book_no = "SELECT user_name FROM waiting_log WHERE  book_time='$book_no_1'";
    $abc = $conn->query($book_no);
   
    $user_w;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$user_w = $sam1["user_name"];
    }
  



$book_no = "SELECT passenger_name FROM waiting_log WHERE book_time='$book_no_1' ";
    $abc = $conn->query($book_no);
   
    $pass_j;
    while($sam1 = $abc->fetch_assoc()) 
    {
    	$pass_j = $sam1["passenger_name"];
    }
    
   if($book_no_1!=NULL){
    
    	$row1 ="INSERT INTO Reservation_log (passanger_name,user_name,source,time,DateofJourney,seat_no,vehicle) VALUES ('$pass_j','$user_w','$source_j','$time_j','$date_j',$seat_j,'$bus_j')";

        if ($conn->query($row1)) {
        echo "Record Inserted in Reservation";
        echo  "<br>";
        }else {
        echo "please enter correct reservation numberz";
        }
}

   $row1 ="delete from Reservation_log where res_no='$res_no' and user_name='$username' ";

     if ($conn->query($row1)) {
        echo "Record deleted in reservation_log";
        echo  "<br>";
        } 
        


    $row1 ="delete from waiting_log where book_time='$book_no_1' ";

     if ($conn->query($row1)) {
        echo "Record deleted in waiting_log";
        echo  "<br>";
        } 
       
}
else
{ echo "This reservation is not yours";}




 ?>

</div>
</body>
</html>
