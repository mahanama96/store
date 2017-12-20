<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
$txt="Hello";
$to="dmggamachchi@gmail.com";
$subject="Customer Message";
$headers = "From: $firstname $lastname $email" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$message,$headers);
//mail($to, $subject, $txt, "From: .$firstname . $lastname . $email");
echo "Your message has been sent";
?>