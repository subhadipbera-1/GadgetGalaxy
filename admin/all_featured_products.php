<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');

// Pagination setup
$productsPerPage = 10;
$totalProducts = countProducts();
$totalPages = ceil($totalProducts / $productsPerPage);
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($current_page - 1) * $productsPerPage;

// Fetch products for current page
$products = getAllProducts($start, $productsPerPage);
?>

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="fs-4 mb-3">All Featured Products</h3>
        <a href="add_featured_product_page.php" class="btn btn-success ml-auto">
            <i class="fa-solid fa-plus"></i> Add Featured Product
        </a>
    </div>
    <div class="row my-2">
        <div class="table-responsive mt-4">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Serial No.</th> 
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>MRP</th>
                        <th>Discount</th>
                        <th>Price</th>
                        <th>Product Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $alldata=getAllFeatureProduct();
                        if(!empty($alldata)){
                            foreach($alldata as $key=>$data){
                    ?>
                            <tr>
                                <td><?php echo ($key+1) ?></td>
                                <td><img src="../product_images/<?php echo $data['image']; ?>" alt="Product Image" style="height:50px;"></td>
                                <td><?php echo $data['p_name']; ?></td>
                                <td><?php echo $data['mrp']; ?></td>
                                <td><?php echo $data['discount']; ?></td>
                                <td><?php echo $data['price']; ?></td>
                                <td><?php echo $data['quantity']; ?></td>
                                <td>
                                    <a href="all_product_edit_page.php?id=<?php echo $data['fp_id']; ?>" class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a> 
                                    <a href="delete_product.php?id=<?php echo $data['fp_id']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                            }
                        }else{
                            echo "<tr><td colspan='4' class='text-center'>No Record Found...</td></tr>";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination Links -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php if($current_page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php if ($current_page == $i) echo 'active'; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>

            <?php if($current_page < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
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
