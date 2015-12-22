<?php
$headers = "Content-Type: text/html; charset=UTF-8";
//$to = "info@tecvit.in";
$to = "devmukul44@gmail.com";
$subject = "contact form email "."From: ".$_POST["email"];

$message ="First Name: ".$_POST["fname"]."\n";
$message .="Last Name: ".$_POST["lname"]."\n";
$message .="Project Name: ".$_POST["pname"]."\n";
$message .="email: ".$_POST["email"]."\n";
$message .="MESSAGE: ".$_POST["message"]."\n";

echo $message;
mail($to,$subject,$message,$headers);
header("location:index.php?err=sent");
?>