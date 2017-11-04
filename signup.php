<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

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
                                      <li><a href="admin.php">Admin log in </a></li>
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
<?php

   if(isset($_POST['submit'])) {
 

 $user_title = $_POST['personTitle'];
  $user_first_name = $_POST['inputFname1'];
     $user_last_name = $_POST['inputLnam'];
      $user_email = $_POST['input_email'];
            $user_password = $_POST['inputPassword1'];
               $user_b_day = $_POST['b_day'];
                   $user_b_month = $_POST['b_month'];
            $user_b_year = $_POST['b_year'];
             $user_city = $_POST['city'];
               $user_state = $_POST['state'];
                  $user_postcode = $_POST['postcode'];
                    $user_country = $_POST['country'];
                        $user_extra_info = $_POST['aditionalInfo'];
                          $user_mobile = $_POST['mobile'];

                             



           $con =mysqli_connect("localhost","root","user123");
              mysqli_select_db($con,"project_database");

if(!$con)
{
die('Could not connected to database server. Please try after some time!: ' .mysqli_error());
}
else
{

}

                  $sql1 = "INSERT INTO user_table ( user_title, user_first_name, user_last_name, user_email, user_password, user_b_day, user_b_month, user_b_year, user_city, user_state, user_post_code, user_country, user_extra_info, user_mobile )  VALUES  ( '$user_title' , '$user_first_name' , ' $user_last_name' , '$user_email', '$user_password ' , '$user_b_day' , '$user_b_month' , '$user_b_year' , '$user_city' , '$user_state' , '$user_postcode', '$user_country ', '$user_extra_info' , ' $user_mobile' ) ";


            $retval = mysqli_query($con,$sql1 );
         
            if(! $retval ) {
               die('Sign up failed. Please try again. Error : ' . mysqli_error());
            }
            else{
         
            echo "<h2>Registration Successful!</h2>";
              echo "<p>Your user name is $user_first_name  $user_last_name</p>";
               echo "<p>Your user user id is $user_email</p>";
                 echo "<p>Thank you for sign up. Click <a href='mypage.php'>here </a>to log in </p><br>";
                }

}

mysqli_close($con);

?>
     
              


    

               
                    <!-- Featured ends here -->
                    <!-- Featured accordion starts here -->
                    <section id="mainBody">
<div class="container">
<h3 class="title"><span>Registration</span></h3>
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
        <li class="active">Registration</li>
    </ul>
    <div class="well">
    
    <form class="form-horizontal"  method = "post" action = "" >
        <h3>Your personal information</h3>
        <div class="control-group">
        <label class="control-label">Title <sup>*</sup></label>
        <div class="controls">
        <select class="span1" name="personTitle" >
            <option value="">-</option>
            <option value="Mr">Mr.</option>
            <option value="Mrs">Mrs</option>
            <option value="Miss">Miss</option>
        </select>
        </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputFname1">First name <sup>*</sup></label>
            <div class="controls">
              <input type="text" name="inputFname1" placeholder="First Name">
            </div>
         </div>
         <div class="control-group">
            <label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
            <div class="controls">
              <input type="text" name="inputLnam" placeholder="Last Name">
            </div>
         </div>
        <div class="control-group">
        <label class="control-label" for="input_email">Email <sup>*</sup></label>
        <div class="controls">
          <input type="text" name="input_email" placeholder="Email">
        </div>
      </div>      
    <div class="control-group">
        <label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
        <div class="controls">
          <input type="password" name="inputPassword1" placeholder="Password">
        </div>
      </div>   
   
        <div class="control-group">
        <label class="control-label">Date of Birth <sup>*</sup></label>
        <div class="controls">
          <input type="number" class="span1" " name="b_day" placeholder="DD" min="1" max="31"> 
<input type="number" class="span1" name="b_month" placeholder="MM" min="1" max="12"> 
<input type="number" class="span1"  name="b_year" placeholder="YYYY" min="1900" max="2017"> 
        </div>
      </div>

            

        <h3>Your address</h3>
        
        <div class="control-group">
            <label class="control-label" for="city">City<sup>*</sup></label>
            <div class="controls">
              <input type="text" name="city" placeholder="city"> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="state">State<sup>*</sup></label>
            <div class="controls">
              <select name="state">
                <option value="">-</option>
                <option value="punjab">Punjab</option><option value="uttar pardesh">Uttar Pardesh</option>></select>
            </div>
        </div>      
        <div class="control-group">
            <label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
            <div class="controls">
              <input type="number" name="postcode" placeholder="Zip / Postal Code"> 
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="country">Country<sup>*</sup></label>
            <div class="controls">
            <select name="country">
                <option value="">-</option>
                <option value="India">India</option>
            </select>
            </div>
        </div>  
        <div class="control-group">
            <label class="control-label" for="aditionalInfo">Additional information</label>
            <div class="controls">
              <textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3" placeholder="Brief introduction"></textarea>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="mobile">Mobile Phone </label>
            <div class="controls">
              <input type="number" name="mobile" id="mobile" placeholder="Mobile Phone"> 
            </div>
        </div>
        
    
    <div class="control-group">
            <div class="controls">
                <input type="hidden" name="email_create" value="1">
                <input type="hidden" name="is_new_customer" value="1">
                <input class="btn btn-large" type="submit" name="submit" value="Register">
                <input class="btn btn-large" type="reset" name="cancel" value="Cancel">
            </div>
        </div>      
    <p class="pull-right badge badge-important">[ * ] Required field    </p>
    <br>
    <br>
    <br>
    </form>
</div>

</div>

</section>

               

                    <!-- Featured accordion ends here -->

                <!-- Main content ends here -->

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
                    Copyright (c) www.ieeeworld.com. All rights reserved. </a>
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
