<?php
include 'database.php';
?>

<?php
$page=0;
if(isset($_POST['page'])){
    $page = $_POST['page'];
    $page = ($page*4)-4; //counting for 4 images displayed in one set
}

?>

<?php include 'inc/frontend/header.php' ?>

<section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Gallery</h3>
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
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

       <section class="gallery gallery-section" id="img-gallery">
            <div class="container">
                <div class="row">

                        <div class="section-titleBar text-center" style="margin-bottom: 30px;">
                            <h3>Gallery Section</h3>
                            <p>Hotel analytics (BA) is the practice of iterative.</p>
                        </div>
                </div>

        <section class="gallery-section">
            <?php
              $query = "SELECT * FROM gallery LIMIT $page,4";
              $result = mysqli_query($connection, $query); 
              // while($row=mysqli_fetch_array($result)){

              // }
            ?>            
              <div class="row">
                    <?php foreach($result as $row){ ?>
                    <div class="col-md-3 col-sm-6 col-xs-3">
                        <figure class="gallery__item">
                            <a href="<?php echo $row['name'] ?>" class="tt-gallery-1 lightbox">
                            <img src="<?php echo $row['name'] ?>" alt="<?php echo $row['title'] ?>" class="gallery__img lightbox" style="width: fit-content; height: 220px;">
                            <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                    </div>
                <?php } ?>
                
                <?php 
                $query1 = "SELECT * FROM gallery";
                $result1 = mysqli_query($connection,$query1);
                $count = mysqli_num_rows($result1); //used to count how many images in table
                $a = $count/4;
                $a = ceil($a); //used to round up figure
                ?>
                <form method="post" id="gallery-pagination">
                    <?php for($b=1;$b<=$a;$b++){ ?>
                       <input type="submit" value="<?php echo $b; ?>" name="page">
                    <?php } ?>

                </form>


                   </div>
                        </section>
                    </div>


        </section>
        <!-- Start Footer bottom section -->
<?php include 'inc/frontend/footer.php' ?>
        <!--End of Galery section-->
