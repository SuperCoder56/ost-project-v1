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

                <!-- Banner starts here -->

                <div class="banner">
                    <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/banner-image.jpg" alt="">
                                <div class="carousel-caption">
                                    <i class="fw-icon-desktop"></i>
                                  <h1 style="padding: 28px 28px;">Legacy Algorithms Could Expedite Device-to-Device (D2D) Discovery in 5G Wireless Networks</h1>
                                  
                                  <a href="#myModal" role="button" class="btn" data-toggle="modal">Read more</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/banner-image.jpg" alt="">
                                <div class="carousel-caption">
                                    <i class="fw-icon-desktop"></i>
                                 
                                  <h1 style="padding: 28px 28px;" >Banking on Artificial Neural Networks for Flood Forecasting</h1>
                                  <a href="#myModal" role="button" class="btn" data-toggle="modal">Read more </a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/banner-image.jpg" alt="">
                                <div class="carousel-caption">
                                    <i class="fw-icon-desktop"></i>
                                  
                                  <h1 style="padding: 28px 28px;"  >GreenNet Promises “Greener” IoT with Energy-Saving Wireless Sensor Nodes</h1>
                                  <a href="#myModal" role="button" class="btn" data-toggle="modal">Read more</a>
                                </div>
                            </div>
                        </div>
                        <a data-slide="prev" href="#myCarousel" class="carousel-control left"><i class="fw-icon-chevron-left"></i></a>
                        <a data-slide="next" href="#myCarousel" class="carousel-control right"><i class="fw-icon-chevron-right"></i></a>
                    </div>
</div>



        
                 <!-- Banner ends here -->
              <div class="banner text-center" style="margin-bottom: 90px;border:2px solid  #95bcf9;">
        <ul id="topMenu" class="nav text-center ">
         <li class="">
         <form class="form-inline navbar-search" method="post" action="" style="padding-top:16px;margin-left: 240px;">
            <select class="span2" name="searchKey" style="padding:11px 4px; height:auto">
                <option value="*">All</option>
                <option value="paper_title">Title</option>
                  <option value="paper_author">Author</option>
                 <option value="paper_subject">Subject</option>
                
                <option value="paper_publication">Publication </option>
               
            </select> 
            <input class="span4" name="searchData"type="text" placeholder="eg. enter any keywords, author name and publication" style="padding:11px 4px;">
            <button type="submit" name="submit" class="btn btn-warning btn-large" style="margin-top:0">Search </button>
        </form>
        </li>
        </ul>
<?php

if(isset($_POST['submit'])){

  
 $searchKey = $_POST['searchKey'];
       $searchData = $_POST['searchData'];

if(!empty($searchData) and  $searchKey!="all"){
                echo "Going to show results on paper search page.";
     echo "<script>
       window.location.href = 'browse.php?paper_request_key=$searchKey&paper_request_data=$searchData'; 
    
</script>";

  }
else if (empty($searchData))
{
     echo "\n<br><p>Please enter data to search!</p>";
}else          
  {          
           echo "<script>
       window.location.href = 'browse.php?paper_request_key=paper_author&paper_request_data=jaswinder'; 
    
</script>";
  }


}
?>


    </div>

                 <!-- Main content starts here -->
                
                <div class="featured-blocks">
                    <div class="row-fluid">
                    <div class="featured-heading">
                        <h1>Recent Published</h1>
                        <h5>May-November 2017</h5>
                    </div>
                    </div>
                    <div class="row-fluid">
                        
                            
                                <div class="span4">
                            <div class="block">
                                <div class="block-title">
                                    <h1> <a href="#"  >
Distributed Optimal On-line Task Allocation Algorithm for Wireless Sensor </a></h1>
                                    <h2>Wanli Yu; Yanqiu Huang; Alberto Garcia-Ortiz
IEEE Sensors Journal</h2>
                                </div>
                                <div class="block-content">
                                    <p>Nov. 2017</p>
                                    <a href="#"  class="btn" ><i class="fw-icon-circle-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                            
                            
                                <div class="span4">
                            <div class="block">
                                <div class="block-title">
                                    <h1>  <a href="#"  >
Heterogeneous Public Safety Network Architecture based on RAN slicing</a></h1>
                                    <h2>Dania Marabissi; Romano Fantacci</h2>
                                </div>
                                <div class="block-content">
                                    <p>May1, 1 2017</p>
                                    <a href="#"  class="btn" ><i class="fw-icon-circle-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                            
                            
                                <div class="span4">
                            <div class="block">
                                <div class="block-title">
                                    <h1> <a href="#"  >
