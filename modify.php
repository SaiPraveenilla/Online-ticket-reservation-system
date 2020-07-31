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
              <a href="#"><i class="fa fa-sliders fa-fw"></i>Modify & Validate</a>
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
                  <a href="#" class="templatemo-blue-button" style="background-color: gray">Modify Booking</a>
                </div> 
            <div class="col-lg-6 col-md-6 form-group">
                  <a href="check.php" class="templatemo-blue-button">Validate Booking</a>
                </div> 
                <hr>
                <br>
            <h2 class="margin-bottom-10" align="center" style="color: red; font-size: 30px;"> Modify Booking</h2>
            
            <form action="modify2.php" class="templatemo-login-form" method="post" enctype="multipart/form-data"> 
                
                <div class="col-lg-12 col-md-12 form-group">
                  <label >UserId</label>
                  <input type="text" name="userid" class="form-control" id="ui" placeholder="userid">
                </div>       
                
                <div class="col-lg-12 col-md-12 form-group">
                  <label >Change Date</label>
                  <input type="datetime-local" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY" min="2020-07-30T00:00">
                </div>

                  <div class="col-lg-12 col-md-12 form-group">
                  <label class="control-label templatemo-block">Type</label>
                  <select name="members" class="form-control">
                    <option value="individual">individual</option>
                    <option value="group">group</option>
                  </select>
                </div>
                <div class="col-lg-12 col-md-12 form-group">
                  <label >TimeZone</label>
                  <select name="timezone" id="timezone-offset" class="form-control" placeholder="select">
                      <option value="select" selected="select">Select</option>

                      <option>(GMT -12:00) Eniwetok, Kwajalein</option>

                      <option>(GMT -11:00) Midway Island, Samoa</option>

                      <option value="-10:00">(GMT -10:00) Hawaii</option>

                      <option value="-09:50">(GMT -9:30) Taiohae</option>

                      <option value="-09:00">(GMT -9:00) Alaska</option>

                      <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>

                      <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>

                      <option value="-06:00">(GMT -6:00) Central Time , Mexico City</option>

                      <option value="-05:00">(GMT -5:00) Eastern Time , Bogota, Lima</option>

                      <option value="-04:50">(GMT -4:30) Caracas</option>

                      <option value="-04:00">(GMT -4:00) Atlantic Time (Canada)</option>

                      <option value="-03:50">(GMT -3:30) Newfoundland</option>

                      <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires</option>

                      <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>

                      <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>

                      <option value="+00:00">(GMT) Western Europe Time, London, Casablanca</option>

                      <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Paris</option>

                      <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>

                      <option value="+03:00">(GMT +3:00) Baghdad, Riyadh,St.Petersburg</option>

                      <option value="+03:50">(GMT +3:30) Tehran</option>

                      <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat,Tbilisi</option>

                      <option value="+04:50">(GMT +4:30) Kabul</option>

                      <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi</option>

                      <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>

                      <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>

                      <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>

                      <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>

                      <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>

                      <option value="+08:00">(GMT +8:00) Beijing,Singapore, Hong Kong</option>

                      <option value="+08:75">(GMT +8:45) Eucla</option>

                      <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Yakutsk</option>

                      <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>

                      <option value="+10:00">(GMT +10:00) Eastern Australia,Vladivostok</option>

                      <option value="+10:50">(GMT +10:30) Lord Howe Island</option>

                      <option value="+11:00">(GMT +11:00) Magadan, New Caledonia</option>

                      <option value="+11:50">(GMT +11:30) Norfolk Island</option>

                      <option value="+12:00">(GMT +12:00) Auckland,Kamchatka</option>

                      <option value="+12:75">(GMT +12:45) Chatham Islands</option>

                      <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>

                      <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>

        </select>
               </div>

        <div class="form-group text-center">        
        <button type="submit"  name="update" class="templatemo-blue-button">modify</button>
        <button type="reset" class="templatemo-white-button">Reset</button>

           </div> </form>
</div>
</div>
</div>
          </div>  
  </body>

</html>