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
                                    <li><a href="concern-details.php?id=<?php echo $row['ID'] ?>"><?php echo $row['name'] ?></a></li>

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

<!--         <section class="gallery gallery-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Gallery Section</h3>
                            <p>Hotel analytics (BA) is the practice of iterative.</p>
                        </div>                        
                        <section class="gallery-section">

                            <figure class="gallery__item">
                                <a href="frontend_assets/img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                                    <img src="frontend_assets/img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>

                                    <figure class="gallery__item">
                                <a href="frontend_assets/img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                                    <img src="frontend_assets/img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>



                                    <figure class="gallery__item">
                                <a href="frontend_assets/img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                                    <img src="frontend_assets/img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>

                                    <figure class="gallery__item">
                                <a href="frontend_assets/img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                                    <img src="frontend_assets/img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>

                                    <figure class="gallery__item">
                                <a href="frontend_assets/img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                                    <img src="frontend_assets/img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>

                                    <figure class="gallery__item">
                                <a href="frontend_assets/img/galery/gal-1.jpg" class="tt-gallery-1 lightbox">
                                    <img src="frontend_assets/img/galery/gal-1.jpg" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>                                                                       
                        </section>
                    </div>
                </div>
            </div>
        </section> -->
<section class="gallery">
        <div class="container">
            <div class="title">
                <h2>Gallery</h2>
            </div>
            <div class="gallery-items">
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     2
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     3
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     4
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     5
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     6
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     7
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     8
                    </div>                  
                </div>
                <div class="item">
                    <img src="asset.jpg" alt="gallery">
                    <div class="caption">
                     9
                    </div>                  
                </div>                                      
            </div>
            <div class="pagination">
                <div class="prev">Prev</div>
                <div class="page">Page <span class="page-num"></span></div>
                <div class="next">Next</div>
            </div>                       
        </div>
            
    </section>
      

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

    <script>
        

const galleryItems = document.querySelector(".item").children;

//console.log(galleryItems);
const prev = document.querySelector(".prev");
const next = document.querySelector('.next');
const page = document.querySelector('.page-num');

const maxItem=4;
let index=1;

const pagination = Math.ceil(galleryItems.length/maxItem);

prev.addEventListener("click", function(){
    index--;
    check();
    showItems();
})
next.addEventListener("click", function(){
    index++;
    check();
    showItems();
})

function check(){
    if(index == pagination){
        next.classList.add("disabled");
    }else{
        next.classList.remove("disabled");
    }

    if(index==1){
        prev.classList.add("disabled");
    }else{
        prev.classList.remove("disabled");
    }
    
}

function showItems(){
    for(let i=0;i<galleryItems.length; i++){
      galleryItems[i].classList.remove("show"); 
      galleryItems[i].classList.add("hide");


      if(i>=(index*maxItem)-maxItem && i<index*maxItem){
        galleryItems[i].classList.remove("hide");
        galleryItems[i].classList.add("show");
      }
    page.innerHTML = index;  
  }


}

window.onload = function(){
    showItems();
    check();
}
    </script>

        
    </body>

</html>
        <!--End of Galery section-->