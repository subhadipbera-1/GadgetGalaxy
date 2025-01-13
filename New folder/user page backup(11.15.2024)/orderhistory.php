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
    <title>Order Details page</title>
  <style>
    /*---Navbar Start here---*/
    /* .main-navbar{
      border-bottom: 1px solid #ccc;
  }
  .main-navbar .top-navbar{
      background-color: #2874f0;
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .main-navbar .top-navbar .brand-name{
      color: #fff;
      font-size: 21px;
  }
  *.brand-name{
    font-size: 18px;
  }*
  .main-navbar .top-navbar .nav-link{
      color: #fff;
      font-size: 16px;
      font-weight: 500;
  }
  .main-navbar .top-navbar .dropdown-menu{
      padding: 0px 0px;
      border-radius: 0px;
  }
  .main-navbar .top-navbar .dropdown-menu .dropdown-item{
      padding: 8px 16px;
      border-bottom: 1px solid #ccc;
      font-size: 14px;
  }
  .main-navbar .top-navbar .dropdown-menu .dropdown-item i{
      width: 20px;
      text-align: center;
      color: #2874f0;
      font-size: 14px;
  }
  .main-navbar .navbar{
      padding: 0px;
      background-color: #ddd;
  }
  .main-navbar .navbar .nav-item .nav-link{
      padding: 8px 20px;
      color: #000;
      font-size: 15px;
  }
  
  @media only screen and (max-width: 600px) {
      .main-navbar .top-navbar .nav-link{
          font-size: 12px;
          padding: 8px 10px;
      }
  }
  @media only screen and (max-width: 700px) {
    .main-navbar .top-navbar .nav-link{
        font-size: 12px;
        padding: 8px 10px;
    }
} */
    /*--------End of Navbar-------------*/
/* style.css */
/*.card-img-top {
    height: 200px;
    object-fit: cover;
}
.list-group-item.active a {
    color: white;
    background-color: #007bff;
}*/



/* Default styles for desktop devices *
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .card {
    margin-bottom: 20px;
  }
  
  .card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
  }
  
  .card-body {
    padding: 20px;
  }
  
  /* Media query for tablet devices (768px to 992px) *
  @media (max-width: 992px) {
    .container {
      max-width: 90%;
    }
    .card {
      margin-bottom: 10px;
    }
    .card img {
      height: 120px;
    }
    .card-body {
      padding: 10px;
    }
  }
  
  /* Media query for mobile devices (576px to 768px) *
  @media (max-width: 768px) {
    .container {
      max-width: 95%;
    }
    .card {
      margin-bottom: 5px;
    }
    .card img {
      height: 100px;
    }
    .card-body {
      padding: 5px;
    }
  }
  
  /* Media query for small mobile devices (0px to 576px) *
  @media (max-width: 576px) {
    .container {
      max-width: 100%;
    }
    .card {
      margin-bottom: 0;
    }
    .card img {
      height: 80px;
    }
    .card-body {
      padding: 0;
    }
  }*/

/*************************** Order History Start *******************/
/*@import url('https://fonts.googleapis.com/css?family=Assistant');*/
/*body {
  background: #eee;
  font-family: Assistant, sans-serif;
}*/

