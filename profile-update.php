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
function test_input($value){
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}

if(isset($_POST['update_profile_page'])){
    $id = $_POST['id'];

    $officeHours = mysqli_escape_string($connection,$_POST['officeHours']);
    $officeClosed = mysqli_escape_string($connection,$_POST['officeClosed']);
    $oldImage = mysqli_escape_string($connection,$_POST['oldimage']);

    if(isset($_FILES['profileimage']['name']) && ($_FILES['profileimage']['name']!="") ){
      $newImage = "uploads/".$_FILES['profileimage']['name'];
      unlink($oldImage);
      move_uploaded_file($_FILES['profileimage']['tmp_name'], $newImage);
     }else{
          $newImage = $oldImage;
      }


    if(empty($_POST['username'])){
        $errors['username'] = "Username Should Not Be Empty";
        $_SESSION['username'] = $errors['username'];
    }else{
        $username = test_input($_POST['username']);
        $username = mysqli_escape_string($connection,$_POST['username']);
    }

    if(empty($_POST['password'])){
        $errors['password'] = "Password Should Not Be Empty";
        $_SESSION['password'] = $errors['password'];
    }else{
        $password = test_input($_POST['password']);
        $password = mysqli_escape_string($connection,$_POST['password']);
    }

    if(empty($_POST['email'])){
        $errors['email'] = "Please Enter Your Email Address";
        $_SESSION['email'] = $errors['email'];
    }else{
        $email = test_input($_POST['email']);
        $email = mysqli_escape_string($connection,$_POST['email']);
    }

    if(empty($_POST['contact'])){
       $errors['contact'] = "Please Enter Your Contact Number";
       $_SESSION['contact'] = $errors['contact'];
    }else{
        $contact = test_input($_POST['contact']);
    }

    if(empty($_POST['website'])){
       $errors['website'] = "Please Enter The Website URL Of Your Company";
       $_SESSION['website'] = $errors['website'];
    }else{
        $website = test_input($_POST['website']);
        $website = mysqli_escape_string($connection,$_POST['website']);
    }

    if(empty($_POST['address'])){
       $errors['address'] = "Please Enter The Address Of Your Company";
       $_SESSION['address'] = $errors['address'];
    }else{
        $address = test_input($_POST['address']);
        $address = mysqli_escape_string($connection,$_POST['address']);
    }

    $query = "UPDATE profile SET image='$newImage', username='$username', password='$password', email='$email', contact='$contact', website='$website', address='$address', officeHours='$officeHours', officeClosed='$officeClosed' WHERE ID=$id";

    $result = mysqli_query($connection, $query);

    if($result){
             $_SESSION['outcome'] = "Successfully Updated Content";
             $_SESSION['type'] = "success";
             header("location: profile.php");
         }else{
           $_SESSION['outcome'] = "Error : ".mysqli_error($connection);
           $_SESSION['type'] = "danger";
           header("location: profile.php");
         }
      }

?>
