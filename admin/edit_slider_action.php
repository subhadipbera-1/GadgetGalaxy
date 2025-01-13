<?php
include('admin_function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $slider_id = $_POST['slider_id'];

    // Check if an image is uploaded
    if (isset($_FILES['imageUpload']) && $_FILES['imageUpload']['error'] == 0) {
        $uploadDir = '../slider_images/';
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        // Extract original file info
        $originalFileName = basename($_FILES['imageUpload']['name']);
        $fileType = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));

        // Validate file type
        if (in_array($fileType, $allowedTypes)) {
            // Sanitize the original file name
            $sanitizedFileName = preg_replace('/[^a-zA-Z0-9-_\.]/', '_', $originalFileName);
            $targetPath = $uploadDir . $sanitizedFileName;

            // Fetch the current image path from the database
            $slider = fetchSliderById($slider_id);
            $currentImage = $slider['image']; // Assuming the 'image' column holds the filename

            // Check for conflicts and resolve by appending a unique ID if needed
            if (file_exists($targetPath)) {
                $sanitizedFileName = time() . '_' . $sanitizedFileName;
                $targetPath = $uploadDir . $sanitizedFileName;
            }

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['imageUpload']['tmp_name'], $targetPath)) {
                // Update the slider image in the database
                if (updateSliderImage($slider_id, $sanitizedFileName)) {
                    // Delete the old image from the folder if it exists
                    if ($currentImage && file_exists($uploadDir . $currentImage)) {
                        unlink($uploadDir . $currentImage);
                    }

                    echo "<script>
                        alert('Slider image updated successfully!');
                        window.location.href = 'all_slider.php';
                    </script>";
                } else {
                    // Remove the new image if the database update fails
                    unlink($targetPath);

                    echo "<script>
                        alert('Failed to update slider image in the database. Please try again.');
                        window.history.back();
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Failed to upload the image. Please try again.');
                    window.history.back();
                </script>";
            }
        } else {
            echo "<script>
                alert('Invalid file type. Please upload a JPG, JPEG, PNG, or GIF file.');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('No image uploaded. Please select a file.');
            window.history.back();
        </script>";
    }
} else {
    echo "<script>
        alert('Invalid request method.');
        window.history.back();
    </script>";
}
?>
