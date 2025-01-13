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
    <title>Filter page</title>
  <style>
    /*---Navbar Start here---*/
    /*.main-navbar{
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
}*/
    /*--------End of Navbar-------------*/
/* style.css */
 .card-img-top {
    height: 200px;
    object-fit: cover;
}
.list-group-item.active a {
    color: white;
    background-color: #007bff;
}



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



  /***************** card heart,addto cart icon ****************/
  /* .PbRKsR {
    position: absolute;
    display: inline-block;
    top: 12px;
    right: 12px;
    cursor: pointer;
}
.oUss6M .wishlist_icon {
    position: relative;
    /* display: -webkit-inline-flex;
    display: -ms-inline-flexbox; *
    display: inline-flex;
}
.x1UMqG {
    /*fill: #c2c2c2;*
    color: #c2c2c2;
}
.slAVV4 .PbRKsR {
    position: absolute;
    display: inline-block;
    top: 12px;
    right: 12px;
    cursor: pointer;
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



        <div class="container-fluid mt-5">
            <h2 class="text-center mb-4">Earbuds Filter Page</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Filters
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Categories</h5>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Audio & Video</a></li>
                                <li class="list-group-item"><a href="#">Headset</a></li>
                                <li class="list-group-item"><a href="#">Earphones</a></li>
                                <li class="list-group-item"><a href="#">Wireless Earphones</a></li>
                                <li class="list-group-item active"><a href="#">True Wireless</a></li>
                            </ul>
    
                            <h4 class="card-title mt-3">Price</h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="minPrice" placeholder="Min"  style="height: 40px;font-size: medium;">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="font-size: 14px;">to</span>
                                    </div>
                                    <input type="number" class="form-control" id="maxPrice" placeholder="Max"  style="height: 40px;font-size: medium;">
                                </div>
                            </div>
    
                            <h4 class="card-title mt-3">Brand</h4>
                            <select class="form-control" style="height: 40px;font-size: medium;">
                                <option value="">All Brands</option>
                                <option value="vivo">Vivo</option>
                                <option value="Boult">Boult</option>
                                <option value="Apple">Apple</option>
                                <option value="boAt">boAt</option>
                                <option value="Realme">Realme</option>
                            </select>
    
                            <h4 class="card-title mt-3">Customer Ratings</h4>
                            <div class="form-group">
                                <select class="form-control"  style="height: 40px;font-size: medium;">
                                    <option value="">All Ratings</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
    
                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="assuredCheckbox">
                                <label class="form-check-label" for="assuredCheckbox">Assured</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <!-- Product Card 1 -->
                        <!--<div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://rukminim1.flixcart.com/image/312/312/k3fhz3k0/headphone/b/h/h/vivo-tws-3e-buds-original-imag9s746wzzt39h.jpeg?q=70" class="card-img-top" alt="Vivo TWS 3e Buds">
                                <div class="card-body">
                                    <h5 class="card-title">Vivo TWS 3e Buds</h5>
                                    <p class="card-text">
                                        Up to 30dB Active Noise Cancellation, 30 Hours Battery Life
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-muted">3.8★</span>
                                        </div>
                                        <div>
                                            <h6 class="text-primary">₹1,899</h6>
                                            <span class="text-muted">₹2,499</span>
                                            <span class="text-success">24% off</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>-->
                        <!-- Product Card 2 -->
                        <!--<div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://rukminim1.flixcart.com/image/312/312/k3fhz3k0/headphone/z/5/x/boult-audio-y1-pro-original-imag9szd83z8n82g.jpeg?q=70" class="card-img-top" alt="Boult Y1 Pro">
                                <div class="card-body">
                                    <h5 class="card-title">Boult Y1 Pro</h5>
                                    <p class="card-text">
                                        With Zen Quad Mic, ENC, 60 Hours Battery, Fast Charging
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-muted">4.1★</span>
                                        </div>
                                        <div>
                                            <h6 class="text-primary">₹1,199</h6>
                                            <span class="text-muted">₹5,999</span>
                                            <span class="text-success">80% off</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>-->
                        <!-- Product Card 3 -->
                        <!--<div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://rukminim1.flixcart.com/image/312/312/k213vow0/headphone/u/r/w/apple-airpods-pro-2nd-generation-original-imag4m434xfgzfh7.jpeg?q=70" class="card-img-top" alt="Apple AirPods Pro">
                                <div class="card-body">
                                    <h5 class="card-title">Apple AirPods Pro</h5>
                                    <p class="card-text">
                                        2nd Generation with MagSafe Case, Active Noise Cancellation
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-muted">4.6★</span>
                                        </div>
                                        <div>
                                            <h6 class="text-primary">₹23,900</h6>
                                            <span class="text-muted">₹24,900</span>
                                            <span class="text-success">4% off</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>-->
                        <!-- Product Card 4 -->
                        <!--<div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://rukminim1.flixcart.com/image/312/312/l2k216w0/headphone/l/f/w/boat-airdopes-161-original-imag5g5d83v2yhx2.jpeg?q=70" class="card-img-top" alt="boAt Airdopes 161">
                                <div class="card-body">
                                    <h5 class="card-title">boAt Airdopes 161</h5>
                                    <p class="card-text">
                                        ASAP Charge & 40 HRS Playback, IPX4 Water Resistant
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-muted">4★</span>
                                        </div>
                                        <div>
                                            <h6 class="text-primary">₹999</h6>
                                            <span class="text-muted">₹2,490</span>
                                            <span class="text-success">59% off</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>-->
                        <!-- More Product Cards -->

                         <!--Product 1-->
                            <div class="product-item">
                                <div class="overlay">
                                <a href="productDetails.html" class="product-thumb">
                                    <img src="assets/img/Havells-Gracia-Alkaline-Water-Purifiers-(FP).jpg" alt="" />
                                    <span class="discount">29% OFF</span>
                                </a>
                                <a href="#">
                                <div class="oUss6M PbRKsR">
                                    <div class="wishlist_icon">
                                        <div class="x1UMqG">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                

                                </div>
                                <div class="product-info">
                                <span>SMARTPHONE</span>
                                <a href="productDetails.html">Havells Gracia Alkaline, 7.5 Litres, 60 Watts, RO + UV Water Purifier ....</a><!--, 8 Stage Purification Technology, Silver and Black-->
                                <!--<h4>$700</h4>-->
                                <div class="_5OesEi afFzxY">
                                    <span class="Y1HWO0 mr-2"><!--mr-2 -->
                                    <div class="XQDdHH">
                                        4.5
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                    </span>
                                    <span class="Wphh3N">(10,969)</span>
                                </div>
                                <div class="DMMoT0">
                                    <div class="hl05eU">
                                    <div class="Nx9bqj">
                                        ₹24,499
                                    </div>
                                    <div class="yRaY8j">
                                        ₹39,499
                                    </div>
                                    <!--<div class="UkUFwK">
                                        <span>56% off</span>
                                    </div>-->
                                    </div>
                                </div>
                                </div>
                                <!-- <ul class="icons">
                                    <li><i class="fa fa-heart"></i></li>
                                    <li><i class="fa fa-search"></i></li>
                                    <li><i class="fa fa-cart"></i></li>
                                </ul> -->
                            </div>
                            <!--Product 2-->
                            <div class="product-item">
                                <div class="overlay">
                                <a href="" class="product-thumb">
                                    <img src="assets/img/iPad-Air-5thGen-WiFi-Starlight-(FP).jpg" alt="" style="width: 100%;">
                                </a>
                                <span class="discount">8% OFF</span>
                                </div>
                    
                                <div class="product-info">
                                <span>EARBUD</span>
                                <a href="">Apple iPad Air 5th Gen 2022 27.69 cm (10.9 inch) Wi-Fi Tablet .....</a><!--, 64 GB, MM9F3HN/A, Starlight-->
                                <!--<h4>$800</h4>-->
                                <div class="_5OesEi afFzxY">
                                    <span class="Y1HWO0 mr-2"><!--mr-2 -->
                                    <div class="XQDdHH">
                                        4.5
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                    </span>
                                    <span class="Wphh3N">(8,969)</span>
                                </div>
                                <div class="DMMoT0">
                                    <div class="hl05eU">
                                    <div class="Nx9bqj">
                                        ₹54,900
                                    </div>
                                    <div class="yRaY8j">
                                        ₹59,900
                                    </div>
                                    <!--<div class="UkUFwK">
                                        <span>56% off</span>
                                    </div>-->
                                    </div>
                                </div>
                    
                                </div>
                                <ul class="icons">
                                <li><i class="bx bx-heart"></i></li>
                                <li><i class="bx bx-search"></i></li>
                                <li><i class="bx bx-cart"></i></li>
                                </ul>
                            </div>
                            <!--Product 3-->
                            <div class="product-item">
                                <div class="overlay">
                                
                                <a href="" class="product-thumb">
                                    <img src="assets/img/Haier-HRS-682KS-Refrigerator-(FP).jpg" alt="" />
                                </a>
                                <span class="discount">33% OFF</span>
                                </div>
                                <div class="product-info">
                                <span>SMARTPHONE</span>
                                <a href="">Haier 602 Litres Side-by-Side Refrigerator with Convertible ....</a><!--Fridge, Black Steel HRS-682KS-->
                                <!--<h4>$150</h4>-->
                                <div class="_5OesEi afFzxY">
                                    <span class="Y1HWO0 mr-2"><!--mr-2 -->
                                    <div class="XQDdHH">
                                        4.6
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                    </span>
                                    <span class="Wphh3N">(5,969)</span>
                                </div>
                                <div class="DMMoT0">
                                    <div class="hl05eU">
                                    <div class="Nx9bqj">
                                        ₹69,990
                                    </div>
                                    <div class="yRaY8j">
                                        ₹1,03,990
                                    </div>
                                    <!--<div class="UkUFwK">
                                        <span>56% off</span>
                                    </div>-->
                                    </div>
                                </div>
                                </div>
                                <ul class="icons">
                                <li><i class="bx bx-heart"></i></li>
                                <li><i class="bx bx-search"></i></li>
                                <li><i class="bx bx-cart"></i></li>
                                </ul>
                            </div>
                            <!--Product 4-->
                            <div class="product-item">
                                <div class="overlay">
                                <a href="" class="product-thumb">
                                    <img src="assets/img/Samsung-MC28H5025VR-(FP).jpg" alt="" />
                                </a>
                                <span class="discount">17% OFF</span>
                                </div>
                                <div class="product-info">
                                <span>EARBUD</span>
                                <a href="">Samsung 28 Litre Convection Microwave Oven with Slim ...</a><!--Fry, Indian Auto Cook menu (MC28H5025VR/TL, Black Delight Red Pattern).-->
                                <!--<h4>$900</h4>-->
                                <div class="_5OesEi afFzxY">
                                    <span class="Y1HWO0 mr-2"><!--mr-2 -->
                                    <div class="XQDdHH">
                                        4.3
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                    </span>
                                    <span class="Wphh3N">(80,969)</span>
                                </div>
                                <div class="DMMoT0">
                                    <div class="hl05eU">
                                    <div class="Nx9bqj">
                                        ₹17,390
                                    </div>
                                    <div class="yRaY8j">
                                        ₹20,990
                                    </div>
                                    <!--<div class="UkUFwK">
                                        <span>56% off</span>
                                    </div>-->
                                    </div>
                                </div>
                                </div>
                                <ul class="icons">
                                <li><i class="bx bx-heart"></i></li>
                                <li><i class="bx bx-search"></i></li>
                                <li><i class="bx bx-cart"></i></li>
                                </ul>
                            </div>

                            <!--Product 5-->
                            <div class="product-item">
                                <div class="overlay">
                                <a href="" class="product-thumb">
                                    <img src="assets/img/tv2.jpeg" alt="" />
                                    <span class="discount">40% OFF</span>
                                </a>
                                </div>
                                <div class="product-info">
                                <span>TELEVISION</span>
                                <a href="">Sony Bravia 139 cm (55 inches) 4K Ultra HD Smart LED Google TV ....</a>
                                <!--<h4>$100</h4>-->
                    
                                <div class="_5OesEi afFzxY">
                                    <span class="Y1HWO0 mr-2"><!--mr-2 -->
                                    <div class="XQDdHH">
                                        4.5
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                    </span>
                                    <span class="Wphh3N">(80,969)</span>
                                </div>
                                <div class="DMMoT0">
                                    <div class="hl05eU">
                                    <div class="Nx9bqj">
                                        ₹59,900
                                    </div>
                                    <div class="yRaY8j">
                                        ₹99,900
                                    </div>
                                    <!--<div class="UkUFwK">
                                        <span>56% off</span>
                                    </div>-->
                                    </div>
                                </div>
                                </div>
                                <ul class="icons">
                                <li><i class="bx bx-heart"></i></li>
                                <li><i class="bx bx-search"></i></li>
                                <li><i class="bx bx-cart"></i></li>
                                </ul>
                            </div>
                            <!--Product 6-->
                            <div class="product-item">
                                <div class="overlay">
                                <a href="" class="product-thumb">
                                    <img src="assets/img/Boat-160W-Partypal-speaker.jpg" alt="" />
                                    <span class="discount">54% OFF</span>
                                </a>
                                </div>
                                <div class="product-info">
                                <span>SPEAKER</span>
                                <a href="">boAt PartyPal 400 160-Watt Bluetooth Wireless Speaker....</a><!--with Mic for karaoke,(Black)-->
                                <!--<h4>$500</h4>-->
                    
                                <div class="_5OesEi afFzxY">
                                    <span class="Y1HWO0 mr-2"><!--mr-2 -->
                                    <div class="XQDdHH">
                                        4.5
                                        <i class="Rza2QY fa fa-star"></i>
                                    </div>
                                    </span>
                                    <span class="Wphh3N">(80,969)</span>
                                </div>
                                <div class="DMMoT0">
                                    <div class="hl05eU">
                                    <div class="Nx9bqj">
                                        ₹15,999
                                    </div>
                                    <div class="yRaY8j">
                                        ₹34,999
                                    </div>
                                    <!--<div class="UkUFwK">
                                        <span>56% off</span>
                                    </div>-->
                                    </div>
                                </div>
                                </div>
                                <ul class="icons">
                                <li><i class="bx bx-heart"></i></li>
                                <li><i class="bx bx-search"></i></li>
                                <li><i class="bx bx-cart"></i></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    


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
