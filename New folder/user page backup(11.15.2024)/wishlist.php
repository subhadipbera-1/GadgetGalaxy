<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets\font-awesome-4.7.0\css\font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">-->
    <!--<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.min.css">-->
    <link rel="stylesheet" href="assets/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Wishlist Page</title>
  </head>
  <body>
    <!-- Header -->
    <!--Navbar-->
   
    <div class="main-navbar shadow-sm sticky-top">
      <div class="top-navbar">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-2 my-auto d-sm-4 d-md-block d-lg-block">  <!--d-none d-sm-none-->
                      <h5 class="brand-name">GadgetGalaxy</h5>
                  </div>
                  <!--<div class="col-md-5 my-auto">
                      <form role="search">
                          <div class="input-group">
                              <input type="search" placeholder="Search your product" class="form-control" />
                              <button class="btn bg-white" type="submit">
                                  <i class="fa fa-search"></i>
                              </button>
                          </div>
                      </form>
                  </div>-->

                  <div class="col-md-5 my-auto">

                    <form action="#" class="search-wrap">
                        <div class="input-group w-100"> 
                          <input type="text" class="form-control search-form" style="width:65%;font-size:15px;/* padding-left: 20px; */margin-left: 10px;/* margin-right: 10px; */" placeholder="Search">
                            <div class="input-group-append"> 
                              <button class="btn btn-primary search-button" type="submit">
                               <i class="fa fa-search"></i> 
                              </button> 
                            </div>
                        </div>
                    </form>
                    
                </div>
                  <div class="col-md-5 my-auto">
                      <ul class="nav justify-content-end">
                          
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-user"></i> Username 
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                              <div class="col-md-6">
                                <a class="dropdown-item" href="login.html">Login</a>
                              </div>
                              <div class="col-md-6">
                                <a class="dropdown-item" href="signup.html">SignUp</a>
                              </div>
                            </div>
                            <!--<li><a class="dropdown-item" href="#">My Account</a></li>-->
                          <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>

                          <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                          <li><a class="dropdown-item" href="wishlist.html"><i class="fa fa-heart"></i> My Wishlist</a></li>
                          <li><a class="dropdown-item" href="cart.html"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                          <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                          </ul>
                      </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">
                                  <i class="fa fa-shopping-cart"></i> Cart (0)
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">
                                  <i class="fa fa-heart"></i> Wishlist (0)
                              </a>
                          </li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
      
      <!--<nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <!--<a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                  Funda Ecom
              </a>--
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">All Categories</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">New Arrivals</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Featured Products</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Electronics</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Fashions</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Accessories</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Appliances</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>-->
    <!--</div>-->









    <!--<header class="section-header">
      <section class="header-main border-bottom">
          	<div class="container-fluid">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-sm-4 col-md-4 col-5"> 
                    <a href="#" class="brand-wrap" data-abc="true">
                          <!-- <img class="logo" src="http://ampexamples.com/data/upload/2017/08/bootstrap2_logo.png"> -- 
                        <span class="logo"><!--BBBOOTSTRAP--
                          <img src="assets/img/logo.png" alt="">
                        </span> 
                    </a> 
                  </div>

                  <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">

                      <form action="#" class="search-wrap">
                          <div class="input-group w-100"> 
                            <input type="text" class="form-control search-form" style="width:65%; font-size:15px" placeholder="Search">
                              <div class="input-group-append"> 
                                <button class="btn btn-primary search-button" type="submit">
                                 <i class="fa fa-search"></i> 
                                </button> 
                              </div>
                          </div>
                      </form>
                      
                  </div>
                  <div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">
                      <div class="d-flex justify-content-end"> 
                        <div class="dropdown show">
                          <a class="btn dropdown-toggle login" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-regular fa-user"></i> User
                          </a>
                        
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="signup.html">Sign in</a>
                            <!--<a class="dropdown-item" href="#">Something else here</a>--
                          </div>
                        </div>

                        <span class="vl"></span>
                          <!--<div class="dropdown btn-group"> 
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-abc="true">
                              <i class="fas fa fa-bell"></i>
                            </a>
                              <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                  <li>
                                      <div class="notification-title">More Info</div>
                                      <div class="notification-list">
                                          <div class="list-group"> <a href="affiliates" class="list-group-item list-group-item-action active" data-abc="true">
                                                  <div class="notification-info">
                                                      <div class="notification-list-user-img"><img src="https://img.icons8.com/nolan/100/000000/helping-hand.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                      <div class="notification-list-user-block"><span class="notification-list-user-name">Affiliate program</span> </div>
                                                  </div>
                                              </a> <a href="redemption-center" class="list-group-item list-group-item-action active" data-abc="true">
                                                  <div class="notification-info">
                                                      <div class="notification-list-user-img"><img src="https://img.icons8.com/bubbles/100/000000/prize.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                      <div class="notification-list-user-block"><span class="notification-list-user-name">Redemption Center</span> </div>
                                                  </div>
                                              </a> <a href="#" class="list-group-item list-group-item-action active" data-abc="true">
                                                  <div class="notification-info">
                                                      <div class="notification-list-user-img"><img src="https://img.icons8.com/ultraviolet/100/000000/medal.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                      <div class="notification-list-user-block"><span class="notification-list-user-name">Achievements</span> </div>
                                                  </div>
                                              </a> <a href="#" class="list-group-item list-group-item-action active" data-abc="true">
                                                  <div class="notification-info">
                                                      <div class="notification-list-user-img"><img src="https://img.icons8.com/bubbles/100/000000/call-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                                      <div class="notification-list-user-block"><span class="notification-list-user-name">Contact us</span> </div>
                                                  </div>
                                              </a> 
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div> --
                          <!--<li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>Cart</a>
                          </li>--
                          <a class="nav-link nav-user-img" href="#"><!--data-toggle="modal" data-target="#login-modal" data-abc="true"--
                            <span class="login"><i class="fas fa fa-shopping-cart"></i> Cart</span>
                          </a>

                          

                          <span class="vl"></span> 
                          <a class="nav-link nav-user-img" href="#"><!-- data-toggle="modal" data-target="#login-modal" data-abc="true"--
                            <span class="login"><i class="fas fa-regular fa-heart"></i> Wishlist</span>
                          </a>
                      </div>
                  </div>
              </div>
          	</div>
      </section>
