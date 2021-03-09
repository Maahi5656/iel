<?php 
session_start();
include 'database.php';

?> 
<?php

  $errors = array();

  if(isset($_POST['edit_about_page']) ){ 
     
    $query = "SELECT * FROM about WHERE ID = 1";
    $result = mysqli_query($connection, $query);

  }else{
    $query = "SELECT * FROM about WHERE ID = 1";
    $result = mysqli_query($connection, $query);
  }

?>


<?php include 'inc/header.php' ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container">
             
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Update "About Us" Content</h4>
                              <?php foreach($result as $row){ ?>                           
                            <form method="post" action="about-update.php" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $row['ID'] ?>" >
                                <div class="form-group row mb-4 align-items-center">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">First Image</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="oldimage1" value="<?php echo $row['image'] ?>">
                                        <input type="file" name="about_image1" value="<?php echo $row['image'] ?>">
                                        <img src="<?php echo $row['image'] ?>" class="img-thumbnail w-25" alt="">      
                                    </div>
                                </div>

                                <div class="form-group row mb-4 align-items-center">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Second Image</label>
                                    <div class="col-sm-9">
                                      <input type="hidden" name="oldimage2" value="<?php echo $row['image2'] ?>">  
                                      <input type="file" name="about_image2"  value="<?php echo $row['image2'] ?>">
                                      <img src="<?php echo $row['image2'] ?>" class="img-thumbnail w-25" alt="">      
                                    </div>
                                </div> 

                                <div class="form-group row mb-4 align-items-center">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Third Image</label>
                                    <div class="col-sm-9">
                                      <input type="hidden" name="oldimage3" value="<?php echo $row['image3'] ?>">  
                                      <input type="file" name="about_image3"  value="<?php echo $row['image3'] ?>">
                                      <img src="<?php echo $row['image3'] ?>" class="img-thumbnail w-25" alt="">                       
                                    </div>
                                </div>                                                                                                

                               <div class="form-group row mb-4 align-items-center">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Details</label>
                                    <div class="col-sm-9">
                                      <textarea name="details" id="service_details" cols="30" rows="10" style="width:100%;"><?php echo $row['description'] ?></textarea>                    
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" name="about-update" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </div>
                            <?php } ?>    
                            </form>    
                        </div>         
                    </div>
                 </div>
            </div>
        </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

<?php include 'inc/footer.php' ?>


