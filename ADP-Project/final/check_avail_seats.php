<!DOCTYPE html>
<html>
<head>
    <title>Login to Airbus services</title>
</head>

<link rel="stylesheet" type="text/css" href="air.css">

<link rel="stylesheet" type="text/css" href="air1.css">

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
  <li><a class="sign" href="airbus.php">Log out</a></li>
</ul>

<?php
    session_start();
   
        $username = $_SESSION['username'];
        $source = $_SESSION['source1']  ;
      $date = $_SESSION['date1'];
      $time = $_SESSION['time1'] ;    
       $bus= $_SESSION['bus1'];  

          

    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    } ?>
    <h2>  
   The blue seats available. Red seats have been already booked. 
   ***first 3 seats is reserved for faculties only.
   <center> <b> *********BUS <?php echo "$bus"; ?>***********  </center>
  <h2/>
  <?php
    
     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 1)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 1</button>
      </form>  </div>  <?php }
     

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 2)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 2</button>
      </form>  </div>  <?php }

    

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 3)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 3</button>
      </form>  </div>  <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 4)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 4</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 5)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 5</button>
      </form>  </div>  <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 6)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 6</button>
      </form>  </div>  <?php }
    
    
    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 7)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 7</button>
      </form>  </div>  <?php }

    
    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 8)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 8</button>
      </form>  </div>  <?php }

   
     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 9)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 9</button>
      </form>  </div>  <?php }


   
    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 10)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 10</button>
      </form>  </div>  <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 11)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 11</button>
      </form>  </div>  <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 12)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 12</button>
      </form>  </div>  <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 13)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 13</button>
      </form>  </div>  <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 14)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 14</button>
      </form>  </div>  <?php }


    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 15)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 15</button>
      </form>  </div>  <?php }
  
      $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 16)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 16</button>
      </form>  </div>  <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 17)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 17</button>
      </form>  </div>  <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 18)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 18</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 19)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 19</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 20)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 20</button>
      </form>  </div>  <?php }


    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 21)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 21</button>
      </form>  </div>  <?php }


    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 22)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 22</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 23)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 23</button>
      </form>  </div>  <?php }


   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 24)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 24</button>
      </form>  </div>  <?php }


     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 25)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 25</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 26)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 26</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 27)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 27</button>
      </form>  </div>  <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 28)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 28</button>
      </form>  </div>  <?php }

    
     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 29)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1">   <button>booked</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login">  <button >seat 29</button>
      </form>  </div>  <?php }

   
 ?>

 

  
</div>
</body>
</html>