</header>-->

      <nav class="navbar navbar-expand-md navbar-main border-bottom">
          <div class="container-fluid">
              <!--<form class="d-md-none my-2">
                  <div class="input-group"> 
                    <input type="text" name="search" class="form-control" placeholder="Search" required="" style="height: auto; font-size:15px;">
                      <div class="input-group-append"> 
                        <button type="submit" class="btn btn-secondary"> 
                          <i class="fa fa-search"></i> 
                        </button> 
                      </div>
                  </div>
              </form> -->
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> 
                <span class="navbar-toggler-icon"></span> 
              </button>
              <div class="navbar-collapse collapse" id="dropdown6"><!-- style=""-->
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-abc="true" aria-expanded="false">Laptops</a>
                          <div class="dropdown-menu"> 
                            <a class="dropdown-item" href="#" data-abc="true">Lenovo</a> 
                            <a class="dropdown-item" href="#" data-abc="true">Dell</a> 
                            <a class="dropdown-item" href="#" data-abc="true">HP</a> 
                            <a class="dropdown-item" href="#" data-abc="true">Apple</a> 
                            <a class="dropdown-item" href="#" data-abc="true">Asus</a>
                          </div>
                      </li>
                      <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Refurbished Mobile</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Accessories & Peripheral</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Blog</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Support</a> </li>
                  </ul>
              </div>
          </div>
      </nav>

    <!---- End of Navbar ---->

<!-- Wishlist container -->
<!--<div class="container wishlist">
    <h1 class="text-center">My Wishlist</h1>
    <div class="row">
      <!-- Wishlist item --
      <div class="col-md-4">
        <div class="wishlist-item">
          <img src="https://via.placeholder.com/150" alt="Product image">
          <h2>Product 1</h2>
          <p>Product description</p>
          <button class="btn btn-primary">Add to Cart</button>
          <button class="btn btn-danger">Remove</button>
        </div>
      </div>
      <!-- Wishlist item --
      <div class="col-md-4">
        <div class="wishlist-item">
          <img src="https://via.placeholder.com/150" alt="Product image">
          <h2>Product 2</h2>
          <p>Product description</p>
          <button class="btn btn-primary">Add to Cart</button>
          <button class="btn btn-danger">Remove</button>
        </div>
      </div>
      <!-- Wishlist item --
      <div class="col-md-4">
        <div class="wishlist-item">
          <img src="https://via.placeholder.com/150" alt="Product image">
          <h2>Product 3</h2>
          <p>Product description</p>
          <button class="btn btn-primary">Add to Cart</button>
          <button class="btn btn-danger">Remove</button>
        </div>
      </div>
    </div>
  </div>-->






        <!-- Wishlist container -->
        <!-- <div class="container wishlist">
            <h1 class="text-center">My Wishlist</h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                -- Wishlist item --
                <tr>
                  <td>
                    <img src="assets/img/iPad-Air-5thGen-WiFi-Starlight-(FP).jpg" alt="Product image">
                    <h2>Product 1</h2>
                  </td>
                  <td>Product description</td>
                  <td>
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-danger">Remove</button>
                  </td>
                </tr>
                !-- Wishlist item --
                <tr>
                  <td>
                    <img src="assets/img/earbud2.jpeg" alt="Product image">
                    <h2>Product 2</h2>
                  </td>
                  <td>Product description</td>
                  <td>
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-danger">Remove</button>
                  </td>
                </tr>
                -- Wishlist item --
                <tr>
                  <td>
                    <img src="assets/img/LLOYD-AC.png" alt="Product image">
                    <h2>Product 3</h2>
                  </td>
                  <td>Product description</td>
                  <td>
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-danger">Remove</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
             -->


  <div class="container mt-5">
    <h2>My Wishlist</h2>
    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Stock Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 1" class="img-fluid"></td>
                            <td>Product 1</td>
                            <td>$20.00</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td style="width: 200px;">
                                <button class="btn btn-lg btn-success">Add to Cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 2" class="img-fluid"></td>
                            <td>Product 2</td>
                            <td>$35.00</td>
                            <td><span class="badge badge-danger">Out of Stock</span></td>
                            <td style="width: 200px;">
                                <button class="btn btn-lg btn-success">Add to Cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 3" class="img-fluid"></td>
                            <td>Product 3</td>
                            <td>$50.00</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td style="width: 200px;">
                                <button class="btn btn-lg btn-success">Add to Cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    

</body>  
</html>
