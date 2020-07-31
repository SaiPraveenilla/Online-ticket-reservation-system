<?php
   $connect = mysqli_connect("sql210.epizy.com", "epiz_25982890", "1409120941","epiz_25982890_Details"); // Establishing Connection with Server

   
   
if(isset($_POST['submit']))
{ 
  
 $FName = $_POST['Firstname'];
 $LName = $_POST['Lastname'];
 $USN = $_POST['USN'];
 $password = $_POST['PASSWORD'];
 $repassword = $_POST['repassword'];
 $Email = $_POST['Email'];
 $Phone = $_POST['phoneno'];
 $gen = $_POST['gender'];
 $reslimit = $_POST['reslimit'];
  

 $check = mysqli_query($connect,"SELECT * FROM user WHERE USN='".$USN."'") or die("Check Query");
 if(mysqli_num_rows($check) == 0) 
 {
  if($repassword == $password)
  {
    
    
    if($query = mysqli_query($connect,"INSERT INTO user(Firstname,Lastname, USN ,PASSWORD,Email,mobile,Gender,nor) VALUES ('$FName','$LName', '$USN', '$password','$Email','$Phone','$gen','$reslimit')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='login.php'>Login here</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This USN already exists</center>"; 
  }
}
?>