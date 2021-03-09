<?php
include 'database.php';
?>

 <!doctype html>
<html class="no-js" lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home-3 | Marcho</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.png">

  <!-- all css here -->

  <!-- bootstrap v3.3.6 css -->
  <link rel="stylesheet" href="frontend_assets/css/bootstrap.min.css">
  <!-- owl.carousel css -->
  <link rel="stylesheet" href="frontend_assets/css/owl.carousel.css">
  <link rel="stylesheet" href="frontend_assets/css/owl.transitions.css">

  <!-- font-awesome css -->
  <link rel="stylesheet" href="frontend_assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="frontend_assets/css/icon.css">
  <link rel="stylesheet" href="frontend_assets/css/flaticon.css">
      <!-- magnific css -->
      <link rel="stylesheet" href="frontend_assets/css/zebra_datepicker.css">
  <!-- magnific css -->
      <link rel="stylesheet" href="frontend_assets/css/magnific.min.css">
      <!--tabs-->
      <link href="frontend_assets/css/tabs.css" rel="stylesheet" type="text/css">
      <!-- venobox css -->
  <link rel="stylesheet" href="frontend_assets/css/venobox.css">
  <!-- style css -->
  <link rel="stylesheet" href="frontend_assets/css/style.css">
  <!-- responsive css -->
  <link rel="stylesheet" href="frontend_assets/css/responsive.css">

  <!-- modernizr css -->
  <script src="frontend_assets/js/marco/modernizr-2.8.3.min.js"></script>
	</head>
		<body>




        <!-- header -->
        <header class="header">
            <div class="container clearfix">
                <div class="header-right-info">
                    <ul>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text-box">
                                    <p>BNS Center, Uttara, Dhaka <br> Bangladesh</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text-box">
                                    <p>+ 880 1760807974 <br>iel.com.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                                <div class="text-box">
                                    <p>Sat - Thu 9.00 - 19.00 <br>Friday Closed</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-left-info">
                    <div class="link">
                        <a href="contact.php" class="thm-btn-inverse">Enquiry</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- Main menu -->
        <section class="main-menu-one finance-navbar">
          <?php
             $sql = "select * from concern";
						 $result = mysqli_query($connection, $sql);
					?>
            <nav id="main-navigation-wrapper" class="navbar navbar-default Marcho-navbar">
                <div class="container">
                    <div class="float-left">
                        <div class="logo pull-left"><a href="index.php"><img src="img/logo/logo.jpg" alt="Awesome Image" style="height:65px;"></a></div>
                    </div>
                    <div class="float-right">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div id="main-navigation" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="about-us.php">about us</a></li>
                                <li class="dropdown"><a href="#">Our Concern</a>
                                <ul class="dropdown-submenu">
                                  <?php foreach($result as $row){ ?>
                                    <li><a href=""><?php echo $row['name'] ?></a></li>

                                  <?php } ?>
                                </ul>
                            </li>
                                <li><a href="missionvision.php">Mission & Vision</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">contact us</a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </nav>
        </section>        <!-- MAin menu ends -->
        <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>About us</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-path">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start welcome section -->
        <section class="welcome-section-4 sec-padding bg-color">
          <?php 
            $query = "SELECT * FROM about WHERE ID=1";
            $result = mysqli_query($connection, $query);
          ?>
            <div class="container">
                <div class="row">
                  <div class="col-md-5">
                      <div class="section-titleBar text-left">
                        <?php foreach($result as $row){ ?>
                          <h3>About Us</h3>
                          <p><?php echo $row['description'] ?></p>
                        <?php }?>  
                      </div>
                  </div>
                    <div class="col-md-7">
                        <div class="intro_images magic_up">
                            <div class="intro_1 intro_img">
                              <img src="<?php echo $row['image'] ?>" alt="">
                            </div>
                            <div class="intro_2 intro_img">
                              <img src="<?php echo $row['image2'] ?>" alt="">
                            </div>
                            <div class="intro_3 intro_img">
                              <img src="<?php echo $row['image3'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End welcome section -->
