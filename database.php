<?php 

require_once('config.php');

    $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if(!$connection){
    	die("Connection Failed :".mysqli_error());
     }
     //else{
    // 	echo "Connected Successfully";
    // }


?>