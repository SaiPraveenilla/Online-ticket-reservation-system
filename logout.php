<?php
	session_start();
	session_destroy();
	
	header("location: login.php");
	echo"You have been Logged out <a href='login.php'>Click here to login</a>";
	?>