/* .cell-1 {
  border-collapse: separate;
  border-spacing: 0 4em;
  background: #fff;
  border-bottom: 5px solid transparent;
  /*background-color: gold;*
  background-clip: padding-box;
}

thead {
  background: #dddcdc;
}

.toggle-btn {
  width: 40px;
  height: 21px;
  background: grey;
  border-radius: 50px;
  padding: 3px;
  cursor: pointer;
  -webkit-transition: all 0.3s 0.1s ease-in-out;
  -moz-transition: all 0.3s 0.1s ease-in-out;
  -o-transition: all 0.3s 0.1s ease-in-out;
  transition: all 0.3s 0.1s ease-in-out;
}

.toggle-btn > .inner-circle {
  width: 15px;
  height: 15px;
  background: #fff;
  border-radius: 50%;
  -webkit-transition: all 0.3s 0.1s ease-in-out;
  -moz-transition: all 0.3s 0.1s ease-in-out;
  -o-transition: all 0.3s 0.1s ease-in-out;
  transition: all 0.3s 0.1s ease-in-out;
}

.toggle-btn.active {
  background: blue !important;
}

.toggle-btn.active > .inner-circle {
  margin-left: 19px;
}
/* For large desktops (width greater than 1200px) *
@media only screen and (min-width: 1200px) {
    .cell-1 {
      border-spacing: 0 5em;
    }
    .toggle-btn {
      width: 50px;
      height: 25px;
    }
    .toggle-btn > .inner-circle {
      width: 18px;
      height: 18px;
    }
    .toggle-btn.active > .inner-circle {
      margin-left: 25px;
    }
  }
  
  /* For tablets and medium devices (768px - 1199px) *
  @media only screen and (max-width: 1199px) and (min-width: 768px) {
    .cell-1 {
      border-spacing: 0 3em;
    }
    .toggle-btn {
      width: 35px;
      height: 18px;
    }
    .toggle-btn > .inner-circle {
      width: 13px;
      height: 13px;
    }
    .toggle-btn.active > .inner-circle {
      margin-left: 15px;
    }
  }
  
  /* For mobile devices (less than 768px) *//*
  @media only screen and (max-width: 767px) {
    .cell-1 {
      border-spacing: 0 2em;
    }
    .toggle-btn {
      width: 30px;
      height: 15px;
    }
    .toggle-btn > .inner-circle {
      width: 10px;
      height: 10px;
    }
    .toggle-btn.active > .inner-circle {
      margin-left: 12px;
    }
  } */

  /*---------Footer----------------*/
  /* .footer-area{
    padding: 40px 0px;
    background-color: #2874f0;
    color: #fff;
}
.footer-area a{
    text-decoration: none;
}
.footer-area .footer-heading{
    font-size: 24px;
    color: #fff;
}
.footer-area .footer-underline{
    height: 1px;
    width: 70px;
    background-color: #ddd;
    margin: 10px 0px;
}
.copyright-area{
    padding: 14px 0px;
    background-color: #262626;
}
.copyright-area p{
    margin-bottom: 0px;
    color: #fff;
}
.copyright-area .social-media{
    text-align: end;
    color: #fff;
}
.copyright-area .social-media a{
    margin: 0px 10px;
    color: #fff;
    width: 20px;
} */
  </style>
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



    <!-- <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        -- <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div> --
                                    </th>
                                    <th>Order #</th>
                                    <th>Company name</th>
                                    <th>status</th>
                                    <th>Total</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <tr class="cell-1">
                                    <td class="text-center">
                                        -- <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div> -
                                        <img src="assets/img/Boat-160W-Partypal-speaker.jpg" alt="">
                                    </td>
                                    <td>#SO-13487</td>
                                    <td>Gasper Antunes</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>$2674.00</td>
                                    <td>Today</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        -- <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div> --
                                        <img src="assets/img/Samsung-S24.jpeg" alt="">
                                    </td>
                                    <td>#SO-13453</td>
                                    <td>Aartsen van</td>
                                    <td><span class="badge badge-info">Confirmed</span></td>
                                    <td>$3454.00</td>
                                    <td>Yesterday</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        -- <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div> --
                                        <img src="assets/img/iPad-Air-5thGen-WiFi-Starlight-(FP).jpg" alt="">
                                    </td>
                                    <td>#SO-13498</td>
                                    <td>Trashes Habard</td>
                                    <td><span class="badge badge-danger">Partially shipped</span></td>
                                    <td>$6274.00</td>
                                    <td>May 12,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        -- <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div> --
                                        <img src="assets/img/earbud3.jpeg" alt="">
                                    </td>
                                    <td>#SO-16499</td>
                                    <td>Samban Hubart</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>$6375.00</td>
                                    <td>May 11,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container mt-5">
    <div class="row">
        <!-- Order Summary Section -->
        <div class="col-md-6">
            <h3>Order Details</h3>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Order ID:</span>
                    <strong>#123456</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Order Date:</span>
                    <strong>September 28, 2024</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Status:</span>
                    <span class="badge badge-success">Shipped</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Payment Method:</span>
                    <strong>Credit Card</strong>
                </li>
            </ul>
        </div>

        <!-- Customer Info Section -->
        <div class="col-md-6">
            <h3>Customer Information</h3>
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <strong>Name:</strong> John Doe
                </li>
                <li class="list-group-item">
                    <strong>Email:</strong> john@example.com
                </li>
                <li class="list-group-item">
                    <strong>Phone:</strong> (123) 456-7890
                </li>
                <li class="list-group-item">
                    <strong>Shipping Address:</strong> <br> 123 Main Street, Suite 500, City, Country
                </li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <h3>Items Ordered</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 1" class="img-fluid"></td>
                            <td>Product 1</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 2" class="img-fluid"></td>
                            <td>Product 2</td>
                            <td>1</td>
                            <td>$15.00</td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 3" class="img-fluid"></td>
                            <td>Product 3</td>
                            <td>3</td>
                            <td>$10.00</td>
                            <td>$30.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" class="text-right">Subtotal:</th>
                            <th>$85.00</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-right">Shipping:</th>
                            <th>$5.00</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-right">Total:</th>
                            <th>$90.00</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    $(document).ready(function(){

        $('.toggle-btn').click(function() {
        $(this).toggleClass('active').siblings().removeClass('active');
        });
        
        });
