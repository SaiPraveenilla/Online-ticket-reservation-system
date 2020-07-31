<?php
	session_start();
	$username = $_POST['username'];
	$password  = $_POST['password'];
	
	if ($username&&$password)
	{
		$connect = mysqli_connect("sql210.epizy.com", "epiz_25982890", "1409120941","epiz_25982890_Details") or die("Couldn't Connect");

		
		$query = mysqli_query($connect,"SELECT * FROM user WHERE USN='$username'");
		
		$numrows = mysqli_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername = $row['USN'];
				$dbpassword = $row['PASSWORD'];
				
			}
			if ($username==$dbusername&& $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['username'] = $username;
			} else{
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=login.php'>";
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter USN and Password");
	?>