<?php 

    $name = $_POST['contact_name'];
    $email = $_POST['contact_name'];
    $subject = "site Contact";
	$message = $_POST['message'];
	
	$to = "kdjk@gmail.com";
	$from = $email; 
	$fromName = $name;
 
	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	// Additional headers 
	$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
	$headers .= 'Cc: dipudey808@gmail.com' . "\r\n"; 
	$headers .= 'Bcc: dipudey808@gmail.com' . "\r\n";
	// Send email 
		
	$content = $message;
	$mail = mail($to, $subject, $content, $headers);
	if($mail) {
		header("Location: contact.php");
	}


?>