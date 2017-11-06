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

       <div class="container b-radius-top" style="padding-top:2px;height:6px;margin-right:10px;width:80%;text-align:left;">
               <?php
                   if(isset($_POST['submit'])) {
   
                     $ID = $_POST['inputEmail'];
                      $Password = $_POST['inputPassword'];
                      $con =mysqli_connect("localhost","root","user123");
                       mysqli_select_db($con,"project_database");

                     if(!$con)
                     {
                     die('Could not connect: ' .mysqli_error());
                     }
                     
                     $query = mysqli_query($con,"SELECT *  FROM user_table where 
                      user_email = '$ID' and user_password = '$Password' ") ;
	             $row = mysqli_fetch_array($query);
                      echo "<br>";
      
                     while($a=mysqli_fetch_array($query))
                     {

                      echo $a['user_first_name'] . "&nbsp;" 
                     .$a['user_last_name'] ."&nbsp;"  .$a['user_city'] ."&nbsp;" .$a['user_email'] 
                      . "&nbsp;" .$a['user_password'];
                        echo "<br>";
                       }

                       $count = mysqli_num_rows($query);

	              if( $count==1)
	              {
		      echo "<h2>SUCCESSFULLY LOGIN. GOING TO USER PROFILE PAGE...</h2>";
                      echo "<script>setTimeout(function () {
                      window.location.href = 'mypage.php?id=$ID'; 
                      }, 4000); 
                       </script>";
                       }
	              else
	                {
		        echo "<p>SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...<p>";
	             }

                     mysqli_close($con);
}
?>
     </div>          


    <div  class="text-center" style="margin-top: 60px;">
  <div class="modal-header">
    
    <h3>Ieee world : Login </h3>
  </div>
  <div>
    <form class="form-horizontal loginFrm" method ="post" action ="">
      <div class="control-group">                               
        <input type="text" name="inputEmail" placeholder="Email">
      </div>
      <div class="control-group">
        <input type="password" name="inputPassword" placeholder="Password">
      </div>
      
  
    <button type="submit" name="submit"  class="btn btn-success">Log in</button>
    <button class="btn" >Close</button>

  </form>     
  </div>
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
