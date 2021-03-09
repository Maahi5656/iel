<?php 
session_start();
include 'database.php';

?>

<?php include 'inc/header.php' ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
           
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">"About Us" Content</h4>
                                        <?php if(isset($_SESSION['outcome']) && isset($_SESSION['type']) ){ ?>
                                            <span class="text-<?php echo $_SESSION['type'] ?>">
                                                <?php echo $_SESSION['outcome'] ?>
                                            </span>
                                        <?php }unset($_SESSION['outcome']) ?>                            

                            <form method="post" action="about-edit.php">
                                <?php 
                                   $query = "SELECT * FROM about WHERE ID = 1";
                                   $result = mysqli_query($connection, $query);
                               
                                ?> 
                                 
                                <div>
                                <?php foreach($result as $row){ ?>	
                                                            	
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9 p-2">
                                       <img src="<?php echo $row['image'] ?>" alt="" class="w-25">
                                    </div>                                               		
                                </div>

                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Image 2</label>
                                    <div class="col-sm-9 p-2">
                                       <img src="<?php echo $row['image2'] ?>" alt="" class="w-25">
                                    </div>                                               		
                                </div>

                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Image 3</label>
                                    <div class="col-sm-9 p-2">
                                       <img src="<?php echo $row['image3'] ?>" alt="" class="w-25">
                                    </div>                                               		
                                </div>                                                                

                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Details</label>
                                    <div class="col-sm-9 p-2">
                                         <?php echo $row['description'] ?>                                              
                                   </div>
                                </div>   
                                                                                                                  
                                <?php } ?> 

                                <div class="form-group row justify-content-end"> 
                                    <div class="col-sm-9">                                   
                                         <input type="submit" name="edit_about_page" class="btn btn-primary w-md" value="Update">
                                    </div>
                                </div>


                           </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- end page title -->


            </div>
            
        </div>

<?php include 'inc/footer.php' ?>        