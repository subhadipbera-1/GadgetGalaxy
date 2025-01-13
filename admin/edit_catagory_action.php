<?php
include('admin_function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $old_image = mysqli_real_escape_string($conn, $_POST['old_image']);

    $image = $old_image; // Default to old image

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $file_extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

        if (in_array($file_extension, $allowed_extensions)) {
            $image = "Category_" . time() . "." . $file_extension;

            // Remove old image if exists
            if (!empty($old_image) && file_exists("../catagory_images/" . $old_image)) {
                unlink("../catagory_images/" . $old_image);
            }

            // Save new image
            move_uploaded_file($_FILES['image']['tmp_name'], "../catagory_images/" . $image);
        } else {
            echo "<script>
                alert('Invalid image type. Only JPG, JPEG, PNG, and GIF allowed.');
                window.location.href = 'edit_category.php?id=" . base64_encode($category_id) . "';
            </script>";
            exit;
        }
    }

    // Update category in database
    $result = updateCategory($category_id, $category_name, $description, $image);

    if ($result) {
        echo "<script>
            alert('Category updated successfully.');
            window.location.href = 'catagory.php';
        </script>";
    } else {
        echo "<script>
            alert('Failed to update category.');
            window.location.href = 'edit_category.php?id=" . base64_encode($category_id) . "';
        </script>";
    }
}
?>
