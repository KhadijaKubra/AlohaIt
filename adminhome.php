<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:admindhome.php");
}

?>




 <?php

 require 'config.php';
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submitservice'])) {
  	// Get image name
  	$image = $_FILES['serviceimage']['name'];
     
  
  	
      $title = $_POST['title'];
      $description = $_POST['description'];  
  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO service_provided (Titile,Description,Image) VALUES ('$title','$description','$image')";
  	 require 'config.php';
      // execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['serviceimage']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
        
  	}
  }
  //$result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
          <link rel="stylesheet" href="css/memberregi.css" type="text/css">

  </head>
    
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
             <?php
      require 'config.php';
      if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
            $statement="select * from admin_1 where Name='$un'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
          echo"<img src=image/".$row['ProfilePic']." width='10%' height='10%' alt='person' class='img-fluid rounded-circle'>";
                }

            }
            else
            {
                echo "Nothing found in db";
            }
      }
            mysqli_close($conn);
      ?>
      
      <h2 class="h5"><?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
      echo "$un";}
        ?>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
          
          
          
          
          
          <!-- can be updated according to need -->
          
          
          
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="adminhome.php"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="membershow.php"> <i class="icon-form"></i>Create project Task                          </a></li>
            <li><a href="memberlist.php"> <i class="fa fa-bar-chart"></i>Memberlist                           </a></li>
            <li><a href="ongprojectAdmin.php"> <i class="icon-grid"></i> Projects                             </a></li>
            <li><a href="ClientsList.php"> <i class="icon-grid"></i> Clients info                           </a></li>
    
           <li><a href="memeberregis.php"> <i class="icon-grid">Memeber registration</i>                            </a></li>
         
          </ul>
        </div>
   
      </div>
    </nav>
      
      <!-- push notification div  -->
      
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Aloha solutions LTD</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
               
               
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
            
        </nav>
          
      </header>
        
        
       <!-- chart starts here --> 
        <?php
 
$dataPoints = array(
	array("label"=> "year 2011", "y"=> 24),
	array("label"=> "year 2012", "y"=> 65),
	array("label"=> "year 2013", "y"=> 30),
	array("label"=> "year 2014", "y"=> 35),
	array("label"=> "year 2015", "y"=> 55),
	array("label"=> "year 2016", "y"=> 80),
	array("label"=> "year 2017", "y"=> 45),
	array("label"=> "year 2018", "y"=> 90)
);
 
?>
        
        
        
        <section id="chart">
            
        <div class="container">
           <div id="chartContainer"></div>
        </div>
        </section>
        
        <!-- chart ends here-->
        
        
        
        
        
        
        

     </div>
      
      
      
     <!-- chart script --> 
      <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Company Profits of recent years"
	},
	axisY: {
		minimum: 20,
		maximum: 100,
		suffix: "k"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.00\"k\"",
		indexLabel: "{y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
 
function updateChart() {
	var color,deltaY, yVal;
	var dps = chart.options.data[0].dataPoints;
	for (var i = 0; i < dps.length; i++) {
		deltaY = (2 + Math.random() * (-2 - 2));
		yVal =  Math.min(Math.max(deltaY + dps[i].y, 0), 90);
		color = yVal > 75 ? "#41CF35" : yVal >= 50 ? "#FF6000" : yVal < 50 ? "#FF2500" : null;
		dps[i] = {label: "year "+(i+2011) , y: yVal, color: color};
	}
	chart.options.data[0].dataPoints = dps;
	chart.render();
};
updateChart();
 
setInterval(function () { updateChart() }, 1000);
 
}
</script>
      
      
      
      
      
      
        
        <script type="text/javascript" src="js/canvasjs.min.js"></script>
        
    
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    </body>
</html>