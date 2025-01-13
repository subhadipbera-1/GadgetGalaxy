<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');

// Check if 'id' is present in the query string
if (isset($_GET['e_id']) && !empty($_GET['e_id'])) {
    $category_id = mysqli_real_escape_string($conn, $_GET['e_id']);

    // Fetch category details
    $category = fetchCategoryById($category_id);

    if (!$category) {
        echo "<script>
            alert('Category not found!');
            window.location.href = 'category_list.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
        alert('Invalid category ID.');
        window.location.href = 'category_list.php';
    </script>";
    exit;
}
?>


<div class="container">
  <h2 class="text-center mb-4">Update Category</h2>

  <!-- Form with background color -->
  <div class="p-4 rounded-3" style="background-color: #f8f9fa; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">

    <form action="edit_catagory_action.php" method="POST" enctype="multipart/form-data">
      <!-- Hidden inputs for category ID and old image -->
      <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
      <input type="hidden" name="old_image" value="<?php echo $category['image']; ?>">

      <!-- Category Name -->
      <div class="mb-3">
        <label for="categoryName" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="categoryName" name="category_name" value="<?php echo htmlspecialchars($category['name']); ?>" required>
      </div>

      <!-- Description -->
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required><?php echo htmlspecialchars($category['description']); ?></textarea>
      </div>

      <!-- Image Upload -->
      <div class="mb-3">
        <label for="imageUpload" class="form-label">Upload Image</label>
        <input class="form-control" type="file" id="imageUpload" name="image">
        <p>Current Image: <img src="../catagory_images/<?php echo $category['image']; ?>" alt="Category Image" width="100"></p>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Update Category</button>
      <input type="hidden" name="update_category" value="1">
    </form>

  </div>
</div>





<script>
  var el = document.getElementById("wrapper");
  var toggleButton = document.getElementById("menu-toggle");

  toggleButton.onclick = function() {
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