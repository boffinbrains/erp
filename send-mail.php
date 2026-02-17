<?php
session_start();

// ✅ TEMPORARY: Session reset karne ke liye browser mein ye open karo:
// http://localhost/yourfolder/send-mail.php?reset_session=1
// Kaam ho jaye toh is block ko hata dena
if (isset($_GET['reset_session'])) {
    unset($_SESSION['form_submissions']);
    unset($_SESSION['form_submissions_contact']);
    unset($_SESSION['form_submissions_home']);
    echo "✅ Session cleared! Ab form submit kar sakte ho.";
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

// -------------------------------------------
// AUTO BASE URL DETECTION
// Local:  http://localhost/erp/
// Live:   https://erpsecurityexperts.com/
// Koi hardcode nahi - automatically detect hoga!
// -------------------------------------------
function getBaseUrl()
{
    $protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host      = $_SERVER['HTTP_HOST'];
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    if ($scriptDir !== '/') {
        $scriptDir = rtrim($scriptDir, '/') . '/';
    }
    return $protocol . '://' . $host . $scriptDir;
}

$baseUrl = getBaseUrl();

// -------------------------------------------
// VALIDATION FUNCTIONS
// -------------------------------------------
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isSpam($message, $email)
{
    $spamKeywords = ['viagra', 'casino', 'lottery', 'winner', 'click here', 'buy now', 'limited time'];
    $messageLower = strtolower($message);
    foreach ($spamKeywords as $keyword) {
        if (strpos($messageLower, $keyword) !== false) return true;
    }
    if (substr_count($message, 'http') > 3) return true;
    $suspiciousDomains = ['tempmail', 'throwaway', 'guerrillamail', 'mailinator'];
    foreach ($suspiciousDomains as $domain) {
        if (strpos(strtolower($email), $domain) !== false) return true;
    }
    return false;
}

function rateLimitCheck($page = 'contact')
{
    $maxSubmissions = 10;   // 10 submissions allowed
    $timeWindow     = 3600; // per hour
    $sessionKey     = 'form_submissions_' . $page; // alag key har page ke liye

    if (!isset($_SESSION[$sessionKey])) {
        $_SESSION[$sessionKey] = [];
    }

    // Purane submissions clean karo
    $_SESSION[$sessionKey] = array_filter(
        $_SESSION[$sessionKey],
        function ($timestamp) use ($timeWindow) {
            return (time() - $timestamp) < $timeWindow;
        }
    );

    if (count($_SESSION[$sessionKey]) >= $maxSubmissions) return false;
    $_SESSION[$sessionKey][] = time();
    return true;
}

// -------------------------------------------
// MAIN PROCESSING
// -------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: {$baseUrl}contact.php?status=invalid_request");
    exit;
}

// 'page' field se pata chalega user kahan tha (home ya contact)
$sourcePage   = sanitizeInput($_POST['page'] ?? 'contact');
$redirectPage = ($sourcePage === 'home') ? 'index.php' : 'contact.php';
$redirectUrl  = $baseUrl . $redirectPage;

// Get form data
$name          = sanitizeInput($_POST['name']           ?? '');
$email         = sanitizeInput($_POST['email']          ?? '');
$message       = sanitizeInput($_POST['message']        ?? '');
$company       = sanitizeInput($_POST['company']        ?? 'N/A');
$source        = sanitizeInput($_POST['source']         ?? 'direct');
$captchaAnswer = sanitizeInput($_POST['captcha_answer'] ?? '');

// -------------------------------------------
// VALIDATION CHECKS
// -------------------------------------------
if (empty($name) || empty($email) || empty($message)) {
    header("Location: {$redirectUrl}?status=error");
    exit;
}

if (empty($captchaAnswer)) {
    header("Location: {$redirectUrl}?status=captcha_empty");
    exit;
}

error_log("Base URL: " . $baseUrl);
error_log("Redirect URL: " . $redirectUrl);
error_log("User Answer: " . $captchaAnswer);
error_log("Session Answer: " . (isset($_SESSION['captcha_answer']) ? $_SESSION['captcha_answer'] : 'NOT SET'));

if (!isset($_SESSION['captcha_answer'])) {
    header("Location: {$redirectUrl}?status=captcha_expired");
    exit;
}

$userAnswer    = intval($captchaAnswer);
$correctAnswer = intval($_SESSION['captcha_answer']);

if ($userAnswer !== $correctAnswer) {
    header("Location: {$redirectUrl}?status=captcha_failed");
    exit;
}

unset($_SESSION['captcha_answer']);

// Honeypot check
if (!empty($_POST['website'])) {
    header("Location: {$redirectUrl}?status=success");
    exit;
}

if (!validateEmail($email)) {
    header("Location: {$redirectUrl}?status=invalid");
    exit;
}

if (strlen($name) < 2 || strlen($name) > 100) {
    header("Location: {$redirectUrl}?status=invalid_name");
    exit;
}

if (strlen($message) < 10 || strlen($message) > 5000) {
    header("Location: {$redirectUrl}?status=invalid_message");
    exit;
}

if (isSpam($message, $email)) {
    error_log("Spam attempt from: $email - $name");
    header("Location: {$redirectUrl}?status=spam_detected");
    exit;
}

if (!rateLimitCheck($sourcePage)) {
    header("Location: {$redirectUrl}?status=rate_limit");
    exit;
}

// -------------------------------------------
// SEND EMAIL
// -------------------------------------------
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'erpsecurityexperts.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@erpsecurityexperts.com';
    $mail->Password   = 'o8G!y]Qzp50f';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Admin ko email
    $mail->setFrom('noreply@erpsecurityexperts.com', 'ERP Contact Form');
    $mail->addAddress('boffinbrains@gmail.com');
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

    // User ko thank-you email
    $mail->clearAllRecipients();
    $mail->setFrom('noreply@erpsecurityexperts.com', 'ERP Security Experts');
    $mail->addAddress($email, $name);
    $mail->Subject = 'Thank you for contacting us';
    $mail->Body    = "
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

    // Boffinbrains ko user info
    $mail->clearAllRecipients();
    $mail->addAddress('boffinbrains@gmail.com', 'ERP User Info');
    $mail->Subject = "New Contact Form Submission: $name";
    $mail->Body    = "
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
