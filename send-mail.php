<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

// -------------------------------------------
// VALIDATION FUNCTIONS
// -------------------------------------------
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isSpam($message, $email) {
    // Check for common spam patterns
    $spamKeywords = ['viagra', 'casino', 'lottery', 'winner', 'click here', 'buy now', 'limited time'];
    $messageLower = strtolower($message);
    
    foreach ($spamKeywords as $keyword) {
        if (strpos($messageLower, $keyword) !== false) {
            return true;
        }
    }
    
    // Check for too many URLs
    if (substr_count($message, 'http') > 3) {
        return true;
    }
    
    // Check for suspicious email domains
    $suspiciousDomains = ['tempmail', 'throwaway', 'guerrillamail', 'mailinator'];
    foreach ($suspiciousDomains as $domain) {
        if (strpos(strtolower($email), $domain) !== false) {
            return true;
        }
    }
    
    return false;
}

function rateLimitCheck() {
    $maxSubmissions = 3; // Max submissions
    $timeWindow = 3600; // 1 hour in seconds
    
    if (!isset($_SESSION['form_submissions'])) {
        $_SESSION['form_submissions'] = [];
    }
    
    // Clean old submissions
    $_SESSION['form_submissions'] = array_filter(
        $_SESSION['form_submissions'],
        function($timestamp) use ($timeWindow) {
            return (time() - $timestamp) < $timeWindow;
        }
    );
    
    // Check if limit exceeded
    if (count($_SESSION['form_submissions']) >= $maxSubmissions) {
        return false;
    }
    
    // Add current submission
    $_SESSION['form_submissions'][] = time();
    return true;
}

// -------------------------------------------
// MAIN PROCESSING
// -------------------------------------------

// Check if form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /contact.php?status=invalid_request");
    exit;
}

// Get form data
$name = sanitizeInput($_POST['name'] ?? '');
$email = sanitizeInput($_POST['email'] ?? '');
$message = sanitizeInput($_POST['message'] ?? '');
$company = sanitizeInput($_POST['company'] ?? 'N/A');
$redirectUrl = $_POST['redirect_url'] ?? '/contact.php';
$source = sanitizeInput($_POST['source'] ?? 'direct');
$captchaAnswer = sanitizeInput($_POST['captcha_answer'] ?? '');

// -------------------------------------------
// VALIDATION CHECKS
// -------------------------------------------

// Check required fields
if (empty($name) || empty($email) || empty($message)) {
    header("Location: {$redirectUrl}?status=error");
    exit;
}

// Validate CAPTCHA
if (empty($captchaAnswer)) {
    header("Location: {$redirectUrl}?status=captcha_empty");
    exit;
}

// Debug: Log the values
error_log("User Answer: " . $captchaAnswer);
error_log("Session Answer: " . (isset($_SESSION['captcha_answer']) ? $_SESSION['captcha_answer'] : 'NOT SET'));

if (!isset($_SESSION['captcha_answer'])) {
    header("Location: {$redirectUrl}?status=captcha_expired");
    exit;
}

// Convert both to integers for comparison
$userAnswer = intval($captchaAnswer);
$correctAnswer = intval($_SESSION['captcha_answer']);

if ($userAnswer !== $correctAnswer) {
    header("Location: {$redirectUrl}?status=captcha_failed");
    exit;
}

// Clear used CAPTCHA
unset($_SESSION['captcha_answer']);

// Check honeypot field
if (!empty($_POST['website'])) {
    // Bot detected, silently reject
    header("Location: {$redirectUrl}?status=success");
    exit;
}

// Validate email format
if (!validateEmail($email)) {
    header("Location: {$redirectUrl}?status=invalid");
    exit;
}

// Validate name length
if (strlen($name) < 2 || strlen($name) > 100) {
    header("Location: {$redirectUrl}?status=invalid_name");
    exit;
}

