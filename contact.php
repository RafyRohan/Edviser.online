<?php

// Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aliraza032047@gmail.com';
        $mail->Password = 'xfag yafi dbtr kqmi'; // Replace with actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('aliraza032047@gmail.com', 'Contact Form');
        $mail->addAddress('rafyrohan11@gmail.com', 'Our Website');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Test contact form';
        $mail->Body = "Sender Name: $name <br> Sender Email: $email <br> Subject: $subject <br> Message: $message";

        $mail->send();
        echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
        exit;
    } catch (Exception $e) {
        echo "<div class='error-message'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
} else {
    echo "<div class='error-message'>All fields are required.</div>";
}
?>