Strong Coordination over Multi-hop Line Networks Using Channel Resolvability Codebooks</a></h1>
                                    <h2>Badri N. Vellambi; Joerg Kliewer; Matthieu Bloch</h2>
                                </div>
                                <div class="block-content">
                                    <p>Sept. 2017</p>
                                    <a href="#"  class="btn" ><i class="fw-icon-circle-arrow-right"></i>Read more</a>
                                </div>
                            </div>
                        </div>
                         <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <h2>Pellen tesque lacinia</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis sed mauris a accumsan. Phasellus quis scelerisque lacus. Aenean nec orci sit amet justo interdum ullamcorper eget eu diam. Integer dictum sem eu adipiscing cursus. Suspendisse posuere dui eu dignissim fermentum. .</p>
                      <p>Phasellus adipiscing porttitor metus, eget commodo mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit ante. Phasellus viverra ligula tortor, ut sodales elit tempus eu. Vestibulum mattis sed purus at laoreet. Proin mattis, ante vel adipiscing porttitor, orci elit venenatis nibh, at molestie tortor dolor sit amet urna.  .</p>
                    </div>   
                        
                        
                        
                        
                    </div>
                </div>
                

                 


                    <!-- Featured content starts here -->

                    <div class="featured-content">
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="block">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="block-title">
                                                <h1 align="center;">Popular search papers</h1>
                                               <?php 
     
       $con =mysqli_connect("localhost","root","user123");
       mysqli_select_db($con,"project_database");

       if(!$con)
        {
       die('Could not connect to database server. Please try after some time! ' .mysqli_error());
       }
        
       $query = mysqli_query($con,"SELECT *  FROM paper_table limit 10") ;    
                $count=1;
        
              while($a=mysqli_fetch_array($query))
              {
                    $index_paper_title=$a['paper_title'];

               echo "<h5><a href='browse.php?paper_request_key=paper_title&paper_request_data=$index_paper_title'>" . $count++ ." " .$index_paper_title. "</a></h5>";
              }
              
  mysqli_close($con);  


?>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="block-content">
                                                <p>Ranked by number of searches per month</p>
                                                <a href="browse.php"  class="btn" ><i class="fw-icon-circle-arrow-right"></i>View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ruler"></div>
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="block-title">
                                               <h1>Popuular Authors</h1>
                                                 <?php 
     
       $con =mysqli_connect("localhost","root","user123");
       mysqli_select_db($con,"project_database");

       if(!$con)
        {
       die('Could not connect to database server. Please try after some time! ' .mysqli_error());
       }
        
       $query = mysqli_query($con,"SELECT *  FROM paper_table limit 10") ;    
                $count=1;
        
              while($a=mysqli_fetch_array($query))
              {
                    $index_paper_author=$a['paper_author'];

               echo "<h5><a href='browse.php?paper_request_key=paper_author&paper_request_data=$index_paper_author'>" . $count++ ." " .$index_paper_author. "</a></h5>";
              }
              
  mysqli_close($con);  


?>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="block-content">
                                                <p>Ranked by number of downloads per month</p>
                                                <a href="browse.php"  class="btn" ><i class="fw-icon-circle-arrow-right"></i>View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">


 
                               <div class="featured-accordion">
              <div class="accordion" id="accordion2">
                <div class="accordion-group accordion-caret">
                  <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      #1 paper
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                                                <img src="img/img5.jpg" alt="">
                                                <h1>Lorem ipsum dolor sit amet</h1>
                                                <p class="last">consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi Sed egestas, ante et vulputate volutpat is, gravida id</p>
                                            </div>
                  </div>
                </div>
                <div class="accordion-group accordion-caret">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    #2 paper
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body in collapse" style="height: auto;">
                    <div class="accordion-inner">
                                                <img src="img/img5.jpg" alt="">
                                                <h1>Lorem ipsum dolor sit amet</h1>
                                                <p class="last">consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi Sed egestas, ante et vulputate volutpat is, gravida id</p>
                                            </div>
                  </div>
                </div>
                <div class="accordion-group accordion-caret">
                  <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> 
                   #3 paper
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                                                <img src="img/img5.jpg" alt="">
                                                <h1>Lorem ipsum dolor sit amet</h1>
                                                <p class="last">consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi Sed egestas, ante et vulputate volutpat is, gravida id</p>
                                            </div>
                  </div>
                </div>
                <div class="accordion-group accordion-caret">
                  <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                   #4 paper
                    </a>
                  </div>
                  <div id="collapseFour" class="accordion-body collapse">
                    <div class="accordion-inner">
                                                <img src="img/img5.jpg" alt="">
                                                <h1>Lorem ipsum dolor sit amet</h1>
                                                <p class="last">consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi Sed egestas, ante et vulputate volutpat is, gravida id</p>
                                            </div>
                  </div>
                </div>
              </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!-- Featured ends here -->
                    <!-- Featured accordion starts here -->
                    

                    <!-- Featured accordion ends here -->

                <!-- Main content ends here -->

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
                    Copyright (c) www.ieeeworld.com. All rights reserved.
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
