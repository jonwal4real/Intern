<!DOCTYPE html>
<html>
<head>
    <title>Login to Airbus services</title>
</head>



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
        $source = $_SESSION['source']  ;
      $date = $_SESSION['date'];
      $time = $_SESSION['time'] ;    
      $bus = $_SESSION['bus'] ;   

          

    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    } ?>
    <h2>  
   Select the blue seats only. Red seats have been already booked. 
   ***first 3 seats is reserved for faculties only.
  <center> <h1> *********BUS <?php echo "$bus"; ?>***********
   <h1/>
  </center>
  <h2/>
  <?php
    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");
    
        
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 1)
         {  $flag = 0;         
        }
    }
    if($flag==0)
    { ?> <div class="wrapper1">     <form class="login1" method="POST" action="seat1.php">
      <button>seat 1</button>
      </form>   </div>    <?php }
    if($flag==1)
    {  ?>    <div class="wrapper1">    <form class="login" method="POST" action="reserve.php">
      <button name="seat" value=1>seat 1</button>
      </form>    </div>     <?php }  

     

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'"); 
    while($row = $row1->fetch_assoc())    { if($row['seat_no'] == 2)         {  $flag = 0;  }}
    if($flag==0)
    { ?> <div class="wrapper1">  <form class="login1" method="POST" action="seat1.php">   <button>seat 2</button>
      </form>  </div>  <?php }
    if($flag==1)
    { ?>   <div class="wrapper1">  <form class="login" method="POST" action="reserve.php">  <button name="seat" value=2>seat 2</button>
      </form>  </div>  <?php }
     
    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 3)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 3</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=3>seat 3</button>
      </form>    </div>    <?php }

    
     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 4)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 4</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=4>seat 4</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 5)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 5</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=5>seat 5</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 6)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 6</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=6>seat 6</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 7)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 7</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=7>seat 7</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 8)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 8</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=8>seat 8</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 9)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 9</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">    <button name="seat" value=9>seat 9</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 10)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 10</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">   <button name="seat" value=6>seat 10</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 11)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 11</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=11>seat 11</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 12)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 12</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=12>seat 12</button>
      </form>    </div>    <?php }

  
        $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 13)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 13</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=13>seat 13</button>
      </form>    </div>    <?php }

         $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 14)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 14</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=14>seat 14</button>
      </form>    </div>    <?php }


       $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 15)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 15</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=15>seat 15</button>
      </form>    </div>    <?php }
  
     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 16)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 16</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=16>seat 16</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 17)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 17</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=17>seat 17</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 18)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 18</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=18>seat 18</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 19)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 19</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=19>seat 19</button>
      </form>    </div>    <?php }

     $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 20)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 20</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=20>seat 20</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 21)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 21</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=21>seat 21</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 22)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 22</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=22>seat 22</button>
      </form>    </div>    <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 23)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 23</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=23>seat 23</button>
      </form>    </div>    <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 24)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 24</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=24>seat 24</button>
      </form>    </div>    <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 25)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 25</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=25>seat 25</button>
      </form>    </div>    <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 26)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 26</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=26>seat 26</button>
      </form>    </div>    <?php }

   $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 27)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 27</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=27>seat 27</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 28)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 28</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=28>seat 28</button>
      </form>    </div>    <?php }

    $flag=1;
    $row1 = $conn->query("select seat_no from Reservation_log WHERE time = '$time' AND source = '$source' and DateofJourney='$date' and vehicle='$bus'");   
    while($row = $row1->fetch_assoc())
     {   if($row['seat_no'] == 29)  {  $flag = 0; }}
    if($flag==0)
    { ?> <div class="wrapper1">   <form class="login1" method="POST" action="seat1.php">      <button>seat 29</button>
      </form>   </div>    <?php }
    if($flag==1)
    {   ?>    <div class="wrapper1">   <form class="login" method="POST" action="reserve.php">  <button name="seat" value=29>seat 29</button>
      </form>    </div>  

     
        <?php } ?>
    <div class="wrapper1">
  <form class="login" method="POST" action="waiting.php">
    <button>waiting list</button>
  </form>
  </div>
 

 


 
  
  
</div>
</body>
</html>
