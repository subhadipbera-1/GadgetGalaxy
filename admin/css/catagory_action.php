<?php
include('../db1_connection.php'); // Include your database connection file


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle file upload
    if (isset($_POST['registerbtn']) && isset($_FILES['faculty_image'])) {
        if ($_FILES['faculty_image']['error'] == 0) {
            $uploadDirectory = '../profile/upload/';
            $fileName = basename($_FILES['faculty_image']['name']);
            $filePath = $uploadDirectory . $fileName;

            // Check allowed file types
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $fileType = mime_content_type($_FILES['faculty_image']['tmp_name']);

            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES['faculty_image']['tmp_name'], $filePath)) {
                    $query = "INSERT INTO slider (image) VALUES ('$fileName')";
                    mysqli_query($conn, $query);
                    $_SESSION['success'] = "Image uploaded successfully!";
                } else {
                    $_SESSION['error'] = "Error uploading the file.";
                }
            } else {
                $_SESSION['error'] = "Only JPG, PNG, and GIF files are allowed.";
            }
        }
    }

    // Handle deletion
    if (isset($_POST['delete_btn'])) {
        $id = $_POST['delete_id'];
        $query = "DELETE FROM slider WHERE id='$id'";
        mysqli_query($conn, $query);
        $_SESSION['success'] = "Slider deleted successfully!";
    }

    // Handle update
    if (isset($_POST['updatebtn'])) {
        $id = $_POST['edit_id'];
        if ($_FILES['faculty_image']['error'] == 0) {
            $uploadDirectory = '../images/';
            $fileName = basename($_FILES['faculty_image']['name']);
            $filePath = $uploadDirectory . $fileName;

            // Check allowed file types
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $fileType = mime_content_type($_FILES['faculty_image']['tmp_name']);

            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES['faculty_image']['tmp_name'], $filePath)) {
                    $query = "UPDATE slider SET image='$fileName' WHERE id='$id'";
                    mysqli_query($conn, $query);
                    $_SESSION['success'] = "Image updated successfully!";
                } else {
                    $_SESSION['error'] = "Error uploading the file.";
                }
            } else {
                $_SESSION['error'] = "Only JPG, PNG, and GIF files are allowed.";
            }
        }
    }

    header("Location: catagory.php"); // Redirect back to the main page
exit();
}

?>
