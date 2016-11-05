<?php 

session_start();
$errors = [];

if(isset($_POST['name'],$_POST['email'], $_POST['message'])) {

    $fields = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
    ];
}




$myemail = 'ani.s18@gmail.com';//<-----Put Your email address here.

$name = $_POST['name']; 
$email_address = Trim(stripslashes($_POST['email'])); 
$message = Trim(stripslashes($_POST['message'])); 

	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	$send = mail($to,$email_subject,$email_body,$headers);

	if ($go){
		print("Success!");
	}
	else{
		print("Unable to send!!");
	}
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
 
?>