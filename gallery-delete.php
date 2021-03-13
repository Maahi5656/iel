<?php 
session_start();
include 'database.php';

if(isset($_GET['delete'])){
	$id = $_GET['delete'];

	$query = "DELETE FROM gallery WHERE ID = $id";
	$result = mysqli_query($connection, $query);

	if($result){
		$_SESSION['outcome'] = "Gallery Image Deleted Successfully";
		$_SESSION['type'] = "danger";

	header('location: gallery-item.php');	
	}
}

?>