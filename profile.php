<?php
session_start();
include 'database.php';

?>

<?php
if(!$_SESSION['admin']){
    header('location: login.php');
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
                            <h4 class="card-title mb-4">Company Profile</h4>
                                        <?php if(isset($_SESSION['outcome']) && isset($_SESSION['type']) ){ ?>
                                            <span class="text-<?php echo $_SESSION['type'] ?>">
                                                <?php echo $_SESSION['outcome'] ?>
                                            </span>
                                        <?php }unset($_SESSION['outcome']) ?>

                            <form method="post" action="profile-edit.php"  enctype="multipart/form-data">
                                <?php
                                   $query = "SELECT * FROM profile WHERE ID = 1";
                                   $result = mysqli_query($connection, $query);

                                ?>
                                <div></div>
                                <?php foreach($result as $row){ ?>
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Company Logo</label>
                                    <div class="col-sm-9 p-2">
                                       <img src="<?php echo $row['image'] ?>" alt="" class="w-25">
                                    </div>
                                </div>

                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                      <?php echo $row['username'] ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                      <?php echo $row['password'] ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                      <?php echo $row['email'] ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                      <?php echo $row['contact'] ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                       <?php echo $row['website'] ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Office Address</label>
                                    <div class="col-sm-9">
                                      	<?php echo $row['address'] ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Office Hours</label>
                                    <div class="col-sm-9">
                                       <?php echo $row['officeHours'] ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-2 align-items-center border-bottom">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Office Closed</label>
                                    <div class="col-sm-9">
                                       <?php echo $row['officeClosed'] ?>
                                    </div>
                                </div>
                                <?php }  ?>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                         <input type="submit" name="edit_profile_page" class="btn btn-primary w-md" value="Update Profile">
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
