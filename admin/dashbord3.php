<?php
    include('admin_headerlink.php');
    include('admin_header.php')
?>

    
    
        
    
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                    <?php
                                        require '../db1_connection.php';
                                        $query="SELECT id FROM data ORDER BY id";
                                        $query_run=mysqli_query($conn,$query);
                                        $row=mysqli_num_rows($query_run);
                                        echo "$row";
                                    ?>
                                </h3>
                                <p class="fs-5">Total User</p>
                            </div>
                            <i class="fa-solid fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            <!-- <i class="fas fa-gift"></i> -->
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                <?php
                                        // require '../db1_connection.php';
                                        $query="SELECT id FROM catagory ORDER BY id";
                                        $query_run=mysqli_query($conn,$query);
                                        $row=mysqli_num_rows($query_run);
                                        echo "$row";
                                    ?>
                                </h3>
                                <p class="fs-5">Total Catagory</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                <?php
                                        // require '../db1_connection.php';
                                        $query="SELECT p_id FROM products ORDER BY p_id";
                                        $query_run=mysqli_query($conn,$query);
                                        $row=mysqli_num_rows($query_run);
                                        echo "$row";
                                    ?>
                                </h3>
                                <p class="fs-5">Total Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                <?php
                                        // require '../db1_connection.php';
                                        $query="SELECT id FROM orders ORDER BY id";
                                        $query_run=mysqli_query($conn,$query);
                                        $row=mysqli_num_rows($query_run);
                                        echo "$row";
                                    ?>
                                </h3>
                                <p class="fs-5">Orders</p>
                            </div>
                            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div> -->
    
                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div> -->
    
                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">25%</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
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
