<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "adrianneagu309@gmail.com";
$subject = "New Contact Form Submission";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

header('Location:/ProiectDAW/index.php');

?>
