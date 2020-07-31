<!DOCTYPE html>
<html lang="en">
	<head>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css">

	</head>
	<body >
	       <style>
body {
  background-image: url('header.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

h1{
	color:red;
}
p{
	color:red;
}
m1{
    color: blue;
    font-style: normal;
    font-weight: bold;
    font-size: 110%;    
}
.white-bg {	
	background-image: url('frame1.jpg'); 
}
</style>
    <nav class="navbar-default" id="mainNav"  style="background:black;border-top: 6px solid orange;border-bottom: 15px solid orange;border-left: 2px solid green;border-right: 2px solid green;
}">   
         
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#"><m1>ONLINE RESERVATION</m1></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
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


		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>User Register</h1>
	        </header>
	        <form method="POST" class="templatemo-login-form" action="register1.php">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Firstname" class="form-control" placeholder="FirstName*" >           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Lastname" class="form-control" placeholder="LastName*" >           
		          	</div>	
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="USN" class="form-control" placeholder="UserID" >           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="PASSWORD" class="form-control" placeholder="******" >           
		          	</div>	
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="repassword" class="form-control" placeholder="Retype Password" >           
		          	</div>	
				</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Email" class="form-control" placeholder="Email*" >           
		          	</div>					
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="phoneno" class="form-control" placeholder="Mobile number" >           
		          	</div>					
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="reslimit" class="form-control" placeholder="Reservation limit" >         
		          	</div>					
	        	</div>
	        	<div class="form-group">
                  <select name="gender" class="form-control">
                    <option value="select">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                 
                  </select>
				  </div>
				  
				<div class="form-group">
					<button type="submit" name="submit" class="templatemo-blue-button width-100">Register</button>
				</div>
	        </form>
		</div>
		
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Have an Account? <strong><a href="login.php" class="blue-text">Sign in here!</a></strong></p>
		</div>
		
				<div class="clearfix"></div>
			</div>
	</body>
</html>
