<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');

// Pagination setup
$categoriesPerPage = 10; // Number of categories per page
$totalCategories = countCategories2(); // Total number of categories
$totalPages = ceil($totalCategories / $categoriesPerPage); // Total pages
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Ensure the current page is within valid range
if ($current_page < 1) {
    $current_page = 1;
} elseif ($current_page > $totalPages) {
    $current_page = $totalPages;
}

$start = ($current_page - 1) * $categoriesPerPage;

// Fetch categories for the current page
$categories = getAllCategories2($start, $categoriesPerPage);
?>

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="fs-4 mb-3">Top Categories</h3>
        <a href="add_catagory_page.php" class="btn btn-success ml-auto">
            <i class="fa-solid fa-plus"></i> Add Category
        </a>
    </div>
    <div class="row my-2">
        <div class="table-responsive mt-4">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Serial No.</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>ActiveInactive</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($categories)) {
                        foreach ($categories as $key => $data) {
                    ?>
                            <tr>
                                <td><?php echo $start + $key + 1; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['description']; ?></td>
                                <td><img src="../catagory_images/<?php echo $data['image']; ?>" alt="Category Image" style="height:60px;"></td>
                                <td>
                                    <?php
                                    if ($data['active'] == 1) {
                                        echo '<p><a href="catagory_active.php?cid=' . $data['id'] . '&active=0" class="btn btn-success d-flex justify-content-center">Active</a></p>';
                                    } else {
                                        echo '<p><a href="catagory_active.php?cid=' . $data['id'] . '&active=1" class="btn btn-danger d-flex justify-content-center">Inactive</a></p>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="edit_catagory_page.php?e_id=<?php echo $data['id']; ?>" class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="delete_catagory.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>No Record Found...</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination Links -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php if ($current_page > 1): ?>
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

            <?php if ($current_page < $totalPages): ?>
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
