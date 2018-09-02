<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloha IT </title>
    <!-- Bootstrap Link Part Start Here -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Bootstrap Link Part End Here -->
    <!-- Font-awesome Link Part Start Here -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <!-- Font-awesome Link Part End Here -->
    <!-- My customize css Link Part Start Here -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- My customize css Link Part End Here -->
    <!-- My responsive css Link Part End Here -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- My responsive css Link Part End Here -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <!-- My swaper css link start here-->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- my swaper css link ends here -->
    
      <link rel="stylesheet" href="css/responsive.css">
       <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- goole fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- google fonts ends here -->
    
    <link rel="stylesheet" href="css/jquery.fadeshow-0.1.1.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    
    <link rel='stylesheet' id='lightbox'  href='css/baguetteBox.css' type='text/css' media='all'>
</head>
    
    
    
    
    <body>
        
        
        
         <section id="our_team">
           
        <div class="container">
               
            <div class="col-sm-12">
              <h2> Our dedicated memebers</h2>
            
            </div>
            
            
          <div class="row">
              
              
              
              
               <?php
              
            require 'config.php';

            $statement="select * from member order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo ' <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="image/'.$row["ProfilePic"].'" alt="'.$row["Name"].'"/>

                    </div>
                    <div class="team-content">
                        <h3>'.$row["Name"].'</h3>
                        <span class="post"> '.$row["Position"].' </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
                        <li><a href="https://www.twitter.com" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.gmail.com" class="fa fa-google-plus"></a></li>
                        <li><a href="https://www.linkedin.com
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>';
                    
                }
			
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
           
<!--

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
            </div>
        
            
            
             <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://bootsnipp.com/img/avatars/552882bc08538da46b0a8ede8b106e3668c80a42.jpg" >

                    </div>
                    <div class="team-content">
                        <h3>Raj Kumar</h3>
                        <span class="post"> Web Designer </span>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
-->
            </div>
            
            
            
            
            
            
            
            
            
            </div>
        
        </section>
        
        
 <script type="text/javascript" src="js/swiper.jquery.min.js"></script> 
    <!-- Jquery Link Part Start Here -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Jquery Link Part End Here -->
    <!-- Javascript Link Part Start Here -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Javascript Link Part End Here -->
    <!-- sweaper js link part-->
      <script src="js/swiper.min.js"></script>
     <script type="text/javascript"  src="js/owl.carousel.js"></script>
    
<script type="text/javascript" src="js/swiper.jquery.min.js"></script> 
    
      <!-- isotope links -->
    
      <script type="text/javascript" src="js/isotope.min.js"></script>
    <script type="text/javascript" src="js/isotope.function.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.knob.min.js"></script>
        
        
        
        
        
    </body>
</html>
