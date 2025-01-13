<?php
include('headerlink.php');
include('header.php');
include('db1_connection.php'); // Include your database connection

if (isset($_GET['query'])) {
    $searchTerm = htmlspecialchars($_GET['query']); // Sanitize the search term

    // Example SQL query (Adjust table and column names as needed)
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_name LIKE ? OR category LIKE ?");
    $searchKeyword = "%" . $searchTerm . "%";
    $stmt->bind_param("ss", $searchKeyword, $searchKeyword);
    $stmt->execute();
    $result = $stmt->get_result();

    ?>
    <div class="container mt-5">
        <h2>Search Results for "<?php echo $searchTerm; ?>"</h2>
        <div class="row mt-4">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="product_images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                <p class="card-text">₹<?php echo $row['price']; ?></p>
                                <a href="product_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No results found for '<strong>$searchTerm</strong>'.</p>";
            }
            ?>
        </div>
    </div>
    <?php
}
include('footer.php');
?>
