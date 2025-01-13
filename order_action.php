<?php
// Include database connection
include('db1_connection.php'); // Update with your actual database connection file

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate inputs
    $fullname = $conn->real_escape_string(trim($_POST['fullname']));
    $phone = $conn->real_escape_string(trim($_POST['phone']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $pincode = $conn->real_escape_string(trim($_POST['pincode']));
    $address = $conn->real_escape_string(trim($_POST['address']));
    $paymentMethod = isset($_POST['paymentMethod']) ? $conn->real_escape_string($_POST['paymentMethod']) : null;

    // Basic validation
    // if (empty($fullname) || empty($phone) || empty($email) || empty($pincode) || empty($address) || empty($paymentMethod)) {
    //     die("All fields are required. Please go back and fill out the form.");
    // }

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     die("Invalid email format. Please go back and enter a valid email.");
    // }

    // if (!preg_match('/^\d{10}$/', $phone)) {
    //     die("Invalid phone number. Please enter a 10-digit phone number.");
    // }
    
    if (empty($fullname) || empty($phone) || empty($email) || empty($pincode) || empty($address) || empty($paymentMethod)) {
        echo "<script>alert('All fields are required. Please fill out the form.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format. Please enter a valid email.'); window.history.back();</script>";
        exit;
    }

    if (!preg_match('/^\d{10}$/', $phone)) {
        echo "<script>alert('Invalid phone number. Please enter a 10-digit phone number.'); window.history.back();</script>";
        exit;
    }
    


    // Insert into database
    $sql = "INSERT INTO orders (fullname, phone, email, pincode, address, payment_method) 
            VALUES ('$fullname', '$phone', '$email', '$pincode', '$address', '$paymentMethod')";

    if ($conn->query($sql) === TRUE) {
        echo "Order successfully placed!";

        // Send email confirmation
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email credentials
            $mail->Username = 'bsubhadip054@gmail.com'; // Sender's email address
            $mail->Password = 'fsmw shhb cpzg mikl';    // Sender's app password (ensure it's correct and active)

            // Sender and recipient
            $mail->setFrom('bsubhadip054@gmail.com', 'Ecommerce'); // From
            $mail->addAddress($email, $fullname);                 // To (user's email from form)

            // Email content
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Order Confirmation';
            $mail->Body = "
                <h1>Thank you for your order!</h1>
                <p>Dear $fullname,</p>
                <p>We have received your order with the following details:</p>
                <ul>
                    <li><strong>Full Name:</strong> $fullname</li>
                    <li><strong>Phone:</strong> $phone</li>
                    <li><strong>Email:</strong> $email</li>
                    <li><strong>Address:</strong> $address</li>
                    <li><strong>Payment Method:</strong> $paymentMethod</li>
                </ul>
                <p>Thank you for choosing our platform! Your order will be processed shortly.</p>
            ";

            $mail->send();
            echo "Order confirmation email sent to $email.";
        } catch (Exception $e) {
            echo "Order placed, but email could not be sent. Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
