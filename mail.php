<?php
if(isset( $_POST['Name']))
$name = $_POST['Name'];

if(isset( $_POST['Email']))
$email = $_POST['Email'];

$content="From: $Name";
$recipient = "simplytekblog@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>