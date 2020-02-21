<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = 'Casamiento Andre y Leo';
$message = ''

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "azcine@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
header ("Location: Casamiento Andre y Leo");
?>