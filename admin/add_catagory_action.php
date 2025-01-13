<?php
include('../db1_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from form
    $catagoryName = $_POST['catagorytName'];
    $description = $_POST['description'];

    // Image upload 
    $targetDir = "../catagory_images/"; // Directory where category images will be stored
    $imageFile = basename($_FILES["imageUpload"]["name"]);
    $targetFilePath = $targetDir . $imageFile;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($imageFile)) {
        // Allow only certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            // Move file to target directory
            if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $targetFilePath)) {
                // Prepare SQL statement to insert category data
                $sql = "INSERT INTO catagory (name, description, image) 
                        VALUES ('$catagoryName', '$description', '$imageFile')";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Category added successfully.'); window.location.href='catagory.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $conn->error . "'); window.location.href='catagory.php';</script>";
                }
            } else {
                echo "<script>alert('Error uploading the image.'); window.location.href='catagory.php';</script>";
            }
        } else {
            echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.'); window.location.href='catagory.php';</script>";
        }
    } else {
        echo "<script>alert('Please upload an image.'); window.location.href='catagory.php';</script>";
    }
}

// Close connection
$conn->close();
?>
