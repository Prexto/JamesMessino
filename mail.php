<?php
$name = $_POST['name']
$email = $_POST['email']
$phone = $_POST['phone']
$message = $_POST['message']

$header = 'From: ' . $email . "\r\n";
$header = "X-Mailer: PHP/ " . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$message = "Message sent by: " . $name . "\r\n";
$message = "Email is: " . $email . "\r\n";
$message = "Phone Contact: " . $phone . "\r\n"
$message = "Message: " . $_POST['message'] . "\r\n";
$message = "Sent: " . date('d/m/Y', time());

$to = 'janberberdu21@gmail.com';
$subject = "I am interested in your work";

mail($to, $subject, utf8_decode($message),$header)

header("Location:index.html");
?>