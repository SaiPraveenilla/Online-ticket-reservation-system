<?php
	include 'login1.php';
	?>
	<!DOCTYPE html>
<html lang="en">
	    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <link href="css/templatemo-style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/creative.css" type="text/css"> 
    </head>
	<body >
		<style>
body {
  background-image: url('header.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color:red;
  font-size: 16px;
}
m {
	background-color: black;
}
sm{
    opacity: ;
}
m1{
    color: blue;
    font-style: normal;
    font-weight: bold;
    font-size: 110%;    
}
.white-bg {	
	background-image: url('frame.jpg'); 
}
</style>
    
<nav id="mainNav"  style="background:black;border-top: 6px solid orange;border-bottom: 15px solid orange;border-left: 2px solid green;border-right: 2px solid green;
}">   
         
            <div class="container-fluid">
              
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#"><m1>ONLINE RESERVATION</m1></a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
             			
             			<li>
                            <a class="page-scroll" href="homepage.php"><m1>Home</m1></a>
                        </li>
                        
                        <li>
                           <a class="page-scroll" href="login.php"><m1>SignIn</m1></a>
                        </li>
                        
                        <li>
                            <a class="page-scroll" href="register.php"><m1>SignUp</m1></a>
                        </li>

                    </ul>

                
            </div>
      
            </div>

    
        </nav>

        
		<div class="templatemo-content-widget templatemo-login-widget white-bg" >
			<header class="text-center">
	          <div class="square"></div>
	          <h1>USER LOGIN</h1>
	        </header>
	        <header>
	        <form  action="main.php" class="templatemo-login-form" method="POST">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="UserID" name="username">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="********" name="password">           
		          	</div>	
	        	</div>	          	
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100" name="submit">Login</button>
				</div>
	        </form>
		</div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password!</a></strong></p>
		</div>
		</header>
	</body>
</html>
