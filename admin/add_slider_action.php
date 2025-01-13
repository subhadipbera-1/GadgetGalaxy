<?php
include('../db1_connection.php'); // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the target directory
    $targetDir = "../slider_images/";
    $imageFile = basename($_FILES["imageUpload"]["name"]);
    $targetFilePath = $targetDir . $imageFile;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($imageFile)) {
        // Allow only certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array(strtolower($fileType), $allowedTypes)) {
            // Check if the target directory exists, if not, create it
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            // Move file to target directory
            if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $targetFilePath)) {
                // Escape the file name to prevent SQL injection
                $imageFileEscaped = mysqli_real_escape_string($conn, $imageFile);

                // Prepare SQL statement
                $sql = "INSERT INTO slider (image) VALUES ('$imageFileEscaped')";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Slider image added successfully.'); window.location.href='all_slider.php';</script>";
                } else {
                    echo "<script>alert('Database Error: " . $conn->error . "'); window.location.href='all_slider.php';</script>";
                }
            } else {
                echo "<script>alert('Error uploading the image.'); window.location.href='all_slider.php';</script>";
            }
        } else {
            echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.'); window.location.href='all_slider.php';</script>";
        }
    } else {
        echo "<script>alert('Please upload an image.'); window.location.href='all_slider.php';</script>";
    }
}

// Close database connection
$conn->close();
?>
