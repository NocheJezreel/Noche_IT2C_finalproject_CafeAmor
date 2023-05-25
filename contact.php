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
      <title>Cafe' Amor Contact</title>
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
   <body class="main-layout inner_page">
       <?php
      $xml = simplexml_load_file('Noche_IT2C_CafeAmor/contact.xml');
      ?>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><?php echo '<img src="images/coffload.gif" alt="#"/>'; ?></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-1 col-lg-3 col-sm-2 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.php"><?php echo $xml->content->title; ?></a>
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
                           <li class="nav-item">
                              <a class="nav-link" href="index.php"><?php echo $xml->content->home; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.php"><?php echo $xml->content->about; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="service.php"><?php echo $xml->content->service; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="testimonial.php"><?php echo $xml->content->reviews; ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="blog.php"><?php echo $xml->content->blog; ?></a>
                           </li>
                           <li class="nav-item active">
                              <a class="nav-link" href="contact.php"><?php echo $xml->content->contact; ?></a>
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
                     <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $xml->content->message; ?></li>
                     <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $xml->content->email_us; ?></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- section blue_bg -->
      <div class="section blue_bg">
         <div class="container-fluid">
            <div class="row">
               <!-- contact -->
               <div class="col-md-6 offset-md-3">
                  <div class="contact">
                     <div class="row ">
                        <div class="col-md-12">
                           <div class="titlepage text_align_center">
                              <h2><?php echo $xml->content->contact; ?></h2>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <form id="request" class="main_form">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="<?php echo $xml->content->input_name; ?>" type="type" name=" Name"> 
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="<?php echo $xml->content->input_number; ?>" type="type" name="Phone Number">                          
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="<?php echo $xml->content->input_email; ?>" type="type" name="Email">                          
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="<?php echo $xml->content->input_message; ?>" type="type" Message="Name"></textarea>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="send_btn"><?php echo $xml->content->button; ?></button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- contact -->
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
                     <a class="logo_bottom" href="index.php"><?php echo $xml->content->title; ?></a>
                  </div>
                  <div class="col-md-12">
                     <form class="form_subscri">
                        <div class="row">
                           <div class="col-md-12">
                              <input class="subsrib" placeholder="<?php echo $xml->content->input_email1; ?>" type="text" name="Enter your email">
                           </div>
                           <div class="col-md-12">
                              <button class="subsci_btn"><?php echo $xml->content->button1; ?></button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-9 col-md-8">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="infoma text_align_left">
                              <h3><?php echo $xml->content->menu; ?></h3>
                              <ul class="menu_bottom">
                                 <li><a href="index.php"><?php echo $xml->content->home; ?></a></li>
                                 <li><a href="about.php"><?php echo $xml->content->about; ?></a></li>
                                 <li><a href="service.php"><?php echo $xml->content->coffservice; ?></a></li>
                                 <li><a href="testimonial.php"><?php echo $xml->content->testimonial; ?></a></li>
                                 <li><a href="blog.php"><?php echo $xml->content->blog; ?></a></li>
                                 <li><a href="contact.php"><?php echo $xml->content->contact; ?></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="infoma text_align_left">
                              <h3><?php echo $xml->content->coffee; ?></h3>
                              <ul class="menu_bottom">
                                 <li><a href="blackcoffee.php"><?php echo $xml->content->product1; ?></a></li>
                                 <li><a href="redcoffee.php"><?php echo $xml->content->product; ?></a></li>
                                 <li><a href="coffeeservice.php"><?php echo $xml->content->coffservice; ?></a></li>
                                 <li><a href="greentea.php"><?php echo $xml->content->product3; ?></a></li>
                                 <li><a href="chocolatecoffee.php"><?php echo $xml->content->product2; ?></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4">
                     <div class="infoma">
                        <h3><?php echo $xml->content->follow; ?></h3>
                        <ul class="social_icon">
                           <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <ul class="conta">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $xml->content->location; ?>
                           </li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $xml->content->call_us; ?></li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> <?php echo $xml->content->email1; ?></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p><?php echo $xml->content->footer; ?> <a href="privacypolicy.php"><?php echo $xml->content->footer1; ?></a></p>
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