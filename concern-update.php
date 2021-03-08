<?php 
session_start();
include 'database.php';

if(isset($_POST['update_concern'])){
   $id = $_POST['id'];

   $concernName = $_POST['concern_name'];
   $shortDescription = $_POST['description'];
   $details = $_POST['details'];
   $oldImage = $_POST['oldimage'];

   if(isset($_FILES['concern_image']['name']) && ($_FILES['concern_image']['name']!="")){
   	$newImage = "uploads/".$_FILES['concern_image']['name'];
   	unlink($oldImage);
   	move_uploaded_file($_FILES['concern_image']['tmp_name'], $newImage);
   }else{
   	$newImage = $oldImage;
   }
   
   $query = "UPDATE concern SET name='$concernName', ShortDescription='$shortDescription', LongDescription='$details', image='$newImage' WHERE ID = $id";

    $result = mysqli_query($connection, $query);  

    if($result){
    	header("location: concern-list.php");

        $_SESSION['outcome'] = "Successfully Updated"; 
        $_SESSION['type'] = "success";
        
    }

}



?>