// Validate message length
if (strlen($message) < 10 || strlen($message) > 5000) {
    header("Location: {$redirectUrl}?status=invalid_message");
    exit;
}

// Check for spam content
if (isSpam($message, $email)) {
    error_log("Spam attempt from: $email - $name");
    header("Location: {$redirectUrl}?status=spam_detected");
    exit;
}

// Rate limiting check
if (!rateLimitCheck()) {
    header("Location: {$redirectUrl}?status=rate_limit");
    exit;
}

// -------------------------------------------
// SEND EMAIL
// -------------------------------------------
$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'erpsecurityexperts.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@erpsecurityexperts.com';
    $mail->Password   = 'o8G!y]Qzp50f'; // Add your password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // SEND TO ADMIN
    $mail->setFrom('noreply@erpsecurityexperts.com', 'ERP Contact Form');
    $mail->addAddress('asiddiqui@erpsecurityexperts.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body    = "
        <div style='font-family: Arial, sans-serif; max-width: 600px;'>
            <h2 style='color: #030F47;'>New Contact Form Submission</h2>
            <table style='width: 100%; border-collapse: collapse;'>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Source:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$source</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Name:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$name</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Email:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$email</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Company:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$company</td>
                </tr>
                <tr>
                    <td style='padding: 10px; vertical-align: top;'><strong>Message:</strong></td>
                    <td style='padding: 10px;'>" . nl2br($message) . "</td>
                </tr>
            </table>
            <p style='margin-top: 20px; color: #666; font-size: 12px;'>
                Submitted on: " . date('Y-m-d H:i:s') . "<br>
                IP Address: " . $_SERVER['REMOTE_ADDR'] . "
            </p>
        </div>
    ";

    $mail->send();

    // SEND THANK-YOU TO USER
    $mail->clearAllRecipients();
    $mail->setFrom('noreply@erpsecurityexperts.com', 'ERP Security Experts');
    $mail->addAddress($email, $name);

    $mail->Subject = 'Thank you for contacting us';
    $mail->Body = "
        <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6; max-width: 600px;'>
            <h2 style='color: #030F47;'>Hello $name,</h2>
            <p>Thank you for getting in touch with us! We appreciate you taking the time to reach out.</p>
            <p>Our team at <strong>ERP Security Experts</strong> is reviewing your message and will respond as soon as possible.</p>
            <p>In the meantime, feel free to explore our website or contact us if you have any urgent queries.</p>
            <p>We value your interest and look forward to assisting you.</p>
            <br>
            <p>Warm regards,<br><strong>ERP Security Experts Team</strong></p>
            <hr style='margin: 20px 0; border: none; border-top: 1px solid #ddd;'>
            <p style='color: #666; font-size: 12px;'>
                This is an automated response. Please do not reply to this email.<br>
                If you need immediate assistance, please contact us directly.
            </p>
        </div>
    ";

    $mail->send();

    // SEND USER INFO TO BOFFINBRAINS
    $mail->clearAllRecipients();
    $mail->addAddress('boffinbrains@gmail.com', 'ERP User Info');

    $mail->Subject = "New Contact Form Submission: $name";
    $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px;'>
            <h2 style='color: #030F47;'>User Contact Details</h2>
            <table style='width: 100%; border-collapse: collapse;'>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Name:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$name</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Email:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$email</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Company:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$company</td>
                </tr>
                <tr>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Source:</strong></td>
                    <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$source</td>
                </tr>
                <tr>
                    <td style='padding: 10px; vertical-align: top;'><strong>Message:</strong></td>
                    <td style='padding: 10px;'>" . nl2br($message) . "</td>
                </tr>
            </table>
        </div>
    ";

    $mail->send();

    header("Location: {$redirectUrl}?status=success");
    exit;

} catch (Exception $e) {
    error_log("Mail Error: " . $mail->ErrorInfo);
    header("Location: {$redirectUrl}?status=failed");
    exit;
}