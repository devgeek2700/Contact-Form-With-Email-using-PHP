<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'config.php'; // Make sure this file contains the necessary constants.

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendMail($senderName, $senderEmail, $subject, $message)
{
    try {
        // Creating a new PHPMailer object.
        $mail = new PHPMailer(true);

        // Set TLS connection options
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
                'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT,
            ],
        ];

        // Using the SMTP protocol to send the email.
        $mail->isSMTP();

        // Enable debugging (if needed)
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // SMTP authentication
        $mail->SMTPAuth = true;
        $mail->Host = MAILHOST;
        $mail->Username = USERNAME;
        $mail->Password = PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use ENCRYPTION_SMTPS for SSL
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
        $mail->addAddress($senderEmail);
        $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);

        // Email content
        $mail->isHTML(true);

        // Format the email body
        $emailBody = "<p><strong>Name:</strong> {$senderName}</p>";
        $emailBody .= "<p><strong>Email:</strong> {$senderEmail}</p>";
        $emailBody .= "<p><strong>Subject:</strong> {$subject}</p>";
        $emailBody .= "<p><strong>Message:</strong> {$message}</p>";

        $mail->Subject = $subject;
        $mail->Body = $emailBody;
        $mail->AltBody = $message;

        // Set the content type to HTML
        $mail->ContentType = 'text/html; charset=utf-8';

        // Send the email
        $mail->send();

        header("Location: success_page.php");
        exit; // Make sure to exit to prevent further execution
    } catch (Exception $e) {
        return "Email not sent. Error: " . $mail->ErrorInfo;
    }
}