<!-- <section class="our-best-sides sec-padding ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Why Choose Us</h3>
                            <p>Hotel analytics (BA) is the practice of iterative.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="box-wrapper">
                          <div class="box">
                              <div class="icon-box">
                                  <i class="flaticon-hotel-room" aria-hidden="true"></i>
                              </div>
                              <h4>First Class Rooms</h4>
                              <p>Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Orci varius natoque penaticursus egestas. </p>
                          </div>


                          <div class="box">
                              <div class="icon-box">
                                  <i class="flaticon-parking-sign" aria-hidden="true"></i>
                              </div>
                              <h4>Free Parking </h4>
                              <p>Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Orci varius natoque penaticursus egestas. </p>
                          </div>


                          <div class="box">
                              <div class="icon-box">
                                  <i class="flaticon-swim" aria-hidden="true"></i>
                              </div>
                              <h4>Swimming Pool</h4>
                              <p>Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Orci varius natoque penaticursus egestas. </p>
                          </div>


                          <div class="box">
                              <div class="icon-box">
                                  <i class="flaticon-cooking" aria-hidden="true"></i>
                              </div>
                              <h4>Room Services </h4>
                              <p>Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Orci varius natoque penaticursus egestas. </p>
                          </div>
                      </div>

                    </div>
                </div>
            </div>
        </section> --> 
       <!-- Start testimonials section -->
        <!-- <section class="testimonial-section-2 sec-padding bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Clients Testimonials</h3>
                            <p>Hotel analytics (BA) is the practice of iterative.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="testimonial-carousel">
                        <div class="item">
                            <blockquote>
                                <div class="icon-holder">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                                </div>
                                Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes.
                            </blockquote>
                            <div class="testimonials-author">
                                <div class="author-img">
                                    <img class="img-responsive" src="frontend_assets/img/review/1.jpg" alt="author-img">
                                </div>
                                <h5>George Simons<span> - Lawyer</span></h5>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                        </div>
                        
                        <div class="item">
                            <blockquote>
                                <div class="icon-holder">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                                </div>
                                Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes.
                            </blockquote>
                            <div class="testimonials-author">
                                <div class="author-img">
                                    <img class="img-responsive" src="frontend_assets/img/review/1.jpg" alt="author-img">
                                </div>
                                <h5>George Simons<span> - Lawyer</span></h5>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                        </div>
                        
                        <div class="item">
                            <blockquote>
                                <div class="icon-holder">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                                </div>
                                Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes.
                            </blockquote>
                            <div class="testimonials-author">
                                <div class="author-img">
                                    <img class="img-responsive" src="frontend_assets/img/review/1.jpg" alt="author-img">
                                </div>
                                <h5>George Simons<span> - Lawyer</span></h5>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                        </div>
                       
                        <div class="item">
                            <blockquote>
                                <div class="icon-holder">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                                </div>
                                Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes.
                            </blockquote>
                            <div class="testimonials-author">
                                <div class="author-img">
                                    <img class="img-responsive" src="frontend_assets/img/review/1.jpg" alt="author-img">
                                </div>
                                <h5>George Simons<span> - Lawyer</span></h5>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                        </div>
                        
                        <div class="item">
                            <blockquote>
                                <div class="icon-holder">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                                </div>
                                Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes.
                            </blockquote>
                            <div class="testimonials-author">
                                <div class="author-img">
                                    <img class="img-responsive" src="frontend_assets/img/review/1.jpg" alt="author-img">
                                </div>
                                <h5>George Simons<span> - Lawyer</span></h5>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                        </div>
                       

                    </div>


                </div>


            </div>
        </section>    -->          




        <!-- End testimonials end -->

      <!-- Start Footer bottom section -->
        <footer class="footer sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget"><a class="logo" href="index-2.html"><img src="img/logo/logo.jpg" style="height:60px" alt="Awesome Image"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada fringilla sem, at dictum lectus ultricies quis. Etiam eu bibendum orci. Aliquam erat volutpat.</p>


                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Services</h4>

                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="#">Hotel Growth</a></li>
                                <li><a href="#">Hotel Loan</a></li>
                                <li><a href="#">Financial Planning</a></li>
                                <li><a href="#">Insurance Consulting</a></li>
                                <li><a href="#">Retirenment Planing</a></li>
                                <li><a href="#">Tax Planing</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget subscribe-widget">
                        <div class="title">
                          <h4>Subscribe Newsletter</h4>
                        </div>
                        <form action="#">
                          <p>Get latest updates and offers.</p>
                          <div class="newsletter-widget">
                            <input type="text" placeholder="Enter your email address">
                            <button type="submit" class="ped-btn-footer">SUBSCRIBE US</button>
                          </div>
                        </form>

                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget subscribe-widget">
                          <div class="title">
                            <h4>Contact Us</h4>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                              <p>BNS Center, Uttara, Dhaka, Bangladesh</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                              <p>+880 176080 7974</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="text">
                              <p><a href="#">support@iel.com.bd</a></p>
                            </div>
                          </div>

                          <ul class="social list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </footer>
        <!-- End Footer bottom section -->
        <section class="footer-bottom">
                    <div class="container clearfix">
                      <div class="pull-left">
                        <p>Copyright © Inovity Expedia 2020. All rights reserved. </p>
                      </div>
                      <div class="pull-right">
                        <p>Powered by: <a href="https://akaarit.com">Akaar IT</a></p>
                      </div>
                    </div>
                  </section>

                  <!-- all js files -->

              		<!-- jquery latest version -->
              		<script src="frontend_assets/js/marco/jquery-1.12.4.min.js"></script>
              		<!-- bootstrap js -->
              		<script src="frontend_assets/js/bootstrap.min.js"></script>
              		<!-- owl.carousel js -->
              		<script src="frontend_assets/js/owl.carousel.min.js"></script>
              		<!-- Counter js -->
              		<script src="frontend_assets/js/jquery.counterup.min.js"></script>
              		<!-- waypoint js -->
              		<script src="frontend_assets/js/waypoints.js"></script>
              		<!-- isotope js -->
                      <script src="frontend_assets/js/isotope.pkgd.min.js"></script>
                      <!-- stellar js -->
                      <script src="frontend_assets/js/jquery.stellar.min.js"></script>
                      <!-- stellar js -->
                      <script src="frontend_assets/js/imagelightbox.min.js"></script>
              		<!-- magnific js -->
                      <script src="frontend_assets/js/magnific.min.js"></script>
              		<!-- venobox js -->
              		<script src="frontend_assets/js/venobox.min.js"></script>
                      <!-- meanmenu js -->
                      <script src="frontend_assets/js/jquery.meanmenu.js"></script>
              		<!-- Form validator js -->
              		<script src="frontend_assets/js/form-validator.min.js"></script>
              		<!-- plugins js -->
              		<script src="frontend_assets/js/plugins.js"></script>
                      <!-- tabs js -->
                      <script src="frontend_assets/js/tabs.js"></script>
                      <!-- datapicker js -->
                      <script src="frontend_assets/js/zebra_datepicker.min.js"></script>
              		<!-- main js -->
              		<script src="frontend_assets/js/main.js"></script>
	</body>


</html>
