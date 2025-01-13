  <?php
    include('headerlink.php');
    include('header.php');
    //include('db1_connection.php');
    include('user_function.php');
//     $query = "SELECT * FROM slider"; // Adjust the query as necessary
// $result = mysqli_query($conn, $query);

// $images = [];
// while ($row = mysqli_fetch_assoc($result)) {
//     $images[] = $row['image'];
// }
  ?>

    <!---------------- Carosoul slider ------------------>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
          <?php
            $data = getAllSlider();
            if (!empty($data)) {
                $isFirst = true; // Initialize a variable to track the first slide
                foreach ($data as $alldata) {
          ?>
                <div class="carousel-item <?php if ($isFirst) { echo 'active'; $isFirst = false; } ?>">
                    <img src="slider_images/<?php echo $alldata['image']; ?>" class="d-block w-100" alt="Slider Image">
                </div>
          <?php
                }
            } else {
                echo "<div class='carousel-item active'>Record not found....</div>";
            }
          ?>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
  </div>



<!------------ End of carusol slider-------------->





<!-- Banner Category -->
<div class="category mt-5">
  <div class="max-width">
         <div class="container-fluid">
             <div class="row">
                     <div class="col-lg-10 offset-lg-1">
                      <span class="font-weight-bold d-block my-3">Top Categories</span>
                      <div class="scrollable-container pb-4">
                        <?php
                          $alldata=getAllCatagory();
                          if (!empty($alldata)) {
                            foreach ($alldata as $data) {
                        ?>
                             <div class="items position-relative">
                                <a href="product.php">
                                    <p><?php echo $data['name'] ?></p>
                                    <img src="catagory_images/<?php echo $data['image']; ?>" alt="1.png">
                                </a>
                             </div>
                             <?php
                             }
                             } else {
                              echo "<div class='items position-relative'>Record not found....</div>";
                              }
                              ?>
                             <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>Earbud</p>
                                     <img src="assets/img/category/13-removebg-preview.jpg" alt="2.png">
                                 </a>
                              </div> -->
                              <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>Refrigerators</p>
                                     <img src="assets/img/category/14.jpg" alt="3.png">
                                 </a>
                              </div> -->
                              <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>AC</p>
                                     <img src="assets/img/category/11.jpg" alt="4.png">
                                 </a>
                              </div> -->
                              <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>Laptop</p>
                                     <img src="assets/img/category/15.jpg" alt="1.png">
                                 </a>
                              </div> -->
                              <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>Speaker</p>
                                     <img src="assets/img/category/17.jpg" alt="1.png">
                                 </a>
                              </div> -->
                              <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>Television</p>
                                     <img src="assets/img/category/18.jpg" alt="1.png">
                                 </a>
                              </div> -->

                              
                              <!-- <div class="items position-relative">
                                <a href="product.html">
                                    <p>Microwave Oven</p>
                                    <img src="assets/img/category/Samsung-MC28M6036CC-MicrowaveOvens-(CP).jpg" alt="1.png">
                                </a>
                             </div> -->

                              <!-- <div class="items position-relative">
                                 <a href="product.html">
                                     <p>Water Purifier</p>
                                     <img src="assets/img/category/21.jpg" alt="1.png">
                                 </a>
                              </div> -->
                            
                            
                              <!-- <div class="items position-relative">
                                <a href="product.html">
                                    <p>Washing Machine</p>
                                    <img src="assets/img/category/19.jpg" alt="1.png">
                                </a>
                             </div> -->

                      </div>
                     </div>
             </div>
         </div>
  </div>
</div>
<!-- End Category -->

