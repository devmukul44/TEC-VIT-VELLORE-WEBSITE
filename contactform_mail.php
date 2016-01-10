<?php
$headers = "Content-Type: text/html; charset=UTF-8";
$from = $_POST["email"];
$to = "info@tecvit.in";
//$to = "mukuldev.vit@gmail.com";
$subject = "query form email "."From: ".$from;

$message ="First Name: ".$_POST["fname"]."\n";
$message .="Last Name: ".$_POST["lname"]."\n";
$message .="Project Name: ".$_POST["pname"]."\n";
$message .="email: ".$_POST["email"]."\n";
$message .="MESSAGE: ".$_POST["message"]."\n";

//echo $message;
mail($to,$subject,$message,$headers);
header("location:index.php?err=sent");
?>