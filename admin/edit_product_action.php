<?php
include('admin_function.php');

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['editproduct'])) {
    $product_id = $_POST['product_id'];
    $name = $_POST['productName'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $mrp = $_POST['mrp'];
    $discount = $_POST['discount'];
    $price = $_POST['price'];
    $salesPackage = mysqli_real_escape_string($conn, $_POST['salesPackage']);
    $modelNumber = mysqli_real_escape_string($conn, $_POST['modelNumber']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);

    $old_img = $_POST['old_img'];
    $pic = $_FILES['pic'];
    $image = $old_img; // Default to old image

    if (!empty($pic['name'])) {
        $image = $pic['name']; // Use the original file name
        $target_dir = "../product_images/";
        $target_file = $target_dir . basename($image);

        // Overwrite the old image if it exists
        if (move_uploaded_file($pic['tmp_name'], $target_file)) {
            // If the old image exists and it's not the default "no-image.jpg", delete it
            if ($old_img && $old_img !== 'no-image.jpg' && file_exists($target_dir . $old_img)) {
                unlink($target_dir . $old_img);
            }
        } else {
            // Handle file upload errors
            echo "<script>
            alert('Failed to upload new image.');
            window.history.back();
            </script>";
            exit;
        }
    }

    // Call the function to update the product in the database
    $returndata = productupdate($product_id, $name, $description, $category, $discount, $price, $salesPackage, $modelNumber, $color, $brand, $image);

    if ($returndata) {
        echo "<script>
        alert('Product updated successfully.');
        window.location.href='all_product.php';
        </script>";
    } else {
        echo "<script>
        alert('Product update failed.');
        window.location.href='all_product_edit.php';
        </script>";
    }
}
?>
