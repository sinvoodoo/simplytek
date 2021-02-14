<?php
if(isset( $_POST['Your Name']))
$name = $_POST['Your Name'];

if(isset( $_POST['Your Email']))
$email = $_POST['Your Email'];

$content="From: $name";
$recipient = "simplytekblog@gmail.com";
$subject = "My subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>