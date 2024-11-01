<?php
// Recipient's email address
$to = "recipient@example.com";

// Subject of the email
$subject = "Test Email from PHP";

// Email body content
$message = "Hello! This is a test email sent from a PHP script.";

// Sender's email address and name
$senderEmail = "sender@example.com";
$senderName = "Sender Name";

// Headers to define sender with a name and reply-to
$headers = "From: " . $senderName . " <" . $senderEmail . ">\r\n" .
           "Reply-To: " . $senderEmail . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Sending the email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send the email.";
}
?>
