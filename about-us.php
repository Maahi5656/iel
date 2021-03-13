<?php
include 'database.php';
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
<?php include 'inc/frontend/footer.php' ?>        
        