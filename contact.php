<!doctype html>
<html class="no-js" lang="en">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home-1 | Marcho</title>
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
        <!-- header -->
        <header class="header">
            <div class="container clearfix">
                <div class="header-right-info">
                    <ul>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text-box">
                                    <p>Apple St, New York, <br> NY 10012, USA</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text-box">
                                    <p>+ 389 72 2705345 <br>Marcho.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                                <div class="text-box">
                                    <p>Mon - Sat 9.00 - 19.00 <br>Sunday Closed</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-left-info">
                    <div class="link">
                        <a href="contact.html" class="thm-btn-inverse">book your room</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- Main menu -->
        <section class="main-menu-one finance-navbar">
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
        <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Contact us</h3>
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
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->



        <section class="contact-us bg-color sec-padding">
            <div class="container">

                <div class="rox">
                    <div class="col-md-7">

                        <div class="main-title">
                            <h3>We'd Love to Hear From You</h3>
                            <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies dui, ut rhoncus libero augue. </p>
                        </div>

                        <div class="form">
                            <div class="row">
                                <p class="success" id="success"></p>
                                <p class="error" id="error"></p>
                                <form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Subject" name="contact_subject" id="contact_subject" class="input"></div>
                                    <div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
                                    <div class="col-md-3"><input name=" " type="submit" value="submit" onClick="validateContact();"></div>
                                </form>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">

                        <div class="contact-get">
                            <div class="main-title">
                                <h3><span>GET IN</span> Touch</h3>
                                <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies.</p>
                            </div>

                            <div class="get-in-touch">
                                <div class="detail">
                                    <span><b>Phone:</b> 1.800.555.6789</span>
                                    <span><b>Email:</b> <a href="#.">support@marco.com</a></span>
                                    <span><b>Web:</b> <a href="#.">www.marco.com</a></span>
                                    <span><b>Address:</b> 12345 North Main Street, New York, NY</span>
                                </div>

                                <div class="social-icons">
                                    <a href="#." class="fb"><i class="icon-euro"></i></a>
                                    <a href="#." class="tw"><i class="icon-yen"></i></a>
                                    <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                                    <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Start welcome section -->

        <!-- End welcome section -->

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
        <!-- tabs js -->
        <script src="frontend_assets/js/tabs.js"></script>
        <!-- plugins js -->
        <script src="frontend_assets/js/plugins.js"></script>
        <!-- datapicker js -->
        <script src="frontend_assets/js/zebra_datepicker.min.js"></script>
        <!-- main js -->
        <script src="frontend_assets/js/main.js"></script>
    </body>

/html>