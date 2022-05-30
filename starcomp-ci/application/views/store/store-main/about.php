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
      <title>Sock</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/bootstrap.min.css');?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/style.css');?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/responsive.css');?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('assets/sock_bs/images/fevicon.png');?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/jquery.mCustomScrollbar.min.css');?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/font-awesome.css');?>">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/owl.carousel.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/owl.theme.default.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/js/jquery.fancybox.min.css');?>" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <?php
   require_once 'application/views/store/sidebar/index.php';
?>
   <!-- body -->
   <body class="main-layout about_pape">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url('assets/sock_bs/images/loading.gif');?>" alt="#" /></div>
      </div>
      
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
        <div class="header_main">
         <div class="header_main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="logo"> <a href="<?php echo site_url('store/Store_main')?>"><img src="<?php echo base_url('assets/sock_bs/images/STARCOMP22.png');?>" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="index.html">Home</a> </li>
                                 <li> <a href="about.html">About</a> </li>
                                 <li><a href="testmonial.html">Testmonial</a></li>
                                 <li><a href="clients.html">Shop</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                                 <li class="last"><a href="#"><img src="<?php echo base_url('assets/sock_bs/images/search_icon.png');?>" alt="icon"/></a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
            <!--about -->
       <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"> About</strong>  Us</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
                </div>
             </div>
         </div>
      </div>
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="<?php echo base_url('assets/sock_bs/images/child-image.png');?>" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="<?php echo base_url('assets/sock_bs/images/child-image.png');?>" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="<?php echo base_url('assets/sock_bs/images/child-image.png');?>" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      </div>
      <!--end about -->

      <!-- footer start-->
      <div class="copyright_text">
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
         </div>
      </div>
      </div>

      <!-- Javascript files-->
      <script src="<?php echo base_url('assets/sock_bs/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/popper.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/bootstrap.bundle.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/jquery-3.0.0.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/plugin.js');?>"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url('assets/sock_bs/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/custom.js');?>"></script>
      <!-- javascript --> 
      <script src="<?php echo base_url('assets/sock_bs/js/owl.carousel.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/jquery.fancybox.min.js');?>"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>