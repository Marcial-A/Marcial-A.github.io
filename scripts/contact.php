<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$from = 'From: '+ $name;
	$to = 'marcialararacap@gmail.com';
	$subect = 'Contact Form';

	$body = "From: $name\n Email: $email\n Message:\n $message";

	if ($_POST['submit'] && $human == '4') {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>