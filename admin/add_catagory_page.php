<?php
    include('admin_headerlink.php');
    include('admin_header.php')
?>
 <div class="container">
    <h2 class="text-center mb-4">Add New Catagory</h2>

    <!-- Form with background color -->
    <div class="p-4 rounded-3" style="background-color: #f8f9fa; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
    
    <form action="add_catagory_action.php" method="POST" enctype="multipart/form-data">
        <!-- Product Name -->
        <div class="mb-3">
          <label for="productName" class="form-label">Catagory Name</label>
          <input type="text" class="form-control" id="productName" name="catagorytName" placeholder="Enter product name" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description" required></textarea>
        </div>


        <!-- Image Upload -->
        <div class="mb-3">
          <label for="imageUpload" class="form-label">Product Image</label>
          <input class="form-control" type="file" id="imageUpload" name="imageUpload" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Product</button>
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
