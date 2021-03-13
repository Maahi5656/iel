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

  $errors = array();

  if(isset($_POST['edit_profile_page']) ){

    $query = "SELECT * FROM profile WHERE ID = 1";
    $result = mysqli_query($connection, $query);

  }else{
    $query = "SELECT * FROM profile WHERE ID = 1";
    $result = mysqli_query($connection, $query);
  }

?>


<?php include 'inc/header.php' ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Profile</h4>
                                        <?php if(isset($_SESSION['outcome']) && isset($_SESSION['type']) ){ ?>
                                            <span class="text-<?php echo $_SESSION['type'] ?>">
                                                <?php echo $_SESSION['outcome'] ?>
                                            </span>
                                        <?php }unset($_SESSION['outcome']) ?>

                            <form method="post" action="profile-update.php"  enctype="multipart/form-data">

                            <div>
                                <?php foreach($result as $row){ ?>
                                <input type="hidden" name="id" value="<?php echo $row['ID'] ?>" >

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="oldimage" value="<?php echo $row['image'] ?>">
                                        <input type="file" name="profileimage" value="<?php echo $row['image'] ?>">
                                        <img src="<?php echo $row['image'] ?>" class="img-thumbnail w-25">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="username" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['username'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="password" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['password'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="email" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                      <input type="number" name="contact" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['contact'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                      <input type="url" name="website" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['website'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Office Address</label>
                                    <div class="col-sm-9">
                                      <textarea name="address" id="service_details" cols="30" rows="5" style="width:100%;"><?php echo $row['address'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Office Hours</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="officeHours" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['officeHours'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Office Closed</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="officeClosed" class="form-control" id="horizontal-firstname-input" value="<?php echo $row['officeClosed'] ?>">
                                    </div>
                                </div>


                                <?php } ?>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                         <input type="submit" name="update_profile_page" class="btn btn-primary w-md" value="Update Profile">
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
