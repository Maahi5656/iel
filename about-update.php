<?php 
session_start();
include 'database.php';

if(isset($_POST['about-update'])){
   $id = $_POST['id'];

   $details = $_POST['details']; 
   $oldImage1 = $_POST['oldimage1'];
   $oldImage2 = $_POST['oldimage2'];
   $oldImage3 = $_POST['oldimage3'];

   if(isset($_FILES['about_image1']['name']) && ($_FILES['about_image1']['name']!="")){
   	$newImage1 = "uploads/".$_FILES['about_image1']['name'];
   	unlink($oldImage1);
   	move_uploaded_file($_FILES['about_image1']['tmp_name'], $newImage1);
   }else{
   	$newImage1 = $oldImage1;
   } 

   if(isset($_FILES['about_image2']['name']) && ($_FILES['about_image2']['name']!="")){
   	$newImage2 = "uploads/".$_FILES['about_image2']['name'];
   	unlink($oldImage2);
   	move_uploaded_file($_FILES['about_image2']['tmp_name'], $newImage2);
   }else{
   	$newImage2 = $oldImage2;
   }

   if(isset($_FILES['about_image3']['name']) && ($_FILES['about_image3']['name']!="")){
   	$newImage3 = "uploads/".$_FILES['about_image3']['name'];
   	unlink($oldImage3);
   	move_uploaded_file($_FILES['about_image3']['tmp_name'], $newImage3);
   }else{
   	$newImage3 = $oldImage3;
   }


   $query = "UPDATE about SET description='$details', image='$newImage1', image2='$newImage2', image3='$newImage3' WHERE ID=$id";

    $result = mysqli_query($connection, $query);  

    if($result){

        $_SESSION['outcome'] = "Successfully Updated Content"; 
        $_SESSION['type'] = "success";
        header("location: about-page.php");
    }          

}




?>