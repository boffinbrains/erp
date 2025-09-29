<?php

$to = "boffinbrains@gmail.com";
$subject = "Test Email";
$message = "This is a test email from PHP mail function";
$headers = "From: test@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully! Check your inbox.";
} else {
    echo "Failed to send email. PHP mail() is not configured properly.";
    echo "<br><br>";
    echo "Possible reasons:<br>";
    echo "1. Your hosting doesn't have mail server configured<br>";
    echo "2. You need to use SMTP (PHPMailer)<br>";
    echo "3. Mail function is disabled in php.ini<br>";
}

echo "<br><br>";
echo "Server Info:<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
