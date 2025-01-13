  <?php
    include('headerlink.php');
    include('header.php');

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
                      <div class="scrollable-container">
                        <?php
                          $alldata=getCatagory();
                          if (!empty($alldata)) {
                            foreach ($alldata as $data) {
                        ?>
                             <div class="items position-relative">
                                <a href="product.php?pid=<?php echo $data['id']; ?>">
                                    <p style="line-break: anywhere;"><?php echo $data['name'] ?></p>
                                    <img src="catagory_images/<?php echo $data['image']; ?>" alt="1.png">
                                </a>
                             </div>
                             <?php
                             }
                             } else {
                              echo "<div class='items position-relative'>Record not found....</div>";
                              }
                              ?>


                      </div>
                     </div>
             </div>
         </div>
  </div>
</div>
<!-- End Category -->



    <!-- New Arrivals -->
     <div id="new-arrival">
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
              <span class="discount"><?php echo $alldata['discount']; ?>% OFF</span>
            </a>
            <!--Wishlist-->
            <a href="wishlist_action.php?u_id=<?php echo  $alldata['p_id'];?> &pid=<?php echo $alldata['p_id']; ?>">
              <div class="oUss6M PbRKsR">
                  <div class="wishlist_icon">
                      <div class="x1UMqG">
                          <i class="fa fa-heart"></i>
                      </div>
                  </div>
              </div>
            </a>
            <!--Wishlist End-->
          </div>
          <div class="product-info">
            <span></span><!--Catagory Name-->
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>"><?php echo $alldata['product_name']; ?></a><!--, Mobile Phone--><!--, 128 GB, 8 GB RAM, Amber Yellow ...-->
            
            <div class="_5OesEi afFzxY">
              <span class="Y1HWO0 mr-2">
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
                  
                  ₹<?php echo $alldata['price']; ?>
                </div>
                <div class="yRaY8j">
                  
                  ₹<?php echo $alldata['mrp']; ?>
                </div>
               
              </div>
            </div>
          </div>
    
        </div>
        <?php

            }
          }else{
            echo "Record not found....";
          }
        
          ?>
      </div>
    </section>
    </div>

    <!-- Featured -->
  <div id="featured">
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
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>" class="product-thumb">
              <img src="product_images/<?php echo $alldata['image']; ?>" alt="" />
              <span class="discount"><?php echo $alldata['discount'];  ?>% OFF</span>
            </a>
            <a href="wishlist_action.php?u_id=<?php echo  $alldata['p_id'];?> &pid=<?php echo $alldata['p_id']; ?>">
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
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>"><?php echo $alldata['product_name']; ?></a><!--, Mobile Phone-->

            <div class="_5OesEi afFzxY">
              <span class="Y1HWO0 mr-2">
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

                  ₹<?php echo $alldata['price']; ?>
                </div>
                <div class="yRaY8j">

                  ₹<?php echo $alldata['mrp']; ?>
                </div>

              </div>
            </div>
          </div>

        </div>
        <?php

            }
          }else{
            echo "Record not found....";
          }
        
          ?>
      </div>
    </section>
  </div>

    <!-- Trending Products -->
  <div id="trending">
    <section class="section new-arrival">
      <div class="title">
        <h1>Trending Products</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">
        <!--Product 1-->
        <?php
          $data=getAllTrendingProduct();
            if(!empty($data)){
            foreach($data as $alldata){
        ?>
        <div class="product-item">
          <div class="overlay">
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>" class="product-thumb">
              <img src="product_images/<?php echo $alldata['image']; ?>" alt="" />
              <span class="discount"><?php echo $alldata['discount'];  ?>% OFF</span>
            </a>
            <a href="wishlist_action.php?u_id=<?php echo  $alldata['p_id'];?> &pid=<?php echo $alldata['p_id']; ?>">
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
            <a href="productDetails.php?productid=<?php echo $alldata['p_id']; ?>"><?php echo $alldata['product_name']; ?></a><!--, Mobile Phone-->
            
            <div class="_5OesEi afFzxY">
              <span class="Y1HWO0 mr-2">
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

                  ₹<?php echo $alldata['price']; ?>
                </div>
                <div class="yRaY8j">
                  
                  ₹<?php echo $alldata['mrp']; ?>
                </div>

              </div>
            </div>
          </div>

        </div>
        <?php

            }
          }else{
            echo "Record not found....";
          }
        
          ?>
      </div>
    </section>
  </div>


<?php
  include('footer.php');
  include('footerlink.php');
?>