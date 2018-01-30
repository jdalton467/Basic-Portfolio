

<?php 

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form
	// echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email']; ///Collect
$message = $_POST['message'];

//Validate first
if(empty($name) || empty($visitor_email))
{  //Validate
	// echo "Name and email are mandatory!";
	exit;
}

$email_from = "jamesdalton463@gmail.com"; 
$email_subject = "New Form submission";
$email_body = "You have recieved a new message from the user $name. \n".
	"email address: $visitor_email\n".
	"Here is the message:\n $message".
$to = "jamesdalton463@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers); //Send email

