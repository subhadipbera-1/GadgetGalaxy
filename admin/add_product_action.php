<?php
include('../db1_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from form
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = (int)$_POST['category']; // Ensure category is an integer
    $mrp = (float)$_POST['mrp'];
    $discount = (float)$_POST['discount'];
    $price = (float)$_POST['price'];
    $salesPackage = mysqli_real_escape_string($conn, $_POST['salesPackage']);
    $modelNumber = mysqli_real_escape_string($conn, $_POST['modelNumber']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);

    // Validate category
    $categoryQuery = "SELECT * FROM catagory WHERE id = $category";
    $categoryResult = mysqli_query($conn, $categoryQuery);
    if (mysqli_num_rows($categoryResult) === 0) {
        echo "<script>alert('Invalid category selected.'); window.location.href='add_product.php';</script>";
        exit();
    }

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
                $sql = "INSERT INTO products (product_name, description, c_id, mrp, discount, price, image, sales_package, model_number, color, p_brand) 
                        VALUES ('$productName', '$description', $category, $mrp, $discount, $price, '$imageFile', '$salesPackage', '$modelNumber', '$color', '$brand')";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Product added successfully.'); window.location.href='all_product.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $conn->error . "'); window.location.href='all_product.php';</script>";
                }
            } else {
                echo "<script>alert('Error uploading the image.'); window.location.href='all_product.php';</script>";
            }
        } else {
            echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.'); window.location.href='all_product.php';</script>";
        }
    } else {
        echo "<script>alert('Please upload an image.'); window.location.href='all_product.php';</script>";
    }
}

// Close connection
$conn->close();
?>
