<?php
include 'database.php'
?>


       <?php include 'inc/frontend/header.php' ?>
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
                                    <h3>Mission & Vision</h3>
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
                            <li>Mission & Vision</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start welcome section -->
        <section class="about-section sec-padding">
            <?php
              $query = "SELECT * FROM missionvision";
              $result = mysqli_query($connection, $query);
            ?>
            <div class="container">
                <?php foreach($result as $row){ ?>
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-about-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?php echo $row['image'] ?>" alt="" />
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="about-whoweare">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 p-5">
                                    <div class="about-content mrb">

                                        <h4>Mission</h4>

                                        <p><?php echo $row['mission'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 p-5">
                                    <div class="about-content">

                                        <h4>Vision</h4>

                                        <p><?php echo $row['vision'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End main content -->
                    </div>
                </div>
            <?php } ?>
            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->

        <!-- Start Footer bottom section -->
        <?php include 'inc/frontend/footer.php' ?>
