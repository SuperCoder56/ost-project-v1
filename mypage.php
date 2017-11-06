<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        
        
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
       
        <!-- Site header starts here -->

            


             <!-- main content starts here -->

            <div class="container b-radius-top">
                <div class="top-bar b-radius">
                    <div class="top-content">
                        <ul>
                            <li><a href="#"><i class="fw-icon-link icon"></i>www.ieeworld.com</a></li>
                            <li><a href="#"><i class="fw-icon-envelope-alt icon"></i>info@ieeeworld.com</a></li>
                            <li><a href="#"><i class="fw-icon-phone icon"></i>8888 88888</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fw-icon-facebook icon"></i></a></li>
                            <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fw-icon-linkedin icon"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="site-header">


                     <!-- Site Name starts here -->

                    <div class="site-name">
                        <h1>Ieee World</h1>
                        <h5>Free wireless networks research papers</h5>

                    </div>
                                     </div>


                    <!-- Site Name ends -->

                     <!-- Menu starts here -->
                     <div class="menu">
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                               <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="browse.php">Browse</a></li>
                                    <li><a href="mypage.php">My papers</a></li>
                                    <li><a href="upload.php">Upload</a></li>
                                    <li><a href="signup.php">Sign up</a></li>
                                     <li><a href="login.php">Log in </a></li>
                                     
                                </ul>
                                <form class="search-form">
                                    <div class="input-append ">
                                        <input type="text" class="search-query input-large" placeholder="Enter any keywords">
                                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Menu ends -->
                </div>

              
<div class="container b-radius-top" style="padding-top:50px;height:600px;">
              
<?php
      $ID;
      if(!empty($_GET['id'])) {
      $ID=$_GET['id']; 
      
       $con =mysqli_connect("localhost","root","user123");
       mysqli_select_db($con,"project_database");

       if(!$con)
        {
       die('Could not connect: ' .mysqli_error());
       }
       
       $query = mysqli_query($con,"SELECT *  FROM user_table where user_email = '$ID' ") ;

              $user_title;
              $user_first_name ;
              $user_last_name ;
              $user_email;
              $user_password;
              $user_b_day;
              $user_b_month ;
              $user_b_year ;
              $user_city ;
              $user_state ;
               $user_postcode;
               $user_country;
               $user_extra_info;
               $user_mobile;
             
              while($a=mysqli_fetch_array($query))
              {
               $user_title = $a['user_title'];
               $user_first_name = $a['user_first_name'];
               $user_last_name = $a['user_last_name'];
                $user_email = $a['user_email'];
                 $user_password = $a['user_password'];
                  $user_b_day = $a['user_b_day'];
                   $user_b_month =$a['user_b_month'];
                   $user_b_year = $a['user_b_year'];
                  $user_city =$a['user_city'];
                   $user_state = $a['user_state'];
                  $user_postcode = $a['user_postcode'];
                    $user_country = $a['user_country'];
                        $user_extra_info = $a['user_extra_info'];
                          $user_mobile = $a['user_mobile'];

            echo "<center><h2>Welcome $user_title $user_first_name $user_last_name </h1></center>";
             echo "<center><p style='padding-left:150px;'>log in as $user_email</p></center>";
             echo"<br>";
                
              echo "<div style='padding-left:180px;'>";
              echo "<h4>Your personal details :</h4>";
               echo "<p>Name: $user_first_name $user_last_name";
                echo "<p>Email: $user_email";
               echo "<p>D.O.B.: $user_b_day/$user_b_month/$user_b_year";
                echo"<br>";

                echo "<h4>Your address :</h4>";
               echo "<p>City: $user_city";
                echo "<p>State: $user_state";
                echo "<p>Country: $user_country";
                 echo "<p>Mobile: $user_mobile";
                echo"<br>";
              
               echo "<h4>About yourslef:</h4>";
               echo "<p>Brief introduction: $user_extra_info";

               echo "</div>";
            
              }

         

        $count = mysqli_num_rows($query);

	if( $count==1)
	{
		           
	}
	else
	{
           echo "<p>User data is not found.Click <a href='signuo.php'>here</a> to sign up for new account.<p>";
	}
    
    mysqli_close($con);
    }
    else{
              echo "<p>Please log in to view your saved pages.Click <a href='login.php'>here</a> to log in.<p>";
        }     
?>
  </div>               

            <div class="container bg-blue b-radius-bottom">
                <div class="site-footer">
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="user-info">
                                <i class="fw-icon-twitter"></i>
                                <h1><a href="#">Home</a></h1>
                               
                            </div>
                        </div>
                        <div class="span3">
                            <div class="user-info">
                                <i class="fw-icon-twitter"></i>
                                <h1><a href="#">Browse</a></h1>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="user-info">
                                <i class="fw-icon-twitter"></i>
                                <h1><a href="#">My Pages</a></h1>
                                
                            </div>
                        </div>
                        <div class="span3">
                            <div class="user-info">
                                <i class="fw-icon-twitter"></i>
                                <h1><a href="#">About</a></h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy-rights">
                    Copyright (c) www.ieeeworld.com. All rights reserved.</a>
                </div>

            </div>
                
       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>
        



   </body>
</html>
