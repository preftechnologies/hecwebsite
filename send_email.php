<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include the PHPMailer classes
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'a.haleemshinwari@gmail.com'; // SMTP username
    $mail->Password   = 'xbsbxpbvhgrctxgi'; // Your App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
    $mail->Port       = 465; // TCP port to connect to

    // Recipients
    // Recipients
$mail->setFrom('a.haleemshinwari@gmail.com', 'Customer mail');
$mail->addAddress('a.haleemshinwari@gmail.com'); // Correct recipient

    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";

    // Send the email
    $mail->send();
    echo '<script>alert("Message has been sent successfully. We will contact you soon."); window.location.href = "index.php";</script>';
} catch (Exception $e) {
    echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '"); window.location.href = "index.php";</script>';
}
?>
