<?php
    include('admin_headerlink.php');
    include('admin_header.php');
    include('admin_function.php');
?>
 <div class="container">
    <h2 class="text-center mb-4">Add New Product</h2>

    <!-- Form with background color -->
    <div class="p-4 rounded-3" style="background-color: #f8f9fa; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
    
    <form action="add_product_action.php" method="POST" enctype="multipart/form-data">
        <!-- Product Name -->
        <div class="mb-3">
          <label for="productName" class="form-label">Product Name(Small Description)</label>
          <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
          <label for="description" class="form-label">Description(Large Description)</label>
          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description" required></textarea>
        </div>

        <!-- Category -->
        <?php
          $alldata = categoryName();
          if (!empty($alldata)) {
        ?>
      <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-control" id="category" name="category" required>
              <option selected disabled>Choose category</option>
              <?php
                  foreach ($alldata as $data) {
                      echo '<option value="' . $data['id'] . '">' . $data['name'] . '</option>';
                  }
              ?>
          </select>
      </div>
      <?php
          } else {
              echo "No category found";
          }
      ?>


        <!-- Price -->
        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="mrp" class="form-label">MRP (₹)</label>
              <input type="number" class="form-control" id="mrp" name="mrp" placeholder="Enter price" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="discount" class="form-label">Discount (%)</label>
              <input type="number" class="form-control" id="discount" name="discount" placeholder="Enter discount" required>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="mb-3">
              <label for="price" class="form-label">Final Price (₹)</label>
              <input type="number" class="form-control" id="price" name="price" placeholder="Enter final price" required>
            </div>
          </div>
        </div>

        <!-- Quantity -->
        <!-- <div class="mb-3">
          <label for="quantity" class="form-label">Quantity</label>
          <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
        </div> -->

        <!-- Image Upload -->
        <div class="mb-3">
          <label for="imageUpload" class="form-label">Product Image</label>
          <input class="form-control" type="file" id="imageUpload" name="imageUpload" required>
        </div>
        <!--Specifications-->
        <div class="mb-3">
          <label for="salesPackage" class="form-label">Sales Package</label>
          <input type="text" class="form-control" id="salesPackage" name="salesPackage" placeholder="Enter Sales Package" required>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="modelNumber" class="form-label">Model Number</label>
              <input type="text" class="form-control" id="modelNumber" name="modelNumber" placeholder="Enter Model Number" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="color" class="form-label">Color</label>
              <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color" required>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="mb-3">
              <label for="brand" class="form-label">Product Brand</label>
              <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Product Brand" required>
            </div>
          </div>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Add Product</button>
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
</script>



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
