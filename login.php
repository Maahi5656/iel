<?php 
session_start();
include 'database.php';

if(isset($_SESSION['admin'])){
    header('location: dashboard.php');
}

?>

<?php

    $username = $password = "";
    $errors = array();

    function test_input($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;    
    }

    if(isset($_POST['loginBtn'])){

        if(empty($_POST['username'])){
            $errors['username'] = "Please Enter Your Username";
            $_SESSION['username'] =  $errors['username']; 
        }else{
            $username = test_input($_POST['username']);
        }

        if(empty($_POST['password'])){
             $errors['password'] = "Please Enter Your Passwords";
             $_SESSION['password'] =  $errors['password']; 
        }else{
            $password = test_input($_POST['password']);
        }

        if(!$errors){
            $sql = "SELECT * FROM profile WHERE username='$username' AND password='$password' ";
            $result = mysqli_query($connection, $sql);

            $row = mysqli_num_rows($result);
            
            if($result){
                if($row>0){
                    $_SESSION['admin'] = 'true';
                    $_SESSION['username'] = $username;
                    header("location: dashboard.php");
                }else{
                    $_SESSION['loginErrors'] = "Wrong Username Or Password";
                    header("location: login.php");
                    exit();
                }                
            }

        }
    }

?>


<!doctype html>

<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2021 15:40:39 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary pt-4 pl-4 pr-0">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Admin Panel.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-5"> 

                                 <?php if(isset($_SESSION['loginErrors'])): ?>
                                        <span class="text-danger">
                                            <?= $_SESSION['loginErrors']  ?>
                                        </span>
                                    <?php endif;?>

                                        <?php 
                                            unset($_SESSION['loginErrors']);
                                        ?>
                                <div class="p-2">
                                    <form class="form-horizontal" action="" method="post">
        
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">

                                            <?php if(isset($_SESSION['username'])){ ?>
                                            <span class="text-danger">
                                                <?php echo $_SESSION['username']; ?>
                                            </span>
                                            <?php }unset($_SESSION['username']) ?>                                            
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">

                                            <?php if(isset($_SESSION['password'])){ ?>
                                            <span class="text-danger">
                                                <?php echo $_SESSION['password']; ?>
                                            </span>
                                            <?php }unset($_SESSION['password']) ?>                                            
                                        </div>

                                        <div class="mt-1 text-left">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-12 py-3">
                                        <input type="submit" name="loginBtn" class="btn btn-primary w-md" value="Login">
                                    </div>                                        
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <!-- <div class="mt-5 text-center">
                            
                            <div>
                                <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <?php include 'inc/footer.php'   ?> 
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2021 15:40:39 GMT -->
</html>
