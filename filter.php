<?php
include('headerlink.php');
include('header.php');
//include('user_function.php');

// Initialize variables
$searchTerm = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : ''; // Sanitize search input
$data = []; // Default result to an empty array

// Fetch search results if a search term is provided
if (!empty($searchTerm)) {
    $data = getAllSearchProducts($searchTerm);  // Function call to fetch search results
}

?>

<!---- End of Navbar ---->

<div class="container-fluid mt-5">
    <h2>Search Results for "<?php echo htmlspecialchars($searchTerm); ?>"</h2>
    <div class="row">
        <?php
        if (!empty($data)) {
            // Display products if data exists
            foreach ($data as $product) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="product-item">
                        <div class="overlay">
                            <!-- Product Image with link to product details page -->
                            <a href="productDetails.php?productid=<?php echo htmlspecialchars($product['product_id']); ?>" class="product-thumb">
                                <img src="product_images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" style="width: 100%;">
                            </a>
                            <span class="discount"><?php echo htmlspecialchars($product['discount']); ?>% OFF</span>
                        </div>

                        <div class="product-info">
                            <!-- Display Category Name and Product Name --> 
                            <span><?php echo htmlspecialchars($product['catagory_name']); ?></span>
                            <a href="productDetails.php?productid=<?php echo htmlspecialchars($product['product_id']); ?>">
                                <?php echo htmlspecialchars($product['product_name']); ?>
                            </a>
                            <div class="_5OesEi afFzxY">
                                <span class="Y1HWO0 mr-2">
                                    <div class="XQDdHH">
                                        4.5
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                </span>
                                <span class="Wphh3N">(8,969)</span>
                            </div>
                            <div class="DMMoT0">
                                <div class="hl05eU">
                                    <div class="Nx9bqj">₹<?php echo number_format($product['price']); ?></div>
                                    <div class="yRaY8j">₹<?php echo number_format($product['mrp']); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            // No results found
            echo "<p>No results found for '<strong>" . htmlspecialchars($searchTerm) . "</strong>'.</p>";
        }
        ?>
    </div>
</div>

<!---------------Footer------------>
<?php
include('footer.php');
include('footerlink.php');
?>
