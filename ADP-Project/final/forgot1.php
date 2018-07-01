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
  <li><a href="sugg1.php">Suggestion</a></li>
  <li><a href="contact1.php">Contact</a></li>
  <li><a href="about1.php">About</a></li>
  <li><a href="airbus.php">Log out</a></li>
</ul>


<?php
    session_start();
   
    $username = $_POST['username'];
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        //else echo "connected";
    } 
    

 $book_no = "SELECT email FROM Users WHERE user_name='$username'";
    $abc = $conn->query($book_no);
    $gmail;
    
    while($sam = $abc->fetch_assoc()) 
    {
    	$gmail = $sam["email"];
    }
   echo "$gmail";



 $book_no = "SELECT password FROM Users WHERE user_name='$username'";
    $abc = $conn->query($book_no);
    $pass;
    
    while($sam = $abc->fetch_assoc()) 
    {
    	$pass = $sam["password"];
    }
echo "$pass";




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
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>your  password is</h1>' .$pass;
$bodyContent .= '<p></p>';

$mail->Subject = 'Email from Localhost by CodexWorld';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'password has been sent to your mail';
}

 ?>

</div>
</body>
</html>
