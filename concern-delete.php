<?php 
session_start();
include 'database.php';

if(isset($_GET['delete'])){
	$id = $_GET['delete'];

	$query = "DELETE FROM concern WHERE ID = $id";
	$result = mysqli_query($connection, $query);

	if($result){
		$_SESSION['outcome'] = "Concern Deleted Successfully";
		$_SESSION['type'] = "danger";

	header('location: concern-list.php');	
	}

}


?>