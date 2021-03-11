<?php 
session_start();
include 'database.php';

$username = $password = $email = $contact = $website = $address = $officeHours = $officeClosed = "";


if(isset($_GET['edit_profile_page'])){
    $id = $_GET['id'];

    $errors = array();

    if(empty($_POST['username'])){
        $errors['username'] = "Username Should Not Be Empty";
        $_SESSION['username'] = $errors['username'];
    }else{
        $username = $_POST['username'];
    }

    if(empty($_POST['password'])){
        $errors['password'] = "Password Should Not Be Empty";
        $_SESSION['password'] = $errors['password'];
    }
    else{
        $password = $_POST['password'];
    }

    if(empty($_POST['email'])){
        $errors['email'] = "Please Enter Your Email Address";
        $_SESSION['email'] = $errors['email'];
    }else{
        $email = $_POST['email'];
    }

    if(empty($_POST['contact'])){
       $errors['contact'] = "Please Enter Your Contact Number";
       $_SESSION['contact'] = $errors['contact'];  
    }else{
        $contact = $_POST['contact'];
    }

    if(empty($_POST['website'])){
       $errors['website'] = "Please Enter The Website URL Of Your Company";
       $_SESSION['website'] = $errors['website'];  
    }else{
        $website = $_POST['website'];
    }

    if(empty($_POST['address'])){
       $errors['address'] = "Please Enter The Address Of Your Company";
       $_SESSION['address'] = $errors['address'];  
    }else{
        $address = $_POST['address'];
    }

    $officeHours = $_POST['officeHours'];
    $officeClosed = $_POST['officeClosed']

   $query = "UPDATE profile SET username='$username', password='$password', email='$email', contact='$contact', website='$website', address='$address', officeHours='$officeHours', officeClosed='$officeClosed' WHERE ID=$id";

    $result = mysqli_query($connection, $query);  

    if($result){

        $_SESSION['outcome'] = "Successfully Updated Content"; 
        $_SESSION['type'] = "success";
        header("location: about-page.php");
    } 






}

?>
      