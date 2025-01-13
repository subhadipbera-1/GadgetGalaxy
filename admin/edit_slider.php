<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');

// Check if 'id' is present in the query string
if (isset($_GET['e_id']) && !empty($_GET['e_id'])) {
    $slider_id = mysqli_real_escape_string($conn, $_GET['e_id']);

    // Fetch slider details
    $slider = fetchSliderById($slider_id);

    if (!$slider) {
        echo "<script>
            alert('Slider not found!');
            window.location.href = 'all_slider.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
        alert('Invalid slider ID.');
        window.location.href = 'all_slider.php';
    </script>";
    exit;
}
?>
<div class="container">
    <h2 class="text-center mb-4">Edit Slider Image</h2>

    <!-- Form with background color -->
    <div class="p-4 rounded-3" style="background-color: #f8f9fa; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <form action="edit_slider_action.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="slider_id" value="<?= htmlspecialchars($slider['id']); ?>">

            <!-- Existing Image Preview -->
            <div class="mb-3">
                <label for="currentImage" class="form-label">Current Image</label>
                <div>
                    <img src="../slider_images/<?= htmlspecialchars($slider['image']); ?>" alt="Slider Image" style="max-width: 100%; height: auto;">
                </div>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="imageUpload" class="form-label">Upload New Image</label>
                <input class="form-control" type="file" id="imageUpload" name="imageUpload" required>
                <small class="text-muted">Uploading a new image will replace the existing one.</small>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Image</button>
        </form>
    </div>
</div>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

<script type="text/javascript" src="../assets/js/jquery-3.7.0.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script type="text/javascript" src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
</body>
</html>
