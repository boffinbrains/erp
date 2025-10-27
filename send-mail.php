<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$company = $_POST['company'] ?? 'N/A';
$redirectUrl = $_POST['redirect_url'] ?? '/';
$source = $_POST['source'] ?? 'direct';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'boffinbrains@gmail.com';
    $mail->Password   = 'rbcsbphkrukjofiu';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom($email, $name);
    $mail->addAddress('boffinbrains@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body    = "
        <div style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>
            <div style='max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; padding: 30px;'>
                <h2 style='color: #333;'>New Contact Form Submission</h2>
                <p><strong>Source:</strong> $source</p>
                <hr style='border: none; border-top: 1px solid #eee; margin: 20px 0;'>

                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Company:</strong> $company</p>
                <p><strong>Contact Number:</strong> $contact</p>
                
                <p><strong>Message:</strong></p>
                <div style='background: #f9f9f9; padding: 15px; border-left: 4px solid #007BFF; margin-top: 10px;'>
                    $message
                </div>

                <p style='margin-top: 30px; color: #777;'>This message was sent via the BoffinBrains contact form.</p>
            </div>
        </div>
    ";

    $mail->send();

    $mail->clearAllRecipients();
    $mail->setFrom('boffinbrains@gmail.com', 'BoffinBrains');
    $mail->addAddress($email, $name);
    $mail->Subject = 'Thank you for contacting BoffinBrains';
    $mail->Body = "
        <div style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;'>
            <div style='max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 10px;'>
                <h2 style='color: #4CAF50;'>Thank You, $name</h2>
                <p style='font-size: 16px; color: #333;'>We have received your message and our team will get back to you shortly.</p>

                <h3 style='margin-top: 30px; color: #333;'>Your Message:</h3>
                <div style='background-color: #f9f9f9; padding: 15px; border-left: 4px solid #4CAF50;'>
                    $message
                </div>

                <p style='margin-top: 30px; color: #555;'>If you have any urgent queries, feel free to reach out to us at 
                <a href='mailto:boffinbrains@gmail.com'>boffinbrains@gmail.com</a>.</p>

                <p style='margin-top: 40px; color: #aaa; font-size: 12px;'>— The BoffinBrains Team</p>
            </div>
        </div>
    ";

    $mail->send();

    header("Location: {$redirectUrl}?status=success");
    exit;
} catch (Exception $e) {
    header("Location: {$redirectUrl}?status=error&msg=" . urlencode($mail->ErrorInfo));
    exit;
}
