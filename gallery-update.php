<?php 
session_start();
include 'database.php';

if(isset($_POST['update_gallery'])){
   $id = $_POST['id'];

   $title = $_POST['image_title'];
   $oldImage = $_POST['oldimage'];

   if(isset($_FILES['gallery_image']['name']) && ($_FILES['gallery_image']['name']!="")){
   	$newImage = "uploads/".$_FILES['gallery_image']['name'];
   	unlink($oldImage);
   	move_uploaded_file($_FILES['gallery_image']['tmp_name'], $newImage);
   }else{
   	$newImage = $oldImage;
   }
   
   $query = "UPDATE gallery SET name='$newImage', title='$title' WHERE ID = $id";

    $result = mysqli_query($connection, $query);  

    if($result){
    	header("location: gallery-item.php");

        $_SESSION['outcome'] = "Successfully Updated"; 
        $_SESSION['type'] = "success";
        
    }

}



?>