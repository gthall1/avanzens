<?php

$name = $_POST['name'];
$country = $_POST['country'];
$code = $_POST['code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];
$formcontent="From: $name \n Country: $country \n Code: $code \n Phone: $phone \n Email: $email \n Company: $company \n Message: $message";
$recipient = "sales@meranticonsulting.com";
$subject = "Website Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


header("Location: thanks.html");

?>

