<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = 'Casamiento Andre y Leo';
$message = $_POST['message'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "azcine@gmail.com";

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

mail($recipient, $subject, $content, $header, utf8_decode($message)) or die("Error!");
header ("Location: https://casamientoandreayleo.000webhostapp.com/");
?>