<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

$mail= new PHPMailer(true);
$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Port=587;
$mail->Username   = 'bsubhadip054@gmail.com'; 
$mail->Password   = 'fsmw shhb cpzg mikl'; 


$mail->setFrom('bsubhadip054@gmail.com','Ecommerce');

$mail->addAddress('subhajitkajli789@gmail.com','Subhajit');

$mail->isHTML(true);
$mail->CharSet='UTF-8';


$mail->Subject='Welcome';
$mail->Body="Thank you for choosing this website, Keep purches...";

$mail->send();
if(!$mail->send()){
    echo $mail->ErrorInfo;
}
else{
    echo "Successfully Send the Mail.";
}
  
?>
