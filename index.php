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
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 48.33%;
  padding-left: 25px;
  padding-bottom: 5px;
  padding: 20px;
  padding-right: 13px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
img:hover {

  animation: shake 1.5s;

 
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
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
      <div class="row">
          <div class="column">
            <img src="frame1.jpg" style="width:400px;height: 200px">
          </div>
          <div class="column">
            <img src="frame2.jpg" style="width:400px;height: 200px">
          </div>
          <br>
      </div>
      <div class="row">
          <div class="column">
            <img src="frame3.jpg" alt="Snow" style="width:400px;height: 200px">
          </div>
          <div class="column">
            <img src="frame4.jpg" alt="Forest" style="width:400px;height: 200px">
          </div>

      </div>
    </div>
  </div>

  </body>

</html>