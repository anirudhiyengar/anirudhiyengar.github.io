<?php 

$myemail = 'ani.s18@gmail.com';//<-----Put Your email address here.

$name = $_POST['name'];
print_r($_POST); 
$email_address = Trim(stripslashes($_POST['email'])); 
print_r($_POST);
$message = Trim(stripslashes($_POST['message'])); 
print_r($_POST);



	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	


 
?>