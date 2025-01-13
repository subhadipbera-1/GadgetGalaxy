<?php
include("../db1_connection.php");

if (isset($_POST['useredit'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['upass'];
    $image = $_FILES['image'];

    $target_dir = "../images/"; // Folder to store images
    $image_name = '';

    // Fetch the existing image name from the database
    $user_data_query = "SELECT image FROM data WHERE id='$user_id'";
    $user_data_result = mysqli_query($conn, $user_data_query);
    $user_data = mysqli_fetch_assoc($user_data_result);

    // If a new image is uploaded
    if (!empty($image['name'])) {
        $image_name = basename($image['name']); // New image name
        $target_file = $target_dir . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate the image file type
        $check = getimagesize($image['tmp_name']);
        if ($check === false) {
            echo "<script>alert('File is not an image.'); window.history.back();</script>";
            exit();
        }

        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.'); window.history.back();</script>";
            exit();
        }

        // Delete the old image file if it exists
        if (!empty($user_data['image']) && file_exists($target_dir . $user_data['image'])) {
            unlink($target_dir . $user_data['image']);
        }

        // Upload the new image
        if (!move_uploaded_file($image['tmp_name'], $target_file)) {
            echo "<script>alert('Error uploading the new image.'); window.history.back();</script>";
            exit();
        }
    } else {
        // If no new image is uploaded, retain the existing image
        $image_name = $user_data['image'];
    }

    // Update user details in the database
    $query = "UPDATE data SET name='$name', email='$email', password='$password', image='$image_name' WHERE id='$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('User details updated successfully!'); window.location.href='user.php';</script>";
    } else {
        echo "<script>alert('Error updating user details.'); window.history.back();</script>";
    }
    exit();
}
?>
