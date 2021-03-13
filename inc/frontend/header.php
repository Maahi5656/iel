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
          <?php
             $query = "SELECT * FROM profile WHERE ID=1";
             $result = mysqli_query($connection, $query);
          ?>
            <div class="container clearfix">
                <div class="header-right-info">
                    <ul>
                      <?php foreach($result as $row){ ?>
                        <li>
                            <div class="single-header-right-info w-50">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text-box">
                                    <p><?php echo $row['address'] ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-header-right-info">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text-box">
                                    <p><?php echo $row['contact'] ?> <br><?php echo $row['website'] ?></p>
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
                      <?php } ?>
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
<nav id="main-navigation-wrapper" class="navbar navbar-default Marcho-navbar">
            <?php
                 $sql = "SELECT * FROM profile WHERE ID=1";
                 $result = mysqli_query($connection, $sql);
            ?>    
                <div class="container">
                    <div class="float-left">
                        <?php foreach($result as $row){ ?>                        
                        <div class="logo pull-left"><a href="index.php"><img src="<?php echo $row['image'] ?>" alt="Awesome Image" style="height:65px;"></a></div>
                        <?php } ?>                        
                    </div>
                    <div class="float-right">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div id="main-navigation" class="collapse navbar-collapse">
                    <?php
                         $sql = "select * from concern";
                         $result = mysqli_query($connection, $sql);
                    ?>                            
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