<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');
?>


<?php
// Include the logic to get users and paginate data
$usersPerPage = 10; // Set the number of users to show per page
//$totalUsers = count(getAllUsers()); // Get total number of users
//$totalPages = ceil($totalUsers / $usersPerPage); // Calculate the number of pages

// Get current page from query string (default to page 1)
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting point for users on the current page
$start = ($current_page - 1) * $usersPerPage;

// Fetch users for the current page
$alldata = getAllUsers2($start, $usersPerPage); //for the pagigation table

?>
<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">All Users</h3>
        <div class="table-responsive mt-4">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th> 
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                <?php
                    if (!empty($alldata)) {
                        foreach ($alldata as $key => $data) { 
                ?>
                    <tr>
                        <td><?php echo ($start + $key + 1); ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><img src="../images/<?php echo $data['image'] ? $data['image'] : 'no-image.png'; ?>" alt="<?php echo $data['name']; ?>" style="height:50px;"></td>
                        <td>
                            <a href="user_edit_page.php?uid=<?php echo base64_encode($data['id']); ?>"><button class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></button></a> 
                            <a href="delete_user.php?uid=<?php echo $data['id']; ?>"><button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button></a>
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

               

                
            </ul>
        </nav>


    
    <!-- /#page-content-wrapper -->
    

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