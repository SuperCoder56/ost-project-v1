<!DOCTYPE html>
<html class="no-js"> 
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

              
<div class="banner text-center" style="margin-bottom:10px;border:2px solid #95bcf9;">
        <ul id="topMenu" class="nav text-center ">
         <li class="">
         <form class="form-inline navbar-search" method="post" action="" style="padding-top:16px;margin-left: 240px;">
            <select class="span2" name="searchKey" style="padding:11px 4px; height:auto">
                <option value="all">All</option>
                <option value="title">Title</option>
                  <option value="author">Author</option>
                 <option value="subject">Subject</option>
                
                <option value="publication">Publication </option>
               
            </select> 
            <input class="span4" name="searchData"type="text" placeholder="eg. enter any keywords, author name and publication" style="padding:16px 16px;">
            <button type="submit" name="submit" class="btn btn-warning btn-large" style="margin-top:0">Search </button>
        </form>
        </li>
        </ul>
    </div>

 <div class="container b-radius-top" style="padding-top:0px;height:600px;margin-right:800px;width:80%;clear:both;">

    <?php

       if(isset($_POST['submit']) or !empty( $_GET['paperId'] ) 
       or !empty( $_GET['paper_request_key'] ) or !empty( $_GET    ['paper_request_data'] ))
        {
            $searchKey = $_POST['searchKey'];
            $searchData = $_POST['searchData'];
           if(!empty($searchData))
         {
             echo "<br>Search key: ".$searchKey. "";
             echo "<br>Search Data: ".$searchData. "";
           }    
      
       if(empty($searchData) and empty( $_GET['paper_request_key'] ))
       {
            echo "\n<br><p>Please enter data to search!</p>";
       }
           
       $con =mysqli_connect("localhost","root","user123");
       mysqli_select_db($con,"project_database");
    
       if(!$con)
        {
       die('Could not connect to database server. Please try after some time! ' .mysqli_error());
       }
                     
         $query = " ";

       if( $searchKey =="author"){
          $query = mysqli_query($con,"SELECT *  FROM paper_table where paper_author = '$searchData' ") ;     
        }
        if( $searchKey =="all"){
          $query = mysqli_query($con,"SELECT *  FROM paper_table") ;     
        }
        if( $searchKey =="publication"){
          $query = mysqli_query($con,"SELECT *  FROM paper_table where paper_publication = '$searchData' ") ;
        }
        if( $searchKey =="title"){
          $query = mysqli_query($con,"SELECT *  FROM paper_table where paper_title = '$searchData' ") ;               
        } 
        if( $searchKey =="subject"){
          $query = mysqli_query($con,"SELECT *  FROM paper_table where paper_subject = '$searchData' ") ;      
        }
        if(!empty($_GET['paperId'])){
            $searchIdExtrenal= $_GET['paperId'];
             echo "External Search request key: Title <br>Search request data: ".  $searchIdExtrenal;
            $query = mysqli_query($con,"SELECT *  FROM paper_table where paper_title = '$searchIdExtrenal'") ;      
        }

        if(!empty( $_GET['paper_request_key'] ) and !empty( $_GET['paper_request_data'] )){
            $paper_request_key_external= $_GET['paper_request_key'];
            $paper_request_data_external= $_GET['paper_request_data'];

           
        if(!empty( $_GET['paper_request_key'] ))
         {
             echo "<br>External Search key: ".  $paper_request_key_external."";
             echo "<br>External Search data: ".  $paper_request_data_external."";
         }
        
            if(!empty( $_GET['paper_request_key'] ) and !empty( $_GET['paper_request_data'] ))
              $query = mysqli_query($con, "SELECT *  FROM paper_table 
              where ". $paper_request_key_external." =  '$paper_request_data_external'");  
           
          }
          
        
         $count = mysqli_num_rows($query);
         if($count==0)
         {
          echo "<p>Data not found, try to change search keys and data.</p>";
          }
        
           while($a=mysqli_fetch_array($query))
           {
                 $color="fcfcfc";
                    
                 echo "<div style='float:left;background-color:$color;clear:both;margin-left:450px;'>
                 <h2>Title: ". $a['paper_title'] . "</h2>&nbsp;<h4>Author: " .$a['paper_author'] ."</h4>&nbsp;
                 <p>Publication: "  .$a['paper_publication'] ."&nbsp;Subject: " .$a['paper_subject'] 
                 . "&nbsp;Volume: " .$a['paper_volume']. "</p><p>Publieshed Date: " .$a['paper_p_month']."&nbsp;" 
                 .$a['paper_p_year'] . "</p>
                  <p>Abstract: " .$a['paper_info'] ."</p><p><a href=upload/" .$a['paper_file']. "
                  target='_blank'>Download</a>&nbsp;Size: " .$a['paper_size'] 
                  . "kb&nbsp; </p>";
        
                  echo "<br></div><br>";
              }

       mysqli_close($con);  
}

?> 
</div>  
               
                   
            <div class="container bg-blue b-radius-bottom" style="clear:both;">
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
