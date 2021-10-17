<?php
// Initialize the session

 
// Check if the user is logged in, if not then redirect him to login page
// !isset($_COOKIE["jwt"]) && !isset($_COOKIE["log"])
if(!isset($_COOKIE["resp"])){
    header("location: login.php");
    exit;
// echo ($_COOKIE["jwt"]);

}


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Blog Page </title>
      <!-- Favicon -->
      <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
      <!-- Bootstrap CSS -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Animate CSS -->
      <link href="assets/vendors/animate/animate.css" rel="stylesheet">
      <!-- I00con CSS-->
      <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
      <!-- Owlcarousel CSS-->
      <link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
      <!--Template Styles CSS-->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
   </head>
   <body>
    
      <div class="service-banner-img  ">
         <div class="ovrllay">
            <!-- Header_Area -->
            <nav class="navbar navbar-default header_aera affix-top">
               <div class="container m-s">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="col-md-4 p0">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-biss" href="landing.php"> Ishmael law firm </a>
                     </div>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="col-md-8 p0">
                     <div class="collapse navbar-collapse" id="min_navbar">
                        <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown submenu">
                              <a href="landing.php" class="">Home</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="about.html" class="">About Us</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="services.html" class=""> Our Services</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="blog.html" class="">Blog</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="contact.html" class="">Contact Us</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="" class="">Login</a>
                           </li>
                        </ul>
                     </div>                     <!-- /.navbar-collapse -->
                  </div>
               </div>
               <!-- /.container -->
            </nav>
            <!-- End Header_Area -->
            <!-- #banner start -->
            <section id="banner" class="py-70" >
               <div class="container ">
                 <div class="row py-70 ">
                     <!-- #banner-text start -->            
                     <div id="banner-text" class="col-md-12 text-c  ">
                        <div class="left-borders">
                  
                           <h5 class="wow fadeInUp main-about_h" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">BLOG AREAS</h5>
                           <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><span class="c_yellow"> BLOG AREAS
</span>  </p>
                        </div>
                      
                     </div>
                     <!-- /#banner-text End -->
                  </div>
                 
               </div>
            </section>
         </div>
      </div>
  
      <!-- /#banner end -->
      <!-- #blog Us Area start -->
     
    <section class="blog-area ptb-140 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="assets/images/blog/1.jpg" alt="">
                            </div>
                            <div class="blog-content wow fadeInUp">
                                
                                <h3><a href="blog-single.html">wonderful serenity has taken</a></h3>
                                <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
                                <a href="blog-single.html" class="btn btn-default btn_font_16">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp">
                        <div class="blog-wrap  mb-30">
                            <div class="blog-img">
                                <img src="assets/images/blog/2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                
                                <h3><a href="blog-single.html">of my entire soul</a></h3>
                                <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p> 
                                <a href="blog-single.html" class="btn btn-default btn_font_16">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp">
                        <div class="blog-wrap  mb-30">
                            <div class="blog-img">
                                <img src="assets/images/blog/3.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                
                                <h3><a href="blog-single.html">serenity has taken possession</a></h3>
                                <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
                                <a href="blog-single.html" class="btn btn-default btn_font_16">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-50 wow fadeInUp">
                        <div class="blog-wrap  mb-30">
                            <div class="blog-img">
                                <img src="assets/images/blog/4.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                                                <h3><a href="blog-single.html"> suffered have majority</a></h3>
                                <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
                                <a href="blog-single.html" class="btn btn-default btn_font_16">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mt-50 wow fadeInUp">
                        <div class="blog-wrap  mb-30">
                            <div class="blog-img">
                                <img src="assets/images/blog/5.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                
                                <h3><a href="blog-single.html">majority have suffered</a></h3>
                                <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
                                <a href="blog-single.html" class="btn btn-default btn_font_16">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mt-50 wow fadeInUp">
                        <div class="blog-wrap  mb-30">
                            <div class="blog-img">
                                <img src="assets/images/blog/6.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                
                                <h3><a href="blog-single.html">majority have suffered</a></h3>
                                <p>wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
                                <a href="blog-single.html" class="btn btn-default btn_font_16">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="pagination-wrap mt-50 wow fadeInUp">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



  <!-- #End blog Us Area  -->




   <!-- #partners Us Area start -->
    
      
      <!--#start Our footer Area -->
       <div class="our_footer_area">
         <div class="book_now_aera ">
            <div class="container wow fadeInUp">
               <div class="row book_now">
                  <div class="col-md-4">
                     <div class="">
                        <a class=" logo-biss" href="index.html"> Ishmael Law Firm</a>
                     </div>
                     <p class="footer-h">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. </p>
                     <div class="bigpixi-footer-social">
                        <a href="" target="_blank"><i id="social-fb" class="fa fa-facebook fa-2x social"></i></a>
                        <a href="" target="_blank"><i id="social-tw" class="fa fa-twitter fa-2x social"></i></a>
                        <a href="" target="_blank"><i id="social-em" class="fa fa-instagram fa-2x social"></i></a>
                     </div>
                  </div>
                  <div class="col-md-1 ">
                  </div>
                  <div class="col-md-3">
                     <h2 class="footer-top">QUICK LINKS </h2>
                     <ul class="footer-menu">
                        <li><a href=""> HOME        </a></li>
                        <li><a href="">THE FIRM  </a> </li>
                        <li><a href="">PRACTICE AREAS    </a> </li>
                        <li><a href="">   NEWS & RESOURCES   </a> </li>
                        <li><a href="">  CONTACT  </a> </li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <ul class="location">
                        <h2 class="footer-top">Contact Info </h2>
                        <li class="footer-left-h">P.O BOX 28001-00100 </li>
                        <li class="footer-left-h"><span class="c_yellow">Email :</span>
                           <a href=""> ishmaellaw@demo.com </a>
                        </li>
                        <li class="footer-left-h"><span class="c_yellow">Call Us: </span>+1- 982-8-587 452
                        </li>
                     </ul>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <!--#End Our footer Area -->
      <!-- jQuery JS -->
      <script src="assets/js/jquery-1.12.0.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="assets/js/bootstrap.min.js"></script>
      
      <!-- Animate JS -->
      <script src="assets/vendors/animate/wow.min.js"></script>
      <!-- Owlcarousel JS -->
      <script src="assets/vendors/owl_carousel/owl.carousel.min.js"></script>
      <!-- Theme JS -->
      <script src="assets/js/theme.min.js"></script>
   </body>
</html>