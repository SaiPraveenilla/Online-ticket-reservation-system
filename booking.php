<?php
$connect = mysqli_connect("sql210.epizy.com", "epiz_25982890", "1409120941","epiz_25982890_Details"); // Establishing Connection with Server

if(isset($_POST['submit']))
{ 
$ui = $_POST['userid'];
$dob = $_POST['DOB'];
$members = $_POST['members'];
$tz = $_POST['timezone'];

$hel = mysqli_query($connect,"SELECT * FROM restriction_setting WHERE n='$ui' && d='$dob' && g='$members' && tz='$tz'");
$nr=mysqli_num_rows($hel);
if ($nr < 1) {
	if ($members!='group'){
    	$query = mysqli_query($connect,"INSERT INTO `project`.`restriction_setting` (`n`,`d`,`g`,`tz`) VALUES ('$ui','$dob','$members','$tz')");
    	echo "<center>Redirecting you back to booking page<a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=MakeR.php'>";
			}
	else {
		echo "<center>Sorry you have selected the group so your are redirecting <a href='group.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=check.php'>";
	}
}
else
{
	echo "you already updated this";
}
}

else{
	  echo "<center>enter your USN only...!!</center>";
}


?>