<?php
// Include database connection
include('db1_connection.php');
global $conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
    $email = $_POST['email'];
    $new_password = $_POST['confirm_password'];

    // Update the new password in the database
    $update_sql = "UPDATE data SET password = '".$new_password."', otp = NULL WHERE email = '$email'";
    if (mysqli_query($conn, $update_sql)) {
        echo "<script>alert ('Password has been reset successfully!');window.location.href='login.php';</script>";
    } else {
        echo "<script>alert ('Password has been reset Unsuccessfully!');window.location.href='forgot-password.php';</script>";
    }
}
?>
