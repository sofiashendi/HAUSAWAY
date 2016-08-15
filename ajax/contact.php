<?php
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	#$phone = $_POST['phone'];
	$message = $_POST['message'];
		
	// Create the email and send the message
	$to = 'info@hausaway.com';
	$email_subject = "HAUS/AWAY CONTACT";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
	$headers = "From: $email_address\n";
	$headers .= "Reply-To: $email_address";	
	mail($to,$email_subject,$email_body,$headers);
	#mail('info@sofiashendi.com','Subject of the e-mail','This is the body of the e-mail!', 'info@hausaway.com');
	return true;		
?>