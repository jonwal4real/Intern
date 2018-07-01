 

   
   
   

   
    
   

   
     $row2 = $conn->query("select vehicle from schedule where timing=='$time' ");
             while($row3 = $row2->fetch_assoc())
            {  
               if($bus==$row3['vehicle'];)
               { $flag = 1;
                 header('Location: seat.php');
               }
            }



 <input type="text" name="bus" placeholder="bus name" required>