<!-------------------------- Categories Section ------------------------->
  
   <!--<section class="section category">
      <div class="cat-center">
        <div class="cat">
          <img src="./images/cat3.jpg" alt="" />
          <div>
            <p>WOMEN'S WEAR</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/cat2.jpg" alt="" />
          <div>
            <p>ACCESSORIES</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/cat1.jpg" alt="" />
          <div>
            <p>MEN'S WEAR</p>
          </div>
        </div>
      </div>
    </section>-->

    <!-- New Arrivals -->
    <section class="section new-arrival">
      <div class="title">
        <h1>NEW ARRIVALS</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">
        <!--Product 1-->
        <?php
          $data=getAllProducts();
            if(!empty($data)){
            foreach($data as $alldata){
        ?>
        <div class="product-item">
          <div class="overlay">
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>" class="product-thumb">
              <img src="product_images/<?php echo $alldata['image']; ?>" alt="" />
              <span class="discount">21% OFF</span>
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
            <span><?php echo $alldata['category'];  ?></span>
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>"><?php echo $alldata['product_name']; ?>, 128 GB, 8 GB RAM, Amber Yellow ...</a><!--, Mobile Phone-->
            <!--<h4>$700</h4>-->
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
                  <!-- ₹62,999 -->
                  ₹<?php echo $alldata['price']; ?>
                </div>
                <div class="yRaY8j">
                  <!-- ₹79,999 -->
                  ₹<?php echo $alldata['mrp']; ?>
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
        <?php

            }
          }else{
            echo "Record not found....";
          }
        
          ?>
      </div>
    </section>


    <!-- Promo -->

    <!--<section class="section banner">
      <div class="left" style="background-image: url('assets/img/shoping-laptop.png');">
        <span class="trend">Trend Product</span>
        <h1>New Collection</h1>
        <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p>
        <a href="#" class="btn btn-1">Discover Now</a>
      </div>
      <div class="right">
        <img src="./images/banner.png" alt="">
      </div>
    </section>-->


  <!-------- Best Deal Section ---------->
        <div class="best-deal-section">
          <div class="max-width">
                <div class="container-fluid">
                      <div class="row">
                              <div class="col-lg-12"><!--10  offset-lg-1-->
                                    <div class="deal-body" style="background-image: url('assets/img/sponcerimg.jpg');background-repeat: no-repeat;background-size: cover; height:474px">
                                        <div>
                                            <!--<span class="text-danger">Hurry Up And Get <span class="font-italic">30%</span> Discount</span>
                                            <p class="deal-title">Deal Of The Week</p>
                                            <p class="deal-short-des">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <a href="product.html" class="buy-btn mt-4">Shop Now</a>-->
                                            <span class="trend">Trend Product</span>
                                            <h1>New Collection</h1>
                                            <!-- <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p> -->
                                            <p>New Arrival Limited Time Offer</p>
                                            <a href="#" class="btn btn-1" style="font-size: 15px;">Discover Now</a>
                                        </div>
                                    </div>
                              </div>
                      </div>
                </div>
          </div>
        </div>
    <!-- End Best Deal Section -->

    <!------------- Promo end --------------->



    <!-- Featured -->
  
    <section class="section new-arrival">
      <div class="title">
        <h1>Featured</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">
        <!--Product 1-->
        <?php
          $data=getAllFeatureProduct();
            if(!empty($data)){
            foreach($data as $alldata){
        ?>

        <div class="product-item">
          <div class="overlay">
            <!-- <a href="productDetails.html" class="product-thumb"> -->
            <a href="productDetails.php?productid=<?php echo $alldata['fp_id']; ?>" class="product-thumb">
            <img src="product_images/<?php echo $alldata['image']; ?>" alt="" />
              <span class="discount">29% OFF</span>
            </a>
          </div>
          <div class="product-info">
            <span><?php echo $alldata['category']; ?></span>
            <!--<a href="productDetails.html">Havells Gracia Alkaline, 7.5 Litres, 60 Watts, RO + UV Water Purifier ....</a>--><!--, 8 Stage Purification Technology, Silver and Black-->
            <a href="productDetails.php?productid=<?php echo $alldata['fp_id']; ?>"><?php echo $alldata['p_name']; ?>
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
                  ₹<?php echo $alldata['price']; ?>
                </div>
                <div class="yRaY8j">
                  ₹<?php echo $alldata['mrp']; ?>
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

        <?php

            }
          }else{
            echo "Record not found....";
          }
        
          ?>
      </div>

    </section>

    <!-- Contact -->
    <!--<section class="section contact bg-dark">
      <div class="row">
        <div class="col">
          <h2>EXCELLENT SUPPORT</h2>
          <p>We love our customers and they can reach us any time
          of day we will be at your service 24/7</p>
          <a href="" class="btn btn-1">Contact</a>
        </div>
        <div class="col">
          <form action="">
            <div>
              <input type="email" placeholder="Email Address">
              <a href="">Send</a>
            </div>
          </form>
        </div>
      </div>
    </section>-->

<?php
  include('footer.php');
  include('footerlink.php');
?>