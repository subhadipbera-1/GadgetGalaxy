<?php
include('../db1_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from form
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $mrp = (float)$_POST['mrp'];
    $discount = (float)$_POST['discount'];
    $price = (float)$_POST['price'];
    $quantity = (int)$_POST['quantity'];

    // Image upload
    $targetDir = "../product_images/";
    $imageFile = basename($_FILES["imageUpload"]["name"]);
    $targetFilePath = $targetDir . $imageFile;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($imageFile)) {
        // Allow only certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            // Move file to target directory
            if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $targetFilePath)) {
                // Prepare SQL statement
                $sql = "INSERT INTO featured_products (p_name, description, category, mrp, discount, price, quantity, image) 
                        VALUES ('$productName', '$description', '$category', $mrp, $discount, $price, $quantity, '$imageFile')";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Product added successfully.'); window.location.href='all_featured_products.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $conn->error . "'); window.location.href='all_featured_products.php';</script>";
                }
            } else {
                echo "<script>alert('Error uploading the image.'); window.location.href='all_featured_products.php';</script>";
            }
        } else {
            echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.'); window.location.href='all_featured_products.php';</script>";
        }
    } else {
        echo "<script>alert('Please upload an image.'); window.location.href='all_featured_products.php';</script>";
    }
}

// Close connection
$conn->close();
?>
