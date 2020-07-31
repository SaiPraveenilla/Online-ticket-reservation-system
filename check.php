
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
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
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
              <a href="index.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
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
                <div class="col-lg-6 col-md-6 form-group">
                  <a href="modify.php" class="templatemo-blue-button">Modify Booking</a>
                </div> 
            <div class="col-lg-6 col-md-6 form-group">
                  <a href="#" class="templatemo-blue-button" style="background-color: gray">Validate Booking</a>
                </div> 
                <hr>
                <br>
            <h2 class="margin-bottom-16" align="center" style="color: red; font-size: 30px;"> Validate Booking</h2>
            
            <form action="makeres.php" class="templatemo-login-form" method="post" enctype="multipart/form-data"> 
                
                <div class="col form-group">
                  <label class="control-label templatemo-block">UserId</label>
                  <select name="userid[]" class="form-control" id="ui" placeholder="userid" multiple="multiple">

                    <?php

                      $conn = mysqli_connect("localhost", "root", "","project");

                      $squ="SELECT * FROM restriction_setting";
                      $run=mysqli_query($conn,$squ);
                      if ($run) {

                        echo "string";
                        while ($rows=mysqli_fetch_array($run)) {
                          ?>
                          
                          <option value="<?php echo $rows['n']; ?>"><?php echo $rows['n']; ?></option>
                    <?php
                        }
                      }
                    ?>
                  </select>
                </div>       
                
                <div class="col-xl-12 col-lg-12 form-group">
                  <label class="control-label templatemo-block">Date and Time</label>
                  <input type="datetime-local" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY" min="2020-07-30T00:00" max="2020-09-1T00:00">
                </div><br>

<p>
        <div class="form-group text-center">        
        <button type="submit"  name="submit" class="templatemo-blue-button">Validate</button>
        <button type="reset" class="templatemo-white-button">Reset</button>

           </div></p> </form>
</div>
</div>
</div>
          </div>  
  </body>

</html>