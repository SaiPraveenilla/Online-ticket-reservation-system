<?php
$connect = mysqli_connect("sql210.epizy.com", "epiz_25982890", "1409120941","epiz_25982890_Details"); // Establishing Connection with Server

if(isset($_POST['submit']))
{ 

$ui = $_POST['userid'];
$dob = $_POST['DOB'];

$date1 = $dob;
$ts1 = strtotime($date1);

foreach ($ui as $key) {


      $query = mysqli_query($connect,"INSERT INTO `project`.`reservations` (`user_id`,`reservation_timestamp_utc`) VALUES ('$key','$ts1')");  
      echo "<center>Redirecting you back to booking page<a href='check.php'> Here </a></center>";
        echo "<meta http-equiv='refresh' content ='1; url=check.php'>"; 
}
}

else{
    echo "<center>Could Not Connect to DATABASE...!!</center>";
}


?>