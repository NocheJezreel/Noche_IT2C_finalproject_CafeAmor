<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Cafe' Amor Website</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <?php
      $xml = simplexml_load_file('Noche_IT2C_CafeAmor/index.xml');
      ?>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><?php echo '<img src="images/coffload.gif" alt="#"/>'; ?></div>
      </div>
      <!-- end loader -->
         <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-1 col-lg-3 col-sm-2 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.php"><?php echo $xml->navbar->title; ?></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="index.php"><?php echo $xml->navbar->home; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.php"><?php echo $xml->navbar->about; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="service.php"><?php echo $xml->navbar->service; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="blog.php"><?php echo $xml->navbar->blog; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php"><?php echo $xml->navbar->contact; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" style="background: transparent;" href="Javascript:void(0)"><i class="fa fa-search"></i></a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="col-md-4 re_no">
                  <ul class="infomaco">
                     <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $xml->navbar->call_us; ?></li>
                     <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $xml->navbar->email1; ?></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div> 
      <!-- end header inner -->
      <!-- end header -->
      <!-- top -->
      <div class="full_bg">
         <div class="slider_main">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <!-- carousel code -->
                     <div id="carouselExampleIndicators" class="carousel slide">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <!-- first slide -->
                           <div class="carousel-item active">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-5">
                                       <div class="jez_text">
                                          <h1 data-animation="animated bounceInLeft">
                                             <?php echo $xml->navbar->hi; ?><br>
                                             
                                          </h1>
                                          <p data-animation="animated bounceInLeft">
                                             <?php echo $xml->navbar->content; ?>
                                          </p>
                                          <button class="btn btn-primary  read_more bounceInLeft" data-animation="animated bounceInLeft"><?php echo $xml->navbar->button; ?></button>
                           
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="coff_img">
                                          <figure><?php echo '<img src="images/coff_img.png" alt="#"/>' ?></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- second slide -->
                           <div class="carousel-item">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-5">
                                       <div class="jez_text">
                                          <h1 data-animation="animated bounceInLeft">
                                             <?php echo $xml->navbar->ingredient; ?><br>
                                             
                                          </h1>
                                          <p data-animation="animated bounceInLeft">
                                              <?php echo $xml->navbar->content2; ?>
                                          </p>
                                          <button class="btn btn-primary  read_more bounceInLeft" data-animation="animated bounceInLeft"><?php echo $xml->navbar->button1; ?></button>
                                          <button class="btn btn-primary  read_more bounceInLeft" data-animation="animated bounceInLeft"><?php echo $xml->navbar->button2; ?></button>
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="coff_img">
                                          <figure><?php echo '<img src="images/coff2.png" alt="#"/>' ?></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- third slide-->
                           <div class="carousel-item">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-5">
                                       <div class="jez_text">
                                          <h1 data-animation="animated bounceInLeft">
                                             <?php echo $xml->navbar->title1; ?><br>
                                             
                                          </h1>
                                          <p data-animation="animated bounceInLeft">
                                             <?php echo $xml->navbar->content3; ?> 
                                          </p>
                                          <button class="btn btn-primary  read_more bounceInLeft" data-animation="animated bounceInLeft"><?php echo $xml->navbar->button3; ?> </button>
                                       
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="coff_img">
                                          <figure><?php echo '<img src="images/coff3.png" alt="#"/>' ?></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only"><?php echo $xml->navbar->span; ?></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only"><?php echo $xml->navbar->span1; ?></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- service -->
      <div class="service">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2><?php echo $xml->navbar->service1; ?></h2>
                     <p><?php echo $xml->navbar->content4; ?> 
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="service_box text_align_center">
                           <div class="ser_img">
                              <figure><?php echo '<img src="images/ser_img1.png" alt="#"/>' ?></figure>
                           </div>
                           <h3><?php echo $xml->navbar->product; ?> </h3>
                           <p><?php echo $xml->navbar->description; ?> 
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service_box text_align_center">
                           <div class="ser_img">
                              <figure><?php echo '<img src="images/ser_img3.png" alt="#"/>' ?></figure>
                           </div>
                           <h3><?php echo $xml->navbar->product1; ?> </h3>
                           <p><?php echo $xml->navbar->description1; ?> 
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="service_box text_align_center">
                           <div class="ser_img">
                              <figure><?php echo '<img src="images/ser_img2.png" alt="#"/>' ?></figure>
                           </div>
                           <h3><?php echo $xml->navbar->product2; ?></h3>
                           <p><?php echo $xml->navbar->description2; ?> 
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="service.php"><?php echo $xml->navbar->button4; ?></a>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- section blue_bg -->
      <div class="section blue_bg">
         <div class="container-fluid">
            <div class="row">
               <!-- contact -->
               <div class="col-lg-6 col-md-12">
                  <div class="contact">
                     <div class="row ">
                        <div class="col-md-12">
                           <div class="titlepage text_align_center">
                              <h2><?php echo $xml->navbar->register; ?></h2>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <form id="request" class="main_form">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="<?php echo $xml->navbar->input_name; ?>" type="type" name=" Name"> 
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="<?php echo $xml->navbar->input_number; ?>" type="type" name="Phone Number">                          
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="<?php echo $xml->navbar->input_email
                                    ; ?>" type="type" name="Email">                          
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="<?php echo $xml->navbar->input_message; ?>" type="type" Message="Name"></textarea>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="send_btn"><?php echo $xml->navbar->button5; ?></button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- contact -->
               <!-- testimonial section -->
               <div class="col-lg-6 col-md-12">
                  <div class="testimonial">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="titlepage text_align_left">
                              <h2><?php echo $xml->navbar->review; ?></h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                              <ol class="carousel-indicators">
                                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                 <li data-target="#myCarousel" data-slide-to="1"></li>
                                 <li data-target="#myCarousel" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                 <div class="carousel-item active">
                                    <div class="container">
                                       <div class="carousel-caption ">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="testimonial_box text_align_left">
                                                   <p><?php echo $xml->navbar->feedback; ?></p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="testimonial_pro">
                                                   <figure><?php echo '<img src="images/jez.jpg" alt="#"/>' ?></figure>
                                                   <h3 href="https://web.facebook.com/profile.php?id=100091593908764"><?php echo $xml->navbar->user; ?><br><span class="cust"><?php echo $xml->navbar->label; ?></span></h3>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="carousel-item">
                                    <div class="container">
                                       <div class="carousel-caption">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="testimonial_box text_align_left">
                                                   <p><?php echo $xml->navbar->feedback1; ?> </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="testimonial_pro">
                                                   <figure><?php echo '<img src="images/ren.jpg" alt="#"/>' ?></figure>
                                                   <h3><?php echo $xml->navbar->user1; ?> <br><span class="cust"><?php echo $xml->navbar->label; ?></span></h3>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="carousel-item">
                                    <div class="container">
                                       <div class="carousel-caption">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="testimonial_box text_align_left">
                                                   <p><?php echo $xml->navbar->feedback2; ?></p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="testimonial_pro">
                                                   <figure><?php echo '<img src="images/bert1.jpg" alt="#"/>' ?></figure>
                                                   <h3><?php echo $xml->navbar->user2; ?><br><span class="cust"><?php echo $xml->navbar->label; ?></span></h3>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                              <i class="fa fa-angle-left" aria-hidden="true"></i>
                              <span class="sr-only"><?php echo $xml->navbar->span; ?></span>
                              </a>
                              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                              <span class="sr-only"><?php echo $xml->navbar->span1; ?></span>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="coff">
                              <figure><?php echo '<img src="images/coff.png" alt="#"/>' ?></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end testimonial section -->
            </div>
         </div>
      </div>
      <!-- end section blue_bg -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <a class="logo_bottom" href="index.php"><?php echo $xml->navbar->title; ?></a>
                  </div>
                  <div class="col-md-12">
                     <form class="form_subscri">
                        <div class="row">
                           <div class="col-md-12">
                              <input class="subsrib" placeholder="Enter your email" type="text" name="Enter your email">
                           </div>
                           <div class="col-md-12">
                              <button class="subsci_btn"><?php echo $xml->navbar->button6; ?></button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-9 col-md-8">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="infoma text_align_left">
                              <h3><?php echo $xml->navbar->menu; ?></h3>
                              <ul class="menu_bottom">
                                 <li><a href="index.php"><?php echo $xml->navbar->home; ?></a></li>
                                 <li><a href="about.php"><?php echo $xml->navbar->about; ?></a></li>
                                 <li><a href="service.php"><?php echo $xml->navbar->coffservice; ?></a></li>
                                 <li><a href="testimonial.php"><?php echo $xml->navbar->testimonial; ?></a></li>
                                 <li><a href="blog.php"><?php echo $xml->navbar->blog; ?></a></li>
                                 <li><a href="contact.php"><?php echo $xml->navbar->contact; ?></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="infoma text_align_left">
                              <h3><?php echo $xml->navbar->coffee; ?></h3>
                              <ul class="menu_bottom">
                                 <li><a href="blackcoffee.php"><?php echo $xml->navbar->product1; ?></a></li>
                                 <li><a href="redcoffee.php"><?php echo $xml->navbar->product; ?></a></li>
                                 <li><a href="coffeeservice.php"><?php echo $xml->navbar->coffservice; ?></a></li>
                                 <li><a href="greentea.php"><?php echo $xml->navbar->product3; ?></a></li>
                                 <li><a href="chocolatecoffee.php"><?php echo $xml->navbar->product2; ?></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4">
                     <div class="infoma">
                        <h3><?php echo $xml->navbar->follow; ?></h3>
                        <ul class="social_icon">
                           <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <ul class="conta">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $xml->navbar->follow; ?>
                           </li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $xml->navbar->call_us; ?></li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"><?php echo $xml->navbar->email1; ?></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p><?php echo $xml->navbar->footer; ?><a href="privacypolicy.php"> <?php echo $xml->navbar->footer1; ?></a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>