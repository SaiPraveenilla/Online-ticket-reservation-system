<?php
  session_start();
  if($_SESSION["username"]){
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect("sql210.epizy.com", "epiz_25982890", "1409120941","epiz_25982890_Details"); // Establishing Connection with Server // Selecting Database from Server
if(isset($_POST['update']))
{ 
$ui = $_POST['userid'];
$dob = $_POST['DOB'];
$members = $_POST['members'];
$tz = $_POST['timezone'];


		
	$sql = mysqli_query($connect,"SELECT * FROM `project`.`restriction_setting` WHERE `n`='$ui'");
	if(mysqli_num_rows($sql) == 1)
	{
  
		if($query = mysqli_query($connect,"UPDATE `project`.`restriction_setting` SET `n`='$ui' , `d`='$dob',`g`='$members',`tz`='$tz' WHERE `restriction_setting`.`n` = '$ui'"))
               {
				echo "<center>Redirecting you back to booking page<a href='modify.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=modify.php'>";
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	}
 

?>