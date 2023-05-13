<?php
use PHPMailer\PHPMailer\PHPMailer;
// Load the PHPMailer library




   // Generate a random 6-digit OTP code
   $otp = rand(100000, 999999);

   // Set the recipient email address
   $to_email = "recipient@example.com";

   // Set up the PHPMailer object
   $mail = new PHPMailer();
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'your-gmail-account@gmail.com';
   $mail->Password = 'your-gmail-password';
   $mail->SMTPSecure = 'tls';
   $mail->Port = 587;

   // Set the email subject and message
   $mail->setFrom('sender@example.com', 'Sender Name');
   $mail->addAddress($to_email);
   $mail->Subject = 'OTP Verification Code';
   $mail->Body = "Your OTP verification code is: " . $otp;

// Send the email with the OTP code
if ($mail->send()) {
    echo "An email with the OTP verification code has been sent to your email address.";
} else {
    echo "Failed to send OTP verification code to your email address. Error: " . $mail->ErrorInfo;
}