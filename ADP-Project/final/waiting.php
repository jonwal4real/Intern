<!DOCTYPE html>
<html>
<head>
    <title>Reservation is in Progress...</title>
</head>

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
       $bus = $_SESSION['bus'];
      $name  = $_SESSION['passenger'] ;
      $source = $_SESSION['source']  ;
      $date = $_SESSION['date'];
      $time = $_SESSION['time'] ;
     $seat = $_POST['seat'];	
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
      
    
    
    $user = "SELECT email FROM Users WHERE user_name='$username'";
    $abc1 = $conn->query($user);
    $gmail;
    
    while($sam1 = $abc1->fetch_assoc()) 
    {
      $gmail = $sam1["email"];
    }
    echo "$gmail";

    $user = "SELECT email FROM Stuff WHERE user_name='$username'";
    $abc1 = $conn->query($user);
    $gmail;
    
    while($sam1 = $abc1->fetch_assoc()) 
    {
      $gmail = $sam1["email"];
    }
    echo "$gmail";



    $password = "SELECT password FROM Users WHERE user_name='$username'";
    $abc2 = $conn->query($password);
    $pass;
    
    while($sam2 = $abc2->fetch_assoc()) 
    {
      $pass = $sam2["password"];
    }
    echo "$pass";
    
    $password = "SELECT password FROM Users WHERE user_name='$username'";
    $abc2 = $conn->query($password);
    $pass;
    
    while($sam2 = $abc2->fetch_assoc()) 
    {
      $pass = $sam2["password"];
    }
    echo "$pass";

    
    	$row1 ="INSERT INTO waiting_log (passenger_name,user_name,source,time,DateofJourney,vehicle) VALUES ('$name','$username','$source','$time','$date','$bus')";

        $conn->query($row1);
       
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();                                   // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                            // Enable SMTP authentication
        $mail->Username = 'adp.project007@gmail.com';          // SMTP username
        $mail->Password = 'airbus.php'; // SMTP password
        $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                 // TCP port to connect to

        $mail->setFrom('adp.project007@gmail.com', 'AirBUS');
        $mail->addReplyTo($gmail, 'AirBUS');
        $mail->addAddress($gmail);   // Add a recipient
        

        $mail->isHTML(true);  // Set email format to HTML

        $bodyContent = '<h1>Your seat has been confirmed.</h1>';
        $bodyContent .= '<p>Passanger name : </p>'.$name.'<p>For date : </p>'.$date.' <p>For date : </p>'.$time;

        $mail->Subject = 'Email from AirBUS';
        $mail->Body    = $bodyContent;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'password has been sent to your mail';
        }
      

        ?>
    

    

      <div class="wrapper">
  <form class="login" method="POST" action="airlogin.php">
    <p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <center><p class="title">Your seat has been reserved.
    
    </p>
      
  </form>
  
  
</div>
</div>

  



    

           

      

</body>
</html>
