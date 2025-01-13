<?php
// Include database connection
include('db1_connection.php');
global $conn;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

if (isset($_POST['submit_email'])) {
    $email = $_POST['email'];

    // Check if email exists in the database
    $sql = "SELECT * FROM data WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);
        // $expiry = date("d-m-Y H:i:s", strtotime("+1 minutes"));

        // Update the OTP and expiry in the database
        $update_sql = "UPDATE data SET otp = '".$otp."' WHERE email = '".$email."'";
        mysqli_query($conn, $update_sql);

        // Send OTP to the email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bsubhadip054@gmail.com'; // Replace with your email
            $mail->Password = 'fsmw shhb cpzg mikl'; // Replace with your email password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //Recipients
            $mail->setFrom('bsubhadip054@gmail.com', 'GadgetGalaxy');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset OTP';
            $mail->Body = "Hello,<br><br>Your OTP for reset password : <b>$otp</b><br><br>This OTP will expire in 1 minutes.";

            // Send email
            if ($mail->send()) {
                header("Location: verify-otp.php?email=$email"); // Redirect to OTP verification page
                exit();
            }
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "<p class='text-center'>No account found with that email address.</p>";
    }
}
?>
