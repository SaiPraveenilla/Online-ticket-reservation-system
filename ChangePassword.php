<?php
  session_start();
  if($_SESSION["username"]){
    
  }
   else {
     header("location: index.php");
  }
?> 

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

  </head>
<body>  
<style>
body {
  background-image: url('header.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
m1{
  color: red;
  font-style: italic;
  font-size: 30px;
}
</style>
    
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="circle"></div>
                   
        <?php
      $Welcome = "WELCOME";
          echo "<h1><m1><center>" . $Welcome . "<br>". $_SESSION['username']. "</m1></center></h1>";
      ?>
    </header>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="MakeR.php"><i class="fa fa-sliders fa-fw"></i>Make Reservation</a>
            </li>
            <li>
              <a href="modify.php"><i class="fa fa-sliders fa-fw"></i>Modify & Validate</a>
            </li>
              
          </ul>
        </nav>
      </div>
      <div>
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li>
                  <a href="homepage.php">Home</a>
                </li>
                <li>
                  <a href="ChangePassword.php">Change Password</a>
                  </li>
                <li>
              <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a>
            </li>
              </ul>
            </nav>
        
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Change it with a Click</h2>
            <p>Change your Login Credentials</p>
            <form action="cp.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
              <div class="row form-group">
                
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Current Password</label>
                    <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*******" name="curpassword">                  
                </div>                
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" class="form-control" id="inputNewPassword" name="Password">
                </div>
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Confirm New Password</label>
                    <input type="password" class="form-control" id="inputConfirmNewPassword" name="repassword">
                </div>

              
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>                           
            </form>
          </div>   
        </div>
      </div>
    </div>

  </body>

</html>