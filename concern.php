<?php 
session_start();
include 'database.php';

?> 
<?php
  $image = $concernName = $ShortDescription = $LongDescription = "";
  $file = $filename = $tmp_name = $file_error = $temporaryExtension = $fileExtension = $isAllowed = $newFileName = $fileDestination = "";
  $errors = array();

  function test_input($value){
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  if(isset($_POST['concern']) ){
     
     if(empty($_POST['description'])){
        $errors['description'] = "Please Enter Your Description";
        $_SESSION['description'] = $errors['description'];
     }else{
        $ShortDescription = test_input($_POST['description']);
     }

     if(empty($_POST['details'])){
        $errors['details'] = "Please Enter Your Description";
        $_SESSION['details'] = $errors['details'];
     }else{
        $LongDescription = test_input($_POST['details']);
     }

     if(empty($_POST['concern_name'])){
        $errors['concern_name'] = "Please Enter Name Of Your Service";
        $_SESSION['concern_name'] = $errors['concern_name'];
     }else{
        $concernName = test_input($_POST['concern_name']);
     }


     if(empty($_FILES['image']['name'])){
        $errors['image'] = "Please Insert An Image";
        $_SESSION['image'] = $errors['image']; 
     }else{

        //Uploading File In The Server
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $file_error = $_FILES['image']['error'];
        
        //separating the srting of the filename
        $temporaryExtension = explode('.',$filename);
        $fileExtension = strtolower(end($temporaryExtension));

        $isAllowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileExtension, $isAllowed)){

           if($file_error === 0){

                if($_FILES['image']['size'] > 500000){
                    $errors['image'] = "Your File Size Too Large";
                    $_SESSION['image'] = $errors['image'];
                    header('location: about.php');                    
                }

                $newFileName = uniqid('', true).".".$fileExtension;
                $fileDestination = "uploads/".$newFileName;
                move_uploaded_file($tmp_name, $fileDestination);

                                
           } 

        }else{
            $errors['image'] = "File Type Not Supported";
            $_SESSION['image'] = $errors['image'];
        }
    }

    if(!$errors){

    //sql query
        $query = "INSERT INTO concern(name,ShortDescription,LongDescription,image) VALUES('$concernName','$ShortDescription','$LongDescription','$fileDestination')";

        $result = mysqli_query($connection, $query);

        if($result){
            $_SESSION['outcome'] = "Successfully Inserted New Service"; 
            $_SESSION['type'] = "success";
        }else{
            $_SESSION['outcome'] = "Error: ".mysqli_error($connection);
            $_SESSION['type'] = "danger";
        }          

    }
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
                            <h4 class="card-title mb-4">New Concern</h4>

                                        <?php if(isset($_SESSION['outcome'])){ ?>
                                            <span class="text-<?php echo $_SESSION['type'] ?>">
                                                <?php echo $_SESSION['outcome'] ?>
                                            </span>
                                        <?php }unset($_SESSION['outcome']) ?>                            

                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                      <input type="file" name="image">
                                        <?php if(isset($_SESSION['image'])){ ?>
                                        <span class="text-danger">    
                                            <?php echo $_SESSION['image']; ?>
                                        </span>    
                                        <?php }unset($_SESSION['image']) ?>                                      
                                    </div>
                                </div>   

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="concern_name" class="form-control" id="horizontal-firstname-input">
                                      
                                            <?php if(isset($_SESSION['concern_name'])){ ?>
                                            <span class="text-danger">    
                                                <?php echo $_SESSION['concern_name']; ?>
                                            </span>    
                                            <?php }unset($_SESSION['concern_name']) ?>                   
                                      
                                    </div>
                                </div>                                                            

                               <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Brief Description</label>
                                    <div class="col-sm-9">
                                      <textarea name="description" id="service_details" cols="30" rows="5" style="width:100%;"></textarea>
                                        <?php if(isset($_SESSION['description'])){ ?>
                                        <span class="text-danger">    
                                            <?php echo $_SESSION['description']; ?>
                                        </span>    
                                        <?php }unset($_SESSION['description']) ?>                      
                                    </div>
                                </div>

                               <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Details</label>
                                    <div class="col-sm-9">
                                      <textarea name="details" id="service_details" cols="30" rows="10" style="width:100%;"></textarea>
                                        <?php if(isset($_SESSION['details'])){ ?>
                                        <span class="text-danger">    
                                            <?php echo $_SESSION['details']; ?>
                                        </span>    
                                        <?php }unset($_SESSION['details']) ?>                      
                                    </div>
                                </div>                                

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" name="concern" class="btn btn-primary w-md">Submit</button>
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