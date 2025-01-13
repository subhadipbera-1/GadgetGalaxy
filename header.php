<?php
include('user_function.php');
$row=getcartnum();
$row1=getwishlistnum();
?>

<body>
  <!-- Header -->
  <!--Navbar-->

  <div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 my-auto d-sm-4 d-md-block d-lg-block"> <!--d-none d-sm-none-->
            <h5 class="brand-name">GadgetGalaxy</h5>
          </div>
          <!-- Search bar-->
          <!-- <div class="col-md-5 my-auto">

                    <form action="#" class="search-wrap">
                        <div class="input-group w-100"> 
                          <input type="text" class="form-control search-form" style="width:65%;font-size:15px;" placeholder="Search">
                            <div class="input-group-append"> 
                              <button class="btn btn-primary search-button" type="submit" style="font-size: 15px;">
                               <i class="fa fa-search"></i> 
                              </button> 
                            </div>
                        </div>
                    </form>
                </div> -->
          <div class="col-md-5 my-auto">
            <form action="filter.php" method="GET" class="search-wrap">
              <div class="input-group w-100">
                <input
                  type="text"
                  name="query"
                  class="form-control search-form"
                  style="width:65%;font-size:15px;"
                  placeholder="Search for products, brands, or categories"
                  required>
                <div class="input-group-append">
                  <button class="btn btn-primary search-button" type="submit" style="font-size: 15px;">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!--Search bar end-->

          <div class="col-md-5 my-auto">
            <ul class="nav justify-content-end">
              <?php
              if (isset($_SESSION['username'])) {
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="cart.php">
                    <i class="fa fa-shopping-cart"></i> Cart (<?php echo $row; ?>)
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="wishlist.php">
                    <i class="fa fa-heart"></i> Wishlist (<?php echo $row1; ?>)
                  </a>
                </li>
              <?php } ?>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user"></i>
                  <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                  <?php
                  if (isset($_SESSION['username'])) {

                  ?>

                    <!--<li><a class="dropdown-item" href="#">My Account</a></li>-->

                    <!-- <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i> Profile</a></li> -->

                    <li><a class="dropdown-item" href="orderhistory.php"><i class="fa fa-list"></i> My Orders</a></li>
                    <li><a class="dropdown-item" href="wishlist.php"><i class="fa fa-heart"></i> My Wishlist</a></li>
                    <li><a class="dropdown-item" href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>

                  <?php
                  } else {
                  ?>
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <?php
                  }
                  ?>

                </ul>
              </li>

            </ul>
          </div>


        </div>
      </div>
    </div>
  </div>



  <!-- <nav class="navbar navbar-expand-md navbar-main border-bottom">
    <div class="container-fluid">

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse">
        <ul class="navbar-nav mr-auto"> -->
          <!-- <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-abc="true" aria-expanded="false">Laptops</a>
                          <div class="dropdown-menu" style="font-size: 15px;"> 
                            <a class="dropdown-item" href="#">Lenovo</a> <!-- data-abc="true"--
                            <a class="dropdown-item" href="#">Dell</a> 
                            <a class="dropdown-item" href="#">HP</a> 
                            <a class="dropdown-item" href="#">Apple</a> 
                            <a class="dropdown-item" href="#">Asus</a>
                          </div>
                      </li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="all-catagory.php">All Product</a> </li> -->
          <!-- <li class="nav-item"> <a class="nav-link" href="#">Mobile</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Accessories & Peripheral</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Blog</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Support</a> </li> -->
        <!-- </ul>
      </div> -->
      <!-- <div class="float-right d-flex">
                <li class="nav-item"> <a class="nav-link" href="#">Laptop</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Mobile</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Accessories & Peripheral</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Blog</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#">Support</a> </li>
              </div> -->

    <!-- </div>
  </nav> -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item"> 
        <a class="nav-link" href="index.php" style="color: #000; padding-left:15px">Home</a> 
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="all-catagory.php" style="color: #000; padding-left:15px">All Product</a> 
      </li>
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        
      </li> -->
    </ul>
  </div>
</nav>

  <!---- End of Navbar ---->