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

                             </div>
  
              


    

               
                    <!-- Featured ends here -->
                    <!-- Featured accordion starts here -->
                    <section id="mainBody">
<div class="container">
<h3 class="title"><span>Upload page</span></h3>
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
        <li class="active">Upload</li>
    </ul><div class="container b-radius-top" style="padding-top:50px;height:20px;margin-right:200px;width:80%;">

 <?php 
        
    

   if(isset($_POST['submit'])) {
  

     $paper_title = $_POST['paper_title'];
     $paper_author = $_POST['author'];
     $paper_publication = $_POST['publication'];
      $paper_subject = $_POST['subject'];
      $paper_volume = $_POST['volume'];
      $paper_info = $_POST['paperInfo'];
      $paper_p_day = $_POST['p_day'];
      $paper_p_month = $_POST['p_month'];
      $paper_p_year = $_POST['p_year'];

    
       $file = rand(1000,100000)."-".$_FILES['file']['name'];
       $file_test = $_FILES['file'];
          
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="upload/";
 
          // new file size in KB
         $new_size = $file_size/1024;  
          // new file size in KB
 
          // make file name in lower case
         $new_file_name = strtolower($file);
          // make file name in lower case
 
         $final_file=str_replace(' ','-',$new_file_name);
 
          $isUpload=move_uploaded_file($file_loc,$folder.$final_file);

     
          if($isUpload==1)
          {
    
              $sql = "INSERT INTO paper_table (paper_title,paper_author, paper_publication,
               paper_subject,paper_volume, paper_info,                     paper_p_day,paper_p_month,paper_p_year,paper_file,paper_type,paper_size)
                  VALUES ('$paper_title','$paper_author', '$paper_publication', '$paper_subject','$paper_volume',   '$paper_info', '$paper_p_day','$paper_p_month','$paper_p_year', '$final_file','$file_type','$new_size' ) ";


        $con =mysqli_connect("localhost","root","user123");
        mysqli_select_db($con,"project_database");

         if(!$con)
         {
            die('Could not connect: ' .mysqli_error());
         }
  
     
  
            $retval = mysqli_query($con, $sql);
         
            if(! $retval ) {
               die('Failed to upload paper. Please try after some time. Error code: ' . mysqli_error());
            }
            else{
         
            echo "File uploaded sucessfully. 
            Click <a href='browse.php?paperId=$paper_title'>here to view your paper</a>\n";
                }

              mysqli_close($con);
     }
     else{
             echo "<br>File not uploaded !";

      }
          
}
         
?>
</div>
                        

    <div class="well">
    
    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" >
        
            

        <h3>Research Paper Details</h3>
        
        <div class="control-group">
            <label class="control-label" for="city">Title<sup>*</sup></label>
            <div class="controls">
              <input type="text" name="paper_title" placeholder="title" required /> 
            </div>
        </div>

         <div class="control-group">
            <label class="control-label" for="city">Author<sup>*</sup></label>
            <div class="controls">
              <input type="text" name="author" placeholder="author" required /> 
            </div>
        </div>
     
        <div class="control-group">
            <label class="control-label" for="city">Publication<sup>*</sup></label>
            <div class="controls">
              <input type="text" name="publication" placeholder="publication" required /> 
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="state">Subject<sup>*</sup></label>
            <div class="controls">
              <select name="subject" required />
                <option value="">-</option>
                
                
                       <option value="Big Data">Big Data</option>
                    <option value="Cloud Computing">Cloud Computing</option>
                   <option value="Data Mining">Data Mining</option>
                    <option value="Internet of Things">Internet of Things</option>
                      <option value="Security">Security</option>
                      <option value="Wireless Networks">Wireless Networks</option>
               </select>
            </div>
        </div>      
        <div class="control-group">
            <label class="control-label" for="postcode">Volume<sup>*</sup></label>
            <div class="controls">
              <input type="number" name="volume" placeholder="Volume" required /> 
            </div>
        </div>
        
       
        <div class="control-group">
            <label class="control-label" for="aditionalInfo">Brief introduction</label>
            <div class="controls">
              <textarea name="paperInfo"  cols="26" rows="3" placeholder="Additional information" required /></textarea>
            </div>
        </div>
         <div class="control-group">
        <label class="control-label">Publication Date <sup>*</sup></label>
        <div class="controls">
          <input type="number" class="span1" " name="p_day" placeholder="DD" min="1" max="31" required /> 
<input type="number" class="span1" name="p_month" placeholder="MM" min="1" max="12" required /> 
<input type="number" class="span1"  name="p_year" placeholder="YYYY" min="1900" max="2017" required /> 
        </div>
      </div>
          
    <input type="file" name="file" required/>
        
    
    <div class="control-group">
            <div class="controls">
                
                <input class="btn btn-large" name="submit" type="submit" value="Upload">
                <input class="btn btn-large" name="reset"type="reset" value="Cancel">
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
