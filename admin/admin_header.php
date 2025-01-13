<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fw-bold text-uppercase border-bottom">
                <!-- <i class="fas fa-user-secret mr-2"></i>-->Admin Panel
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="dashbord3.php" class="list-group-item list-group-item-action pb-2 bg-transparent">
                    <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                </a>
                <?php
                    if(isset($_SESSION['username'])){
                ?>
                <a href="user.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                    <!-- <i class="fas fa-project-diagram mr-2"></i>All User -->
                    <i class="fa-solid fa-users mr-2"></i>All User
                </a>
                <a href="catagory.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                <i class="fa-solid fa-layer-group mr-2"></i>Catagory
                </a>
                <a href="all_product.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-list mr-2"></i>Product<!--All-->
                </a>
                <!-- <a href="all_featured_products.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-list mr-2"></i>Featured Products
                </a>
                <a href="all_trending_product.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-list mr-2"></i>Trending Products
                </a> -->
                
                <a href="all_slider.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-sliders mr-2"></i>Slider
                </a>
                <a href="all_order.php" class="list-group-item list-group-item-action pb-2 bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-box mr-2"></i>Order
                </a>
                
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-power-off mr-2"></i>Logout
                </a>
                <?php } ?>
            </div>
        </div> 
        
        <!-- /#sidebar-wrapper -->




        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text me-3" id="menu-toggle" style="font-size: 25px;"></i>
                    <h2 class="ml-3">Dashboard</h2>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                                <i class="fas fa-user me-2"></i>
                                <?php echo isset($_SESSION['username'])?$_SESSION['username']:'';?>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <?php
                              if(isset($_SESSION['username'])){

                            ?>
                                <!-- <a class="dropdown-item" href="#">Profile</a> -->
                                <!-- <a class="dropdown-item" href="#">Settings</a> -->
                                <a class="dropdown-item" href="logout.php" style="color: blue;"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                <?php
                            }
                            else{
                              ?>
                              <a class="dropdown-item" href="index.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                              <?php
                            }
                            ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>