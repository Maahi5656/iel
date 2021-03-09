<?php 
session_start();
include 'database.php';

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
                            <h4 class="card-title mb-4">Mission and Vision</h4>
                            <?php if(isset($_SESSION['outcome']) && isset($_SESSION['type']) ){ ?>
                                <span class="text-<?php echo $_SESSION['type'] ?>">
                                    <?php echo $_SESSION['outcome'] ?>
                                </span>
                            <?php }unset($_SESSION['outcome']) ?> 

                            <form method="post" action="missionvision-update.php" enctype="multipart/form-data">

                            <?php 
                               
                               $query = "SELECT * FROM missionvision WHERE ID = 1";
                               $result = mysqli_query($connection, $query);
                            ?>

                                <?php foreach($result as $row){ ?>

                                 <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">   

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="oldimage" value="<?php echo $row['image'] ?>">
                                        <input type="file" name="mvimage" value="<?php echo $row['image'] ?>">
                                        <img src="<?php echo $row['image'] ?>" class="img-thumbnail w-25">                                      
                                    </div>
                            </div>                                                             
                                
                               <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Mission</label>
                                    <div class="col-sm-9">
                                      <textarea name="mission" id="service_details" cols="30" rows="10" style="width:100%;"><?php echo $row['mission'] ?></textarea>
                                    </div>
                                </div>

                               <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Vision</label>
                                    <div class="col-sm-9">
                                      <textarea name="vision" id="service_details" cols="30" rows="10" style="width:100%;"><?php echo $row['vision'] ?></textarea>                     
                                    </div>
                                </div>                                
                            <?php } ?>
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" name="update_mv" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
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