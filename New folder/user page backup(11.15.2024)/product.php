<?php
    include('headerlink.php');
    include('header.php');
    include('user_function.php');
?>

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
            <span>SMARTPHONE</span>
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

<?php
    include('footer.php');
    include('footerlink.php');
?>