<?php 
session_start();
include 'database.php';

?>

<?php
if(!$_SESSION['admin']){
    header('location: login.php');
}
?> 

<?php 
if(isset($_GET['edit'])){
	$id = $_GET['edit'];

	$query = "SELECT * FROM gallery where ID = $id";
	$result = mysqli_query( $connection, $query);

	$row = mysqli_fetch_assoc($result);
    
    $id = $row['ID'];
    $image = $row['name'];
    $title = $row['title'];
}
?>

<?php include 'inc/header.php' ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
        <div class="container-fluid">

    <div class="page-content">
        <div class="row">
        	<div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Update Image</h4>                           

                            <form method="post" action="gallery-update.php" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $row['ID'] ?>">

                                <div class="align-items-center form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="oldimage" value="<?= $image ?>">	
                                        <input type="file" name="gallery_image" value="<?= $image ?>">
                                        <img src="<?= $image ?>" class="img-thumbnail w-25" alt="">  
                                    </div>                            
                                </div>   

                                <div class="align-items-center form-group row mb-4">
                                    <label for="horizontal-input" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="image_title" class="form-control" value="<?= $title ?>" id="horizontal-input">

                                    </div>
                                </div>                                                            

                                <div class="align-items-center form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" name="update_gallery" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </form>    
                        </div>         
                    </div>
            </div>

        </div>

 <!-- container-fluid -->

    <!-- End Page-content -->
</div>
<!-- end main content-->            

            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

<?php include 'inc/footer.php' ?>





<?php include 'inc/footer.php' ?>