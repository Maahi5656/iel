<?php
// session_start();
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
                                    <h3>Concern</h3>
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
                            <li>Our Concern</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<section class="blog-page-section sec-padding">
            <?php
              if(isset($_GET['id'])){
              	$id = $_GET['id'];
              	$query = "SELECT * FROM concern WHERE ID = $id";
              	$result = mysqli_query($connection, $query);
              }
            ?>
            <div class="container">
                <?php foreach($result as $row){ ?>
                <div class="row">
                    <div class="col-md-10">
                        <div class="left-box">
                            <!--Blog Single-->
                            <div class="single-blog-post">
                                <div class="img-holder"><img src="<?php echo $row['image'] ?>" alt="Awesome Image">
                                </div>
                                <h4><?php echo $row['name'] ?></h4>

                                <p><?php echo $row['LongDescription'] ?></p>
                            </div>

                            <!--Blog Single ends-->
                        </div>
                    </div>
                <?php } ?>
                </div>
                <!-- End row -->
            </div>
        </section>

        <!-- Start Footer bottom section -->
<?php include 'inc/frontend/footer.php' ?>