</script> -->
<!----- 2nd type ------>
    <!-- <div class="container bootdey pb-5">
        <div class="panel panel-default panel-order">
            <div class="panel-heading">
                <strong>Order history</strong>
                <div class="btn-group pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Filter history <i class="fa fa-filter"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Approved orders</a></li>
                            <li><a href="#">Pending orders</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail" /></div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right float-right">
                                    <label class="label label-danger">rejected</label>
                                </div>
                                <span><strong>Order name</strong></span> <span class="label label-info">group name</span><br />
                                Quantity : 2, cost: $323.13 <br />
                                <a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok" href="#" title="View"></a>
                                <a data-placement="top" class="btn btn-danger btn-xs glyphicon glyphicon-trash" href="#" title="Danger"></a>
                                <a data-placement="top" class="btn btn-info btn-xs glyphicon glyphicon-usd" href="#" title="Danger"></a>
                            </div>
                            <div class="col-md-12">order made on: 05/31/2014 by <a href="#">Jane Doe </a></div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_1.jpg" class="media-object img-thumbnail" /></div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right float-right">
                                    <label class="label label-info">pending</label>
                                </div>
                                <span><strong>Order name</strong></span> <span class="label label-info">group name</span><br />
                                Quantity : 12, cost: $12623.13<br />
                                <a class="btn btn-success" href="#" title="View"></a>
                                <a class="btn btn-danger" href="#" title="Danger"></a>
                                <a class="btn btn-info" href="#" title="Danger"></a>
                            </div>
                            <div class="col-md-12">order made on: 06/12/2014 by <a href="#">Jane Doe </a></div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_3.jpg" class="media-object img-thumbnail" /></div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right float-right">
                                    <label class="label label-success">Approved</label>
                                </div>
                                <span><strong>Order name</strong></span> <span class="label label-info">group name</span><br />
                                Quantity : 4, cost: $523.13<br />
                                <a class="btn btn-success" href="#" title="View"></a>
                                <a class="btn btn-danger" href="#" title="Danger"></a>
                                <a class="btn btn-info" href="#" title="Danger"></a>
                            </div>
                            <div class="col-md-12">order made on: 06/20/2014 by <a href="#">Jane Doe</a></div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-1"><img src="https://bootdey.com/img/Content/user_2.jpg" class="media-object img-thumbnail" /></div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right float-right">
                                    <label class="label label-info">pending</label>
                                </div>
                                <span><strong>Order name</strong></span> <span class="label label-info">group name</span><br />
                                Quantity : 4, cost: $523.13<br />
                                <a class="btn btn-success" href="#" title="View"></a>
                                <a class="btn btn-danger" href="#" title="Danger"></a>
                                <a class="btn btn-info" href="#" title="Danger"></a>
                            </div>
                            <div class="col-md-12">order made on: 06/20/2014 by <a href="#">Jane Doe</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <-- <div class="panel-footer">Put here some note for example: bootdey si a gallery of free bootstrap snippets bootdeys</div> --
        </div>
    </div> -->

    


        <!---------------Footer------------>
        <div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-heading">GadgetGalaxy</h4>
                        <div class="footer-underline"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Quick Links</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Home</a></div>
                        <div class="mb-2"><a href="" class="text-white">About Us</a></div>

                        <div class="mb-2"><a href="" class="text-white">Contact Us</a></div>
                        <div class="mb-2"><a href="" class="text-white">Blogs</a></div>
                        <div class="mb-2"><a href="" class="text-white">Sitemaps</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Shop Now</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Collections</a></div>
                        <div class="mb-2"><a href="" class="text-white">Trending Products</a></div>
                        <div class="mb-2"><a href="" class="text-white">New Arrivals Products</a></div>
                        <div class="mb-2"><a href="" class="text-white">Featured Products</a></div>
                        <div class="mb-2"><a href="" class="text-white">Cart</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Reach Us</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2">
                            <p>
                                <i class="fa-solid fa-location-dot"></i> 
                            </p>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-phone"></i> +91 888-XXX-XXXX
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-envelope"></i> <!--fundaofwebit@gmail.com-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class=""> &copy;  Ecommerce. All rights reserved.</p><!--2022 - Funda of Web IT - -->
                    </div>
                    <div class="col-md-4">
                        <div class="social-media">
                            Get Connected:
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
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
