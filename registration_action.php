<?php
include('db1_connection.php'); // Include your database connection script
global $conn;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['upass']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['urepass']);
    $image = $_FILES['image']['name'];

    // Validate form data
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Check for duplicate email
    $check_email_query = "SELECT * FROM data WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('User already exists with this email. Please use a different email.'); window.location.href = 'registration.php';</script>";
        exit;
    }

    // Directories for images
    $target_dir = "images/";                 // Folder to store uploaded images
    $default_image_dir = "assets/img/";  // Folder containing default images
    $default_image_name = "no-image.png";    // Default image name
    $uploadOk = 1;

    if (!empty($image)) {
        // If the user uploads an image
        $target_file = $target_dir . basename($image);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $valid_extensions = array("jpg", "jpeg", "png", "gif");

        // Check if it's a valid image file
        if (in_array($imageFileType, $valid_extensions)) {
            // Move uploaded file to server
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "There was an error uploading your file.";
                exit;
            }
        } else {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            exit;
        }
    } else {
        // If no image uploaded, copy the default image from 'default_images/' to 'images/'
        $default_image_source = $default_image_dir . $default_image_name;
        $target_file = $target_dir . $default_image_name;

        // Check if default image exists in the default_images folder
        if (file_exists($default_image_source)) {
            // Copy the default image to the images folder
            if (!copy($default_image_source, $target_file)) {
                echo "Error copying the default image.";
                exit;
            }
        } else {
            echo "Default image not found in '$default_image_dir'.";
            exit;
        }

        // Set the image name to the default image name
        $image = $default_image_name;
    }

    // Insert the user into the database
    $sql = "INSERT INTO data (name, email, password, image) VALUES ('$name', '$email', '$confirm_password', '$image')";

    if (mysqli_query($conn, $sql)) {
        // Send Welcome Email using PHPMailer
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
            $mail->Subject = 'Welcome to GadgetGalaxy';
            $mail->Body = "Hello <b>$name</b>,<br><br>Welcome to GadgetGalaxy! We are excited to have you on board.<br><br>Thank you for registering.<br><br>Regards,<br>GadgetGalaxy";

            // Send email
            $mail->send();
            echo "Registration successful! A welcome email has been sent to your email address.";
            header("Location: login.php"); // Redirect to a success page or login page
            exit;
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn); 
}
?>
