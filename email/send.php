<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if((isset($_POST['submit']))){
    $email=$_POST['email'];

$mail = new PHPMailer(true);                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'metrosystem740@gmail.com';                     
    $mail->Password   = 'thhffgqlxxbxxbyz';                               
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;      

    $mail->setFrom('metrosystem740@gmail.com');
    $mail->addAddress($_POST['email']);     
    $mail->isHTML(true);       
    $key= rand (1000,9999);    
    $mail->Subject = 'METRO FOR STUDENTS';
    $mail->Body    = 'code verification'.$key;

    $mail->send();
    echo 'Message has been sent';

}