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

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
				<!--header-->

        <!-- Main menu -->
        <section class="main-menu-three finance-navbar">
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
        </section>
        <!-- MAin menu ends -->

        <!-- Start Slider section -->
        <section class="slider-section">
           <div class="slider-overly"></div>
            <div class="intro-carousel our-slider">

                <div class="intro-content-1">
                    <div class="slider-images">
                        <img src="frontend_assets/img/slider/1.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">Marcho - the Best Place in the World to Be</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-1 ">
                                                <p>nteger placerat arcu quis sem aliquet tempor maecenas in dictum arcu curabitur</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <a href="#" class="ped-btn left-btn" >Our Services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intro-content-2">
                    <div class="slider-images">
                        <img src="frontend_assets/img/slider/1.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">Marcho - the Best Place in the World to Be</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-1 ">
                                                <p>nteger placerat arcu quis sem aliquet tempor maecenas in dictum arcu curabitur</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <a href="#" class="ped-btn left-btn" >Our Services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider section -->
        <!-- Start welcome section -->
        <section class="welcome-section-4 sec-padding">
            <?php 
             $query = "SELECT * FROM about";
             $result = mysqli_query($connection, $query);
            ?>
            <div class="container">
                <div class="row">
                  <div class="col-md-5">
                      <div class="section-titleBar text-left">
                        <?php foreach($result as $row){ ?>
                          <h3>About Us</h3>
                          <p><?php echo substr($row['description'],0,120)."..."; ?></p>
                          <div class="button">
                              <a class="thm-btn" href="about-us.php">See More</a>
                          </div>
                        <?php } ?> 
                      </div>
                  </div>
                    <div class="col-md-7">
                        <div class="intro_images magic_up">
                            <div class="intro_1 intro_img"><img src="<?php echo $row['image2'] ?>" alt=""></div>
                            <div class="intro_2 intro_img"><img src="<?php echo $row['image'] ?>" alt=""></div>
                            <div class="intro_3 intro_img"><img src="<?php echo $row['image3'] ?>" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End welcome section -->

        <!-- Start welcome section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Our Concern</h3>
                            <p>Hotel analytics (BA) is the practice of iterative, methodical exploration of an
                                organization's data with emphasis on statistical analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="offer-section">
							<?php

							$query = "select * from concern";
							$result = mysqli_query($connection, $query);
							// $row = mysqli_fetch_assoc($result);

							 ?>
            <div class="container">
                <div class="row">
									 <?php foreach($result as $row){ ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="tour">
                            <a href="tour-place.html" class="tour-img">
                                <img src="<?php echo $row['image'] ?>" alt="tour-img">
                            </a>
                            <div class="desc">
                                <h4><?php echo $row['name']; ?></h4>
                                <p><?php echo $row['ShortDescription']; ?></p>
                            </div>
                        </div>
                    </div>
									<?php } ?>
                </div>
            </div>
            </section>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->

        <!-- Start welcome section -->
				<section class="numbers-section-3 sec-padding parallax-bg fix">
				            <div class="container">
				                <div class="row">
				                    <div class="col-md-4 col-sm-4 col-xs-12">
				                        <div class="section-titleBar text-left">
				                            <h3>We are proud<br>with our achivness</h3>
				                        </div>
				                    </div>
				                    <div class="col-md-8 col-sm-8 col-xs-12">
				                        <div class="single-count-box">
				                            <div class="box">
				                                <div class="number-box"><span class="counter">44</span></div>
				                                <div class="text-box">
				                                    <p>SERVED BREAKFAST</p>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="single-count-box">
				                            <div class="box">
				                                <div class="number-box"><span class="counter">66</span></div>
				                                <div class="text-box">
				                                    <p>INTERNATIONAL GUESTS</p>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="single-count-box">
				                            <div class="box">
				                                <div class="number-box"><span class="counter">98</span></div>
				                                <div class="text-box">
				                                    <p>FIVE STARTRATINGS</p>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </section>
        <!-- End welcome section -->
        <!-- Start project section -->
				<section class="our-overview sec-padding">
				                <div class="container">
				                  <div class="row">
				                    <div class="col-md-6 col-sm-6">
				                        <div class="about-wd">
				                                <div class="section-titleBar text-left">
				                                        <h3>Core Value of Resort</h3>
				                                    <p>Integer placerat arcu quis sem aliquet tempor. Maecenas in dictum arcu. Curabitur cursus est libero, id accumsan sapien ullamcorper quis. Pellentesque imperdiet mi quis volutpat facilisis. In facilisis sit amet lacus ut convallis. Aenean congue porta dolor, in rutrum orci. In id lacinia ligula.</p>

				                                </div>
				                              <div class="lists">
				                                <ul>
				                                        <li><i class="fa fa-check-circle-o"></i>Hotel Growth</li>
				                                        <li><i class="fa fa-check-circle-o"></i>Sustainability</li>
				                                        <li><i class="fa fa-check-circle-o"></i>Performance</li>
				                                </ul>
				                                <ul>
				                                        <li><i class="fa fa-check-circle-o"></i>Advanced Analytics</li>
				                                        <li><i class="fa fa-check-circle-o"></i>Customer Insights</li>
				                                        <li><i class="fa fa-check-circle-o"></i>Organization</li>
				                                </ul>
				                              </div>
				                        </div>

				                    </div>
				                    <div class="col-md-6 col-sm-6">
				                            <img src="frontend_assets/img/service/map.png" class="mb-15-xs" alt="map">
				                    </div>
				                  </div>
				                </div>
				              </section>
        <!-- End project section -->

        <!--Galery section Start-->
        <!-- <section class="gallery-3 sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Our Resort Gallery</h3>
                            <p>Hotel analytics (BA) is the practice of iterative, methodical exploration of an
                                organization's data with emphasis on statistical analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section">
                <figure class="gallery__item gallery__item--1 lightbox">
                    <a href="img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--2 lightbox">
                    <a href="img/galery/gal-2.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-2.jpg" alt="Gallery image 2" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--3 lightbox">
                    <a href="img/galery/gal-3.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-3.jpg" alt="Gallery image 3" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--4">
                    <a href="img/galery/gal-4.jpeg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-4.jpeg" alt="Gallery image 4" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--5">
                    <a href="img/galery/gal-5.jpeg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-5.jpeg" alt="Gallery image 5" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--6">
                    <a href="img/galery/gal-6.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-6.jpg" alt="Gallery image 6" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--7">
                    <a href="img/galery/gal-7.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-7.jpg" alt="Gallery image 7" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--8">
                    <a href="img/galery/gal-8.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-8.jpg" alt="Gallery image 8" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--9">
                    <a href="img/galery/gal-9.jpg" class="tt-gallery-1 lightbox">
                    <img src="img/galery/gal-9.jpg" alt="Gallery image 9" class="gallery__img">
                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--10">
                    <a href="img/galery/gal-10.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-10.jpg" alt="Gallery image 10" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--11">
                    <a href="img/galery/gal-11.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-11.jpg" alt="Gallery image 11" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--12">
                    <a href="img/galery/gal-12.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-12.jpg" alt="Gallery image 12" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--13">
                    <a href="img/galery/gal-13.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-13.jpg" alt="Gallery image 13" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                <figure class="gallery__item gallery__item--14">
                    <a href="img/galery/gal-14.jpg" class="tt-gallery-1 lightbox">
                        <img src="img/galery/gal-14.jpg" alt="Gallery image 14" class="gallery__img">
                        <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>

            </div>
        </section> -->
        <!--End of Galery section-->

        <!-- Start testimonials section -->

        <!-- End testimonials end -->

        <!-- Start map section -->

        <!-- End map section -->

        <!-- Start Footer bottom section -->
        <footer class="footer sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget"><a class="logo" href="index-2.html"><img src="img/logo/logo2.png" alt="Awesome Image"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada fringilla sem, at dictum lectus ultricies quis. Etiam eu bibendum orci. Aliquam erat volutpat.</p>
                        <div class="link"><a href="#">MORE ABOUT US</a> </div>

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
                              <p>Apple St, New York, NY 10012, USA</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                              <p>( 018) 65 524 8503  /  (125) 954 7854</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="text">
                              <p><a href="#">contact@lamarena.com</a></p>
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
                        <p>Copyright © Marcho 2018. All rights reserved. </p>
                      </div>
                      <div class="pull-right">
                        <p>Created by: Lamarena</p>
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
