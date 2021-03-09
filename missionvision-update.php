<?php  
session_start();
include 'database.php';

if(isset($_POST['update_mv'])){
  
  $mission = mysqli_escape_string($connection,$_POST['mission']);
  $vision = mysqli_escape_string($connection,$_POST['vision']);
  $oldImage = mysqli_escape_string($connection,$_POST['oldimage']); 

  if(isset($_FILES['mvimage']['name']) && ($_FILES['mvimage']['name']!="")){
	   	$newImage = "uploads/".$_FILES['mvimage']['name'];
	   	unlink($oldImage);
	   	move_uploaded_file($_FILES['mvimage']['tmp_name'], $newImage);
   }else{
   	    $newImage = $oldImage;
    }
   
   $query = "UPDATE missionvision SET image='$newImage', mission='$mission', vision='$vision' WHERE ID = 1";
   

  
   $result = mysqli_query($connection, $query);

   if($result){

    $_SESSION['outcome'] = "Successfully Updated Content"; 
    $_SESSION['type'] = "success";
    header("location: missionvision-page.php");
   }

}




?>