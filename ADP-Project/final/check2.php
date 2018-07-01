<!DOCTYPE html>
<html>
<head>
    <title>Login to Airbus services</title>
</head>

<link rel="stylesheet" type="text/css" href="air.css">

>

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
   
        
         $name = $_POST['name'];
        $username = $_POST['uname'];
        $password = $_POST['psw'];
        $email = $_POST['mail'];
        
         $_SESSION['name'] = $name;
         $_SESSION['uname'] = $username;
         $_SESSION['psw'] = $password;
         $_SESSION['mail'] = $email;
         
        

    
    $conn = mysqli_connect("localhost", "root", "6jdrslp02", "PROJECT");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    } 
    $flag=1;
    
    $row1 = $conn->query("select user_name from account ");    
    while($row = $row1->fetch_assoc())
    {   
        if($row['user_name'] == $username)
        {    $flag=0;
            
        }
    }
    if($flag==1)
    {   header('Location: sign.php');
    }
  
    else
    {?> <h2> oops...this user_name is already used. Choose different user_name. 
        <h2/>
      <div class="wrapper4">

  <form class="login" method="POST" action="check2.php">
  	<p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">Sign up Here for  Students and staff</p>
    <p class="credential">Name</p>
    <input type="text" name="name" placeholder="Full Name" required autofocus/> 
    <p class="credential">Choose a Username</p>
    <input type="text" name="uname" placeholder="Choose a user name of single word" required> 
    <p class="credential">Choose a Password</p>
    <input type="password" name="psw" placeholder="Choose a password" required> 
    <p class="credential">Enter E-mail</p>
    <input type="email" name="mail" placeholder="E-mail ID" required>   
    <button>Sign up</button> 
   
  </form>
    
    
  
  
</div>

    <div class="wrapper4">

  <form class="login" method="POST" action="check3.php">
  	<p><img src="aaa.png" width="250" height="150" title="airbus logo" alt="airbus logo"></p>
    <p class="title">Sign up Here for Faculty</p>
    <p class="credential">Name</p>
    <input type="text" name="name" placeholder="Full Name" required autofocus/> 
    <p class="credential">Choose a Username</p>
    <input type="text" name="uname" placeholder="Choose a user name of single word" required> 
    <p class="credential">Choose a Password</p>
    <input type="password" name="psw" placeholder="Choose a password" required> 
    <p class="credential">Enter E-mail</p>
    <input type="email" name="mail" placeholder="E-mail ID" required>   
    <button>Sign up </button> 
   
  </form>
    
    
  
  
</div>
  
<?php
          }
?>
</div>
</body>
</html>
