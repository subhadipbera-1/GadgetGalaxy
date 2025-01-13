<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');

// Check if 'id' is present in the query string
if (isset($_GET['e_id']) && !empty($_GET['e_id'])) {
    $product_id = mysqli_real_escape_string($conn, $_GET['e_id']);

    // Fetch product details
    $product = fetchProductById($product_id);

    if (!$product) {
        echo "<script>
            alert('Product not found!');
            window.location.href = 'all_product.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
        alert('Invalid product ID.');
        window.location.href = 'all_product.php';
    </script>";
    exit;
}
?>
<div class="container">
    <h2 class="text-center mb-4">Edit Product</h2>

    <div class="p-4 rounded-3" style="background-color: #f8f9fa; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <form action="edit_product_action.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?= $product['p_id'] ?>">

            <!-- Product Name -->
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name (Small Description)</label>
                <input type="text" class="form-control" id="productName" name="productName"
                    value="<?= htmlspecialchars($product['product_name']) ?>" placeholder="Enter product name" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description (Large Description)</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Enter product description" required><?= htmlspecialchars($product['description']) ?></textarea>
            </div>

            <!-- Category Dropdown -->
            <?php
            // Fetch all categories
            $categories = categoryNameUpdate(); // Function to fetch categories

            if (!empty($categories)) {
                // Separate current category from others
                $currentCategory = null;
                $otherCategories = [];

                foreach ($categories as $category) {
                    if ($category['id'] == $product['c_id']) {
                        $currentCategory = $category;
                    } else {
                        $otherCategories[] = $category;
                    }
                }
            ?>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <?php
                        // Show the current category as selected
                        if ($currentCategory) {
                            echo "<option value='{$currentCategory['id']}' selected>{$currentCategory['name']}</option>";
                        }

                        // List other categories
                        foreach ($otherCategories as $category) {
                            echo "<option value='{$category['id']}'>{$category['name']}</option>";
                        }
                        ?>
                    </select>
                </div>
            <?php
            } else {
                echo "<p>No categories found. Please add categories first.</p>";
            }
            ?>

            <!-- Price Details -->
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="mrp" class="form-label">MRP (₹)</label>
                        <input type="number" class="form-control" id="mrp" name="mrp"
                            value="<?= $product['mrp'] ?>" placeholder="Enter price" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount (%)</label>
                        <input type="number" class="form-control" id="discount" name="discount"
                            value="<?= $product['discount'] ?>" placeholder="Enter discount" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price (₹)</label>
                        <input type="number" class="form-control" id="price" name="price"
                            value="<?= $product['price'] ?>" placeholder="Enter final price" required>
                    </div>
                </div>
            </div>

            <!-- Sales Package -->
            <div class="mb-3">
                <label for="salesPackage" class="form-label">Sales Package</label>
                <input type="text" class="form-control" id="salesPackage" name="salesPackage"
                    value="<?= htmlspecialchars($product['sales_package']) ?>" placeholder="Enter Sales Package">
            </div>

            <!-- Additional Details -->
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="modelNumber" class="form-label">Model Number</label>
                        <input type="text" class="form-control" id="modelNumber" name="modelNumber"
                            value="<?= htmlspecialchars($product['model_number']) ?>" placeholder="Enter Model Number">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color"
                            value="<?= htmlspecialchars($product['color']) ?>" placeholder="Enter Color">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="brand" class="form-label">Product Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand"
                            value="<?= htmlspecialchars($product['p_brand']) ?>" placeholder="Enter Product Brand">
                    </div>
                </div>
            </div>

            <!-- Image Upload -->
            <div class="col-md-6">
                <label for="pic" class="mb-1">Image</label>
                <input type="hidden" name="old_img" value="<?= $product['image']; ?>" />
                <input type="file" class="form-control" id="pic" name="pic" accept="image/*" onchange="viewImage(this)">
            </div>
            <div class="col-md-6">
                <img src="../product_images/<?= $product['image'] ?: 'no-image.jpg'; ?>" alt="Image Preview"
                    style="height:150px;width:150px" id="view_profile_pic" />
            </div>

            <!-- Submit Button -->
            <button type="submit" name="editproduct" class="btn btn-primary w-100">Update Product</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('discount').addEventListener('input', function() {
        var originalPrice = parseFloat(document.getElementById('mrp').value);
        var discountPercent = parseFloat(document.getElementById('discount').value);

        if (!isNaN(originalPrice) && !isNaN(discountPercent) && originalPrice > 0 && discountPercent >= 0) {
            var discountAmount = (discountPercent / 100) * originalPrice;
            var finalPrice = originalPrice - discountAmount;

            document.getElementById('price').value = finalPrice.toFixed(2);
        } else {
            document.getElementById('price').value = '';
        }
    });

    function viewImage(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("view_profile_pic").src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script src="../assets/js/jquery-3.7.0.min.js"></script>
<script src="../assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
